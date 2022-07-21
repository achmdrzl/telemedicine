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
    if ($this->session->ID_ADMIN) {
      $data['dokter'] = $this->Dokter_model->getAllDokter();
      render('admin/dokter/index', $data);
    } else {
      render2('block');
    }
  }
}
