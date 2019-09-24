<!DOCTYPE html>
<html>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel/panel-page-dashboard9.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Sep 2019 16:23:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets/img/basic/favicon.ico'); ?>" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css'); ?>">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
    
    <!-- Jquery -->
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>

    <!-- swal2 -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/sweetalert2/dist/sweetalert2.css'); ?>">
    <script src="<?= base_url('assets/vendor/sweetalert2/dist/sweetalert2.min.js'); ?>"></script>
        
    <!-- datetime -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/datetimepicker/build/css/bootstrap-datetimepicker.min.css'); ?>">

    


</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<script>
    /*
     *  Add sidebar classes (sidebar-mini sidebar-collapse sidebar-expanded-on-hover) in body tag
     *  you can remove this script tag and add classes directly to body
     *  this is only for demo
     */
    document.body.className += ' sidebar-top-offset';
</script>
<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="relative">
            <div class="user-panel p-3 user-panel-bg light text-black mb-2">
                <div class="mt-1">
                    <div class="float-left avatar avatar-md  mt-2 mr-3 image">
                        <img src="assets/img/dummy/u1.png" alt="User Image" class="">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">Piere Davidson</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header light mt-3"><strong>MAIN NAVIGATION</strong></li>
            
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package s-18"></i>
                <span>Dashboard</span>
            </a>
            </li>
            
            <?php if($_SESSION['kategori']=="Admin"){ ?>
            <li class="header light mt-3"><strong>ADMIN PANEL</strong></li>
            <li class="treeview"><a href="user"><i class="icon icon-account_box s-18"></i>Users</a></li>
            <?php } ?>

            <li class="header light mt-3"><strong>REFERENSI</strong></li>
            <li class="treeview"><a href="profil_perusahaan"><i class="icon icon-work s-18"></i>Profil Perusahaan</a></li>
            <li class="treeview"><a href="coa"><i class="icon icon-account_box s-18"></i>Daftar dan Penjelasan Akun</a></li>
            <li class="treeview"><a href="kebijakan_akuntansi"><i class="icon icon-gavel s-18"></i>Kebijakan Akuntansi</a></li>
            <li class="treeview"><a href="#"><i class="icon icon-list s-18"></i>Daftar Kreditor</a></li>
            <li class="treeview"><a href="#"><i class="icon icon-list s-18"></i>Daftar Debitor</a></li>
            <li class="treeview"><a href="kredit_salur"><i class="icon icon-payment s-18"></i>Daftar Kredit yang Disalurkan</a></li>
        </ul>
    </section>
</aside>
<!--Sidebar End-->
<div class="sticky">
    <div class="d-lg-flex">
        <div class="relative indigo lighten-2 brand-wrapper">
            <div class="d-flex">
                <div class="text-xs-center">
                    <div class="w-80px mt-3 mb-3 ml-3">
                        <img src="assets/img/basic/logo-white.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-fill">
            <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white shadow ">
                <div>
                    <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                        <i></i>
                    </a>
                </div>
                <!--Top Menu Start -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        
        <!-- Notifications -->
        <li class="dropdown custom-dropdown notifications-menu">
            <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-notifications "></i>
                <span class="badge badge-danger badge-mini rounded-circle">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li class="header">You have 1 notifications</li>
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                       
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-yellow"></i> Test otif
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer p-2 text-center"><a href="#">View all</a></li>
            </ul>
        </li>
       
        <!-- User Account-->
        <li class="dropdown custom-dropdown user user-menu ">
            <a href="#" class="nav-link" data-toggle="dropdown">
                <img src="assets/img/dummy/u8.png" class="user-image" alt="User Image">
                <i class="icon-more_vert "></i>
            </a>
            <div class="dropdown-menu p-4 dropdown-menu-right">
                
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-user green lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Profile</div>
                        </a>
                    </div>
                    <div class="col"><a href="#">
                        <i class="icon-lock blue lighten-1 avatar  r-5"></i>
                        <div class="pt-1">Update Passwword</div>
                    </a></div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-arrow_forward red lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Logout</div>
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
            </div>
        </div>
    </div>
</div>
<div class="page ">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
    <div class="has-sidebar-left">
    <div class="container-fluid animatedParent animateOnce">
        