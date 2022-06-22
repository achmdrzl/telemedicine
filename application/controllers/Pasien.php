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
    render('admin/pasien/index', $data);
  }
  public function detail($id)
  {
    $data['detail_pasien'] = $this->Pasien_model->getPasienByID($id);
    render('admin/pasien/detail_pasien', $data);
  }
}
