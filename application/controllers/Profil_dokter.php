<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_dokter extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dokter_model');
  }
  public function index()
  {
    $data['detail'] = $this->Dokter_model->getDokterById($this->session->ID_DOKTER);
    dokter('doktermain/profil/index', $data);
  }
}
