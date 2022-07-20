<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_pasien extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pasien_model');
    $this->load->library('form_validation');
  }
  public function index()
  {
    
  }
}
