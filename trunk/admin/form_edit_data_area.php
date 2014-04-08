<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_customer.php">Manajemen Customer</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Form Edit Area</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Data Area</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from dim_area where ID_CITY='$id' LIMIT 1") or die(mysql_error());
					$data_tim = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_data_area.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="ID_CITY">ID CITY</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="ID_CITY" type="text" value="<?php echo $data_tim['ID_CITY'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="CITY">CITY NAME</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="CITY" type="text" value="<?php echo $data_tim['CITY'];?>"  >
								</div>
							  </div>
							
							  <div class="form-actions" align="right" >
							  <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
							  <a class="btn btn-danger" href="../admin/form_customer.php"><i class="icon icon-white icon-cross "></i> Batal</a>
							  </div>
							</fieldset>
						  </form>
					<?php
					}
					?>
					</div>
				</div><!--/span-->

</div>
<?php include('footer.php'); ?>
