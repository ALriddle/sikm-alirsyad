<?php include('header.php');

$u = $_SESSION['USERNAME_PEGAWAI'];
$qsales_id = "SELECT SALES_ID from pegawai WHERE USERNAME_PEGAWAI = '$u'";
$qhasilsales_id = mysql_query($qsales_id);
$qprintsales_id = mysql_fetch_array($qhasilsales_id);
$qhasilsales = $qprintsales_id[0];

$qteam = "SELECT NAMA_TEAM from tim WHERE SALES_ID = '$qhasilsales'";
$qhasilteam = mysql_query($qteam);
$qprintteam = mysql_fetch_array($qhasilteam);
$qhasilteam = $qprintteam[0];

?>



			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_penjadwalan.php">Penjadwalan Sales</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Penjadwalan Sales</h2>
					</div>
                    <form method="post" action="log_view_data_jadwal.php">
					<div class="row-fluid">
					<div class="box-content">
					<div class="span4"><a class="btn btn-success" href="form_input_jadwal.php"><i class="icon icon-white icon-add"></i> Masukkan Jadwal</a></div>
					<div class="span4"><div id="DataTables_Table_0_length" class="dataTables_length">
					
					</div>
					</div>
					<div class="span4">
					<label class="pull-right"><strong>Tim :</strong> &nbsp; <?php echo $qhasilteam;?>&nbsp; &nbsp; &nbsp; &nbsp; <strong>Sales ID :</strong> &nbsp; <?php echo $qhasilsales;?></label>
					</div>
					</div>
					</div>
				<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								<th width="25"><center>Team</center></th>
								<th width="150"><center>Street</center></th>
                                <th width="50"><center>Brew</center></th>
								<th width="50"><center>Total House</center></th>
								<th width="80"><center>Start Date</center></th>
								<th width="80"><center>End Date</center></th>
								<th width="50"><center>Duration</center></th>
								<th width="150"><center>Description</center></th>
								<th width="70"><center>Delete Jadwal</center></th>
                              </tr>
						  </thead>
						 <?php include 'log_view_data_jadwal.php'; ?>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
            </form>
    
<?php include('footer.php'); ?>
