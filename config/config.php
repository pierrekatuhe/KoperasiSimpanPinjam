<?php 
//start session
session_start();

//koneksi ----------------------------------------------------
	$koneksi = mysqli_connect("localhost","root","","db_koprasi");

	// Check connection
	if (mysqli_connect_errno()){
		echo "Koneksi Gagal : " . mysqli_connect_error();
		exit;
	}

//end koneksi ------------------------------------------------

//base url ---------------------------------------------------
function base_url($uri=null){
	$base_url = 'http://localhost/KoperasiSimpanPinjam/';
	if($uri == null){
		return $base_url;
	}else{
		return $base_url.$uri;
	}
}

//end base url ------------------------------------------------

//404-------------------------------------------------------
function selected_droplist($a1,$a2){
	if($a1==$a2){
		return 'Selected';
	}else{
		return 0;
	}
}
//--------------------------------------------------------

?>