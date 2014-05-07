<?php
include"DB_driver.php";

$query = "SELECT * FROM kategory_donatur ORDER BY ID_KAT_DONATUR";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $ID_KAT_DONATUR=$data['ID_KAT_DONATUR'];
	$NAMA_DONATUR=$data['NAMA_DONATUR'];
	$JUMLAH_DONASI=$data['JUMLAH_DONASI'];
	$KODE_DONATUR=$data['KODE_DONATUR'];
	$KETERANGAN=$data['KETERANGAN'];
	;
	echo "
	<tr>
	<td align=right><center>$data[ID_KAT_DONATUR]</center></td>
	<td>$data[NAMA_DONATUR]</td>
	<td>$data[JUMLAH_DONASI]</td>
	<td>$data[KODE_DONATUR]</td>
	<td>$data[KETERANGAN]</td>
	<td align=center>
	<a class='btn btn-primary' href=form_edit_kat_donatur.php?id=$data[ID_KAT_DONATUR]><i class='icon-book icon-white'></i>Edit</a>
	<a class='btn btn-danger' href=log_delete_kat_donatur.php?id=$data[ID_KAT_DONATUR]><i class='icon-trash icon-white'></i>Delete</a>
	</td>
	</tr>";
}
echo "</table>";

?>