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
    $data['konsultasi'] = $this->Konsultasi_model->getAllKonsul();
    render('admin/konsultasi/index', $data);
  }
  public function detail()
  {
    $data['konsultasi'] = $this->Konsultasi_model->getAllKonsulByID();
    render('admin/konsultasi/index', $data);
  }
}
