<div class="container-fluid"> 
<div class="col-md-10 col-md-offset-1">

<br><br>
<?php 
if(isset($item)){
    echo "<h3 >Search result for <span style='color:red;'>$item</span></h3>";
	echo "<hr style='border:2px solid black'>";
}
?>

<table class='table table-bordered table-striped table-hover' id='batch-result-table' style="width:100%">
<thead>
<tr class='danger'>
<th>eccDNA_id</th>
<th>Chr</th>
<th>Start</th>
<th>End</th>
<th>Length</th>
<th>Score</th>
<th>Chr_hg38</th>
<th>Start_hg38</th>
<th>End_hg38</th>
<th>Treatment</th>
<th>Cell line</th>
<th>Sample type</th>
<th>Cell group</th>
<th>Tissue</th>
<th>Library type</th>
<th>Validation</th>
<th>Pubmed</th>
<th>Public date</th>
<th>Annotation</th>
<th>Detailed_annotation</th>
<th>Distance to TSS</th>
<th>Nearest promoterID</th>
<th>NCBI geneID</th>
<th>Nearest Unigene</th>
<th>Nearest Refseq</th>
<th>Nearest Ensembl</th>
<th>Gene name</th>
<th>Gene alias</th>
<th>Gene description</th>
<th>Gene type</th>
</tr>
</thead>
<?php
foreach ($query->result_array() as $row){
    $len = $row['Seq_length'];
    $score = $row['Score'];
    unset($row['Score']);
    unset($row['Seq_length']);
    echo "<tr>";
    foreach($row as  $key => $value){
        if($key == "ecc_id")
            echo"<td><a href='ajax/detail/$value' target='_blank'>$value</a></td>";
        else if($key == "end_hg19")
            echo "<td>$value</td><td>$len</td><td>$score</td>";
        else if($key == "pubmed_id")
            echo"<td><a href='https://pubmed.ncbi.nlm.nih.gov/$value' target='_blank'>$value</a></td>";
        else if($key == "Entrez_ID")
            echo"<td><a href='https://www.ncbi.nlm.nih.gov/gene/?term=$value' target='_blank'>$value</a></td>";
        else if($key == "Nearest_Ensembl_gene")
             echo"<td><a href='http://www.ensembl.org/Homo_sapiens/geneview?gene=$value' target='_blank'>$value</a></td>";
        else
            echo "<td>$value</td>";
    }
    echo "</tr>";
}

?>
</table>
<br>
<br>
<p class="hidden-info"><?php echo $sql;?></p>
</div>
</div>
