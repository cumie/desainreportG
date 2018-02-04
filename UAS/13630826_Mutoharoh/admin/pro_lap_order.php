<?php 

require_once"core/init.php"; 

?>
<!DOCTYPE html>
<html>

	<?php require_once"view/head.php"; ?>
	<link rel="stylesheet" type="text/css" href="date/css/bootstrap-datepicker3.css">

<body>

<?php require_once"view/menu.php"; ?>


	<!-- konten -->
	<div id="content">

		<div id="content-isi">
			<p style="text-transform: uppercase;">laporan order rumah<p>
				<div class="garis"></div>
		
				<form action="lap_data_order.php" target="_blank" method="get">
					<input type="input" id="tgl_awal" name="tgl_awal" placeholder="TANGGAL AWAL">
					Sampai tanggal
					<input type="input" id="tgl_akhir" name="tgl_akhir" placeholder="TANGGAL AKHIR">
					<input type="submit" name="submit" class="btn btn-success" value="BUAT LAPORAN">
				</form>

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="date/js/bootstrap-datepicker.min.js"></script>
	        <script type="text/javascript">
            $(document).ready(function () {
                $('#tgl_awal').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            $('#tgl_akhir').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
        </script>

</body>
</html>