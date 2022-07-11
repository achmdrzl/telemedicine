<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ongkir extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Ongkir_model');
  }
  public function index()
  {
    $data['master_pengiriman'] = $this->Ongkir_model->ongkirWilayah();
    render('admin/ongkir/index', $data);
  }
  public function ubahOngkir()
  {
    $this->Ongkir_model->updateOngkir();
    $this->session->set_flashdata('ubah_ongkir', 'diubah');
    redirect('Ongkir');
  }
}
