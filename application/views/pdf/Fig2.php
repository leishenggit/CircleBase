<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
    <title>OncoVar</title>
	<base href="<?php  echo base_url();?>"/>
	<link rel="shortcut icon" type="image/x-icon" href="resource/img/favicon.ico">
    <!-- Bootstrap -->
    <link href="resource/css/bootstrap.min.css" rel="stylesheet">
    <link href="resource/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="resource/css/custom.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

<div class="container-fluid" style="margin:60px 100px;">
<table class="table table-striped table-hover table-bordered table-condensed dataTable no-footer" id="example" aria-describedby="example_info" role="grid" style="width: 1540px;">
	<thead><tr class="success" role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 58px;">Details</th><th id="Location" class="sorting_disabled" rowspan="1" colspan="1" style="width: 193px;">Location</th><th id="Ref" class="sorting_disabled" rowspan="1" colspan="1" style="width: 31px;">Ref</th><th id="Alt" class="sorting_disabled" rowspan="1" colspan="1" style="width: 26px;">Alt</th><th id="Gene_symbol" class="sorting_disabled" rowspan="1" colspan="1" style="width: 63px;">Gene</th><th id="Effect" class="sorting_disabled" rowspan="1" colspan="1" style="width: 199px;">Effect</th><th id="AA_change" class="sorting_disabled" rowspan="1" colspan="1" style="width: 199px;">Amino acids change</th><th id="Deleterious_vs_all_algorithms" class="sorting_disabled" rowspan="1" colspan="1" style="width: 145px;">D:A algorithms <span data-toggle="tooltip" title="Number of algorithms predicted to be deleterious : total in silico algorithms" class="glyphicon glyphicon-question-sign"></span></th><th id="Damaging_score" class="sorting_disabled" rowspan="1" colspan="1" style="width: 153px;">damaging score <span data-toggle="tooltip" title="Proportion of algorithms predicted to be deleterious (damaging score of loss-of-function variant is deemed to be 1)" class="glyphicon glyphicon-question-sign"></span></th><th id="Extreme" class="sorting_disabled" rowspan="1" colspan="1" style="width: 92px;">Extreme <span data-toggle="tooltip" title="The loss-of-function and damaging (damaging score greater than 0.5) nonsynonymous with allele frequency less than 0.0001 are regard as extreme variants" class="glyphicon glyphicon-question-sign"></span></th><th id="gnomAD_exome_ALL" class="sorting_disabled" rowspan="1" colspan="1" style="width: 96px;">gnomAD <span data-toggle="tooltip" title="Allele frequency in gnomAD exome ALL" class="glyphicon glyphicon-question-sign"></span></th></tr></thead>
