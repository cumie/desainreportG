<?php

function login($username,$password){

	global $link;

	$username=mysqli_real_escape_string($link,$username);
	$password=mysqli_real_escape_string($link,$password);

	$query="SELECT*FROM admin WHERE username='$username' AND password='$password'";
	$result=mysqli_query($link,$query);
	return $result;

}



function register($nama,$username,$password,$telepon,$email,$status){

	global $link;

	$query="INSERT INTO admin(nama,username,password,telepon,email,status) VALUES('$nama','$username','$password','$telepon','$email','$status') ";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}


}




//-------------------------------fungsi data blok---------------------
function data_blok(){

global $link;

	$query="SELECT*FROM blok";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	
	return $result;
}

function data_blok_id($id){

global $link;

	$query="SELECT*FROM blok WHERE id='$id'";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	
	return $result;
}


function tambah_blok($blok){

	global $link;

	$blok=mysqli_real_escape_string($link,$blok);

	$query="INSERT INTO blok(blok) VALUES('$blok')";
	if (mysqli_query($link,$query)) {
			return true;
	}else{
		return false;
	}
}


function edit_blok($id,$blok){

	global $link;

	$blok=mysqli_real_escape_string($link,$blok);
	$query="UPDATE blok SET blok='$blok' WHERE id='$id'";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}
}


function cek_blok($blok){

	global $link;
	$query="SELECT*FROM blok WHERE blok='$blok'";
	$result=mysqli_query($link,$query);
	$cek_blok=mysqli_num_rows($result);
	
	return $cek_blok;

}


function hapus_blok($id){

	global $link;

	$query="DELETE FROM blok WHERE id='$id'";
	if(mysqli_query($link,$query)){
		return true;
	}else{
		return false;
	}

}





//---------------------------fungsi data rumah-----------------------------
function data_rumah(){

	global $link;

	$query="SELECT*FROM stok_rumah";
	if ($result=mysqli_query($link,$query) or die ('gagal menampilkan data')) {
		return $result;
	}
}


function data_rumah_id($id){

	global $link;

	$query="SELECT*FROM stok_rumah WHERE id='$id'";
	$result=mysqli_query($link,$query);

	return $result;
}


function tambah_rumah($tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka){

	global $link;

	$tipe=mysqli_real_escape_string($link,$tipe);
	$no_kav=mysqli_real_escape_string($link,$no_kav);
	$ukuran=mysqli_real_escape_string($link,$ukuran);
	$harga=mysqli_real_escape_string($link,$harga);
	$blok=mysqli_real_escape_string($link,$blok);
	$uang_muka=mysqli_real_escape_string($link,$uang_muka);

	$query="INSERT INTO stok_rumah(tipe,no_kav,ukuran,harga,blok,uang_muka) VALUES('$tipe','$no_kav','$ukuran','$harga','$blok','$uang_muka') ";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}
}


function edit_rumah($id,$tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka){

	global $link;

	$tipe=mysqli_real_escape_string($link,$tipe);
	$no_kav=mysqli_real_escape_string($link,$no_kav);
	$ukuran=mysqli_real_escape_string($link,$ukuran);
	$harga=mysqli_real_escape_string($link,$harga);
	$blok=mysqli_real_escape_string($link,$blok);
	$uang_muka=mysqli_real_escape_string($link,$uang_muka);

	$query="UPDATE stok_rumah SET tipe='$tipe',no_kav='$no_kav',ukuran='$ukuran',harga='$harga',blok='$blok',uang_muka='$uang_muka' WHERE id='$id'";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}

}


function hapus_rumah($id){

	global $link;

	$query="DELETE FROM stok_rumah WHERE id='$id'";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}

}


function cari_rumah($cari){

	global $link;

	$cari=mysqli_real_escape_string($link,$cari);
	
	$query="SELECT*FROM stok_rumah WHERE no_kav LIKE '%$cari%'";
	$result=mysqli_query($link,$query);

	return $result;


}




// =============FUNGSI DATA ORDER=================


function data_order(){


	global $link;

	$query="SELECT*FROM data_order ORDER BY id ASC";
	$result=mysqli_query($link,$query);

	return $result;

}


function data_order_id($id){

	global $link;

	$query="SELECT*FROM data_order WHERE id='$id'";
	$result=mysqli_query($link,$query);

	return $result;
}


function edit_order($id,$nama,$alamat,$telepon,$tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka,$tgl_order){

	global $link;

	$query="UPDATE data_order SET nama='$nama',alamat='$alamat',telepon='$telepon',tipe='$tipe',no_kav='$no_kav',ukuran='$ukuran',harga='$harga',blok='$blok',uang_muka='$uang_muka',tgl_order='$tgl_order' WHERE id='$id'";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}

}


function hapus_order($id){

	global $link;

	$query="DELETE FROM data_order WHERE id='$id'";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}


}


function cari_order($cari){

	global $link;

	$query="SELECT*FROM data_order WHERE nama LIKE '%$cari%' || no_kav LIKE '%$cari%'";
	$result=mysqli_query($link,$query);

	return $result; 

}




// function input_data($nama,$alamat,$telepon,$tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka,$tgl_order){
// 	global $link;

// 	$nama=mysqli_real_escape_string($link,$nama);
// 	$alamat=mysqli_real_escape_string($link,$alamat);
// 	$telepon=mysqli_real_escape_string($link,$telepon);

