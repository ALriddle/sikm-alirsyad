<?php
include 'DB_driver.php';

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select ACCOUNT_ID from master_pelanggan where ACCOUNT_ID LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$ACCOUNT_ID = $r['ACCOUNT_ID'];
	echo "$ACCOUNT_ID\n";
}
?>
