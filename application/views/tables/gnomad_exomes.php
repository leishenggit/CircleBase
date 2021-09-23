<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Genetic variants from gnomAD</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>alternate_allele_count</th>
<th>total_number_of_alleles</th>
<th>frequency</th>
<th>chromosome</th>
<th>start_position</th>
<th>end_position</th>
<th>ref</th>
<th>alt</th>
<th>gene</th>
<th>effect</th>
<th>mutation_type</th>
</tr></thead><tbody>
<?php
if(isset($query)){
    foreach ($query->result_array() as $row){
        echo "<tr>";
        foreach($row as  $key => $value){
                echo "<td>$value</td>";
        }
        echo "</tr>";
    }
}
?>
</tbody>
</table>

