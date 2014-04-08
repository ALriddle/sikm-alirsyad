<?php
include"DB_driver.php";

$query = "SELECT * FROM dim_area ORDER BY ID_CITY";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $ID_CITY=$data['ID_CITY'];
	$CITY=$data['CITY'];
	echo "
	<tr>
	<td align=right><center>$data[ID_CITY]</center></td>
	<td>$data[CITY]</td>
	<td align=center>
	<div class='btn-group'><a class='btn btn-primary' href=form_edit_data_area.php?id=$data[ID_CITY]><i class='icon-book icon-white'></i>Edit Data</a>
	<a class='btn btn-primary dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></a>
	<ul class='dropdown-menu'>
	<li><a href=log_delete_area.php?id=$data[ID_CITY]><i class='icon-trash'></i> Delete</a></li></ul>
	</div>
	</td>
	</tr>";
}
echo "</table>";

?>