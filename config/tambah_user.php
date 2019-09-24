<?php
include 'config.php';
$no_id = $_POST['no_id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$query = mysqli_query($koneksi,"INSERT INTO tb_user VALUES ('$no_id','$nama','$kategori','$jabatan','$alamat','$password')");

if(!$query){
	exit;
}

echo 1;
?>