<div class="panel panel-primary">
                        <div class="panel-heading">
                            Tambah Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Judul Buku</label>
								            <div class="col-sm-9">
            								<input type="text" name="judul" class="form-control" placeholder="Judul Buku" autocomplete="off" required style="margin-bottom:5px;" >
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Pengarang</label>
								            <div class="col-sm-9">
            								<input type="text" name="pengarang" class="form-control" placeholder="Nama Pengarang" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
            							<div class="form-group">
        									<label class="col-sm-3 control-label">Penerbit</label>
								            <div class="col-sm-9">
            								<input type="text" name="penerbit" class="form-control" placeholder="Penerbit" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Tahun Terbit</label>
								            <div class="col-sm-9">
            									<select class="form-control" name="tahun" style="margin-bottom:5px;">
                                            	<?php
												
												$tahun = date("Y");
												
												for($i = $tahun-20;$i <= $tahun;$i++){
													
													echo'
														<option value="'.$i.'">'.$i.'</option>
													';
													}
												
												?>
                                            	</select>
            								</div>
								        </div>
                                       <div class="form-group">
        									<label class="col-sm-3 control-label">ISBN</label>
								            <div class="col-sm-9">
            								<input type="text" name="isbn" class="form-control" placeholder="ISBN buku" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Jumlah Buku</label>
								            <div class="col-sm-9">
            								<input type="number" name="jumlah" class="form-control" placeholder="Jumlah Buku" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Lokasi</label>
								            <div class="col-sm-9">
            								<select class="form-control" name="lokasi" style="margin-bottom:5px;">
                                            	<option>- pilih -</option>
                                                <option value="Rak 1">Rak 1</option>
                                                <option value="Rak 1">Rak 2</option>
                                                <option value="Rak 1">Rak 3</option>
                                            </select>
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Tanggal Input</label><?php $tanggal = date("Y-m-d");?>
								            <div class="col-sm-9">
            								<input type="date" name="tanggal" class="form-control" value="<?php echo $tanggal; ?>" readonly required style="margin-bottom:5px;" >
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Gambar</label>
								            <div class="col-sm-9">
            								<input type="file" name="gambar" class="btn btn-success"  required style="margin-bottom:5px;" >
            								</div>
                                        <div>
                                        <center>
                                        	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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
	
	//upload foto
	$foto			= $_FILES['gambar']['name'];
	$tmp			= $_FILES['gambar']['tmp_name'];
	$foto_baru		= date('dmYHis').$foto;
	$path			= "gbrbuku/".$foto_baru;
	move_uploaded_file($tmp,$path);
	
	$simpan		= $_POST['simpan'];
	
	if ($simpan){
		$sql = $koneksi->query("INSERT INTO tb_buku(judul, pengarang, penerbit, tahun_terbit, isbn, jumlah_buku, lokasi, tgl_input, gambar) VALUES('$judul','$pengarang','$penerbit','$tahun','$isbn','$jumlah','$lokasi','$tanggal','$foto_baru')");
		if($sql){
			?>
            	<script type="text/javascript">
					alert("Data Berhasil Disimpan");
					window.location.href="?page=buku";
				</script>
			<?php
			}
		}
?>