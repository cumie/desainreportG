<?php require_once"core/init.php"; 

	
	$data_blok=data_blok();

?>
<!DOCTYPE html>
<html>

	<?php require_once"view/head.php"; ?>

<body>

<?php require_once"view/menu.php"; ?>


	<!-- konten -->
	<div id="content">

		<div id="content-isi">
			<p style="text-transform: uppercase;">PILIH BLOK RUMAH<p>
				<div class="garis"></div>
		
				<form action="lap_data_rumah.php" target="_blank" method="get">
					<select name="blok">
					<option value="">pilih semua</option>
					<?php 	while ($row=mysqli_fetch_assoc($data_blok)) {
					$blok=$row['blok'];
					?>
						<option><?= $blok ?></option>
					<?php } ?>
					</select>
				<input type="submit" name="submit" class="btn btn-success" value="CETAK LAPORAN">
				</form>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>