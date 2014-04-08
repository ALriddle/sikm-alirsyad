<?php
mysql_connect("localhost","root","");
mysql_select_db("sales_act");

$kode	= $_POST[kode];

$sql 	= mysql_query("select * from dim_area where ID_CITY='$kode'");
$row	= mysql_num_rows($sql);
if($row>0){
	$r = mysql_fetch_array($sql);
	$data['CITY'] = $r[CITY];
	echo json_encode($data);
}else{
	$data['CITY'] = '';
	echo json_encode($data);
}
?>
