<?php include('header.php'); ?>


                         <div>
                                <ul class="breadcrumb">
                                        <li>
                                                <a href="index.php">Home</a> <span class="divider">/</span>
                                        </li>
                                        <li>
                                                <a href="grafik.php">Charts</a>
                                        </li>
										
                                </ul>
                        </div>
				<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i>Dashboard Peforma Tim Sales Pada Periode Tertentu</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form method="post" action="proses_dashboard.php">
					<div>
					<label for="tgl_awal" name="tgl_awal"> Dari Tanggal </label><input type="date" id="tgl_awal" name="tgl_awal">
					<label for="tgl_akhir" name="tgl_akhir"> Sampai Tanggal </label><input type="date" id="tgl_akhir" name="tgl_akhir">
					</div>
					<br>
					<input type="submit" value="Print Dashboard">
					</div>
					</form>
					</div>
					
				
				<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i>Dashboard Mapping Berdasarkan Periode dan Area</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form method="post" action="proses_dashboard_area.php">
					<div>
					<label for="tgl_awal" name="tgl_awal"> Dari Tanggal </label><input type="date" id="tgl_awal" name="tgl_awal">
					<label for="tgl_akhir" name="tgl_akhir"> Sampai Tanggal </label><input type="date" id="tgl_akhir" name="tgl_akhir">
					<label for="NAMA_TEAM" name="NAMA_TEAM"> Pilih Area</label>
					<div class="controls">
								  <select id="CITY" name="CITY" data-rel="choosen">
								  <option>Pilih Area</option>
									<?php
									//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT CITY, ID_CITY FROM dim_area ORDER BY CITY");
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[ID_CITY]\">$p[CITY]</option>\n";
										}
									?>
                                </select>
					</div>
					<br>
					<input type="submit" value="Print Dashboard">
					</div>
					</form>
					</div>
					</div>
					</div>
                     <div class="box">
                                        <div class="box-header well">
                                                <h2><i class="icon-list-alt"></i>Dashboard Reporting </h2>
                                                <div class="box-icon">
                                                </div>
                                        </div>
                                        <div class="box-content">

<h4>Grafik Jumlah Keseluruhan Building Function</h4>
<table id="Table2" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th>Jumlah Data Input Building Function</th></tr>
    <?php
        //KONEKSI KE DATABASE
    include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
        //QUERY AMBIL DATA KELAS
    $query_kelas = "SELECT * FROM dime_time";
    $result_kelas = mysql_query($query_kelas);
    $count_kelas = mysql_num_rows($result_kelas);

    while ($data = mysql_fetch_array($result_kelas)) {
        $kode_kelas = $data['ALTERNATE_DATE'];
                //QUERY MENGHITUNG JUMLAH SISWA SESUAI DENGAN KODE KELAS
        $query_siswa = "SELECT SUM(MASUK_KAS) AS jumlah_siswa FROM data_transaksi_kas WHERE TANGGAL_KAS='$kode_kelas'";
        $result_siswa = mysql_query($query_siswa);
        $data_siswa = mysql_fetch_array($result_siswa);

        echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>Tipe $data[MONTH]</td>
              <td align='center'>$data_siswa[jumlah_siswa]</td>
              </tr>";
    }
    ?>

</table>
<!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script type="text/javascript">
    $('#Table2').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#Table2",
        dataFormat: "HTMLTable"
    });
</script>                                 
<br>

