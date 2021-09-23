<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Targeting genes from JEME</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>Chr</th>
<th>Start</th>
<th>End</th>
<th>Target Gene</th>
<th>Score</th>
<th>Sample ID</th>
<th>Sample description</th>
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