<?php 
include 'DB_driver.php';

$account_id= $_POST['account_id'];
$user_id= $_POST['user_id'];
$full_name= $_POST['full_name'];
$street= $_POST['street'];
$extension_address= $_POST['extension_address'];
$house_number= $_POST['house_number'];
$city= $_POST['city'];
$phone= $_POST['phone'];
$node= $_POST['node'];
$id_power_supply= $_POST['id_power_supply'];
$set= true;


if( $_POST["ACCOUNT_ID"] == ''){
$sql = "UPDATE master_pelanggan SET ACCOUNT_ID='$account_id', 
								USER_ID='$user_id', 
								FULL_NAME='$full_name',
								STREET='$street',
								EXTENSION_ADDRESS='$extension_address',
								HOUSE_NUMBER='$house_number',
								CITY='$city',
								PHONE= '$phone',
								NODE= '$node',
								ID_POWER_SUPPLY='$id_power_supply'
							WHERE account_id='$account_id'";

$b = mysql_query($sql) or die(mysql_error());
}


if($b){ ?>
<script language = "JavaScript">
			document.location='form_customer.php';
			alert('Data Berhasil Diubah.');
			</script>
<?php
}
else{
echo"Daftar Gagal Diupdate<br> <a href='form_customer.php'>lihat daftar</a>";
}
?>