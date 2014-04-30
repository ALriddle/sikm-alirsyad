<?php 
	include 'DB_driver.php';
	
	$no_transaksi_kas= $_POST['NO_TRANSAKSI_KAS'];
	$kode_kas= $_POST['KODE_KAS'];
	$tanggal_kas= $_POST['TANGGAL_KAS'];
	$masuk_kas= $_POST['MASUK_KAS'];
	$keluar_kas= $_POST['KELUAR_KAS'];
	$keterangan= $_POST['KETERANGAN'];
	
	if($no_transaksi_kas=='' || $kode_kas=='' || $tanggal_kas=='' || $masuk_kas=='' || $keluar_kas=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_kat_pemasukan.php';
					  </script>"; 
	}else{
	$query = "UPDATE data_transaksi_kas SET	NO_TRANSAKSI_KAS='$no_transaksi_kas', KODE_KAS='$kode_kas', TANGGAL_KAS='$tanggal_kas', MASUK_KAS='$masuk_kas', KELUAR_KAS='$keluar_kas', KETERANGAN='$keterangan' 
			  WHERE NO_TRANSAKSI_KAS='$no_transaksi_kas'";
			
			$result= mysql_query($query) or die(mysql_error());}
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_transaksi.php';
			alert('Data berhasil diubah');
			</script>
			<?php
			}	
		
  ?>
