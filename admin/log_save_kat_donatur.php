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
	$query="INSERT INTO kategory_donatur (
			ID_KAT_DONATUR,
			NAMA_DONATUR,
			JUMLAH_DONASI,
			KODE_DONATUR,
			KETERANGAN) 
			VALUE(
			'$ID_KAT_DONATUR',
			'$NAMA_DONATUR',
			'$JUMLAH_DONASI',
			'$KODE_DONATUR',
			'KETERANGAN')";
			$result=@mysql_query($query)or die(mysql_error());
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_kat_donatur.php';
			alert('Data berhasil disimpan');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}
			}			
		
  ?>
