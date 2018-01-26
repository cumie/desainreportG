<?php include "head.php"; ?>

	<?php
	if (isset($_GET['aksi']) == 'delete'){
		$nik = $_GET['nik'];
		$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
		if(mysqli_num_rows($cek) == 0){
			echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan !</div>';
		}	else{
			$delete = mysqli_query($koneksi, "DELETE FROM karyawan WHERE nik='$nik'");
			if($delete){
				echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>Data Berhasil Dihapus !</div>';
			}else{
				echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>Data Gagal Dihapus !</div>';
			}
		}
	}
	?>
	
			<h2>Data Karyawan</h2>
			<hr />
			
				<div class="form-group">
				
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="karyawan_add.php">Tambah Data</a>
				<div class="right"><form class="form-inline" method="get">
				<select name="filter" class="form-control" onchange="form.submit()">
					<option value="0">Filter Data Karyawan</option>
					<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
					<option value="Tetap"> <?php if ($filter == 'Tetap') { echo 'selected'; } ?>>Tetap</option>
					<option value="Kontrak"> <?php if ($filter == 'Kontrak') { echo 'selected'; } ?>>Kontrak</option>
					<option value="Outsourcing"> <?php if ($filter == 'Outsourcing') { echo 'selected'; } ?>>Outsourcing</option>
				</select></form></div>
				</div>
				
			<br />
			<div class="table-reponsive">
			<table class="table table-striped-hover">
				<tr>
					<th>No</th>
					<th>NIK</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Alamat</th>
					<th>No Telepon</th>
					<th>Jabatan</th>
					<th>Status</th>
					<th>Tools</th>
				</tr>
				<?php
				if($filter){
					$sql = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE status='$filter' ORDER BY nik ASC");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY nik ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Data Tidak Ada</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['nik'].'</td>
							<td><a href="karyawan_detail.php?nik='.$row['nik'].'"><span class="glyphicon glyphicon-user"aria-hidden="true"></span> '.$row['nama'].'</a></td>
							<td>'.$row['tempat_lahir'].'</td>
							<td>'.indonesiaTgl($row['tanggal_lahir']).'</td>
							<td>'.$row['alamat'].'</td>
							<td>'.$row['no_telepon'].'</td>
							<td>'.$row['jabatan'].'</td>
							<td>';
							if($row['status'] == 'Tetap'){
								echo '<span class="label label-success">Tetap</span>';
							}
							else if($row['status'] == 'Kontrak'){
								echo '<span class="label label-info">Kontrak</span>';
							}
							else if($row['status'] == 'Outsourcing'){
								echo '<span class="label label-warning">Outsourcing</span>';
							}
						echo '
							</td>
							<td>
							
								<a href="karyawan_edit.php?nik='.$row['nik'].'" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								
								<a href="karyawan_data.php?aksi=delete&nik='.$row['nik'].'" title="Hapus Data" onclick="return confirm(\'Anda Yakin Akan Menghapus Data '.$row['nama'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
<?php include "foot.php"; ?>