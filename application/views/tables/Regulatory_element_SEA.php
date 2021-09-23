<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Regulatory element from SEA</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>Chr</th>
<th>Start</th>
<th>End</th>
<th>SEID</th>
<th>Name</th>
<th>Length</th>
<th>Cell/Tissue type</th>
<th>Mean(conservative)</th>
<th>Median(conservative)</th>
<th>Associated_gene</th>
<th>Histone modification state</th>
<th>Mark</th>
<th>Gene type</th>
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