<?php
include 'config.php';
$no_id = $_POST['no_id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_user WHERE no_id='$no_id'");

if(!$query){
	exit;
}

echo 1;
?>