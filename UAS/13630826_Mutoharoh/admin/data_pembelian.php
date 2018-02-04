<?php require_once"core/init.php"; 

	$data=data_pembelian();

	if (isset($_GET['id'])) {
		$id=$_GET['id'];

		$delete=hapus_pembelian($id);
		if ($delete) {
			header('location:data_pembelian.php');
		}else{
			die('cek koneksi');
		}
	}


	if (isset($_GET['cari'])) {
		$cari=$_GET['cari'];

		$data=cari_pembelian($cari);
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
			<p>DATA RUMAH TERJUAL<p>
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
						<th>HARGA</th>
						<th>UANG MUKA</th>
						<th>TANGGAL BELI</th>
						<th colspan="2">OPTION</th>
					</tr>
					<?php 
					$no=1;
					while ($row=mysqli_fetch_assoc($data)) {	
					 ?>
					<tr>
						<td><?= $no; ?></td>
						<td><a href="pembelian_detail.php?id=<?= $row['id'] ?>" class="btn btn-default"><?= $row['nama']; ?></a></td>
						<td><?= $row['alamat']; ?></td>
						<td><?= $row['telepon']; ?></td>
						<td><?= $row['no_kav']; ?></td>
						<td><?= $row['blok']; ?></td>
						<td><?= "Rp.".number_format($row['harga'],0,".",".") ?></td>
						<td><?= "Rp.".number_format($row['uang_muka'],0,".",".") ?></td>
						<td><?= $row['tgl_beli']; ?></td>
						<td><a href="pembelian_edit.php?id=<?= $row['id'] ?>" class="btn btn-primary">EDIT</a></td>
						<td><a href="data_pembelian.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus data ini ?')">HAPUS</a></td>
					</tr>
				<?php $no++; } ?>
				</table>
					

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>