<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('booking/index');
    $this->load->view('template/footer');
  }
  public function detail()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('dokter/detail_booking');
    $this->load->view('template/footer');
  }
}
