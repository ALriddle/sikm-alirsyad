<?php
// menggunakan class phpExcelReader
include "excel_reader2.php";

// koneksi ke mysql
include 'DB_driver.php';

// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
$baris = $data->rowcount($sheet_index=0);

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;
$gagal = 0;

// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=2; $i<=$baris; $i++)
{
		$DATE_NOW = $data->val($i, 1);
		$ID_TIM = $data->val($i, 2);
		$SALES_ID	= $data->val($i, 3);
		$ACCOUNT_ID = $data->val($i, 4);
		$EXTENSION_ADDRESS	= $data->val($i, 5);
		$STREET	= $data->val($i, 6);
		$HOUSE_NUMBER = $data->val($i, 7);
		$USER_ID = $data->val($i, 8);
		$PHONE  = $data->val($i, 9);
		$REMINDER = $data->val($i, 10);
		$BUILDING_FUNCTION = $data->val($i, 11);
		$BUILDING_TYPE = $data->val($i, 12);
		$HOUSE_OWNER_PROFILE = $data->val($i, 13);
		$HOUSE_OWNER_STATUS  = $data->val($i, 14);
		$ACTIVITY_STATUS = $data->val($i, 15);
		$FAILED_STATUS = $data->val($i, 16);
		$REMARK = $data->val($i, 17);
		$DATE_ACT = $data->val($i, 18);

  // setelah data dibaca, sisipkan ke dalam tabel mhs
  $query = "INSERT INTO fact_report_customer1 VALUES (
		'$DATE_NOW',
		'$ID_TIM',
		'$SALES_ID',
		'$ACCOUNT_ID',
		'$EXTENSION_ADDRESS',
		'$STREET',
		'$HOUSE_NUMBER',
		'$USER_ID',
		'$PHONE',
		'$REMINDER',
		'$BUILDING_FUNCTION',
		'$BUILDING_TYPE',
		'$HOUSE_OWNER_PROFILE',
		'$HOUSE_OWNER_STATUS',
		'$ACTIVITY_STATUS',
		'$FAILED_STATUS',
		'$REMARK', 
		'$DATE_ACT'
			)";
  $hasil = mysql_query($query);

  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah
  if ($hasil) $sukses++;
  else $gagal++;
}
?>
			<script language = "JavaScript">
			document.location='form_report_customer.php';
			alert(
			'<?php 
			echo "Proses import data pegawai selesai";
			echo "Jumlah data yang sukses diimport : ".$sukses."";
			echo "Jumlah data yang gagal diimport : ".$gagal."";?>');
			</script>
			<?php
// tampilan status sukses dan gagal
 
 

?>