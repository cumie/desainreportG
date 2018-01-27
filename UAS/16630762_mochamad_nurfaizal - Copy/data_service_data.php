<?php include "head.php"; ?>
            <h2>Data Sepatu Order</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $kode = $_GET['kode'];
          $cek = mysqli_query($koneksi, "SELECT * FROM orderan WHERE kode='$kode'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM orderan WHERE kode='$kode'");
                if($delete){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                  }else{
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                  }
          }
    }
      $pageSql="SELECT * FROM orderan";
            if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
                $pageSql="SELECT * FROM orderan WHERE kode like '%$qcari%' or no_telpon like '%$qcari%' or nama like '%$qcari%' ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="order_add2.php">Tambah Data</a>
      <br/>
      <br/>
<div class="form-group">
  <div class="left">
    <!--<form class="form-inline" method="get">
          <select class="form-control" name="filter" onchange="form.submit()">
              <option value="0">Filter Data order</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
              <option value="Tetap" <?php if($filter=='Tetap'){echo 'selected';} ?>>Tetap</option>
              <option value="Kontrak" <?php if($filter=='Kontrak'){echo 'selected';} ?>>Kontrak</option>
              <option value="Outsourcing" <?php if($filter=='Outsourcing'){echo 'selected';} ?>>Outsourcing</option>
          </select>
    </form>-->

  </div>
  <div class="right">
    <form class="" method="POST" action="order_data.php" >
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
                  <th>Nama</th>
                  <th>Nama Sepatu</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>No Telpon</th>
                  <th>Tanggal</th>
                  <th></th>
                  <th>Tools</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From orderan WHERE status='$filter' ORDER BY kode ASC");
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
                      <td><a href="order_detail.php?kode=<?php echo $row['kode']; ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $row['nama']; ?></a></td>
                      <td><?php echo $row['nama_sepatu']; ?></td>
                      <td><?php echo $row['jumlah']; ?></td>
                      <td><?php echo $row['harga']; ?></td>
                      <td><?php echo $row['no_telpon']; ?></td>
                      <td><?php echo indonesiaTgl($row['tanggal']); ?></td>
                      <td>
                    
                      </td>
                      <td>
                        <a href="order_edit.php?kode=<?php echo $row['kode']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="order_detail.php?kode=<?php echo $row['kode']; ?>" title="Detail" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="order_data.php?aksi=delete&kode=<?php echo $row['kode']; ?>" title="Hapus Data" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['nama']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
