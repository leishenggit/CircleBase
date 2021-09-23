<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Genetic variants from GWAS_Catalog</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>pubmed_id</th>
<th>public_date</th>
<th>disease_trait</th>
<th>cytogenetic_region</th>
<th>chromosome</th>
<th>position</th>
<th>gene</th>
<th>strongest_snp_risk_allele</th>
<th>rsid</th>
<th>variant_context</th>
<th>risk_allele_frequency</th>
<th>pvalue</th>
</tr></thead><tbody>
<?php
if(isset($query)){
    foreach ($query->result_array() as $row){
        echo "<tr>";
        foreach($row as  $key => $value){
            if($key == "rsid")
                echo"<td><a href='https://www.ncbi.nlm.nih.gov/snp/?term=$value' target='_blank'>$value</a></td>";
            else if($key == "pubmed_id")
                echo"<td><a href='https://pubmed.ncbi.nlm.nih.gov/$value' target='_blank'>$value</a></td>";
            else
                echo "<td>$value</td>";
        }
        echo "</tr>";
    }
}
?>
</tbody>
</table>

