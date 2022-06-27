<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengiriman extends CI_Controller
{
  public function index()
  {
    $data[] = '';
    render('admin/pengiriman/index', $data);
  }
}
