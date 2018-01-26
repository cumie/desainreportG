<?php include "head.php"; ?>
            <h2>Stok Barang</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $id = $_GET['id'];
          $cek = mysqli_query($koneksi, "SELECT * FROM stok_barang WHERE id='$id'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM stok_barang WHERE id='$id'");
                if($delete){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                  }else{
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                  }
          }
    }
      $pageSql="SELECT * FROM stok_barang";
            if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
                $pageSql="SELECT * FROM stok_barang WHERE id like '%$qcari%' or jenis_motor like '%$qcari%' or id like '%$qcari%' or keterangan ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="stok_barang_add2.php">Stok Barang</a>
      <br/>
      <br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
          <select class="form-control" name="filter" onchange="form.submit()">
              <option value="0">Stok Barang</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
              <option value="Barang_masuk" <?php if($filter=='barang_masuk'){echo 'selected';} ?>>barang_masuk </option>
              <option value="barang_keluar" <?php if($filter=='barang_keluar'){echo 'selected';} ?>>barang_keluar </option>
          </select>
    </form>

  </div>
  <div class="right">
    <form class="" method="POST" action="stok_barang.php" >
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
                  <th>Nama Barang</th>
                  <th>Suplier Barang</th>
                  <th>Jumlah Barang</th>
                  <th>Harga Barang</th>
                  <th>Tools</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From stok_barang WHERE id='$filter' ORDER BY id ASC");
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
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row['id_barang']; ?></a></td> 
                      <td><?php echo $row['nama_barang']; ?></a></td>
                      <td><?php echo $row['suplier_barang']; ?></td>
                      <td><?php echo $row['jumlah_barang']; ?></td>
                      <td><?php echo $row['harga_barang']; ?></td>
                      <td><?php echo $row['Tools']; ?></td>
                      <td>
                        <a href="data_service.php?id=<?php echo $row['id']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="data_service_detail.php?id=<?php echo $row['id']; ?>" title="Data Service Detail" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        
                        <a href="data_service.php?aksi=delete&id=<?php echo $row['id']; ?>" title="Hapus Data" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['id']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
