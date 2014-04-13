<?php
//session_start();
include 'DB_driver.php';

$no_transaksi_bank= $_POST['NO_TRANSAKSI_BANK'];
$kode_bank= $_POST['KODE_BANK'];
$tanggal_bank= $_POST['TANGGAL_BANK'];
$keluar_bank= $_POST['KELUAR_BANK'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi_bank=='' || $kode_bank=='' || $tanggal_bank=='' || $keluar_bank=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pengeluaran_bank.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi_bank(
			NO_TRANSAKSI_BANK,
			KODE_BANK,
			TANGGAL_BANK,
			KELUAR_BANK,
			KETERANGAN) VALUES
			('$no_transaksi_bank',
			'$kode_bank',
			'$tanggal_bank',					
			'$keluar_bank', 
			'$keterangan')";
		
	$query2="INSERT INTO data_transaksi_kas(
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
			$result2=@mysql_query($query2)or die(mysql_error());
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
			if($result2){
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