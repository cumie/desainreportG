<?php include "head.php"; ?>
              <h2>Laporan data Barang Ready</h2>
              <hr/>
              <br/>
              <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama Barang</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                    </tr>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM ready ORDER BY kode ASC");
                        $no = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                              echo '
                                <tr>
                                  <td>'.$no.'</td>
                                  <td>'.$row['kode'].'</td>
                                  <td>'.$row['namabarang'].'</td>
                                  <td>'.$row['harga'].'</td>
                                  <td>'.$row['jumlah'].'</td>
                                </tr>
                                ';
                                $no++;
                                }?>
                  </table>
              </div>
                  <img src="pop.jpg" width="100px" onclick="window.print();">
				  <p>Klik disini</p>
<?php include "foot.php"; ?>
