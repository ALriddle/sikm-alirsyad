<?php 
	include 'DB_driver.php';
	$SALES_ID=$_POST['SALES_ID'];
	$NAMA_PEGAWAI=$_POST['NAMA_PEGAWAI'];
	$ID_TEAM=$_POST['ID_TEAM'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
	$SUPERVISOR=$_POST['SUPERVISOR'];
	
	if($SALES_ID=='' || $NAMA_PEGAWAI=='' || $ID_TEAM=='' || $NAMA_TEAM=='' || $SUPERVISOR=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_tim.php';
					  </script>"; 
	}else{
	$query1="INSERT INTO tim(
			SALES_ID,
			NAMA_PEGAWAI,
			ID_TEAM,
			NAMA_TEAM,
			SUPERVISOR
			) VALUES
		   ('$SALES_ID',
			'$NAMA_PEGAWAI',
			'$ID_TEAM',
			'$NAMA_TEAM',
			'$SUPERVISOR'
			)";
	$query2="INSERT INTO dim_tim(
			ID_TEAM,
			NAMA_TEAM
			)VALUES
		   (
			'$ID_TEAM',
			'$NAMA_TEAM'
			)";
	$query3="INSERT INTO history_tim(
			SALES_ID,
			NAMA_PEGAWAI,
			ID_TEAM,
			NAMA_TEAM,
			SUPERVISOR
			) VALUES
		   ('$SALES_ID',
			'$NAMA_PEGAWAI',
			'$ID_TEAM',
			'$NAMA_TEAM',
			'$SUPERVISOR'
			)"; 
				 
			$result1=@mysql_query($query1)or die(mysql_error());
			if($result1){
			?>
			<script language = "JavaScript">
			document.location='form_tim.php';
			alert('Data berhasil disimpan');
			</script>
			
			<?php
			}
		$result2=@mysql_query($query2)or die(mysql_error());
		$result3=@mysql_query($query3)or die(mysql_error());
		}
  ?>
