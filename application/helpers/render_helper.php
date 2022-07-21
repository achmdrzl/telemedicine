<?php

/* Render Admin */
function render($link, $data)
{
  $a = get_instance();
  $a->load->view('admin/template/header');
  $a->load->view('admin/template/sidebar');
  $a->load->view($link, $data);
  $a->load->view('admin/template/footer');
}

/* Render Pasien Belum Login */
function render2($link)
{
  $a = get_instance();
  $a->load->view('pasien/template/header');
  $a->load->view($link);
  $a->load->view('pasien/template/footer');
}

/* Render Pasien Belum Login */
function render2a($link, $data)
{
  $a = get_instance();
  $a->load->view('pasien/template/header');
  $a->load->view($link, $data);
  $a->load->view('pasien/template/footer');
}

/* Render Pasien Sudah Login */
function render3($link)
{
  $a = get_instance();
  $a->load->view('pasien/template/header2');
  $a->load->view($link);
  $a->load->view('pasien/template/footer');
}

/* Render Pasien Sudah Login */
function render4($link, $data)
{
  $a = get_instance();
  $a->load->view('pasien/template/header2', $data);
  $a->load->view($link, $data);
  $a->load->view('pasien/template/footer');
}

// dokter sudah login
function render5($link, $data)
{
  $a = get_instance();
  $a->load->view('doktermain/template/dokter/header');
  $a->load->view('doktermain/template/dokter/sidebar');
  $a->load->view($link, $data);
  $a->load->view('admin/template/footer');
}

function dokter($link, $data)
{
  $a = get_instance();
  $a->load->view('doktermain/template/dokter/header');
  $a->load->view('doktermain/template/dokter/sidebar');
  $a->load->view($link, $data);
  $a->load->view('doktermain/template/dokter/footer');
}
