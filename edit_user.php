<?php
include 'config/config.php';
include 'template/header.php';

$alert_err = '<script> pesan_error("Invalid No. Identitas", "Data User tidak ditemukan", "user"); </script>';

if(empty($_GET['id'])){
     echo $alert_err;
    exit;
}

$id = $_GET['id']; 
$sql="SELECT * FROM tb_user WHERE no_id='".$id."'";
$query=mysqli_query($koneksi, $sql);

$count    = mysqli_num_rows($query);
if($count<1){
    echo $alert_err;
    exit;
}

$data=mysqli_fetch_object($query);
?>

<!-- ============ Body content start ============= -->

<div class="animated fadeInUpShort my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card r-0 b-0 shadow">
                <div class="card-body">
                    <span class="s-36 my-3" >Tambah User</span>
                    <form id="frm_tambah">
                        <div class="form-group">
                            <label>Nomor Identitas</label>
                            <input type="number" value="<?= $data->no_id; ?>" readonly class="form-control" id="no_id" name="no_id">
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" value="<?= $data->nama; ?>" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="Admin" <?= selected_droplist('Admin',$data->kategori); ?>>Admin</option>
                                <option value="Operator" <?= selected_droplist('Operator',$data->kategori); ?>>Operator</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" value="<?= $data->jabatan; ?>" class="form-control" id="jabatan" name="jabatan">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" class="form-control" rows="3" id="alamat" name="alamat"><?= $data->alamat; ?></textarea>
                        </div>

                        <center>
                        <a href="user" class="btn btn-warning btn-lg" role="button" aria-pressed="true">Kembali</a>
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
    //Tambah Data User
    $('#frm_tambah').submit(function(event) { 
        var values = $(this).serialize();
	    simple_ajax(values,'config/edit_user','user','Berhasil ubah data User','Data User gagal Diubah');
	    event.preventDefault(); //Prevent the default submit
        return false; //stop
    });
</script>
<?php include 'template/footer.php'; ?>