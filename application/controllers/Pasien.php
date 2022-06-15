<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pasien/index');
    $this->load->view('template/footer');
  }
  public function detail()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pasien/detail_pasien');
    $this->load->view('template/footer');
  }
}
