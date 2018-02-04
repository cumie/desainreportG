<?php require_once"core/init.php"; 

	$data=data_order();

	if (isset($_GET['id'])) {
		$id=$_GET['id'];

		$delete=hapus_order($id);
		if ($delete) {
			header('location:data_order.php');
		}else{
			die('cek koneksi');
		}
	}


	if (isset($_GET['cari'])) {
		$cari=$_GET['cari'];

		$data=cari_order($cari);
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
			<p>DATA ORDER<p>
				<div class="garis"></div>
				
				<div class="button-area">
					<form method="get" action="">
						<input type="input"  name="cari" placeholder="search....">
					</form>
				</div>

				<table class="table" style="width: 95%;">
					<tr>
						<th>No</th>
						<th>NAMA</th>
						<th>ALAMAT</th>
						<th>TELEPON</th>
						<th>NO KAVLING</th>
						<th>BLOK</th>
						<th>TANGGAL ORDER</th>
						<th colspan="2">OPTION</th>
					</tr>
					<?php 
					$no=1;
					while ($row=mysqli_fetch_assoc($data)) {	
					 ?>
					<tr>
						<td><?= $no; ?></td>
						<td><a href="order_detail.php?id=<?= $row['id'] ?>" class="btn btn-default"><?= $row['nama']; ?></a></td>
						<td><?= $row['alamat']; ?></td>
						<td><?= $row['telepon']; ?></td>
						<td><?= $row['no_kav']; ?></td>
						<td><?= $row['blok']; ?></td>
						<td><?= $row['tgl_order']; ?></td>
						<td><a href="order_edit.php?id=<?= $row['id'] ?>" class="btn btn-primary">EDIT</a></td>
						<td><a href="data_order.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus data ini ?')">HAPUS</a></td>
					</tr>
				<?php $no++; } ?>
				</table>
					

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>