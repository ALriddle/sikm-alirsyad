<?php include('header.php'); ?>

		
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_transaksi.php">Manajemen Transaksi</a>
					</li>
				</ul>
			</div>
			
			<?php 
			include('DB_driver.php');
				$query = mysql_query("Select IFNULL(totalkas,0) + IFNULL(totalbank,0) as saldototal from 
									(select saldoawaljanuari + saldokas as totalkas from 
									(select Sum(MASUK) as saldoawaljanuari from data_transaksi Where KODE_KATEGORI='4000' AND NO_TRANSAKSI='0114K')saldoawaljanuari,
									(select semua - awal as saldokas from 
									(Select Sum(MASUK)-Sum(Keluar) as semua from data_transaksi Where FLAG='0')semua,
									(Select Sum(MASUK) as awal from data_transaksi Where KODE_KATEGORI='4000' AND FLAG='0')awal)saldokas)totalkas,
									
									(select saldoawaljanuari + saldobank as totalbank from 
									(select Sum(MASUK) as saldoawaljanuari from data_transaksi Where KODE_KATEGORI='4000' AND NO_TRANSAKSI='0114B')saldoawaljanuari,
									(select semua - awal as saldobank from 
									(Select Sum(MASUK)-Sum(Keluar) as semua from data_transaksi Where FLAG='1')semua,
									(Select Sum(MASUK) as awal from data_transaksi Where KODE_KATEGORI='4000' AND FLAG='1')awal)saldobank)totalbank") or die(mysql_error());
				$data_pemasukan_kas1 = mysql_fetch_array($query);
				{ 
			?>
			<label class="control-label" for="appendedPrependedInput"><h4>Saldo Total:</h4></label>
				<div class="input-prepend input-append">
					<span class="add-on">Rp</span><input id="saldo_total" size="12" type="text" value="<?php echo number_format($data_pemasukan_kas1["saldototal"]); } ?>" readonly><span class="add-on">.00</span>
					</div>
			<?php 
			include('DB_driver.php');
				$query = mysql_query("select saldoawaljanuari + saldokas as totalkas from 
									(select Sum(MASUK) as saldoawaljanuari from data_transaksi Where KODE_KATEGORI='4000' AND NO_TRANSAKSI='0114K')saldoawaljanuari,
									(select semua - awal as saldokas from 
									(Select Sum(MASUK)-Sum(Keluar) as semua from data_transaksi Where FLAG='0')semua,
									(Select Sum(MASUK) as awal from data_transaksi Where KODE_KATEGORI='4000' AND FLAG='0')awal)saldokas") or die(mysql_error());
				$data_pemasukan_kas = mysql_fetch_array($query);
				{ 
			?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Daftar Transaksi Kas</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content">
				    <div class="span12">
					<div class="span6"><a class="btn btn-success" href="../admin/form_register_pemasukan_kas.php"><i class="icon icon-white icon-add"></i> Tambah Pemasukan</a>
					<a class="btn btn-danger" href="../admin/form_register_pengeluaran_kas.php"><i class="icon icon-white icon-add"></i> Tambah Pengeluaran</a>
					</div>
					<div class="span6">
					<div class="control-group">
								<label class="control-label" for="appendedPrependedInput"><h4>Saldo Kas:</h4></label>
								<div class="controls">
								  <div class="input-prepend input-append">
									<span class="add-on">Rp</span><input id="saldo_kas" size="12" type="text" value="<?php echo number_format($data_pemasukan_kas["totalkas"]); } ?>" readonly=readonly><span class="add-on">.00</span>
								  </div>
								</div>
					</div>
					</div>
					</div>
					
					<div class="box-content">
					<div class="box span12">
					<div class="box-content">
					<form method=POST action=log_view_pemasukan_kas.php>
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="3">
						  <thead>
							  <tr>
									<td rowspan="1" valign="middle"><b><center>BUKTI TRANSAKSI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KODE</center></b></td>
									<td rowspan="1" valign="middle"><b><center>PEGAWAI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>TANGGAL</center></b></td>
									<td rowspan="1" valign="middle"><b><center>MASUK</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KELUAR</center></b></td>		
									<!--<td rowspan="1" valign="middle"><b><center>SALDO</center></b></td>
									<td rowspan="1" valign="middle"><b><center>SALDO TOTAL KAS</center></b></td> -->
									<td rowspan="1" valign="middle"><b><center>KETERANGAN</center></b></td>	
									<td rowspan="1" valign="middle"><b><center>ACTION</center></b></td>	
								</td>
									</tr>
						  </thead> 


<?php
include"log_view_pemasukan_kas.php";
?>
</table>
</form>            	</div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			</div>
			
			<?php 
			include('DB_driver.php');
				$query = mysql_query("select saldoawaljanuari + saldobank as totalbank from 
									(select Sum(MASUK) as saldoawaljanuari from data_transaksi Where KODE_KATEGORI='4000' AND NO_TRANSAKSI='0114B')saldoawaljanuari,
									(select semua - awal as saldobank from 
									(Select Sum(MASUK)-Sum(Keluar) as semua from data_transaksi Where FLAG='1')semua,
									(Select Sum(MASUK) as awal from data_transaksi Where KODE_KATEGORI='4000' AND FLAG='1')awal)saldobank") or die(mysql_error());
				$data_pemasukan_bank = mysql_fetch_array($query);
				{ 
			?>
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Daftar Transaksi Bank</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					
					<div class="box-content">
					<div class="span6"><a class="btn btn-success" href="../admin/form_register_pemasukan_bank.php"><i class="icon icon-white icon-add"></i> Tambah Pemasukan</a>
					<a class="btn btn-danger" href="../admin/form_register_pengeluaran_bank.php"><i class="icon icon-white icon-add"></i> Tambah Pengeluaran</a> 
					</div>
					<div class="span6">
					<div class="control-group">
								<label class="control-label" for="appendedPrependedInput"><h4>Saldo Bank:</h4></label>
								<div class="controls">
								  <div class="input-prepend input-append">
									<span class="add-on">Rp</span><input id="saldo_bank" size="12" type="text" value="<?php echo number_format($data_pemasukan_bank["totalbank"]) ; } ?>" readonly=readonly><span class="add-on">.00</span>
								  </div>
								</div>
					</div>
					</div>
					
					<div class="box-content">
					<div class="box span12">
					<div class="box-content">
					<form method="POST" action="log_view_pemasukan_bank.php">
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="5">
						  <thead>
							 <tr>
									<td rowspan="1" valign="middle"><b><center>BUKTI TRANSAKSI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KODE</center></b></td>
									<td rowspan="1" valign="middle"><b><center>PEGAWAI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>TANGGAL</center></b></td>
									<td rowspan="1" valign="middle"><b><center>MASUK</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KELUAR</center></b></td>		
									<!--<td rowspan="1" valign="middle"><b><center>SALDO</center></b></td>
									<td rowspan="1" valign="middle"><b><center>SALDO TOTAL BANK</center></b></td>-->
									<td rowspan="1" valign="middle"><b><center>KETERANGAN</center></b></td>	
									<td rowspan="1" valign="middle"><b><center>ACTION</center></b></td>	
							</tr>
						  </thead> 

<?php
include"log_view_pemasukan_bank.php";
?>
</table>
</form>            	</div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			</div>
		
<?php include('footer.php'); ?>
