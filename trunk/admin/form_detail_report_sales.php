<?php include('header.php'); ?>

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_report_customer.php">Manajemen Report Sales</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Form Detail Report</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Daily Sales Activity</h2>
					</div>
					
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from fact_report_customer1 where ID_REPORT_SALES='$id' LIMIT 1") or die(mysql_error());
					$report = mysql_fetch_array($query);
					?>

					<div class="box-content">
						<form class="form-horizontal" action="log_save_report_activities.php" method="get">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date">Date</label>
							  <div class="controls">
								<input type="text" class="input-medium uneditable-input" id="DATE_NOW" value="<?php echo $report['DATE_NOW'];?>"  name="DATE_NOW" disabled>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="reminder">Date Survei</label>
							  <div class="controls">
								<input type="text" class="input_medium uneditable-input" id="DATE_ACT" name="DATE_ACT" value="<?php echo $report['DATE_ACT'];?>" disabled>
							  </div>
							</div>
							
							
							<div class="control-group">
							  <label class="control-label" for="salesid">Sales ID</label>
								<div class="controls">
								  <input type="text" class="input-small" id="NAMA_TEAM" value="<?php echo $report['ID_TEAM'];?>" name="NAMA_TEAM" disabled>
							&nbsp;
									<input type="text" class="input-small" id="SALES_ID" value="<?php echo $report['SALES_ID'];?>" name="SALES_ID" disabled>
									</div>
								</div>
						
							<div class="control-group">
							  <label class="control-label" for="account">Account ID</label>
							<div class="controls">
  								<input class="input-medium" id="ACCOUNT_ID" type="text" name="ACCOUNT_ID" value="<?php echo $report['ACCOUNT_ID'];?>" disabled>
							</div>
							</div>
							
							<div class="control-group">
							  		<label class="control-label" for="address">Address</label>
							  			<div class="controls">
											<input type="text" class="input-xlarge" id="STREET" value="<?php echo $report['STREET'];?>" name="STREET" disabled>
											<br>
											<input type="text" class="input-medium" id="EXTENSION_ADDRESS" value="<?php echo $report['EXTENSION_ADDRESS'];?>" name="EXTENSION_ADDRESS" disabled>
											<br>
											<input type="text" class="input-mini" id="HOUSE_NUMBER" value="<?php echo $report['HOUSE_NUMBER'];?>" name="HOUSE_NUMBER" disabled>
							  			</div>
								</div>
							
							<div class="control-group">
							  <label class="control-label" for="cst_name">User Input</label>
								<div class="controls">
  									<input type="text" class="input-xlarge" id="USER_ID" name="USER_ID" value="<?php echo $report['USER_ID'];?>" disabled>
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="phone">Phone</label>
								<div class="controls">
  									<input type="text" class="input-medium" id="PHONE" name="PHONE" value="<?php echo $report['PHONE'];?>" disabled>
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="reminder">Reminder</label>
							  <div class="controls">
								<input type="text" class="large-medium uneditable-input" id="REMINDER" name="REMINDER" value="<?php echo $report['REMINDER'];?>" disabled>
							  </div>
							</div>
							
										
							<div class="control-group">
								<label class="control-label" for="building_function">Building Function</label>										
								  <div class="controls">
									<select id="ID_BUILDING_FUNCTION" data-rel="chosen" name="id_building_function" disabled>
									<?php
										if ($report['ID_BUILDING_FUNCTION'] == "1A")
												echo "<option value='1A' selected>1A - Rumah Tangga</option>";
												else echo "<option value='1A'>1A - Rumah Tangga</option>";
												
										if ($report['ID_BUILDING_FUNCTION'] == "1B")
												echo "<option value='1B' selected>1B - Ruko (Bukan WarNet)</option>";
												else echo "<option value='1B'>1B - Ruko (Bukan WarNet)</option>";
									
										if ($report['ID_BUILDING_FUNCTION'] == "1C")
												echo "<option value='1C' selected>1C - Kantor/WarNet</option>";
												else echo "<option value='1C'>1C - Kantor/WarNet</option>";
												
										if ($report['ID_BUILDING_FUNCTION'] == "1D")
												echo "<option value='1D' selected>1D - Industri</option>";
												else echo "<option value='1D'>1D - Industri</option>";
												
										if ($report['ID_BUILDING_FUNCTION'] == "1E")
												echo "<option value='1E' selected>1E - Null</option>";
												else echo "<option value='1E'>1E - Null</option>";
									?>
								  </select>
								</div>							  
							</div>

							<div class="control-group">
								<label class="control-label" for="building_type">Building Type</label>
									<div class="controls">
										<input class="input-medium" type="text" id=" ID_BUILDING_TYPE" name="id_building_type" value="<?php echo $report['ID_BUILDING_TYPE']?>" disabled>
										<!--
											if ($report['ID_BUILDING_TYPE'] == "2A")
												echo "<option value='2A' selected>Bertingkat</option>";
												else echo "<option value='2A'>Bertingkat</option>";

											if ($report['ID_BUILDING_TYPE'] == "2B")
												echo "<option value='2B' selected>Parkiran Mobil</option>";
												else echo "<option value='2B'>Parkiran Mobil</option>";

											if ($report['ID_BUILDING_TYPE'] == "2C")
												echo "<option value='2C' selected>Air Conditioner</option>";
												else echo "<option value='2C'>Air Conditioner</option>";

											if ($report['ID_BUILDING_TYPE'] == "2D")
												echo "<option value='2D' selected>Parkiran Motor</option>";
												else echo "<option value='2D'>Parkiran Motor</option>";

											if ($report['ID_BUILDING_TYPE'] == "2E")
												echo "<option value='2E' selected>Tahap Pembangunan/Renovasi</option>";
												else echo "<option value='2E'>Tahap Pembangunan/Renovasi</option>";	
										?>
										</select>-->
									</div>
							</div>
								
							<div class="control-group">
								<label class="control-label" for="house_owner_profile">House Owner Profile</label>
									<div class="controls">
										<input type="text" class="input-medium" id="ID_HOUSE_OWNER_PROFILE" name="id_house_owner_profile" value="<?php echo $report['ID_HOUSE_OWNER_PROFILE']?>" disabled>
										<!-- 
											if ($report['ID_HOUSE_OWNER_PROFILE'] == "3A")
												echo "<option value='3A' selected>Usia Lanjut (55 tahun ke atas)</option>";
												else echo "<option value='3A'>Usia Lanjut (55 tahun ke atas)</option>";

											if ($report['ID_HOUSE_OWNER_PROFILE'] == "3B")
												echo "<option value='3B' selected>Usia Produktif (30-55 tahun)</option>";
												else echo "<option value='3B'>Usia Produktif (30-55 tahun)</option>";
												
											if ($report['ID_HOUSE_OWNER_PROFILE'] == "3C")
												echo "<option value='3C' selected>Mahasiswa</option>";
												else echo "<option value='3C'>Mahasiswa</option>";
												
											if ($report['ID_HOUSE_OWNER_PROFILE'] == "3D")
												echo "<option value='3D' selected>SMA/SLTP/SD</option>";
												else echo "<option value='3D'>SMA/SLTP/SD</option>";
												
											if ($report['ID_HOUSE_OWNER_PROFILE'] == "3E")
												echo "<option value='3E' selected>Balita</option>";
												else echo "<option value='3E'>Balita</option>";
										?>
										</select>-->
									</div>
							</div> 
													
							<div class="control-group">
								<label class="control-label" for="house_owner_status">House Owner Status</label>								  
									<div class="controls">
										<select id="ID_HOUSE_OWNER_STATUS" data-rel="chosen" name="id_house_owner_status" disabled>
										<?php
											if ($report['ID_HOUSE_OWNER_STATUS'] == "4A")
												echo "<option value='4A selected>4A - Wiraswasta/Pengusaha</option>";
												else echo "<option value='4A'>4A - Wiraswasta/Pengusaha</option>";
												
											if ($report['ID_HOUSE_OWNER_STATUS'] == "4B")
												echo "<option value='4B' selected>4B - Professional (Dokter/jaksa/Pengacara)</option>";
												else echo "<option value='4B'>4B - Professional (Dokter/jaksa/Pengacara)</option>";

											if ($report['ID_HOUSE_OWNER_STATUS'] == "4C")
												echo "<option value='4C' selected>4C - Karyawan Swasta</option>";
												else echo "<option value='4C'>4C - Karyawan Swasta</option>";
												
											if ($report['ID_HOUSE_OWNER_STATUS'] == "4D")
												echo "<option value='4D' selected>4D - Karyawan BUMN</option>";
												else echo "<option value='4D'>4D - Karyawan BUMN</option>";
												
											if ($report['ID_HOUSE_OWNER_STATUS'] == "4E")
												echo "<option value='4E' selected>4E - PNS (termasuk Guru/Dosen)</option>";
												else echo "<option value='4E'>4E - PNS (termasuk Guru/Dosen)</option>";
											
											if ($report['ID_HOUSE_OWNER_STATUS'] == "4F")
												echo "<option value='4F' selected>4F - Null</option>";
												else echo "<option value='4F'>4F - Null</option>";
										?>
										</select>
									</div>							  
							</div>
								
							<div class="control-group">
								<label class="control-label" for="activity_status">Activity Status</label>
									<div class="controls">
										<input type="text" class="input-medium" id="ID_ACTIVITY_STATUS" name="id_activity_status" value="<?php echo $report['ID_ACTIVITY_STATUS']?>" disabled>
										<!--
											if ($report['ID_ACTIVITY_STATUS'] == "5A")
												echo "<option value='5A' selected>Brosur/Flyer</option>";
												else echo "<option value='5A'>Brosur/Flyer</option>";
												
											if ($report['ID_ACTIVITY_STATUS'] == "5B")
												echo "<option value='5B' selected>Kunjungan (Berhasil)</option>";
												else echo "<option value='5B'>Kunjungan (Berhasil)</option>";
												
											if ($report['ID_ACTIVITY_STATUS'] == "5C")
												echo "<option value='5C' selected>Telpon (Berhasil)</option>";
												else echo "<option value='5C'>Telpon (Berhasil)</option>";

											if ($report['ID_ACTIVITY_STATUS'] == "5D")
												echo "<option value='5D' selected>Janjian Bertemu</option>";
												else echo "<option value='5D'>Janjian Bertemu</option>";

											if ($report['ID_ACTIVITY_STATUS'] == "5E")
												echo "<option value='5E' selected>Trial</option>";
												else echo "<option value='5E'>Trial</option>";

											if ($report['ID_ACTIVITY_STATUS'] == "5F")
												echo "<option value='5F' selected>Closing</option>";
												else echo "<option value='5F'>Closing</option>";

											if ($report['ID_ACTIVITY_STATUS'] == "5G")
												echo "<option value='5G' selected>Menolak</option>";
												else echo "<option value='5G'>Menolak</option>";

											if ($report['ID_ACTIVITY_STATUS'] == "5H")
												echo "<option value='5H' selected>Kosong</option>";
												else echo "<option value='5H'>Kosong</option>";	
										?>
										</select>-->
									</div>
							</div> 
								
							<div class="control-group">
								<label class="control-label" for="failed_status">Failed Status</label>								  
									<div class="controls">
										<select id="ID_FAILED_STATUS" data-rel="chosen" name="id_failed_status" disabled>
										<?php
											if ($report['ID_FAILED_STATUS'] == "6A")
												echo "<option value='6A' selected>6A - Tidak Butuh Layanan</option>";
												else echo "<option value='6A'>6A - Tidak Butuh Layanan</option>";
											
											if ($report['ID_FAILED_STATUS'] == "6B")
												echo "<option value='6B' selected>6B - Tidak Mampu Bayar</option>";
												else echo "<option value='6B'>6B - Tidak Mampu Bayar</option>";
												
											if ($report['ID_FAILED_STATUS'] == "6C")
												echo "<option value='6C' selected>6C - Tidak tahu Fungsi /Kegunaan Produk</option>";
												else echo "<option value='6C'>6C - Tidak tahu Fungsi /Kegunaan Produk</option>";
												
											if ($report['ID_FAILED_STATUS'] == "6D")
												echo "<option value='6D' selected>6D - Sudah Pakai Provider Lain yang Sejenis</option>";
												else echo "<option value='6D'>6D - Sudah Pakai Provider Lain yang Sejenis</option>";
												
											if ($report['ID_FAILED_STATUS'] == "6E")
												echo "<option value='6E' selected>6E - Tidak Mempunyai PC</option>";
												else echo "<option value='6E'>6E - Tidak Mempunyai PC</option>";
												
											if ($report['ID_FAILED_STATUS'] == "6F")
												echo "<option value='6F' selected>6F - Salah Alamat</option>";
												else echo "<option value='6F'>6F - Salah Alamat</option>";
												
											if ($report['ID_FAILED_STATUS'] == "6G")
												echo "<option value='6G' selected>6G - Null</option>";
												else echo "<option value='6G'>6G - Null</option>";
										?>
										</select>
									</div>							  
								</div>
							
							<div class="control-group">
							  <label class="control-label" for="remark">Remark</label>
								<div class="controls">
  									<textarea rows="4" id="REMARK" class="input-xlarge" name="remark" placeholder="Tuliskan keterangan..." disabled><?php echo $report['REMARK'];?></textarea>
								</div>
							</div>
							
							<div class="form-actions" align="right" >
							  <a class="btn btn-danger" href="../admin/form_report_customer.php"><i class="icon icon-white icon-undo "></i> Kembali</a>
							  </div>
