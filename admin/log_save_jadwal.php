<?php 
	include 'DB_driver.php';
	$timekey = $_POST['TIMEKEY'];
	$description = $_POST['DESCRIPTION'];
	$user_id = $_POST['USER_ID'];
	$street = $_POST['STREET'];
	$extension_address = $_POST['EXTENSION_ADDRESS'];
	$house_number = $_POST['HOUSE_NUMBER'];
	$tim_id = $_POST['NAMA_TEAM'];
	$start_date = $_POST['START_DATE'];		
	$end_date = $_POST['END_DATE'];
	
	//var_dump($timekey, $description, $user_id, $street, $extension_address, $house_number, $tim_id, $start_date, $end_date);
	//$TIMEKEY=='' || $USER_ID=='' || $STREET=='' || $EXTENSION_ADDRESS=='' || $HOUSE_NUMBER=='' || $TIM_ID=='' || $START_DATE==''|| $END_DATE==''
	if($timekey=='' || $user_id=='' || $street=='' || $extension_address=='' || $house_number=='' || $tim_id=='' || $start_date==''|| $end_date=='')
		{
echo "<script language = 'JavaScript'>alert('Data yang Anda masukan tidak lengkap');
			document.location='form_input_jadwal.php';
					  </script>"; 
	}else{
	$query="INSERT INTO penjadwalan(
			TIMEKEY,
			DESCRIPTION,
			USER_ID,
			STREET,
			EXTENSION_ADDRESS,
			HOUSE_NUMBER,
			TIM_ID,
			START_DATE,
			END_DATE) 
		VALUES 
		   ('$timekey',
			'$description',
			'$user_id',
			'$street',
			'$extension_address',
			'$house_number',
			'$tim_id',
			'$start_date',	
			'$end_date')";
				 
		
			$result=@mysql_query($query)or die(mysql_error());
			if($result){
			?>
			<script language = "JavaScript">
			document.location='form_input_jadwal.php';
			alert('Data berhasil disimpan');
			</script>
			
			<?php
			}
			}			
		
  ?>
