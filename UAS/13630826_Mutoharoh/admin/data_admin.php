<?php require_once"core/init.php"; 


	$data=data_admin();

	if (isset($_GET['id'])) {
		$id=$_GET['id'];

		$delete=hapus_admin($id);
		if ($delete) {
			header('location:data_admin.php');
		}else{
			die('cek koneksi');
		}
	}


	if (isset($_GET['cari'])) {
		$cari=$_GET['cari'];

		$data=cari($cari);
	}

?>
<!DOCTYPE html>
<html>

	<?php require_once"view/head.php"; ?>

<body>

<?php require_once"view/menu.php"; ?>


	<!-- konten -->
	<div id="content">

		<div id="content-isi">
			<p>DATA ADMIN<p>
				<div class="garis"></div>
				
				<div class="button-area">
					<button onclick="window.location.href='admin_tambah.php'" class="btn btn-primary" >REGISTER ADMIN</button>
					<form method="get" action="">
						<input type="input"  name="cari" placeholder="search....">
					</form>
				</div>

				<table class="table" style="width: 95%;">
					<tr>
						<th>No</th>
						<th>NAMA</th>
						<th>USERNAME</th>
						<th>TELEPON</th>
						<th>EMAIL</th>
						<th>STATUS</th>
						<th colspan="2">OPTION</th>
					</tr>
					<?php 
					$no=1;
					while ($row=mysqli_fetch_assoc($data)) {	
					 ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama']; ?></td>
						<td><?= $row['username']; ?></td>
						<td><?= $row['telepon']; ?></td>
						<td><?= $row['email']; ?></td>
						<td><?= $row['status']; ?></td>
						<td><a href="edit_admin.php?id=<?= $row['id'] ?>" class="btn btn-primary">EDIT</a></td>
						<td><a href="data_admin.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus data ini ?')">HAPUS</a></td>
					</tr>
				<?php $no++; } ?>
				</table>
					

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>