<?php include "head.php"; ?>
            <h2>Data Karyawan</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $nik = $_GET['nik'];
          $cek = mysqli_query($koneksi, "SELECT * FROM data_bengkel WHERE id='$id'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM data_bengkel WHERE nik='$nik'");
                if($delete){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                  }else{
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                  }
          }
    }
      $pageSql="SELECT * FROM data_bengkel";
            if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
                $pageSql="SELECT * FROM data_bengkel WHERE id like '%$qcari%' or nama_sparepart like '%$qcari%' or jumlah like '%$qcari%' or keterangan ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="data_bengkel_add2.php">Tambah Data</a>
      <br/>
      <br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
          <select class="form-control" name="filter" onchange="form.submit()">
              <option value="0">Filter Data Bengkel</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
              <option value="keluar" <?php if($filter=='keluar'){echo 'selected';} ?>>keluar</option>
              <option value="perbaikan" <?php if($filter=='perbaikan'){echo 'selected';} ?>>perbaikan</option>
          </select>
    </form>

  </div>
  <div class="right">
    <form class="" method="POST" action="data_bengkel.php" >
      <input type="text" class="form-control" name="qcari" placeholder="Cari.." autofocus/>
    </form>


  </div>
</div>
    <br />
    <br />
     <div class="table-responsive">
       <table class="table table-striped table-hover">
             <tr>
                  <th>ID</th>
                  <th>Nama Sparepart</th>
                  <th>Jumlah</th>
                  <th>keterangan</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From data_bengkel WHERE keterangan='$filter' ORDER BY id ASC");
                }else{
                    $sql = mysqli_query($koneksi, $pageSql. " ORDER BY nik ASC");
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
                      <td><?php echo $row['nik']; ?></td>
                      <td><a href="id_detail.php?nik=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $row['nama_sparepart']; ?></a></td>
                      <td><?php echo $row['jumlah']; ?></td>
                      <td><?php echo $row['keterangan']); ?></td>
                      <td>
                    <?php
                          if($row['keterangan'] == 'keluar'){
                    ?>
                        <span class="label label-success">Keluar</span>
                    <?php }
                          else if ($row['keterangan'] == 'masuk'){
                    ?>
                        <span class="label label-info">Masuks</span>
                    <?php } ?>
                      </td>
                      <td>
                        <a href="data_bengkel_edit.php?nik=<?php echo $row['nik']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="data_bengkel_detail.php?nik=<?php echo $row['nik']; ?>" title="data_bengkel_detail" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="data_bengkel_data.php?aksi=delete&nik=<?php echo $row['nik']; ?>" title="Hapus Data" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['nama']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
