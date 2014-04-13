<?php
include"DB_driver.php";

$query = "SELECT * FROM data_transaksi_kas ORDER BY NO_TRANSAKSI_KAS";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $NO_TRANSAKSI_KAS=$data['NO_TRANSAKSI_KAS'];
	$KODE_KAS=$data['KODE_KAS'];
	$TANGGAL_KAS=$data['TANGGAL_KAS'];
	$MASUK_KAS=$data['MASUK_KAS'];
	$KELUAR_KAS=$data['KELUAR_KAS'];
	$SALDO_KAS=$data['SALDO_KAS'];
	$SALDO_TOTAL_KAS=$data['SALDO_TOTAL_KAS'];
	$KETERANGAN=$data['KETERANGAN'];
	echo "
	<tr>
	<td align=right><center>$data[NO_TRANSAKSI_KAS]</center></td>
	<td><center>$data[KODE_KAS]</center></td>
	<td><center>$data[TANGGAL_KAS]</center></td>
	<td><center>$data[MASUK_KAS]</center></td>
	<td><center>$data[KELUAR_KAS]</center></td>";
	//<td><center>$data[SALDO_KAS]</center></td>
	//<td><center>$data[SALDO_TOTAL_KAS]</center></td>
	echo "
	<td><center>$data[KETERANGAN]</center></td>
	<td align=center>
		<div class='btn-group' >
			<a class='btn btn-primary' href=form_edit_data_nama_tim.php?id=$data[NO_TRANSAKSI_KAS]><i class='icon-book icon-white'></i>Edit</a>
			<a class='btn btn-primary dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></a>
				<ul class='dropdown-menu'></center>
					<li>
						<a href=log_view_detail_kas.php?id=$data[NO_TRANSAKSI_KAS]><i class='icon-tags'></i> Detail</a>
						<a href=log_delete_pemasukan_kas.php?id=$data[NO_TRANSAKSI_KAS]><i class='icon-trash'></i> Delete</a>
					</li>
				</ul>
		</div>
	</td>
	</tr>";
}
echo "</table>";
?>