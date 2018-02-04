<?php 

require_once"core/init.php";


if (!$_SESSION['user']) {
	echo"<script type=\"text/javascript\">
			alert(\"anda harus login terlebih dahulu\");
			window.location=\"login.php\";
		</script>";
}

	if (isset($_GET['no_kav'])) {
		$no_kav=$_GET['no_kav'];
		$data=data_pilih($no_kav);

		while ($row=mysqli_fetch_assoc($data)) {
			$tipe=$row['tipe'];
			$no_kav=$row['no_kav'];
			$ukuran=$row['ukuran'];
			$harga=$row['harga'];
			$blok=$row['blok'];
			$uang_muka=$row['uang_muka'];
		}
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
		$tgl_order=$_POST['tgl_order'];

  		
  		$input=input_data($nama,$alamat,$telepon,$tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka,$tgl_order);
  		if ($input) {
  			header('location:delete.php?no_kav='.$no_kav);
  		}else{
  			die('gagal input data');
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
			<p>Input Data Pembeli<p>
				<div class="garis"></div>
		
				<form action="" method="post">

					<label for="nama">Nama :</label>
					<input type="input" id="nama" name="nama" placeholder="nama" required>
					<label>Alamat :</label>
					<input type="input" name="alamat" placeholder="alamat" required>
					<label> Telepon:</label>
					<input type="input" name="telepon" placeholder="telepon" required>

					<input type="hidden" name="tipe" placeholder="tipe" value="<?= $tipe ?>">
					<input type="hidden" name="no_kav" placeholder="no kavling" value="<?= $no_kav ?>">
					<input type="hidden" name="ukuran" placeholder="ukuran" value="<?= $ukuran ?>">
					<input type="hidden" name="harga" placeholder="harga" value="<?= $harga ?>">
					<input type="hidden" name="blok" placeholder="blok" value="<?= $blok ?>">
					<input type="hidden" name="uang_muka" placeholder="uang muka" value="<?= $uang_muka ?>">
					<input type="hidden" name="tgl_order" placeholder="tanggal order" value="<?= date("d-m-Y"); ?>">
					<input type="submit" name="submit" class="btn btn-primary" value="KIRIM">

					
				</form>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>