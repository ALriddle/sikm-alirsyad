<?php
include 'DB_driver.php';

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select NAMA_PEGAWAI from pegawai where NAMA_PEGAWAI LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$NAMA_PEGAWAI = $r['NAMA_PEGAWAI'];
	echo "$NAMA_PEGAWAI \n";
}
?>
