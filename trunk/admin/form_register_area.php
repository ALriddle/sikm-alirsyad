<?php include('header.php'); ?>
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_customer.php">Manajemen Customer</a><span class="divider">/</span>
					</li>
					<li>
						<a href="form_register_area.php">Input Area</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Area</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_data_area.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="ID_CITY"><span align="left">ID CITY:</span></label>
								<div class="controls">
								  <input class="input-xlarge focused" name="ID_CITY" id="ID_CITY" type="text" value="">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="CITY">CITY NAME:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="CITY" id="CITY" type="text" value="">
							  </div>
							  </div>
							  <div class="form-actions"  >
								<button type="submit" class="btn btn-primary" name="edit">Simpan</button>
							  <a class="btn btn-danger" href="../admin/form_customer.php"><i class="icon icon-white icon-cross "></i> Batal</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->           
							
						  
					</div>
				</div><!--/span-->
				
			</div><!--/row-->
<?php include('footer.php'); ?>
