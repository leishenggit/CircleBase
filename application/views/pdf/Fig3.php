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


<div class="container-fluid" style="margin:50px 300px">


<div class="panel panel-primary">
<a id="function" class="anchor-1"></a>
<div class="panel-heading">
<h3 class="panel-title">
Gene function
</h3>
</div>
<div class="panel-body">
<a id="uniprotkb_related" class="anchor-1"></a>
<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Molecular function retrieved from <a href="http://www.uniprot.org/uniprot/" target="_blank">UniProtKB <span class="glyphicon glyphicon-new-window"></span></a></p>
<div class="database-info">
<table class="table table-striped table-bordered table-condensed">
<!--<thead><tr><th>Catalytic Activity</th><th>Enzyme Regulation</th><th>Function</th></tr></thead>-->
<tbody>
<tr><th class="right-th">Entry</th><td>Q99250</td></tr><tr><th class="right-th">Entry name</th><td>SCN2A_HUMAN</td></tr><tr><th class="right-th">Organism</th><td>Homo sapiens (Human)</td></tr><tr><th class="right-th">Length</th><td>2005</td></tr><tr><th class="right-th">Mass</th><td>227,975</td></tr><tr><th class="right-th">Subunit structure</th><td>SUBUNIT: Heterooligomer of a large alpha subunit and a smaller beta subunit. Heterooligomer with SCN2B or SCN4B; disulfide-linked. Interacts with NEDD4L. Interacts with CALM. Interacts with the conotoxin GVIIJ (PubMed:24497506). {ECO:0000269|PubMed:24297919, ECO:0000269|PubMed:24497506}.</td></tr><tr><th class="right-th">Function</th><td>FUNCTION: Mediates the voltage-dependent sodium ion permeability of excitable membranes. Assuming opened or closed conformations in response to the voltage difference across the membrane, the protein forms a sodium-selective channel through which Na(+) ions may pass in accordance with their electrochemical gradient. {ECO:0000269|PubMed:1325650}.</td></tr><tr><th class="right-th">Tissue specificity</th><td></td></tr><tr><th class="right-th">Subcellular location</th><td>SUBCELLULAR LOCATION: Cell membrane {ECO:0000269|PubMed:1325650}; Multi-pass membrane protein {ECO:0000269|PubMed:1325650}.</td></tr><tr><th class="right-th">Catalytic Activity</th><td></td></tr><tr><th class="right-th">Enzyme Regulation</th><td></td></tr><tr><th class="right-th">Domain</th><td>DOMAIN: The sequence contains 4 internal repeats, each with 5 hydrophobic segments (S1,S2,S3,S5,S6) and one positively charged segment (S4). Segments S4 are probably the voltage-sensors and are characterized by a series of positively charged amino acids at every third position.</td></tr><tr><th class="right-th">Sequence similarities</th><td>SIMILARITY: Belongs to the sodium channel (TC 1.A.1.10) family. Nav1.2/SCN2A subfamily. {ECO:0000305}.</td></tr><tr><th class="right-th">Cross-reference</th><td> | <a href="http://www.kegg.jp/dbget-bin/www_bget?hsa:6326" target="_blank">KEGG:hsa:6326 <span class="glyphicon glyphicon-new-window"></span></a>  | <a href="http://www.reactome.org/content/detail/R-HSA-445095" target="_blank">Reactome:R-HSA-445095 <span class="glyphicon glyphicon-new-window"></span></a>  | <a href="http://www.reactome.org/content/detail/R-HSA-5576892" target="_blank">Reactome:R-HSA-5576892 <span class="glyphicon glyphicon-new-window"></span></a>  | <a href="http://www.rcsb.org/pdb/explore/explore.do?structureId=2KAV" target="_blank">PDB:2KAV <span class="glyphicon glyphicon-new-window"></span></a>  | <a href="http://www.rcsb.org/pdb/explore/explore.do?structureId=4JPZ" target="_blank">PDB:4JPZ <span class="glyphicon glyphicon-new-window"></span></a>  | <a href="http://pfam.xfam.org/family/PF00520" target="_blank">Pfam:PF00520 <span class="glyphicon glyphicon-new-window"></span></a>  | <a href="http://pfam.xfam.org/family/PF06512" target="_blank">Pfam:PF06512 <span class="glyphicon glyphicon-new-window"></span></a>  | <a href="http://pfam.xfam.org/family/PF11933&#10;" target="_blank">Pfam:PF11933
<span class="glyphicon glyphicon-new-window"></span></a> </td></tr>						</tbody>
</table><br>
</div>
<a id="go_related" class="anchor-1"></a>
<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>&nbsp;&nbsp;GO term retrieved from <a href="http://geneontology.org" target="_blank">Gene Ontology Consortium <span class="glyphicon glyphicon-new-window"></span></a></p>
<div class="database-info" style="display: none;">
<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div id="" class="col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div id="" class="col-md-6"><div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>Copy</span></a><a class="btn btn-default buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>Excel</span></a><a class="btn btn-default buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>CSV</span></a></div></div><table class="table table-striped table-bordered table-condensed gene-detail-table dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Accession: activate to sort column descending" style="width: 114px;">Accession</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 509px;">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Evidence: activate to sort column ascending" style="width: 86px;">Evidence</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 146px;">Category</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="PubMed: activate to sort column ascending" style="width: 91px;">PubMed</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Organism: activate to sort column ascending" style="width: 103px;">Organism</th></tr>
</thead>
<tbody>
<tr role="row" class="odd"><td class="sorting_1"><a href="http://amigo.geneontology.org/amigo/term/GO:0001518" target="_blank">GO:0001518 <span class="glyphicon glyphicon-new-window"></span></a></td><td>voltage-gated sodium channel complex</td><td>IEA</td><td>Cellular Component</td><td>-</td><td>Homo sapiens</td></tr><tr role="row" class="even"><td class="sorting_1"><a href="http://amigo.geneontology.org/amigo/term/GO:0005248" target="_blank">GO:0005248 <span class="glyphicon glyphicon-new-window"></span></a></td><td>voltage-gated sodium channel activity</td><td>IBA</td><td>Molecular Function</td><td>-</td><td>Homo sapiens</td></tr><tr role="row" class="odd"><td class="sorting_1"><a href="http://amigo.geneontology.org/amigo/term/GO:0005248" target="_blank">GO:0005248 <span class="glyphicon glyphicon-new-window"></span></a></td><td>voltage-gated sodium channel activity</td><td>ISS</td><td>Molecular Function</td><td>-</td><td>Homo sapiens</td></tr><tr role="row" class="even"><td class="sorting_1"><a href="http://amigo.geneontology.org/amigo/term/GO:0005622" target="_blank">GO:0005622 <span class="glyphicon glyphicon-new-window"></span></a></td><td>intracellular</td><td>IEA</td><td>Cellular Component</td><td>-</td><td>Homo sapiens</td></tr><tr role="row" class="odd"><td class="sorting_1"><a href="http://amigo.geneontology.org/amigo/term/GO:0005887" target="_blank">GO:0005887 <span class="glyphicon glyphicon-new-window"></span></a></td><td>integral component of plasma membrane</td><td>TAS</td><td>Cellular Component</td><td><a href="http://www.ncbi.nlm.nih.gov/pubmed/1325650" target="_blank">1325650 <span class="glyphicon glyphicon-new-window"></span></a> </td><td>Homo sapiens</td></tr><tr role="row" class="even"><td class="sorting_1"><a href="http://amigo.geneontology.org/amigo/term/GO:0006814" target="_blank">GO:0006814 <span class="glyphicon glyphicon-new-window"></span></a></td><td>sodium ion transport</td><td>TAS</td><td>Biological Process</td><td><a href="http://www.ncbi.nlm.nih.gov/pubmed/1325650" target="_blank">1325650 <span class="glyphicon glyphicon-new-window"></span></a> </td><td>Homo sapiens</td></tr><tr role="row" class="odd"><td class="sorting_1"><a href="http://amigo.geneontology.org/amigo/term/GO:0008627" target="_blank">GO:0008627 <span class="glyphicon glyphicon-new-window"></span></a></td><td>intrinsic apoptotic signaling pathway in response to osmotic stress</td><td>IEA</td><td>Biological Process</td><td>-</td><td>Homo sapiens</td></tr><tr role="row" class="even"><td class="sorting_1"><a href="http://amigo.geneontology.org/amigo/term/GO:0014704" target="_blank">GO:0014704 <span class="glyphicon glyphicon-new-window"></span></a></td><td>intercalated disc</td><td>IEA</td><td>Cellular Component</td><td>-</td><td>Homo sapiens</td></tr><tr role="row" class="odd"><td class="sorting_1"><a href="http://amigo.geneontology.org/amigo/term/GO:0019228" target="_blank">GO:0019228 <span class="glyphicon glyphicon-new-window"></span></a></td><td>neuronal action potential</td><td>IBA</td><td>Biological Process</td><td>-</td><td>Homo sapiens</td></tr><tr role="row" class="even"><td class="sorting_1"><a href="http://amigo.geneontology.org/amigo/term/GO:0030315" target="_blank">GO:0030315 <span class="glyphicon glyphicon-new-window"></span></a></td><td>T-tubule</td><td>IEA</td><td>Cellular Component</td><td>-</td><td>Homo sapiens</td></tr></tbody>
</table><div id="" class="col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 21 entries</div></div><div id="" class="col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0">Next</a></li></ul></div></div></div><br>
</div>
<a id="interpro_related" class="anchor-1"></a>
<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>&nbsp;&nbsp;Domain retrieved from <a href="http://www.ebi.ac.uk/interpro/" target="_blank">InterPro <span class="glyphicon glyphicon-new-window"></span></a></p>
<div class="database-info" style="display: none;">
<p>Graphical View of Domain Structure for InterPro Entry <a href="http://www.ebi.ac.uk/interpro/protein/Q99250" target="_blank">Q99250 <span class="glyphicon glyphicon-new-window"></span></a></p>
<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div id="" class="col-md-6"><div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div id="" class="col-md-6"><div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>Copy</span></a><a class="btn btn-default buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>Excel</span></a><a class="btn btn-default buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" href="#"><span>CSV</span></a></div></div><table class="table table-striped table-bordered table-condensed gene-detail-table dataTable no-footer" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Entry: activate to sort column descending" style="width: 57px;">Entry</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Domain Name: activate to sort column ascending" style="width: 425px;">Domain Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Domain accession: activate to sort column ascending" style="width: 175px;">Domain accession</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Domain source: activate to sort column ascending" style="width: 147px;">Domain source</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Domain start: activate to sort column ascending" style="width: 126px;">Domain start</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Domain end: activate to sort column ascending" style="width: 119px;">Domain end</th></tr>
</thead>
<tbody>

