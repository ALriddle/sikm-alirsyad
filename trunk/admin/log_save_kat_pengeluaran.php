<?php 
	include 'DB_driver.php';
	$ID_KAT_PENGELUARAN=$_POST['ID_KAT_PENGELUARAN'];
	$NAMA_PENGELUARAN=$_POST['NAMA_PENGELUARAN'];
	$KODE_PENGELUARAN=$_POST['KODE_PENGELUARAN'];
	
	if($ID_KAT_PENGELUARAN=='' || $NAMA_PENGELUARAN=='' || $KODE_PENGELUARAN=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_pegawai.php';
					  </script>"; 
	}else{
	$query="INSERT INTO kategory_pengeluaran (
			ID_KAT_PENGELUARAN,
			NAMA_PENGELUARAN,
			KODE_PENGELUARAN) 
			VALUE(
			'$ID_KAT_PENGELUARAN',
			'$NAMA_PENGELUARAN',
			'$KODE_PENGELUARAN')";
			$result=@mysql_query($query)or die(mysql_error());
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_kat_pengeluaran.php';
			alert('Data berhasil disimpan');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}
			}			
		
  ?>
