<?php include "head.php"; ?>
              <h2>Data penyicil &raquo; Biodata</h2>
              <hr/>

            <?php
              $nama = $_GET['nama'];
              $sql = mysqli_query($koneksi, "SELECT * FROM penyicil Where nama='$nama'");
                    if(mysqli_num_rows($sql) == 0){
                        header("location: index.php");
                        }else{
                              $row = mysqli_fetch_assoc($sql);
                        }
                    if(isset($_GET['aksi']) == 'delete'){
                        $nama = $_GET['nama'];
                        $cek = mysqli_query($koneksi, "DELETE * FROM penyicil WHERE nama='$nama'");
                            $delete = mysqli_query($koneksi, "DELETE FROM penyicil where nama='$nama'");
                              if($delete){
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                                }else{
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                                }
                      }
              ?>
            <table class="table table-striped table-condensed">
             
              <tr>
                <th>Nama</th>
                <td> <?php echo $row['nama'] ?> </td>
              </tr>
              <tr>
                <th>nama_sepatu</th>
                <td> <?php echo $row['nama_sepatu']; ?> </td>
              </tr>
              <tr>
                <th>harga</th>
                <td> <?php echo $row['harga']; ?> </td>
              </tr>
              <tr>
                <th>dp</th>
                <td> <?php echo $row['dp']; ?> </td>
              </tr>
              
            </table>
        <a href="penyicil_data.php" class="btn btn-sm btn-info"> <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Kembali </a>
        <a href="penyicil_edit.php?nama=<?php echo $row['nama']; ?>" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit Data </a>
        <a href="propile.php?aksi=delete&nik=<?php echo $row['nama']; ?>" class="btn btn-sm btn-danger" onclick="returnconfirm('Anda Yakin akan menghapus data<?php echo $row['nama'];?>')"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Hapus Data </a>
<?php include "foot.php"; ?>
