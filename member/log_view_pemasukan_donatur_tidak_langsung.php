<?php
include"DB_driver.php";

$query = "SELECT * FROM data_transaksi_donatur Where JUMLAH_DONASI_L=0 ORDER BY ID_TRANSAKSI";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $ID_TRANSAKSI=$data['ID_TRANSAKSI'];
	$TANGGAL_TRANSAKSI=$data['TANGGAL_TRANSAKSI'];
	$NAMA_DONATUR=$data['NAMA_DONATUR'];
	$JUMLAH_DONASI_L=$data['JUMLAH_DONASI_TL'];
	$KODE_DONATUR=$data['KODE_DONATUR'];
	$KETERANGAN=$data['KETERANGAN'];
	echo "
	<tr>
	<td align=right><center>$data[ID_TRANSAKSI]</center></td>
	<td><center>$data[TANGGAL_TRANSAKSI]</center></td>
	<td><center>$data[NAMA_DONATUR]</center></td>
	<td><center>$data[JUMLAH_DONASI_TL]</center></td>
	<td><center>$data[KODE_DONATUR]</center></td>";
	echo "
	<td><center>$data[KETERANGAN]</center></td>
	</tr>";
}
echo "</table>";
?>