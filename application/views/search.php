<div id="banner" style="padding-top:20px;padding-bottom:20px;margin-top:-10px;background-color:rgb(24,37,46);color:#F8F8F8">
<div class="container-fluid">
<div class="col-md-10 col-md-offset-1">
<p id="slogan" style="font-size:20px;color:rgb(216,164,6);">Search</p>
<p class="lead">Choosing a query type, select some filters and then paste terms to search</p>
</div>
</div>
</div>
<br><br>

<div class="container-fluid">
	<div class="col-md-10 col-md-offset-1">
	<form class="form-inline" id="batch-search" action="<?php echo site_url('search/batch_search')?>" method="POST">
        <h2>Query by</h2>
        <div class="form-group">
                <label><input type="radio" name="search-type" value="gene">gene symbol&nbsp;&nbsp;</label><a href="javascript:void(0);" name="gene" class="examples">example</a><input name="EGFR;;PAX8;;CDK4;;AKT3;;CCND1;;MYC" type="hidden"/>&nbsp;&nbsp;
                <label><input type="radio" name="search-type" value="region">location (hg19)&nbsp;&nbsp;</label><a href="javascript:void(0);" name="region" class="examples">example</a><input name="chr14-21853358-21924282;;chrX-61882071-62663252;;chr14-61953046-87867770" type="hidden"/>&nbsp;&nbsp;
                <label><input type="radio" name="search-type" value="region_hg38">location (hg38)&nbsp;&nbsp;</label><a href="javascript:void(0);" name="region_hg38" class="examples">example</a><input name="chr14-21853358-21924282;;chrX-61882071-62663252;;chr14-61953046-87867770" type="hidden"/>&nbsp;&nbsp;
                <label><input type="radio" name="search-type" value="eccDNA">eccDNA ID&nbsp;&nbsp;</label><a href="javascript:void(0);" name="eccDNA" class="examples">example</a><input name="ecc228899;;ecc592934;;ecc395028;;ecc600533" type="hidden"/>&nbsp;&nbsp;
                <label><input type="radio" name="search-type" value="ncbi_gene_id">NCBI gene ID&nbsp;&nbsp;</label><a href="javascript:void(0);" name="ncbi_gene_id" class="examples">example</a><input name="1956;;4609;;595;;1019;;10000" type="hidden"/>&nbsp;&nbsp;
                <label><input type="radio" name="search-type" value="ensembl_gene_id">Ensembl gene ID&nbsp;&nbsp;</label><a href="javascript:void(0);" name="ensembl_gene_id" class="examples">example</a><input name="ENSG00000117020;;ENSG00000110092;;ENSG00000125618;;ENSG00000136997;;ENSG00000146648" type="hidden"/>&nbsp;&nbsp;
        </div>
        <h2>Filter by</h2>
        <div class="form-group">
            <label for="">cell group</label>
            <select class="form-control" id="cell_type" name="cell_type">
            <option value="All">All</option>
            <option value="Cancer cell line">Cancer cell line</option>
            <option value="Cancer tissue">Cancer tissue</option>
            <option value="Healthy person">Healthy person</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        
        <div class="form-group">
            <label for="">cell line</label>
            <select class="form-control" id="cell_line" name="cell_line">
            <option value="All">All</option>
            <option value="A549">A549</option>
            <option value="BT474M1">BT474M1</option>
            <option value="BT70">BT70</option>
            <option value="C4-2">C4-2</option>
            <option value="C4-2B">C4-2B</option>
            <option value="CA718">CA718</option>
            <option value="COLO205">COLO205</option>
            <option value="COLO320DM">COLO320DM</option>
            <option value="DU145">DU145</option>
            <option value="EKVX">EKVX</option>
            <option value="ES2">ES2</option>
            <option value="GBM39">GBM39</option>
            <option value="GBM6">GBM6</option>
            <option value="H23">H23</option>
            <option value="H322M">H322M</option>
            <option value="H460">H460</option>
            <option value="H522">H522</option>
            <option value="HCC1569">HCC1569</option>
            <option value="HCC827">HCC827</option>
            <option value="HeLaS3">HeLaS3</option>
            <option value="HF-2354">HF-2354</option>
            <option value="HF-2927">HF-2927</option>
            <option value="HF-3016">HF-3016</option>
            <option value="HF-3177">HF-3177</option>
            <option value="HK296">HK296</option>
            <option value="HK301">HK301</option>
            <option value="HK359">HK359</option>
            <option value="HK423">HK423</option>
            <option value="HL-60">HL-60</option>
            <option value="HOP92">HOP92</option>
            <option value="HT29">HT29</option>
            <option value="K562">K562</option>
            <option value="LnCap">LnCap</option>
            <option value="MB002">MB002</option>
            <option value="MB211FH">MB211FH</option>
            <option value="MB411FH">MB411FH</option>
            <option value="MCF7">MCF7</option>
            <option value="MDA-MB-231">MDA-MB-231</option>
            <option value="MDA-MB-435">MDA-MB-435</option>
            <option value="NCI-ADR-RES">NCI-ADR-RES</option>
            <option value="OVCAR3">OVCAR3</option>
            <option value="OVCAR4">OVCAR4</option>
            <option value="OVCAR5">OVCAR5</option>
            <option value="OVCAR8">OVCAR8</option>
            <option value="PC3">PC3</option>
            <option value="PC-3">PC-3</option>
            <option value="PC9">PC9</option>
            <option value="RCMB20">RCMB20</option>
            <option value="RCMB28">RCMB28</option>
            <option value="RPMI-8226">RPMI-8226</option>
            <option value="RXF-393">RXF-393</option>
            <option value="SF268">SF268</option>
            <option value="SF295">SF295</option>
            <option value="SF539">SF539</option>
            <option value="SK-MEL-2">SK-MEL-2</option>
            <option value="SKMEL-28">SKMEL-28</option>
            <option value="SKOV3">SKOV3</option>
            <option value="Sw620">Sw620</option>
            <option value="T47D">T47D</option>
            <option value="Tissue">Tissue</option>
            <option value="U251">U251</option>
            <option value="U937">U937</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        
        <div class="form-group">
            <label for="">tissue</label>
            <select class="form-control" id="tissue" name="tissue">
                <option value="All">All</option>
                <option value="B-cell">B-cell</option>
                <option value="Biliary tract">Biliary tract</option>
                <option value="Bladder">Bladder</option>
                <option value="Bone">Bone</option>
                <option value="Brain">Brain</option>
                <option value="Breast">Breast</option>
                <option value="Breast cancer/Brain Met">Breast cancer/Brain Met</option>
                <option value="Cell line">Cell line</option>
                <option value="Cervix">Cervix</option>
                <option value="Colon">Colon</option>
                <option value="Connective tissue">Connective tissue</option>
                <option value="Esophagus">Esophagus</option>
                <option value="Head and Neck">Head and Neck</option>
                <option value="Liver">Liver</option>
                <option value="Lung">Lung</option>
                <option value="Lung cancer/Brain Met">Lung cancer/Brain Met</option>
                <option value="Muscle">Muscle</option>
                <option value="Oral">Oral</option>
                <option value="Ovary">Ovary</option>
                <option value="Pancreatic">Pancreatic</option>
                <option value="Pediatric Brain">Pediatric Brain</option>
                <option value="Plasma">Plasma</option>
                <option value="Prostate">Prostate</option>
                <option value="Renal">Renal</option>
                <option value="Skin">Skin</option>
                <option value="Stomach">Stomach</option>
                <option value="Uterine Corpus Endometrial">Uterine Corpus Endometrial</option>
                <option value="Uvea">Uvea</option>
            </select>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label for="">sample type</label>
            <select class="form-control" id="sample_type" name="sample_type">
            <option value="All">All</option>
            <option value="B-cell lymphoma">B-cell lymphoma</option>
            <option value="Biliary tract cancer">Biliary tract cancer</option>
            <option value="Bladder cancer">Bladder cancer</option>
            <option value="Brain">Brain</option>
            <option value="Breast">Breast</option>
            <option value="Breast cancer">Breast cancer</option>
            <option value="Breast cancer/Brain Met">Breast cancer/Brain Met</option>
            <option value="Breast cancer cell line">Breast cancer cell line</option>
            <option value="Cervical adenocarcinoma cell line">Cervical adenocarcinoma cell line</option>
            <option value="Cervical cancer">Cervical cancer</option>
            <option value="Colon cancer">Colon cancer</option>
            <option value="Colon cancer cell line">Colon cancer cell line</option>
            <option value="Colorectal cancer">Colorectal cancer</option>
            <option value="Esophageal cancer">Esophageal cancer</option>
            <option value="Ewing Sarcoma">Ewing Sarcoma</option>
            <option value="Gastric cancer">Gastric cancer</option>
            <option value="Glioblastoma">Glioblastoma</option>
            <option value="Glioblastoma?">Glioblastoma?</option>
            <option value="Glioblastoma cell line">Glioblastoma cell line</option>
            <option value="Glioblastoma ">Glioblastoma </option>
            <option value="Head and neck cancer">Head and neck cancer</option>
            <option value="Hematopoietic cancer cell line">Hematopoietic cancer cell line</option>
            <option value="Histiocytic lymphoma cell line">Histiocytic lymphoma cell line</option>
            <option value="Liver cancer">Liver cancer</option>
            <option value="Lower grade glioma cancer">Lower grade glioma cancer</option>
            <option value="Lung adenocarcinoma">Lung adenocarcinoma</option>
            <option value="Lung cancer/Brain Met">Lung cancer/Brain Met</option>
            <option value="Lung cancer cell line">Lung cancer cell line</option>
            <option value="Lung Squamous cell cancer">Lung Squamous cell cancer</option>
            <option value="Medulloblastoma">Medulloblastoma</option>
            <option value="Medulloblastoma cell line">Medulloblastoma cell line</option>
            <option value="Melanoma cell Line">Melanoma cell Line</option>
            <option value="Muscle in healthy person">Muscle in healthy person</option>
            <option value="Oral cancer">Oral cancer</option>
            <option value="Ovarian cancer">Ovarian cancer</option>
            <option value="Ovarian cancer cell line">Ovarian cancer cell line</option>
            <option value="Pancreatic cancer">Pancreatic cancer</option>
            <option value="Pediatric Brain cancer">Pediatric Brain cancer</option>
            <option value="Plasma healthy person">Plasma healthy person</option>
            <option value="Plasma leukocytes">Plasma leukocytes</option>
            <option value="Prostate cancer">Prostate cancer</option>
            <option value="Prostate cancer cell line">Prostate cancer cell line</option>
            <option value="Renal cancer">Renal cancer</option>
            <option value="Renal cancer cell line">Renal cancer cell line</option>
            <option value="Sarcoma">Sarcoma</option>
            <option value="Skin cancer">Skin cancer</option>
            <option value="Uterine corpus endometrial cancer">Uterine corpus endometrial cancer</option>
            <option value="Uveal melanoma">Uveal melanoma</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="form-group">
            <label for="">library type</label>
            <select class="form-control" id="library_type" name="library_type">
                <option value="All">All</option>
                <option value="ATAC-seq">ATAC-seq</option>
                <option value="cf-eccDNA-seq">cf-eccDNA-seq</option>
                <option value="ChIA-PET">ChIA-PET</option>
                <option value="Circle-Seq">Circle-Seq</option>
                <option value="MicroDNA-seq">MicroDNA-seq</option>
                <option value="PCR">PCR</option>
                <option value="SMOOTH-seq">SMOOTH-seq</option>
                <option value="WES">WES</option>
                <option value="WGS">WGS</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <h2>Search terms</h2>
        <div class="form-group" style="width:100%">
            <textarea class="form-control" rows="10" style="width:50%" name="search-terms" id="search-terms"></textarea>
        </div><br><br>
        <button type="submit" class="btn btn-primary">submit</button>
        <button type="reset" class="btn btn-default">reset</button>
    </form>
    </div>
</div>
