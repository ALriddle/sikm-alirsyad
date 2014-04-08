<?php
include"DB_driver.php";

$query = "SELECT * FROM kategory_pengeluaran ORDER BY ID_KAT_PENGELUARAN";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $ID_KAT_PENGELUARAN=$data['ID_KAT_PENGELUARAN'];
	$NAMA_PENGELUARAN=$data['NAMA_PENGELUARAN'];
	$KODE_PENGELUARAN=$data['KODE_PENGELUARAN'];
	;
	echo "
	<tr>
	<td align=right><center>$data[ID_KAT_PENGELUARAN]</center></td>
	<td>$data[NAMA_PENGELUARAN]</td>
	<td>$data[KODE_PENGELUARAN]</td>
	<td align=center>
	<a class='btn btn-primary' href=form_edit_kat_PENGELUARAN.php?id=$data[ID_KAT_PENGELUARAN]><i class='icon-book icon-white'></i>Edit</a>
	<a class='btn btn-danger' href=log_delete_kat_PENGELUARAN.php?id=$data[ID_KAT_PENGELUARAN]><i class='icon-trash icon-white'></i>Delete</a>
	</td>
	</tr>";
}
echo "</table>";

?>