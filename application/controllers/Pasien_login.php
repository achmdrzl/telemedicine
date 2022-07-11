<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->library('form_validation');
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
        $data['sesi'] = $this->Pasien_model->getSesi();
        render4('pasien/index', $data);

        // if ($this->session->has_userdata('logged')) {
        //     render3('pasien/index');
        // } else {
        //     redirect('welcome/index');
        // }
        // if ($this->session->has_userdata('logged')) {
        //     $user = $this->session->userdata('logged');
        //     render3('pasien/index', array('logged' => $user));
        // } else {
        //     redirect('welcome/index');
        // }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome/index');
    }

    public function profile()
    {
        $username = $this->session->EMAIL_PASIEN;

        $data = $this->auth_pasien->getUser2($username);
        $id = $data->ID_PASIEN;
        $user['pasien'] = $this->Pasien_model->getPasienByID($id);
        render4('pasien/profile/index', $user); 

        // $data['pasien'] = $this->Pasien_model->getPasienByID($id);
        // render4('pasien/profile/index', $data);
    }

    public function editProfile($id)
    {
        $this->form_validation->set_rules('kelahiran', 'Kelahiran', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|exact_length[16]');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('gol', 'Golongan Darah', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['pasien'] = $this->Pasien_model->getPasienByID($id);
            $data['pekerjaan'] = $this->Pasien_model->getPekerjaan();
            $data['gol'] = $this->Pasien_model->getGol();
            $data['provinsi'] = $this->Pasien_model->getProv();
            render4('pasien/profile/edit_profile', $data);
        } else {
            $this->Pasien_model->updateProfile($id);
            redirect('pasien_login/profile/' . $id);
        }
    }

    public function getDataKabupaten()
    {
        $id_provinsi = $this->input->post('provinsi');
        $getdatakab = $this->Pasien_model->getKota($id_provinsi);
        echo json_encode($getdatakab);
    }

    public function getDataKecamatan()
    {
        $id_kabupaten = $this->input->post('kabupaten');
        $getdatakec = $this->Pasien_model->getKecamatan($id_kabupaten);
        echo json_encode($getdatakec);
    }

    public function getDataKelurahan()
    {
        $id_kecamatan = $this->input->post('kecamatan');
        $getdatakel = $this->Pasien_model->getKelurahan($id_kecamatan);
        echo json_encode($getdatakel);
    }

    public function getJadwal(){
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

    public function inputKel($id){
        $data['detail'] = $this->Pasien_model->getIdDetJadwal($id);
        render4('pasien/book/keluhan', $data);
    }

    public function getKel(){
        $keluhan = $this->input->post('keluhan');
        $data['detail'] = $this->Pasien_model->getIdDetJadwal($keluhan);
        render4('pasien/book/keluhan', $data);
    }

}
