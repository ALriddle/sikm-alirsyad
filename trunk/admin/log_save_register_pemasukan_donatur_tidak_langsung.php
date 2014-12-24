<?php
//session_start();
include 'DB_driver.php';

$no_transaksi= $_POST['ID_TRANSAKSI'];
$nama_donatur= $_POST['NAMA_DONATUR'];
$tanggal_transaksi= $_POST['TANGGAL_TRANSAKSI'];
$bulan_transaksi = $_POST['BULAN_LAPORAN'];
$tahun_transaksi = $_POST['TAHUN_LAPORAN'];
$jumlah_donasi_tl= $_POST['JUMLAH_DONASI_TL'];
$kode_donatur= $_POST['KODE_DONATUR'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi=='' || $nama_donatur=='' || $tanggal_transaksi=='' || $bulan_transaksi=='' || $tahun_transaksi=='' || $jumlah_donasi_tl=='' || $kode_donatur=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pemasukan_donatur_tidak_langsung.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi_donatur(
			ID_TRANSAKSI,
			TANGGAL_TRANSAKSI,
			BULAN_LAPORAN,
			TAHUN_LAPORAN,
			NAMA_DONATUR,
			JUMLAH_DONASI_L,
			JUMLAH_DONASI_TL,
			KODE_DONATUR,
			KETERANGAN) VALUES
			('$no_transaksi',
			'$tanggal_transaksi',
			'$bulan_transaksi',
			'$tahun_transaksi',
			'$nama_donatur',
			'$jumlah_donasi_l',
			'$jumlah_donasi_tl',
			'$kode_donatur',
			'$keterangan')";
		
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