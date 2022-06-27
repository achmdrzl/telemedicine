<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_login extends CI_Controller
{

    public function index()
    {
        render3('pasien/index');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome/index');
    }

}
