<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
  public function index()
  {
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/dokter/index');
    $this->load->view('admin/template/footer');
  }
  public function detail()
  {
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/dokter/detail_dokter');
    $this->load->view('admin/template/footer');
  }
}
