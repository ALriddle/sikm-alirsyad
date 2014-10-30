<?php include('header.php'); ?>

		
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_tim.php">Manajemen Transaksi</a>
					</li>
				</ul>
			</div>
					
			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Data Pemasukan dan Pengeluaran Kas</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from data_transaksi_kas where NO_TRANSAKSI_KAS='$id' LIMIT 1") or die(mysql_error());
					$data_pemasukan_kas = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_data_pemasukan_kas.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_KAS">NO. TRANSAKSI</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NO_TRANSAKSI_KAS" type="text" value="<?php echo $data_pemasukan_kas['NO_TRANSAKSI_KAS'];?>" readonly="readonly">
								</div>
							  </div>
							 
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_KAS">TANGGAL TRANSAKSI</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="TANGGAL_LAPORAN" name="TANGGAL_LAPORAN" type="date" value="<?php echo $data_pemasukan_kas['TANGGAL_LAPORAN'];?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_KAS">BULAN TRANSAKSI</label>
								<div class="controls">
								  <select name="BULAN_LAPORAN" size="1" id="BULAN_LAPORAN" value="<?php ?>">
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
								<label class="control-label" for="TAHUN_LAPORAN">TAHUN TRANSAKSI</label>
								<div class="controls">
								  <select name="TAHUN_LAPORAN" size="1" id="TAHUN_LAPORAN" value="<?php echo $data_pemasukan_kas['TAHUN_LAPORAN'];?>">
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
								<label class="control-label" for="MASUK_KAS">MASUK</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="MASUK_KAS" name="MASUK_KAS" type="text" value="<?php echo $data_pemasukan_kas['MASUK_KAS'];?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KELUAR_KAS">KELUAR</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="KELUAR_KAS" name="KELUAR_KAS" type="text" value="<?php echo $data_pemasukan_kas['KELUAR_KAS'];?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KETERANGAN" type="text" value="<?php echo $data_pemasukan_kas['KETERANGAN'];?>">
								</div>
							  </div>
							  <div class="form-actions" align="right" >
							  <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
							  <a class="btn btn-danger" href="../admin/form_transaksi.php"><i class="icon icon-white icon-cross "></i> Batal</a>
							  </div>
							</fieldset>
						  </form>
					<?php
					}
					?>
					</div>
				</div><!--/span-->
<?php include('footer.php'); ?>
