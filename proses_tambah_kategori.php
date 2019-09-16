<?php
include 'config.php';
$nama_kategori = $_POST['nama_kategori'];

$query = mysqli_query($koneksi,'INSERT INTO tb_kategori_akun(nama_kategori) VALUES ("'.$nama_kategori.'")');
if($query)
{
	echo "
            <script>
                alert('Berhasil menambah kategori');
                document.location.href = 'tambah_coa.php';
            </script>
        ";
}
else
{
	echo "
            <script>
                alert('Gagal menambah kategori!');
                document.location.href = 'tambah_kategori.php';
            </script>
        ";
}
?>