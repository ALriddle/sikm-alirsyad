<?php
mysql_connect("localhost","root","");
mysql_select_db("sales_act");

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select NAMA_TEAM from dim_tim where NAMA_TEAM LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$NAMA_TEAM = $r['NAMA_TEAM'];
	echo "$NAMA_TEAM\n";
}
?>
