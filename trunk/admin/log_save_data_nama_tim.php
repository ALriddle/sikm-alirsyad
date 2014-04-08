<?php 
	include 'DB_driver.php';
	$ID_TEAM=$_POST['ID_TEAM'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
	
	
	if($ID_TEAM=='' || $NAMA_TEAM=='' )
		{
	echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_register_nama_tim.php';
					  </script>"; 
	}else{
	$query1="INSERT INTO dim_tim(
			ID_TEAM,
			NAMA_TEAM
			) VALUES
		   (
			'$ID_TEAM',
			'$NAMA_TEAM'
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
		}
  ?>