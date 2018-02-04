<?php require_once"core/init.php"; 

if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$data_pembelian_id=data_pembelian_id($id);
	$row=mysqli_fetch_assoc($data_pembelian_id);

}


if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];
	$tipe=$_POST['tipe'];
	$no_kav=$_POST['no_kav'];
	$ukuran=$_POST['ukuran'];
	$harga=$_POST['harga'];
	$blok=$_POST['blok'];
	$uang_muka=$_POST['uang_muka'];
	$tgl_beli=$_POST['tgl_beli'];
	$ket=$_POST['ket'];
	$id=$_POST['id'];

	$edit_data=edit_pembelian($id,$nama,$alamat,$telepon,$tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka,$tgl_beli,$ket);
	if ($edit_data) {
		header('location:data_pembelian.php');
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
			<p>EDIT DATA PEMBELIAN<p>
				<div class="garis"></div>
				
					<form action="" method="post">
						<label for="nama">Nama :</label>
						<input type="input" name="nama" placeholder="nama" id="nama" value="<?= $row['nama'] ?>" required>
						<label for="alamat">Alamat :</label>
						<input type="input" id="alamat" name="alamat" placeholder="alamat" value="<?= $row['alamat']; ?>" required>
						<label for="telepon">Telepon :</label>
						<input type="input" name="telepon" placeholder="telepon" value="<?= $row['telepon'] ?>" required>
						<label for=""> No Kavling :</label>
						<input type="input" name="no_kav" placeholder="no_kav" value="<?= $row['no_kav'] ?>" required>
						<label for=""> Ukuran :</label>
						<input type="input" name="ukuran" placeholder="ukuran" value="<?= $row['ukuran'] ?>" required>
						<label for=""> Blok :</label>
						<input type="input" name="blok" placeholder="blok" value="<?= $row['blok'] ?>" required>
						<label for=""> Uang Muka :</label>
						<input type="input" name="uang_muka" placeholder="uang muka" value="<?= $row['uang_muka'] ?>" required>
						<label for=""> Tgl Beli :</label>
						<input type="input" name="tgl_beli" placeholder="tgl_beli" value="<?= $row['tgl_beli'] ?>" required>
						<label for=""> Keterangan :</label>
						<input type="input" name="ket" placeholder="ket" value="<?= $row['ket'] ?>" required>
						<input type="hidden" name="harga" placeholder="harga" value="<?= $row['harga'] ?>" required>
						<input type="hidden" name="tipe" placeholder="tipe" value="<?= $row['tipe'] ?>" required>
						<input type="hidden" name="id" placeholder="id" value="<?= $row['id'] ?>" required>
						<input type="submit" name="submit" class="btn btn-success" value="EDIT PEMBELIAN">
					</form>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>