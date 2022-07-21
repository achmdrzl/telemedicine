<?php
// defined('BASEPATH') or exit('No direct script access allowed');

use Google\Client as GoogleClient;
use Google\Service\Oauth2;

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_pasien');
        $this->load->model('doktermain_model');
    }

    public function getSesi()
    {
        return $query = $this->db->get('sesi')->result_array();
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[1]|max_length[50]|is_unique[pasien.NAMA_PASIEN]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[50]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[25]');
        $this->form_validation->set_rules('nohp', 'nohp', 'trim|required|min_length[1]|max_length[25]');
        if ($this->form_validation->run() == true) {
            $name = $this->input->post('name');
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $nohp = $this->auth_pasien->gantiformat($this->input->post('nohp'));
            $this->auth_pasien->register($name, $username, $password, $nohp);
            $this->session->set_flashdata('success', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Pendaftaran Berhasil!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>      
            ');
            redirect('welcome/register');
        } else {
            $this->session->set_flashdata('error', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Pendaftaran Gagal!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>      
            ');
            redirect('welcome/register');
        }
    }

    public function verif()
    {
        $this->form_validation->set_rules('otp', 'otp', 'trim|required|min_length[4]|max_length[4]');
        if ($this->form_validation->run() == true) {
            $otp = $this->input->post('otp');
            $this->auth_pasien->verif($otp);
            redirect('welcome/login');
        } else {

            redirect('welcome/verif');
        }

        // $this->db->select("*");
        // $this->db->from("pasien");
        // $this->db->where('OTP', $otp);
        // $query = $this->db->get();
        // return $query->result_array();

        // if ($query == 1) 
        // {
        //     redirect('welcome/login');
        // } else {
        //     redirect('welcome/verif');
        // }

        // $pasien = $this->auth_pasien->getAll(); // memanggil method getAll
        // $data['pasien'] = $pasien; // menampung di variable $data

    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = $this->auth_pasien->login($username, $password);

        // $dataUser = array(
        //     'JENIS_USER' => $data->JENIS_USER
        // );
        // if ($data) {
        //     if (password_verify($password, $data->PASSWORD)) {
        //         $this->session->set_userdata($session);
        //         redirect('pasien_login/index');
        //     } else {
        //         $this->session->set_flashdata('error', 'Username Tidak Di Temukan');
        //         redirect('welcome/login');
        //     }
        // } else {
        //     $this->session->set_flashdata('error', 'Username Tidak Ditemukan');
        //     redirect('welcome/login');
        // }

        // $session = array(
        //     'ID_PASIEN' => $data->ID_PASIEN,
        //     'NAMA_PASIEN' => $data->NAMA_PASIEN,
        //     'EMAIL_PASIEN' => $data->EMAIL_PASIEN,
        //     'HP_PASIEN' => $data->HP_PASIEN,
        //     'FILE_FOTO' => $data->FILE_FOTO
        // );

        if ($data > 0) {

            $dataUser = $data[0]['JENIS_USER'];
            $dataUser2 = $data[0]['ID_USER'];

            if ($dataUser == 'PASIEN') {
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
            } elseif ($dataUser == 'DOKTER') {
                //get data dokter
                $dokter = $this->doktermain_model->getDokter($dataUser2);
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
            } elseif ($dataUser == 'ADMIN') {
                //get data admin
                $admin = $this->Doktermain_model->getAdmin($username);

                //session admin
                $sessionAdmin = array(
                    'ID_ADMIN' => $admin->ID_ADMIN,
                    'NAMA_ADMIN' => $admin->NAMA_ADMIN,
                    'SPESIALISASI' => $admin->SPESIALISASI,
                    'HP_ADMIN' => $admin->HP_ADMIN,
                );
                $this->session->set_userdata($sessionAdmin);
                redirect('');
            }
        } else {  // jika username dan password tidak ditemukan atau salah
            $url = base_url();
            $this->session->set_flashdata('msg', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Username & Password Salah!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>      
            ');
            redirect('welcome/login');
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
}
