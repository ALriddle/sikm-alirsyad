<?php 
	include 'DB_driver.php';
	$SALES_ID=$_POST['SALES_ID'];
	$NAMA_PEGAWAI=$_POST['NAMA_PEGAWAI'];
	$ID_TEAM=$_POST['ID_TEAM'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
	$SUPERVISOR=$_POST['SUPERVISOR'];
	
	if( $ID_TEAM=='' || $NAMA_TEAM=='' || $SUPERVISOR=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda Edit tidak lengkap');
			document.location='form_tim.php';
					  </script>"; 
	}else{
	$query = "UPDATE tim SET SALES_ID='$SALES_ID',
						     NAMA_PEGAWAI='$NAMA_PEGAWAI',
							 ID_TEAM='$ID_TEAM',
							 NAMA_TEAM='$NAMA_TEAM',
						     SUPERVISOR='$SUPERVISOR'
							 WHERE SALES_ID='$SALES_ID'";
								  
				 
			$result= mysql_query($query) or die(mysql_error());}
			
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_tim.php';
			alert('Data berhasil diubah');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}			
		
  ?>
