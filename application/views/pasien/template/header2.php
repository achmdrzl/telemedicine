<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
    <link href="<?php echo base_url() ?>assets/pasien/images/favicon/favicon2.png" rel="icon">
    <title>Medcity - Medical Healthcare HTML5 Template</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/pasien/css/libraries.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/pasien/css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div><!-- /.preloader -->

        <!-- =========================
        Header
    =========================== -->
        <header class="header header-layout1">
            <div class="header-topbar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                    <li>
                                        <button class="miniPopup-emergency-trigger" type="button">24/7 Emergency</button>
                                        <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                                            <div class="emergency__icon">
                                                <i class="icon-call3"></i>
                                            </div>
                                            <a href="tel:+201061245741" class="phone__number">
                                                <i class="icon-phone"></i> <span> (0321) 863502</span>
                                            </a>
                                            <p>Please feel free to contact our friendly reception staff with any general or medical enquiry.
                                            </p>
                                            <a href="appointment.html" class="btn btn_secondary btnlink btn_block">
                                                <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                                            </a>
                                        </div><!-- /.miniPopup-emergency -->
                                    </li>
                                    <li>
                                        <i class="icon-phone"></i><a href="tel:+5565454117">Panggilan Darurat: (0321) 863502</a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a href="#">Lokasi: Jombang, Jawa Timur</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00 pm</a>
                                    </li>
                                </ul><!-- /.contact__list -->
                                <div class="d-flex">
                                    <ul class="social-icons list-unstyled mb-0 mr-30">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                    <form class="header-topbar__search">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">
                        <img src="<?php echo base_url() ?>assets/pasien/images/logo/logo2.svg" class="logo-light" alt="logo">
                        <img src="<?php echo base_url() ?>assets/pasien/images/logo/logo2.svg" class="logo-dark" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item">
                                <a href="<?php echo site_url('welcome/index') ?>" class="nav__item-link">Beranda</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="#" data-toggle="dropdown" class="nav__item-link">Tentang Kami</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="#" data-toggle="dropdown" class="nav__item-link">Dokter</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Layanan</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="blog.html" class="nav__item-link">Konsultasi Online</a>
                                    </li><!-- /.nav-item -->
                                </ul><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                            <li class="nav__item has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Informasi</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="shop.html" class="nav__item-link">Alur Pelayanan</a>
                                    </li><!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="shop-single-product.html" class="nav__item-link">Hubungi Kami</a>
                                    </li><!-- /.nav-item -->
                                </ul><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item -->
                        </ul><!-- /.navbar-nav -->
                        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
                    </div><!-- /.navbar-collapse -->
                    <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                        <a href="<?php echo site_url('welcome/login') ?>" class="btn btn_primary btn_rounded ml-30">
                            <i class="icon-arrow-right"></i>
                            <span>Login</span>
                        </a>
                    </div>
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header -->