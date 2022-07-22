<?php
// defined('BASEPATH') or exit('No direct script access allowed');

use Google\Client as GoogleClient;
use Google\Service\Oauth2;

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_pasien');
        $this->load->model('doktermain_model');
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function getSesi()
    {
        return $query = $this->db->get('sesi')->result_array();
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|max_length[25]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[50]');
        $this->form_validation->set_rules('nohp', 'No. Handphone', 'required|max_length[12]|numeric');

        if ($this->form_validation->run() == FALSE) {

            $this->session->set_flashdata('error', '
            <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                <strong>Pendaftaran Gagal!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>      
            ');
            redirect('welcome/register');
        } else {
            $name = $this->input->post('name');
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $nohp = $this->auth_pasien->gantiformat($this->input->post('nohp'));
            $cek_data = $this->auth_pasien->getUser($username);

            if (!empty($cek_data)) {
                $this->session->set_flashdata('error', '
                <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                <strong>Email Sudah Terdaftar!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>      
                ');
                redirect('welcome/register');
            } else {
                $this->auth_pasien->register($name, $username, $password, $nohp);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                <strong>Pendaftaran Berhasil!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>      
                ');
                redirect('welcome/register');
            }
        }
    }

    public function verif()
    {
        $this->form_validation->set_rules('otp', 'otp', 'required|min_length[4]|max_length[4]');
        $data = $this->Auth_pasien->selectOtp($this->session->EMAIL_PASIEN);
        
        if ($this->form_validation->run() == FALSE) {
            render4('pasien/auth/verif', $data[0]);
        } else {
            $otp = $this->input->post('otp');
            if ($otp == $data[0]['OTP']) {
                $this->auth_pasien->verif();
                $this->session->set_flashdata('success', 'terverifikasi');
                redirect('profil_pasien/editProfile');
            } else {
                redirect('auth/verif');
            }
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|max_length[25]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[50]');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', '
            <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                <strong>Login Gagal!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>      
            ');
            redirect('welcome/login');
        } else {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $cek_data = $this->auth_pasien->login($username);

            if (!empty($cek_data) && $cek_data[0]['JENIS_USER'] == "PASIEN") {
                if ($cek_data[0]['PASSWORD'] == $password) {
                    // get data pasien
                    $pasien = $this->auth_pasien->getUser2($username);
                    //session pasien
                    $sessionPasien = array(
                        'ID_PASIEN' => $pasien->ID_PASIEN,
                        'NAMA_PASIEN' => $pasien->NAMA_PASIEN,
                        'EMAIL_PASIEN' => $pasien->EMAIL_PASIEN,
                        'HP_PASIEN' => $pasien->HP_PASIEN,
                    );

                    $this->session->set_userdata($sessionPasien);
                    redirect('pasien_login/index');
                } else {
                    $this->session->set_flashdata('error', '
                    <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                        <strong>Password Salah!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>      
                    ');
                    redirect('welcome/login');
                }
            } elseif (!empty($cek_data) && $cek_data[0]['JENIS_USER'] == "DOKTER") {
                if ($cek_data[0]['PASSWORD'] == $password) {
                    //get data dokter
                    $dokter = $this->doktermain_model->getDokter($username);
                    //session dokter
                    $sessionDokter = array(
                        'ID_DOKTER' => $dokter->ID_DOKTER,
                        'NAMA_DOKTER' => $dokter->NAMA_DOKTER,
                        'EMAIL_DOKTER' => $dokter->EMAIL_DOKTER,
                        'SPESIALISASI' => $dokter->SPESIALISASI,
                        'HP_DOKTER' => $dokter->HP_DOKTER,
                    );

                    $this->session->set_userdata($sessionDokter);
                    redirect('doktermain');
                } else {
                    $this->session->set_flashdata('error', '
                    <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                        <strong>Password Salah!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>      
                    ');
                    redirect('welcome/login');
                }
            } elseif (!empty($cek_data) && $cek_data[0]['JENIS_USER'] == "ADMIN") {
                if ($cek_data[0]['PASSWORD'] == $password) {
                    //get data admin
                    $admin = $this->Admin_model->getAdmin($cek_data[0]['ID_USER']);

                    //session admin
                    $sessionAdmin = array(
                        'ID_ADMIN' => $admin->ID_ADMIN,
                        'NAMA_ADMIN' => $admin->NAMA_ADMIN,
                    );
                    $this->session->set_userdata($sessionAdmin);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('error', '
                    <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                        <strong>Password Salah!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>      
                    ');
                    redirect('welcome/login');
                }
            } else {

                $this->session->set_flashdata('error', '
                    <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                        <strong>Username Tidak Terdaftar!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>      
                    ');
                redirect('welcome/login');
            }
        }
    }

    public function google_login()
    {
        require_once __DIR__ . '/../../vendor/autoload.php';
        $client = new Google_Client();
        $client->setApplicationName('Sign In With Google Account');
        $client->setClientId('854942494395-cc3sj5lb1vr42vtit904msm749m0vhmq.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('http://localhost/telemedicine/auth/google_login');
        $client->addScope(['https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile'], '[https://www.googleapis.com/auth/user.phonenumbers.read]');

        if ($code = $this->input->get('code')) {
            $token = $client->fetchAccessTokenWithAuthCode($code);
            $client->setAccessToken($token);
            $oauth = new Oauth2($client);

            $user_info = $oauth->userinfo->get();
            $nama = $data['NAMA_PASIEN'] = $user_info->name;
            $username = $data['EMAIL_PASIEN'] = $user_info->email;
            $profile = $data['FILE_FOTO'] = $user_info->picture;
            $nohp = $data['HP_PASIEN'] = $user_info->phoneNumber;

            // $user = $this->auth_pasien->getUser($username);
            $session = array(
                'NAMA_PASIEN' => $nama,
                'EMAIL_PASIEN' => $username,
                'HP_PASIEN' => $nohp
            );
            if ($this->auth_pasien->getUser($username) == TRUE) {
                $this->session->set_userdata($session);
            } else {
                $this->auth_pasien->createUser($nama, $username, $profile, $nohp);
                $this->session->set_userdata($session);
            }

            redirect('pasien_login/index');
        } else {
            $url = $client->createAuthUrl();
            header('Location:' . filter_var($url, FILTER_SANITIZE_URL));
        }
    }

    public function forgotPass()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('msg', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Email tidak di Temukan!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>      
            ');
            redirect('welcome/forgotPass');
        } else {
            $email = $this->input->post('email');
            $this->auth_pasien->forgotPass($email);
            redirect('welcome/login');
        }
    }
}
