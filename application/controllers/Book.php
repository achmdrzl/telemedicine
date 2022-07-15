<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
        $this->load->model('Auth_pasien');
    }

    public function index()
    {
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

    public function getKel($id)
    {
        //get data
        $date = $this->session->TGL_KONSUL;
        $sesi = $this->session->SESI;

        //get data sesi
        $getSesi = $this->Book_model->getJam($sesi);
        $sesi = array(
            'JAM' => $getSesi->JAM
        );

        //get keluhan
        $keluhan = $this->input->post('keluhan');

        // get id_pasien
        $user = $this->session->EMAIL_PASIEN;
        $id_user = $this->auth_pasien->getUser($user);
        $user = array(
            'ID_PASIEN' => $id_user->ID_PASIEN
        );

        // get id_dokter
        $detail_jadwal = $this->Book_model->getIdDetJadwal($id);

        //generate zoom
        // include('../../config/api.php');
        // define('API_KEY', 'fNzJYpyUQ0C5z7DDZKd3PA');
        // define('API_SECRET','cFegouy1N8G9snRuRtQC8BsWKZRvMk1hoo3o');
        // define('EMAIL_ID', 'cobamining2@gmail.com');

        // $arr['topic'] = 'Konsultasi RSUD Jombang';
        // $arr['start_date'] = date($date . ' Sesi' . $sesi . ' Jam' . $sesi['JAM']);
        // $arr['duration'] = 30;
        // $arr['password'] = 'jombang';
        // $arr['type'] = '2';
        // $result = createMeeting($arr);
        // $url = $result->join_url;
        
        //insert data
        $data = array(
            'ID_PASIEN' => $user['ID_PASIEN'],
            'ID_DOKTER' => $detail_jadwal[0]['ID_DOKTER'],
            'TGL_KONSUL' => $date,
            'KELUHAN' => $keluhan,
            'BIAYA' => 100000,
            // 'LINK_ZOOM' => $url
        );

        $this->db->insert('konsultasi', $data);

        render4('pasien/book/success', $data);
    }
}
