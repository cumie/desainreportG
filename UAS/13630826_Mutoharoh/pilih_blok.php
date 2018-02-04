<?php 

require_once"core/init.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if (!$_SESSION['user']) {
	echo"<script type=\"text/javascript\">
			alert(\"anda harus login terlebih dahulu\");
			window.location=\"login.php\";
		</script>";
}


	$data=data_blok();


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
		
					<div id="blok">
					<?php while ($row=mysqli_fetch_assoc($data)) {
					 ?>
					 	
						<a href="pilih_rumah.php?blok=<?= $row['blok']; ?>"><div class="pilih_blok">
							<?= $row['blok']; ?>
						</div></a>

					<?php } ?>

					</div>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>