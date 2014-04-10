<?php
//session_start();
include 'DB_driver.php';

$no_transaksi_bank= $_POST['NO_TRANSAKSI_BANK'];
$kode_bank= $_POST['KODE_BANK'];
$tanggal_bank= $_POST['TANGGAL_BANK'];
$masuk_bank= $_POST['MASUK_BANK'];
$keluar_bank= $_POST['KELUAR_BANK'];
$saldo_bank= $_POST['SALDO_BANK'];
$saldo_total_bank= $_POST['SALDO_TOTAL_BANK'];
$keterangan= $_POST['KETERANGAN'];
$set= true;

	if($no_transaksi_bank=='' || $kode_bank=='' || $tanggal_bank=='' || $masuk_bank=='' || $keluar_bank=='' || $saldo_bank=='' || $saldo_total_bank=='' || $keterangan=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukkan tidak lengkap');
			document.location='form_register_pemasukan_bank.php';
					  </script>"; 
	}else{
	$query="INSERT INTO data_transaksi_bank(
			NO_TRANSAKSI_BANK,
			KODE_BANK,
			TANGGAL_BANK,
			MASUK_BANK,
			KELUAR_BANK,
			SALDO_BANK,
			SALDO_TOTAL_BANK,
			KETERANGAN) VALUES
			('$no_transaksi_bank',
			'$kode_bank',
			'$tanggal_bank',					
			'$masuk_bank', 
			'$keluar_bank', 
			'$saldo_bank',
			'$saldo_total_bank',
			'$keterangan')";
		
	$query2="INSERT INTO data_transaksi_kas(
			NO_TRANSAKSI_KAS,
			KODE_KAS,
			TANGGAL_KAS,
			MASUK_KAS,
			KELUAR_KAS,
			SALDO_KAS,
			SALDO_TOTAL_KAS,
			KETERANGAN) VALUES
			('$no_transaksi_kas',
			'$kode_kas',
			'$tanggal_kas',					
			'$masuk_kas', 
			'$keluar_kas', 
			'$saldo_kas',
			'$saldo_total_kas',
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