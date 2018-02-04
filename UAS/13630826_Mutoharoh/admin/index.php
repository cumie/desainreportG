<?php require_once"core/init.php"; ?>
<!DOCTYPE html>
<html>

	<?php require_once"view/head.php"; ?>

<body>

<?php require_once"view/menu.php"; ?>


	<!-- konten -->
	<div id="content">

		<div id="content-isi">
			<p style="text-transform: uppercase;">SELAMAT DATANG <?= $_SESSION['user'] ?><p>
				<div class="garis"></div>
		
					

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>