<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query = mysql_query("DELETE FROM pegawai where SALES_ID = '$del'");				
?>
<script language = "JavaScript">
			document.location='form_pegawai.php';
			alert('Data Berhasil Dihapus.');
</script>