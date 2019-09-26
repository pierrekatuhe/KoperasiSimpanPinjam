<?php
include 'config/config.php';
include 'template/header.php';

$alert_err = '<script> pesan_error("Invalid No. Identitas", "Data Akun tidak ditemukan", "coa"); </script>';

if(empty($_GET['id'])){
     echo $alert_err;
    exit;
}

$id = $_GET['id']; 
$sql="SELECT * FROM tb_akun WHERE no_akun='".$id."'";
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
                <form id="frmz">
                <div class="card-body">
                    <span class="s-36 my-3" >TAMBAH DATA COA</span>
                    <div class="container-form row">

                        <div class="col-md-6">
                            <div class="form-group">
                            <label >No. Akun</label>
                            <input name="no_akun" type="text" class="form-control" placeholder="No. Akun" value="<?= $data->no_akun; ?>" readonly>
                          </div>
                          <div class="form-group">
                            <label >Nama Akun</label>
                            <input name="nama_akun" type="text" class="form-control" placeholder="Nama Akun" value="<?= $data->nama_akun; ?>">
                          </div>
                          <div class="form-group">
                            <label >Tipe Akun</label>
                            <input name="tipe_akun" type="text" class="form-control" placeholder="Tipe Akun"  value="<?= $data->tipe_akun; ?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Saldo Normal</label>
                                <input name="saldo_normal" type="text" class="form-control" placeholder="Saldo Normal"  value="<?= $data->saldo_normal; ?>">
                              </div>
                              <div class="form-group">
                                <label >Penjelasan</label>
                                <input name="penjelasan" type="text" class="form-control" placeholder="Penjelasan"  value="<?= $data->penjelasan; ?>">
                              </div>
                              <div class="form-group">
                                <label >Kategori</label>
                                <select name="kategori" class="form-control">
                                    <?php 
                                    $idx = $data->id_kategori;
                                    $query=mysqli_query($koneksi, "SELECT * FROM tb_kategori_akun");  
                                    while($row=mysqli_fetch_array($query)){ ?>
                                        <option value="<?php echo $row['id_kategori']; ?>" <?= selected($idx,$row['id_kategori']); ?>><?php echo $row['nama_kategori'];  ?></option>
                                    <?php } ?>
                                </select>
                              </div>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center;">
                          <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
                          <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                </div>
            </form>
            </div>
        </div>
        
    </div>
</div>


<!-- ============ Body content End ============= -->
<script type="text/javascript"> 
    //Tambah Data User
    $('#frmz').submit(function(event) { 
        var values = $(this).serialize();
	    simple_ajax(values,'config/edit_coa','coa','Berhasil ubah data Akun','Data Akun gagal Diubah');
	    event.preventDefault(); //Prevent the default submit
        return false; //stop
    });
</script>
<?php include 'template/footer.php'; ?>