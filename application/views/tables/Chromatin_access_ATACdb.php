<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Chromatin access region from ATACdb</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>sample_ID</th>
<th>region_ID</th>
<th>chromosome</th>
<th>start</th>
<th>end</th>
<th>region size</th>
<th>qvalue(-10*log10qvalue)</th>
<th>fold change</th>
<th>pvalue</th>
<th>qvalue</th>
<th>relative summit position to peak start</th>
<th>Biosample_type</th>
<th>Tissue_type</th>
<th>Biosample_name</th>
<th>cancer_type</th>
</tr></thead><tbody>
<?php
if(isset($query)){
    foreach ($query->result_array() as $row){
        echo "<tr>";
        foreach($row as  $key => $value) echo "<td>$value</td>";
        echo "</tr>";
    }
}
?>
</tbody>
</table>

