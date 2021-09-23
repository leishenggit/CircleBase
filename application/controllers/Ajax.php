<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // Your own constructor code
        $this->load->helper(array('form', 'url', 'file'));
         $this->load->dbutil();//加载数据库工具类
        $this->load->database();//connect to mysql
        ini_set ('memory_limit', '1G');
    }


    public function detail($eccDNA_id){
        $sql = "select * from eccDNA_gene where ecc_id = ?";
        $query = $this->db->query($sql, array($eccDNA_id));
        $row = $query->row_array();
        if (!isset($row)){
            $this->load->view('header', array("current"=>"search"));
            echo 'Sorry, no result!. please check your input.';
            $this->load->view('footer');
            exit;
        }
        $data['eccDNA_id'] = $eccDNA_id;
        $chr = $row['chr_hg19'];
        $start = $row['start_hg19'];
        $end = $row['end_hg19'];
        $data['region']  = $chr.":".$start.":".$end;
        $data['hgnc_symbol'] = $row['Gene_Name'];
        //get data for some tables
        $tables = array('Regulatory_element_dbSUPER', 'Regulatory_element_EnhancerAtlas', 'Regulatory_element_SEA', 'Regulatory_element_SEdb','Regulatory_element_ChromHMM',
                        'Targeting_genes_GeneHancer', 'Targeting_genes_JEME','Targeting_genes_VARAdb', 
                        'Epigenetic_regulation_TFBS_HM', 'Epigenetic_regulation_HM_ENCODE', 'Epigenetic_regulation_HM_RoadMap',
                       'Chromatin_access_ATACdb','Chromatin_access_Cistrome', 'Chromatin_access_TCGA_ATAC', 'Chromatin_access_ENCODE_DHS');
        foreach($tables as $table){
            $sql = "select * from $table where chromosome='$chr' and start_position < $end and end_position > $start";
            #$sql = "select * from $table where chromosome='$chr' and (start_position between $start and $end OR end_position between $start and $end OR (start_position < $start and end_position > $end))";
            $data[$table] = $sql;
        }
        $tables = array('Chromatin_interaction_EpiTensor', 'Chromatin_interaction_4DGenome','Chromatin_interaction_ENCODE');
        foreach($tables as $table){
            $sql = "select * from $table where chromosome='$chr' and chromosome_1 = '$chr' and (start_position < $end and end_position > $start OR start_position_1 < $end and end_position_1 > $start)";
            $data[$table] = $sql;
        }
        //genetic variants info
        $tables = array('Gene4Denovo', 'dbSNP', 'GTEx_eQTLs','GWAS_Catalog', 'GWASdb','variants','PancanQTL', 'gnomad_exomes');
        foreach($tables as $table){
            $end_1 = $end-1;
            $sql = "select * from $table where chromosome='$chr' and start_position between $start and $end_1";
            $data[$table] = $sql;
        }
        //response to front-end
        $this->load->view('header');
        $this->load->view('detail', $data);
        $this->load->view('footer');
        exec("mkdir assets/circosJS/biocircos/$eccDNA_id");
    }


    public function table(){
        $eccdna = $_POST['eccDNA'];
        //get data for all tables
        $sql = $_POST['sql'];
        $table = $_POST['table'];
        $html_page = $table.".php";
        $query = $this->db->query($sql);
        $data['query'] = $query;
        //below code is prepare biocircos data
        $res_file = "assets/circosJS/biocircos/$eccdna/$table.txt";
        if(! file_exists($res_file)){
            $myfile = fopen($res_file, "w");
            if(! $myfile){
                $response['info'] = 'Unable to open the file';
                $response['flag'] = 'fail';
                exit (json_encode($response));
            }
            foreach ($query->result_array() as $row){
                fwrite($myfile, implode("\t", $row)."\n");
            }
            fclose($myfile);
        }
        //response to front-end
        $this->load->view('tables/'.$html_page, $data);
    }



    public function assoc_unique(&$arr, $key) {
        $rAr = array(); 
        for($i=0; $i<count($arr); $i++) 
            if( !isset($rAr[$arr[$i][$key]]) ) 
                $rAr[$arr[$i][$key]] = $arr[$i]; 
        $arr = array_values($rAr); 
    }


    public function network(){
        $eccdna = $_POST['eccDNA'];
        $dir = "assets/circosJS/network/$eccdna";
        exec("mkdir $dir");
        $sql = "select * from  network where eccdna = ?";
        $query = $this->db->query($sql, array($eccdna)); #search the eccdna
        $genes = array();
        foreach ($query->result_array() as $row) array_push($genes, $row['gene']); #get genes regulated by this eccDNA
        $data['gene'] = $genes;
        $sql = "select * from network where gene in ?";
        $query = $this->db->query($sql, array($genes)); //生成查询结果对象
        if(! $query){
            $data['info'] = 'No target gene';
            $data['nodes'] = array();
            $data['edges'] = array();
            exec("rm -rf $dir");
            exit (json_encode($data));
        }
        //将查询结果直接写入文件
        $delimiter = "\t";
        $newline = "\r\n";
        $enclosure = '';
        //查询结果生成 CSV 格式，第一个参数必须是查询的结果对象
        //第二、三、四个参数分别为分隔符、换行符和每个字段包围字符，默认情况下，分隔符为逗号，换行符为 "n",可以省略
        $res = $this->dbutil->csv_from_result($query, $delimiter, $newline, $enclosure);
        if ( ! write_file("$dir/test.csv", $res) ){//向指定文件中写入数据，如果文件不存在，则创建该文件。
            $data['info'] = 'Unable to write the file';
            $data['nodes'] = array();
            $data['edges'] = array();
            exec("rm -rf $dir");
            exit (json_encode($data));
        }
        //执行 PageRank 打分
        exec("assets/scripts/page_rank.py -d --head $dir/test.csv", $page_rank, $code);
        #exec("which python 2>&1", $result, $code);
        $data['code'] = $code;
        foreach($page_rank as $line) $rows[] = explode(';', $line);#get all rows
        $data['rows'] = $rows;
        if($code == 0 && count($rows) > 0){
            foreach($rows as $row){
                if($row[0] == $eccdna){
                    $nodes[] = array('name'=>$row[0], 'type'=>'mutation', 'page_rank'=>$row[4]);
                    $nodes[] = array('name'=>$row[1], 'type'=>'gene', 'page_rank'=>$row[5]);
                }
            }
            $this->assoc_unique($nodes, 'name');#remove duplicate
            for($i=1; $i < count($nodes); $i++) 
                $edges[] = array('source'=>0, 'target'=>$i); #get all edges
            $data['nodes'] = $nodes;
            $data['edges'] = $edges;
            $data['info'] = 'page_rank script success';
        }else{
            $data['nodes'] = array();
            $data['edges'] = array();
            //exec("rm -rf $dir");
            $data['info'] = 'page_rank script fail';
        }
        echo json_encode($data);
    }


    public function  enrichment(){
        $eccdna = $_POST['eccDNA'];
        $data['eccdna'] = $eccdna;
        $dir = "assets/circosJS/enrichment/$eccdna";
        //query target gene and do enrichment analysis
        if(!is_dir($dir)){
            exec("mkdir $dir");
            $sql = "select * from  network where eccdna = ?";
            $query = $this->db->query($sql, array($eccdna)); #search the eccdna
            //将查询结果直接写入文件
            $myfile = fopen("$dir/eccdna_gene.txt", "w");
            if(! $myfile){
                $response['info'] = 'Unable to open the file';
                $response['flag'] = 'fail';
                exec("rm -rf $dir");
                exit (json_encode($response));
            }
            foreach ($query->result_array() as $row){
                fwrite($myfile, implode("\t", $row)."\n");
            }
            fclose($myfile);
            //运行富集分析脚本
            exec("/data1/anaconda3/envs/clusterprofiler/bin/Rscript assets/scripts/enricher.R eccdna_gene.txt $dir", $res, $code);
            if($code != 0){
                $data['info'] = 'running clusterProfiler failed';
                $data['code'] = $code;
                $data['flag'] = 'fail';
                //exec("rm -rf $dir");
                exit (json_encode($data));
            }
        }
        //generate html page
        if(file_exists("$dir/GO-enrich.BP.png")){
            $data['enricherGO_BP'] = "$dir/GO-enrich.BP.png";
            $data['enricherGO_BP_csv'] = "$dir/GO-enrich.BP.csv";
            $data['enricherGO_BP_pdf'] = "$dir/GO-enrich.BP.pdf";
        }
        if(file_exists("$dir/GO-enrich.MF.png")){
            $data['enricherGO_MF'] = "$dir/GO-enrich.MF.png";
            $data['enricherGO_MF_csv'] = "$dir/GO-enrich.MF.csv";
            $data['enricherGO_MF_pdf'] = "$dir/GO-enrich.MF.pdf";
        }
        if(file_exists("$dir/GO-enrich.CC.png")){
            $data['enricherGO_CC'] = "$dir/GO-enrich.CC.png";
            $data['enricherGO_CC_csv'] ="$dir/GO-enrich.CC.csv";
            $data['enricherGO_CC_pdf'] ="$dir/GO-enrich.CC.pdf";
        }
        if(file_exists("$dir/KEGG-pathway-enrich.png")){
            $data['enricherKEGG_pathway_csv'] = "$dir/KEGG-pathway-enrich.csv";
            $data['enricherKEGG_pathway'] = "$dir/KEGG-pathway-enrich.png";
            $data['enricherKEGG_pathway_pdf'] = "$dir/KEGG-pathway-enrich.pdf";
        }
        $html_string = $this->load->view('tables/enrichment', $data, TRUE);
        $response['html'] = $html_string;
        $response['flag'] = 'success';
        echo (json_encode($response));
    }



    public function biocircos(){
        $region = $_POST['eccDNA_region'];
        $eccdna = $_POST['eccDNA'];
        $circos_type = $_POST['circos_type'];
        $tables_para = $_POST['tables'];
        //$tissue = $_POST['tissue'];
        //make sure table sql query done by function table() in this class
        foreach($tables_para as $table){
            while( ! file_exists("assets/circosJS/biocircos/$eccdna/$table.txt") ){
                sleep(3);
            }
        }
        //test file exists
        foreach($tables_para as $table){
            exec("wc -l assets/circosJS/biocircos/$eccdna/$table.txt", $res, $code);
            if( $code == 0 ){
                $tmp = preg_split("/[\s]+/", $res[0]);
                unset($res);
                if( (int)$tmp[0] > 0) $tables[] = $table;
            }else{
                $response['flag'] = 'fail';
                $response['res'] = $res;
                $response['info'] = "cmd exec failed";
                exit(json_encode($response));
            }
        }
        
        //$response['flag'] = 'fail';
        //$response['circos_type'] = $circos_type;
        //$response['table'] = $tables;
        //$response['info'] = 'no table file exist';
        //exit(json_encode($response));
        
        if(! isset($tables)){
            $response['flag'] = 'fail';
            $response['circos_type'] = $circos_type;
            $response['info'] = 'No data available';
            exit(json_encode($response));
        }
        //data source
        $basename = implode(".", $tables);
        $html_src = "assets/circosJS/biocircos/$eccdna/$basename.circlebase.html";
        if(file_exists($html_src)){
            $response['flag'] = 'success';
            $response['html_src'] = "<br><br><iframe frameborder='0' src='".$html_src."' height='700' width='100%'></iframe>";
            exit(json_encode($response));
        }
        $tmp = explode(":", $region);
        $chr = $tmp[0];
        $start = $tmp[1];
        $end = $tmp[2];
        //get min and max position
        $cmd = "assets/scripts/get_biocircos_position.py --min_pos $start --max_pos $end ";
        foreach($tables as $table){
            $cmd .= " --$table assets/circosJS/biocircos/$eccdna/$table.txt";
        }
        $cmd .= " --out_f assets/circosJS/biocircos/$eccdna/$basename.min_max_pos.txt";
        exec($cmd, $res, $code);
        if($code != 0){
            $response['flag'] = 'fail';
            $response['res'] = $res;
            $response["code"] = $code;
            $response["cmd"] = $cmd;
            $response['info'] = "cmd exec failed";
            $response["hint"] = "runing get_biocircos_position.py failed";
            exit(json_encode($response));
        }
        //set data for circos modules
        $js_src = "assets/circosJS/biocircos/$eccdna/$basename.circlebase.js";
        $region_file = "assets/circosJS/biocircos/$eccdna/$basename.min_max_pos.txt";
        if($circos_type == "ARC"){
            $innerRadius = 120;
            $outerRadius = 135;
            foreach($tables as $table){
                exec("assets/scripts/circos.sh $table.txt assets/circosJS/biocircos/$eccdna/$table.txt $js_src $region_file $innerRadius $outerRadius", $res, $code);
                if($code != 0){
                    $response['flag'] = 'fail';
                    $response[$table] = $res;
                    $response[$table."_code"] = $code;
                    $response["hint"] = "runing circos.sh for tables failed";
                    $response['info'] = "cmd exec failed";
                    exit(json_encode($response));
                }
                $innerRadius += 18;
                $outerRadius += 18;
            }
        }else if($circos_type == "LINK"){
            $innerRadius = 140;
            $outerRadius = 140;
            foreach($tables as $table){
                exec("assets/scripts/circos.sh $table.txt assets/circosJS/biocircos/$eccdna/$table.txt $js_src $region_file $innerRadius $outerRadius", $res, $code);
                if($code != 0){
                    $response['flag'] = 'fail';
                    $response[$table] = $res;
                    $response[$table."_code"] = $code;
                    $response["hint"] = "runing circos.sh for tables failed";
                    $response['info'] = "cmd exec failed";
                    exit(json_encode($response));
                }
            }
            $outerRadius = 150;
        }else if($circos_type == "SNP"){
            $innerRadius = 60;
            $outerRadius = 80;
            foreach($tables as $table){
                exec("assets/scripts/circos.sh $table.txt assets/circosJS/biocircos/$eccdna/$table.txt $js_src $region_file $innerRadius $outerRadius", $res, $code);
                if($code != 0){
                    $response['flag'] = 'fail';
                    $response[$table] = $res;
                    $response[$table."_code"] = $code;
                    $response["hint"] = "runing circos.sh for tables failed";
                    $response['info'] = "cmd exec failed";
                    exit(json_encode($response));
                }
                $innerRadius += 22;
                $outerRadius += 22;
            }
        }
        //generate last html page
        $tracks = implode(",", $tables);
        $html_src = "assets/circosJS/biocircos/$eccdna/$basename.circlebase.html";
        exec("assets/scripts/circos.sh circlebase.html $chr $js_src $region_file $tracks $eccdna $start $end $html_src $outerRadius", $res, $code);
        if($code != 0){
            $response['flag'] = 'fail';
            $response["hint"] = "runing circos.sh to generate html failed";
            $response['info'] = "cmd exec failed";
            exit(json_encode($response));
        }
        //return 
        $response['flag'] = 'success';
        $response['html_src'] = "<br><br><iframe frameborder='0' src='".$html_src."' height='700' width='100%'></iframe>";
        echo json_encode($response);
    }


    public function eccdna_score(){
        $eccdna = $_POST['eccDNA'];
        $sql = "select * from  hits_stat where eccdna = ?";
        $query = $this->db->query($sql, array($eccdna)); #search the eccdna
        foreach ($query->result() as $row){
            $hits[] = $row;
        }
        $sql = "select * from  eccDNA_score where eccdna = ?";
        $query = $this->db->query($sql, array($eccdna)); #search the eccdna
        foreach ($query->result() as $row){
            $score[] = $row;
        }
        $data['hits'] = $hits;
        $data['score'] = $score;
        echo json_encode($data);
    }


}
