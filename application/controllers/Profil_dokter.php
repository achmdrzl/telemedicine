<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_dokter extends CI_Controller
{
  public function index()
  {
    $data[] = '';
    dokter('doktermain/profil/index', $data);
  }
}