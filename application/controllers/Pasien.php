<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pasien_model');
  }
  public function index()
  {
    $data['pasien'] = $this->Pasien_model->getAllPasien();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/pasien/index', $data);
    $this->load->view('admin/template/footer');
  }
  public function detail($id)
  {
    $data['detail_pasien'] = $this->Pasien_model->getPasienByID($id);
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/pasien/detail_pasien', $data);
    $this->load->view('admin/template/footer');
  }
}
