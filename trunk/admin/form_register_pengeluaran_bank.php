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
						<a href="#####">Input Data Kategori Pengeluaran</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Tambah Pengeluaran</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_register_pengeluaran_bank.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="NO_TRANSAKSI_BANK">NO TRANSAKSI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NO_TRANSAKSI_BANK" type="text" value="">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KODE_BANK">KODE BANK:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KODE_BANK" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_BANK">TANGGAL PENGELUARAN :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="TANGGAL_BANK" type="date" value="">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="KELUAR_BANK">KELUAR :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KELUAR_BANK" type="text" value="">
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
			
			</div><!--/row-->
			
				</div><!--/span-->

			</div><!--/row-->
    
<?php include('footer.php'); ?>
