<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Regulatory element from SEdb</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>Chr</th>
<th>Start</th>
<th>End</th>
<th>Rank</th>
<th>Element</th>
<th>Common_SNP</th>
<th>eQTL</th>
<th>Risk_SNP</th>
<th>TFBS</th>
<th>Crisps_cas9_target_sites</th>
<th>Case_value</th>
<th>Control_value</th>
<th>Overlap_gene</th>
<th>Proximal_gene</th>
<th>Closest_gene</th>
<th>Closest_active_gene</th>
<th>Data_sources</th>
<th>Biosample_type</th>
<th>Tissue_type</th>
<th>Biosample_name</th>
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