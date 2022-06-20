<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengiriman extends CI_Controller
{
  public function index()
  {
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/pengiriman/index');
    $this->load->view('admin/template/footer');
  }
  public function detail()
  {
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/pengiriman/detail_pengiriman');
    $this->load->view('admin/template/footer');
  }
}
