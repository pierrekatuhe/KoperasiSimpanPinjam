<?php
include 'config.php';
$no_akun = $_POST['no_akun'];
$jenis_kredit = $_POST['jenis_kredit'];
$saldo = $_POST['saldo'];

$query = mysqli_query($koneksi,"INSERT INTO tb_kredit_salur VALUES ('$no_akun','$jenis_kredit','$saldo')");

if(!$query){
	exit;
}

echo 1;
?>