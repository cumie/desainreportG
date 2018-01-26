<?php include "head.php"; ?>
            <h2>Data Tipe Handphone</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $TipeHP = $_GET['TipeHP'];
          $cek = mysqli_query($koneksi, "SELECT * FROM data_tipe_handphone WHERE TipeHP='$TipeHP'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM data_tipe_handphone WHERE TipeHP='$TipeHP'");
                if($delete){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                  }else{
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                  }
          }
    }
      $pageSql="SELECT * FROM data_tipe_handphone";
            if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
                $pageSql="SELECT * FROM data_tipe_handphone WHERE TipeHP like '%$qcari%' or NamaPemilik like '%$qcari%' or KodeBarang like '%$qcari%' ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="tipehp_add2.php">Tambah Data</a>
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
    <form class="" method="POST" action="tipehp_data.php" >
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
                  <th>TipeHP</th>
                  <th>Nama Pemilik</th>
                  <th>IMEI</th>
                  <th>Kode Barang</th>

                  <th>Tools</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From data_tipe_handphone WHERE status='$filter' ORDER BY TipeHP ASC");
                }else{
                    $sql = mysqli_query($koneksi, $pageSql. " ORDER BY TipeHP ASC");
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
                      <td><?php echo $row['TipeHP']; ?></td>
                      <td><?php echo $row['NamaPemilik']; ?></td>
                      <td><?php echo $row['IMEI']; ?></td>
                      <td><?php echo $row['KodeBarang']; ?></td>
                      <td>
                    
                      </td>
                      <td>
                        <a href="tipehp_edit.php?TipeHP=<?php echo $row['TipeHP']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="tipehp_detail.php?TipeHP=<?php echo $row['TipeHP']; ?>" title="Detail" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="tipehp_data.php?aksi=delete&TipeHP=<?php echo $row['TipeHP']; ?>" title="Hapus Data" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['TipeHP']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
