<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Chromatin access region from ENCODE_DHS</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>chromosome</th>
<th>start</th>
<th>end</th>
<th>Signal_value</th>
<th>Biosample_term_name</th>
<th>Biosample_type</th>
<th>Biosample_treatments</th>
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