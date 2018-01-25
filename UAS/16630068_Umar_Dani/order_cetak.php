<?php include "head.php"; ?>
              <h2>Laporan data Sepatu Order</h2>
              <hr/>
              <br/>
              <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Nama Sepatu</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                      <th>Tanggal</th>
                      <th>No Telpon</th>
                    </tr>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM orderan ORDER BY kode ASC");
                        $no = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                              echo '
                                <tr>
                                  <td>'.$no.'</td>
                                  <td>'.$row['kode'].'</td>
                                  <td>'.$row['nama'].'</td>
                                  <td>'.$row['nama_sepatu'].'</td>
                                  <td>'.$row['nama_sepatu'].'</td>
                                  <td>'.$row['harga'].'</td>
                                  <td>'.indonesiatgl($row['tanggal']).'</td>
                                  <td>'.$row['no_telpon'].'</td>
                                </tr>
                                ';
                                $no++;
                                }?>
                  </table>
              </div>
                  <img src="pop.jpg" width="100px" onclick="window.print();">
				  <p>Klik disini</p>
<?php include "foot.php"; ?>
