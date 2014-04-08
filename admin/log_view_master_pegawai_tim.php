<?php
include"DB_driver.php";

$query = "SELECT * FROM pegawai ORDER BY SALES_ID";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil)) {
    $SALES_ID=$data['SALES_ID'];
	$NO_KTP_PEGAWAI=$data['NO_KTP_PEGAWAI'];
	$NAMA_PEGAWAI=$data['NAMA_PEGAWAI'];
	$USERNAME_PEGAWAI=$data['USERNAME_PEGAWAI'];
	$PASSWORD_PEGAWAI=$data['PASSWORD_PEGAWAI'];
	$TEMPAT_LAHIR=$data['TEMPAT_LAHIR'];
	$TANGGAL_LAHIR=$data['TANGGAL_LAHIR'];
	$HAK_AKSES_PEGAWAI=$data['HAK_AKSES_PEGAWAI'];
	$STATUS_PEGAWAI=$data['STATUS_PEGAWAI'];
	$STATUS_POSISI=$data['STATUS_POSISI'];		
	$ALAMAT_PEGAWAI=$data['ALAMAT_PEGAWAI'];
	$NO_TELP_PEGAWAI=$data['NO_TELP_PEGAWAI'];
	echo "
	<tr>
	<td align=right><center>$data[SALES_ID]</center></td>
	<td>$data[NAMA_PEGAWAI]</td>
	<td><center>$data[STATUS_POSISI]</center></td>
	</tr>";
}
echo "</table>";

?>