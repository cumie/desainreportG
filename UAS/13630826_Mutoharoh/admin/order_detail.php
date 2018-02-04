<?php require_once"core/init.php"; 

if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$data_order_id=data_order_id($id);
	$row=mysqli_fetch_assoc($data_order_id);

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
			<p>DETAIL DATA ORDER<p>
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
						<td>Harga : <?= "Rp. ".number_format($row['harga'],0,".",".")  ?></td>
					</tr>
					<tr>
						<td>Blok : <?= $row['blok']; ?></td>
					</tr>
					<tr>
						<td>Uang muka : <?= "Rp. ".number_format($row['uang_muka'],0,".",".")  ?></td>
					</tr>
					<tr>
						<td>Tgl order : <?= $row['tgl_order']; ?></td>
					</tr>
					<tr>
						<td>
						<a href="pembelian_tambah.php?id=<?= $row['id']; ?> " class="btn btn-primary" style="height: 38px;">INPUT PEMBELIAN</a> &nbsp;
						</td>
						<td>
						<form action="" method="post">
                                <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
                                <input type="hidden" name="nama" class="form-control" value="<?= $row['nama'] ?>">
                                <input type="hidden" name="alamat" class="form-control" value="<?= $row['alamat']; ?>">
                                <input type="hidden" name="telepon" class="form-control" value="<?= $row['telepon'] ?>">
                                <input type="hidden" name="tipe" class="form-control" value="<?= $row['tipe'] ?>">
                                <input type="hidden" name="no_kav" class="form-control" value="<?= $row['no_kav'] ?>">
                                <input type="hidden" name="ukuran" class="form-control" value="<?= $row['ukuran'] ?>">
                                <input type="hidden" name="harga" class="form-control" value="<?= $row['harga'] ?>">
                                <input type="hidden" name="blok" class="form-control" value="<?= $row['blok'] ?>">
                                <input type="hidden" name="uang_muka" class="form-control" value="<?= $row['uang_muka'] ?>">
                                <input type="submit" name="submit" onclick="return confirm('apakah anda yakin akan membatalkan orderan ini ?')" value="PEMBATALAN ORDER" class="btn btn-danger">
                            </form>
						</td>
					</tr>

				</table>
					

			</div>

	</div>


	<div class="clear"></div>
	<?php require_once"view/footer.php" ?>

</body>
</html>