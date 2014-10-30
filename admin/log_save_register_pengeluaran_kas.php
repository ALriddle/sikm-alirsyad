<?php
//session_start();
include 'DB_driver.php';

$no_transaksi_kas= $_POST['NO_TRANSAKSI_KAS'];
$kode_pengeluaran= $_POST['KODE_PENGELUARAN'];
$nama_pengeluaran= $_POST['NAMA_PENGELUARAN'];
$tanggal_laporan= $_POST['TANGGAL_LAPORAN'];
$bulan_laporan= $_POST['BULAN_LAPORAN'];
$tahun_laporan= $_POST['TAHUN_LAPORAN'];
$keluar_kas= $_POST['KELUAR_KAS'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi_kas=='' || $kode_pengeluaran=='' || $nama_pengeluaran=='' || $tanggal_laporan=='' || $bulan_laporan=='' || $tahun_laporan=='' || $keluar_kas=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pengeluaran_kas.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi_kas(
			NO_TRANSAKSI_KAS,
			KODE_PENGELUARAN,
			NAMA_PENGELUARAN,
			TANGGAL_LAPORAN,
			BULAN_LAPORAN,
			TAHUN_LAPORAN,
			KELUAR_KAS,
			KETERANGAN) VALUES
			('$no_transaksi_kas',
			'$kode_pengeluaran',
			'$nama_pengeluaran',
			'$tanggal_laporan',
			'$bulan_laporan',
			'$tahun_laporan',
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