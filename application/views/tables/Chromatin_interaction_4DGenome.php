<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Chromatin interaction from 4DGenome</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>InteractorA_Chr</th>
<th>InteractorA_Start</th>
<th>InteractorA_End</th>
<th>InteractorB_Chr</th>
<th>InteractorB_Start</th>
<th>InteractorB_End</th>
<th>A_gene</th>
<th>B_gene</th>
<th>Organism</th>
<th>Cell/Tissue</th>
<th>Detection_Method</th>
<th>Confidence_Score1</th>
<th>Confidence_Score2</th>
<th>Contact_Frequency</th>
<th>Pubmed</th>
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