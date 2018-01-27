<?php include "head.php"; ?>
              <h2>Laporan data Bengkel</h2>
              <hr/>
              <br/>
              <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>id</th>
                      <th>nama Sparepart</th>
                      <th>Jumlah</th>
                      <th>Keterangan</th>
                    </tr>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_bengkel ORDER BY id ASC");
                        $no = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                              echo '
                                <tr>
                                  <td>'.$row['id'].'</td>
                                  <td>'.$row['nama_sparepart'].'</td>
                                  <td>'.$row['jumlah'].'</td>
                                  <td>'.$row['keterangan'].'</td>
                                </tr>
                                ';
                                $no++;
                                }?>
                  </table>
              </div>
                  <img src="ikonprinter.png" width="30px" onclick="window.print();">
                </p>
<?php include "foot.php"; ?>
