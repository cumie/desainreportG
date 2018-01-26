<?php
	$id		= $_GET['id'];
	$sql 	= $koneksi -> query("SELECT*FROM tb_buku WHERE id='$id'");
	$tampil = $sql -> fetch_assoc();
	$tahun2	= $tampil['tahun_terbit'];
	$lokasi	= $tampil['lokasi'];
?>
<div class="panel panel-primary">
                        <div class="panel-heading">
                            Ubah Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form method="post">
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Judul Buku</label>
								            <div class="col-sm-9">
            								<input type="text" name="judul" class="form-control" value="<?php echo $tampil['judul']; ?>" autocomplete="off" required style="margin-bottom:5px;" >
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Pengarang</label>
								            <div class="col-sm-9">
            								<input type="text" name="pengarang" class="form-control" value="<?php echo $tampil['pengarang']; ?>" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
            							<div class="form-group">
        									<label class="col-sm-3 control-label">Penerbit</label>
								            <div class="col-sm-9">
            								<input type="text" name="penerbit" class="form-control" value="<?php echo $tampil['penerbit']; ?>" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Tahun Terbit</label>
								            <div class="col-sm-9">
            									<select class="form-control" name="tahun" style="margin-bottom:5px;">
                                            	<?php
												
												$tahun = date("Y");
												
												for($i = $tahun-20;$i <= $tahun;$i++){
													
													if($i == $tahun2){
													echo'<option value="'.$i.'" selected>'.$i.'</option>';
													}else{
														echo '<option value="'.$i.'">'.$i.'</option>';
														}
												}
												?>
                                            	</select>
            								</div>
								        </div>
                                       <div class="form-group">
        									<label class="col-sm-3 control-label">ISBN</label>
								            <div class="col-sm-9">
            								<input type="text" name="isbn" class="form-control" value="<?php echo $tampil['isbn']; ?>" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Jumlah Buku</label>
								            <div class="col-sm-9">
            								<input type="number" name="jumlah" class="form-control" value="<?php echo $tampil['jumlah_buku']; ?>" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Lokasi</label>
								            <div class="col-sm-9">
            								<select class="form-control" name="lokasi" style="margin-bottom:5px;">
                                  <option value="Rak 1" <?php if ($lokasi == 'Rak 1') echo "selected";?>>Rak 1</option>
                                  <option value="Rak 2" <?php if ($lokasi == 'Rak 2') echo "selected";?>>Rak 2</option>
                                  <option value="Rak 3" <?php if ($lokasi == 'Rak 3') echo "selected";?>>Rak 3</option>
                                            </select>
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Tanggal Input</label>
								            <div class="col-sm-9">
            								<input type="date" name="tanggal" class="form-control" value="<?php echo $tampil['tgl_input']; ?>" autocomplete="off" required style="margin-bottom:5px;" >
            								</div>
								        </div>
                                        <div>
                                        <center>
                                        	<input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
                                            <a href="?page=buku" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-remove"></span> Batal</a>
                                        </center>
                                        </div>
                                       
                                    </form>
                                </div>
                                
                             </div>
                         </div>
</div>
<?php 

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");

?>
<?php
	$judul 		= $_POST['judul'];
	$pengarang 	= $_POST['pengarang'];
	$penerbit	= $_POST['penerbit'];
	$tahun		= $_POST['tahun'];
	$isbn		= $_POST['isbn'];
	$jumlah		= $_POST['jumlah'];
	$lokasi		= $_POST['lokasi'];
	$tanggal	= $_POST['tanggal'];
	
	$simpan		= $_POST['simpan'];
	
	if ($simpan){
		$sql = $koneksi->query("UPDATE tb_buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun', isbn='$isbn', jumlah_buku='$jumlah', lokasi='$lokasi', tgl_input='$tanggal' WHERE id='$id'");
		if($sql){
			?>
            	<script type="text/javascript">
					alert("Data Berhasil Diubah");
					window.location.href="?page=buku";
				</script>
			<?php
			}
		}
?>