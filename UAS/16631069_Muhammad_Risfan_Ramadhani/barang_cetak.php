<?php include "head.php"; ?>
              <h2>Laporan Service</h2>
              <hr/>
              <br/>
              <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>Kode_Barang</th>
                      <th>TipeHP</th>
                      <th>NamaPemilik</th>
                      <th>Status</th>
                    </tr>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_service ORDER BY Kode_Barang ASC");
                        $no = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                              echo '
                                <tr>
                                  <td>'.$row['Kode_Barang'].'</td>
                                  <td>'.$row['TipeHP'].'</td>
                                  <td>'.$row['NamaPemilik'].'</td>
                                  <td>'.$row['Status'].'</rd>
                                </tr>
                                ';
                                $no++;
                                }?>
                  </table>
              </div>
                  <img src="pop.jpg" width="100px" onclick="window.print();">
				  <p>Klik disini</p>
<?php include "foot.php"; ?>
