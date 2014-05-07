<?php 
	include 'DB_driver.php';
	
	$ID_KAT_DONATUR=$_POST['ID_KAT_DONATUR'];
	$NAMA_DONATUR=$_POST['NAMA_DONATUR'];
	$JUMLAH_DONASI=$_POST['JUMLAH_DONASI'];
	$KODE_DONATUR=$_POST['KODE_DONATUR'];
	$KETERANGAN=$_POST['KETERANGAN'];
	
	if($ID_KAT_DONATUR=='' || $NAMA_DONATUR=='' || $JUMLAH_DONASI=='' || $KODE_DONATUR=='' || $KETERANGAN=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_kat_donatur.php';
					  </script>"; 
	}else{
	$query = "UPDATE kategory_donatur SET	ID_KAT_DONATUR='$ID_KAT_DONATUR', NAMA_DONATUR='$NAMA_DONATUR', JUMLAH_DONASI='$JUMLAH_DONASI', KODE_DONATUR='$KODE_DONATUR', KETERANGAN='$KETERANGAN' 
			  WHERE ID_KAT_DONATUR='$ID_KAT_DONATUR'";
			
			$result= mysql_query($query) or die(mysql_error());}
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_kat_donatur.php';
			alert('Data berhasil diubah');
			</script>
			<?php
			}	
		
  ?>
