<?php include "head.php"; ?>
            <h2>Data Karyawan</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $ID_Karyawan = $_GET['ID_Karyawan'];
          $cek = mysqli_query($koneksi, "SELECT * FROM data_karyawan WHERE ID_Karyawan='$ID_Karyawan'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM data_karyawan WHERE ID_Karyawan='$ID_Karyawan'");
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
                $pageSql="SELECT * FROM data_karyawan WHERE ID_Karyawan like '%$qcari%' or no_telpon like '%$qcari%' or alamat like '%$qcari%' ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="data_karyawan_add2.php">Tambah Data</a>
      <br/>
      <br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
          <select class="form-control" name="filter" onchange="form.submit()">
              <option value="0">Filter Data data_karyawan</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
              <option value="Tukang Service" <?php if($filter=='TukangService'){echo 'selected';} ?>>Tukang Service</option>
              <option value="Kontrak" <?php if($filter=='Kasir'){echo 'selected';} ?>>Kasir</option>
              <option value="Outsourcing" <?php if($filter=='Satpam'){echo 'selected';} ?>>Satpam</option>
          </select>
    </form>

  </div>
  <div class="right">
    <form class="" method="POST" action="data_karyawan_data.php" >
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
                  <th>ID_Karyawan</th>
                  <th>Nama</th>
                  <th>Alamat<th>
                  <th>Jabatan</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From data_karyawan WHERE status='$filter' ORDER BY ID_Karyawan ASC");
                }else{
                    $sql = mysqli_query($koneksi, $pageSql. " ORDER BY ID_Karyawan ASC");
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
                      <td><?php echo $row['ID_Karyawan']; ?></td>
                      <td><a href="data_karyawan_detail.php?ID_Karyawan=<?php echo $row['ID_Karyawan']; ?>"><span class="glyphicon glyphicon-user" 
					  aria-hidden="true"></span> <?php echo $row['nama']; ?></a></td>
                      <td><?php echo $row['alamat']; ?></td>
                      <td><?php echo $row['jabatan']; ?></td>
                      <td>
                    <?php
                          if($row['jabatan'] == 'tukangservice'){
                    ?>
                        <span class="label label-success">Tukang Service</span>
                    <?php }
                          else if ($row['jabatan'] == 'kasir'){
                    ?>
                        <span class="label label-info">Kasir</span>
                    <?php }
                          else if ($row['jabatan'] == 'Satpam'){
                    ?>
                      <span class="label label-warning">Satpam</span>
                    <?php } ?>
                      </td>
                      <td>
                        <a href="data_karyawan_edit.php?ID_Karyawan=<?php echo $row['ID_Karyawan']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="data_karyawan_detail.php?ID_Karyawan=<?php echo $row['ID_Karyawan']; ?>" title="data_karyawan_detail" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="data_karyawan_data.php?aksi=delete&ID_Karyawan=<?php echo $row['ID_Karyawan']; ?>" title="Hapus Data" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['nama']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
