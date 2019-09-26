<?php
include 'config.php';
$no_id = $_POST['no_id'];
$pwd = $_POST['password'];

$query = mysqli_query($koneksi,'select * from tb_user where no_id = "'.$no_id.'"');
$num = mysqli_num_rows($query);

if($num < 1 ){
	echo "Username unknow";
	exit;
}

$data = mysqli_fetch_object($query);
$password = $data->password;

$verify = password_verify($pwd, $password);
if(!$verify){
	echo "Password False";
	exit;
}


$_SESSION['no_id'] = $data->no_id;
$_SESSION['nama'] = $data->nama;
$_SESSION['kategori'] = $data->kategori;

echo 1;
?>