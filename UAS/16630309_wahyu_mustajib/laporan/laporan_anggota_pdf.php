<?php
	$koneksi = new mysqli("localhost","root","","db_perpustakaan");
	$namafile = "anggota_excel-pertanggal(".date('d-m-Y').").xls";
	
	header("content-disposition: attachment; filename='$namafile'");
	header("content-type: application/vdn.ms-excel");
?> 

<h3><center>Laporan Data Anggota</center></h3>
<h4><center>Perpustakaan Ecek-Ecek</center></h4>
<h6><center>Jl. Au Ah Gelap, No. 0690</center></h6>
<table border="1" cellpadding="1" cellspacing="1">
	<tr bgcolor="#5CBCD4">
     	<th>No</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Program Studi</th>		    
    </tr>

<?php
	error_reporting(0);
	$no=1;
								
	$sql = $koneksi->query("SELECT*FROM tb_anggota");
						
	while ($data = $sql->fetch_assoc())
		{
			$jk = ($data['jk'] == l)?"Laki-Laki":"Perempuan";
?>
	<tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['tempat_lahir']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $jk; ?></td> 
        <td><?php echo strtoupper($data['prodi']); ?></td>
     </tr>
<?php } ?>
</table>											