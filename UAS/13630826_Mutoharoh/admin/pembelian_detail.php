<?php require_once"core/init.php"; 

if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$data_pembelian_id=data_pembelian_id($id);
	$row=mysqli_fetch_assoc($data_pembelian_id);

}


if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    $tipe=$_POST['tipe'];
    $no_kav=$_POST['no_kav'];
    $ukuran=$_POST['ukuran'];
    $harga=$_POST['harga'];
    $blok=$_POST['blok'];
    $uang_muka=$_POST['uang_muka'];

    if (tambah_rumah($tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka)) {
        header('location:data_order.php?id='.$id);
    }else{
        die('pembatalan gagal silahkan coba lagi');
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
			<p>DETAIL DATA PEMBELIAN<p>
				<div class="garis"></div>
				
				<table class="table" style="width: auto;">
					<tr>
						<td>Nama : <?= $row['nama']; ?></td>
					</tr>
					<tr>
						<td>Alamat : <?= $row['alamat']; ?></td>
					</tr>
					<tr>
						<td>Telepon : <?= $row['telepon']; ?></td>
					</tr>
					<tr>
						<td>Tipe : <?= $row['tipe']; ?></td>
					</tr>
					<tr>
						<td>No kavling : <?= $row['no_kav']; ?></td>
					</tr>
					<tr>
						<td>Ukuran : <?= $row['ukuran']; ?></td>
					</tr>
					<tr>
						<td>Harga : <?= "Rp. ".number_format($row['harga'],0,".",".") ?></td>
					</tr>
					<tr>
						<td>Blok : <?= $row['blok']; ?></td>
					</tr>
					<tr>
						<td>Uang muka : <?= "Rp.".number_format($row['uang_muka'],0,".",".") ?></td>
					</tr>
					<tr>
						<td>Tgl beli : <?= $row['tgl_beli']; ?></td>
					</tr>
					<tr>
						<td>Keterangan : <?= $row['ket']; ?></td>
					</tr>
					<tr>
						<td><a href="cetak_kw_pembelian.php?id=<?= $row['id']; ?>" target=_blank class="btn btn-primary" style="height: 38px;">CETAK KWITANSI DP</a></td>
					</tr>

				</table>
				

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>