<?php
$koneksi = new mysqli("localhost","root","","db_perpustakaan");

$nim = $_GET['nim'];
$sql = $koneksi->query("SELECT*FROM tb_anggota WHERE nim='$nim'");
$data = $sql->fetch_assoc();
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
   				DETAIL ANGGOTA
			</div>
		<div class="col-md-8">
			<table class="table-striped table-condensed">
				<tr>
    				<th width="20%">NIM</th>
        			<td>: <?php echo $data['nim']; ?></td>
    			</tr>
				<tr>
    				<th>Nama</th>
        			<td>: <?php echo $data['nama']; ?></td>
    			</tr>
    			<tr>
    				<th>Tempat & Tanggal Lahir</th>
        			<td>: <?php echo $data['tempat_lahir'].', '.$data['tanggal_lahir']; ?></td>
    			</tr>
    			<tr>
    				<th>Alamat</th>
        			<td>: <?php echo $data['alamat']; ?></td>
    			</tr>
    			<tr>
    				<th>Jenis Kelamin</th>
        			<td>: 
						<?php
						if($data['jk'] ==l){ 
							echo 'Laki-Laki';
						}else{
							echo 'Perempuan';
						} 
						?>
        			</td>
    			</tr>
    			<tr>
    				<th>Prodi</th>
        			<td>: <?php echo strtoupper($data['prodi']); ?></td>
    			</tr>  
			</table>
	<center><a href="?page=anggota" class="btn btn-primary link-detail"><span class="glyphicon glyphicon-refresh"></span> Kembali</a></center>
			</div>
			<div class="col-md-4">
				<center><?php echo "<img src='images/".$data['foto']."' class='img-responsive gambard'>"; ?></center>
			</div>
		</div>
	</div>
</div>