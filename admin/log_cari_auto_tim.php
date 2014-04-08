<?php
include 'DB_driver.php';

$loko	= $_POST[loko];

$sql 	= mysql_query("select * from dim_tim where ID_TEAM='$loko'");
$row	= mysql_num_rows($sql);
if($row>0){
	$r = mysql_fetch_array($sql);
	$data['NAMA_TEAM'] = $r[NAMA_TEAM];
	echo json_encode($data);
}else{
	$data['NAMA_TEAM'] = '';
	echo json_encode($data);
}
?>
