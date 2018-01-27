<?php include "head.php"; ?>
            <h2>Data Barang ready</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $kode = $_GET['kode'];
          $cek = mysqli_query($koneksi, "SELECT * FROM ready WHERE kode='$kode'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM ready WHERE kode='$kode'");
                if($delete){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                  }else{
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                  }
          }
    }
      $pageSql="SELECT * FROM ready";
            if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
                $pageSql="SELECT * FROM ready WHERE kode like '%$qcari%' or no_telpon like '%$qcari%' or tempat_lahir like '%$qcari%' ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="barangready_add2.php">Tambah Data</a>
      <br/>
      <br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
          <select class="form-control" name="filter" onchange="form.submit()">
              <option value="0">Filter Data ready</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
              <option value="Tetap" <?php if($filter=='Tetap'){echo 'selected';} ?>>Tetap</option>
              <option value="Kontrak" <?php if($filter=='Kontrak'){echo 'selected';} ?>>Kontrak</option>
              <option value="Outsourcing" <?php if($filter=='Outsourcing'){echo 'selected';} ?>>Outsourcing</option>
          </select>
    </form>

  </div>
  <div class="right">
    <form class="" method="POST" action="ready_data.php" >
      <input type="text" class="form-control" name="qcari" placeholder="Cari.." autofocus/>
    </form>


  </div>
</div>
    <br />
    <br />
     <div class="table-responsive">
       <table class="table table-striped table-hover">
             <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama Sepatu</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Tools</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From ready WHERE status='$filter' ORDER BY kode ASC");
                }else{
                    $sql = mysqli_query($koneksi, $pageSql. " ORDER BY kode ASC");
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
                      <td><?php echo $row['kode']; ?></td>
                      <td><a href="ready_detail.php?kode=<?php echo $row['kode']; ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $row['nama_sepatu']; ?></a></td>
                      <td><?php echo $row['jumlah'] ?></td>
                      <td><?php echo $row['harga'] ?></td>
                      <!--<td>
                    <?php
                          if($row['status'] == 'Tetap'){
                    ?>
                        <span class="label label-success">Tetap</span>
                    <?php }
                          else if ($row['status'] == 'Kontrak'){
                    ?>
                        <span class="label label-info">Kontrak</span>
                    <?php }
                          else if ($row['status'] == 'Outsourcing'){
                    ?>
                      <span class="label label-warning">Outsourcing</span>
                    <?php } ?>
                      </td>-->
                      <td>
                        <a href="barangready_edit.php?kode=<?php echo $row['kode']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="barangready_detail.php?kode=<?php echo $row['kode']; ?>" title="ready_detail" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="barangready_data.php?aksi=delete&kode=<?php echo $row['kode']; ?>" title="Hapus Data" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['nama']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
