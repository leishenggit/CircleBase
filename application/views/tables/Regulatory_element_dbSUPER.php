
<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Enhancer information from dbSUPER</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>Super_Chr</th>
<th>Super_Start</th>
<th>Super_End</th>
<th>Cell_Tissue</th>
<th>Associated_Gene</th>
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
</div>