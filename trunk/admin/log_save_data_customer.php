<?php
//session_start();
include 'DB_driver.php';

$account_id= $_POST['account_id'];
$user_id= $_POST['user_id'];
$full_name= $_POST['full_name'];
$street= $_POST['street'];
$extension_address= $_POST['extension_address'];
$house_number= $_POST['house_number'];
$node= $_POST['node'];
$id_city= $_POST['id_city'];
$city= $_POST['city'];
$id_power_supply= $_POST['id_power_supply'];
$phone=$_POST['phone'];
$set= true;

	if($account_id=='' || $user_id=='' || $full_name=='' || $street=='' || $house_number=='' || $node=='' || $id_city=='' || $city=='' || $id_power_supply=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_master_pelanggan.php';
					  </script>"; 
}
	if(isset ($_POST['simpan'])) {
		$sql = mysql_query("INSERT INTO master_pelanggan
			VALUES ('$account_id',
					'$user_id',
					'$full_name',					
					'$street', 
					'$extension_address', 
					'$house_number',
					'$node',
					'$id_city',
					'$city', 
					'$id_power_supply',
					'$phone')");
		
			?>
			<script language = "JavaScript">
			document.location='form_customer.php';
			alert('Data Berhasil Disimpan.');
			</script>
			<?php
		}
	
?>