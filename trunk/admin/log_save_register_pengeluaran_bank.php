<?php
//session_start();
include 'DB_driver.php';

$no_transaksi_bank= $_POST['NO_TRANSAKSI_BANK'];
$kode_bank= $_POST['kode_pengeluaran'];
$nama_pengeluaran= $_POST['nama_pengeluaran'];
$tanggal_laporan= $_POST['TANGGAL_LAPORAN'];
$bulan_laporan= $_POST['BULAN_LAPORAN'];
$tahun_laporan= $_POST['TAHUN_LAPORAN'];
$keluar_bank= $_POST['KELUAR_BANK'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi_bank=='' || $kode_bank=='' || $nama_pengeluaran=='' || $tanggal_laporan=='' || $bulan_laporan=='' || $tahun_laporan=='' || $keluar_bank=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pengeluaran_bank.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi_bank(
			NO_TRANSAKSI_BANK,
			KODE_BANK,
			NAMA_PENGELUARAN,
			TANGGAL_LAPORAN,
			BULAN_LAPORAN,
			TAHUN_LAPORAN,
			KELUAR_BANK,
			KETERANGAN) VALUES
			('$no_transaksi_bank',
			'$kode_bank',
			'$nama_pengeluaran',
			'$tanggal_laporan',
			'$bulan_laporan',
			'$tahun_laporan',					
			'$keluar_bank', 
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