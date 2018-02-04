<?php require_once"core/init.php"; 


if (isset($_POST['submit'])) {
    $tipe=$_POST['tipe'];
    $no_kav=$_POST['no_kav'];
    $ukuran=$_POST['ukuran'];
    $harga=$_POST['harga'];
    $blok=$_POST['blok'];
    $uang_muka=$_POST['uang_muka'];

    if (tambah_rumah($tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka)) {
        header('location:data_rumah.php');
    }else{
        die('gagal menambah data silahkan coba lagi');
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
						<input type="input" name="tipe" placeholder="tipe" required>
						<input type="input" name="no_kav" placeholder="no kavling" required>
						<input type="input" name="ukuran" placeholder="ukuran" required>
						<input type="input" name="harga" placeholder="harga" required>
						<input type="input" name="blok" placeholder="blok" required>
						<input type="input" name="uang_muka" placeholder="uang muka" required>
						<input type="submit" name="submit" class="btn btn-success" value="TAMBAH RUMAH">
					</form>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>