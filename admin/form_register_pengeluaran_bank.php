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
			
			<?php 
				include('DB_driver.php');
				$id = $_GET['id'];
				$query = mysql_query("select max(NO_TRANSAKSI_BANK)+2 as ID_BANK from data_transaksi_bank") or die(mysql_error());
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
								<label class="control-label" for="NO_TRANSAKSI_BANK">NO TRANSAKSI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NO_TRANSAKSI_BANK" type="text" value="<?php echo $data_pengeluaran_bank['ID_BANK']; }?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="KODE_BANK">KODE BANK:</label>
								<div class="controls">
								  <select id="KODE_PENGELUARAN" name="KODE_PENGELUARAN" data-rel="choosen">
									<?php
									//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT NAMA_PENGELUARAN, ID_KAT_PENGELUARAN, KODE_PENGELUARAN FROM kategory_pengeluaran ORDER BY NAMA_PENGELUARAN");
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[KODE_PENGELUARAN]\">$p[NAMA_PENGELUARAN]</option>\n";
										}
									?>
                                </select>
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