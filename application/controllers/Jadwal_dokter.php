<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_dokter extends CI_Controller
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
    $data[] = '';
    render5('doktermain/jadwal/index', $data);
  }
  
}
