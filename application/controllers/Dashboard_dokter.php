<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_dokter extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dokter_model');
    $this->load->model('Pasien_model');
    $this->load->model('Konsultasi_model');
  }
  public function index()
  {
    if ($this->session->ID_DOKTER) {
      $data['jml_dokter'] = $this->Dokter_model->jumlahDokter();
      $data['jml_pasien'] = $this->Pasien_model->jumlahPasien();
      $data['jml_konsul'] = $this->Konsultasi_model->jumlahKonsul();
      dokter('doktermain/index', $data);
    } else {
      render2('block');
    }
  }
}
