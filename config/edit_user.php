<?php
include 'config.php';
$no_id = $_POST['no_id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

$query = mysqli_query($koneksi,"UPDATE tb_user SET nama='$nama',kategori='$kategori',jabatan='$jabatan',alamat='$alamat' WHERE no_id='$no_id'");

if(!$query){
	exit;
}

echo 1;
?>