<?php include "head.php"; ?>
            <h2>Data Service</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $Kode_Barang = $_GET['Kode_Barang'];
          $cek = mysqli_query($koneksi, "SELECT * FROM data_service WHERE Kode_Barang='$Kode_Barang'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM data_service WHERE Kode_Barang='$Kode_Barang'");
                if($delete){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                  }else{
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                  }
          }
    }
      $pageSql="SELECT * FROM data_service";
            if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
                $pageSql="SELECT * FROM data_service WHERE Kode_Barang like '%$qcari%' or size like '%$qcari%' or warna like '%$qcari%' ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="barang_add2.php">Tambah Data</a>
      <br/>
      <br/>
<div class="form-group">
  <!--<div class="left">
    <form class="form-inline" method="get">
          <select class="form-control" name="filter" onchange="form.submit()">
              <option value="0">Filter Data order</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
              <option value="Tetap" <?php if($filter=='Tetap'){echo 'selected';} ?>>Tetap</option>
              <option value="Kontrak" <?php if($filter=='Kontrak'){echo 'selected';} ?>>Kontrak</option>
              <option value="Outsourcing" <?php if($filter=='Outsourcing'){echo 'selected';} ?>>Outsourcing</option>
          </select>
    </form>

  </div>-->
  <div class="right">
    <form class="" method="POST" action="barang_data.php" >
      <input type="text" class="form-control" name="qcari" placeholder="Cari.." autofocus/>
    </form>


  </div>
</div>
    <br />
    <br />
     <div class="table-responsive">
       <table class="table table-striped table-hover">
             <tr>
                  <th>Kode Barang</th>
                  <th>Tipe HP</th>
                  <th>Nama Pemilik</th>
                  <th>Status</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From data_service WHERE Status='$filter' ORDER BY Kode_Barang ASC");
                }else{
                    $sql = mysqli_query($koneksi, $pageSql. " ORDER BY Kode_Barang ASC");
                }
                if(mysqli_num_rows($sql) == 0 ){
                  ?>
                  <tr><td colspan=8">Data Tidak Ada.</td></tr>
                  <?php
                  }else{
                    $no = 1;
                    while($row = mysqli_fetch_assoc($sql)){
                    ?>
                    <tr>
                      <td><?php echo $row['Kode_Barang']; ?></td>
                      <td><?php echo $row['TipeHP']; ?></td>
                      <td><?php echo $row['NamaPemilik']; ?></td>
					  <td><?php echo $row['Status']; ?></td>
                      <td>
                        <a href="barang_edit.php?Kode_Barang=<?php echo $row['Kode_Barang']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="barang_detail.php?Kode_Barang=<?php echo $row['Kode_Barang']; ?>" title="Detail" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="barang_data.php?aksi=delete&Kode_Barang=<?php echo $row['Kode_Barang']; ?>" title="Hapus Data" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['Kode_Barang']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

