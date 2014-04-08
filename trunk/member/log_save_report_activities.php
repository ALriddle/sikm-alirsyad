<?php 
include 'DB_driver.php';
	
	$house_owner_status=$_POST['id_house_owner_status'];
	$sales_id=$_POST['SALES_ID'];
	$account_id=$_POST['ACCOUNT_ID'];
	$id_city=$_POST['ID_CITY'];
	$failed_status=$_POST['id_failed_status'];
	
	if ($_POST['id_activity_status'] =='')$activity_status = null;
	else $activity_status = implode(',',$_POST['id_activity_status']);
	
	$building_function=$_POST['id_building_function'];
	
	if($_POST['id_house_owner_profile'] =='')$house_owner_profile = null;
	else $house_owner_profile= implode(',',$_POST['id_house_owner_profile']);
	
	if($_POST['id_building_type'] == '') $building = null;
	else $building_type = implode(',',$_POST['id_building_type']);
	
	$reminder=$_POST['REMINDER'];
	$date_now=$_POST['DATE_NOW'];
	$date_act=$_POST['DATE_ACT'];
	$remark=$_POST['REMARK'];
	$street=$_POST['STREET'];
	$extension_address=$_POST['EXTENSION_ADDRESS'];
	$house_number=$_POST['HOUSE_NUMBER'];
	$user_id=$_POST['USER_ID'];
	$phone=$_POST['PHONE'];
	$nama_team=$_POST['NAMA_TEAM'];
	
	
	$set= true;
	
	if(isset ($_POST['simpan'])) {
		$sql = mysql_query("INSERT INTO fact_report_customer1(
					DATE_NOW,
					ID_TEAM,
					SALES_ID,
					ID_CITY,
					ACCOUNT_ID,
					EXTENSION_ADDRESS,
					STREET,
					HOUSE_NUMBER,
					USER_ID,
					PHONE,
					REMINDER,
					ID_BUILDING_FUNCTION,
					ID_BUILDING_TYPE,
					ID_HOUSE_OWNER_PROFILE,
					ID_HOUSE_OWNER_STATUS,
					ID_ACTIVITY_STATUS,
					ID_FAILED_STATUS,
					REMARK,
					DATE_ACT)
			VALUES ('$date_now',
					'$nama_team',
					'$sales_id',
					'$id_city',
					'$account_id',
					'$extension_address',					
					'$street', 
					'$house_number', 
					'$user_id', 
					'$phone', 
					'$reminder',
					'$building_function',
					'$building_type',
					'$house_owner_profile',
					'$house_owner_status',
					'$activity_status',
					'$failed_status',
					'$remark',
					'$date_act')");
		
			?>
			<script language = "JavaScript">
			document.location='form_report1.php';
			alert('Data Berhasil Disimpan.');
			</script>
			<?php
			}
?>