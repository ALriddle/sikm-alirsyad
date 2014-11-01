<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#####">Manajemen Pendaftaran Pemasukan</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#####">Input Data Kategori Pemasukan</a>
					</li>
				</ul>
			</div>
			
			<?php 
				include('DB_driver.php');
				$id = $_GET['id'];
				$query = mysql_query("select MAX(NO_TRANSAKSI_KAS) as ID_KAS from data_transaksi_kas") or die(mysql_error());
				$data_pemasukan_kas = mysql_fetch_array($query);
				{ 
			?>
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Tambah Pemasukan</h2>
					</div>
					
					<div class="box-content">
						<form class="form-horizontal" action="log_save_register_pemasukan_kas.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_KAS">BUKTI TRANSAKSI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NO_TRANSAKSI_KAS" type="text" value="<?php echo $data_pemasukan_kas['ID_KAS']+1; }?>">
								</div>
							  </div>
						<div class="control-group">
							<label class="control-label" for="KODE_KAS">KODE KAS:</label>
								<div class="controls">
									<input class="input-xlarge focused" id="KODE_PEMASUKAN" name="kode_pemasukan" type="text" value="">
									<!--<select id="KODE_PEMASUKAN" name="kode_pemasukan" data-rel="chosen">
										<?php
										//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT NAMA_PEMASUKAN, KODE_PEMASUKAN FROM kategory_pemasukan ORDER BY NAMA_PEMASUKAN");
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[KODE_PEMASUKAN]\">$p[KODE_PEMASUKAN]</option>\n";
										}
									?>
									</select>-->
								</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="NAMA_KODE">NAMA KODE :</label>
							<div class="controls">
							    <input class="input-xlarge focused" id="NAMA_PEMASUKAN" name="nama_pemasukan" type="text" value="">
							</div>
						</div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_KAS">TANGGAL MASUK:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="TANGGAL_LAPORAN" name="TANGGAL_LAPORAN" type="date" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="BULAN_KAS">BULAN MASUK:</label>
								<div class="controls">
								  <select name="BULAN_LAPORAN" size="1" id="BULAN_LAPORAN">
									<?php
								 $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
								 for ($i=1;$i<=12;$i++)
								 {
								   echo "<option value=".$i.">".$bulan[$i]."</option>";
								 }
							  ?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TAHUN_KAS">TAHUN MASUK:</label>
								<div class="controls">
								  <select name="TAHUN_LAPORAN" size="1" id="TAHUN_LAPORAN">
									<?php
								 for ($i=2014;$i<=2150;$i++)
								 {
								   echo "<option value=".$i.">".$i."</option>";
								 }
							  ?> 
								  </select>
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="MASUK_KAS">MASUK :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="MASUK_KAS" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KETERANGAN" type="text" value="">
								</div>
							  </div>
							  <div class="form-actions"  >
								<button type="submit" class="btn btn-primary">Save Data</button>
								<a class="btn btn-danger" href="../admin/form_transaksi.php"><i class="icon icon-white icon-cross "></i> Cancel</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-book"></i> Keterangan </h2>
					</div>
					<div class="box-content">
						<div class="span7">
						  <label class="control-label" for="activity_status"><h4>Kode Kas Pemasukan:</h4>
								<label class="control-label" for="activity_status">4000 = Saldo Awal</label>
								<label class="control-label" for="activity_status">4200 = Infaq Dari Donatur Tetap</label>
								<label class="control-label" for="activity_status">4300 = Sumbangan Dari Donatur Tidak Tetap</label>
								<label class="control-label" for="activity_status">4400 = Infaq Untuk Program</label>
								<label class="control-label" for="activity_status">4500 = Pendapatan Lain-lain</label>
							</label>
						</div>
</div>
			
				</div><!--/span-->
    
<?php include('footer.php'); ?>
