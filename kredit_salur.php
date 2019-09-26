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
                    <span class="s-36 my-3" >Kredit yang Disalurkan</span>
                    <div class="float-right">
                            <a href="tambah_kredit_salur" class="btn btn-success btn-icon-split mb-3">
                                <i class="fa fa-plus"></i> Tambah 
                            </a>
                    </div>
                    <div class="container-form  table-responsive">
                        <table class="table table-bordered table-hover table-striped dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Akun</th>
                                    <th>Nama Akun</th>
                                    <th>Jenis Kredit</th>
                                    <th>Saldo</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM tb_kredit_salur, tb_akun WHERE tb_kredit_salur.no_akun=tb_akun.no_akun";
                                $sql = mysqli_query($koneksi, $query);
                                $a = 1;
                                while ($row = mysqli_fetch_array($sql)) {
                                    echo "<tr>";
                                    echo "<td>" . $a . "</td>";
                                    echo "<td>" . $row['no_akun'] . "</td>";
                                    echo "<td>" . $row['nama_akun'] . "</td>";
                                    echo "<td>" . $row['jenis_kredit'] . "</td>";
                                    echo "<td>" . $row['saldo'] . "</td>";
                                    echo "<td>
                                        <a class='btn btn-primary btn-sm' href='edit_kredit_salur?id=" . $row['id_kredit_salur'] . "'>Edit</a>  
                                        <button class='btn btn-danger btn-sm' onclick='deleteKreditSalur(" . $row['id_kredit_salur'] . ")'>Delete</button>
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
    function deleteKreditSalur(id){
        pesan_confirm("Apakah anda yakin?", "Data yang telah dihapus tidak dapat dikembalikan", "Ya, Hapus").then((result) => {
            //eksekusi
            if(result===true){
                simple_ajax("id_kredit_salur="+id,'config/delete_kredit_salur','','Kredit yang disalurkan berhasil dihapus','Kredit yang disalurkan gagal dihapus');
            }
        });
    }
</script>
<?php include 'template/footer.php'; ?>