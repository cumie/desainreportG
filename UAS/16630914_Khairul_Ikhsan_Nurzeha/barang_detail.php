<?php include "head.php"; ?>
              <h2>Data Barang &raquo; Rincian</h2>
              <hr/>

            <?php
              $kode = $_GET['kode'];
              $sql = mysqli_query($koneksi, "SELECT * FROM barang Where kode='$kode'");
                    if(mysqli_num_rows($sql) == 0){
                        header("location: index.php");
                        }else{
                              $row = mysqli_fetch_assoc($sql);
                        }
                    if(isset($_GET['aksi']) == 'delete'){
                        $kode = $_GET['kode'];
                        $cek = mysqli_query($koneksi, "DELETE * FROM barang WHERE kode='$kode'");
                            $delete = mysqli_query($koneksi, "DELETE FROM barang WHERE kode='$kode'");
                              if($delete){
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                                }else{
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                                }
                      }
              ?>
            <table class="table table-striped table-condensed">
              <tr>
                <th width="20%">kode</th>
                <td><?php echo $row['kode']; ?></td>
              </tr>
              <tr>
                <th>Nama barang</th>
                <td><?php echo $row['nama']; ?></td>
              </tr>              
			  <tr>
                <th>Sumber Barang</th>
                <td><?php echo $row['sumber_barang']; ?></td>
              </tr>
                <tr>
                  <th>Tanggal Stok Terakhir Datang</th>
                  <td><?php echo $row['tanggal_stok']; ?></td>
                </tr>
              <tr>
                <th>size</th>
                <td><?php echo $row['size']; ?></td>
              </tr>
              <tr>
                <th>Jumlah Stok</th>
                <td><?php echo $row['stok']; ?></td>
              </tr>
              <tr>
                <th>merk</th>
                <td><?php echo $row['merk']; ?></td>
              </tr>
              <tr>
                <th>Status</th>
                <td><?php echo $row['status']; ?></td>
              </tr>
            </table>
        <a href="barang_data.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Kembali </a>
        <a href="barang_edit.php?kode=<?php echo $row['kode']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit Data </a>
        <a href="barang_data.php?aksi=delete&kode=<?php echo $row['kode']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin akan menghapus data <?php echo $row['nama'];?>')"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Hapus Data </a>
<?php include "foot.php"; ?>
<?php include "footer.php"; ?>