<?php include('header.php'); ?>

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Menu</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_report_customer.php">Report Sales</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_report.php">Input Data</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Daily Sales Activity</h2>
					</div>
					
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("SELECT * FROM fact_report_customer1 WHERE ID_REPORT_SALES='$id' LIMIT 1") or die(mysql_error());
					$report = mysql_fetch_array($query);
					?>

					<div class="box-content">
						<form class="form-horizontal" action="log_edit_data_report_sales.php" method="post">
							<fieldset>
							<div class="control-group">
							  <label class="control-label" for="date">Date</label>
							  <div class="controls">
								<input type="text" class="input-medium uneditable-input" id="DATE_NOW" value="<?php echo $report['DATE_NOW'];?>"  name="DATE_NOW" readonly>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="reminder">Date Survei</label>
							  <div class="controls">
								<input type="text" class="input_medium" id="DATE_ACT" name="DATE_ACT" value="<?php echo $report['DATE_ACT'];?>">
							  </div>
							</div>
							
							
							<div class="control-group">
							  <label class="control-label" for="salesid">Sales ID</label>
								<div class="controls">
								  <select id="NAMA_TEAM" name="NAMA_TEAM" data-rel="choosen">
								  <option>Pilih Team</option>
									<?php
									//mengambil nama-nama tim yang ada di database
										$NAMA_TEAM = mysql_query("SELECT DISTINCT NAMA_TEAM, ID_TEAM FROM tim ORDER BY NAMA_TEAM");
										while($p=mysql_fetch_array($NAMA_TEAM)){
										echo "<option value=\"$p[ID_TEAM]\">$p[NAMA_TEAM]</option>\n";
										}
									?>
                                </select>
							&nbsp;
								<select id="SALES_ID" name="SALES_ID">
										<?php
											//mengambil nama-nama tim yang ada di database
											$kota = mysql_query("SELECT * FROM tim ORDER BY SALES_ID");
											while($p=mysql_fetch_array($propinsi)){
											echo "<option value=\"$p[SALES_ID]\">$p[SALES_ID]</option>\n";
											}
										?>
								</select>
								</div>
								</div>
						
							<div class="control-group">
							  <label class="control-label" for="account">Account ID</label>
							<div class="controls">
  								<input class="input-medium" id="ACCOUNT_ID" type="text" name="ACCOUNT_ID" value="<?php echo $report['ACCOUNT_ID'];?>">
							</div>
							</div>
							
							<div class="control-group">
							  		<label class="control-label" for="address">Address</label>
							  			<div class="controls">
											<input type="text" class="input-xlarge" id="EXTENSION_ADDRESS" value="<?php echo $report['EXTENSION_ADDRESS'];?>" name="EXTENSION_ADDRESS">
											<input type="text" class="input-medium" id="STREET" value="<?php echo $report['STREET'];?>" name="STREET">
											<br>
											<br>
											<input type="text" class="span1" id="HOUSE_NUMBER" value="<?php echo $report['HOUSE_NUMBER'];?>" name="HOUSE_NUMBER">
							  			</div>
								</div>
							
							<div class="control-group">
							  <label class="control-label" for="cst_name">Customer Name</label>
								<div class="controls">
  									<input type="text" class="input-xlarge" id="USER_ID" name="USER_ID" value="<?php echo $report['USER_ID'];?>">
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="phone">Phone</label>
								<div class="controls">
  									<input type="text" class="input-medium" id="PHONE" name="PHONE" value="<?php echo $report['PHONE'];?>">
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="reminder">Reminder</label>
							  <div class="controls">
								<input type="text" class="large-medium" id="REMINDER" name="REMINDER" value="<?php echo $report['REMINDER'];?>">
							  </div>
							</div>
						
										
							<div class="control-group">
								<label class="control-label" for="building_function">Building Function</label>										
								  <div class="controls">
									<select id="ID_BUILDING_FUNCTION" data-rel="chosen" name="id_building_function">
									<?php
										if ($report['ID_BUILDING_FUNCTION'] == "1A")
												echo "<option value='1A' selected>1A - Rumah Tangga</option>";
												else echo "<option value='1A'>1A - Rumah Tangga</option>";
												
										if ($report['ID_BUILDING_FUNCTION'] == "Ruko (Bukan WarNet)")
												echo "<option value='1B' selected>1B - Ruko (Bukan WarNet)</option>";
												else echo "<option value='1B'>1B - Ruko (Bukan WarNet)</option>";
									
										if ($report['ID_BUILDING_FUNCTION'] == "Kantor/WarNet")
												echo "<option value='1C' selected>1C - Kantor/WarNet</option>";
												else echo "<option value='1C'>1C - Kantor/WarNet</option>";
												
										if ($report['ID_BUILDING_FUNCTION'] == "Industri")
												echo "<option value='1D' selected>1D - Industri</option>";
												else echo "<option value='1D'>1D - Industri</option>";
									?>
								  </select>
								</div>							  
							</div>

							<div class="control-group">
								<label class="control-label" for="building_type">Building Type</label>
									<div class="controls">
										<select id=" ID_BUILDING_TYPE" multiple data-rel="chosen" name="id_building_type">
										<?php 
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
										</select>
									</div>
							</div> 	
								
							<div class="control-group">
								<label class="control-label" for="house_owner_profile">House Owner Profile</label>
									<div class="controls">
										<select id="ID_HOUSE_OWNER_PROFILE" multiple data-rel="chosen" name="id_house_owner_profile">
										<?php 
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
										</select>
									</div>
							</div> 
													
							<div class="control-group">
								<label class="control-label" for="house_owner_status">House Owner Status</label>								  
									<div class="controls">
										<select id="ID_HOUSE_OWNER_STATUS" data-rel="chosen" name="id_house_owner_status">
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
										?>
										</select>
									</div>							  
							</div>
								
							<div class="control-group">
								<label class="control-label" for="activity_status">Activity Status</label>
									<div class="controls">
										<select id="ID_ACTIVITY_STATUS" multiple data-rel="chosen" name="id_activity_status">
										<?php
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
										</select>
									</div>
							</div> 
								
							<div class="control-group">
								<label class="control-label" for="failed_status">Failed Status</label>								  
									<div class="controls">
										<select id="ID_FAILED_STATUS" data-rel="chosen" name="id_failed_status">
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
										<textarea rows="4" id="REMARK" class="input-xlarge" name="REMARK" placeholder="Tuliskan keterangan..."><?php echo $report['REMARK'];?></textarea>
									</div>
							</div>
							
							<input type="hidden" name="id_report_sales" value ="<?php echo $report['ID_REPORT_SALES'];?>"/>
								
							<div class="form-actions"  >
									<button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
									<a class="btn btn-danger" href="../admin/form_report_customer.php">Cancel</a>
							</div>
						</div>
						</fieldset>
						</form>   
						</div>
					</div>
				</div><!--/span-->
			</div><!--/row-->
    
<?php include('footer.php'); ?>