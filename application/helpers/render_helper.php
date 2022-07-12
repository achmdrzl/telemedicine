<?php
function render($link, $data)
{
  $a = get_instance();
  $a->load->view('admin/template/header');
  $a->load->view('admin/template/sidebar');
  $a->load->view($link, $data);
  $a->load->view('admin/template/footer');
}

function render2($link)
{
  $a = get_instance();
  $a->load->view('pasien/template/header');
  $a->load->view($link);
  $a->load->view('pasien/template/footer');
}

function render2a($link, $data)
{
  $a = get_instance();
  $a->load->view('pasien/template/header');
  $a->load->view($link, $data);
  $a->load->view('pasien/template/footer');
}

function render3($link, $data)
{
  $a = get_instance();
  $a->load->view('pasien/template/header2');
  $a->load->view($link, $data);
  $a->load->view('pasien/template/footer');
}

function render4($link, $data)
{
  $a = get_instance();
  $a->load->view('pasien/template/header2');
  $a->load->view($link, $data);
  $a->load->view('pasien/template/footer');
}

function dokterauth($link, $data)
{
  $a = get_instance();
  $a->load->view('doktermain/template/pasien/header');
  $a->load->view($link, $data);
  $a->load->view('doktermain/template/pasien/footer');
}

function dokter($link)
{
  $a = get_instance();
  $a->load->view('doktermain/template/dokter/header');
  $a->load->view($link);
  $a->load->view('doktermain/template/dokter/footer');
}
