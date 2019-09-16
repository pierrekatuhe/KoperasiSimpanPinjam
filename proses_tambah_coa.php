<?php
include 'config.php';
$no_akun = $_POST['no_akun'];
$nama_akun = $_POST['nama_akun'];
$tipe_akun = $_POST['tipe_akun'];
$saldo_normal = $_POST['saldo_normal'];
$penjelasan = $_POST['penjelasan'];
$kategori = $_POST['kategori'];

$query = mysqli_query($koneksi,'INSERT INTO tb_akun VALUES ("'.$no_akun.'","'.$nama_akun.'","'.$tipe_akun.'","'.$saldo_normal.'","'.$penjelasan.'","'.$kategori.'")');
if($query)
{
	echo "
            <script>
                alert('Berhasil menambah akun');
                document.location.href = 'coa.php';
            </script>
        ";
}
else
{
	echo "
            <script>
                alert('Gagal menambah akun!');
                document.location.href = 'tambah_coa.php';
            </script>
        ";
}
?>