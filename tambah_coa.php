<?php
include 'config/config.php';
include 'template/header.php';

?>
<style type="text/css">
    .container-form{
        padding-top: 40px;
        color: black;
    }
    label{
        font-weight: bold;
    }
</style>
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
                            <input name="no_akun" type="text" class="form-control" placeholder="No. Akun">
                          </div>
                          <div class="form-group">
                            <label >Nama Akun</label>
                            <input name="nama_akun" type="text" class="form-control" placeholder="Nama Akun">
                          </div>
                          <div class="form-group">
                            <label >Tipe Akun</label>
                            <input name="tipe_akun" type="text" class="form-control" placeholder="Tipe Akun">
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Saldo Normal</label>
                                <input name="saldo_normal" type="text" class="form-control" placeholder="Saldo Normal">
                              </div>
                              <div class="form-group">
                                <label >Penjelasan</label>
                                <input name="penjelasan" type="text" class="form-control" placeholder="Penjelasan">
                              </div>
                              <div class="form-group">
                                <label >Kategori</label>
                                <select name="kategori" class="form-control">
                                    <?php 
                                    $query=mysqli_query($koneksi, "SELECT * FROM tb_kategori_akun");  
                                    while($row=mysqli_fetch_array($query)){ ?>
                                        <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori']; ?></option>
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

<script type="text/javascript">
        
        //Edit Data Karyawan
          $('#frmz').submit(function(event) { 

            var values = $(this).serialize();
            simple_ajax(values,'config/proses_tambah_coa','','','Gagal tambah Akun');
            event.preventDefault(); //Prevent the default submit
            return false; //stop
        });
    </script>

<!-- ============ Body content End ============= -->

<?php include 'template/footer.php'; ?>