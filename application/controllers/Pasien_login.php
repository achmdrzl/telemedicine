<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    public function getDataSesi()
    {
        $id_sesi = $this->input->post('sesi');
        $getdatasesi = $this->Pasien_model->getSesi($id_sesi);
        echo json_encode($getdatasesi);
    }

    public function getDataJadwal()
    {
        $id_jadwal = $this->input->post('jadwal');
        $getdatajad = $this->Pasien_model->getJadwal($id_jadwal);
        echo json_encode($getdatajad);
    }

    public function index()
    {
        if ($this->session->has_userdata('NAMA_PASIEN') == TRUE) {
            render3('pasien/index');
        } else {
            redirect('welcome/index');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome/index');
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
        $getJadwal = $this->Pasien_model->getIdJadwal($day);

        $jadwal = array(
            'ID_JADWAL' => $getJadwal->ID_JADWAL,
            'HARI' => $getJadwal->HARI,
            'KUOTA' => $getJadwal->KUOTA
        );

        $id = $jadwal['ID_JADWAL'];

        $data['data'] = $this->Pasien_model->getDetailJadwal($id, $sesi);
        render4('pasien/book/data_dokter', $data);
    }

    public function inputKel($id)
    {
        $data['detail'] = $this->Pasien_model->getIdDetJadwal($id);
        render4('pasien/book/keluhan', $data);
    }

    public function getKel()
    {
        $keluhan = $this->input->post('keluhan');
        $data['detail'] = $this->Pasien_model->getIdDetJadwal($keluhan);
        render4('pasien/book/keluhan', $data);
    }
}
