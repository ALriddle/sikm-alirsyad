<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query = mysql_query("DELETE FROM penjadwalan where ID_JADWAL = '$del'");				
?>
<script language = "JavaScript">
			document.location='form_penjadwalan.php';
			alert('Data Berhasil Dihapus.');
</script>