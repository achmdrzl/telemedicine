<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
  public function index()
  {
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/pasien/index');
    $this->load->view('admin/template/footer');
  }
  public function detail()
  {
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/pasien/detail_pasien');
    $this->load->view('admin/template/footer');
  }
}
