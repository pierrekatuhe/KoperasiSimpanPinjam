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
                    <span class="s-36 my-3" >DATA COA</span>
                    <div class="float-right">
                            <button onclick="window.location = 'tambah_coa'; " class="btn btn-success">Tambah </button>
                    </div>
                    <div class="container-form table-responsive ">
                      <table class="table table-striped table-hovered table-bordered dataTable" >
                       <thead><tr>
                            <th>No Akun</th>
                            <th>Nama Akun</th>
                            <th>Tipe Akun</th>
                            <th>Saldo Normal</th>
                            <th>Penjelasan</th>
                            <th>Config</th>
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
                            <td>
                                        <a class='btn btn-primary btn-sm' href='edit_coa?id=<?= $row['no_akun']; ?>'>Edit</a>  
                                        <button class='btn btn-danger btn-sm' onclick="deleteUser(<?= $row['no_akun']; ?>)">Delete</button>
                                    </td>
                                <?php } ?>
                            </tr>
                        
                    </table>
                    </div>
                    <div class="form-group" style="text-align: center;">
                          
                      </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


<!-- ============ Body content End ============= -->
<script type="text/javascript"> 
    function deleteUser(id){
        pesan_confirm("Apakah anda yakin?", "Data yang telah dihapus tidak dapat dikembalikan", "Ya, Hapus").then((result) => {
            //eksekusi
            if(result===true){
                simple_ajax("no_akun="+id,'config/delete_coa','','User berhasil dihapus','User gagal dihapus');
            }
        });
    }
</script>

<?php include 'template/footer.php'; ?>