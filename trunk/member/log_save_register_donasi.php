<?php
//session_start();
include 'DB_driver.php';

$no_transaksi= $_POST['ID_TRANSAKSI'];
$nama_donatur= $_POST['NAMA_DONATUR'];
$tanggal_transaksi= $_POST['TANGGAL_TRANSAKSI'];
$jumlah_donasi= $_POST['JUMLAH_DONASI'];
$status= $_POST['STATUS_DONATUR'];
$set= true;

	if($no_transaksi=='' || $nama_donatur=='' || $tanggal_transaksi=='' || $jumlah_donasi=='' || $status=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pemasukan_kas.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi_donatur(
			ID_TRANSAKSI,
			TANGGAL_TRANSAKSI,
			NAMA_DONATUR,
			JUMLAH_DONASI,
			STATUS_DONATUR) VALUES
			('$no_transaksi',
			'$tanggal_transaksi',					
			'$nama_donatur',
			'$jumlah_donasi',
			'$status')";
		
			$result=@mysql_query($query)or die(mysql_error());
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_transaksi_donatur.php';
			alert('Data Berhasil Disimpan.');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}
			}
	
?>