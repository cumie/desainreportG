<div class="panel panel-primary">
                        <div class="panel-heading">
                            Tambah Anggota
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">NIM</label>
								            <div class="col-sm-9">
            								<input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa" autocomplete="off" required style="margin-bottom:5px;" autofocus >
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Nama</label>
								            <div class="col-sm-9">
            								<input type="text" name="nama" class="form-control" placeholder="Nama" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
            							<div class="form-group">
        									<label class="col-sm-3 control-label">Tempat Lahir</label>
								            <div class="col-sm-9">
            								<input type="text" name="tempat_lahir" class="form-control" placeholder="Nama Kota" autocomplete="off" required style="margin-bottom:5px;">
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Tanggal Lahir</label>
								            <div class="col-sm-9">
            								<input type="text" name="tanggal_lahir" class="form-control" placeholder="* contoh : 17 Agustus 1945" autocomplete="off" required style="margin-bottom:5px;">
            								
								            </div>
								        </div>
                                       <div class="form-group">
        									<label class="col-sm-3 control-label">Alamat</label>
								            <div class="col-sm-9">
            								<textarea name="alamat"  class="form-control" placeholder="Alamat" style="margin-bottom:5px;"></textarea>
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Jenis Kelamin</label>
								            <div class="col-sm-9">
								            <label>
            <input type="radio" name="jk" id="optionsRadios1" value="l" style="margin-bottom:5px;" />Laki-Laki
                                                </label>
                                                <label>
            <input type="radio" name="jk" id="optionsRadios1" value="p" style="margin-bottom:5px;" />Perempuan
                                                </label>
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Prodi</label>
								            <div class="col-sm-9">
            								<input type="text" name="prodi" class="form-control" placeholder="Program Studi" autocomplete="off" required style="margin-bottom:5px;" >
            								</div>
								        </div>
                                        <div class="form-group">
        									<label class="col-sm-3 control-label">Foto</label>
								            <div class="col-sm-9">
            								<input type="file" name="foto" class="btn btn-warning"  required style="margin-bottom:5px;" >
            								</div>
								        </div>
                                        <div>
                                        <center>
                                        	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                            <a href="?page=anggota" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-remove"></span> Batal</a>
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
	//input data
	$nim 			= $_POST['nim'];
	$nama	 		= $_POST['nama'];
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$alamat			= $_POST['alamat'];
	$jk				= $_POST['jk'];
	$prodi			= $_POST['prodi'];
	
	//upload foto
	$foto			= $_FILES['foto']['name'];
	$tmp			= $_FILES['foto']['tmp_name'];
	$foto_baru		= date('dmYHis').$foto;
	$path			= "images/".$foto_baru;
	move_uploaded_file($tmp,$path);
	
	$simpan		= $_POST['simpan'];
	
	if ($simpan){
		$sql = $koneksi->query("INSERT INTO tb_anggota(nim, nama, tempat_lahir, tanggal_lahir, alamat, jk, prodi, foto) VALUES('$nim','$nama','$tempat_lahir','$tanggal_lahir','$alamat','$jk','$prodi','$foto_baru')");
		if($sql){
			?>
            	<script type="text/javascript">
					alert("Data Berhasil Disimpan");
					window.location.href="?page=anggota";
				</script>
			<?php
			}
		}
?>