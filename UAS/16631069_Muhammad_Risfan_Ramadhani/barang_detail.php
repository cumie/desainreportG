<?php include "head.php"; ?>
              <h2>Data barang &raquo; Biodata</h2>
              <hr/>

            <?php
              $Kode_Barang = $_GET['Kode_Barang'];
              $sql = mysqli_query($koneksi, "SELECT * FROM data_service Where Kode_Barang='$Kode_Barang'");
                    if(mysqli_num_rows($sql) == 0){
                        header("location: index.php");
                        }else{
                              $row = mysqli_fetch_assoc($sql);
                        }
                    if(isset($_GET['aksi']) == 'delete'){
                        $Kode_Barang = $_GET['Kode_Barang'];
                        $cek = mysqli_query($koneksi, "DELETE * FROM data_service WHERE Kode_Barang='$Kode_Barang'");
                            $delete = mysqli_query($koneksi, "DELETE FROM data_service where Kode_Barang='$Kode_Barang'");
                              if($delete){
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                                }else{
                                  echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                                }
                      }
              ?>
            <table class="table table-striped table-condensed">
              <tr>
                <th width="20%">Kode_Barang</th>
                <td> <?php echo $row['Kode_Barang']; ?> </td>
              </tr>
              <tr>
                <th>TipeHP</th>
                <td> <?php echo $row['TipeHP'] ?> </td>
              </tr>
			   <tr>
                <th>NamaPemilik</th>
                <td> <?php echo $row['NamaPemilik'] ?> </td>
              </tr>
              <tr>
                <th>Status</th>
                <td> <?php echo $row['Status']; ?> </td>
              </tr>
             
            </table>
        <a href="barang_data.php" class="btn btn-sm btn-info"> <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Kembali </a>
        <a href="barang_edit.php?Kode_Barang=<?php echo $row['Kode_Barang']; ?>" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit Data </a>
        <a href="propile.php?aksi=delete&Kode_Barang=<?php echo $row['Kode_Barang']; ?>" class="btn btn-sm btn-danger" onclick="returnconfirm('Anda Yakin akan menghapus data<?php echo $row['Kode_Barang'];?>')"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Hapus Data </a>
<?php include "foot.php"; ?>
