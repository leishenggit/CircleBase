<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Chromatin interaction from OncoBase</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>InteractorA_Chr</th>
<th>InteractorA_Start</th>
<th>InteractorA_End</th>
<th>InteractorB_Chr</th>
<th>InteractorB_Start</th>
<th>InteractorB_End</th>
<th>Interaction_type</th>
<th>Sample</th>
<th>A_gene</th>
<th>B_gene</th>
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