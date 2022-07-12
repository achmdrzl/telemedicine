<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
    }

    public function index(){
        $data['sesi'] = $this->Book_model->getSesi();
        render4('pasien/book/index', $data);
    }

    public function getDataSesi()
    {
        $id_sesi = $this->input->post('sesi');
        $getdatasesi = $this->Book_model->getSesi($id_sesi);
        echo json_encode($getdatasesi);
    }

    public function getJadwal()
    {
        //get data
        $date = $this->input->post('tgl_konsul');
        $sesi = $this->input->post('sesi');
        //list hari to get id jadwal
        $daftar_hari = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        );

        $namahari = date('l', strtotime($date));
        //echo hari
        $day = $daftar_hari[$namahari];

        //get id jadwal
        $getJadwal = $this->Book_model->getIdJadwal($day);

        $jadwal = array(
            'ID_JADWAL' => $getJadwal->ID_JADWAL,
            'HARI' => $getJadwal->HARI,
            'KUOTA' => $getJadwal->KUOTA
        );
        
        $session = array(
            'TGL_KONSUL' => $date,
            'SESI' => $sesi,
        );
        
        $this->session->set_userdata($session);
        $id = $jadwal['ID_JADWAL'];
        $data['data'] = $this->Book_model->getDetailJadwal($id, $sesi);
        render4('pasien/book/data_dokter', $data, $date);
    }

    public function inputKel($id)
    {
        $data['detail'] = $this->Book_model->getIdDetJadwal($id);
        render4('pasien/book/keluhan', $data);
    }

    public function getKel()
    {
        $keluhan = $this->input->post('keluhan');
        $data['detail'] = $this->Book_model->getIdDetJadwal($keluhan);
        render4('pasien/book/keluhan', $data);
    }
}
