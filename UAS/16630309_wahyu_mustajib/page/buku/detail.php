<?php
$koneksi = new mysqli("localhost","root","","db_perpustakaan");

$id			= $_GET['id'];
$sql		= $koneksi->query("SELECT*FROM tb_buku WHERE id='$id'");
$data 		= $sql->fetch_assoc();
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
   				DETAIL BUKU
			</div>
		<div class="col-md-8">
			<table class="table-striped table-condensed">
				<tr>
    				<th width="20%">Id Buku</th>
        			<td>: <?php echo $data['id']; ?></td>
    			</tr>
				<tr>
    				<th>Judul</th>
        			<td>: <?php echo $data['judul']; ?></td>
    			</tr>
    			<tr>
    				<th>Pengarang</th>
        			<td>: <?php echo $data['pengarang']; ?></td>
    			</tr>
    			<tr>
    				<th>Penerbit</th>
        			<td>: <?php echo $data['penerbit']; ?></td>
    			</tr>
    			<tr>
    				<th>Tahun Terbit</th>
        			<td>: <?php echo $data['tahun_terbit']; ?></td>
    			</tr>
                <tr>
    				<th>ISBN</th>
        			<td>: <?php echo $data['isbn']; ?></td>
    			</tr>
    			<tr>
    				<th>Jumlah Buku</th>
        			<td>: <?php echo $data['jumlah_buku']; ?></td>
    			</tr>
                <tr>
    				<th>Lokasi</th>
        			<td>: <?php echo $data['lokasi']; ?></td>
    			</tr>
                <tr>
    				<th>Tanggal INput</th>
        			<td>: <?php echo $data['tgl_input']; ?></td>
    			</tr>  
			</table>
	<center><a href="?page=buku" class="btn btn-primary link-detail"><span class="glyphicon glyphicon-refresh"></span> Kembali</a></center>
			</div>
			<div class="col-md-4">
				<center><?php echo "<img src='gbrbuku/".$data['gambar']."' class='img-responsive gambard'>"; ?></center>
			</div>
		</div>
	</div>
</div>