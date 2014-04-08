<?php
mysql_connect("localhost","root","");
mysql_select_db("sales_act");

$code	= $_POST[code];

$sql 	= mysql_query("select * from pegawai where SALES_ID='$code'");
$row	= mysql_num_rows($sql);
if($row>0){
	$r = mysql_fetch_array($sql);
	$data['NAMA_PEGAWAI'] = $r[NAMA_PEGAWAI];
	echo json_encode($data);
}else{
	$data['NAMA_PEGAWAI'] = '';
	echo json_encode($data);
}
?>
