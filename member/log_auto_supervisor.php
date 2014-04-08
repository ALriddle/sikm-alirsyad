<?php
mysql_connect("localhost","root","");
mysql_select_db("sales_act");

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select NAMA_PEGAWAI from pegawai where NAMA_PEGAWAI LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$NAMA_PEGAWAI = $r['NAMA_PEGAWAI'];
	echo "$NAMA_PEGAWAI \n";
}
?>
