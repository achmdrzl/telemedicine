<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep_dokter extends CI_Controller
{
  public function index()
  {
    dokter('doktermain/resep/index');
  }
}
