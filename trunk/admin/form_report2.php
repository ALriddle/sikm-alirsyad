<?php include('header.php'); ?>
<?php include('DB_driver.php'); ?>

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
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_save_report_activities.php" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date">Date</label>
							  <div class="controls">
								<input type="text" class="input-medium uneditable-input" id="DATE_NOW" value="<?php
echo date("Y/m/d") . "";?>" name="DATE_NOW" readonly="readonly" required='required'>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="reminder">Date Survei</label>
							  <div class="controls">
								<input type="date" class="input_medium" id="DATE_ACT" name="DATE_ACT" required='required'>
							  </div>
							</div>
							
							<?php 
							include('DB_driver.php');
							$id = $_SESSION['USERNAME_PEGAWAI'];
							
							$query1 = mysql_query("SELECT MAX(ID_TEAM) FROM fact_report_customer1 WHERE ID_REPORT_SALES = (SELECT MAX(ID_REPORT_SALES) FROM fact_report_customer1) AND USER_ID='".$id."'");
							$query2 = mysql_query("SELECT MAX(SALES_ID) FROM fact_report_customer1 WHERE ID_REPORT_SALES = (SELECT MAX(ID_REPORT_SALES) FROM fact_report_customer1) AND USER_ID ='".$id."'");
							echo "
							<div class='control-group'>
							  <label class='control-label' for='salesid'>Sales ID</label>
								<div class='controls'>";
								
								while ($report1 = mysql_fetch_array($query1)) {
								echo"
								  <input type='text' id='NAMA_TEAM' name='NAMA_TEAM' value='".$report1['MAX(ID_TEAM)']."' readonly='readonly' required='required'>";}
								  ?>
							&nbsp;
							<?php
								while ($report2 = mysql_fetch_array($query2)) {

								echo "
								<input type='text' id='SALES_ID' name='SALES_ID' value='".$report2['MAX(SALES_ID)']."' readonly='readonly' required='required'>";}
								?>
								</div>
							</div>
						
						<div class="control-group">
							  <label class="control-label" for="account">Account ID</label>
							  <div class="controls">
  								<input id="ACCOUNT_ID" type="text" name="ACCOUNT_ID" class="input-medium" value="">
							</div>
							</div>
						<div class="control-group">
								<label class="control-label" for="address">Address</label>
								<div class="controls">
											<input type="text" value="" id="STREET"  name="STREET" class="input-xlarge" required="required">
											<input type="text"  id="EXTENSION_ADDRESS" name="EXTENSION_ADDRESS" class="input-medium" value="" >
											<br>
											<br>
											<input type="text" id="HOUSE_NUMBER" value="" name="HOUSE_NUMBER" class="input-mini" required='required'>
								</div>
						</div>
						<div class="control-group">
								<label class="control-label" for="address">City</label> 
								<div class="controls">
									<select id="ID_CITY" name="ID_CITY" data-rel="choosen" required='required'>
									<option>Pilih Area</option>
										<?php
										//mengambil nama-nama propinsi yang ada di database
										$ID_CITY = mysql_query("SELECT DISTINCT CITY, ID_CITY FROM dim_area ORDER BY CITY");
										while($p=mysql_fetch_array($ID_CITY)){
										echo "<option value=\"$p[ID_CITY]\">$p[CITY]</option>\n";
										}
									?>
									</select>
								</div>
						</div>
							
							<div class="control-group">
							  <label class="control-label" for="user_id">User ID</label>
								<div class="controls">
  									<input type="text" class="input-xlarge" id="USER_ID" name="USER_ID" value="<?php echo $_SESSION['USERNAME_PEGAWAI']; ?>" readonly="readonly">
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="phone">Phone</label>
								<div class="controls">
  									<input type="text" class="input-medium" id="PHONE" name="PHONE">
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="reminder">Reminder</label>
							  <div class="controls">
								<input type="datetime-local" class="large-medium" id="REMINDER" name="REMINDER">
							  </div>
							</div>
							
										
							<div class="control-group">
								<label class="control-label" for="building_function">Building Function</label>										
									<div class="controls">
										<select id="ID_BUILDING_FUNCTION" data-rel="chosen" name="id_building_function">
											<option value="1A">1A - Rumah Tangga</option>
											<option value="1B">1B - Ruko (Bukan WarNet)</option>
											<option value="1C">1C - Kantor/WarNet</option>
											<option value="1D">1D - Industri</option>
											<option value="1D">1E - Null</option>
										</select>
									</div>							  
							</div>

							<div class="control-group">
								<label class="control-label" for="building_type">Building Type</label>
									<div class="controls">
										<select id="ID_BUILDING_TYPE" multiple data-rel="chosen" name="id_building_type[]">
											<option value="2A">2A - Bertingkat</option>
											<option value="2B">2B - Parkiran Mobil</option>
											<option value="2C">2C - Air Conditioner</option>
											<option value="2D">2D - Parkiran Motor</option>
											<option value="2E">2E - Tahap Pembangunan/Renovasi</option>
										</select>
									</div>
							</div> 	
								
							<div class="control-group">
								<label class="control-label" for="house_owner_profile">House Owner Profile</label>
									<div class="controls">
										<select id="ID_HOUSE_OWNER_PROFILE" multiple data-rel="chosen" name="id_house_owner_profile[]">
											<option value="3A">3A - Usia Lanjut (55 tahun ke atas)</option>
											<option value="3B">3B - Usia Produktif (30-55 tahun)</option>
											<option value="3C">3C - Mahasiswa</option>
											<option value="3D">3D - SMA/SLTP/SD</option>
											<option value="3E">3E - Balita</option>
										</select>
									</div>
							</div> 
													
							<div class="control-group">
								<label class="control-label" for="house_owner_status">House Owner Status</label>								  
									<div class="controls">
										<select id="ID_HOUSE_OWNER_STATUS" data-rel="chosen" name="id_house_owner_status">
											<option value="4A">4A - Wiraswasta/Pengusaha</option>
											<option value="4B">4B - Professional (Dokter/Jaksa/Pengacara)</option>
											<option value="4C">4C - Karyawan Swasta</option>
											<option value="4D">4D - Karyawan BUMN</option>
											<option value="4E">4E - PNS (termasuk Guru/Dosen)</option>
											<option value="4F">4F - Null</option>
										</select>
									</div>							  
							</div>
								
							<div class="control-group">
								<label class="control-label" for="activity_status">Activity Status</label>
									<div class="controls">
										<select id="ID_ACTIVITY_STATUS" multiple data-rel="chosen" name="id_activity_status[]">
											<option value="5A">5A - Brosur/Flyer</option>
											<option value="5B">5B - Kunjungan (berhasil)</option>
											<option value="5C">5C - Telpon (berhasil)</option>
											<option value="5D">5D - Janjian bertemu</option>
											<option value="5E">5E - Trial</option>
											<option value="5F">5F - Closing</option>
											<option value="5G">5G - Menolak</option>
											<option value="5H">5H - Kosong</option>
										</select>
									</div>
							</div> 
								
							<div class="control-group">
								<label class="control-label" for="failed_status">Failed Status</label>								  
									<div class="controls">
										<select id="ID_FAILED_STATUS" data-rel="chosen" name="id_failed_status">
											<option value="6A">6A - Tidak Butuh Layanan</option>
											<option value="6A">6B - Tidak Mampu Bayar</option>
											<option value="6A">6C - Tidak Tahu Fungsi/Kegunaan Produk</option>
											<option value="6A">6D - Sudah Pakai Provider Lain yang Sejenis</option>
											<option value="6A">6E - Tidak Mempunyai PC</option>
											<option value="6A">6F - Salah Alamat</option>
											<option value="6A">6G - Null</option>
										</select>
									</div>							  
								</div>
							
							<div class="control-group">
							  <label class="control-label" for="remark">Remark</label>
								<div class="controls">
  									<textarea rows="4" id="REMARK" class="input-xlarge" name="REMARK" placeholder="Tuliskan keterangan..." value=""></textarea>
								</div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="simpan">Save changes</button>
							  &nbsp;
							  &nbsp;
							  <a class="btn btn-success" href="../admin/form_report1.php"><i class="icon icon-white icon-undo "></i>Tim Lain</a>
							  &nbsp;
							  &nbsp;
							  <a class="btn btn-danger" href="form_report_customer.php">Cancel</a>
								</div>
						  </fieldset>
						</form>   
						</div>
					</div>
				</div><!--/span-->
			</div><!--/row-->
<?php include('footer.php'); ?>			

