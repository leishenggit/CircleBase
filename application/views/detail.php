<?php 
ini_set ('memory_limit', '1G');
//error report
//error_reporting(0);
?>
<div class="container-fluid">
<div style="margin:0 40px">
<br>
<br>

<style>
.mytooltip{
    font-family: simsun;
    font-size: 16px;
    width: 300px;
    height: auto;
    position: absolute;
    text-align: center;
    padding: 5px;
    color:white;
    background-color: black;
}
</style>

<div class="panel panel-success">
<div class="panel-heading">
<h3>Details for <span class="keyword" id='keyword'><?php echo $eccDNA_id;?></span></h3>
</div>
<div class="panel-body">

<ul class="nav nav-tabs myTab">
 <li class="active"><a href="#Summary" data-toggle="tab">Summary</a></li>
 <li><a href="#Targeting_genes" data-toggle="tab">Targeting genes</a></li>
 <li><a href="#Regulatory" data-toggle="tab">Regulatory elements</a></li>
 <li><a href="#Chromatin_interaction" data-toggle="tab">Chromatin interactions</a></li>
 <li><a href="#Network" data-toggle="tab">Regulatory networks</a></li>
 <li><a href="#Enrichment" data-toggle="tab">Functional enrichment</a></li>
 <li><a href="#Chromatin_access" data-toggle="tab">Chromatin access</a></li>
 <li><a href="#Epigenetic_regulation" data-toggle="tab">Epigenetic regulations</a></li>
 <li><a href="#Genetic_variants" data-toggle="tab">Genetic variants and eQTL</a></li>
</ul>

<div class="tab-content" id="outer-tab-content">

<div class="tab-pane fade in active" id="Summary">
<hr style="border:2px solid black">
<div id='hits_picture' class="col-md-6 col-lg-4" style="min-width:550px"></div>

<div id='raw_score_picture' class="col-md-6 col-lg-4" style="min-width:550px"></div>

<div id='normalized_score_picture' class="col-md-6 col-lg-4" style="min-width:550px"></div>
</div>

<div class="tab-pane fade"  id="Targeting_genes">
<hr style="border:2px solid black">
<div class='col-md-6'>
<br>
<br>
<ul class="nav nav-tabs myTab">
 <li class="active"><a href="#Targeting_genes_VARAdb" data-toggle="tab">VARAdb</a></li>
 <li><a href="#Targeting_genes_GeneHancer" data-toggle="tab">GeneHancer</a></li>
 <li><a href="#Targeting_genes_JEME" data-toggle="tab">JEME</a></li>
</ul>

<div class="tab-content">
<div id='Targeting_genes_VARAdb' class='tab-pane fade in active detail_div'>
<p class="hidden-info"><?php echo $Targeting_genes_VARAdb;?></p>
</div>
<div id='Targeting_genes_GeneHancer' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Targeting_genes_GeneHancer;?></p>
</div>
<div id='Targeting_genes_JEME' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Targeting_genes_JEME;?></p>
</div>
</div>
</div>

<div class='col-md-6' id='Targeting_genes_biocircos'>biocircos here</div>
</div>




<div class="tab-pane fade" id="Regulatory">
<hr style="border:2px solid black">
<div class='col-md-6'>
<br>
<br>
<ul class="nav nav-tabs myTab">
 <li class="active"><a href="#Regulatory_element_dbSUPER" data-toggle="tab">dbSUPER</a></li>
 <li><a href="#Regulatory_element_EnhancerAtlas" data-toggle="tab">EnhancerAtlas</a></li>
 <li><a href="#Regulatory_element_SEA" data-toggle="tab">SEA</a></li>
 <li><a href="#Regulatory_element_SEdb" data-toggle="tab">SEdb</a></li>
 <li><a href="#Regulatory_element_ChromHMM" data-toggle="tab">ChromHMM</a></li>
</ul>

<div class="tab-content">
<div id='Regulatory_element_dbSUPER' class='tab-pane fade in active detail_div'>
<p class="hidden-info"><?php echo $Regulatory_element_dbSUPER;?></p>
</div>
<div id='Regulatory_element_EnhancerAtlas' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Regulatory_element_EnhancerAtlas;?></p>
</div>
<div id='Regulatory_element_SEA' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Regulatory_element_SEA;?></p>
</div>
<div id='Regulatory_element_SEdb' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Regulatory_element_SEdb;?></p>
</div>
<div id='Regulatory_element_ChromHMM' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Regulatory_element_ChromHMM;?></p>
</div>
</div>
</div>

<div class='col-md-6' id='Regulatory_element_biocircos'>biocircos here</div>
</div>


<div class="tab-pane fade" id="Chromatin_interaction">
<hr style="border:2px solid black">
<div class='col-md-6'>
<br>
<br>
<ul class="nav nav-tabs myTab">
 <li class="active"><a href="#Chromatin_interaction_ENCODE" data-toggle="tab">ENCODE</a></li>
 <li><a href="#Chromatin_interaction_4DGenome" data-toggle="tab">4DGenome</a></li>
 <li><a href="#Chromatin_interaction_EpiTensor" data-toggle="tab">OncoBase</a></li>
</ul>

