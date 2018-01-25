<?php include "head.php"; ?>
              <h2>Data pelanggan &raquo; Tentang </h2>
              <hr/>

            <?php
              $id = $_GET['id'];
              $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan Where id='$id'");
                    if(mysqli_num_rows($sql) == 0){
                        header("location: index.php");
                        }else{
                              $row = mysqli_fetch_assoc($sql);
                        }
                    if(isset($_GET['aksi']) == 'delete'){
                        $id = $_GET['id'];
                        $cek = mysqli_query($koneksi, "DELETE * FROM pelanggan WHERE id='$id'");
                            $delete = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE id='$id'");
                              if($delete){
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                                }else{
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                                }
                      }
              ?>
            <table class="table table-striped table-condensed">
              <tr>
                <th width="20%">id</th>
                <td><?php echo $row['id']; ?></td>
              </tr>
              <tr>
                <th>Nama pelanggan</th>
                <td><?php echo $row['nama']; ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td><?php echo $row['alamat']; ?></td>
              </tr>
              <tr>
                <th>No Telpon</th>
                <td><?php echo $row['no_telepon']; ?></td>
              </tr>
                <tr>
                  <th>Barang Order</th>
                  <td><?php echo $row['barang_order']; ?></td>
                </tr>
				<tr>
                  <th>Tanggal Order</th>
                  <td><?php echo $row['tanggal_order']; ?></td>
                </tr>

              <tr>
                <th>size</th>
                <td><?php echo $row['size']; ?></td>
              </tr>
              <tr>
                <th>Status</th>
                <td><?php echo $row['status']; ?></td>
              </tr>
            </table>
        <a href="pelanggan_data.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Kembali </a>
        <a href="pelanggan_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit Data </a>
        <a href="pelanggan_data.php?aksi=delete&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin akan menghapus data <?php echo $row['nama'];?>')"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Hapus Data </a>
<?php include "foot.php"; ?>
<?php include "footer.php"; ?>
