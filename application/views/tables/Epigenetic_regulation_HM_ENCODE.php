<p class="section-title"><button class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>&nbsp;&nbsp;HM(histone modification) from ENCODE</p>
<table class='table table-bordered table-striped detail-table'><thead><tr class="danger">
<th>Chr</th>
<th>Start</th>
<th>End</th>
<th>Source</th>
<th>Cell line</th>
<th>Antibody</th>
</tr></thead><tbody>
<?php
if(isset($query)){
    foreach ($query->result() as $row){
        echo "<tr><td>$row->chromosome</td><td>$row->start_position</td><td>$row->end_position</td><td>$row->info_8</td><td>$row->info_9</td><td>$row->info_10</td></tr>";
    }
}
?>
</tbody>
</table>