// 	$query="INSERT INTO data_order (nama,alamat,telepon,tipe,no_kav,ukuran,harga,blok,uang_muka,tgl_order) VALUES ('$nama','$alamat','$telepon','$tipe','$no_kav','$ukuran','$harga','$blok','$uang_muka','$tgl_order')";

// 	if (mysqli_query($link,$query)) {
// 		return true;
// 	}else{
// 		return false;
// 	}

// }


// ========================data_pembelian=================

function data_pembelian(){

	global $link;

	$query="SELECT*FROM data_pembelian ORDER BY id DESC";
	$result=mysqli_query($link,$query);

	return $result;


}


function data_pembelian_id($id){

	global $link;

	$query="SELECT*FROM data_pembelian WHERE id='$id'";
	$result=mysqli_query($link,$query);

	return $result;


}


function tambah_pembelian($nama,$alamat,$telepon,$tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka,$tgl_beli,$ket,$no_kw){
	global $link;

	$query="INSERT INTO data_pembelian (nama,alamat,telepon,tipe,no_kav,ukuran,harga,blok,uang_muka,tgl_beli,ket,no_kw) VALUES ('$nama','$alamat','$telepon','$tipe','$no_kav','$ukuran','$harga','$blok','$uang_muka','$tgl_beli','$ket','$no_kw')";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}

}



function edit_pembelian($id,$nama,$alamat,$telepon,$tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka,$tgl_beli,$ket){

	global $link;

	$query="UPDATE data_pembelian SET nama='$nama',alamat='$alamat',telepon='$telepon',tipe='$tipe',no_kav='$no_kav',ukuran='$ukuran',harga='$harga',blok='$blok',uang_muka='$uang_muka',tgl_beli='$tgl_beli',ket='$ket' WHERE id='$id' ";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}

}

function hapus_pembelian($id){

	global $link;

	$query="DELETE FROM data_pembelian WHERE id='$id'";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}

}


function cari_pembelian($cari){

	global $link;

	$query="SELECT*FROM data_pembelian WHERE nama LIKE '%$cari%' || no_kav LIKE '%$cari%'";
	$result=mysqli_query($link,$query);

	return $result; 

}


function no_kwitansi(){


	global $link;

	$query="SELECT MAX(no_kw) AS no_kwitansi FROM data_pembelian";
	$result=mysqli_query($link,$query) or die('cek koneksi');

	return $result;

}


//---------------------data_admin---------------

function data_admin(){

	global $link;

	$query="SELECT*FROM admin ORDER BY id DESC";
	$result=mysqli_query($link,$query);

	return $result;


}



function data_admin_id($id){

 global $link;

 		$query="SELECT*FROM admin WHERE id='$id'";
 		$result=mysqli_query($link,$query);

 		return $result;
}


function hapus_admin($id){

	global $link;

	$query="DELETE FROM admin WHERE id='$id' ";
	if (mysqli_query($link,$query)) {
		return true;
	}else {
		return false;
	}

}


function tambah_user($nama,$username,$password,$telepon,$email,$status){


	global $link;

	$nama=mysqli_real_escape_string($link,$nama);
	$username=mysqli_real_escape_string($link,$username);
	$password=mysqli_real_escape_string($link,$password);
	$telepon=mysqli_real_escape_string($link,$telepon);
	$email=mysqli_real_escape_string($link,$email);
	$status=mysqli_real_escape_string($link,$status);

	$query="INSERT INTO admin (nama,username,password,telepon,email,status) VALUES ('$nama','$username','$password','$telepon','$email','$status')";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}

}

function edit_admin($id,$nama,$username,$password,$telepon,$email,$status){

	global $link;

	$nama=mysqli_real_escape_string($link,$nama);
	$username=mysqli_real_escape_string($link,$username);
	$password=mysqli_real_escape_string($link,$password);
	$telepon=mysqli_real_escape_string($link,$telepon);
	$email=mysqli_real_escape_string($link,$email);
	$status=mysqli_real_escape_string($link,$status);

	$query="UPDATE admin SET nama='$nama',username='$username',password='$password',telepon='$telepon',email='$email',status='$status' WHERE id='$id' ";
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}



}

function cari($cari){

	global $link;

	$query="SELECT*FROM admin WHERE username LIKE '%$cari%' ";
	$result=mysqli_query($link,$query);

	return $result;

}


//====================FUNGSI LAPORAN====================

function lap_data_rumah($blok){

	global $link;

	$query="SELECT*FROM stok_rumah WHERE blok='$blok' ORDER BY id DESC";
	$result=mysqli_query($link,$query);

	return $result;
}


function lap_data_order($tgl_awal,$tgl_akhir){

	global $link;

	$query="SELECT*FROM data_order WHERE str_to_date(tgl_order,'%d-%m-%Y') BETWEEN str_to_date('$tgl_awal','%d-%m-%Y') AND str_to_date('$tgl_akhir','%d-%m-%Y')";
	$result=mysqli_query($link,$query);

	return $result;


}

function lap_data_jual($tgl_awal,$tgl_akhir){


	global $link;

	$query="SELECT*FROM data_pembelian WHERE str_to_date(tgl_beli,'%d-%m-%Y') BETWEEN str_to_date('$tgl_awal','%d-%m-%Y') AND str_to_date('$tgl_akhir','%d-%m-%Y')";
	$result=mysqli_query($link,$query);

	return $result;

}


 ?>