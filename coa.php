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
    th{
      font-weight: bold;
    }
</style>
<!-- ============ Body content start ============= -->

<div class="animated fadeInUpShort my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card r-0 b-0 shadow">
                <div class="card-body">
                    <span class="s-36 my-3" >DATA COA</span>
                    <div class="container-form table-responsive ">
                      <table class="table table-striped table-hovered table-bordered dataTable" >
                       <thead><tr>
                            <th>No Akun</th>
                            <th>Nama Akun</th>
                            <th>Tipe Akun</th>
                            <th>Saldo Normal</th>
                            <th>Penjelasan</th>
                       </tr></thead>

                            <?php
                                include 'config.php';
                                $query = mysqli_query($koneksi,'select * from tb_akun');
                                while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                            <td><?=$row['no_akun']?></td>
                            <td><?=$row['nama_akun']?></td>
                            <td><?=$row['tipe_akun']?></td>
                            <td><?=$row['saldo_normal']?></td>
                            <td><?=$row['penjelasan']?></td>
                                <?php } ?>
                            </tr>
                        
                    </table>
                    </div>
                    <div class="form-group" style="text-align: center;">
                          <button onclick="window.location = 'tambah_coa'; " class="btn btn-success">Tambah Data</button>
                      </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


<!-- ============ Body content End ============= -->

<?php include 'template/footer.php'; ?>