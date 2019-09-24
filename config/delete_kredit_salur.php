<?php
include 'config.php';
$id_kredit_salur = $_POST['id_kredit_salur'];

$query = mysqli_query($koneksi,"DELETE FROM tb_kredit_salur WHERE id_kredit_salur='$id_kredit_salur'");

if(!$query){
	exit;
}

echo 1;
?>