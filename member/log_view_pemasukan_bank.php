<?php
include"DB_driver.php";

$query = "SELECT * FROM data_transaksi_BANK ORDER BY NO_TRANSAKSI_BANK";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $NO_TRANSAKSI_BANK=$data['NO_TRANSAKSI_BANK'];
	$KODE_BANK=$data['KODE_BANK'];
	$TANGGAL_BANK=$data['TANGGAL_BANK'];
	$MASUK_BANK=$data['MASUK_BANK'];
	$KELUAR_BANK=$data['KELUAR_BANK'];
	$SALDO_BANK=$data['SALDO_BANK'];
	$SALDO_TOTAL_BANK=$data['SALDO_TOTAL_BANK'];
	$KETERANGAN=$data['KETERANGAN'];
	echo "
	<tr>
	<td align=right><center>$data[NO_TRANSAKSI_BANK]</center></td>
	<td><center>$data[KODE_BANK]</center></td>
	<td><center>$data[TANGGAL_BANK]</center></td>
	<td><center>$data[MASUK_BANK]</center></td>
	<td><center>$data[KELUAR_BANK]</center></td>";
	//<td><center>$data[SALDO_BANK]</center></td>
	//<td><center>$data[SALDO_TOTAL_BANK]</center></td>
	echo "
	<td><center>$data[KETERANGAN]</center></td>
	</tr>";
}
echo "</table>";
?>