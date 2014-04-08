<?php 
	include 'DB_driver.php';
	$ID_CITY=$_POST['ID_CITY'];
	$CITY=$_POST['CITY'];
	
	
	if( $ID_CITY=='' || $CITY=='' )
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda Edit tidak lengkap');
			document.location='form_customer.php';
					  </script>"; 
	}else{
	$query = "UPDATE dim_area SET ID_CITY='$ID_CITY',
						     CITY='$CITY'
							 WHERE ID_CITY='$ID_CITY'";
								  
				 
			$result= mysql_query($query) or die(mysql_error());}
			
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_customer.php';
			alert('Data berhasil diubah');
			</script>
			<?php
			}		
  ?>
