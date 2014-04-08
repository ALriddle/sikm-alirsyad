<?php 
include('header.php'); 

$u = $_SESSION['USERNAME_PEGAWAI'];
$qsalesid = "SELECT SALES_ID from pegawai WHERE USERNAME_PEGAWAI = '$u'";
$qhasilsalesid = mysql_query($qsalesid);
$qprintsalesid = mysql_fetch_array($qhasilsalesid);
$qhasilsalesid = $qprintsalesid[0]; 
?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_report_customer.php">Manajemen Report Sales</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Daftar Sales Report</h2>
					</div>
					<div class="row-fluid">
					<div class="box-content">
					<div class="span4">
						<a class="btn btn-success" href="form_report1.php"><i class="icon icon-white icon-add"></i>Tambah Report Sales</a>
					</div>
					<!--<div align="right">
					<form method="post" enctype="multipart/form-data" action="proses_import_report.php">
					Pilih File Excel: <input name="userfile" type="file">
					<input class="btn btn-success" name="upload" type="submit" value="Import File">
					</form>
					</div>-->
					</div>
				<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-content">
					
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th><center>ACCOUNT ID</center></th>
								  <th><center>SALES ID</center></th>
								  <th><center>USER ID</center></th>
								  <th><center>PHONE</center></th>
								  <th><center>ADDRESS</center></th>
								  <th><center>DATE TIME INPUT</center></th>
							  	  <th><center>DATE SURVEI</center></th>
								  <th><center>REMINDER</center></th>
								  <th><center>ACTION</center></th>
                              </tr>
						  </thead>
						  <?php include 'log_view_data_report_customer.php'; ?>
					  </table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->
		</div>
	</div>
    
<?php include('footer.php'); ?>
