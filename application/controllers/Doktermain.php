<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function index()
    {
        render2('dokter/auth/login');
    }

    public function registerdokter()
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

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = $this->auth_pasien->login($username, $password);

        $user = $this->auth_pasien->getUser2($username);

        $session = array(
            'ID_PASIEN' => $user->ID_PASIEN,
            'NAMA_PASIEN' => $user->NAMA_PASIEN,
            'EMAIL_PASIEN' => $user->EMAIL_PASIEN,
            'HP_PASIEN' => $user->HP_PASIEN
        );
        if ($data->num_rows() > 0) {
            $this->session->set_userdata($session);
            redirect('pasien_login/index');
        } else {  // jika username dan password tidak ditemukan atau salah
            $url = base_url();
            echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
            redirect('welcome/login');
        }
    }

    public function profile()
    {
        # code...
    }

    public function resep()
    {
        # code...
    }
}
