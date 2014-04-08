<?php
include"DB_driver.php";

$query = "SELECT * FROM tim ORDER BY SALES_ID";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $SALES_ID=$data['SALES_ID'];
	$NAMA_PEGAWAI=$data['NAMA_PEGAWAI'];
	$ID_TEAM=$data['ID_TEAM'];
	$NAMA_TEAM=$data['NAMA_TEAM'];
	$SUPERVISOR=$data['SUPERVISOR'];
	echo "
	<tr>
	<td align=right><center>$data[SALES_ID]</center></td>
	<td>$data[NAMA_PEGAWAI]</td>
	<td><center>$data[ID_TEAM]</center></td>
	<td><center>$data[NAMA_TEAM]</center></td>
	<td><center>$data[SUPERVISOR]</center></td>
	<td><center>
	<div class='btn-group'><a class='btn btn-primary' href=form_edit_data_tim.php?id=$data[SALES_ID]><i class='icon-book icon-white'></i>Edit</a>
	<a class='btn btn-primary dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></a>
	<ul class='dropdown-menu'>
	<li><a href=log_delete_tim.php?id=$data[SALES_ID]><i class='icon-trash'></i> Delete</a></li></ul>
	</div>
	</center>
	</td>
	</tr>";
}
echo "</table>";

?>