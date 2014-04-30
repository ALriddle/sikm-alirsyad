<?php
include"DB_driver.php";

$query = "SELECT * FROM data_transaksi_donatur";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $ID_TRANSAKSI=$data['ID_TRANSAKSI'];
	$TANGGAL_TRANSAKSI=$data['TANGGAL_TRANSAKSI'];
	$NAMA_DONATUR=$data['NAMA_DONATUR'];
	$JUMLAH_DONASI=$data['JUMLAH_DONASI'];
	$STATUS_DONATUR=$data['STATUS_DONATUR'];
	echo "
	<tr>
	<td align=right><center>$data[ID_TRANSAKSI]</center></td>
	<td><center>$data[TANGGAL_TRANSAKSI]</center></td>
	<td><center>$data[NAMA_DONATUR]</center></td>
	<td><center>$data[JUMLAH_DONASI]</center></td>
	<td><center>$data[STATUS_DONATUR]</center></td>
	<td align=center>
	</td>
	";
}
echo "</table>";
?>