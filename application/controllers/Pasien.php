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
    if ($data['detail_pasien']) {
      render('admin/pasien/detail', $data);
    } else {
      render('admin/pasien/error', $data);
    }
  }
  public function verifikasi($id)
  {
    $this->Pasien_model->updateStatus($id);
    $this->session->set_flashdata('verifikasi', 'diverifikasi');
    redirect('pasien');
  }
  public function tolak($id)
  {
    $this->Pasien_model->tolakAkun($id);
    redirect('pasien');
  }
}
