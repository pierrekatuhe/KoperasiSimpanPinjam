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
                    <span class="s-36 my-3" >User</span>
                    <div class="float-right">
                            <a href="tambah_user" class="btn btn-success btn-icon-split mb-3">
                                <i class="fa fa-plus"></i> Tambah User
                            </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Identitas</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Jabatan</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM tb_user";
                                $sql = mysqli_query($koneksi, $query);
                                $a = 1;
                                while ($row = mysqli_fetch_array($sql)) {
                                    echo "<tr>";
                                    echo "<td>" . $a . "</td>";
                                    echo "<td>" . $row['no_id'] . "</td>";
                                    echo "<td>" . $row['nama'] . "</td>";
                                    echo "<td>" . $row['kategori'] . "</td>";
                                    echo "<td>" . $row['jabatan'] . "</td>";
                                    echo "<td>" . $row['alamat'] . "</td>";
                                    echo "<td>
                                        <a class='btn btn-primary btn-sm' href='edit_user?id=" . $row['no_id'] . "'>Edit</a>  
                                        <button class='btn btn-danger btn-sm' onclick='deleteUser(" . $row['no_id'] . ")'>Delete</button>
                                    </td>";
                                    echo "</tr>";
                                    $a++;
                                }
                                ?>
                            </tbody>
                        </table>
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
                simple_ajax("no_id="+id,'config/delete_user','','User berhasil dihapus','User gagal dihapus');
            }
        });
    }
</script>
<?php include 'template/footer.php'; ?>