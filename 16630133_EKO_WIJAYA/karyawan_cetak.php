<?php include "head.php"; ?>
<?php include "koneksi.php"; ?>
<?php include "library.php"; ?>
<div class="container">
<h3>Laporan Data Karyawan</h3>
<hr/>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<tr>
    	<th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>No Telepon</th>
        <th>Jabatan</th>
        <th>Status</th>
    </tr>
    <?php
		$sql = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY nik ASC");
		$no = 1;
		while ($row = mysqli_fetch_assoc($sql)){
			echo '
			<tr>
				<td>'.$no.'</td>
				<td>'.$row['nik'].'</td>
				<td>'.$row['nama'].'</td>
				<td>'.$row['tempat_lahir'].'</td>
				<td>'.IndonesiaTgl($row['tanggal_lahir']).'</td>
				<td>'.$row['no_telepon'].'</td>
				<td>'.$row['jabatan'].'</td>
				<td>'.$row['status'].'</td>
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