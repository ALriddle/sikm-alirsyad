<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query = mysql_query("DELETE FROM fact_report_customer1 where ID_REPORT_SALES = '$del'");
?>
<script language = "JavaScript">
			document.location='form_report_customer.php';
			alert('Data Berhasil Dihapus.');
</script>