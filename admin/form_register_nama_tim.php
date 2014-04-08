<?php include('header.php'); ?>
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_tim.php">Manajemen Tim</a><span class="divider">/</span>
					</li>
					<li>
						<a href="form_register_nama_tim.php">Form Input Tim</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Nama Tim Sales</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_data_nama_tim.php" method="post">
							<fieldset>
							  
							 <div class="control-group">
								<label class="control-label" for="ID_TEAM">ID TEAM :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="ID_TEAM" id="ID_TIM" type="text" value="">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="NAMA_TEAM">NAMA TEAM :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_TEAM" id="NAMA_TIM" type="text" value="">
								</div>
							  </div>
							  <div class="form-actions"  >
								<button type="submit" class="btn btn-primary" name="edit">Simpan</button>
							  <a class="btn btn-danger" href="../admin/form_tim.php"><i class="icon icon-white icon-cross "></i> Batal</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			</div><!--/row-->
<?php include('footer.php'); ?>
