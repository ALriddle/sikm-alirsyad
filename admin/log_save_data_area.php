<?php 
	include 'DB_driver.php';
	$ID_CITY=$_POST['ID_CITY'];
	$CITY=$_POST['CITY'];

	
	if($ID_CITY=='' || $CITY=='' )
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_area.php';
					  </script>"; 
	}else{
	$query1="INSERT INTO dim_area(
			ID_CITY,
			CITY
			) VALUES
		   ('$ID_CITY',
			'$CITY'
			)";
	
				 
			$result1=@mysql_query($query1)or die(mysql_error());
			if($result1){
			?>
			<script language = "JavaScript">
			document.location='form_customer.php';
			alert('Data berhasil disimpan');
			</script>
			<?php
			}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}
		}
  ?>
