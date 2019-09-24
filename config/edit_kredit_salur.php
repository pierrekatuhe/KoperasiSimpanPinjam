<?php
include 'config.php';
$id_kredit_salur = $_POST['id_kredit_salur'];
$no_akun = $_POST['no_akun'];
$jenis_kredit = $_POST['jenis_kredit'];
$saldo = $_POST['saldo'];

$query = mysqli_query($koneksi,"UPDATE tb_kredit_salur SET no_akun='$no_akun',jenis_kredit='$jenis_kredit',saldo='$saldo' WHERE id_kredit_salur='$id_kredit_salur'");

if(!$query){
	exit;
}

echo 1;
?>