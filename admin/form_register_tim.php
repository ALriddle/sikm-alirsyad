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
						<a href="form_register_tim.php">Form Input Tim</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Input Data Tim Sales</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_data_tim.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="SALES_ID"><span align="left">SALES ID:</span></label>
								<div class="controls">
								  <input class="input-xlarge focused" name="SALES_ID" id="SALES_ID" type="text" value="">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="NAMA_PEGAWAI">NAMA SALES :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_PEGAWAI" id="NAMA_PEGAWAI" type="text" value="">
							  </div>
							  </div>
							 <div class="control-group">
							 <label class="control-label" for="NAMA_PEGAWAI">NAMA TEAM :</label>
							 <div class="controls">
								<input class="input-xlarge focused" name="NAMA_TEAM" id="NAMA_TEAM" type="text" value="">
							</div>
								</div>
							 <div class="control-group">
								<label class="control-label" for="ID_TEAM">ID TEAM :</label>
								<div class="controls">
									<input class="input-xlarge focused" name="ID_TEAM" id="ID_TEAM" type="text" value="" readonly>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="SUPERVISOR">SUPERVISOR :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="SUPERVISOR" id="supervisor" type="text" value="">
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
									<td rowspan="1" valign="middle"><b><center>Status Posisi</center></b></td>
								</td>
									</tr>
						  </thead> 


<?php
include"log_view_master_pegawai_tim.php";
?>
</table>
</form>            
							
						  
					</div>
				</div><!--/span-->
				
			</div><!--/row-->
<?php include('footer.php'); ?>
