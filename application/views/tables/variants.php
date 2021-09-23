<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Genetic variants from OncoBase</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>chromosome</th>
<th>position</th>
<th>ref</th>
<th>alt</th>
<th>gene_region</th>
<th>gene_symbol</th>
<th>effect</th>
<th>mutation_type</th>
<th>COSMIC70</th>
<th>TCGA_occurrence</th>
<th>ICGC_occurrence</th>
<th>ClinVar</th>
<th>source</th>
</tr></thead><tbody>
<?php
if(isset($query)){
    foreach ($query->result_array() as $row){
        $data = array($row['chromosome'], $row['start_position'], $row['ref_base'],
                        $row['alt_base'], $row['Gene_region'], $row['Gene_symbol'], $row['Effect'],
                        $row['Mutation_type'], $row['cosmic70'], $row['TCGA_Occurrence'],
                        $row['ICGC_Occurrence'], $row[' CLNDBN'], trim($row['source'], ','));
        echo "<tr>";
        foreach($data as $key => $value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
}
?>
</tbody>
</table>

