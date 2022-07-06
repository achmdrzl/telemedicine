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
		$data[] = "";
		render2('pasien/index', $data);
	}

	public function login()
	{
		$data[] = "";
		render2('pasien/auth/login', $data);
	}

	public function register()
	{
		$data[] = "";
		render2('pasien/auth/register', $data);
	}

	public function verif()
	{
		$data[] = "";
		render2('pasien/auth/verif', $data);
	}
}
