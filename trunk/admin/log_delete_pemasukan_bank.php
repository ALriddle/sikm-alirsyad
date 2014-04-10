<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query1 = mysql_query("DELETE FROM data_transaksi_bank where NO_TRANSAKSI_BANK = '$del'");
?>
<script language = "JavaScript">
			document.location='form_transaksi.php';
			alert('Data Berhasil Dihapus.');
</script>