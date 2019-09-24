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
                    <span class="s-36 my-3" >Tambah User</span>
                    <form id="frm_tambah">
                        <div class="form-group">
                            <label>Nomor Identitas</label>
                            <input type="number" class="form-control" id="no_id" name="no_id">
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="Admin">Admin</option>
                                <option value="Operator">Operator</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" class="form-control" rows="3" id="alamat" name="alamat"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" name="password">
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
	    simple_ajax(values,'config/tambah_user','user','Berhasil menambah data User','Data User gagal Ditambah');
	    event.preventDefault(); //Prevent the default submit
        return false; //stop
    });
</script>
<?php include 'template/footer.php'; ?>