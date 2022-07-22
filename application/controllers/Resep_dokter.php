<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep_dokter extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pasien_model');
    $this->load->model('Obat_model');
    $this->load->model('Konsultasi_model');
  }
  public function index()
  {
    // if ($this->session->ID_DOKTER) {
      $data['pasien'] = $this->Pasien_model->getAllPasien();
      $data['obat'] = $this->Obat_model->getAllObat();
      $data['konsultasi'] = $this->Konsultasi_model->getAllKonsul();
      render5('doktermain/resepObat/pasien', $data);
    // } else {
    //   render2('block');
    // }
  }
  public function formHasilKonsul($id){
    $data['konsul'] = $this->Konsultasi_model->getKonsultasiDetail($id);
    // echo "<pre>";
    // print_r($datakonsul);
    // echo"</pre>";
    // $DATA = array('data_konsul' => $datakonsul );
    
    render5('doktermain/resepObat/form_konsultasi', $data);
  }

  public function aksikonsul()
  {
    $data['pasien'] = $this->Pasien_model->getAllPasien();
    $data['obat'] = $this->Obat_model->getAllObat();
    $data['konsultasi'] = $this->Konsultasi_model->getAllKonsul();
      
    $id_konsul = $this->input->post('id_konsul');
    $nama_pasien = $this->input->post('nama_pasien');
    $email_pasien = $this->input->post('email_pasien');
    $hasil_konsul = $this->input->post('hasil_konsul');
    $nama_dokter= $this->input->post('nama_dokter');

    $dataUpdate = array(
      'HASIL_KONSUL' => $hasil_konsul,
    );

    $this->Konsultasi_model->konsul($dataUpdate, $id_konsul);
    render5('doktermain/resepObat/pasien', $data);
  }
}
