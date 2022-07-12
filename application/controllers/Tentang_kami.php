<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_kami extends CI_Controller
{
  public function index()
  {
    render2('pasien/tentang_kami/index');
  }
  public function about()
  {
    $data[''] = '';
    render3('pasien/tentang_kami/index', $data);
  }
}
