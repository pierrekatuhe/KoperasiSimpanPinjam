<?php 
$koneksi = mysqli_connect("localhost","root","","db_koperasi");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi Gagal : " . mysqli_connect_error();
	exit;
}
?>