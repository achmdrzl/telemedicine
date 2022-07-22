<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Doktermain extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Doktermain_model');
        $this->load->model('Dokter_model');
        $this->load->model('Pasien_model');
        $this->load->model('Konsultasi_model');
    }
    public function index()
    {
        if ($this->session->ID_DOKTER) {
            $data['jml_dokter'] = $this->Dokter_model->jumlahDokter();
            $data['jml_pasien'] = $this->Pasien_model->jumlahPasien();
            $data['jml_konsul'] = $this->Konsultasi_model->jumlahKonsul();
            render5('doktermain/index', $data);
        } else {
            render2('block');
        }
    }

    public function register()
    {
        $data['sesi'] = $this->Doktermain_model->getSesi();
        $data['jadwal'] = $this->Doktermain_model->getJadwal();
        $data['title'] = "Dokter";
        render2('doktermain/auth/register', $data);
    }

    public function register_dokter()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[1]|max_length[50]|is_unique[dokter.NAMA_DOKTER]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[50]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[25]');
        $this->form_validation->set_rules('nohp', 'nohp', 'trim|required|min_length[1]|max_length[25]');
        $this->form_validation->set_rules('spesialis', 'spesialis', 'trim|required|min_length[1]|max_length[25]');
        if ($this->form_validation->run() == true) {
            $name = $this->input->post('name');
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $nohp = $this->input->post('nohp');
            $spesialis = $this->input->post('spesialis');
            $this->Doktermain_model->register($name, $username, $password, $nohp, $spesialis);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('welcome/login');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('welcome/register');
        }
    }
}
