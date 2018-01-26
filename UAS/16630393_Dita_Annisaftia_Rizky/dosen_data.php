<?php include "head.php"; ?>

            <h2>Data Dosen</h2>
            <hr />

<?php
  if (isset($_GET['aksi']) == 'delete'){
        $nik = $_GET['nik'];
        $cek = mysqli_query($koneksi, "SELECT * FROM dosen WHERE nik='$nik'");
        if(mysqli_num_rows($cek) == 0){
          echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close"
          data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
        }else {
          $delete = mysqli_query($koneksi, "DELETE FROM dosen WHERE nik='$nik'");
          if ($delete){
            echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close"
            data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
          }else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close"
            data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
          }
      }
  }
$pageSql="SELECT * FROM dosen";
if (isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql=" SELECT * FROM dosen WHERE nik like '%$qcari%' or nama like '%$qcari%' or no_telepon like '%$qcari%' or
  tempat_lahir like '%$qcari%' ";
}
?>
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="dosen_add.php">Tambah Data</a>
<br/>
<br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
      <select name="filter" class="form-control" onchange="form.submit()">
        <option value="0">Filter Data Dosen</option>
        <?php $filter=(isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
        <option value="Tetap"> <?php if ($filter == 'Tetap'){echo "selected";}?>>Tetap</option>
        <option value="asdos"> <?php if ($filter == 'asdos'){echo "selected";}?>>Asdos</option>
        <option value="Outsourcing"> <?php if ($filter == 'Outsourcing'){echo "selected";}?>>Outsourcing</option>
      </select>
    </form>
  </div>
  <div class="right">
    <form class="" method="POST" action="dosen_data.php">
      <input type="text" class="form-control" name="qcari" placeholder="cari..." autofocus/>
    </form>
</div>
</div>
<br />
<br />
  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <tr>
        <th>No</th>
        <th>nik</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
		<th>Alamat</th>
        <th>No Telepon</th>
        <th>Status</th>
        <th>Pengajar</th>
        <th>Tools</th>
      </tr>
      <?php
      if($filter){
        $sql = mysqli_query($koneksi, "SELECT * FROM dosen WHERE pengajar='$filter' ORDER BY nik
        ASC");
      }else{
        $sql = mysqli_query($koneksi, $pageSql." ORDER BY nik ASC");
      }
      if(mysqli_num_rows($sql) == 0){
        ?>
        <tr><td colspan="8">Data Tidak Ada.</td></tr>
        <?php
      }else{
        $no = 1;
        while ($row = mysqli_fetch_assoc ($sql)){
        ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nik']; ?></td>
            <td><a href="dosen_detail.php?nik=<?php echo $row['nik']; ?>">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <?php echo $row['nama']; ?></a></td>
            <td><?php echo $row['tempat_lahir']; ?></td>
            <td><?php echo indonesiaTgl($row['tanggal_lahir']); ?></td>
            <td><?php echo $row ['no_telepon']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
         <?php
            if ($row['status'] == 'asdos'){
          ?>
            <span class="label label-success">Asdos</span>
          <?php  }
            else if($row['status'] == 'tetap'){
          ?>
            <span class="label label-info">Tetap</span>
          <?php }
            else if($row['status'] == ''){
           ?>
           <span class="label label-warning"></span>
          <?php } ?>
        </td>
        <td>
          <a href="dosen_edit.php?nik=<?php echo $row['nik']; ?>"
            title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"
            arian-hidden="true"></span></a>

           <a href="dosen_detail.php?nik=<?php echo $row['nik']; ?>"
            title="Detail Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"
            arian-hidden="true"></span></a>

          <a href="dosen_data.php?aksi=delete&nik=<?php echo $row['nik']; ?>" title="Hapus Data"
            onclick="return confirm('Anda yakin akan menghapus data <?php
            echo $row['nama']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon
            glyphicon-trash" aria-hidden="true"></span></a>
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
