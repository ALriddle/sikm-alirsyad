<?php
include 'DB_driver.php';

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select ID_CITY from dim_area where ID_CITY LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$ID_CITY = $r['ID_CITY'];
	echo "$ID_CITY\n";
}
?>
