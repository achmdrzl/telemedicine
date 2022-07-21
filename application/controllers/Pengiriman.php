<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengiriman extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pengiriman_model');
  }
  public function index()
  {
    if ($this->session->ID_ADMIN) {
      $data['pengiriman'] = $this->Pengiriman_model->getAllPengiriman();
      render('admin/pengiriman/index', $data);
    } else {
      render2('block');
    }
  }
  public function ubahOngkir()
  {
    $this->Ongkir_model->updateOngkir();
    $this->session->set_flashdata('ubah_ongkir', 'diubah');
    redirect('Ongkir');
  }
}
