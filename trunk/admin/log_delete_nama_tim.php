<?php 
include 'DB_driver.php';

$del=$_GET['id'];
$query1 = mysql_query("DELETE FROM dim_tim where ID_TEAM = '$del'");
?>
<script language = "JavaScript">
			document.location='form_tim.php';
			alert('Data Berhasil Dihapus.');
</script>