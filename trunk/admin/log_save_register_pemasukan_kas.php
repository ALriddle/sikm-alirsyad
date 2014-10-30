<?php
//session_start();
include 'DB_driver.php';

$no_transaksi_kas= $_POST['NO_TRANSAKSI_KAS'];
$kode_kas= $_POST['kode_pemasukan'];
$nama_pemasukan= $_POST['nama_pemasukan'];
$tanggal_laporan= $_POST['TANGGAL_LAPORAN'];
$bulan_laporan= $_POST['BULAN_LAPORAN'];
$tahun_laporan=$_POST['TAHUN_LAPORAN'];
$masuk_laporan= $_POST['MASUK_KAS'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi_kas=='' || $kode_kas=='' || $nama_pemasukan=='' || $tanggal_laporan=='' || $bulan_laporan=='' || $tahun_laporan=='' || $masuk_laporan=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pemasukan_kas.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi_kas(
			NO_TRANSAKSI_KAS,
			KODE_KAS,
			NAMA_PEMASUKAN,
			TANGGAL_LAPORAN,
			BULAN_LAPORAN,
			TAHUN_LAPORAN,
			MASUK_KAS,
			KETERANGAN) VALUES
			('$no_transaksi_kas',
			'$kode_kas',
			'$nama_pemasukan',
			'$tanggal_laporan',
			'$bulan_laporan',
			'$tahun_laporan',
			'$masuk_laporan',
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