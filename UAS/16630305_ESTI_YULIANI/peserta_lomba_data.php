<?php include "head.php"; ?>
<link rel="stylesheet" type="text/css" href="style1.css">
            <h2>Data Peserta Lomba Seni</h2>
            <hr />

<?php
  if (isset($_GET['aksi']) == 'delete'){
        $no_urut = $_GET['no_urut'];
        $cek = mysqli_query($koneksi, "SELECT * FROM peserta_lomba WHERE no_urut='$no_urut'");
        if(mysqli_num_rows($cek) == 0){
          echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close"
          data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
        }else {
          $delete = mysqli_query($koneksi, "DELETE FROM peserta_lomba WHERE no_urut='$no_urut'");
          if ($delete){
            echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close"
            data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
          }else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close"
            data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
          }
      }
  }
$pageSql="SELECT * FROM peserta_lomba";
if (isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql=" SELECT * FROM peserta_lomba WHERE no_urut like '%$qcari%' or nama like '%$qcari%' or no_urut like '%$qcari%' or
  tempat_lahir like '%$qcari%' ";
}
?>
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="peserta_lomba_add.php">Tambah Data</a>
<br/>
<br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
      <select name="filter" class="form-control" onchange="form.submit()">
        <option value="0">Filter Data peserta_lomba</option>
        <?php $filter=(isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
        <option value="Pelajar"> <?php if ($filter == 'Pelajar'){echo "selected";}?>>Pelajar</option>
        <option value="Mahasiswa"> <?php if ($filter == 'Mahasiswa'){echo "selected";}?>>Mahasiswa</option>
        <option value="Umum"> <?php if ($filter == 'Umum'){echo "selected";}?>>Umum</option>
      </select>
    </form>
  </div>
  <div class="right">
    <form class="" method="POST" action="peserta_lomba_data.php">
      <input type="text" class="form-control" name="qcari" placeholder="cari..." autofocus/>
    </form>
</div>
</div>
<br />
<br />
  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <tr>
	  <th>No. </th>
        <th>No Urut</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
		<th>Alamat</th>
        <th>No Telepon</th>
        <th>Lomba yang diikuti</th>
        <th>Status</th>
        <th>Tools</th>
      </tr>
      <?php
      if($filter){
        $sql = mysqli_query($koneksi, "SELECT * FROM peserta_lomba WHERE status='$filter' ORDER BY no_urut
        ASC");
      }else{
        $sql = mysqli_query($koneksi, $pageSql." ORDER BY no_urut ASC");
      }
      if(mysqli_num_rows($sql) == 0){
        ?>
        <tr><td colspan="8">Data Tidak Ada.</td></tr>
        <?php
      }else{
        $no_urut = 1;
        while ($row = mysqli_fetch_assoc ($sql)){
        ?>
          <tr>
            <td><?php echo $no_urut; ?></td>
            <td><?php echo $row['no_urut']; ?></td>
            <td><a href="peserta_lomba_detail.php?no_urut=<?php echo $row['no_urut']; ?>">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <?php echo $row['nama']; ?></a></td>
            <td><?php echo $row['tempat_lahir']; ?></td>
            <td><?php echo indonesiaTgl($row['tanggal_lahir']); ?></td>
			<td><?php echo $row ['alamat']; ?></td>
            <td><?php echo $row ['no_telepon']; ?></td>
            <td><?php echo $row['lomba_yang_diikuti']; ?></td>
			
            <td>
          <?php
            if ($row['status'] == 'Pelajar'){
          ?>
            <span class="label label-success">Pelajar</span>
          <?php  }
            else if($row['status'] == 'Mahasiswa'){
          ?>
            <span class="label label-info">Mahasiswa</span>
          <?php }
            else if($row['status'] == 'Umum'){
           ?>
           <span class="label label-warning">Umum</span>
          <?php } ?>
        </td>
        <td>
          <a href="peserta_lomba_edit.php?no_urut=<?php echo $row['no_urut']; ?>"
            title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"
            arian-hidden="true"></span></a>

           <a href="peserta_lomba_detail.php?no_urut=<?php echo $row['no_urut']; ?>"
            title="Detail Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"
            arian-hidden="true"></span></a>

          <a href="peserta_lomba_data.php?aksi=delete&no_urut=<?php echo $row['no_urut']; ?>" title="Hapus Data"
            onclick="return confirm('Anda yakin akan menghapus data <?php
            echo $row['nama']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon
            glyphicon-trash" aria-hidden="true"></span></a>
          </td>
        </tr>
        <?php
        $no_urut++;
            }
      }
         ?>
      </table>
    </div>
	</link>
<?php include "footer.php"; ?>
