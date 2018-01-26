 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                             PEMINJAMAN BUKU
                        </div>
                        <div class="panel-body">
                        <a href="?page=trans&aksi=tambah" class="btn btn-md btn-primary" style="margin-bottom:8px"><span class="glyphicon glyphicon-plus-sign"></span> Pinjam Buku</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">No</th>
                                            <th style="font-size:13px">Judul</th>
                                            <th style="font-size:13px">NIM</th>
                                            <th style="font-size:13px">Nama</th>
                                            <th style="font-size:13px">Tanggal Pinjam</th>
                                            <th style="font-size:13px">Tanggal Kembali</th>
                                            <th style="font-size:13px">Terlambat</th>
                                            <th style="font-size:13px">Status</th>
                                            <th style="font-size:13px">Kembali | Perpanjang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
										error_reporting(0);
											$no=1;
										
											$sql = $koneksi->query("SELECT*FROM tb_transaksi WHERE status='Pinjam'");
											
											while ($data = $sql->fetch_assoc())
											{
												
												?>
                                    	<tr>
                                        	<td><?php echo $no++; ?></td>
                                        	<td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['nim']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['tgl_pinjam']; ?></td> 
                                            <td><?php echo $data['tgl_kembali']; ?></td>
                                            <td>
												<?php
                                            		$denda = 500;
													$tgl_dateline2 = $data['tgl_kembali'];
													$tgl_kembali = date("Y-m-d");
													$lambat = terlambat($tgl_dateline2, $tgl_kembali);
													$jumlah = $lambat*$denda;
													if($lambat > 0){
														echo "
															<font color='red'>$lambat hari<br> (Rp $jumlah) </font>
															";
														}else{
															echo $lambat.Hari;
															}
												?>
                                            </td>
                                            <td><?php echo $data['status']; ?></td>
                                          <td>
												<a href="?page=trans&aksi=kembali&id=<?php echo $data['id'];?>&judul=<?php echo $data['judul'];?>&nim=<?php echo $data['nim'];?>&nama=<?php echo $data['nama'];?>"><span class="btn btn-md btn-info glyphicon glyphicon-circle-arrow-left"></span></a>
                                                <a href="?page=trans&aksi=perpanjang&id=<?php echo $data['id'];?>&judul=<?php echo $data['judul'];?>&lambat=<?php echo $lambat;?>&tgl_kembali=<?php echo $data['tgl_kembali'];?>"><span class="btn btn-md btn-success glyphicon glyphicon-hand-right"></span></a>
                                          </td>
                                        </tr>
                                        <?php } ?></tbody>
                                </table>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>