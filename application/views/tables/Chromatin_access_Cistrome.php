<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Chromatin access region from Cistrome</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>chromosome</th>
<th>start</th>
<th>end</th>
<th>GSMID</th>
<th>Biosample_Type</th>
<th>Biosample_Name</th>
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