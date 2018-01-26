<?php include "head.php"; ?>
              <h2>Laporan data store</h2>
              <hr/>
              <br/>
              <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>id</th>
                      <th>Nama Barang</th>
                      <th>Sold Barang</th>
                      <th>Keterangan Barang</th>
                    </tr>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_store_cetak ORDER BY id ASC");
                        $no = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                              echo '
                                <tr>
                                  <td>'.$row['id'].'</td>
                                  <td>'.$row['nama_barang'].'</td>
                                  <td>'.$row['sold_barangarang'].'</td>
                                  <td>'.$row['keterangan_barang'].'</td>
                                </tr>
                                ';
                                $no++;
                                }?>
                  </table>
              </div>
                  <img src="ikonprinter.png" width="30px" onclick="window.print();">
                </p>
<?php include "foot.php"; ?>
