<?php include "head.php"; ?>
	<h2>Laporan Data Pelanggan</h2>
	<hr />
	<br />
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<tr>
				<th>No</th>
				<th>Id</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No Telepon</th>				
				<th>Barang Order</th>
				<th>Tanggal Order</th>
				<th>Size</th>
				<th>Status</th>
			</tr>
		
		<?php
		$sql = mysqli_query($koneksi, "SELECT * FROM pelanggan ORDER BY id ASC");
		$no = 1;
		while ($row = mysqli_fetch_assoc($sql)){
			echo '
			<tr>
				<td>'.$no.'</td>
				<td>'.$row['id'].'</td>
				<td>'.$row['nama'].'</td>
				<td>'.$row['alamat'].'</td>
				<td>'.$row['no_telepon'].'</td>
				<td>'.$row['barang_order'].'</td>
				<td>'.indonesiaTgl ($row['tanggal_order']).'</td>
				<td>'.$row['size'].'</td>
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