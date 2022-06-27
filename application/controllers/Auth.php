<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_pasien');

    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[1]|max_length[50]|is_unique[pasien.NAMA_PASIEN]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[50]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[25]');
        $this->form_validation->set_rules('nohp', 'nohp', 'trim|required|min_length[1]|max_length[25]');
        if ($this->form_validation->run() == true) {
            $name = $this->input->post('name');
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $nohp = $this->input->post('nohp');
            $this->auth_pasien->register($name, $username, $password, $nohp);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('welcome/verif');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('welcome/register');
        }

    }

    public function verif()
    {
        $this->form_validation->set_rules('otp', 'otp', 'trim|required|min_length[4]|max_length[4]');
        if ($this->form_validation->run() == true) {
            $otp = $this->input->post('otp');
            $this->auth_pasien->verif($otp);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('welcome/login');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('welcome/verif');
        }

        // $this->db->select("*");
        // $this->db->from("pasien");
        // $this->db->where('OTP', $otp);
        // $query = $this->db->get();
        // return $query->result_array();

        // if ($query == 1) 
        // {
        //     redirect('welcome/login');
        // } else {
        //     redirect('welcome/verif');
        // }

        // $pasien = $this->auth_pasien->getAll(); // memanggil method getAll
        // $data['pasien'] = $pasien; // menampung di variable $data

    }   
}
