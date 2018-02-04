<?php 

require_once"core/init.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if (!$_SESSION['user']) {
	echo"<script type=\"text/javascript\">
			alert(\"anda harus login terlebih dahulu\");
			window.location=\"login.php\";
		</script>";
}

	if (isset($_GET['blok'])) {
		$blok=$_GET['blok'];
		$data=data_rumah($blok);
		$rumah=mysqli_num_rows($data);
		if($rumah==0) {
			echo"<script type=\"text/javascript\">
			alert(\"blok rumah tidak tersedia\");
			window.location=\"pilih_blok.php\";
		</script>";
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
			<p>Pilih Blok Perumahan<p>
				<div class="garis"></div>
		
				<table class="table" style="width: 95%;">
					<tr>
						<th>No</th>
						<th>Tipe</th>
						<th>No Kavling</th>
						<th>Blok</th>
						<th>Uang Muka</th>
						<th>Opsi</th>
					</tr>
					<?php 
					$no=1;
					while ($row=mysqli_fetch_assoc($data)) {	
					 ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['tipe']; ?></td>
						<td><?= $row['no_kav']; ?></td>
						<td><?= $row['blok']; ?></td>
						<td><?= "Rp. ".number_format($row['uang_muka'],0,".",".")  ?></td>
						<td><a href="data_pembeli.php?no_kav=<?= $row['no_kav']; ?>" class="btn btn-success">ORDER</a></td>
					</tr>
				<?php $no++; } ?>
				</table>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>