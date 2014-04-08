<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_customer.php">Manajemen Customer</a>
					</li>
					
				</ul>
			</div>
			<div class="row-fluid sortable">	
				<div class="box span7">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Daftar Area</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content">
					<div class="span4"><a class="btn btn-success" href="../admin/form_register_area.php"><i class="icon icon-white icon-add"></i> Tambah Area</a></div>
					
				
					<div class="box-content">
					<div class="box span12">
					<div class="box-content">
					<form method=POST action=log_view_area.php>
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="3">
						  <thead>
							  <tr>
									<td rowspan="1" valign="middle"><b><center>ID Area</center></b></td>
									<td rowspan="1" valign="middle"><b><center>Nama Area</center></b></td>
									<td rowspan="1" valign="middle"><b><center>Pengelolaan</center></b></td>										
								</td>
									</tr>
						  </thead> 


<?php
include"log_view_area.php";
?>
</table>
</form>            
					</div>
				</div><!--/span-->
			</div>
			</div><!--/row-->
			</div>		
			</div>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Daftar Customer</h2>
					</div>
					<div class="row-fluid">
					<div class="box-content">
					<div class="span7"><a class="btn btn-success" href="form_master_pelanggan.php"><i class="icon icon-white icon-add"></i>Tambah Customer</a></div>	
					<div align="right">
					<form method="post" enctype="multipart/form-data" action="proses_import_customer.php">
					Pilih File Excel: <input name="userfile" type="file">
					<input class="btn btn-success" name="upload" type="submit" value="Import File">
					</form>
					</div>
					</div>
				<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              	  <th rowspan="1" valign="middle"><center>Account ID</center></th>
								  <th rowspan="1" valign="middle"><center>User ID</center></th>
								  <th rowspan="1" valign="middle"><center>Full Name</center></th>
								  <th rowspan="1" valign="middle"><center>Street</center></th>
								  <th rowspan="1" valign="middle"><center>Extension Address</center></th>
								  <th rowspan="1" valign="middle"><center>House Number</center></th>
                                  <th rowspan="1" valign="middle"><center>City</center></th>
								  <th rowspan="1" valign="middle"><center>Node</center></th>
								  <th rowspan="1" valign="middle"><center>ID Power Supply</center></th>
							  	  <th rowspan="1" valign="middle"><center>Actions Choice</center></th>
                              </tr>
						  </thead>
						  <?php include 'log_view_data_customer.php'; ?>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
					
				</div><!--/span-->

			</div><!--/row-->
    
<?php include('footer.php'); ?>
