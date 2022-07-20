<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
  <link href="<?php echo base_url() ?>assets/pasien/images/favicon/favicon2.png" rel="icon">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/pasien/css/libraries.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/pasien/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/pasien/css/style2.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <script src="<?= base_url('assets/pasien/js/jquery-3.5.1.min.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <title><?= $title; ?></title>
  <style>
    .multiselect {
      width: 200px;
    }

    .selectBox {
      position: relative;
    }

    .selectBox select {
      width: 100%;
      font-weight: bold;
    }

    .overSelect {
      position: absolute;
      left: 0;
      right: 0;
      top: 5;
      bottom: 0;
    }

    #checkboxes {
      display: none;
      border: 1px #dadada solid;
    }

    #checkboxes label {
      display: block;
    }

    #checkboxes label:hover {
      background-color: #1e90ff;
    }
  </style>
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
              <div class="d-flex align-items-center justify-content-between mt-3">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0 my-auto">
                  <li>
                    <i class="icon-phone"></i><a href="#">Panggilan Darurat: (0321) 863502</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="#">Lokasi: Jombang, Jawa Timur</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="#">Senin-Jumat : 07.00-15.00 WIB</a>
                  </li>
                </ul><!-- /.contact__list -->
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <!-- <div class="container-fluid"> -->
        <a class="navbar-brand" href="index.html">
          <<img class="logo-abbr" src="<?= base_url('assets/admin/images/logo/rsud jombang.png') ?>" style="width:80px;">
            <img class="brand-title" src="<?= base_url('assets/admin/images/logo/nama.png') ?>" style="width:100%;">
        </a>
        <button class="navbar-toggler" type="button">
          <span class="menu-lines"><span></span></span>
        </button>
  </div><!-- /.container -->
  </nav><!-- /.navabr -->
  </header><!-- /.Header -->