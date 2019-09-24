<html>
    <head>
        <title>Koperasi Simpan Pinjam</title>
    </head>
    <body>
        <a href="tambah_coa.php">Tambah Baru</a>
        <table>
            <td>
                <th>No Akun</th>
                <th>Nama Akun</th>
                <th>Tipe Akun</th>
                <th>Saldo Normal</th>
                <th>Penjelasan</th>
            </td>
            <td>
                <?php
                    include 'config.php';
                    $query = mysqli_query($koneksi,'select * from tb_akun');
                    while($row=mysqli_fetch_array($query)){
                ?>
                <th><?=$row['no_akun']?></th>
                <th><?=$row['nama_akun']?></th>
                <th><?=$row['tipe_akun']?></th>
                <th><?=$row['saldo_normal']?></th>
                <th><?=$row['penjelasan']?></th>
                    <?php } ?>
            </td>
        </table>
    </body>
</html>