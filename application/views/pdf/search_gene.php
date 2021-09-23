<div id="result"> 
<br><br>
<!-- class="container-fluid" is the key to the function of showing example input in search term box   -->
<div class="container-fluid"> 
	<div class="col-md-10 col-md-offset-1">
	<!-- id="batch-search" is the key to the function of showing the progress bar and submit the query, which is controlled by javascript function in common.js file -->
	<!-- Give up using ajax to submit the form  -->
	<form role="form" id="batch-search">  
           <div class="form-group">
                <label class="control-label" for="project">Project type</label>
                    <select id="project" name="project" class="form-control" onchange="hidden_div()">
                        <!--<option value="Total">TCGA and ICGC</option> -->
                        <option value="TCGA">TCGA</option>
                        <option value="ICGC">ICGC</option>
                    </select>
            </div>
	        <div class="form-group" id="TCGA_cancers">
                <label class="control-label" for="cancer">Cancer type</label>
                    <select id="cancer" name="cancer" class="form-control">
                    	<option value="PanCancer">Pan Cancer</option>
                    	<option value="All">All Cancers</option>
                    	<option value="ACC">Adrenocortical carcinoma [ACC] </option>
						<option value="BLCA">Bladder Urothelial Carcinoma [BLCA] </option>
						<option value="BRCA">Breast invasive carcinoma [BRCA] </option>
						<option value="CESC">Cervical squamous cell carcinoma and endocervical adenocarcinoma [CESC] </option>
						<option value="CHOL">Cholangiocarcinoma [CHOL] </option>
						<option value="COAD">Colon adenocarcinoma [COAD] </option>
						<option value="DLBC">Lymphoid Neoplasm Diffuse Large B-cell Lymphoma [DLBC] </option>
						<option value="ESCA">Esophageal carcinoma [ESCA] </option>
						<option value="GBM">Glioblastoma multiforme [GBM] </option>
						<option value="HNSC">Head and Neck squamous cell carcinoma [HNSC] </option>
						<option value="KICH">Kidney Chromophobe [KICH] </option>
						<option value="KIRC">Kidney renal clear cell carcinoma [KIRC] </option>
						<option value="KIRP">Kidney renal papillary cell carcinoma [KIRP] </option>
						<option value="LAML">Acute Myeloid Leukemia [LAML] </option>
						<option value="LGG">Brain Lower Grade Glioma [LGG] </option>
						<option value="LIHC">Liver hepatocellular carcinoma [LIHC] </option>
						<option value="LUAD">Lung adenocarcinoma [LUAD] </option>
						<option value="LUSC">Lung squamous cell carcinoma [LUSC] </option>
						<option value="MESO">Mesothelioma [MESO] </option>
						<option value="OV">Ovarian serous cystadenocarcinoma [OV] </option>
						<option value="PAAD">Pancreatic adenocarcinoma [PAAD] </option>
						<option value="PCPG">Pheochromocytoma and Paraganglioma [PCPG] </option>
						<option value="PRAD">Prostate adenocarcinoma [PRAD] </option>
						<option value="READ">Rectum adenocarcinoma [READ] </option>
						<option value="SARC">Sarcoma [SARC] </option>
						<option value="SKCM">Skin Cutaneous Melanoma [SKCM] </option>
						<option value="STAD">Stomach adenocarcinoma [STAD] </option>
						<option value="TGCT">Testicular Germ Cell Tumors [TGCT] </option>
						<option value="THCA">Thyroid carcinoma [THCA] </option>
						<option value="THYM">Thymoma [THYM] </option>
						<option value="UCEC">Uterine Corpus Endometrial Carcinoma [UCEC] </option>
						<option value="UCS">Uterine Carcinosarcoma [UCS] </option>
						<option value="UVM">Uveal Melanoma [UVM] </option>
                    </select>
            </div>
            <div class="form-group" id="ICGC_cancers" hidden="hidden">
                <label class="control-label" for="cancer">Cancer type</label>
                    <select id="cancer" name="cancer" class="form-control">
                    	<option value="PanCancer">Pan Cancer</option>
                    	<option value="All">All Cancers</option>
						<!--<option value="ALL">Acute Lymphoblastic Leukemia [ALL] </option>-->
						<!--<option value="BLCA">Bladder Urothelial Carcinoma [BLCA] </option>-->
						<option value="BOCA">Bone Cancer [BOCA] </option>
						<option value="BRCA">Breast invasive carcinoma [BRCA] </option>
						<option value="BTCA">Biliary Tract Cancer [BTCA] </option>
						<!--<option value="CESC">Cervical squamous cell carcinoma and endocervical adenocarcinoma [CESC] </option>-->
						<option value="CLLE">Chronic Lymphocytic Leukemia [CLLE] </option>
						<option value="CMDI">Chronic Myeloid Disorders [CMDI] </option>
						<!--<option value="COAD">Colon adenocarcinoma [COAD] </option>-->
						<!--<option value="COCA">Colorectal Cancer [COCA] </option>-->
						<!--<option value="DLBC">Lymphoid Neoplasm Diffuse Large B-cell Lymphoma [DLBC] </option>-->
						<option value="EOPC">Early Onset Prostate Cancer [EOPC] </option>
						<option value="ESAD">Esophageal Adenocarcinoma [ESAD] </option>
						<!--<option value="ESCA">Esophageal carcinoma [ESCA] </option>-->
						<!--<option value="FPPP">FFPE Pilot Phase II [FPPP] </option>-->
						<option value="GACA">Gastric Cancer [GACA] </option>
						<!--<option value="GBM">Glioblastoma multiforme [GBM] </option>-->
						<!--<option value="HNSC">Head and Neck squamous cell carcinoma [HNSC] </option>-->
						<!--<option value="KICH">Kidney Chromophobe [KICH] </option>-->
						<!--<option value="KIRC">Kidney renal clear cell carcinoma [KIRC] </option>-->
						<!--<option value="KIRP">Kidney renal papillary cell carcinoma [KIRP] </option>-->
						<!--<option value="LAML">Acute Myeloid Leukemia [LAML] </option>-->
						<!--<option value="LGG">Brain Lower Grade Glioma [LGG] </option>-->
						<!--<option value="LIAD">Benign Liver Tumour [LIAD] </option>-->
						<option value="LICA">Liver Cancer [LICA] </option>
						<!--<option value="LIHC">Liver hepatocellular carcinoma [LIHC] </option>-->
						<!--<option value="LIHM">Liver Cancer - Hepatocellular macronodules [LIHM] </option>-->
						<!--<option value="LMS">Leiomyosarcoma [LMS] </option>-->
						<!--<option value="LUAD">Lung adenocarcinoma [LUAD] </option>-->
						<!--<option value="LUSC">Lung squamous cell carcinoma [LUSC] </option>-->
						<option value="MALY">Malignant Lymphoma [MALY] </option>
						<option value="MELA">Skin Cancer [MELA] </option>
						<!--<option value="NBL">Neuroblastoma [NBL] </option>-->
						<!--<option value="NKTL">Blood Cancer - T-cell and NK-cell lymphoma [NKTL] </option>-->
						<option value="ORCA">Oral Cancer [ORCA] </option>
						<option value="OV">Ovarian serous cystadenocarcinoma [OV] </option>
						<option value="PACA">Pancreatic Cancer [PACA] </option>
						<option value="PAEN">Pancreatic Cancer Endocrine neoplasms [PAEN] </option>
						<option value="PBCA">Pediatric Brain Cancer [PBCA] </option>
						<!--<option value="PEME">Pediatric Medulloblastoma [PEME] </option>-->
						<option value="PRAD">Prostate adenocarcinoma [PRAD] </option>
						<!--<option value="READ">Rectum adenocarcinoma [READ] </option>-->
						<option value="RECA">Renal Cancer [RECA] </option>
						<!--<option value="RT">Rhabdoid Tumors [RT] </option>-->
						<!--<option value="SARC">Sarcoma [SARC] </option>-->
						<!--<option value="SKCA">Skin Adenocarcinoma [SKCA] </option>-->
						<!--<option value="SKCM">Skin Cutaneous Melanoma [SKCM] </option>-->
						<!--<option value="STAD">Stomach adenocarcinoma [STAD] </option>-->
						<!--<option value="THCA">Thyroid carcinoma [THCA] </option>-->
						<!--<option value="UCEC">Uterine Corpus Endometrial Carcinoma [UCEC] </option>-->
						<!--<option value="UCS">Uterine Carcinosarcoma [UCS] </option>-->
						<!--<option value="WT">Wilms Tumor [WT] </option>-->
                    </select>
            </div>
            <div class="form-group">
                <!---<label class="control-label" for="">Search type</label>-->
                <div class="radio">
                Genes:&nbsp;&nbsp;&nbsp;&nbsp;
				<label><input type="radio" id="search-type" name="search-type" value="gene">Official gene symbols&nbsp;&nbsp;</label><a href="javascript:void(0);" name="gene" class="examples">example</a><input name="CTNNB1;;FGFR3;;ACTB;;STAG2;;AHR" type="hidden"/>&nbsp;&nbsp;
				<label><input type="radio" id="search-type" name="search-type" value="Ensembl">Ensembl gene IDs&nbsp;&nbsp;</label><a href="javascript:void(0);" name="Ensembl" class="examples">example</a><input name="ENSG00000168036;;ENSG00000068078;;ENSG00000075624;;ENSG00000101972;;ENSG00000106541" type="hidden"/>&nbsp;&nbsp;
				<label><input type="radio" id="search-type" name="search-type" value="Entrez">Entrez IDs&nbsp;&nbsp;</label><a href="javascript:void(0);" name="Entrez" class="examples">example</a><input name="1499;;2261;;60;;10735;;196" type="hidden"/>&nbsp;&nbsp;<br>
				</div>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="10" name="search-terms" id="search-terms"></textarea>
            </div>
            <div style="margin-bottom: 0;">
                    <button id="search-btn" type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp; 
                    <!---<button id="search-btn" type="submit" class="btn btn-primary" onClick="sub_form()">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp; -->
                    <button id="search-btn" type="reset" class="btn btn-primary" >Reset</button>
            </div>
        </form>
        <br><br>
		<!--<div id="result"></div>
		<br><br> -->
     </div>
</div>
</div> 

<script type="text/javascript">

        //这个方法用来当下拉框选择到填空和判断的时候隐藏选项一栏
        function hidden_div(){
            var objS = document.getElementById("project"); //通过id获得这个元素
            var value = objS.options[objS.selectedIndex].value; //获得option中的值
            if(value == "TCGA")  //如果是选择 就显示选择一栏 隐藏判断一栏
            {
                $("#TCGA_cancers").show();
                $("#ICGC_cancers").hide();
            }
            else if(value == "ICGC")  //如果是判断 就隐藏选择一栏 显示判断一栏
            {
                $("#TCGA_cancers").hide();
                $("#ICGC_cancers").show();
            }
        }
 </script>
