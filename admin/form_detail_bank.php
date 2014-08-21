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
						<h2><i class="icon-edit"></i>Detail Data Pemasukan Bank</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from data_transaksi_BANK where NO_TRANSAKSI_BANK='$id' LIMIT 1") or die(mysql_error());
					$data_pemasukan_bank = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
					<form class="form-horizontal" action="form_transaksi.php" method="post">
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
								<label class="control-label" for="TANGGAL_BANK">TANGGAL TRANSAKSI</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="TANGGAL_BANK" name="TANGGAL_BANK" type="date" value="<?php echo $data_pemasukan_bank['TANGGAL_BANK'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="MASUK_BANK">MASUK</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="MASUK_BANK" name="MASUK_BANK" type="text" value="<?php echo $data_pemasukan_bank['MASUK_BANK'];?>" readonly="readonly">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="KELUAR_BANK">KELUAR</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="KELUAR_BANK" name="KELUAR_BANK" type="text" value="<?php echo $data_pemasukan_bank['KELUAR_BANK'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KETERANGAN" type="text" value="<?php echo $data_pemasukan_bank['KETERANGAN'];?>" readonly="readonly">
								</div>
							  </div>
							  <div class="form-actions" align="right" >
							  <a class="btn btn-danger" href="../admin/form_transaksi.php"><i class="icon icon-white icon-cross "></i> Kembali</a>
							  </div>
							</fieldset>
							</form>
					<?php
					}
					?>
					</div>
				</div><!--/span-->
<?php include('footer.php'); ?>
