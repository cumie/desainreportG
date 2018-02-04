<?php require_once"core/init.php"; 


	$error="";

	if (isset($_POST['submit'])) {
		$blok=$_POST['blok'];

		if (!empty(trim($blok))) {

			$cek_blok=cek_blok($blok);

		if (!$cek_blok==true) {
			$input=tambah_blok($blok);
			if ($input) {
				header('location:data_blok.php');
			}else{
				die('cek koneksi');
			}

		}else{
			$error='blok sudah ada';
		}

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
			<p>TAMBAH DATA BLOK<p>
				<div class="garis"></div>
				
					<form action="" method="post">
						<input type="input" name="blok" placeholder="TAMBAH BLOK" required>
						<div style="color: red; font-size: 20px; "><?= $error ?></div>
						<input type="submit" name="submit" class="btn btn-success" value="TAMBAH BLOK">
					</form>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>