<?php
	$id			 	= $_GET['id'];
	$judul 			= $_GET['judul'];
	$tgl_kembali 	= $_GET['tgl_kembali'];
	$lambat 		= $_GET['lambat'];
	
	if ($lambat>7){
		?>
     		<script type="text/x-javascript">
				alert("Tidak dapat diperpanjang karena lebih dari 7 Hari, Kembalikan terlebih dahulu kemudian pinjam kembali !!!");
				window.location.href="?page=trans";
			</script>   
        <?php
	}else{
		$pecah_tgl_kembali 	= explode("-",$tgl_kembali);
		$next_7_hari 		= mktime(0,0,0, $pecah_tgl_kembali[1],$pecah_tgl_kembali[0]+7,$pecah_tgl_kembali[2]);
		$hari_next 			= date("d-m-Y",$next_7_hari);
		
		$sql = $koneksi->query("UPDATE tb_transaksi set tgl_kembali='$hari_next' WHERE id='$id'");
		if($sql){
			?>
				<script type="text/x-javascript">
					alert("Perpanjang Peminjaman Buku BERHASIL!!!");
					window.location.href="?page=trans";
				</script>
			<?php
			}	
		}
?>