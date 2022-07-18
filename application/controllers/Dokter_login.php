<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Doktermain_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = "Dokter";
        render4('pasien/index', $data);
    }
    public function profile()
    {
        $username = $this->session->EMAIL_DOKTER;

        $data = $this->doktermain->getEmailDokter($username);
        $id = $data->ID_DOKTER;
        $user['dokter'] = $this->Dokter_model->getPasienByID($id);
        render4('doktermain/profile/index', $user);
    }

    public function Resep()
    {
    }
}
