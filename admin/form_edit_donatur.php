<?php include('header.php'); ?>

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_tim.php">Manajemen Pendaftaran Donatur</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Data Donatur</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from data_transaksi_donatur where ID_TRANSAKSI='$id' LIMIT 1") or die(mysql_error());
					$data_tim = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_donatur.php" method="post">
							<fieldset>
							  
							 <div class="control-group">
								<label class="control-label" for="ID_TRANSAKSI">ID TRANSAKSI</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="ID_TRANSAKSI" type="text" value="<?php echo $data_tim['ID_TRANSAKSI'];?>" readonly="readonly">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="TANGGAL_TRANSAKSI">TANGGAL TRANSAKSI</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="TANGGAL TRANSAKSI" type="date" value="<?php echo $data_tim['TANGGAL_TRANSAKSI'];?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="NAMA_DONATUR">NAMA DONATUR</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_DONATUR" type="text" value="<?php echo $data_tim['NAMA_DONATUR'];?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="JUMLAH_DONASI">JUMLAH DONASI</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="JUMLAH_DONASI" type="text" value="<?php echo $data_tim['JUMLAH_DONASI'];?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="STATUS_DONATUR">STATUS DONATUR</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="STATUS_DONATUR" type="text" value="<?php echo $data_tim['STATUS_DONATUR'];?>">
								</div>
							  </div>
							  </div>
							  <div class="form-actions" align="right" >
							  <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
							  <a class="btn btn-danger" href="../admin/form_transaksi_donatur.php"><i class="icon icon-white icon-cross "></i> Batal</a>
							  </div>
							</fieldset>
						  </form>
					<?php
					}
					?>
					</div>
				</div><!--/span-->
<?php include('footer.php'); ?>
