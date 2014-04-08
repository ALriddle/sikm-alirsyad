<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query = mysql_query("DELETE FROM master_pelanggan where ACCOUNT_ID = '$del'");
?>
<script language = "JavaScript">
			document.location='form_customer.php';
			alert('Data Berhasil Dihapus.');
</script>