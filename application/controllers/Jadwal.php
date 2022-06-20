<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
  public function index()
  {
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/jadwal/index');
    $this->load->view('admin/template/footer');
  }
  public function detail()
  {
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/jadwal/detail_jadwal');
    $this->load->view('admin/template/footer');
  }
}
