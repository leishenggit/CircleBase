<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Regulatory element from ChromHMM</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>Chr</th>
<th>Start</th>
<th>End</th>
<th>State</th>
<th>Cell line</th>
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