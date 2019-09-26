<?php
include 'config/config.php';
include 'template/header.php';

?>

<!-- ============ Body content start ============= -->
<style type="text/css">
    .pad{
        margin-bottom: 15px; 
    }
</style>
<div class="animated fadeInUpShort my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card r-0 b-0 shadow">
                <div class="card-body">
                    <span class="s-36 my-3" > <center> Profile Perusahaan </center> </span>
                    <div>
                        <div class="container-form container-fluid">
        
<ul id="clothing-nav" class="nav nav-tabs" role="tablist">
    
<li class="nav-item">
<a class="nav-link active" href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Umum</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#hats" role="tab" id="hats-tab" data-toggle="tab" aria-controls="hats">STRUKTUR PERMODALAN 
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#pengurus" role="tab" id="hats-tab" data-toggle="tab" aria-controls="hats">SUSUNAN PENGURUS
</a>
</li>

</ul>
<div class="pad"></div>
<!-- Content Panel -->
<div id="clothing-nav-content" class="tab-content ">

<div role="tabpanel" class="tab-pane fade show active" id="home" aria-labelledby="home-tab">
    <center>
    <img style="padding-bottom: 30px; width: 50%; height: auto;" src="<?= base_url('assets/img/dream.jpg'); ?>" ></center>
    <p>
<font size="20pt" style="margin-left: 30px;">K</font>operasi Karyawan Pemukiman BIDA didirikan dengan Akte Notaris Erry Chandra, Sarjana Hukum, Notaris di Batam dengan nomor 34 tanggal 18 Oktober 2006.  Maksud dan tujuan koperasi adalah untuk meningkatkan kesejahteraan dan taraf hidup anggota pada khususnya dan masyarakat pada umumnya, menjadikan gerakan ekonomi rakyat serta ikut membangun tatanan perekonomian nasional. Untuk mencapai maksud dan tujuan diatas, maka koperasi menyelenggarakan kegiatan usaha yang berkaitan dengan kegiatan usaha anggota dibidang Jasa Transportasi / Angkutan, Jasa Konstruksi dan Developer, Jasa Distributor dan Suplier, Jasa Konsultan dan Manajemen, Jasa Travel Biro Perjalanan dan Ticketing, Jasa Telekomunikasi dan Penyiaran, Mewajibkan dan menggiatkan anggota untuk menyimpan pada koperasi secara teratur, Menyediakan bahan pokok kebutuhan primer dan sekunder bagi anggota, perdagangan umum dan Waserda, Percetakan, Jasa Angkutan, Travel Biro dan Penyewaan Kendaraan, Kerjasama antar koperasi, sektor pemerintah dan swasta dalam usaha lain yang saling menguntungkan, Simpan Pinjam untuk kepentingan anggota serta menambah pengetahuan anggota tentang perkoperasian.    
</p>
</div>

<div role="tabpanel" class="tab-pane fade" id="hats" aria-labelledby="hats-tab">
<p>Struktur Permodalan </p>
</div>

<div role="tabpanel" class="tab-pane fade" id="pengurus" aria-labelledby="hats-tab">
<p>Susunan Pengurus </p>
</div>


</div>


</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


<!-- ============ Body content End ============= -->

<?php include 'template/footer.php'; ?>