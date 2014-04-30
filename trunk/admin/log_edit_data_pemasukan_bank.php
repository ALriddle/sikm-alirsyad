<?php 
	include 'DB_driver.php';
	
	$no_transaksi_bank= $_POST['NO_TRANSAKSI_BANK'];
	$kode_bank= $_POST['KODE_BANK'];
	$tanggal_bank= $_POST['TANGGAL_BANK'];
	$masuk_bank= $_POST['MASUK_BANK'];
	$keluar_bank= $_POST['KELUAR_BANK'];
	$keterangan= $_POST['KETERANGAN'];
	
	if($no_transaksi_bank=='' || $kode_bank=='' || $tanggal_bank=='' || $masuk_bank=='' || $keluar_bank=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_kat_pemasukan.php';
					  </script>"; 
	}else{
	$query = "UPDATE data_transaksi_bank SET	NO_TRANSAKSI_BANK='$no_transaksi_bank', KODE_BANK='$kode_bank', TANGGAL_BANK='$tanggal_bank', MASUK_BANK='$masuk_bank', KELUAR_BANK='$keluar_bank', KETERANGAN='$keterangan' 
			  WHERE NO_TRANSAKSI_BANK='$no_transaksi_bank'";
			
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
