<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Chromatin interaction from ENCODE</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>InteractorA_Chr</th>
<th>InteractorA_Start</th>
<th>InteractorA_End</th>
<th>InteractorB_Chr</th>
<th>InteractorB_Start</th>
<th>InteractorB_End</th>
<th>Tested for Variability</th>
<th>Significantly Variable</th>
<th>AKTHY</th>
<th>ARPE</th>
<th>DHL2</th>
<th>DHL4</th>
<th>DU145</th>
<th>ECS</th>
<th>GM12878</th>
<th>H1</th>
<th>H1376</th>
<th>H1437</th>
<th>H9</th>
<th>HepG2</th>
<th>HMTERT</th>
<th>HT1197</th>
<th>Jurkat</th>
<th>K562</th>
<th>KU19</th>
<th>LNCAP</th>
<th>LX</th>
<th>MCF7</th>
<th>MSFIB</th>
<th>MSIPS</th>
<th>MSLCL</th>
<th>NP</th>
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