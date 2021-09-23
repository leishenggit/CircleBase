<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Genetic variants from PancanQTL</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>tumor</th>
<th>rsid</th>
<th>chromosome</th>
<th>position</th>
<th>alleles</th>
<th>gene</th>
<th>gene_position</th>
<th>eQTL_type</th>
</tr></thead><tbody>
<?php
if(isset($query)){
    foreach ($query->result_array() as $row){
        echo "<tr>";
        foreach($row as  $key => $value){
            if($key == "rsid")
                echo"<td><a href='https://www.ncbi.nlm.nih.gov/snp/?term=$value' target='_blank'>$value</a></td>";
            else
                echo "<td>$value</td>";
        }
        echo "</tr>";
    }
}
?>
</tbody>
</table>

