<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter_pasien extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dokter_model');
  }

  public function index()
  {
    $data['dokter'] = $this->Dokter_model->getAllDokter();
    render2('pasien/dokter/index', $data);
  }
}