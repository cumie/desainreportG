<?php
$id 	= $_GET['id'];
$judul 	= $_GET['judul'];
$nama	=$_GET['nama'];

$sql = $koneksi->query("DELETE FROM tb_transaksi WHERE nama='$nama'");
$sql = $koneksi->query("UPDATE tb_buku SET jumlah_buku=(jumlah_buku+1) WHERE judul='$judul'");
?>

<script>
	alert("Proses Pengembalian Buku BERHASIL !!!");
	window.location.href="?page=trans";
</script>

<?php
?>