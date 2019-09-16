<?php
include 'config.php';
$no_id = $_POST['no_id'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,'select * from tb_user where no_id = "'.$no_id.'" AND password ="'.$password.'"');
if(mysqli_num_rows($query) > 0)
{
	$data = mysqli_fetch_object($query);
	$_SESSION['no_id'] = $data->no_id;
	$_SESSION['nama'] = $data->nama;
	$_SESSION['kategori'] = $data->kategori;

	echo "
            <script>
                document.location.href = 'home.php';
            </script>
        ";
}
else
{
	echo "
            <script>
                alert('Nomor Identitas atau Password Salah!');
                document.location.href = 'index.php';
            </script>
        ";
}
?>