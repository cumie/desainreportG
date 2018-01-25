<?php include "head.php"; ?>
<link rel="stylesheet" type="text/css" href="style1.css">
	<h2>Laporan Data Peserta Lomba Seni</h2>
	<hr />
	<br />
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<tr>
				<th>No Urut</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>No Telepon</th>
				<th>Lomba yang diikuti</th>
				<th>Status</th>
			</tr>
		
		<?php
		$sql = mysqli_query($koneksi, "SELECT * FROM peserta_lomba ORDER BY no_urut ASC");
		$no = 1;
		while ($row = mysqli_fetch_assoc($sql)){
			echo '
			<tr>
				
				<td>'.$row['no_urut'].'</td>
				<td>'.$row['nama'].'</td>
				<td>'.$row['tempat_lahir'].'</td>
				<td>'.indonesiaTgl ($row['tanggal_lahir']).'</td>
				<td>'.$row['alamat'].'</td>
				<td>'.$row['no_telepon'].'</td>
				<td>'.$row['lomba_yang_diikuti'].'</td>
				<td>'.$row['status'].'</td>
			</tr>
			';
			$no++;
		}
		?>
		</table>
	</div>
	</link>
	<img src="img/btn_print.png" width="25" onclick="window.print();">
<?php include "footer.php"; ?>