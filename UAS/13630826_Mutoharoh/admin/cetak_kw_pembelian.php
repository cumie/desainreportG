<?php 

    require_once"core/init.php";

    if (isset($_GET['id'])) {
		$id=$_GET['id'];

		$data_pembelian_id=data_pembelian_id($id);
		$row=mysqli_fetch_assoc($data_pembelian_id);

	}

?>

<!DOCTYPE html>
<html>
<head>
    <title>laporan data order</title>
    <link rel="stylesheet" type="text/css" href="kw.css">
</head>

<body>
	<script type="text/javascript">
		window.print();
	</script>

	<div id="kwitansi">

			<div id="header">
				<h2 style="margin-bottom: 10px; ">PT.PERMATA WIRA HADI BUANA</h2>
				<P><b>GENERAL CONTRACTOR,HOUSING DEVELOPMENT, SUPPLIER & TRADING</b></P>
				<p>JL.PONDOK PINUS BLOK A8, RT.019/RW.008 LOKTABAT UTARA, BANJARBARU UTARA</p>
				<P style="margin-bottom: 5px;" >BANJARBARU, KALIMANTAN SELATAN HP: 0811 506 605</P>
				<div class="garis">	
				</div>
			</div>

			<div class="no_kw"><p>No : <?= $row['no_kw'] ?></p></div>

			<div id="content">

				<div class="wrapper">
					<h2 style="margin-bottom: 10px">KWITANSI</h2>
						<label><?= $row['blok']; ?></label>
						<label>kapling <?= $row['no_kav']; ?></label>
						<label><?= $row['tipe']; ?></label>
				</div>

				<div id="kotak">
					<p>Telah Terima dari : <?= $row['nama']; ?></p>
					<p>Uang Sejumlah : <?= "Rp. ".number_format($row['uang_muka'],0,".",".") ?></p>
					<p>Untuk Pembayaran : Uang Muka Rumah</p>
						<div class="garis-kotak"></div>
							<div class="nominal"><?= "Rp. ".number_format($row['uang_muka'],0,".",".") ?></div>
						<div class="garis-kotak"></div>
					<p>Tanggal : <?= $row['tgl_beli']; ?></p>
					<p>keterangan : <?= $row['ket']; ?> </p>

					<div class="ttd1">tanda tangan</div>
					<div class="ttd"></div>

				</div>

			</div>

			<div id="footer">
				
			</div>
		
	</div>

</body>

</html>
