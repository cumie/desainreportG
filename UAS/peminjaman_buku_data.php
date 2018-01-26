<?php include "head.php" ;?>
<div class="container">
  <h3>Data Peminjaman Buku</h3>
  <hr/>
 <?php include "koneksi.php"; ?>
<?php 
	if (isset($_GET['aksi'])=='delete'){
		$kode = $_GET['kode_buku'];
		$cek = mysqli_query($koneksi, "SELECT * FROM peminjaman_buku WHERE kode='$kode_buku'");
		if(mysqli_num_rows($cek) == 0){
			echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
			}
			else{
				$delete = mysqli_query($koneksi, "DELETE FROM peminjaman_buku WHERE kode_buku= '$kode_buku'");
				if($delete){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>Data Peminjaman Buku Berhasil Dihapus.</div>';
					}
					else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>Data Gagal Dihapus.</div>';
						}
				}
		}

$page_sql="SELECT * FROM peminjaman_buku";
if (isset($_POST['qcari'])){
	$qcari=$_POST['qcari'];
	$page_sql="SELECT * FROM peminjaman_buku WHERE kode_buku like '%qcari%' or nama like '%qcari%' or no_telepon like '%qcari%' or tempat_lahir like '%qcari%' ";
	}
?>
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="order_add2.php" class="btn btn-succes">Tambah Data</a>

<div class="form-group">
	<div class="left">
    	<form class="form-inline" method="get">
        	<select name="filter" class="form-control" onChange="form.submit()">
            	<option value="0">Filter Peminjaman Buku </option>
            	<?php $filter=(isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
                <option value="01"><?php if($filter =='01') {echo'selected';} ?>>01</option>
                <option value="02"><?php if($filter =='02') {echo'selected';} ?>>02</option>
                <option value="03"><?php if($filter =='03') {echo'selected';} ?>>03</option>
            </select>
        </form>
    </div>
    <div class="right">
    	<form class="" method="post" action="peminjaman_buku_data.php">
        	<input type="text" class="form-control" name="qcari" placeholder="Cari Data" autofocus>
        </form>
    </div>
    
    <br/>
    <br/>
    <div class="table-responsive">
    	<table class="table table-striped table-hover">
        	<tr>
            	<th>Kode Buku</th>
                <th>Npm</th>
                <th>Nama Peminjam</th>
                <th>Nama Buku</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Tools</th>
            </tr>
            <?php include "koneksi.php"; ?>
            <?php include "library.php"; ?>
            <?php 
				if($filter){
					$sql = mysqli_query($koneksi,"SELECT * FROM peminjaman_buku WHERE tools ='$filter' ORDER BY kode ASC");
					}
					else{
						$sql = mysqli_query($koneksi, $page_sql." ORDER BY kode_buku ASC");
						}
				if(mysqli_num_rows($sql) == 0){
			?>
            <tr><td colspan="8">Tidak Ada Data!!!</td></tr>
            <?php
				}else{
					$no = 1;	
					while ($row = mysqli_fetch_assoc($sql)){
			?>	
            	<tr>
                	<td><?php echo $no; ?></td>
                    <td><?php echo $row['kode_buku']; ?></td>
                    <td><a href="peminjaman_buku_detail.php?kode_buku=<?php echo $row['kode_buku']; ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo $row['kode_buku']; ?></a></td>
                    <td><?php echo $row['nama_peminjam']; ?></td>
                    <td><?php echo $row['jumlah']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td>
					<?php 
						if($row['kode_buku']== '01'){	
						?>
                    <span class="label label-success">Ganjil</span>
                    <?php }
						else if($row['kode_buku']== '02'){
                    ?>
                    <span class="label label-info">Genap</span>
                    <?php }
						else if($row['kode_buku']== '03'){
					?>
                    <span class="label label-warning">Ganjil</span>
                   <?php } ?>  
                    </td>
                    <td>
                    	<a href="peminjaman_buku_edit.php? kode_buku=<?php echo $row['kode_buku']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        
                        <a href="peminjaman_data.php?aksi=delete&kode_buku=<?php echo $row['kode_buku']; ?>" title="Hapus Data" onClick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['kode_buku']; ?> ??')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </td>
                </tr>
                <?php 
				$no++;
					}
				}
				?>
        </table>
    </div>
    <?php include "foot.php"; ?>
</div>
</div>