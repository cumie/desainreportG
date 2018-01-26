<?php include "head.php"; ?>
              <h2>Data Peminjaman Buku &raquo; Biodata</h2>
              <hr/>

            <?php
              $kode = $_GET['kode'];
              $sql = mysqli_query($koneksi, "SELECT * FROM peminjaman_buku Where kode='$kode'");
                    if(mysqli_num_rows($sql) == 0){
                        header("location: index.php");
                        }else{
                              $row = mysqli_fetch_assoc($sql);
                        }
                    if(isset($_GET['aksi']) == 'delete'){
                        $kode = $_GET['kode'];
                        $cek = mysqli_query($koneksi, "DELETE * FROM peminjaman_buku WHERE kode='$kode'");
                            $delete = mysqli_query($koneksi, "DELETE FROM orderan where kode='$kode'");
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
                <td> <?php echo $row['kode']; ?> </td>
              </tr>
              <tr>
                <th>Npm</th>
                <td> <?php echo $row['npm'] ?> </td>
              </tr>
			  <tr>
                <th>Nama Peminjam</th>
                <td> <?php echo $row['peminjam']; ?> </td>
              </tr>   <tr>
                <th>Nama Buku</th>
                <td> <?php echo $row['buku']; ?> </td>
              </tr> 
                <tr>
                  <th>Jumlah</th>
                  <td> <?php echo $row['jumlah']; ?> </td>
                </tr>
              <tr>
                <th>Tanggal</th>
                <td> <?php echo $row['tanggal']; ?> </td>
              </tr>
            </table>
        <a href="peminjaman_buku_data.php" class="btn btn-sm btn-info"> <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Kembali </a>
        <a href="peminjaman_buku_edit.php?kode=<?php echo $row['kode']; ?>" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit Data </a>
        <a href="propile.php?aksi=delete&kode=<?php echo $row['kode']; ?>" class="btn btn-sm btn-danger" onclick="returnconfirm('Anda Yakin akan menghapus data<?php echo $row['kode'];?>')"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Hapus Data </a>
<?php include "foot.php"; ?>
