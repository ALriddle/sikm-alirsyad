<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_edit_data_pegawai.php">Profil</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span8">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Detail Data Pegawai</h2>
					</div>
					<?php 
					include('DB_driver.php');
					$id = $_GET['id'];
					$query = mysql_query("select * from pegawai where SALES_ID='$id' LIMIT 1") or die(mysql_error());
					$pegawai = mysql_fetch_array($query);
					list($tahun,$bulan,$tanggal) = explode('-',$pegawai['TANGGAL_LAHIR']);{ 
					?>
					<div class="box-content">
						<form class="form-horizontal" action="log_edit_data_pegawai.php" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="SALES_ID" >Sales ID :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="SALES_ID" type="text" value="<?php echo $pegawai['SALES_ID'];?>" required="required" readonly>
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="NO_KTP_PEGAWAI">No. KTP :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NO_KTP_PEGAWAI" type="text" value="<?php echo $pegawai['NO_KTP_PEGAWAI'];?>">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="NAMA_PEGAWAI">Nama Pegawai :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NAMA_PEGAWAI" type="text" value="<?php echo $pegawai['NAMA_PEGAWAI'];?>" >
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="USERNAME_PEGAWAI">Username :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="USERNAME_PEGAWAI" type="text" value="<?php echo $pegawai['USERNAME_PEGAWAI'];?>" >
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="PASSWORD_PEGAWAI">Password :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="PASSWORD_PEGAWAI" type="text" value="<?php echo $pegawai['PASSWORD_PEGAWAI'];?>" >
								</div>
								</div>
							 <div class="control-group">
								<label class="control-label" for="TEMPAT_LAHIR">Tempat Lahir :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="TEMPAT_LAHIR" type="text" value="<?php echo $pegawai['TEMPAT_LAHIR'];?>">
								</div>
								</div>
							 <div class="control-group">
							  <label class="control-label" for="TANGGAL_LAHIR">Tanggal Lahir :</label>
							  <div class="controls">
								 <select name="tgl" size="1" id="tgl">
									<?php

								 for ($i=1;$i<=31;$i++)

								 {

									if($tanggal==$i) {

										echo "<option value=".$i." selected>".$i."</option>";

									} else {

										echo "<option value=".$i.">".$i."</option>";

									}

								 }

							  ?>
								  </select>
								  <br>
								  <br>
								  <select name="bln" size="1" id="bln">
									<?php

								 $namabulan=array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

								 for ($i=1;$i<=12;$i++)

								 {

									if($bulan==$i) {

										echo "<option value=".$i." selected>".$namabulan[$i]."</option>";

									} else {

										echo "<option value=".$i.">".$namabulan[$i]."</option>";

									}

								 }

							  ?>
								  </select>
								  </br>
								  <br>
								  <select name="thn" size="1" id="thn">
									<?php

								  echo "<option value=".$tahun.">".$tahun."</option>";

								 for ($i=1985;$i<=2000;$i++)

								 {

									if($tahun==$i) {

										echo "<option value=".$i." selected>".$i."</option>";

									} else {

										echo "<option value=".$i.">".$i."</option>";

									}

								 }

							  ?>
								  </select>
								  </br>
								  </td>
							  
							  </div>
							  </div>
							  <div class="control-group">
							  <label class="control-label" for="ALAMAT_PEGAWAI">Alamat</label>
							  <div class="controls">
								<textarea type="text" class="input-xlarge focused" name="ALAMAT_PEGAWAI" value="" rows="3"><?php echo $pegawai['ALAMAT_PEGAWAI'];?></textarea>
							  </div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="NO_TELP_PEGAWAI">Telepon :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="NO_TELP_PEGAWAI" type="text" value="<?php echo $pegawai['NO_TELP_PEGAWAI'];?>">
								</div>
								</div>
							 <div class="control-group">
								<label class="control-label" for="DATE_JOIN">Date Join :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="DATE_JOIN" type="text" value="<?php echo $pegawai['DATE_JOIN'];?>" readonly="readonly">
								</div>
								</div>	
							 <div class="control-group">
								<label class="control-label" for="HAK_AKSES">Hak Akses :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="HAK_AKSES_PEGAWAI" type="text" <?php 
								  	if ($pegawai['HAK_AKSES_PEGAWAI'] == "Admin")
									echo "value='Admin'";
									else echo "value='Member'";?>" readonly="readonly">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="STATUS_PEGAWAI">Status Pegawai :</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="STATUS_PEGAWAI" type="text" <?php 
								  	if ($pegawai['STATUS_PEGAWAI'] == "Aktif")
									echo "value='Aktif'";
									else if ($pegawai['STATUS_PEGAWAI'] == "Cuti")
									echo "value='Cuti'";
									else echo "value='Non-Aktif'"; ?>" readonly="readonly">
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="STATUS_POSISI">Status Posisi :</label>
								<div class="controls">
								<input class="input-xlarge focused" name="STATUS_POSISI" type="text"
									  <?php
										if ($pegawai['STATUS_POSISI'] == "TRAINEE")
										echo "value='TRAINEE'";
										else if ($pegawai['STATUS_POSISI'] == "JUNIOR")
										echo "value='JUNIOR'";
										else if ($pegawai['STATUS_POSISI'] == "SENIOR")
										echo "value='SENIOR'";
										else if ($pegawai['STATUS_POSISI'] == "SUPERVISOR")
										echo "value='SUPERVISOR'";
										else if ($pegawai['STATUS_POSISI'] == "ASISTEN MANAGER")
										echo "value='ASISTEN MANAGER'";
										else if ($pegawai['STATUS_POSISI'] == "TERITORY MANAGER")
										echo "value='TERITORY MANAGER'";
										else echo "value='REGIONAL HEAD'";?> readonly="readonly">
								</div>
							  </div>
							  
							  </div>
							  
							  <div class="form-actions" align="right" >
							  <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
							  <a class="btn btn-danger" href="../member/index.php"><i class="icon icon-white icon-cross "></i> Batal</a>
							  </div>
							</fieldset>
						  </form>
					<?php
					}
					?>
					</div>
				</div><!--/span-->
<?php include('footer.php'); ?>
