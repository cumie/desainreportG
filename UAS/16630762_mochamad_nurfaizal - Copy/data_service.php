<?php include "head.php"; ?>
            <h2>Data Service</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $nama = $_GET['nama'];
          $cek = mysqli_query($koneksi, "SELECT * FROM data_service WHERE nama='$nama'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hnamaden="true">&times;</button>Data Tnamaak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM data_service WHERE nama='$nama'");
                if($delete){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hnamaden="true">&times;</button>Data berhasil dihapus</div>';
                  }else{
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hnamaden="true">&times;</button>Data gagal dihapus.</div>';
                  }
          }
    }
      $pageSql="SELECT * FROM data_service";
            if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
                $pageSql="SELECT * FROM data_service WHERE nama like '%$qcari%' or jenis_motor like '%$qcari%' or jenis_custom like '%$qcari%' or keterangan ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hnamaden="true"></span><a href="data_service_add2.php">Tambah Data</a>
      <br/>
      <br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
          <select class="form-control" name="filter" onchange="form.submit()">
              <option value="0">Filter Data Motor</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
              <option value="perbaikan" <?php if($filter=='perbaikan'){echo 'selected';} ?>>perbaikan </option>
              <option value="clear" <?php if($filter=='clear'){echo 'selected';} ?>>clear </option>
          </select>
    </form>

  </div>
  <div class="right">
    <form class="" method="POST" action="data_service.php" >
      <input type="text" class="form-control" name="qcari" placeholder="Cari.." autofocus/>
    </form>


  </div>
</div>
    <br />
    <br />
     <div class="table-responsive">
       <table class="table table-striped table-hover">
             <tr>
                  <th>no</th>
                  <th>nama</th>
                  <th>Jenis Motor</th>
                  <th>Type Custom</th>
                  <th>keterangan</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From data_service WHERE jenis_custom='$filter' ORDER BY nama ASC");
                }else{
                    $sql = mysqli_query($koneksi, $pageSql. " ORDER BY nama ASC");
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
                      <td><?php echo $row['nama']; ?></a></td>
                      <td><?php echo $row['jenis_motor']; ?></td>
                      <td><?php echo $row['jenis_custom']; ?></td>
                      <td><?php echo $row['keterangan']; ?></td>
                      <td>
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