<tbody><tr role="row" class="odd"><td><button type="button" class="btn btn-success details-control"><span class="glyphicon glyphicon-minus"></span></button></td><td><a href="http://genome.ucsc.edu/cgi-bin/hgTracks?db=hg19&amp;position=chr2:166165261-166165261" target="_blank">chr2:166165261-166165261</a></td><td><p class="text_overflow" data-toggle="tooltip" title="" data-original-title="C">C</p></td><td><p class="text_overflow" data-toggle="tooltip" title="T">T</p></td><td><a href="search/gene/symbol/SCN2A" target="_blank">SCN2A <span class="glyphicon glyphicon-new-window"></span></a></td><td><p class="text_overflow"><a href="javascript:void(0)" class="aa-info-switch"><span class="glyphicon glyphicon-plus"></span></a> <span style="color:red" data-toggle="tooltip" title="based on RefSeq gene annotation">nonsynonymous</span> <span style="color:blue" data-toggle="tooltip" title="based on Ensembl gene annotation">nonsynonymous</span> <span style="color:green" data-toggle="tooltip" title="based on UCSC known gene annotation">nonsynonymous</span> <span style="color:purple" data-toggle="tooltip" title="based on CCDS gene annotation">nonsynonymous</span></p></td><td><p class="text_overflow"><a href="javascript:void(0)" class="aa-info-switch"><span class="glyphicon glyphicon-plus"></span></a> <span style="color:red" data-toggle="tooltip" title="based on RefSeq gene annotation">SCN2A:NM_001040143:exon4:c.562C&gt;T:p.R188W SCN2A:NM_001040142:exon5:c.562C&gt;T:p.R188W SCN2A:NM_021007:exon5:c.562C&gt;T:p.R188W</span> <span style="color:blue" data-toggle="tooltip" title="based on Ensembl gene annotation">ENSG00000136531:ENST00000375427:exon4:c.562C&gt;T:p.R188W ENSG00000136531:ENST00000283256:exon5:c.562C&gt;T:p.R188W ENSG00000136531:ENST00000357398:exon5:c.562C&gt;T:p.R188W ENSG00000136531:ENST00000375437:exon5:c.562C&gt;T:p.R188W ENSG00000136531:ENST00000424833:exon5:c.562C&gt;T:p.R188W</span> <span style="color:green" data-toggle="tooltip" title="based on UCSC known gene annotation">SCN2A:uc002ude.3:exon4:c.562C&gt;T:p.R188W SCN2A:uc002udc.3:exon5:c.562C&gt;T:p.R188W SCN2A:uc002udd.3:exon5:c.562C&gt;T:p.R188W</span> <span style="color:purple" data-toggle="tooltip" title="based on CCDS gene annotation">CCDS33313.1:CCDS33313.1:exon4:c.562C&gt;T:p.R188W CCDS33314.1:CCDS33314.1:exon4:c.562C&gt;T:p.R188W</span></p></td><td>20:23</td><td>0.87</td><td>Y</td><td>2.033e-05</td></tr><tr><td colspan="11"><div class="col-md-4" style="padding:20px;height:500px;overflow:auto;"><table class="table table-bordered table-striped table-condensed"><caption style="font-size:20px;color:rgb(216,164,6);">In silico missense prediction</caption><thead><tr class="warning"><th>algorithm</th><th>score</th><th>prediction</th></tr></thead><tbody><tr><td>SIFT</td><td>0.0</td><td>Damaging</td></tr><tr><td>Polyphen-2_HDIV</td><td>1.0</td><td>Probably_damaging</td></tr><tr><td>Polyphen-2_HVAR</td><td>0.999</td><td>Probably_damaging</td></tr><tr><td>LRT</td><td>0.000</td><td>Deleterious</td></tr><tr><td>MutationTaster</td><td>1.000</td><td>Disease_causing_automatic</td></tr><tr><td>MutationAssessor</td><td>4.2</td><td>High</td></tr><tr><td>FATHMM</td><td>-5.25</td><td>Damaging</td></tr><tr><td>PROVEAN</td><td>-7.63</td><td>Damaging</td></tr><tr><td>VEST3</td><td>0.994</td><td>Damaging</td></tr><tr><td>MetaSVM</td><td>1.041</td><td>Damaging</td></tr><tr><td>MetaLR</td><td>0.983</td><td>Damaging</td></tr><tr><td>M-CAP</td><td>0.557</td><td>Damaging</td></tr><tr><td>CADD</td><td>32</td><td>Damaging</td></tr><tr><td>DANN</td><td>0.999</td><td>Damaging</td></tr><tr><td>FATHMM_MKL</td><td>0.972</td><td>Damaging</td></tr><tr><td>Eigen</td><td>0.866</td><td>Damaging</td></tr><tr><td>GenoCanyon</td><td>0.989</td><td>Tolerable</td></tr><tr><td>fitCons</td><td>0.487</td><td>Tolerable</td></tr><tr><td>GERP++</td><td>5.57</td><td>Conserved</td></tr><tr><td>phyloP</td><td>3.948</td><td>Conserved</td></tr><tr><td>phastCons</td><td>0.998</td><td>Nonconserved</td></tr><tr><td>SiPhy</td><td>19.907</td><td>Conserved</td></tr><tr><td>REVEL</td><td>0.936</td><td>Damaging</td></tr></tbody></table></div><div class="col-md-4" style="padding:20px;height:500px;overflow:auto;"><table class="table table-bordered table-striped table-condensed"><caption style="font-size:20px;color:rgb(216,164,6);">Allele frequency in population</caption><thead><tr class="danger"><th>dataset</th><th>population</th><th>allele frequency</th></tr></thead><tbody><tr><td>gnomAD_exome</td><td>ALL</td><td>2.033e-05</td></tr><tr><td>gnomAD_exome</td><td>African American</td><td>0</td></tr><tr><td>gnomAD_exome</td><td>Latino</td><td>0</td></tr><tr><td>gnomAD_exome</td><td>Ashkenazi Jewish</td><td>0</td></tr><tr><td>gnomAD_exome</td><td>East Asian</td><td>0</td></tr><tr><td>gnomAD_exome</td><td>Finnish</td><td>0</td></tr><tr><td>gnomAD_exome</td><td>Non-Finnish European</td><td>4.485e-05</td></tr><tr><td>gnomAD_exome</td><td>Other</td><td>0</td></tr><tr><td>gnomAD_exome</td><td>South Asian</td><td>0</td></tr><tr><td>gnomAD_genome</td><td>ALL</td><td>3.234e-05</td></tr><tr><td>gnomAD_genome</td><td>African American</td><td>0.0001</td></tr><tr><td>gnomAD_genome</td><td>Latino</td><td>0</td></tr><tr><td>gnomAD_genome</td><td>Ashkenazi Jewish</td><td>0</td></tr><tr><td>gnomAD_genome</td><td>East Asian</td><td>0</td></tr><tr><td>gnomAD_genome</td><td>Finnish</td><td>0</td></tr><tr><td>gnomAD_genome</td><td>Non-Finnish European</td><td>0</td></tr><tr><td>gnomAD_genome</td><td>Other</td><td>0</td></tr><tr><td>ExAC</td><td>ALL</td><td>2.483e-05</td></tr><tr><td>ExAC</td><td>African American</td><td>0</td></tr><tr><td>ExAC</td><td>Latino</td><td>0</td></tr><tr><td>ExAC</td><td>East Asian</td><td>0</td></tr><tr><td>ExAC</td><td>Finnish</td><td>0</td></tr><tr><td>ExAC</td><td>Non-Finnish European</td><td>4.503e-05</td></tr><tr><td>ExAC</td><td>Other</td><td>0</td></tr><tr><td>ExAC</td><td>South Asian</td><td>0</td></tr><tr><td>ExAC_nontcga</td><td>ALL</td><td>2.839e-05</td></tr><tr><td>ExAC_nontcga</td><td>African American</td><td>0</td></tr><tr><td>ExAC_nontcga</td><td>Latino</td><td>0</td></tr><tr><td>ExAC_nontcga</td><td>East Asian</td><td>0</td></tr><tr><td>ExAC_nontcga</td><td>Finnish</td><td>0</td></tr><tr><td>ExAC_nontcga</td><td>Non-Finnish European</td><td>5.53e-05</td></tr><tr><td>ExAC_nontcga</td><td>Other</td><td>0</td></tr><tr><td>ExAC_nontcga</td><td>South Asian</td><td>0</td></tr><tr><td>ExAC_nonpsych</td><td>ALL</td><td>3.327e-05</td></tr><tr><td>ExAC_nonpsych</td><td>African American</td><td>0</td></tr><tr><td>ExAC_nonpsych</td><td>Latino</td><td>0</td></tr><tr><td>ExAC_nonpsych</td><td>East Asian</td><td>0</td></tr><tr><td>ExAC_nonpsych</td><td>Finnish</td><td>0</td></tr><tr><td>ExAC_nonpsych</td><td>Non-Finnish European</td><td>7.14e-05</td></tr><tr><td>ExAC_nonpsych</td><td>Other</td><td>0</td></tr><tr><td>ExAC_nonpsych</td><td>South Asian</td><td>0</td></tr><tr><td>1000genomes</td><td>ALL</td><td>-</td></tr><tr><td>1000genomes</td><td>African</td><td>-</td></tr><tr><td>1000genomes</td><td>Latino</td><td>-</td></tr><tr><td>1000genomes</td><td>East Asian</td><td>-</td></tr><tr><td>1000genomes</td><td>European</td><td>-</td></tr><tr><td>1000genomes</td><td>South Asian</td><td>-</td></tr><tr><td>ESP6500</td><td>ALL</td><td>7.7e-05</td></tr><tr><td>ESP6500</td><td>European American</td><td>0.0001</td></tr><tr><td>ESP6500</td><td>African American</td><td>-</td></tr><tr><td>Kaviar</td><td>ALL</td><td>1.94e-05</td></tr><tr><td>HRC</td><td>ALL</td><td>-</td></tr><tr><td>HRC</td><td>non 1000genomes</td><td>-</td></tr><tr><td>CG69</td><td>All</td><td>-</td></tr></tbody></table></div><div class="col-md-4" style="padding:20px;height:500px;overflow:auto;"><table class="table table-bordered table-striped table-condensed"><caption style="font-size:20px;color:rgb(216,164,6);">Disease-related information</caption><thead><tr class="info"><th>database</th><th>information</th></tr></thead><tbody><tr><td><a href="http://denovo-db.gs.washington.edu/denovo-db/" target="_blank">denovo-db</a></td><td>-</td></tr><tr><td><a href="http://wintervar.wglab.org/" target="_blank">InterVar</a></td><td>Uncertain significance</td></tr><tr><td><a href="http://cancer.sanger.ac.uk/cosmic" target="_blank">COSMIC</a></td><td>ID=COSM1008562,COSM1008561 OCCURENCE=1(endometrium)</td></tr><tr><td><a href="https://icgc.org/" target="_blank">ICGC</a></td><td>ID=MU1880096 OCCURRENCE=UCEC-US|1|246|0.00407</td></tr><tr><td><a href="http://www.ebi.ac.uk/gwas/" target="_blank">GWAS Catalog</a></td><td>-</td></tr><tr><td><a href="https://www.ncbi.nlm.nih.gov/snp" target="_blank">dbSNP</a></td><td><a href="https://www.ncbi.nlm.nih.gov/snp/?term=rs121917748" target="_blank">rs121917748</a></td></tr><tr><td><a href="http://www.ebi.ac.uk/interpro/" target="_blank">InterPro</a></td><td>Ion transport domain|Voltage-dependent channel, four helix bundle domain</td></tr><tr><td><a href="https://www.ncbi.nlm.nih.gov/clinvar" target="_blank">ClinVar</a></td><td><strong>accession: </strong><a href="https://www.ncbi.nlm.nih.gov/clinvar/variation/12875" target="_blank">12875</a> <strong>phneotype: </strong>Benign familial neonatal-infantile seizures <strong>Clinical significance: </strong>Pathogenic</td></tr><tr><td><a href="http://humanparalogy.gs.washington.edu/" target="_blank">Segmental_duplication</a></td><td>-</td></tr></tbody></table></div></td></tr></tbody></table>
</div>
<br>
<br>

