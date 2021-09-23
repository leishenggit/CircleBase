<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;GO enrichment for targeting gene</p>
<div class="container-fluid">
<h3 class='alert alert-warning'>GO enrichment result as for Biological Process (BP)</h3>
<?php if (isset($enricherGO_BP)): ?>
<img src="<?php echo $enricherGO_BP;?>" class="img-responsive" alt="Responsive image">
<a class="btn btn-success"  role="button" download="" href="<?php echo $enricherGO_BP_csv;?>">Download table<span class='glyphicon glyphicon-download-alt'></span></a>
<a class="btn btn-success"  role="button" download="" href="<?php echo $enricherGO_BP_pdf;?>">Download PDF<span class='glyphicon glyphicon-download-alt'></span></a>
<?php else: ?>
<h3>No siginificant enrichment result</h3>
<?php endif; ?>
<br>
<br>

<h3 class='alert alert-warning'>GO enrichment result as for Molecular Function (MF)</h3>
<?php if (isset($enricherGO_MF)): ?>
<img src="<?php echo $enricherGO_MF;?>" class="img-responsive" alt="Responsive image">
<a class="btn btn-success"  role="button" download=""  href="<?php echo $enricherGO_MF_csv;?>">Download table<span class='glyphicon glyphicon-download-alt'></span></a>
<a class="btn btn-success"  role="button" download=""  href="<?php echo $enricherGO_MF_pdf?>">Download PDF<span class='glyphicon glyphicon-download-alt'></span></a>
<?php else: ?>
<h3>No siginificant enrichment result</h3>
<?php endif; ?>
<br>
<br>

<h3 class='alert alert-warning'>GO enrichment result as for Cellular component (CC)</h3>
<?php if (isset($enricherGO_CC)): ?>
<img src="<?php echo $enricherGO_CC;?>" class="img-responsive" alt="Responsive image">
<a class="btn btn-success"  role="button" download="" href="<?php echo $enricherGO_CC_csv;?>">Download table<span class='glyphicon glyphicon-download-alt'></span></a>
<a class="btn btn-success"  role="button" download="" href="<?php echo $enricherGO_CC_pdf;?>">Download PDF<span class='glyphicon glyphicon-download-alt'></span></a>
<?php else: ?>
<h3>No siginificant enrichment result</h3>
<?php endif; ?>
</div>

<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;KEGG pathway enrichment for targeting gene</p>
<div class="container-fluid">
<h3 class='alert alert-warning'>KEGG pathway enrichment result</h3>
<?php if (isset($enricherKEGG_pathway)): ?>
<img src="<?php echo $enricherKEGG_pathway;?>" class="img-responsive" alt="Responsive image">
<a class="btn btn-success"  role="button" download="" href="<?php echo $enricherKEGG_pathway_csv;?>">Download table<span class='glyphicon glyphicon-download-alt'></span></a>
<a class="btn btn-success"  role="button" download="" href="<?php echo $enricherKEGG_pathway_pdf;?>">Download PDF<span class='glyphicon glyphicon-download-alt'></span></a>
<?php else: ?>
<h3>No siginificant enrichment result</h3>
<?php endif; ?>
</div>