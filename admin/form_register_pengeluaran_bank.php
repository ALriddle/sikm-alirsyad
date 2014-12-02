<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_transaksi.php">Manajemen Transkasi</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_register_pengeluaran_bank.php">Input Data Kategori Pengeluaran</a>
					</li>
				</ul>
			</div>
			
			<?php 
				include('DB_driver.php');
				$id = $_GET['id'];
				$query = mysql_query("select max(NO_TRANSAKSI_BANK) as ID_BANK from data_transaksi_bank") or die(mysql_error());
				$data_pengeluaran_bank = mysql_fetch_array($query);
				{ 
			?>
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Tambah Pengeluaran</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_register_pengeluaran_bank.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_BANK">BUKTI TRANSAKSI :</label>
								<div class="controls">
								  <input class="input-large focused" name="NO_TRANSAKSI_BANK" type="text" value="<?php echo $data_pengeluaran_bank['ID_BANK']+1; }?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KODE_BANK">KODE BANK:</label>
								<div class="controls">
								<input class="input-large focused" id="KODE_PENGELUARAN" name="kode_pengeluaran" type="text" value="">
								  <!--<select id="KODE_PENGELUARAN" name="KODE_PENGELUARAN" data-rel="chosen">
									<?php
									//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT NAMA_PENGELUARAN, ID_KAT_PENGELUARAN, KODE_PENGELUARAN FROM kategory_pengeluaran ORDER BY NAMA_PENGELUARAN");
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[KODE_PENGELUARAN]\">$p[NAMA_PENGELUARAN]</option>\n";
										}
									?>
                                </select>-->
					</div>
							  </div>
							  <div class="control-group">
							<label class="control-label" for="NAMA_KODE">NAMA KODE :</label>
							<div class="controls">
							    <input class="input-large focused" id="NAMA_PENGELUARAN" name="nama_pengeluaran" type="text" value="">
							</div>
							</div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_BANK">TANGGAL KELUAR :</label>
								<div class="controls">
								  <input class="input-large focused" name="TANGGAL_LAPORAN" type="date" value="">
								</div>
							  </div>
							    <div class="control-group">
								<label class="control-label" for="BULAN_KAS">BULAN KELUAR:</label>
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
								<label class="control-label" for="TAHUN_KAS">TAHUN KELUAR:</label>
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
								<label class="control-label" for="KELUAR_BANK">KELUAR :</label>
								<div class="controls">
								  <input class="input-large focused" name="KELUAR_BANK" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN :</label>
								<div class="controls">
								  <input class="input-large focused" name="KETERANGAN" type="text" value="">
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
						  <label class="control-label" for="activity_status"><h4>Kode Kas Pengeluaran:</h4>
								<label class="control-label" for="activity_status">5101 = Gaji Karyawan</label>
								<label class="control-label" for="activity_status">5102 = Insentif</label>
								<label class="control-label" for="activity_status">5103 = Keperluan Kantor</label>
								<label class="control-label" for="activity_status">5104 = Transportasi</label>
								<label class="control-label" for="activity_status">5105 = Renovasi</label>
								<label class="control-label" for="activity_status">5106 = Dakwah</label>
								<label class="control-label" for="activity_status">5107 = Akomodasi</label>
								<label class="control-label" for="activity_status">5108 = Konsumsi</label>
								<label class="control-label" for="activity_status">5109 = Listrik Dan Telepon</label>
								<label class="control-label" for="activity_status">5110 = Biaya Administrasi Bank</label>
								<label class="control-label" for="activity_status">5111 = Biaya Lain-lain</label>
							</label>
						</div>
</div>
			
				</div><!--/span-->
    
<?php include('footer.php'); ?>