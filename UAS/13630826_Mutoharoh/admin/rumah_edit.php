<?php require_once"core/init.php"; 

if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$data_rumah_id=data_rumah_id($id);
	$row=mysqli_fetch_assoc($data_rumah_id);

}

	$data_blok=data_blok();

if (isset($_POST['submit'])) {
	$tipe=$_POST['tipe'];
	$no_kav=$_POST['no_kav'];
	$ukuran=$_POST['ukuran'];
	$harga=$_POST['harga'];
	$uang_muka=$_POST['uang_muka'];
	$blok=$_POST['blok'];

	$edit_data=edit_rumah($id,$tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka);
	if ($edit_data) {
		header('location:data_rumah.php');
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
			<p>TAMBAH DATA RUMAH<p>
				<div class="garis"></div>
				
					<form action="" method="post">
						<input type="input" name="tipe" placeholder="tipe" value="<?= $row['tipe'] ?>" required>
						<input type="input" name="no_kav" placeholder="no kavling" value="<?= $row['no_kav']; ?>" required>
						<input type="input" name="ukuran" placeholder="ukuran" value="<?= $row['ukuran'] ?>" required>
						<input type="input" name="harga" placeholder="harga" value="<?= $row['harga'] ?>" required>
						<input type="input" name="uang_muka" placeholder="uang muka" value="<?= $row['uang_muka'] ?>" required>
						<select name="blok">
							<option value="<?= $row['blok'] ?>">kosongka jika tidak diedit</option>
						<?php while ($row=mysqli_fetch_assoc($data_blok)) {
						$blok=$row['blok'];  ?>
							<option><?= $blok ?></option>
						<?php } ?>
						</select>
						<input type="submit" name="submit" class="btn btn-success" value="EDIT BLOK">
					</form>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>