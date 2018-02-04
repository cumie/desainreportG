<?php require_once"core/init.php"; 

	$data=data_rumah();

	if (isset($_GET['id'])) {
		$id=$_GET['id'];

		$delete=hapus_rumah($id);
		if ($delete) {
			header('location:data_rumah.php');
		}else{
			die('cek koneksi');
		}
	}


	if (isset($_GET['cari'])) {
		$cari=$_GET['cari'];

		$data=cari_rumah($cari);
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
			<p>DATA RUMAH<p>
				<div class="garis"></div>
				
				<div class="button-area">
					<button onclick="window.location.href='rumah_tambah.php'" class="btn btn-primary">TAMBAH RUMAH</button>
					<form method="get" action="">
						<input type="input"  name="cari" placeholder="search....">
					</form>
				</div>

				<table class="table" style="width: 95%;">
					<tr>
						<th>No</th>
						<th>TIPE</th>
						<th>NO KAVLING</th>
						<th>UKURAN</th>
						<th>HARGA</th>
						<th>BLOK</th>
						<th>UANG MUKA</th>
						<th colspan="2">OPTION</th>
					</tr>
					<?php 
					$no=1;
					while ($row=mysqli_fetch_assoc($data)) {	
					 ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['tipe']; ?></td>
						<td><?= $row['no_kav']; ?></td>
						<td><?= $row['ukuran']; ?></td>
						<td><?= "Rp.".number_format($row['harga'],0,".",".") ?></td>
						<td><?= $row['blok']; ?></td>
						<td><?= "Rp.".number_format($row['uang_muka'],0,".",".") ?></td>
						<td><a href="rumah_edit.php?id=<?= $row['id'] ?>" class="btn btn-primary">EDIT</a></td>
						<td><a href="data_rumah.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus data ini ?')">HAPUS</a></td>
					</tr>
				<?php $no++; } ?>
				</table>
					

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>