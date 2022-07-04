<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    public function index()
    {
        render3('pasien/index');

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

    public function profile($id)
    {
        $data['pasien'] = $this->Pasien_model->getPasienByID($id);
        render4('pasien/profile/index', $data);
    }
    public function editProfile($id)
    {
        $data['pasien'] = $this->Pasien_model->getPasienByID($id);
        $data['pekerjaan'] = $this->Pasien_model->getPekerjaan();
        $data['gol'] = $this->Pasien_model->getGol();
        render4('pasien/profile/edit_profile', $data);
    }
}
