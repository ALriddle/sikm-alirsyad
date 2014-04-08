<?php
mysql_connect("localhost","root","");
mysql_select_db("sales_act");

$kode	= $_POST[kode];

$sql 	= mysql_query("select * from dim_tim where NAMA_TEAM='$kode'");
$row	= mysql_num_rows($sql);
if($row>0){
	$r = mysql_fetch_array($sql);
	$data['ID_TEAM'] = $r[ID_TEAM];
	echo json_encode($data);
}else{
	$data['ID_TEAM'] = '';
	echo json_encode($data);
}
?>
