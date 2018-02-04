	<div id="header">
		<div class="menu">
			<a href="index.php">HOME</a>
			<a href="data_admin.php">DATA USER</a>
			<div class="dropdowns">
				<a href="">MANAGE PERUMAHAN</a>
				<div class="clear"></div>
					<div class="dropdown-menus">
						<a href="data_blok.php">DATA BLOK</a>
						<a href="data_rumah.php">DATA RUMAH</a>
					</div>
				</div>

				<div class="dropdowns">
				<a href="">DATA COSTUMER</a>
				<div class="clear"></div>
					<div class="dropdown-menus">
						<a href="data_order.php">DATA ORDER</a>
						<a href="data_pembelian.php">RUMAH TERJUAL</a>
					</div>
				</div>

				<div class="dropdowns">
				<a href="">LAPORAN</a>
				<div class="clear"></div>
					<div class="dropdown-menus">
						<a href="pro_lap_rumah.php">DATA RUMAH</a>
						<a href="pro_lap_order.php">DATA ORDER</a>
						<a href="pro_lap_penjualan.php">DATA TERJUAL</a>
						<a href="lap_data_blok.php" target="_blank">DATA BLOK</a>
					</div>
				</div>

			<?php if (!isset($_SESSION['user'])) { ?>
			<a href="../login.php">LOGIN</a>
			<?php }else { ?>
			<a href="../logout.php">LOGOUT</a>
			<?php } ?>


			</div>
	</div>