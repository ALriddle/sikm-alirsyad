<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#####">Manajemen Pendaftaran Donatur</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#####">Input Data Donatur</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Donatur</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_register_donasi.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="ID_TRANSAKSI">ID TRANSAKSI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="ID_TRANSAKSI" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="TANGGAL_TRANSAKSI">TANGGAL TRANSAKSI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="TANGGAL_TRANSAKSI" type="date" value="">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="NAMA_DONATUR">NAMA DONATUR :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_DONATUR" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="JUMLAH_DONASI">JUMLAH DONASI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="JUMLAH_DONASI" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="STATUS_DONATUR">STATUS DONATUR :</label>
								<div class="controls">
								  <select id="STATUS_DONATUR" name="STATUS_DONATUR" data-rel="choosen">
									<?php
									//mengambil nama-nama propinsi yang ada di database
										$CITY = mysql_query("SELECT DISTINCT NAMA_PEMASUKAN, ID_KAT_PEMASUKAN, KODE_PEMASUKAN FROM kategory_pemasukan WHERE NAMA_PEMASUKAN LIKE '%Donatur%'");
										while($p=mysql_fetch_array($CITY)){
										echo "<option value=\"$p[KODE_PEMASUKAN]\">$p[NAMA_PEMASUKAN]</option>\n";
										}
									?>
                                </select>
					</div>
							  </div>
							  <div class="form-actions"  >
								<button type="submit" class="btn btn-primary">Save Data</button>
								<a class="btn btn-danger" href="../admin/form_transaksi_donasi.php"><i class="icon icon-white icon-cross "></i> Cancel</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
				</div><!--/span-->

			</div><!--/row-->
    
<?php include('footer.php'); ?>
