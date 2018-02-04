

//---------fungsi untuk galeri gambar--------

var target_gambar = document.getElementById('target-gambar');

var array_gambar = document.getElementById('slide-gambar').children;

var no_sekarang=0;


//ganti gambar galeri

function ganti_gambar(gambar){

target_gambar.src = gambar.getAttribute('src');

no_sekarang = gambar.className;

}


function sebelumnya(){

	no_sekarang = no_sekarang-1;

	if (no_sekarang < 0) no_sekarang=2;

	target_gambar.src = array_gambar[no_sekarang].getAttribute('src');

}


function selanjutnya(){

	no_sekarang=no_sekarang+1;

	if (no_sekarang > 2)  no_sekarang=0;

	target_gambar.src= array_gambar[no_sekarang].getAttribute('src');

}
