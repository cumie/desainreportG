<?php include "head.php"; ?>

            <h2>Data pelanggan</h2>
            <hr />

<?php
  if (isset($_GET['aksi']) == 'delete'){
        $id = $_GET['id'];
        $cek = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id='$id'");
        if(mysqli_num_rows($cek) == 0){
          echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close"
          data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
        }else {
          $delete = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE id='$id'");
          if ($delete){
            echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close"
            data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
          }else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close"
            data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
          }
      }
  }
$pageSql="SELECT * FROM pelanggan";
if (isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql=" SELECT * FROM pelanggan WHERE id like '%$qcari%' or nama like '%$qcari%' or no_telepon like '%$qcari%' or
  order like '%$qcari%' ";
}
?>
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="pelanggan_add.php">Tambah Data</a>
<br/>
<br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
      <select name="filter" class="form-control" onchange="form.submit()">
        <option value="0">Filter Data pelanggan</option>
        <?php $filter=(isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
        <option value="Lunas"> <?php if ($filter == 'Lunas'){echo "selected";}?>Lunas</option>
        <option value="BelumLunas"> <?php if ($filter == 'BelumLunas'){echo "selected";}?>Belum Lunas</option>
      </select>
    </form>
  </div>
  <div class="right">
    <form class="" method="POST" action="pelanggan_data.php">
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
        <th>ID</th>
        <th>Nama</th>
		<th>Alamat</th>
        <th>No Telepon</th>
        <th>Barang Order</th>
		<th>Tanggal Order</th>
        <th>Size</th>
        <th>status</th>
        <th>Tools</th>
      </tr>
      <?php
      if($filter){
        $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE status='$filter' ORDER BY id
        ASC");
      }else{
        $sql = mysqli_query($koneksi, $pageSql." ORDER BY id ASC");
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
            <td><?php echo $row['id']; ?></td>
            <td><a href="pelanggan_detail.php?id=<?php echo $row['id']; ?>">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <?php echo $row['nama']; ?></a></td>
            <td><?php echo $row['alamat']; ?></a></td>
			<td><?php echo $row ['no_telepon']; ?></td>
            <td><?php echo $row['barang_order']; ?></td>
			<td><?php echo indonesiaTgl($row['tanggal_order']); ?></td>
            <td><?php echo $row['size']; ?></td>
            <td>
          <?php
            if ($row['status'] == 'Lunas'){
          ?>
            <span class="label label-success">Lunas</span>
          <?php  }
            else if($row['status'] == 'BelumLunas'){
          ?>
            <span class="label label-info">Belum Lunas</span>
          <?php }
            ?>
        </td>
        <td>
          <a href="pelanggan_edit.php?id=<?php echo $row['id']; ?>"
            title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"
            arian-hidden="true"></span></a>

           <a href="pelanggan_detail.php?id=<?php echo $row['id']; ?>"
            title="Detail Data" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"
            arian-hidden="true"></span></a>

          <a href="barang_data.php?aksi=delete&kode=<?php echo $row['id']; ?>" title="Hapus Data"
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
<?php include "footer.php"; ?>
