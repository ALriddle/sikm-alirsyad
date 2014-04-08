<?php 
	include 'DB_driver.php';
	$ID_TEAM=$_POST['ID_TEAM'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
	
	if( $ID_TEAM=='' || $NAMA_TEAM=='')
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda Edit tidak lengkap');
			document.location='form_tim.php';
					  </script>"; 
	}else{
	$query = "UPDATE dim_tim SET ID_TEAM='$ID_TEAM',
								 NAMA_TEAM='$NAMA_TEAM'
								 WHERE ID_TEAM='$ID_TEAM'"; 
				 
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
