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
						<h2><i class="icon-edit"></i>Detail Data Pemasukan Kas</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from data_transaksi_kas where NO_TRANSAKSI_KAS='$id' LIMIT 1") or die(mysql_error());
					$data_pemasukan_kas = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
					<form class="form-horizontal" action="form_transaksi.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_KAS">NO. TRANSAKSI</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NO_TRANSAKSI_KAS" type="text" value="<?php echo $data_pemasukan_kas['NO_TRANSAKSI_KAS'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KODE_KAS">KODE KAS</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KODE_KAS" type="text" value="<?php echo $data_pemasukan_kas['KODE_KAS'];?>" readonly="readonly" >
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_KAS">TANGGAL TRANSAKSI</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="TANGGAL_KAS" name="TANGGAL_KAS" type="date" value="<?php echo $data_pemasukan_kas['TANGGAL_KAS'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="MASUK_KAS">MASUK</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="MASUK_KAS" name="MASUK_KAS" type="text" value="<?php echo $data_pemasukan_kas['MASUK_KAS'];?>" readonly="readonly">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KELUAR_KAS">KELUAR</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="KELUAR_KAS" name="KELUAR_KAS" type="text" value="<?php echo $data_pemasukan_kas['KELUAR_KAS'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KETERANGAN">KETERANGAN</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KETERANGAN" type="text" value="<?php echo $data_pemasukan_kas['KETERANGAN'];?>" readonly="readonly">
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
