<?php
//session_start();
include 'DB_driver.php';

$no_transaksi_kas= $_POST['NO_TRANSAKSI_KAS'];
$kode_kas= $_POST['KODE_PENGELUARAN'];
$tanggal_kas= $_POST['TANGGAL_KAS'];
$keluar_kas= $_POST['KELUAR_KAS'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi_kas=='' || $kode_kas=='' || $tanggal_kas=='' || $keluar_kas=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pengeluaran_kas.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi_kas(
			NO_TRANSAKSI_KAS,
			KODE_KAS,
			TANGGAL_KAS,
			KELUAR_KAS,
			KETERANGAN) VALUES
			('$no_transaksi_kas',
			'$kode_kas',
			'$tanggal_kas',					
			'$keluar_kas',
			'$keterangan')";
		
			$result=@mysql_query($query)or die(mysql_error());
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_transaksi.php';
			alert('Data Berhasil Disimpan.');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}
			}
	
?>