<h4>Grafik Jumlah Keseluruhan Building Type</h4>
<table id="Table3" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th>Jumlah Data Building Type</th></tr>
    <?php
	//KONEKSI KE DATABASE
	include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
	//QUERY AMBIL DATA KELAS
	
    $query_kelas = "SELECT * FROM building_type";
    $result_kelas = mysql_query($query_kelas);
    $count_kelas = mysql_num_rows($result_kelas);

	$arr_count = array();
	
    while ($data = mysql_fetch_array($result_kelas)) {
		$arr_tmp['ID_BUILDING_TYPE'] = $data['ID_BUILDING_TYPE'];//echo "id building type: ".$arr_tmp['ID_BUILDING_TYPE']."<br>";
		$arr_tmp['KETERANGAN_B_T'] = $data['KETERANGAN_B_T'];
		$arr_tmp['AMOUNT'] = 0;
		
		$query_root = "SELECT * FROM fact_report_customer1";//echo $query_root."<br>";
		$result_root = mysql_query($query_root);
		while($data2 = mysql_fetch_array($result_root)){
			$data_exploded = explode(',', $data2['ID_BUILDING_TYPE']);//var_dump($data_exploded);echo "<br><br>";
			
			foreach($data_exploded as $row){//echo $row." = ".$arr_tmp['ID_BUILDING_TYPE']."<br>";
				if($row == $arr_tmp['ID_BUILDING_TYPE']){
					$arr_tmp['AMOUNT']++;//echo $row." = ".$arr_tmp['ID_BUILDING_TYPE']."<br>";
				}
			}
			
			//echo "<br>FINAL: ";var_dump($arr_count);echo "====<br>";
		}
		
		$arr_count[] = $arr_tmp;
		
	}
	//var_dump($arr_count);
	
	foreach($arr_count as $row){
		if($row['AMOUNT'] == 0) $row['AMOUNT'] = null;
		echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>$row[KETERANGAN_B_T]</td>
              <td align='center'>$row[AMOUNT]</td>
              </tr>";
	}
?>
</table>
<!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script type="text/javascript">
    $('#Table3').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#Table3",
        dataFormat: "HTMLTable"
    });
</script>
<br>

<h4>Grafik Jumlah Keseluruhan Building Owner Profile</h4>
<table id="Table5" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th>Jumlah Data Owner Profile</th></tr>
    <?php
	//KONEKSI KE DATABASE
	include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
	//QUERY AMBIL DATA KELAS
	
    $query_kelas = "SELECT * FROM house_owner_profile";
    $result_kelas = mysql_query($query_kelas);
    $count_kelas = mysql_num_rows($result_kelas);

	$arr_count = array();
	
    while ($data = mysql_fetch_array($result_kelas)) {
        $arr_tmp['ID_HOUSE_OWNER_PROFILE'] = $data['ID_HOUSE_OWNER_PROFILE'];//echo "house owner profile: ".$arr_tmp['ID_HOUSE_OWNER_ROFILE']."<br>";
		$arr_tmp['KETERANGAN_H_O_P'] = $data['KETERANGAN_H_O_P'];
		$arr_tmp['AMOUNT'] = 0;
		
		$query_root = "SELECT * FROM fact_report_customer1";//echo $query_root."<br>";
		$result_root = mysql_query($query_root);
		while($data2 = mysql_fetch_array($result_root)){
			$data_exploded = explode(',', $data2['ID_HOUSE_OWNER_PROFILE']);//var_dump($data_exploded);echo "<br><br>";
			
			foreach($data_exploded as $row){//echo $row." = ".$arr_tmp['ID_HOUSE_OWNER_PROFILE']."<br>";
				if($row == $arr_tmp['ID_HOUSE_OWNER_PROFILE']){
					$arr_tmp['AMOUNT']++;//echo $row." = ".$arr_tmp['ID_HOUSE_OWNER_PROFILE']."<br>";
				}
			}
			
			//echo "<br>FINAL: ";var_dump($arr_count);echo "====<br>";
		}
		
		$arr_count[] = $arr_tmp;
		
	}
	
	//var_dump($arr_count);
	
	foreach($arr_count as $row){
		if($row['AMOUNT'] == 0) $row['AMOUNT'] = null;
		echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>$row[KETERANGAN_H_O_P]</td>
              <td align='center'>$row[AMOUNT]</td>
              </tr>";
	}
    ?>

</table>
<!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script type="text/javascript">
    $('#Table5').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#Table5",
        dataFormat: "HTMLTable"
    });
</script>
<br>

<h4>Grafik Jumlah Keseluruhan Failed Status</h4>
<table id="Table6" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th>Jumlah Data Failed Status</th></tr>
    <?php
	//KONEKSI KE DATABASE
	include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	//QUERY AMBIL DATA KELAS
	
    $query_kelas = "SELECT * FROM failed_status";
    $result_kelas = mysql_query($query_kelas);
    $count_kelas = mysql_num_rows($result_kelas);

    while ($data = mysql_fetch_array($result_kelas)) {
        $kode_kelas = $data['ID_FAILED_STATUS'];
		// $tgl_awal=$data['DATE_ACT'];
		// $tgl_akhir=$data['DATE_ACT'];
		
	//QUERY MENGHITUNG JUMLAH SISWA SESUAI DENGAN KODE KELAS
		
        $query_siswa1 = "SELECT COUNT(*) AS jumlah_siswa FROM fact_report_customer1 WHERE ID_FAILED_STATUS='$kode_kelas'";
        $result_siswa1 = mysql_query($query_siswa1);
        $data_siswa = mysql_fetch_array($result_siswa1);	
        echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>$data[KETERANGAN_F_S]</td>
              <td align='center'>$data_siswa[jumlah_siswa]</td>
              </tr>";
    }
    ?>

