<?php
include 'DB_driver.php';

$kode	= $_POST[kode];

$sql 	= mysql_query("select * from master_pelanggan where ACCOUNT_ID='$kode'");
$row	= mysql_num_rows($sql);
if($row>0){
	$r = mysql_fetch_array($sql);
	$data['EXTENSION_ADDRESS'] = $r[EXTENSION_ADDRESS];
	$data['STREET'] = $r[STREET];
	$data['HOUSE_NUMBER'] = $r[HOUSE_NUMBER];
	echo json_encode($data);
}else{
	$data['EXTENSION_ADDRESS'] = '';
	$data['STREET'] = '';
	$data['HOUSE_NUMBER'] = '';
	echo json_encode($data);
}
?>
