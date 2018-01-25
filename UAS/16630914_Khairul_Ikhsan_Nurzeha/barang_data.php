<?php include "head.php"; ?>

            <h2>Data Barang</h2>
            <hr />

<?php
  if (isset($_GET['aksi']) == 'delete'){
        $kode = $_GET['kode'];
        $cek = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode='$kode'");
        if(mysqli_num_rows($cek) == 0){
          echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close"
          data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
        }else {
          $delete = mysqli_query($koneksi, "DELETE FROM barang WHERE kode='$kode'");
          if ($delete){
            echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close"
            data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
          }else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close"
            data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
          }
      }
  }
$pageSql="SELECT * FROM barang";
if (isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $pageSql=" SELECT * FROM barang WHERE kode like '%$qcari%' or nama like '%$qcari%' or stok like '%$qcari%' or
  sumber_barang like '%$qcari%' ";
}
?>
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="barang_add.php">Tambah Data</a>&nbsp;
<span class="glyphicon glyphicon-edit" arian-hidden="true"></span><a href="keterangan_barang.php">&nbsp;Keterangan Kode</a>
<br/>
<br/>
<div class="form-group">
  <div class="left">
    <form class="form-inline" method="get">
      <select name="filter" class="form-control" onchange="form.submit()">
        <option value="0">Filter Data barang</option>
        <?php $filter=(isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
        <option value="ready"> <?php if ($filter == 'ready'){echo "selected";}?>Ready</option>
        <option value="preorder"> <?php if ($filter == 'preorder'){echo "selected";}?>Preorder</option>
        <option value="sold"> <?php if ($filter == 'sold'){echo "selected";}?>Sold</option>
      </select>
    </form>
  </div>
  <div class="right">
    <form class="" method="POST" action="barang_data.php">
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
        <th>Kode</th>
        <th>Nama Barang</th>	
        <th>Sumber Barang</th>
        <th>Tanggal Stok</th>
		<th>Size</th>
        <th>Stok</th>
        <th>Merk</th>
        <th>Status</th>
        <th>Tools</th>
      </tr>
      <?php
      if($filter){
        $sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='$filter' ORDER BY kode
        ASC");
      }else{
        $sql = mysqli_query($koneksi, $pageSql." ORDER BY kode ASC");
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
            <td><?php echo $row['kode']; ?></td>
            <td><a href="barang_detail.php?kode=<?php echo $row['kode']; ?>">
            <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
            <?php echo $row['nama']; ?></a></td>
            <td><?php echo $row['sumber_barang']; ?></td>
			 <td><?php echo indonesiaTgl($row['tanggal_stok']); ?></td>
            <td><?php echo $row['size']; ?></td>
            <td><?php echo $row ['stok']; ?></td>
            <td><?php echo $row['merk']; ?></td>
            <td>
          <?php
            if ($row['status'] == 'Ready'){
          ?>
            <span class="label label-success">Ready</span>
          <?php  }
            else if($row['status'] == 'Preorder'){
          ?>
            <span class="label label-info">Preorder</span>
          <?php }
            else if($row['status'] == 'Sold'){
           ?>
           <span class="label label-warning">Sold</span>
          <?php } ?>
        </td>
        <td>
          <a href="barang_edit.php?kode=<?php echo $row['kode']; ?>"
            title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"
            arian-hidden="true"></span></a>

           <a href="barang_detail.php?kode=<?php echo $row['kode']; ?>"
            title="Detail Data" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"
            arian-hidden="true"></span></a>

          <a href="barang_data.php?aksi=delete&kode=<?php echo $row['kode']; ?>" title="Hapus Data"
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