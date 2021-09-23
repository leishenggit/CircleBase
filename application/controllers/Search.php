<?php
class Search extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// Your own constructor code
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}


    public function quick(){
        $item = trim($this->input->post('item'));
        $assembly = trim($this->input->post('assembly'));
        if(preg_match("/^chr[0-9XY]([0-9])?[-][0-9]+[-][0-9]+$/i", $item)){//genomic region search
            $tmp = explode("-", $item);
            //var_dump($item);exit;
            $chr = $tmp[0];
            $start = $tmp[1];
            $end = $tmp[2];
            $this->region($chr,$start,$end,$item, $assembly);
        }else if(preg_match("/^ecc[0-9]+$/i", $item)){//eccid search
            $this->variant_symbol($item, 'eccid');
        }else{//refGene, knownGene gene symbol search
            $this->variant_symbol($item, 'gene');
        }
    }


    public function batch_search(){
        $search_type = $this->input->post('search-type');
        $cell_type = $this->input->post('cell_type');
        $cell_line = $this->input->post('cell_line');
        $sample_type = $this->input->post('sample_type');
        $library_type = $this->input->post('library_type');
        $tissue = $this->input->post('tissue');
        $search_terms = preg_split("/\r\n/", trim($this->input->post('search-terms')));
        foreach($search_terms as $term) {
            $terms[] = trim($term);
        }
        $search_terms = $terms;
        if(count($search_terms) == 0){
            $this->load->view('header', array("current"=>"search"));
            echo 'Sorry, no result!. please check your input.';
            $this->load->view('footer');
            exit;
        }
        if($search_type == "gene"){
            $sql = "select * from eccDNA_gene where Gene_Name in ?";
            $sql .= $cell_type=='All' ? "" : " and cell_type = '$cell_type'";
            $sql .= $cell_line=='All' ? "" : " and cell_line = '$cell_line'";
            $sql .= $sample_type=='All' ? "" : " and sample_type = '$sample_type'";
            $sql .= $library_type=='All' ? "" : " and library_type = '$library_type'";
            $sql .= $tissue=='All' ? "" : " and tissue = '$tissue'";
            $query = $this->db->query($sql, array($search_terms));
            $data['query'] = $query;
            $data['sql'] = $sql;
            $this->load->view('header');
            $this->load->view('result', $data);
            $this->load->view('footer');
        }else if($search_type == "region"){
            $region = array_shift($search_terms);
            $tmp = explode("-", $region);
            $chr = $tmp[0];
            $start = $tmp[1];
            $end = $tmp[2];
            $sql = "select * from eccDNA_gene where chr_hg19='$chr' and start_hg19 <= $end and end_hg19 >= $start ";
            $sql .= $cell_type=='All' ? "" : " and cell_type = '$cell_type'";
            $sql .= $cell_line=='All' ? "" : " and cell_line = '$cell_line'";
            $sql .= $sample_type=='All' ? "" : " and sample_type = '$sample_type'";
            $sql .= $library_type=='All' ? "" : " and library_type = '$library_type'";
            $sql .= $tissue=='All' ? "" : " and tissue = '$tissue'";
            //next regions
            foreach($search_terms as $region){
                $tmp = explode("-", $region);
                $chr = $tmp[0];
                $start = $tmp[1];
                $end = $tmp[2];
                $sql .= " union select * from eccDNA_gene where chr_hg19='$chr' and start_hg19 <= $end and end_hg19 >= $start";
                $sql .= $cell_type=='All' ? "" : " and cell_type = '$cell_type'";
                $sql .= $cell_line=='All' ? "" : " and cell_line = '$cell_line'";
                $sql .= $sample_type=='All' ? "" : " and sample_type = '$sample_type'";
                $sql .= $library_type=='All' ? "" : " and library_type = '$library_type'";
                $sql .= $tissue=='All' ? "" : " and tissue = '$tissue'";
            }
            $query = $this->db->query($sql);
            $data['query'] = $query;
            $data['sql'] = $sql;
            $this->load->view('header');
            $this->load->view('result', $data);
            $this->load->view('footer');
        }else if($search_type == "region_hg38"){
            $region = array_shift($search_terms);
            $tmp = explode("-", $region);
            $chr = $tmp[0];
            $start = $tmp[1];
            $end = $tmp[2];
            $sql = "select * from eccDNA_gene where chr_hg38='$chr' and start_hg38 <= $end and end_hg38 >= $start ";
            $sql .= $cell_type=='All' ? "" : " and cell_type = '$cell_type'";
            $sql .= $cell_line=='All' ? "" : " and cell_line = '$cell_line'";
            $sql .= $sample_type=='All' ? "" : " and sample_type = '$sample_type'";
            $sql .= $library_type=='All' ? "" : " and library_type = '$library_type'";
            $sql .= $tissue=='All' ? "" : " and tissue = '$tissue'";
            //next regions
            foreach($search_terms as $region){
                $tmp = explode("-", $region);
                $chr = $tmp[0];
                $start = $tmp[1];
                $end = $tmp[2];
                $sql .= " union select * from eccDNA_gene where chr_hg38='$chr' and start_hg38 <= $end and end_hg38 >= $start";
                $sql .= $cell_type=='All' ? "" : " and cell_type = '$cell_type'";
                $sql .= $cell_line=='All' ? "" : " and cell_line = '$cell_line'";
                $sql .= $sample_type=='All' ? "" : " and sample_type = '$sample_type'";
                $sql .= $library_type=='All' ? "" : " and library_type = '$library_type'";
                $sql .= $tissue=='All' ? "" : " and tissue = '$tissue'";
            }
            $query = $this->db->query($sql);
            $data['query'] = $query;
            $data['sql'] = $sql;
            $this->load->view('header');
            $this->load->view('result', $data);
            $this->load->view('footer');
        }else if($search_type == "eccDNA"){
            $sql = "select * from eccDNA_gene where ecc_id in ?";
            $sql .= $cell_type=='All' ? "" : " and cell_type = '$cell_type'";
            $sql .= $cell_line=='All' ? "" : " and cell_line = '$cell_line'";
            $sql .= $sample_type=='All' ? "" : " and sample_type = '$sample_type'";
            $sql .= $library_type=='All' ? "" : " and library_type = '$library_type'";
            $sql .= $tissue=='All' ? "" : " and tissue = '$tissue'";
            $query = $this->db->query($sql, array($search_terms));
            $data['query'] = $query;
            $data['sql'] = $sql;
            $this->load->view('header');
            $this->load->view('result', $data);
            $this->load->view('footer');
        }else if($search_type == "ncbi_gene_id"){
            $sql = "select * from eccDNA_gene where Entrez_ID in ?";
            $sql .= $cell_type=='All' ? "" : " and cell_type = '$cell_type'";
            $sql .= $cell_line=='All' ? "" : " and cell_line = '$cell_line'";
            $sql .= $sample_type=='All' ? "" : " and sample_type = '$sample_type'";
            $sql .= $library_type=='All' ? "" : " and library_type = '$library_type'";
            $sql .= $tissue=='All' ? "" : " and tissue = '$tissue'";
            $query = $this->db->query($sql, array($search_terms));
            $data['query'] = $query;
            $data['sql'] = $sql;
            $this->load->view('header');
            $this->load->view('result', $data);
            $this->load->view('footer');
        }else if($search_type == "ensembl_gene_id"){
            $sql = "select * from eccDNA_gene where Nearest_Ensembl_gene in ?";
            $sql .= $cell_type=='All' ? "" : " and cell_type = '$cell_type'";
            $sql .= $cell_line=='All' ? "" : " and cell_line = '$cell_line'";
            $sql .= $sample_type=='All' ? "" : " and sample_type = '$sample_type'";
            $sql .= $library_type=='All' ? "" : " and library_type = '$library_type'";
            $sql .= $tissue=='All' ? "" : " and tissue = '$tissue'";
            $query = $this->db->query($sql, array($search_terms));
            $data['query'] = $query;
            $data['sql'] = $sql;
            $this->load->view('header');
            $this->load->view('result', $data);
            $this->load->view('footer');
        }else{
            exit(500);
        }
    }



    public function region($chr,$start,$end,$item,$assembly){
        if($assembly == 'hg19')
            $sql = "select * from eccDNA_gene where chr_hg19='$chr' and start_hg19 <= $end and end_hg19 >= $start";
        else
            $sql = "select * from eccDNA_gene where chr_hg38='$chr' and start_hg38 <= $end and end_hg38 >= $start";
        $query = $this->db->query($sql);
        $data['query'] = $query;
        $data['sql'] = $sql;
        $data['item'] = $item;
        $this->load->view('header');
        $this->load->view('result', $data);
        $this->load->view('footer');
    }


    public function variant_symbol($item, $type){
        $symbol = trim($item);
        if($type == 'eccid'){
            $sql = "select * from eccDNA_gene where ecc_id = ?";
        }else{
            $sql = "select * from eccDNA_gene where Gene_Name = ?";
        }
        $query = $this->db->query($sql,array($symbol));
        $data['query'] = $query;
        $data['sql'] = $sql;
        $data['item'] = $item;
        $this->load->view('header');
        $this->load->view('result', $data);
        $this->load->view('footer');
    }


}
?>