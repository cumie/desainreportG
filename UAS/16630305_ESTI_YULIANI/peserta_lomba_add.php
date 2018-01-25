<?php include "head.php"; ?>
<link rel="stylesheet" type="text/css" href="style1.css">
			<h2> Data Peserta Lomba Seni&raquo; Tambah Data </h2>
			<hr/>
			
			<?php
			if(isset ($_POST['add'])){
				$no_urut			= $_POST['no_urut'];
				$nama			= $_POST['nama'];
				$tempat_lahir	= $_POST['tempat_lahir'];
				$tanggal_lahir	= $_POST['tanggal_lahir'];
				$alamat			= $_POST['alamat'];
				$no_telepon		= $_POST ['no_telepon'];
				$lomba_yang_diikuti		= $_POST['lomba_yang_diikuti'];
				$status			= $_POST ['status'];

				$cek = mysqli_query($koneksi, "SELECT * FROM peserta_lomba WHERE no_urut='$no_urut'");
				if(mysqli_num_rows($cek)==0){
						
						$insert = mysqli_query($koneksi, "INSERT INTO peserta_lomba(no_urut, nama, tempat_lahir, tanggal_lahir, alamat,
						no_telepon,lomba_yang_diikuti, status)
															VALUES('$no_urut','$nama','$tempat_lahir','$tanggal_lahir','$alamat',
															'$no_telepon','$lomba_yang_diikuti','$status')") or die(mysqli_error($koneksi));
															
						if($insert){
							echo '<div class"alert alert-success alert-dismissable"><button type="button" class="close"
							data-dismiss="slert" aria-hidden="true">&times;</button>Data peserta_lomba Berhasil Di Simpan.</div>';
						}else{
							echo '<div class"alert alert-danger alert-dismissable"><button type="button" class="close"
							data-dismiss="slert" aria-hidden="true">&times;</button>ups, Data peserta_lomba Gagal Di Simpan.</div>';
						}
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close"
							data-dismiss="alert" aria-hidden="true">&times;</button>no_urut Sudah Ada...!</div>';
						}
				}
						
						$now = strtotime(date("Y-m-d"));
						$maxage = date ('Y-m-d', strtotime ('- 16 year', $now));
						$minage = date ('Y-m-d', strtotime ('- 40 year', $now));
				?>
					<form class="form-horizontal" action="" method="post">
						<div class="form-group">
							<label class="col-sm-3 control-label">No urut</label>
							<div class="col-sm-2">
								<input type="text" name="no_urut" class="form-control" placeholder="no_urut" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama</label>
							<div class="col-sm-4">
								<input type="text" name="nama" class="form-control" placeholder="Nama" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tempat Lahir</label>
							<div class="col-sm-4">
								<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tanggal Lahir</label>
							<div class="col-sm-4">
							
								<input type="date" name="tanggal_lahir" value="" min="<?php echo $minage;?>" max="<?php echo $maxage;?>" 
								class="input-group form-control"  required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alamat</label>
							<div class="col-sm-3">
								<textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">No Telepon</label>
							<div class="col-sm-3">
								<input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">lomba yang diikuti</label>
							<div class="col-sm-2">
								<select name="lomba_yang_diikuti" class="form-control" required>
									<option value=""> ----- </option>
									<option value="Tari"> Tari </option>
									<option value="Musik"> Musik </option>
									<option value="Lukis">Lukis</option>
									<option value="Drama">Drama</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-2">
								<select name="status" class="form-control">
									<option value=""> ----- </option>
									<option value="Umum">Umum</option>
									<option value="mahasiswa">mahasiswa</option>
									<option value="Pelajar">Pelajar</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">&nbsp;</label>
							<div class="col-sm-6">
								<input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
								<a href="index.php" class="btn btn-sm btn-danger">Batal</a>
							</div>
						</div>
						</link>
					</form>
<?php include "footer.php";?>