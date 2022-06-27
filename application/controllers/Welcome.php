<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
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
}
