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


function data_blok(){

global $link;

	$query="SELECT*FROM blok";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	
	return $result;
}


function data_rumah($blok){

	global $link;

	$query="SELECT*FROM stok_rumah WHERE blok='$blok' ";
	if ($result=mysqli_query($link,$query) or die ('gagal menampilkan data')) {
		return $result;
	}
}


function data_pilih($no_kav){
	global $link;

	$query="SELECT*FROM stok_rumah WHERE no_kav='$no_kav'";
    if($result=mysqli_query($link,$query) or die('gagal menampilkan data')){
    return $result;
}
}



function input_data($nama,$alamat,$telepon,$tipe,$no_kav,$ukuran,$harga,$blok,$uang_muka,$tgl_order){
	global $link;

	$nama=mysqli_real_escape_string($link,$nama);
	$alamat=mysqli_real_escape_string($link,$alamat);
	$telepon=mysqli_real_escape_string($link,$telepon);

	$query="INSERT INTO data_order (nama,alamat,telepon,tipe,no_kav,ukuran,harga,blok,uang_muka,tgl_order) VALUES ('$nama','$alamat','$telepon','$tipe','$no_kav','$ukuran','$harga','$blok','$uang_muka','$tgl_order')";

	if (mysqli_query($link,$query)) {
		return true;
	}else{
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

 ?>