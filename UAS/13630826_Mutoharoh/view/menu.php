	<div id="header">
		<div class="menu">
			<a href="index.php">HOME</a>
			<a href="pilih_blok.php">PERUMAHAN</a>
			<a href="info.php">INFO</a>
			<?php if (!isset($_SESSION['user'])) { ?>
			<a href="login.php">LOGIN</a>
			<?php }else { ?>
			<a href="logout.php">LOGOUT</a>
			<?php } ?>

			</div>
	</div>