</div>
						  </fieldset>
						</form>   
				</div>
				<div class="box span6">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-book"></i> Keterangan </h2>
					</div>
					
					<div class="box-content">
						<div class="span6">
							<label class="control-label" for="activity_status"><h4>Building Function :</h4>
								<label class="control-label" for="activity_status">1A = Rumah Tangga</label>
								<label class="control-label" for="activity_status">1B = Ruko (Bukan WarNet)</label>
								<label class="control-label" for="activity_status">1C = Kantor/WarNet</label>
								<label class="control-label" for="activity_status">1D = Industri</label>
								<label class="control-label" for="activity_status">1E = Null</label>
							</label>
							<br>
							<label class="control-label" for="activity_status"><h4>Building Type :</h4>
								<label class="control-label" for="activity_status">2A = Bertingkat</label>
								<label class="control-label" for="activity_status">2B = Parkiran Mobil</label>
								<label class="control-label" for="activity_status">2C = Air Conditioner</label>
								<label class="control-label" for="activity_status">2D = Parkiran Motor</label>
								<label class="control-label" for="activity_status">2E = Tahap Pembangunan/Renovasi</label>
							</label>
							<br>
							<label class="control-label" for="activity_status"><h4>House Owner Profile :</h4>
								<label class="control-label" for="activity_status">3A = Usia Lanjut (55 tahun ke atas)</label>
								<label class="control-label" for="activity_status">3B = Usia Produktif (30-55 tahun)</label>
								<label class="control-label" for="activity_status">3C = Mahasiswa</label>
								<label class="control-label" for="activity_status">3D = SMA/SLTP/SD</label>
								<label class="control-label" for="activity_status">3E = Balita</label>
							</label>
							<br>
							<label class="control-label" for="activity_status"><h4>House Owner Status :</h4>
								<label class="control-label" for="activity_status">4A = Wiraswasta/Pengusaha</label>
								<label class="control-label" for="activity_status">4B = Professional (Dokter/Jaksa/Pengacara)</label>
								<label class="control-label" for="activity_status">4C = Karyawan Swasta</label>
								<label class="control-label" for="activity_status">4D = Karyawan BUMN</label>
								<label class="control-label" for="activity_status">4E = PNS (termasuk Guru/Dosen)</label>
								<label class="control-label" for="activity_status">4F = Null</label>
							</label>
						</div>
						<div class="span6">
							<label class="control-label" for="activity_status"><h4>Activity Status :</h4>
								<label class="control-label" for="activity_status">5A = Brosur/Flyer</label>
								<label class="control-label" for="activity_status">5B = Kunjungan (berhasil)</label>
								<label class="control-label" for="activity_status">5C = Telpon (berhasil)</label>
								<label class="control-label" for="activity_status">5D = Janjian bertemu</label>
								<label class="control-label" for="activity_status">5E = Trial</label>
								<label class="control-label" for="activity_status">5F = Closing</label>
								<label class="control-label" for="activity_status">5G = Menolak</label>
								<label class="control-label" for="activity_status">5H = Kosong</label>
								
							</label>
							<br>
							<label class="control-label" for="activity_status"><h4>Failed Status :</h4>
								<label class="control-label" for="activity_status">6A = Tidak Butuh Layanan</label>
								<label class="control-label" for="activity_status">6B = Tidak Mampu Bayar</label>
								<label class="control-label" for="activity_status">6C = Tidak Tahu Fungsi/Kegunaan Produk</label>
								<label class="control-label" for="activity_status">6D = Sudah Pakai Provider Lain yang Sejenis</label>
								<label class="control-label" for="activity_status">6E = Tidak Mempunyai PC</label>
								<label class="control-label" for="activity_status">6F = Salah Alamat</label>
								<label class="control-label" for="activity_status">6G = Null</label>
							</label>
						</div>
					</div>
				</div>
				</div><!--/span-->
			</div><!--/row-->
    
<?php include('footer.php'); ?>