</table>
<!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script type="text/javascript">
    $('#Table6').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#Table6",
        dataFormat: "HTMLTable"
    });
</script>
<br>
<h4>Grafik Jumlah Keseluruhan Activity Status</h4>
<table id="Table7" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th>Jumlah Data Activity Status</th></tr>
    <?php
	//KONEKSI KE DATABASE
    include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
	
	//QUERY AMBIL DATA KELAS
	
    $query_kelas = "SELECT * FROM activity_status";
    $result_kelas = mysql_query($query_kelas);
    $count_kelas = mysql_num_rows($result_kelas);

	$arr_count = array();
	
    while ($data = mysql_fetch_array($result_kelas)) {
        $arr_tmp['ID_ACTIVITY_STATUS'] = $data['ID_ACTIVITY_STATUS'];//echo "id activity status: ".$arr_tmp['ID_ACTIVITY_STATUS']."<br>";
		$arr_tmp['KETERANGAN_A_S'] = $data['KETERANGAN_A_S'];
		$arr_tmp['AMOUNT'] = 0;
		
		$query_root = "SELECT * FROM fact_report_customer1";//echo $query_root."<br>";
		$result_root = mysql_query($query_root);
		while($data2 = mysql_fetch_array($result_root)){
			$data_exploded = explode(',', $data2['ID_ACTIVITY_STATUS']);//var_dump($data_exploded);echo "<br><br>";
			
			foreach($data_exploded as $row){//echo $row." = ".$arr_tmp['ID_ACTIVITY_STATUS']."<br>";
				if($row == $arr_tmp['ID_ACTIVITY_STATUS']){
					$arr_tmp['AMOUNT']++;//echo $row." = ".$arr_tmp['ID_ACTIVITY_STATUS']."<br>";
				}
			}
			
			//echo "<br>FINAL: ";var_dump($arr_count);echo "====<br>";
		}
		
		$arr_count[] = $arr_tmp;
		
	}
	
	//var_dump($arr_count);
	
	foreach($arr_count as $row){
		if($row['AMOUNT'] == 0) $row['AMOUNT'] = null;
		echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>$row[KETERANGAN_A_S]</td>
              <td align='center'>$row[AMOUNT]</td>
              </tr>";
	}
    ?>

</table>
<!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script type="text/javascript">
    $('#Table7').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#Table7",
        dataFormat: "HTMLTable"
    });
</script>
<br>
<h4>Grafik Jumlah Keseluruhan Area</h4>
<table id="Table8" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th></th> <th>Jumlah Data Activity Area</th></tr>
    <?php
	//KONEKSI KE DATABASE
	include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	//QUERY AMBIL DATA KELAS
	
    $query_kelas = "SELECT  FROM dim_time";
    $result_kelas = mysql_query($query_kelas);
    $count_kelas = mysql_num_rows($result_kelas);

    while ($data = mysql_fetch_array($result_kelas)) {
        $kode_kelas = $data['ALTERNATE_DATE'];
		// $tgl_awal=$data['DATE_ACT'];
		// $tgl_akhir=$data['DATE_ACT'];
		
	//QUERY MENGHITUNG JUMLAH SISWA SESUAI DENGAN KODE KELAS
		
        $query_siswa1 = "SELECT SUM(MASUK_KAS) AS jumlah_siswa FROM data_transaksi_kas WHERE TANGGAL_KAS='$kode_kelas'";
        $result_siswa1 = mysql_query($query_siswa1);
        $data_siswa = mysql_fetch_array($result_siswa1);	
        echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>$data[MONTH]</td>
              <td align='center'>$data_siswa[jumlah_siswa]</td>
              </tr>";
    }
    ?>

</table>
<!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script type="text/javascript">
    $('#Table8').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#Table8",
        dataFormat: "HTMLTable"
    });
</script>


</div>
</div>

                
<?php include('footer.php'); ?>