<?php include "head.php"; ?>
            <h2>Data Motor</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $id = $_GET['id'];
          $cek = mysqli_query($koneksi, "SELECT * FROM data_motor WHERE id='$id'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM data_motor WHERE id='$id'");
                if($delete){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                  }else{
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                  }
          }
    }
      $pageSql="SELECT * FROM data_motor";
            if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
                $pageSql="SELECT * FROM data_motor WHERE id like '%$qcari%' or jenis_motor like '%$qcari%' or nama_pemilik like '%$qcari%' or type_custom like '%$qcari%' or alamat ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="data_motor_add2.php">Tambah Data</a>
      <br/>
      <br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
          <select class="form-control" name="filter" onchange="form.submit()">
              <option value="0">Filter Data Motor</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
              <option value="japstyle" <?php if($filter=='japstyle'){echo 'selected';} ?>>Japstyle </option>
              <option value="chopper" <?php if($filter=='chopper'){echo 'selected';} ?>>Chopper </option>
              <option value="caferacer" <?php if($filter=='caferacer'){echo 'selected';} ?>>Caferacer</option>
          </select>
    </form>

  </div>
  <div class="right">
    <form class="" method="POST" action="data_motor.php" >
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
                  <th>id</th>
                  <th>Jenis Motor</th>
                  <th>Nama Pemilik</th>
                  <th>Type Custom</th>
                  <th>Alamat</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From data_motor WHERE type_custom='$filter' ORDER BY id ASC");
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
                      <td><?php echo $row['id']; ?></a></td>
                      <td><?php echo $row['jenis_motor']; ?></td>
                      <td><?php echo $row['nama_pemilik']; ?></td>
                      <td><?php echo $row['type_custom']; ?></td>
                      <td><?php echo $row['alamat']; ?></td>
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