<div class="tab-content">
<div id='Chromatin_interaction_ENCODE' class='tab-pane fade in active detail_div'>
<p class="hidden-info"><?php echo $Chromatin_interaction_ENCODE;?></p>
</div>
<div id='Chromatin_interaction_4DGenome' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Chromatin_interaction_4DGenome;?></p>
</div>
<div id='Chromatin_interaction_EpiTensor' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Chromatin_interaction_EpiTensor;?></p>
</div>
</div>
</div>

<div class='col-md-6' id='Chromatin_interaction_biocircos'>biocircos here</div>
</div>


<div class="tab-pane fade"  id="Chromatin_access">
<hr style="border:2px solid black">
<div class='col-md-6'>
<br>
<br>
<ul class="nav nav-tabs myTab">
 <li class="active"><a href="#Chromatin_access_ATACdb" data-toggle="tab">ATACdb</a></li>
 <li><a href="#Chromatin_access_Cistrome" data-toggle="tab">Cistrome</a></li>
 <li><a href="#Chromatin_access_TCGA_ATAC" data-toggle="tab">TCGA_ATAC</a></li>
 <li><a href="#Chromatin_access_ENCODE_DHS" data-toggle="tab">ENCODE_DHS</a></li>
</ul>

<div class="tab-content">
<div id='Chromatin_access_ATACdb' class='tab-pane fade in active detail_div'>
<p class="hidden-info"><?php echo $Chromatin_access_ATACdb;?></p>
</div>
<div id='Chromatin_access_Cistrome' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Chromatin_access_Cistrome;?></p>
</div>
<div id='Chromatin_access_TCGA_ATAC' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Chromatin_access_TCGA_ATAC;?></p>
</div>
<div id='Chromatin_access_ENCODE_DHS' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Chromatin_access_ENCODE_DHS;?></p>
</div>
</div>
</div>

<div class='col-md-6' id='Chromatin_access_biocircos'>biocircos here</div>
</div>




<div class="tab-pane fade" id="Epigenetic_regulation">
<hr style="border:2px solid black">
<div class='col-md-6'>
<br>
<br>
<ul class="nav nav-tabs myTab">
 <li class="active"><a href="#Epigenetic_regulation_TFBS_HM" data-toggle="tab">TF</a></li>
 <li><a href="#Epigenetic_regulation_HM_ENCODE" data-toggle="tab">HM_ENCODE</a></li>
 <li><a href="#Epigenetic_regulation_HM_RoadMap" data-toggle="tab">HM_RoadMap</a></li>
</ul>

<div class="tab-content">
<div id='Epigenetic_regulation_TFBS_HM' class='tab-pane fade in active detail_div'>
<p class="hidden-info"><?php echo $Epigenetic_regulation_TFBS_HM;?></p>
</div>
<div id='Epigenetic_regulation_HM_ENCODE' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Epigenetic_regulation_HM_ENCODE;?></p>
</div>
<div id='Epigenetic_regulation_HM_RoadMap' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Epigenetic_regulation_HM_RoadMap;?></p>
</div>
</div>
</div>

<div class='col-md-6' id='Epigenetic_regulation_biocircos'>biocircos here</div>
</div>





<div class="tab-pane fade" id="Network"></div>
<div class="tab-pane fade" id="Enrichment"></div>

<div class="tab-pane fade" id="Genetic_variants">
<hr style="border:2px solid black">
<br>
<br>
<ul class="nav nav-tabs myTab">
 <li class="active"><a href="#variants" data-toggle="tab">OncoBase</a></li>
 <li><a href="#Gene4Denovo" data-toggle="tab">Gene4Denovo</a></li>
 <li><a href="#dbSNP" data-toggle="tab">dbSNP</a></li>
 <li><a href="#gnomad_exomes" data-toggle="tab">gnomAD</a></li>
 <li><a href="#GTEx_eQTLs" data-toggle="tab">GTEx_eQTL</a></li>
 <li><a href="#GWAS_Catalog" data-toggle="tab">GWAS_Catalog</a></li>
 <li><a href="#GWASdb" data-toggle="tab">GWASdb</a></li>
 <li><a href="#PancanQTL" data-toggle="tab">PancanQTL</a></li>
</ul>

<div class="tab-content">
<div id='variants' class='tab-pane fade in active detail_div'>
<p class="hidden-info"><?php echo $variants;?></p>
</div>
<div id='Gene4Denovo' class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $Gene4Denovo;?></p>
</div>
<div id='dbSNP'  class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $dbSNP;?></p>
</div>
<div id='gnomad_exomes'  class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $gnomad_exomes;?></p>
</div>
<div id='GTEx_eQTLs'  class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $GTEx_eQTLs;?></p>
</div>
<div id='GWAS_Catalog'  class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $GWAS_Catalog;?></p>
</div>
<div id='GWASdb'  class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $GWASdb;?></p>
</div>
<div id='PancanQTL'  class='tab-pane fade detail_div'>
<p class="hidden-info"><?php echo $PancanQTL;?></p>
</div>
</div>

</div>



<p class="hidden-info" id='eccDNA_region'><?php echo $region;?></p>
</div>
</div>
</div>
</div>
</div>
