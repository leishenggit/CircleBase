<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;Genetic variants from Gene4Denovo</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>chromosome</th>
<th>start</th>
<th>end</th>
<th>ref</th>
<th>alt</th>
<th>sample_id</th>
<th>sample_group</th>
<th>sequencing_type</th>
<th>author</th>
<th>pubmed_id</th>
</tr></thead><tbody>
<?php
if(isset($query)){
    foreach ($query->result_array() as $row){
        echo "<tr>";
        foreach($row as  $key => $value){
            if($key == "pubmed_id")
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

