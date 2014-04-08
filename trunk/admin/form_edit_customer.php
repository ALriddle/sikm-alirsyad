<?php 
include 'DB_driver.php';
include 'header.php';


$edit = mysql_query("SELECT * FROM master_pelanggan WHERE ACCOUNT_ID='$_GET[id]'");
$a = mysql_fetch_array($edit);

?>

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_customer.php">Manajemen Customer</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Form Edit Customer</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Edit Data Pelanggan</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_data_customer.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="ACCOUNT_ID">Account ID :</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="ACCOUNT_ID" name="account_id" type="text" value="<?php echo $a['ACCOUNT_ID']; ?>" readonly>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="USER_ID">User ID :</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="USER_ID" name="user_id" type="text" value="<?php echo $_SESSION['USERNAME_PEGAWAI']; ?>" readonly>
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="FULLNAME">Full name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="FULLNAME" name="full_name" type="text" value="<?php echo $a['FULL_NAME']; ?>" required="required">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="PHONE">Phone Number:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="PHONE" name="phone" type="text" value="<?php echo $a['PHONE']; ?>" required="required">
								</div>
								</div>
							 <div class="control-group">
								<label class="control-label" for="STREET">Street:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="STREET" name="street" type="text" value="<?php echo $a['STREET']; ?>" required="required">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="EXTENTION_ADDRESS">Extention Address:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="EXTENSION_ADDRESS" name="extension_address" type="text" value="<?php echo $a['EXTENSION_ADDRESS']; ?>" required="required">
								</div>
								</div>
							 <div class="control-group">
								<label class="control-label" for="HOUSE_NUMBER">House Number:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="HOUSE_NUMBER" name="house_number" type="text" value="<?php echo $a['HOUSE_NUMBER']; ?>" required="required">
								</div>
								</div>
							<div class="control-group">
								<label class="control-label" for="CITY">ID_City :</label>
								<div class="controls">
									<input class="input-xlarge focused" id="ID_CITY" name="id_city" type="text" value="<?php echo $a['ID_CITY']; ?>" required="required">
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="CITY"> City :</label>
								<div class="controls">
									<input class="input-xlarge focused" id="CITY" name="city" type="text" value="<?php echo $a['CITY']; ?>" required="required">
								</div>
							</div>
							  <div class="control-group">
							  <label class="control-label" for="NODE">Node :</label>
							  <div class="controls">
								<input class="input-xlarge focused" id="NODE" name="node" type="text" value="<?php echo $a['NODE']; ?>" required="required">
							  </div>
							  </div>
							  <div class="control-group">
							  <label class="control-label" for="ID_POWER_SUPPLY">ID Power Supply :</label>
							  <div class="controls">
								<input class="input-xlarge focused" id="ID_POWER_SUPPLY" name="id_power_supply" type="text" value="<?php echo $a['ID_POWER_SUPPLY']; ?>" required="required">
							  </div>
							  </div>
							  <div class="form-actions"  >
								<button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
								<a class="btn btn-danger" href="form_customer.php">Cancel</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
				</div><!--/span-->

			</div><!--/row-->
    
<?php include('footer.php'); ?>
