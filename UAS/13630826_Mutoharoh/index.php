<?php require_once"core/init.php"; ?>

<!DOCTYPE html>
<html>

	<?php require_once"view/head.php"; ?>

<body>

<?php require_once"view/menu.php"; ?>


	<!-- konten -->
	<div id="content">

		<div id="content-isi">
			<p>Sistem Informasi Pemasaran Rumah<p>
				<div class="garis"></div>
		
					<div class="panah-box panah-kr" onclick="sebelumnya()"> < </div>
						
						<div id="slide-box">
							<img src="gambar/perspektif.jpg" alt="" id="target-gambar">
						
						</div>	
					<div class="panah-box panah-knn" onclick="selanjutnya()"> > </div>

					<div class="clear"></div>

							<div id="slide-gambar">
								<img src="gambar/perspektif.jpg" alt="" onclick="ganti_gambar(this)" class="1">
								<img src="gambar/atas.jpg" alt=""  onclick="ganti_gambar(this)" class="2">
								<img src="gambar/depan.jpg" alt="" onclick="ganti_gambar(this)" class="3">
							</div>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>