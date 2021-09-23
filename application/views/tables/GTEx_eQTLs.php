<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Genetic variants from GTEx_eQTL</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>chromosome</th>
<th>position</th>
<th>ref</th>
<th>alt</th>
<th>gene_id</th>
<th>tss_distance</th>
<th>ma_samples </th>
<th>ma_count</th>
<th>maf</th>
<th>pval_nominal </th>
<th>slope</th>
<th>slope_se</th>
<th>pval_nominal_threshold</th>
<th>min_pval_nominal</th>
<th>pval_beta</th>
<th>tissue</th>
</tr></thead><tbody>
<?php
if(isset($query)){
    foreach ($query->result_array() as $row){
        echo "<tr>";
        foreach($row as  $key => $value){
                echo "<td>$value</td>";
        }
        echo "</tr>";
    }
}
?>
</tbody>
</table>

