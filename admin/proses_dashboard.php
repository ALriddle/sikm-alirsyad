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
                                                <h2><i class="icon-list-alt"></i>Grafik Pemasukan KAS</h2>
                                                <div class="box-icon">
                                                </div>
                                        </div>
                                        <div class="box-content">

<table id="TableSiswa" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th></th></tr>
    <?php
        //KONEKSI KE DATABASE
    include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	
        //QUERY AMBIL DATA KELAS
    $query_kelas = "SELECT * FROM kategory_pemasukan";
    $result_kelas = mysql_query($query_kelas);
    $count_kelas = mysql_num_rows($result_kelas);

    while ($data = mysql_fetch_array($result_kelas)) {
        $kode_kelas = $data['KODE_PEMASUKAN'];
                //QUERY MENGHITUNG JUMLAH SISWA SESUAI DENGAN KODE KELAS
        $query_siswa = "SELECT SUM(MASUK_KAS) AS jumlah_siswa FROM data_transaksi_kas WHERE KODE_KAS='$kode_kelas' AND TANGGAL_KAS between '$tgl_awal' and '$tgl_akhir'";
        $result_siswa = mysql_query($query_siswa);
        $data_siswa = mysql_fetch_array($result_siswa);

        echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>$data[NAMA_PEMASUKAN]</td>
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
                                                <h2><i class="icon-list-alt"></i>Grafik Pemasukan Bank</h2>
                                                <div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
                                        </div>
                                        <div class="box-content">
<table id="Table8" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th></th></tr>
    <?php
	//KONEKSI KE DATABASE
	include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	$NAMA_TEAM=$_POST['NAMA_TEAM'];
	//QUERY AMBIL DATA KELAS
	
    $query_kelas1 = "SELECT * FROM kategory_pemasukan";
    $result_kelas1 = mysql_query($query_kelas1);
    $count_kelas1 = mysql_num_rows($result_kelas1);

    while ($data = mysql_fetch_array($result_kelas1)) {
        $kode_kelas = $data['KODE_PEMASUKAN'];
		// $tgl_awal=$data['DATE_ACT'];
		// $tgl_akhir=$data['DATE_ACT'];
		
	//QUERY MENGHITUNG JUMLAH SISWA SESUAI DENGAN KODE KELAS
		
        $query_siswa1 = "SELECT SUM(MASUK_BANK) AS jumlah_siswa1 FROM data_transaksi_bank WHERE KODE_BANK='$kode_kelas' AND TANGGAL_BANK between '$tgl_awal' and '$tgl_akhir' ";
        $result_siswa1 = mysql_query($query_siswa1);
        $data_siswa1 = mysql_fetch_array($result_siswa1);
		if($data_siswa1['jumlah_siswa1'] == 0) $data_siswa1['jumlah_siswa1'] = null;
        echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>$data[NAMA_PEMASUKAN]</td>
              <td align='center'>$data_siswa1[jumlah_siswa1]</td>
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
<br>

 <div class="box">
                                        <div class="box-header well">
                                                <h2><i class="icon-list-alt"></i>Grafik Pengeluaran KAS</h2>
                                                <div class="box-icon">
                                                </div>
                                        </div>
                                        <div class="box-content">

<table id="Table18" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th></th></tr>
    <?php
        //KONEKSI KE DATABASE
    include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	
        //QUERY AMBIL DATA KELAS
    $query_kelas3 = "SELECT * FROM kategory_pengeluaran";
    $result_kelas3 = mysql_query($query_kelas3);
    $count_kelas3 = mysql_num_rows($result_kelas3);

    while ($data3 = mysql_fetch_array($result_kelas3)) {
        $kode_kelas3 = $data3['KODE_PENGELUARAN'];
                //QUERY MENGHITUNG JUMLAH SISWA SESUAI DENGAN KODE KELAS
        $query_siswa3 = "SELECT SUM(KELUAR_KAS) AS jumlah_siswa3 FROM data_transaksi_kas WHERE KODE_KAS='$kode_kelas3' AND TANGGAL_KAS between '$tgl_awal' and '$tgl_akhir'";
        $result_siswa3 = mysql_query($query_siswa3);
        $data_siswa3 = mysql_fetch_array($result_siswa3);
        if($data_siswa3['jumlah_siswa3'] == 0) $data_siswa3['jumlah_siswa3'] = null;
        echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>$data3[NAMA_PENGELUARAN]</td>
              <td align='center'>$data_siswa3[jumlah_siswa3]</td>
              </tr>";
    }
    ?>

</table>
<!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script type="text/javascript">
    $('#Table18').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#TableSiswa",
        dataFormat: "HTMLTable"
    });
</script>
</div>
</div>

<div class="box">
                                        <div class="box-header well">
                                                <h2><i class="icon-list-alt"></i>Grafik Pengeluaran BANK</h2>
                                                <div class="box-icon">
                                                </div>
                                        </div>
                                        <div class="box-content">

<table id="Table19" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th></th></tr>
    <?php
        //KONEKSI KE DATABASE
    include('DB_driver.php');
	$tgl_awal=$_POST['tgl_awal'];
	$tgl_akhir=$_POST['tgl_akhir'];
	
        //QUERY AMBIL DATA KELAS
    $query_kelas4 = "SELECT * FROM kategory_pengeluaran";
    $result_kelas4 = mysql_query($query_kelas4);
    $count_kelas4 = mysql_num_rows($result_kelas4);

    while ($data4 = mysql_fetch_array($result_kelas4)) {
        $kode_kelas4 = $data4['KODE_PENGELUARAN'];
                //QUERY MENGHITUNG JUMLAH SISWA SESUAI DENGAN KODE KELAS
        $query_siswa4 = "SELECT SUM(KELUAR_BANK) AS jumlah_siswa4 FROM data_transaksi_bank WHERE KODE_BANK='$kode_kelas4' AND TANGGAL_BANK between '$tgl_awal' and '$tgl_akhir'";
        $result_siswa4 = mysql_query($query_siswa4);
        $data_siswa4 = mysql_fetch_array($result_siswa4);
        if($data_siswa4['jumlah_siswa4'] == 0) $data_siswa4['jumlah_siswa4'] = null;
        echo "<tr bgcolor='#D5F35B' style='display:none;'>
              <td>$data4[NAMA_PENGELUARAN]</td>
              <td align='center'>$data_siswa4[jumlah_siswa4]</td>
              </tr>";
    }
    ?>

</table>
<!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script type="text/javascript">
    $('#Table19').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#TableSiswa",
        dataFormat: "HTMLTable"
    });
</script>
</div>
</div>

<div class="form-actions" align="right" >
							  <a class="btn btn-danger" href="../admin/grafik.php"><i class="icon icon-white icon-undo "></i> Kembali</a>
				</div>
				</div>
				</div>
				</div>
				</div>
<?php include('footer.php'); ?>