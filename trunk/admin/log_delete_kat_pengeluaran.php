<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query1 = mysql_query("DELETE FROM kategory_pengeluaran where ID_KAT_PENGELUARAN = '$del'");			
?>
<script language = "JavaScript">
			document.location='form_kat_pengeluaran.php';
			alert('Data Berhasil Dihapus.');
</script>