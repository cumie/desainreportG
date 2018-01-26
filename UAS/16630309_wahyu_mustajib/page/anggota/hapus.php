<?php
$nim = $_GET['nim'];
$koneksi ->query("DELETE FROM tb_anggota WHERE nim='$nim'");
unlink("images/".$data['foto']);
?>
<script type="text/javascript">
	window.location.href="?page=anggota";
	alert("Data Berhasil Dihapus");
</script>