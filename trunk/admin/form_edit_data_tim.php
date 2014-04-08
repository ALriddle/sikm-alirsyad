<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_tim.php">Manajemen Tim</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Form Edit Data Tim</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Edit Data Tim</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from tim where SALES_ID='$id' LIMIT 1") or die(mysql_error());
					$data_tim = mysql_fetch_array($query);
					{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_data_tim.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="SALES_ID">SALES_ID</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="SALES_ID" type="text" value="<?php echo $data_tim['SALES_ID'];?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="NAMA_PEGAWAI">NAMA SALES</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_PEGAWAI" type="text" value="<?php echo $data_tim['NAMA_PEGAWAI'];?>" readonly="readonly" >
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="NAMA_TEAM">NAMA TEAM</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="NAMA_TEAM" name="NAMA_TEAM" type="text" value="<?php echo $data_tim['NAMA_TEAM'];?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="ID_TEAM">ID TEAM</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="ID_TEAM" name="ID_TEAM" type="text" value="<?php echo $data_tim['ID_TEAM'];?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="SUPERVISOR">SUPERVISOR:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="SUPERVISOR" type="text" value="<?php echo $data_tim['SUPERVISOR'];?>">
								</div>
							  </div>
							  <div class="form-actions" align="right" >
							  <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
							  <a class="btn btn-danger" href="../admin/form_tim.php"><i class="icon icon-white icon-cross "></i> Batal</a>
							  </div>
							</fieldset>
						  </form>
					<?php
					}
					?>
					</div>
				</div><!--/span-->
				<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-eye-open"></i> Data Pegawai</h2>
					</div>
					<div class="box-content">
				<form method=POST action=log_view_master_pegawai_tim.php>
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="3">
						  <thead>
							  <tr>
									<td rowspan="1" valign="middle"><b><center>Sales ID</center></b></td>
									<td rowspan="1" valign="middle"><b><center>Nama Pegawai</center></b></td>	
								</td>
									</tr>
						  </thead> 


<?php
include"log_view_master_pegawai_tim.php";
?>
</table>
</form>
</div>
</div>
<?php include('footer.php'); ?>
