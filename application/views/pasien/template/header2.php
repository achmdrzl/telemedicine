<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Telemedicine RSUD Kabupaten Jombang">
    <link href="<?php echo base_url() ?>assets/pasien/images/favicon/favicon2.png" rel="icon">
    <title>Telemedicine RSUD Kabupaten Jombang</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/pasien/css/libraries.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/pasien/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/pasien/css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="<?= base_url('assets/pasien/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .cookiesContent {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            color: #000;
            text-align: center;
            border-radius: 20px;
            padding: 30px 30px 70px;
        }

        .img-edit {
            width: 40%;
            height: 40%;
            object-fit: cover;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div>
        <!-- /.preloader -->

        <!-- =========================
        Header
    =========================== -->
        <header class="header header-layout1">
            <div class="header-topbar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between mt-3">
                                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                    <li>
                                        <i class="icon-phone"></i><a href="#">Panggilan Darurat: (0321) 863502</a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a href="#">Lokasi: Jombang, Jawa Timur</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i><a href="">Senin-Jumat : 07.00-15.00 WIB</a>
                                    </li>
                                </ul><!-- /.contact__list -->
                                <div class="d-flex">
                                    <ul class="social-icons list-unstyled mb-0 mr-30 text-white">
                                        Selamat Datang, <?= $this->session->NAMA_PASIEN; ?>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo site_url('pasien_login/index') ?>">
                        <img src="<?php echo base_url() ?>assets/pasien/images/logo/logo2.svg" class="logo-light" alt="logo">
                        <img src="<?php echo base_url() ?>assets/pasien/images/logo/logo2.svg" class="logo-dark" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item">
                                <a href="<?php echo site_url('pasien_login/index') ?>" class="nav__item-link">Beranda</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="<?= site_url() ?>tentang_kami/about" class="nav__item-link">Tentang Kami</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="<?= site_url('dokter_pasien/index2') ?>" class="nav__item-link">Dokter</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Layanan</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="<?= site_url('book/index') ?>" class="nav__item-link">Konsultasi Online</a>
                                    </li><!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="<?= site_url('') ?>" class="nav__item-link">Pembayaran Konsultasi</a>
                                    </li><!-- /.nav-item -->
                                </ul><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                            <li class="nav__item has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Informasi</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="<?= site_url(); ?>alur_pasien/Alur" class="nav__item-link">Alur Pelayanan</a>
                                    </li><!-- /.nav-item -->
                                </ul><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                        </ul><!-- /.navbar-nav -->
                        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
                    </div><!-- /.navbar-collapse -->
                    <div class="d-none d-xl-flex align-items-center ml-30">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item has-dropdown">
                                <a href="#" data-toggle="dropdown" class="btn btn__primary btn__rounded ml-30"><i class="icon-user"></i>
                                    <span>Profile <?php echo $this->session->NAMA_PASIEN; ?></span></a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="<?php echo site_url('profil_pasien'); ?>" class="nav__item-link">Informasi Akun</a>
                                    </li><!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="<?php echo site_url('pasien_login/logout') ?>" class="nav__item-link">Log Out</a>
                                    </li><!-- /.nav-item -->
                                </ul><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                        </ul><!-- /.navbar-nav -->
                    </div>
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header -->
        <!-- <div class="cek-status" data-flashdata="<?php echo $this->session->flashdata('message'); ?>" style="z-index:99999;"></div> -->
        <?php echo $this->session->flashdata('message'); ?>
        <!-- ========== Start Modal Alert ========== -->
        <!-- <div class="modal animated fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered w-80">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="cookiesContent" id="cookiesPopup">
                            <img class="img-edit mb-4" src="https://cdn-icons-png.flaticon.com/512/1047/1047711.png" alt="cookies-img" />
                            <h6 class="member__name mt-2"><a href="#">Harap Lengkapi Data Diri Anda Sebelum Melakukan Konsultasi</a></h6>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- ========== End Modal Alert ========== -->