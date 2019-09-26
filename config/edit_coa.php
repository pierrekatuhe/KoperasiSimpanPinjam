<?php
include 'config.php';
$no_akun = $_POST['no_akun'];
$nama_akun = $_POST['nama_akun'];
$tipe_akun = $_POST['tipe_akun'];
$saldo_normal = $_POST['saldo_normal'];
$penjelasan = $_POST['penjelasan'];
$kategori = $_POST['kategori'];

$query = mysqli_query($koneksi,"UPDATE tb_akun SET nama_akun='$nama_akun',tipe_akun='$tipe_akun',saldo_normal='$saldo_normal',penjelasan='$penjelasan',id_kategori='$kategori' WHERE no_akun='$no_akun'");

if(!$query){
	exit;
}

echo 1;
?>