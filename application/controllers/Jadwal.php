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
    render('admin/jadwal/index', $data);
  }
  public function ubahKuota()
  {
    $this->Jadwal_model->updateKuota();
    $this->session->set_flashdata('ubah_kuota', 'diubah');
    redirect('jadwal');
  }
  public function jadwal_dokter()
  {
    $data['jadwal'] = $this->Jadwal_model->getAllJadwal();
    $data['sesi'] = $this->Sesi_model->getAllSesi();
    $data['detail'] = $this->detailJadwal_model->getJadwalByIdDokter();
    render5('doktermain/jadwal/index', $data);
  }
}
