<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep_dokter extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pasien_model');
    $this->load->model('Obat_model');
  }
  public function index()
  {
    if ($this->session->ID_DOKTER) {
      $data['pasien'] = $this->Pasien_model->getAllPasien();
      $data['obat'] = $this->Obat_model->getAllObat();
      render5('doktermain/resepObat/pasien', $data);
    } else {
    }
  }
}
