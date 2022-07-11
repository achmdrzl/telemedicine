<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alur_pasien extends CI_Controller
{
  public function Alur()
  {
    $data[] = "";
    render3('pasien/alur/index', $data);
  }
  public function alurLayanan()
  {
    $data[] = "";
    render2a('pasien/alur/index', $data);
  }
}
