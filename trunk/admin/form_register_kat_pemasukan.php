<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_pegawai.php">Manajemen Kategori Pemasukan</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_register_pegawai.php">Input Data Kategori Pemasukan</a>
					</li>
				</ul>
			</div>
			
			<?php 
				include('DB_driver.php');
				$id = $_GET['id'];
				$query = mysql_query("select MAX(ID_KAT_PEMASUKAN) as ID_KATEGORI from kategory_pemasukan") or die(mysql_error());
				$data_pemasukan_kategori = mysql_fetch_array($query);
				{ 
			?>
			<div class="row-fluid sortable">
				<div class="box span10">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Kategori Pemasukan</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_kat_pemasukan.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="ID_KAT_PEMASUKAN">ID KATEGORI :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="ID_KAT_PEMASUKAN" type="text" value="<?php echo $data_pemasukan_kategori['ID_KATEGORI']+1; }?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="NAMA_PEMASUKAN">NAMA PEMASUKAN :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_PEMASUKAN" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="KODE_PEMASUKAN">KODE PEMASUKAN :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="KODE_PEMASUKAN" type="text" value="">
								</div>
							  </div>
							  <div class="form-actions"  >
								<button type="submit" class="btn btn-primary">Save Data</button>
								<a class="btn btn-danger" href="../admin/form_kat_pemasukan.php"><i class="icon icon-white icon-cross "></i> Cancel</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
				</div><!--/span-->

			</div><!--/row-->
    
<?php include('footer.php'); ?>
