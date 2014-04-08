<?php
include 'DB_driver.php';

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select SALES_ID from pegawai where SALES_ID LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$SALES_ID = $r['SALES_ID'];
	echo "$SALES_ID\n";
}
?>
