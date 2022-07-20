<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		render2('pasien/index');
	}

	public function login()
	{
		render2('pasien/auth/login');
	}

	public function register()
	{
		render2('pasien/auth/register');
	}

	public function verif()
	{
		$data[] = "";
		render2('pasien/auth/verif');
	}

	public function konsul()
	{
		$data[] = "";
		if ($this->session->ID_PASIEN) {
			render2('pasien/book/index');
		} else {
			render2('pasien/book/block');
		}
	}
}
