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
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Daftar Transaksi Bank</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Data Pemasukan Bank</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from data_transaksi_bank where NO_TRANSAKSI_BANK='$id' LIMIT 1") or die(mysql_error());
					$data_pemasukan_bank = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_data_pemasukan_bank.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_BANK">NO. TRANSAKSI</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NO_TRANSAKSI_BANK" type="text" value="<?php echo $data_pemasukan_bank['NO_TRANSAKSI_BANK'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KODE_BANK">KODE BANK</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KODE_BANK" type="text" value="<?php echo $data_pemasukan_bank['KODE_BANK'];?>" readonly="readonly" >
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_BANK">TANGGAL PEMASUKAN</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="TANGGAL_BANK" name="TANGGAL_BANK" type="text" value="<?php echo $data_pemasukan_bank['TANGGAL_BANK'];?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="MASUK_BANK">MASUK</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="MASUK_BANK" name="MASUK_BANK" type="text" value="<?php echo $data_pemasukan_bank['MASUK_BANK'];?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KETERANGAN" type="text" value="<?php echo $data_pemasukan_bank['KETERANGAN'];?>">
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
