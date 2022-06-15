<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('dokter/index');
    $this->load->view('template/footer');
  }
  public function detail()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('dokter/detail_dokter');
    $this->load->view('template/footer');
  }
}
