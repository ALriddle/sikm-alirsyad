<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query1 = mysql_query("DELETE FROM dim_area where ID_CITY = '$del'");
?>
<script language = "JavaScript">
			document.location='form_customer.php';
			alert('Data Berhasil Dihapus.');
</script>