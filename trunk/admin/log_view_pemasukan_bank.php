<?php
include"DB_driver.php";

$query = "SELECT * FROM data_transaksi_BANK ORDER BY NO_TRANSAKSI_BANK";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $NO_TRANSAKSI_BANK=$data['NO_TRANSAKSI_BANK'];
	$KODE_BANK=$data['KODE_BANK'];
	$TANGGAL_BANK=$data['TANGGAL_LAPORAN'];
	$MASUK_BANK=$data['MASUK_BANK'];
	$KELUAR_BANK=$data['KELUAR_BANK'];
	$SALDO_BANK=$data['SALDO_BANK'];
	$SALDO_TOTAL_BANK=$data['SALDO_TOTAL_BANK'];
	$KETERANGAN=$data['KETERANGAN'];
	echo "
	<tr>
	<td align=right><center>$data[NO_TRANSAKSI_BANK]</center></td>
	<td><center>$data[KODE_BANK]</center></td>
	<td><center>$data[TANGGAL_LAPORAN]</center></td>
	<td><center>";echo number_format($data[MASUK_BANK]);echo "</center></td>
	<td><center>";echo number_format($data[KELUAR_BANK]);echo "</center></td>";
	//<td><center>$data[SALDO_BANK]</center></td>
	//<td><center>$data[SALDO_TOTAL_BANK]</center></td>
	echo "
	<td><center>$data[KETERANGAN]</center></td>
	<td align=center>
		<div class='btn-group' >
			<a class='btn btn-primary' href=form_edit_pemasukan_bank.php?id=$data[NO_TRANSAKSI_BANK]><i class='icon-book icon-white'></i>Edit</a>
			<a class='btn btn-primary dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></a>
				<ul class='dropdown-menu'></center>
					<li>
						<a href=form_detail_bank.php?id=$data[NO_TRANSAKSI_BANK]><i class='icon-tags'></i> Detail</a>
						<a href=log_delete_pemasukan_bank.php?id=$data[NO_TRANSAKSI_BANK]><i class='icon-trash'></i> Delete</a>
					</li>
				</ul>
		</div>
	</td>
	</tr>";
}
echo "</table>";
?>