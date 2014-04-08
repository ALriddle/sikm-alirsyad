<?php 
	include 'DB_driver.php';
	
	$SALES_ID=$_POST['SALES_ID'];
	$NO_KTP_PEGAWAI=$_POST['NO_KTP_PEGAWAI'];
	$NAMA_PEGAWAI=$_POST['NAMA_PEGAWAI'];
	$USERNAME_PEGAWAI=$_POST['USERNAME_PEGAWAI'];
	$PASSWORD_PEGAWAI=$_POST['PASSWORD_PEGAWAI'];
	$TEMPAT_LAHIR=$_POST['TEMPAT_LAHIR'];
	$TANGGAL_LAHIR=$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
	$HAK_AKSES_PEGAWAI=$_POST['HAK_AKSES_PEGAWAI'];
	$STATUS_PEGAWAI=$_POST['STATUS_PEGAWAI'];
	$STATUS_POSISI=$_POST['STATUS_POSISI'];		
	$ALAMAT_PEGAWAI=$_POST['ALAMAT_PEGAWAI'];
	$NO_TELP_PEGAWAI=$_POST['NO_TELP_PEGAWAI'];
	$DATE_JOIN=$_POST['DATE_JOIN'];
	
	if($SALES_ID=='' || $NO_KTP_PEGAWAI=='' || $NAMA_PEGAWAI=='' || $USERNAME_PEGAWAI=='' || $PASSWORD_PEGAWAI=='' || 
		$TEMPAT_LAHIR=='' || $TANGGAL_LAHIR=='' || $HAK_AKSES_PEGAWAI=='' || $STATUS_PEGAWAI=='' || $STATUS_POSISI==''
		|| $STATUS_POSISI=='' || $ALAMAT_PEGAWAI=='' || $NO_TELP_PEGAWAI=='' || $DATE_JOIN=='')
		{
	echo "<script>alert('Data yang Anda Edit tidak lengkap');
					  </script>";
	}else{
	$query = "UPDATE pegawai SET SALES_ID='$SALES_ID',
								   NO_KTP_PEGAWAI='$NO_KTP_PEGAWAI',
								   NAMA_PEGAWAI='$NAMA_PEGAWAI',
								   USERNAME_PEGAWAI='$USERNAME_PEGAWAI',
								   PASSWORD_PEGAWAI='$PASSWORD_PEGAWAI',
								   TEMPAT_LAHIR='$TEMPAT_LAHIR',
								   TANGGAL_LAHIR='$TANGGAL_LAHIR',
								   HAK_AKSES_PEGAWAI='$HAK_AKSES_PEGAWAI',
								   STATUS_PEGAWAI='$STATUS_PEGAWAI',
								   STATUS_POSISI='$STATUS_POSISI',
								   ALAMAT_PEGAWAI='$ALAMAT_PEGAWAI',
								   NO_TELP_PEGAWAI='$NO_TELP_PEGAWAI',
								   DATE_JOIN='$DATE_JOIN'
								   WHERE SALES_ID=$SALES_ID";
				 
				 
			$result= mysql_query($query) or die(mysql_error());}
			
			if($result){
			?>
			<script language = "JavaScript">
			document.location='index.php';
			alert('Data berhasil diubah');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}			
		
  ?>
