<?php
//session_start();
include 'DB_driver.php';

$no_transaksi_bank= $_POST['NO_TRANSAKSI_BANK'];
$kode_pemasukan= $_POST['kode_pemasukan'];
$nama_pemasukan= $_POST['nama_pemasukan'];
$tanggal_laporan= $_POST['TANGGAL_LAPORAN'];
$bulan_laporan= $_POST['BULAN_LAPORAN'];
$tahun_laporan=$_POST['TAHUN_LAPORAN'];
$masuk_bank= $_POST['MASUK_BANK'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi_bank=='' || $kode_pemasukan=='' || $nama_pemasukan=='' || $tanggal_laporan=='' || $bulan_laporan=='' || $tahun_laporan=='' || $masuk_bank=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pemasukan_bank.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi_bank(
			NO_TRANSAKSI_BANK,
			KODE_BANK,
			NAMA_PEMASUKAN,
			TANGGAL_LAPORAN,
			BULAN_LAPORAN,
			TAHUN_LAPORAN,
			MASUK_BANK,
			KETERANGAN) VALUES
			('$no_transaksi_bank',
			'$kode_pemasukan',
			'$nama_pemasukan',
			'$tanggal_laporan',
			'$bulan_laporan',
			'$tahun_laporan',					
			'$masuk_bank', 
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