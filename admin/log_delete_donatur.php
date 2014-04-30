<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query1 = mysql_query("DELETE FROM kategory_pemasukan where ID_KAT_PEMASUKAN = '$del'");			
?>
<script language = "JavaScript">
			document.location='form_kat_pemasukan.php';
			alert('Data Berhasil Dihapus.');
</script>