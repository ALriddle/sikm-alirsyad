<?php include('header.php'); ?>


			<div>
	<ul class="breadcrumb">
		<li>
			<a href="index.php">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="grafik.php">Charts</a> <span class="divider">/</span>
		</li>
		<li>
            <a href="#">by Date</a>
        </li>
	</ul>
</div>
		<div class="box">
 <div class="box-header well">
                                                <h2><i ></i></h2>
                                                <div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
	</div>
	<?php
	include('DB_driver.php');
	include('fungsi_indotgl.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
	$tgl1=tgl_indo($tgl_awal);
	$tgl2=tgl_indo($tgl_akhir);
	
	?>
	<h2><center>Periode Dashboard Tanggal : <?php echo"$tgl1";?> s/d <?php echo"$tgl2"; ?></h2>
	
                                    </div> 
<div class="box">
<div class="row-fluid sortable">
                                
                                <div class="box">
                                        <div class="box-header well">
                                                <h2><i class="icon-list-alt"></i>Grafik Peforma Tim Sales</h2>
                                                <div class="box-icon">
                                                </div>
                                        </div>
                                        <div class="box-content">

<table id="TableSiswa" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th>Jumlah Data Input Customer</th></tr>
    <?php
        //KONEKSI KE DATABASE
    include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	$MONTH=$_POST['MONTH'];
        //QUERY AMBIL DATA KELAS
    $query_kelas = "SELECT * FROM dim_time";
    $result_kelas = mysql_query($query_kelas);
    $count_kelas = mysql_num_rows($result_kelas);

    while ($data = mysql_fetch_array($result_kelas)) {
        $kode_kelas = $data['ALTERNATE_DATE'];
                //QUERY MENGHITUNG JUMLAH SISWA SESUAI DENGAN KODE KELAS
        $query_siswa = "SELECT SUM(MASUK_KAS) AS jumlah_siswa FROM data_transaksi_kas WHERE TANGGAL_KAS='$kode_kelas' AND TANGGAL_KAS between '$tgl_awal' and '$tgl_akhir'";
        $result_siswa = mysql_query($query_siswa);
        $data_siswa = mysql_fetch_array($result_siswa);

        echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>Tim $data[MONTH]</td>
              <td align='center'>$data_siswa[jumlah_siswa]</td>
              </tr>";
    }
    ?>

</table>
<!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script type="text/javascript">
    $('#TableSiswa').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#TableSiswa",
        dataFormat: "HTMLTable"
    });
</script>
</div>
<div class="box">
                                        <div class="box-header well">
                                                <h2><i class="icon-list-alt"></i>Dashboard Reporting Area</h2>
                                                <div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
                                        </div>
                                        <div class="box-content">
<table id="Table8" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th>Jumlah Data Berdasarkan Area</th></tr>
    <?php
	//KONEKSI KE DATABASE
	include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
	//QUERY AMBIL DATA KELAS
	
    $query_kelas = "SELECT * FROM dim_area";
    $result_kelas = mysql_query($query_kelas);
    $count_kelas = mysql_num_rows($result_kelas);

    while ($data = mysql_fetch_array($result_kelas)) {
        $kode_kelas = $data['ID_CITY'];
		// $tgl_awal=$data['DATE_ACT'];
		// $tgl_akhir=$data['DATE_ACT'];
		
	//QUERY MENGHITUNG JUMLAH SISWA SESUAI DENGAN KODE KELAS
		
        $query_siswa1 = "SELECT COUNT(*) AS jumlah_siswa FROM fact_report_customer1 WHERE ID_CITY='$kode_kelas' AND DATE_ACT between '$tgl_awal' and '$tgl_akhir' ";
        $result_siswa1 = mysql_query($query_siswa1);
        $data_siswa = mysql_fetch_array($result_siswa1);
		if($data_siswa['jumlah_siswa'] == 0) $data_siswa['jumlah_siswa'] = null;
        echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>$data[CITY]</td>
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
<div class="form-actions" align="right" >
							  <a class="btn btn-danger" href="../admin/grafik.php"><i class="icon icon-white icon-undo "></i> Kembali</a>
				</div>
<?php include('footer.php'); ?>