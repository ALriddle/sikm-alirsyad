<?php
include 'DB_driver.php';

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select ID_KAT_PEMASUKAN from kategory_pemasukan where ID_KAT_PEMASUKAN LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$ID_KAT_PEMASUKAN = $r['ID_KAT_PEMASUKAN'];
	echo "$ID_KAT_PEMASUKAN\n";
}
?>
