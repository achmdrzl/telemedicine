<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_dokter extends CI_Controller
{
  public function index()
  {
    $data[] = '';
    dokter('doktermain/jadwal/index', $data);
  }
}
