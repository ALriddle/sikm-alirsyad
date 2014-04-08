<?php
mysql_connect("localhost","root","");
mysql_select_db("sales_act");

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select ID_TEAM from dim_tim where ID_TEAM LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$ID_TEAM = $r['ID_TEAM'];
	echo "$ID_TEAM\n";
}
?>
