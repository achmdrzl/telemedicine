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
		
		render2('pasien/auth/verif');
	}

	public function konsul()
	{
		$data[] = "";
		if ($this->session->ID_PASIEN) {
			render2('pasien/book/index');
		} else {
			$this->session->set_flashdata('message', '
                <div class="modal animated fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered w-80">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="cookiesContent" id="cookiesPopup">
                                    <img class="img-edit mb-4 w-50" src="https://ik.imagekit.io/dxofqajmq/telemedicine/computer_D8IH_i9k4.png?ik-sdk-version=javascript-1.4.3&updatedAt=1658528930756" alt="cookies-img" />
                                    <h6 class="member__name mt-2"><a href="#">Harap Melakukan Login Terlebih Dahulu Sebelum Melakukan Konsultasi</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ');
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			// render2('block');
		}
	}
	public function forgotPass(){
		render2('pasien/auth/forgotPass');
	}

	public function verifForgotPass(){
		render2('pasien/auth/verifForgotPass');
	}

	public function newPass(){
		render2('pasien/auth/newPass');
	}
}
