<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('konsultasi/index');
    $this->load->view('template/footer');
  }
  public function detail()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('konsultasi/detail_konsultasi');
    $this->load->view('template/footer');
  }
}
