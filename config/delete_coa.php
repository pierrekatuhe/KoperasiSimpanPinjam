<?php
include 'config.php';
$no_akun = $_POST['no_akun'];

$query = mysqli_query($koneksi,"DELETE FROM tb_akun WHERE no_akun='$no_akun'");

if(!$query){
	exit;
}

echo 1;
?>