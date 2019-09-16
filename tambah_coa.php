<?php include 'config.php'; ?>
<html>
    <head>
        <title>Koperasi Simpan Pinjam</title>
    </head>
    <body>
        <form action="proses_tambah_coa.php" method="post">
            <label>Nomor Akun</label>
            <input type="text" name="no_akun">
            <label>Nama Akun</label>
            <input type="text" name="nama_akun">
            <label>Tipe Akun</label>
            <input type="text" name="tipe_akun">
            <label>Saldo Normal</label>
            <input type="text" name="saldo_normal">
            <label>Penjelasan</label>
            <input type="text" name="penjelasan">
            <label>Kategori</label>
            <select name="kategori">
				<?php $query=mysqli_query($conn, "SELECT * FROM tb_kategori_akun");  while($row=mysqli_fetch_array($query)){ ?>
		            <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori']; ?></option>
				<?php } ?>
			</select><a href="tambah_kategori.php">Tambah Baru</a>
            <button type="submit">Save</button>
        </form>
    </body>
</html>