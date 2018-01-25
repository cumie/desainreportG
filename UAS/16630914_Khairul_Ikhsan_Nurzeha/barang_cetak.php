<?php include "head.php"; ?>
	<h2>Laporan Data Barang</h2>
	<hr />
	<br />
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<tr>
				<th>No</th>
				<th>kode</th>
				<th>Nama</th>
				<th>Sumber Barang</th>
				<th>Tanggal Stok Terakhir</th>
				<th>Size</th>
				<th>Stok</th>
				<th>merk</th>
				<th>Status</th>
			</tr>
		
		<?php
		$sql = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY kode ASC");
		$no = 1;
		while ($row = mysqli_fetch_assoc($sql)){
			echo '
			<tr>
				<td>'.$no.'</td>
				<td>'.$row['kode'].'</td>
				<td>'.$row['nama'].'</td>
				<td>'.$row['sumber_barang'].'</td>
				<td>'.indonesiaTgl ($row['tanggal_stok']).'</td>
				<td>'.$row['size'].'</td>
				<td>'.$row['stok'].'</td>
				<td>'.$row['merk'].'</td>
				<td>'.$row['status'].'</td>
			</tr>
			';
			$no++;
		}
		?>
		</table>
	</div>
	<img src="img/btn_print.png" width="25" onclick="window.print();">
<?php include "foot.php"; ?>
<?php include "footer.php"; ?>