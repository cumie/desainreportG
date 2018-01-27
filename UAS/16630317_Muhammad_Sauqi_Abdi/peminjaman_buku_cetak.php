<?php include "head.php"; ?>
<?php include "koneksi.php"; ?>
<?php include "library.php"; ?>
<div class="container">
<h3>Laporan Data Peminjaman Buku</h3>
<hr/>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<tr>
    	<th>Kode Buku</th>
        <th>Npm</th>
        <th>Nama Peminjam</th>
        <th>Nama Buku</th>
        <th>Jumlah</th>
        <th>Tanggal</th>

    </tr>
    <?php
		$sql = mysqli_query($koneksi, "SELECT * FROM peminjaman_buku ORDER BY kode_buku ASC");
		$no = 1;
		while ($row = mysqli_fetch_assoc($sql)){
			echo '
			
                                <tr>
                                  <td>'.$row['kode_buku'].'</td>
								  <td>'.$row['npm'].'</td>
                                  <td>'.$row['nama_peminjam'].'</td>
                                  <td>'.$row['nama_buku'].'</td>
                                  <td>'.$row['jumlah'].'</td>
                                  <td>'.indonesiatgl($row['tanggal']).'</td>
								  
                                </tr>
			';
			$no++;
		}
	?>
</table>
</div>
<img src="img/btn_print.png" width="25" onClick="window.print();">
</div>
<?php include "foot.php"; ?>