<tr role="row" class="odd"><td class="sorting_1">Q99250</td><td>IQ motif, EF-hand binding site</td><td><a href="http://www.ebi.ac.uk/interpro/entry/IPR000048" target="_blank">IPR000048 <span class="glyphicon glyphicon-new-window"></span></a></td><td>PS50096</td><td>1905</td><td>1934
</td></tr><tr role="row" class="even"><td class="sorting_1">Q99250</td><td>IQ motif, EF-hand binding site</td><td><a href="http://www.ebi.ac.uk/interpro/entry/IPR000048" target="_blank">IPR000048 <span class="glyphicon glyphicon-new-window"></span></a></td><td>SM00015</td><td>1904</td><td>1926
</td></tr><tr role="row" class="odd"><td class="sorting_1">Q99250</td><td>Voltage gated sodium channel, alpha subunit</td><td><a href="http://www.ebi.ac.uk/interpro/entry/IPR001696" target="_blank">IPR001696 <span class="glyphicon glyphicon-new-window"></span></a></td><td>PR00170</td><td>1758</td><td>1777
</td></tr><tr role="row" class="even"><td class="sorting_1">Q99250</td><td>Voltage gated sodium channel, alpha subunit</td><td><a href="http://www.ebi.ac.uk/interpro/entry/IPR001696" target="_blank">IPR001696 <span class="glyphicon glyphicon-new-window"></span></a></td><td>PR00170</td><td>1793</td><td>1806
</td></tr><tr role="row" class="odd"><td class="sorting_1">Q99250</td><td>Ion transport domain</td><td><a href="http://www.ebi.ac.uk/interpro/entry/IPR005821" target="_blank">IPR005821 <span class="glyphicon glyphicon-new-window"></span></a></td><td>PF00520</td><td>128</td><td>435
</td></tr><tr role="row" class="even"><td class="sorting_1">Q99250</td><td>Ion transport domain</td><td><a href="http://www.ebi.ac.uk/interpro/entry/IPR005821" target="_blank">IPR005821 <span class="glyphicon glyphicon-new-window"></span></a></td><td>PF00520</td><td>760</td><td>988
</td></tr><tr role="row" class="odd"><td class="sorting_1">Q99250</td><td>Ion transport domain</td><td><a href="http://www.ebi.ac.uk/interpro/entry/IPR005821" target="_blank">IPR005821 <span class="glyphicon glyphicon-new-window"></span></a></td><td>PF00520</td><td>1207</td><td>1481
</td></tr><tr role="row" class="even"><td class="sorting_1">Q99250</td><td>Ion transport domain</td><td><a href="http://www.ebi.ac.uk/interpro/entry/IPR005821" target="_blank">IPR005821 <span class="glyphicon glyphicon-new-window"></span></a></td><td>PF00520</td><td>1531</td><td>1786
</td></tr><tr role="row" class="odd"><td class="sorting_1">Q99250</td><td>Sodium ion transport-associated</td><td><a href="http://www.ebi.ac.uk/interpro/entry/IPR010526" target="_blank">IPR010526 <span class="glyphicon glyphicon-new-window"></span></a></td><td>PF06512</td><td>997</td><td>1203
</td></tr><tr role="row" class="even"><td class="sorting_1">Q99250</td><td>Voltage-gated Na+ ion channel, cytoplasmic domain</td><td><a href="http://www.ebi.ac.uk/interpro/entry/IPR024583" target="_blank">IPR024583 <span class="glyphicon glyphicon-new-window"></span></a></td><td>PF11933</td><td>509</td><td>709
</td></tr></tbody>
</table><div id="" class="col-md-6"><div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div></div><div id="" class="col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_1_previous"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="DataTables_Table_1_next"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div>
</div>
<a id="ppi_related" class="anchor-1"></a>
<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>&nbsp;&nbsp;Protein-Protein interaction retrieved from <a href="https://www.intomics.com/inbio/map/#home" target="_blank">InBio Map <span class="glyphicon glyphicon-new-window"></span></a></p>
<div class="database-info" style="display: none;">
<div id="DataTables_Table_2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div id="" class="col-md-6"><div class="dataTables_length" id="DataTables_Table_2_length"><label>Show <select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div id="" class="col-md-6"><div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_2" href="#"><span>Copy</span></a><a class="btn btn-default buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_2" href="#"><span>Excel</span></a><a class="btn btn-default buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_2" href="#"><span>CSV</span></a></div></div><table class="table table-striped table-bordered table-condensed gene-detail-table dataTable no-footer" id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="interactor A: activate to sort column descending" style="width: 139px;">interactor A</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="interactor B: activate to sort column ascending" style="width: 139px;">interactor B</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="gene name for interactor A: activate to sort column ascending" style="width: 297px;">gene name for interactor A</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="gene name for interactor B: activate to sort column ascending" style="width: 298px;">gene name for interactor B</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Confidence score: activate to sort column ascending" style="width: 202px;">Confidence score</th></tr>
</thead>
<tbody>

<tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody>
</table><div id="" class="col-md-6"><div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div id="" class="col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_2_previous"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next disabled" id="DataTables_Table_2_next"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div><br>
</div>
<a id="pathway_related" class="anchor-1"></a>
<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Pathway retrieved from <a href="https://www.ncbi.nlm.nih.gov/biosystems" target="_blank">BioSystems <span class="glyphicon glyphicon-new-window"></span></a></p>
<div class="database-info">
<div id="DataTables_Table_3_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div id="" class="col-md-6"><div class="dataTables_length" id="DataTables_Table_3_length"><label>Show <select name="DataTables_Table_3_length" aria-controls="DataTables_Table_3" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div id="" class="col-md-6"><div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_3" href="#"><span>Copy</span></a><a class="btn btn-default buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_3" href="#"><span>Excel</span></a><a class="btn btn-default buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_3" href="#"><span>CSV</span></a></div></div><table class="table table-striped table-bordered table-condensed gene-detail-table dataTable no-footer" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Gene: activate to sort column descending" style="width: 80px;">Gene</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Pathway: activate to sort column ascending" style="width: 414px;">Pathway</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Source: activate to sort column ascending" style="width: 130px;">Source</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Organism: activate to sort column ascending" style="width: 148px;">Organism</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 303px;">Description</th></tr>
</thead>
<tbody>
<tr role="row" class="odd"><td class="td-word-no-wrap sorting_1">SCN2A</td><td class="td-word-no-wrap"><a href="https://www.ncbi.nlm.nih.gov/biosystems/?term=83088" target="_blank">Taste transduction <span class="glyphicon glyphicon-new-window"></span></a></td><td>KEGG</td><td class="td-word-no-wrap">Homo sapiens</td><td class="text_overflow"><a href="javascript:void(0)" class="aa-info-switch"><span class="glyphicon glyphicon-plus"></span></a>Five basic tastes are recognized by humans and most other animals - bitter, sweet, sour, salty and umami. In vertebrates, taste stimuli are detected by taste receptor cells (TRCs). At least three distinct cell types are found in mammalian taste buds : type I cells, type II cells, and type III cells. Type I cells express epithelial sodium channel (ENaC) and are considered to be the major mediator of perception of low salt. In type II cells, transduction of bitter, sweet and umami is mediated by a canonical PLC-beta/IP3-signaling cascade, which culminates in the opening of the TRPM5 ion channel. This produces a depolarization that may allow CALMH1 channels to open and release ATP, which serves as a neurotransmitter to activate closely associated nerve afferents expressing P2X2, P2X3 receptors and adjacent type III cells expressing P2Y4 receptors. Type II taste cells also secrete acetylcholine (ACh) that appears to stimulate muscarinic receptors, specifically M3, on the same or neighboring Type II cells. This muscarinic feedback augments taste-evoked release of ATP. In type III cells, sour taste is initiated when protons enter through apically located proton-selective ion channels: polycystic kidney disease 2-like 1 protein (PKD2L1) and polycystic kidney disease 1-like 3 protein (PKD1L3) channels. Weak acids may also activate sour cells by penetrating the cell membrane and leading to closure of resting K+ channels and membrane depolarization. Further, voltage-gated Ca2+ channels are activated and release vesicular serotonin (5-HT), norepinephrine (NE) and gamma-aminobutyric acid (GABA). 5-HT and GABA provide negative paracrine feedback onto receptor cells by activating 5-HT1A and GABAA, GABAB receptors, respectively. 5-HT also functions as a transmitter between presynaptic cells and the sensory afferent</td></tr><tr role="row" class="even"><td class="td-word-no-wrap sorting_1">SCN2A</td><td class="td-word-no-wrap"><a href="https://www.ncbi.nlm.nih.gov/biosystems/?term=1269868" target="_blank">Muscle contraction <span class="glyphicon glyphicon-new-window"></span></a></td><td>REACTOME</td><td class="td-word-no-wrap">Homo sapiens</td><td class="text_overflow"><a href="javascript:void(0)" class="aa-info-switch"><span class="glyphicon glyphicon-plus"></span></a>In this module, the processes by which calcium binding triggers actin - myosin interactions and force generation in smooth and striated muscle tissues are annotated</td></tr><tr role="row" class="odd"><td class="td-word-no-wrap sorting_1">SCN2A</td><td class="td-word-no-wrap"><a href="https://www.ncbi.nlm.nih.gov/biosystems/?term=1270302" target="_blank">Developmental Biology <span class="glyphicon glyphicon-new-window"></span></a></td><td>REACTOME</td><td class="td-word-no-wrap">Homo sapiens</td><td class="text_overflow"><a href="javascript:void(0)" class="aa-info-switch"><span class="glyphicon glyphicon-plus"></span></a>As a first step towards capturing the array of processes by which a fertilized egg gives rise to the diverse tissues of the body, examples of three kinds of processes have been annotated. These are aspects of the roles of cell adhesion molecules in axonal guidance and myogenesis, of transcriptional regulation  in hematopoiesis (specifically, B lymphopoiesis), pancreatic beta cell and white adipocyte differentiation, and molecular events of "nodal" signaling</td></tr><tr role="row" class="even"><td class="td-word-no-wrap sorting_1">SCN2A</td><td class="td-word-no-wrap"><a href="https://www.ncbi.nlm.nih.gov/biosystems/?term=1270303" target="_blank">Axon guidance <span class="glyphicon glyphicon-new-window"></span></a></td><td>REACTOME</td><td class="td-word-no-wrap">Homo sapiens</td><td class="text_overflow"><a href="javascript:void(0)" class="aa-info-switch"><span class="glyphicon glyphicon-plus"></span></a>Axon guidance / axon pathfinding is the process by which neurons send out axons to reach the correct targets. Growing axons have a highly motile structure at the growing tip called the growth cone, which senses the guidance cues in the environment through guidance cue receptors and responds by undergoing cytoskeletal changes that determine the direction of axon growth. Guidance cues present in the surrounding environment provide the necessary directional information for the trip. These extrinsic cues have been divided into attractive or repulsive signals that tell the growth cone where and where not to grow. Genetic and biochemical studies have led to the identification of highly conserved families of guidance molecules and their receptors that guide axons. These include netrins, Slits, semaphorins, and ephrins, and their cognate receptors, DCC and or uncoordinated-5 (UNC5), roundabouts (Robo), neuropilin and Eph. In addition, many other classes of adhesion molecules are also used by growth cones to navigate properly which include NCAM and L1CAM</td></tr><tr role="row" class="odd"><td class="td-word-no-wrap sorting_1">SCN2A</td><td class="td-word-no-wrap"><a href="https://www.ncbi.nlm.nih.gov/biosystems/?term=1270323" target="_blank">L1CAM interactions <span class="glyphicon glyphicon-new-window"></span></a></td><td>REACTOME</td><td class="td-word-no-wrap">Homo sapiens</td><td class="text_overflow"><a href="javascript:void(0)" class="aa-info-switch"><span class="glyphicon glyphicon-plus"></span></a>The L1 family of cell adhesion molecules (L1CAMs) are a subfamily of the immunoglobulin superfamily of transmembrane receptors, comprised of four structurally related proteins: L1, Close Homolog of L1 (CHL1), NrCAM, and Neurofascin. These CAMs contain six Ig like domains, five or six fibronectin like repeats, a transmembrane region and a cytoplasmic domain. The L1CAM family has been implicated in processes integral to nervous system development, including neurite outgrowth, neurite fasciculation and inter neuronal adhesion.L1CAM members are predominately expressed by neuronal, as well as some nonneuronal cells, during development.  Except CHL1 all the other members of L1 family contain an alternatively spliced 12-nclueotide exon, encoding the amino acid residues RSLE in the neuronal splice forms but missing in the non-neuronal cells. The extracellular regions of L1CAM members are divergent and differ in their abilities to interact with extracellular, heterophilic ligands. The L1 ligands include other Ig-domain CAMs (such as NCAM, TAG-1/axonin and F11), proteoglycans type molecules (neurocan), beta1 integrins, and extra cellular matrix protein laminin, Neuropilin-1, FGF and EGF receptors. Some of these L1-interacting proteins also bind to other L1CAM members. For example TAG-1/axonin interact with L1 and NrCAM; L1, neurofascin and CHL1 binds to contactin family members. The cytoplasmic domains of L1CAM members are most highly conserved. Nevertheless, they have different cytoplasmic binding partners, and even those with similar binding partners may be involved in different signaling complexes and mechanisms. The most conserved feature of L1CAMs is their ability to interact with the actin cytoskeletal adapter protein ankyrin. The cytoplasmic ankyrin-binding domain, exhibits the highest degree of amino acid conservation throughout the L1 family</td></tr><tr role="row" class="even"><td class="td-word-no-wrap sorting_1">SCN2A</td><td class="td-word-no-wrap"><a href="https://www.ncbi.nlm.nih.gov/biosystems/?term=1270325" target="_blank">Interaction between L1 and Ankyrins <span class="glyphicon glyphicon-new-window"></span></a></td><td>REACTOME</td><td class="td-word-no-wrap">Homo sapiens</td><td class="text_overflow"><a href="javascript:void(0)" class="aa-info-switch"><span class="glyphicon glyphicon-plus"></span></a>Ankyrins are a family of adaptor proteins that couple membrane proteins such as voltage gated Na+ channels and the Na+/K+ anion exchanger to the spectrin actin cytoskeleton. Ankyrins are encoded by three genes (ankyrin-G, -B and -R) of which ankyrin-G and -B are the major forms expressed in the developing nervous system. Ankyrins bind to the cytoplasmic domain of L1 CAMs and couple them and ion channel proteins, to the spectrin cytoskeleton. This binding enhances the homophilic adhesive activity of L1 and reduces its mobility within the plasma membrane. L1 interaction with ankyrin mediates branching and synaptogenesis of cortical inhibitory neurons</td></tr><tr role="row" class="odd"><td class="td-word-no-wrap sorting_1">SCN2A</td><td class="td-word-no-wrap"><a href="https://www.ncbi.nlm.nih.gov/biosystems/?term=1339115" target="_blank">Cardiac conduction <span class="glyphicon glyphicon-new-window"></span></a></td><td>REACTOME</td><td class="td-word-no-wrap">Homo sapiens</td><td class="text_overflow"><a href="javascript:void(0)" class="aa-info-switch"><span class="glyphicon glyphicon-plus"></span></a>The normal sequence of contraction of atria and ventricles of the heart require activation of groups of cardiac cells. The mechanism must elicit rapid changes in heart rate and respond to changes in autonomic tone. The cardiac action potential controls these functions. Action potentials are generated by the movement of ions through transmembrane ion channels in cardiac cells. Like skeletal myocytes (and axons), in the resting state, a given cardiac myocyte has a negative membrane potential. In both muscle types, after a delay (the absolute refractory period), K+ channels reopen and the resulting flow of K+ out of the cell causes repolarisation. The voltage-gated Ca2+ channels on the cardiac sarcolemma membrane are generally triggered by an influx of Na+ during phase 0 of the action potential. Cardiac muscle cells are so tightly bound that when one of these cells is excited the action potential spreads to all of them. The standard model used to understand the cardiac action potential is the action potential of the ventricular myocyte (Park &amp; Fishman 2011, Grant 2009).The action potential has 5 phases (numbered 0-4). Phase 4 describes the membrane potential when a cell is not being stimulated. The normal resting potential in the ventricular myocardium is between -85 to -95 mV. The K+ gradient across the cell membrane is the key determinant in the normal resting potential. Phase 0 is the rapid depolarisation phase in which electrical stimulation of a cell opens the closed, fast Na+ channels, causing a large influx of Na+ creating a Na+ current (INa+). This causes depolarisation of the cell. The slope of phase 0 represents the maximum rate of potential change and differs in contractile and pacemaker cells. Phase 1 is the inactivation of the fast Na+ channels. The transient net outward current causing the small downward deflection (the "notch" of the action potetial) is due to the movement of K+ and Cl- ions. In pacemaker cells, this phase is due to rapid K+ efflux and closure of L-type Ca2+ channels. Phase 2 is the plateau phase which is sustained by a balance of Ca2+ influx and K+ efflux. This phase sustains muscle contraction. Phase 3 of the action potential is where a concerted action of two outward delayed currents brings about repolarisation back down to the resting potential (Bartos et al. 2015)</td></tr><tr role="row" class="even"><td class="td-word-no-wrap sorting_1">SCN2A</td><td class="td-word-no-wrap"><a href="https://www.ncbi.nlm.nih.gov/biosystems/?term=1339117" target="_blank">Phase 0 - rapid depolarisation <span class="glyphicon glyphicon-new-window"></span></a></td><td>REACTOME</td><td class="td-word-no-wrap">Homo sapiens</td><td class="text_overflow"><a href="javascript:void(0)" class="aa-info-switch"><span class="glyphicon glyphicon-plus"></span></a>Phase 0 is the rapid depolarisation phase in which electrical stimulation of a cell initiates events involving the influx and efflux of ions resulting in the production of a cell's action potential. The cell's excitation opens the closed, fast Na+ channel proteins, causing a large influx of Na+ creating a Na+ current (INa+). This causes depolarisation of the cell then voltage-dependent L-type calcium channels (LTCCs) transport Ca2+ into excitable cells. The slope of phase 0 represents the maximum rate of potential change and differs in contractile and pacemaker cells. The potential in this phase changes from around -90mV to around +50mV (Park &amp; Fishman 2011, Grant 2009)</td></tr></tbody>
</table><div id="" class="col-md-6"><div class="dataTables_info" id="DataTables_Table_3_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div></div><div id="" class="col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_3_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_3_previous"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="DataTables_Table_3_next"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div><br>
</div>
</div>
</div>


<br>
<br>
</div>


<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>