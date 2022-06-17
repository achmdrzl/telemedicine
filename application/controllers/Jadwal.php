<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('jadwal/index');
    $this->load->view('template/footer');
  }
  public function detail()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('jadwal/detail_jadwal');
    $this->load->view('template/footer');
  }
}
