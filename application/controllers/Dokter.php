<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dokter_model');
  }

  public function index()
  {
    $data['dokter'] = $this->Dokter_model->getAllDokter();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/dokter/index', $data);
    $this->load->view('admin/template/footer');
  }
}
