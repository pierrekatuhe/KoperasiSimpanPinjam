<?php
include 'config/config.php';
include 'template/header.php';

?>

<!-- ============ Body content start ============= -->

<div class="animated fadeInUpShort my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card r-0 b-0 shadow">
                <div class="card-body">
                    <span class="s-36 my-3" >Tambah Kredit yang Disalurkan</span>
                    <form id="frm_tambah">
                        <div class="form-group">
                            <label>Nomor Akun</label>
                            <select class="form-control" id="no_akun" name="no_akun">
                                <?php
                                    $query = "SELECT * FROM tb_akun";
                                    $sql = mysqli_query($koneksi, $query);
                                    $count = mysqli_num_rows($query);
                                    if($count<1)
                                        echo "<option value='0'>Tidak ada Akun</option>";
                                    else
                                        while ($row = mysqli_fetch_array($sql))
                                            echo "<option value=" . $row['no_akun'] . ">" . $row['nama_akun'] . "</option>";
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kredit</label>
                            <input type="text" class="form-control" id="jenis_kredit" name="jenis_kredit">
                        </div>

                        <div class="form-group">
                            <label>Saldo</label>
                            <input type="text" class="form-control" id="saldo" name="saldo">
                        </div>

                        <center>
                        <a href="kredit_salur" class="btn btn-warning btn-lg" role="button" aria-pressed="true">Kembali</a>
                        <button type="submit" class="btn btn-success btn-lg">Simpan</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ============ Body content End ============= -->
<script type="text/javascript"> 
    //Tambah Data Kredit
    $('#frm_tambah').submit(function(event) { 
        var values = $(this).serialize();
	    simple_ajax(values,'config/tambah_kredit_salur','kredit_salur','Berhasil menambah data Kredit yang Disalurkan','Data Kredit yang Disalurkan gagal Ditambah');
	    event.preventDefault(); //Prevent the default submit
        return false; //stop
    });
</script>
<?php include 'template/footer.php'; ?>