<div class="container-fluid">
	<div class="col-md-10 col-md-offset-1">
		<form role="form" id="batch-search">
		<label for="">query by</label>
		<div class="radio">
			<label><input type="radio" name="search-type" value="basic">genomic coordinate (snv)&nbsp;&nbsp;</label><a href="javascript:void(0);" name="basic" class="examples">example</a><input name="chr2-166170616-C-A;;chr2-166165261-C-T;;chr2-166166937-C-A;;chr17-61831814-G-T;;chr7-103338434-C-T;;chr19-15271477-G-A" type="hidden">&nbsp;&nbsp;
			<label><input type="radio" name="search-type" value="avinput">annovar&nbsp;&nbsp;</label><a href="javascript:void(0);" name="avinput" class="examples">example</a><input name="chr2 166170616 166170616 C A;;chr2 166165261 66165261 C T;;chr2 166166937 166166937 C A;;chr17 61831814 61831814 G T;;chr7 103338434 103338434 C T;;chr19 15271477 15271477 G A" type="hidden">&nbsp;&nbsp;
			<label><input type="radio" name="search-type" value="vcf">VCF&nbsp;&nbsp;</label><a href="javascript:void(0);" name="vcf" class="examples">example</a><input name="##fileformat=VCFv4.1;;#CHROM	POS	ID	REF	ALT	QUAL	FILTER	INFO	FORMAT	126040	126046	126047;;chr1	69511	rs75062661	A	G	282.05	TruthSensitivityTranche99.90to100.00	AC=4;AF=1.00;AN=4;DB;DP=19;Dels=0.00;FS=0.000;HRun=0;HaplotypeScore=0.0000;MQ=17.39;MQ0=4;QD=14.84;VQSLOD=-6.0545;culprit=MQ;set=variant	GT:AD:DP:GQ:PL	1/1:0,13:13:26.95:219,27,0	1/1:0,6:6:11.98:99,12,0	./.	;;chr2	45895	rs4241318	A	G	290.99	PASS	AC=6;AF=1.00;AN=6;DB;DP=13;Dels=0.00;FS=0.000;HRun=4;HaplotypeScore=0.0000;MQ=58.20;MQ0=0;QD=22.38;VQSLOD=7.1850;culprit=FS;set=variant	GT:AD:DP:GQ:PL	1/1:0,4:4:5.99:50,6,0	1/1:0,6:6:18.05:209,18,0	1/1:0,3:3:6.02:69,6,0	;;chr3	391100	rs13060847	A	G	3966.92	PASS	AC=6;AF=1.00;AN=6;BaseQRankSum=0.687;DB;DP=116;DS;Dels=0.00;FS=4.510;HRun=0;HaplotypeScore=0.6655;MQ=59.60;MQ0=0;MQRankSum=1.702;QD=34.20;ReadPosRankSum=0.776;VQSLOD=6.8789;culprit=MQ;set=variant	GT:AD:DP:GQ:PL	1/1:0,45:45:99:1537,132,0	1/1:1,30:31:56.83:1012,57,0	1/1:0,40:40:99:1418,117,0	;;chr4	59350	rs6834707	A	G	349.85	PASS	AB=0.770;AC=3;AF=0.50;AN=6;BaseQRankSum=-6.771;DB;DP=150;DS;Dels=0.00;FS=0.000;HRun=0;HaplotypeScore=0.5906;MQ=59.85;MQ0=0;MQRankSum=-1.295;QD=2.33;ReadPosRankSum=-0.566;VQSLOD=3.0934;culprit=QD;set=variant	GT:AD:DP:GQ:PL	0/1:43,7:50:61.87:62,0,1320	0/1:42,8:50:88.76:89,0,1386	0/1:36,14:50:99:238,0,1157	;;chr5	163205	rs3810870	G	C	1591.84	PASS	AC=6;AF=1.00;AN=6;DB;DP=55;Dels=0.00;FS=0.000;HRun=1;HaplotypeScore=0.0000;MQ=56.47;MQ0=0;QD=28.94;VQSLOD=6.7362;culprit=FS;set=variant	GT:AD:DP:GQ:PL	1/1:0,12:12:30.07:330,30,0	1/1:0,18:18:45.13:531,45,0	1/1:0,25:25:66.17:768,66,0	;;chr6	348906	rs11242812	G	A	2000.43	PASS	AB=0.512;AC=3;AF=0.50;AN=6;BaseQRankSum=7.569;DB;DP=146;DS;Dels=0.00;FS=0.621;HRun=0;HaplotypeScore=2.4197;MQ=58.21;MQ0=0;MQRankSum=0.079;QD=13.70;ReadPosRankSum=0.067;VQSLOD=7.8419;culprit=HaplotypeScore;set=variant2	GT:AD:DP:GQ:PL	0/1:24,26:50:99:702,0,573	0/1:21,27:48:99:862,0,476	0/1:30,18:48:99:475,0,796	;;chr7	286431	.	A	T	19.67	LowQual	AB=0.861;AC=2;AF=0.33;AN=6;BaseQRankSum=2.048;DP=75;Dels=0.00;HRun=1;HaplotypeScore=10.3003;MQ=53.15;MQ0=1;MQRankSum=-1.986;QD=0.43;ReadPosRankSum=-2.149;set=FilteredInAll	GT:AD:DP:GQ:PL	0/1:18,2:21:20.09:20,0,463	0/0:28,1:29:49.45:0,49,947	0/1:21,4:25:38.17:38,0,632	;;chr8	195254	rs2074718	C	A	1247.99	PASS	AB=0.415;AC=2;AF=0.33;AN=6;BaseQRankSum=7.932;DB;DP=120;DS;Dels=0.00;FS=2.550;HRun=2;HaplotypeScore=1.7097;MQ=58.80;MQ0=0;MQRankSum=-0.163;QD=17.33;ReadPosRankSum=-1.517;VQSLOD=7.4875;culprit=ReadPosRankSum;set=variant2	GT:AD:DP:GQ:PL	0/1:16,22:40:99:679,0,393	0/0:48,0:48:99:0,138,1457	0/1:13,19:32:99:608,0,308	;;chr9	17476	.	G	C	225.94	TruthSensitivityTranche99.90to100.00	AC=6;AF=1.00;AN=6;DP=42;Dels=0.00;FS=0.000;HRun=0;HaplotypeScore=0.0000;MQ=13.68;MQ0=32;QD=5.38;VQSLOD=-8.6564;culprit=MQ;set=variant2	GT:AD:DP:GQ:PL	1/1:4,4:8:12.03:129,12,0	1/1:20,5:26:6.02:67,6,0	1/1:5,3:8:6.02:67,6,0	;;chr10	93407	.	G	A	120.32	TruthSensitivityTranche99.90to100.00	AB=0.781;AC=3;AF=0.50;AN=6;BaseQRankSum=4.097;DP=90;Dels=0.00;FS=13.082;HRun=0;HaplotypeScore=2.1649;MQ=39.54;MQ0=5;MQRankSum=-4.896;QD=1.34;ReadPosRankSum=-1.242;VQSLOD=-3.9339;culprit=MQRankSum;set=variant2	GT:AD:DP:GQ:PL	0/1:23,7:30:25.46:25,0,493	0/1:22,6:28:70.92:71,0,346	0/1:25,7:32:62.67:63,0,485	;;chr11	193112	rs7951297	C	T	235.43	PASS	AB=0.717;AC=1;AF=0.17;AN=6;BaseQRankSum=3.189;DB;DP=138;DS;Dels=0.00;FS=4.906;HRun=0;HaplotypeScore=2.0503;MQ=58.24;MQ0=0;MQRankSum=0.256;QD=5.12;ReadPosRankSum=1.731;VQSLOD=5.8524;culprit=QD;set=variant2	GT:AD:DP:GQ:PL	0/1:33,13:46:99:270,0,671	0/0:43,0:43:99:0,114,1172	0/0:49,0:49:99:0,138,1425	;;chr12	235022	rs12822449	C	T	1684.48	PASS	AC=6;AF=1.00;AN=6;DB;DP=51;Dels=0.00;FS=0.000;HRun=0;HaplotypeScore=0.2447;MQ=57.70;MQ0=0;QD=33.03;VQSLOD=8.7345;culprit=FS;set=variant2	GT:AD:DP:GQ:PL	1/1:0,11:11:27.08:324,27,0	1/1:0,24:24:69.21:843,69,0	1/1:0,16:16:45.14:556,45,0	;;chr13	19748038	rs1803092	C	T	655.71	PASS	AB=0.534;AC=2;AF=0.33;AN=6;BaseQRankSum=5.018;DB;DP=73;Dels=0.00;FS=7.236;HRun=0;HaplotypeScore=0.5335;MQ=58.92;MQ0=0;MQRankSum=0.421;QD=12.14;ReadPosRankSum=0.621;VQSLOD=7.4777;culprit=FS;set=variant2	GT:AD:DP:GQ:PL	0/1:12,15:27:99:400,0,194	0/0:19,0:19:51.10:0,51,535	0/1:16,11:27:99:295,0,322	;;chr14	19378312	.	T	G	7.18	LowQual	AB=0.809;AC=1;AF=0.17;AN=6;BaseQRankSum=-1.666;DP=147;DS;Dels=0.00;HRun=1;HaplotypeScore=0.3156;MQ=5.04;MQ0=138;MQRankSum=1.179;QD=0.15;ReadPosRankSum=1.179;set=FilteredInAll	GT:AD:DP:GQ:PL	0/1:38,9:48:37.38:40,0,37	0/0:49,0:50:5.99:0,6,49	0/0:48,0:49:8.99:0,9,74;;chr16	103517	rs183360	A	C	971.36	PASS	AC=6;AF=1.00;AN=6;DB;DP=38;Dels=0.00;FS=0.000;HRun=0;HaplotypeScore=0.0000;MQ=57.07;MQ0=0;QD=25.56;VQSLOD=7.6084;culprit=HaplotypeScore;set=variant3	GT:AD:DP:GQ:PL	1/1:0,7:7:15.03:152,15,0	1/1:0,14:14:36.09:393,36,0	1/1:0,17:17:45.06:464,45,0;;chr17	6115	rs61739713	G	C	2095	PASS	AB=0.400;AC=5;AF=0.83;AN=6;BaseQRankSum=-1.692;DB;DP=92;Dels=0.00;FS=1.240;HRun=0;HaplotypeScore=1.0201;MQ=58.74;MQ0=0;MQRankSum=0.352;QD=22.77;ReadPosRankSum=-0.514;VQSLOD=8.6787;culprit=FS;set=variant3	GT:AD:DP:GQ:PL	1/1:1,24:25:54.10:576,54,0	0/1:14,21:35:99:578,0,400	1/1:0,32:32:90.18:983,90,0	;;chr18	166819	rs563155	T	C	1363.92	PASS	AB=0.509;AC=4;AF=0.67;AN=6;BaseQRankSum=-5.312;DB;DP=93;Dels=0.00;FS=0.000;HRun=0;HaplotypeScore=0.9062;MQ=59.20;MQ0=0;MQRankSum=0.077;QD=14.67;ReadPosRankSum=-0.256;VQSLOD=9.3785;culprit=ReadPosRankSum;set=variant3	GT:AD:DP:GQ:PL	0/1:18,13:31:99:230,0,521	1/1:0,24:24:69.11:703,69,0	0/1:18,20:38:99:473,0,484	;;chr19	110858	.	A	G	70.47	TruthSensitivityTranche99.90to100.00	AB=0.767;AC=2;AF=0.33;AN=6;BaseQRankSum=0.560;DP=139;DS;Dels=0.00;FS=0.000;HRun=0;HaplotypeScore=2.6604;MQ=12.32;MQ0=55;MQRankSum=0.637;QD=0.78;ReadPosRankSum=0.637;VQSLOD=-11.5174;culprit=MQ;set=variant3	GT:AD:DP:GQ:PL	0/1:37,9:49:56.06:59,0,56	0/1:29,11:41:50.09:50,0,80	0/0:48,0:49:17.98:0,18,151	;;chr20	76962	rs6111385	T	C	2178.23	PASS	AB=0.700;AC=5;AF=0.83;AN=6;BaseQRankSum=-3.043;DB;DP=96;Dels=0.00;FS=5.206;HRun=1;HaplotypeScore=1.8531;MQ=59.28;MQ0=0;MQRankSum=0.043;QD=22.69;ReadPosRankSum=-1.055;VQSLOD=7.8740;culprit=HaplotypeScore;set=variant3	GT:AD:DP:GQ:PL	0/1:21,9:30:99:212,0,587	1/1:0,24:24:69.13:710,69,0	1/1:0,41:42:99:1298,120,0	;;chr21	10906915	rs169758	C	T	223.77	TruthSensitivityTranche99.00to99.90	AB=0.780;AC=1;AF=0.17;AN=6;BaseQRankSum=3.292;DB;DP=150;DS;Dels=0.00;FS=4.511;HRun=1;HaplotypeScore=1.3633;MQ=46.29;MQ0=0;MQRankSum=-1.564;QD=4.48;ReadPosRankSum=-0.334;VQSLOD=0.1687;culprit=QD;set=variant3	GT:AD:DP:GQ:PL	0/0:50,0:50:99:0,144,1582	0/1:39,11:50:99:259,0,1150	0/0:50,0:50:99:0,141,1671	;;chr22	16287339	.	C	T	8.43	LowQual	AB=0.625;AC=2;AF=0.33;AN=6;BaseQRankSum=3.247;DP=124;DS;Dels=0.00;HRun=1;HaplotypeScore=2.4752;MQ=17.65;MQ0=26;MQRankSum=-2.009;QD=0.11;ReadPosRankSum=-1.913;set=FilteredInAll	GT:AD:DP:GQ:PL	0/0:45,2:47:60.36:0,60,751	0/1:28,18:46:26.02:26,0,340	0/1:20,11:31:20.35:20,0,211	;;chrX	2700157	rs5939319	G	A	475.51	PASS	AB=0.467;AC=1;AF=0.17;AN=6;BaseQRankSum=4.591;DB;DP=61;Dels=0.00;FS=0.000;HRun=1;HaplotypeScore=1.2614;MQ=59.62;MQ0=0;MQRankSum=-1.270;QD=15.85;ReadPosRankSum=-0.382;VQSLOD=9.1561;culprit=FS;set=variant3	GT:AD:DP:GQ:PL	0/0:7,0:7:21.03:0,21,212	0/1:14,16:30:99:510,0,295	0/0:24,0:24:63.12:0,63,658	;;chrY	21154426	rs112759690	G	A	346.11	PASS	AB=0.381;AC=1;AF=0.17;AN=6;BaseQRankSum=2.585;DB;DP=75;Dels=0.00;FS=0.000;HRun=0;HaplotypeScore=0.0000;MQ=59.32;MQ0=0;MQRankSum=0.806;QD=16.48;ReadPosRankSum=0.315;VQSLOD=8.1937;culprit=FS;set=variant3	GT:AD:DP:GQ:PL	0/0:29,0:29:78.17:0,78,870	0/1:8,13:21:99:381,0,226	0/0:25,0:25:69.19:0,69,819" type="hidden">&nbsp;&nbsp;
			<label><input type="radio" name="search-type" value="variant">variant&nbsp;&nbsp;</label><a href="javascript:void(0);" name="variant" class="examples">example</a><input name="SCN2A:c.1381C>A;;NM_001040142:c.1381C>A;;SCN2A:c.1381C>T;;NM_020198:c.1013C>A;;NOTCH3:c.6962C>T;;NM_173054:c.1009G>A" type="hidden">&nbsp;&nbsp;
			<label><input type="radio" name="search-type" value="region">genomic region&nbsp;&nbsp;</label><a href="javascript:void(0);" name="region" class="examples">example</a><input name="chr2-166170614-166170618;;chr2-166165260-166165262;;chr2-166166936-166166938;;chr17-61831813-61831815;;chr7-103338434-103338434;;chr19-15271477-15271477" type="hidden">&nbsp;&nbsp;
		</div>
		<div class="form-group">
			<label for="">search terms</label>
			<textarea class="form-control" rows="10" name="search-terms" id="search-terms"></textarea>
		</div>
		<button type="submit" class="btn btn-success btn-lg">submit</button>
		<button type="reset" class="btn btn-default btn-lg">reset</button>
	</form>
		<br><br>
		<div id="result"></div>
		<br><br>
		<h4>specify annotation datasets by clicking the button</h4>
		<hr style="border:2px solid black">
		<div class="form-group">
		<label>Primary information</label>&nbsp;&nbsp;&nbsp;must selected<br>
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Gene system<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu" id="gene_system">
				<li class="active"><a href="javascript:void(0)" name="All">All</a></li>
				<li><a href="javascript:void(0)" name="refGene">RefSeq gene</a></li>
				<li><a href="javascript:void(0)" name="ensGene">Ensembl gene</a></li>
				<li><a href="javascript:void(0)" name="knownGene">UCSC known gene</a></li>
				<li><a href="javascript:void(0)" name="ccdsGene">CCDS gene</a></li>
			</ul>
			<button type="button" class="btn btn-primary" name="Chr">Chr</button>
			<button type="button" class="btn btn-primary" name="Start">Start</button>
			<button type="button" class="btn btn-primary" name="End">End</button>
			<button type="button" class="btn btn-primary" name="Ref">Ref</button>
			<button type="button" class="btn btn-primary" name="Alt">Alt</button>
			<button type="button" class="btn btn-primary" name="Gene_symbol">Gene</button>
			<button type="button" class="btn btn-primary" name="Effect">Effect</button>
			<button type="button" class="btn btn-primary" name="Mutation_type">Mutation type</button>
			<button type="button" class="btn btn-primary" name="AA_change">Amino acids change</button>
			<button type="button" class="btn btn-primary" name="Deleterious_vs_all_algorithms,Damaging_score">Damaging score</button>
			<button type="button" class="btn btn-primary" name="Extreme">Extreme</button>
			<button type="button" class="btn btn-primary" name="Cytoband">Cytoband</button>
		</div>
		<br>
		<label>In silico predictive algorithms for nonsynonymous variation</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="select-vis-all">select all</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="unselect-vis-all">unselect all</a>
		<div class="btn-group">
			<button type="button" class="btn btn-default toggle-vis" name="SIFT_score,SIFT_pred">SIFT</button>
			<button type="button" class="btn btn-default toggle-vis" name="Polyphen2_HDIV_score,Polyphen2_HDIV_pred">Polyphen2_HDIV</button>
			<button type="button" class="btn btn-default toggle-vis" name="Polyphen2_HVAR_score,Polyphen2_HVAR_pred">Polyphen2_HVAR</button>
			<button type="button" class="btn btn-default toggle-vis" name="LRT_score,LRT_pred">LRT</button>
			<button type="button" class="btn btn-default toggle-vis" name="MutationTaster_score,MutationTaster_pred">MutationTaster</button>
			<button type="button" class="btn btn-default toggle-vis" name="MutationAssessor_score,MutationAssessor_pred">MutationAssessor</button>
			<button type="button" class="btn btn-default toggle-vis" name="FATHMM_score,FATHMM_pred">FATHMM</button>
			<button type="button" class="btn btn-default toggle-vis" name="PROVEAN_score,PROVEAN_pred">PROVEAN</button>
			<button type="button" class="btn btn-default toggle-vis" name="VEST3_score,VEST3_pred">VEST3</button>
			<button type="button" class="btn btn-default toggle-vis" name="MetaSVM_score,MetaSVM_pred">MetaSVM</button>
			<button type="button" class="btn btn-default toggle-vis" name="MetaLR_score,MetaLR_pred">MetaLR</button>
			<button type="button" class="btn btn-default toggle-vis" name="M_CAP_score,M_CAP_pred">M-CAP</button>
			<button type="button" class="btn btn-default toggle-vis" name="CADD_score,CADD_pred">CADD</button>
			<button type="button" class="btn btn-default toggle-vis" name="DANN_score,DANN_pred">DANN</button>
			<button type="button" class="btn btn-default toggle-vis" name="FATHMM_MKL_score,FATHMM_MKL_pred">FATHMM_MKL</button>
			<button type="button" class="btn btn-default toggle-vis" name="Eigen_score,Eigen_pred">Eigen</button>
			<button type="button" class="btn btn-default toggle-vis" name="GenoCanyon_score,GenoCanyon_pred">GenoCanyon</button>
			<button type="button" class="btn btn-default toggle-vis" name="fitCons_score,fitCons_pred">fitCons</button>
			<button type="button" class="btn btn-default toggle-vis" name="GERP_score,GERP_pred">GERP++</button>
			<button type="button" class="btn btn-default toggle-vis" name="phyloP_score,phyloP_pred">phyloP</button>
			<button type="button" class="btn btn-default toggle-vis" name="phastCons_score,phastCons_pred">phastCons</button>
			<button type="button" class="btn btn-default toggle-vis" name="SiPhy_score,SiPhy_pred">SiPhy</button>
			<button type="button" class="btn btn-default toggle-vis" name="REVEL_score,REVEL_pred">REVEL</button>
		</div><br>
		<label>Allele frequency in different populations</label><br>
		gnomAD exome &nbsp;&nbsp;<a href="javascript:void(0)" class="select-vis-all">select all</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="unselect-vis-all">unselect all</a>
		<div class="btn-group">
			<button type="button" class="btn btn-primary toggle-vis" name="gnomAD_exome_ALL">ALL</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_exome_AFR">AFR</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_exome_AMR">AMR</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_exome_ASJ">ASJ</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_exome_EAS">EAS</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_exome_FIN">FIN</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_exome_NFE">NFE</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_exome_OTH">OTH</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_exome_SAS">SAS</button>
		</div><br>
		gnomAD genome &nbsp;&nbsp;<a href="javascript:void(0)" class="select-vis-all">select all</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="unselect-vis-all">unselect all</a>
		<div class="btn-group">
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_genome_ALL">ALL</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_genome_AFR">AFR</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_genome_AMR">AMR</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_genome_ASJ">ASJ</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_genome_EAS">EAS</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_genome_FIN">FIN</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_genome_NFE">NFE</button>
			<button type="button" class="btn btn-default toggle-vis" name="gnomAD_genome_OTH">OTH</button>
		</div><br>
		ExAC &nbsp;&nbsp;<a href="javascript:void(0)" class="select-vis-all">select all</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="unselect-vis-all">unselect all</a>
		<div class="btn-group">
			<button type="button" class="btn btn-primary toggle-vis" name="ExAC_ALL">ALL</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_AFR">AFR</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_AMR">AMR</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_EAS">EAS</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_FIN">FIN</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_NFE">NFE</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_OTH">OTH</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_SAS">SAS</button>
		</div><br>
		ExAC non TCGA &nbsp;&nbsp;<a href="javascript:void(0)" class="select-vis-all">select all</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="unselect-vis-all">unselect all</a>
		<div class="btn-group">
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nontcga_ALL">ALL</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nontcga_AFR">AFR</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nontcga_AMR">AMR</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nontcga_EAS">EAS</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nontcga_FIN">FIN</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nontcga_NFE">NFE</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nontcga_OTH">OTH</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nontcga_SAS">SAS</button>
		</div><br>
		ExAC non psychiatric &nbsp;&nbsp;<a href="javascript:void(0)" class="select-vis-all">select all</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="unselect-vis-all">unselect all</a>
		<div class="btn-group">
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nonpsych_ALL">ALL</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nonpsych_AFR">AFR</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nonpsych_AMR">AMR</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nonpsych_EAS">EAS</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nonpsych_FIN">FIN</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nonpsych_NFE">NFE</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nonpsych_OTH">OTH</button>
			<button type="button" class="btn btn-default toggle-vis" name="ExAC_nonpsych_SAS">SAS</button>
		</div><br>
		1000 Genomes &nbsp;&nbsp;<a href="javascript:void(0)" class="select-vis-all">select all</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="unselect-vis-all">unselect all</a>
		<div class="btn-group">
			<button type="button" class="btn btn-default toggle-vis" name="_1000g_ALL">ALL</button>
			<button type="button" class="btn btn-default toggle-vis" name="_1000g_AFR">AFR</button>
			<button type="button" class="btn btn-default toggle-vis" name="_1000g_AMR">AMR</button>
			<button type="button" class="btn btn-default toggle-vis" name="_1000g_EAS">EAS</button>
			<button type="button" class="btn btn-default toggle-vis" name="_1000g_EUR">EUR</button>
			<button type="button" class="btn btn-default toggle-vis" name="_1000g_SAS">SAS</button>
		</div><br>
		Other &nbsp;&nbsp;<a href="javascript:void(0)" class="select-vis-all">select all</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="unselect-vis-all">unselect all</a>
		<div class="btn-group">
			<button type="button" class="btn btn-default toggle-vis" name="ESP6500siv2_ALL,ESP6500siv2_EA,ESP6500siv2_AA">ESP6500</button>
			<button type="button" class="btn btn-default toggle-vis" name="Kaviar_AF">Kaviar</button>
			<button type="button" class="btn btn-default toggle-vis" name="HRC_AF">HRC</button>
			<button type="button" class="btn btn-default toggle-vis" name="HRC_non1000G_AF">HRC_non1000G</button>
			<button type="button" class="btn btn-default toggle-vis" name="CG69">CG69</button>
			<button type="button" class="btn btn-default toggle-vis" name="dbSNP">dbSNP</button>
		</div><br>
		<label>Disease- and phenotype-related databases</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="select-vis-all">select all</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="unselect-vis-all">unselect all</a><br>
			<div class="btn-group">
			<button type="button" class="btn btn-primary toggle-vis" name="denovo_db">denovo-db</button>
			<button type="button" class="btn btn-primary toggle-vis" name="InterVar_automated">InterVar</button>
			<button type="button" class="btn btn-primary toggle-vis" name="ClinVar">ClinVar</button>
			<button type="button" class="btn btn-default toggle-vis" name="InterPro_domain">InterPro</button>
			<button type="button" class="btn btn-primary toggle-vis" name="COSMIC">COSMIC</button>
			<button type="button" class="btn btn-primary toggle-vis" name="ICGC_ID,ICGC_Occurrence">ICGC</button>
			<button type="button" class="btn btn-primary toggle-vis" name="GWAS">GWAS Catalog</button>
			<button type="button" class="btn btn-default toggle-vis" name="Segmental_duplication">Segmental duplication</button>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<form class="quick" action="search/quick" method="POST">
			<div class="form-group">
				<div class="input-group">
				<input class="form-control" id="item" name="item" type="text" placeholder="gene symbol, RefSeq accession, variant, genomic region"> 
				<span class="input-group-btn"> <button class="btn btn-danger" type="submit" title="Click to search"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> </button> </span> 
				</div> 
				examples&nbsp;:&nbsp;
				<a href="javascript:void(0);" class="tip">chr2-166165261-C-T</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">chr2-166165260-166165265</a> &nbsp;/ &nbsp;
				<a href="javascript:void(0);" class="tip">SCN2A:c.562C&gt;T</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">ENSG00000136531:c.1A&gt;C</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">NM_001040143:c.562C&gt;T</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">ENST00000357398:c.7C&gt;T</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">uc002ude.3:exon1:c.1A&gt;C</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">CCDS33313.1:c.1A&gt;C</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">SCN2A</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">ENSG00000136531</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">NM_001040143</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">ENST00000375427</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">uc002ude.3</a> &nbsp;/&nbsp;
				<a href="javascript:void(0);" class="tip">CCDS33313.1</a>
			</div>
	</form>
	
	<br>
	<br>
	<br>
	<br>

	<form id="annotate" enctype="multipart/form-data">
		<div class="form-group">
			<label for="e-mail">E-mail</label>
			<input class="form-control" name="e-mail" id="e-mail" type="text">
		</div>
		<div class="form-group">
		<label for="item">Input file</label>
		<div class="input-group">
			<input id="userfile" class="form-control" type="file" name="userfile" onchange="doChange(this);" style="display:none;">
			<input class="form-control" onclick="$('input[id=userfile]').click();" id="item" type="text"> 
			<span class="input-group-addon" style="cursor:pointer" onclick="$('input[id=userfile]').click();"> <span class="glyphicon glyphicon-folder-open"></span> Input File </span>
		</div>
		<p>Only <a href="http://www.1000genomes.org/wiki/Analysis/Variant%20Call%20Format/vcf-variant-call-format-version-41" target="_blank">VCF <span class="glyphicon glyphicon-new-window"></span></a>, <a href="http://annovar.openbioinformatics.org/en/latest/user-guide/input/" target="_blank">annovar input <span class="glyphicon glyphicon-new-window"></span></a> file format accepted &nbsp;&nbsp;<a href="resource/download/example.tar.gz">Example input file</a></p>
		</div>
		<button type="submit" class="btn btn-success btn-lg">submit</button>
		<button type="reset" class="btn btn-default btn-lg">reset</button>
	</form>
	<br>
	<br>
	<br>
	<br>
	
</div>


<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
