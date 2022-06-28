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
    $data['master_pengiriman'] = $this->Pengiriman_model->ongkirWilayah();
    render('admin/pengiriman/index', $data);
  }
}
