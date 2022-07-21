<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Konsultasi_model');
  }
  public function index()
  {
    if ($this->session->ID_ADMIN) {
      # code...
      $data['konsultasi'] = $this->Konsultasi_model->getAllKonsul();
      render('admin/konsultasi/index', $data);
    } else {
      render2('block');
    }
  }
  public function detail()
  {
    if ($this->session->ID_ADMIN) {
      $data['konsultasi'] = $this->Konsultasi_model->getAllKonsulByID();
      render('admin/konsultasi/index', $data);
    } else {
      render2('block');
    }
  }
}
