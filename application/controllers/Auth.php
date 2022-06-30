<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function proses()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('confirmpassword', 'confirmpassword', 'trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run() == true) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->auth_pasien->register($username, $password);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('welcome/login');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('welcome/register');
        }
    }
}
