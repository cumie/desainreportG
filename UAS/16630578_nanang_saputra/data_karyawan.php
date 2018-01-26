<?php include "head.php"; ?>
            <h2>Data Karyawan</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $id = $_GET['id'];
          $cek = mysqli_query($koneksi, "SELECT * FROM data_karyawan WHERE id='$id'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM data_karyawan WHERE id='$id'");
                if($delete){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                  }else{
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                  }
          }
    }
      $pageSql="SELECT * FROM data_karyawan";
            if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
                $pageSql="SELECT * FROM data_karyawan WHERE id like '%$qcari%' or nama_sparepart like '%$qcari%' or jumlah like '%$qcari%' ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="data_karyawan_add2.php">Tambah Data</a>
      <br/>
      <br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
          <select class="form-control" name="filter" onchange="form.submit()">
              <option value="0">Filter Data Karyawan</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
              <option value="Masuk" <?php if($filter=='Masuk'){echo 'selected';} ?>>Masuk</option>
              <option value="Keluar" <?php if($filter=='Keluar'){echo 'selected';} ?>>Keluar</option>
          </select>
    </form>

  </div>
  <div class="right">
    <form class="" method="POST" action="data_karyawan.php" >
      <input type="text" class="form-control" name="qcari" placeholder="Cari.." autofocus/>
    </form>


  </div>
</div>
    <br />
    <br />
     <div class="table-responsive">
       <table class="table table-striped table-hover">
             <tr>
                  
                  <th>id</th>
                  <th>Nama Karyawan</th>
                  <th>Umur Karyawan</th>
                  <th>No.Telp</th>
                  <th>Status</th>
                  <th>Tools</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From data_karyawan WHERE keterangan='$filter' ORDER BY id ASC");
                }else{
                    $sql = mysqli_query($koneksi, $pageSql. " ORDER BY id ASC");
                }
                if(mysqli_num_rows($sql) == 0 ){
                  ?>
                  <tr><td colspan="8">Data Tidak Ada.</td></tr>
                  <?php
                  }else{
                    $no = 1;
                    while($row = mysqli_fetch_assoc($sql)){
                    ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['nama_karyawan']; ?></td>
                      <td><?php echo $row['umur_karyawan']; ?></td>
                      <td><?php echo $row['no_telp']; ?></td>
                      <td><?php echo $row['status']; ?></td>
                      <td>
                    
                        <a href="barang_bengkel_edit.php?id=<?php echo $row['id']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="barang_bengkel_detail.php?id=<?php echo $row['id']; ?>" title="Barang Detail" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="barang_bengkel_data.php?aksi=delete&id=<?php echo $row['id']; ?>" title="Hapus Data" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['nama']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
