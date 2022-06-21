<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dokter_model');
    $this->load->model('Jadwal_model');
    $this->load->model('Sesi_model');
    $this->load->model('detailJadwal_model');
  }
  public function index()
  {
    $data['dokters'] = $this->Dokter_model->getAllDokter();
    $data['jadwal'] = $this->Jadwal_model->getAllJadwal();
    $data['sesi'] = $this->Sesi_model->getAllSesi();
    $data['detail'] = $this->detailJadwal_model->getAllDetailJadwal();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/jadwal/index', $data);
    $this->load->view('admin/template/footer');
  }
  public function ubahKuota()
  {
    $this->Jadwal_model->updateKuota();
    redirect('jadwal');
  }
}
