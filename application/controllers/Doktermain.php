<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Doktermain extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Doktermain_model');
    }
    public function index()
    {
        $data['title'] = 'Dokter Site';
        dokterauth('doktermain/auth/login', $data);
    }

    public function register()
    {
        $data['sesi'] = $this->Doktermain_model->getSesi();
        dokterauth('doktermain/auth/register', $data);
    }

    public function process_register()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[1]|max_length[50]|is_unique[pasien.NAMA_PASIEN]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[50]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[25]');
        $this->form_validation->set_rules('nohp', 'nohp', 'trim|required|min_length[1]|max_length[25]');
        $this->form_validation->set_rules('sesi', 'sesi', 'trim|required|min_length[1]|max_length[25]');
        if ($this->form_validation->run() == false) {
            $name = $this->input->post('name');
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $nohp = $this->input->post('nohp');
            $this->auth_pasien->register($name, $username, $password, $nohp);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('doktermain/index');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('doktermain/register');
        }
    }
}
