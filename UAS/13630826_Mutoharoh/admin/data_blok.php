<?php require_once"core/init.php"; 

	$data=data_blok();

	if (isset($_GET['id'])) {
		$id=$_GET['id'];

		$delete=hapus_blok($id);
		if ($delete) {
			header('location:data_blok.php');
		}else{
			die('cek koneksi');
		}
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
			<p>DATA BLOK<p>
				<div class="garis"></div>
				
				<div class="button-area">
					<button onclick="window.location.href='blok_tambah.php'" class="btn btn-primary" >Tambah Blok</button>
				</div>

				<table class="table" style="width: 95%;">
					<tr>
						<th>No.</th>
						<th>BLOK</th>
						<th colspan="2">OPTION</th>
					</tr>
					<?php 
					$no=1;
					while ($row=mysqli_fetch_assoc($data)) {	
					 ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['blok']; ?></td>
						<td><a href="blok_edit.php?id=<?= $row['id'] ?>" class="btn btn-primary">EDIT</a></td>
						<td><a href="data_blok.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus data ini ?')">HAPUS</a></td>
					</tr>
				<?php $no++; } ?>
				</table>
					

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>