<?php 
include 'DB_driver.php';

	$id_report_sales=$_POST['id_report_sales'];
	$house_owner_status=$_POST['id_house_owner_status'];
	$nama_team=$_POST['NAMA_TEAM'];
	$sales_id=$_POST['SALES_ID'];
	$account_id=$_POST['ACCOUNT_ID'];
	$failed_status=$_POST['id_failed_status'];
	$activity_status= $_POST['id_activity_status'];	
	$building_function=$_POST['id_building_function'];
	$house_owner_profile=$_POST['id_house_owner_profile'];
	$building_type=$_POST['id_building_type'];
	$reminder=$_POST['REMINDER'];
	$date_now=$_POST['DATE_NOW'];
	$date_act=$_POST['DATE_ACT'];
	$remark=$_POST['REMARK'];
	$street=$_POST['STREET'];
	$extension_address=$_POST['EXTENSION_ADDRESS'];
	$house_number=$_POST['HOUSE_NUMBER'];
	$user_id=$_POST['USER_ID'];
	$phone=$_POST['PHONE'];
	
	
	$set= true;
	
	if($id_report_sales == ''){
		echo "<script>alert('Data yang Anda Edit tidak lengkap')</script>";
		}else{
		$sql = "UPDATE fact_report_customer1 SET ID_REPORT_SALES = '$id_report_sales',
					DATE_NOW = '$date_now',
					ID_TEAM = '$nama_team',
					SALES_ID ='$sales_id',
					ACCOUNT_ID = '$account_id',
					EXTENSION_ADDRESS = '$extension_address',
					STREET = '$street',
					HOUSE_NUMBER = '$house_number',
					USER_ID = '$user_id',
					PHONE = '$phone',
					REMINDER = '$reminder',
					ID_BUILDING_FUNCTION = '$building_function',
					ID_BUILDING_TYPE = '$building_type',
					ID_HOUSE_OWNER_PROFILE = '$house_owner_profile',
					ID_HOUSE_OWNER_STATUS = '$house_owner_status',
					ID_ACTIVITY_STATUS = '$activity_status',
					ID_FAILED_STATUS = '$failed_status',
					REMARK = '$remark',
					DATE_ACT = '$date_act'
					WHERE ID_REPORT_SALES = $id_report_sales ";
		
		$b = mysql_query($sql) or die(mysql_error());}
		
			?>
			<script language = "JavaScript">
			document.location='form_report_customer.php';
			alert('task have been saved.');
			</script>