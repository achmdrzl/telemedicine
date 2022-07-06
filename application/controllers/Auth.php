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
            $nohp = $this->input->post('nohp');
            $this->auth_pasien->register($name, $username, $password, $nohp);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('welcome/verif');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('welcome/register');
        }
    }

    public function verif()
    {
        $this->form_validation->set_rules('otp', 'otp', 'trim|required|min_length[4]|max_length[4]');
        if ($this->form_validation->run() == true) {
            $otp = $this->input->post('otp');
            $this->auth_pasien->verif($otp);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('welcome/login');
        } else {
            $this->session->set_flashdata('error', validation_errors());
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

        $user = $this->auth_pasien->getUser2($username);

        $session = array(
            'ID_PASIEN' => $user->ID_PASIEN,
            'NAMA_PASIEN' => $user->NAMA_PASIEN,
            'EMAIL_PASIEN' => $user->EMAIL_PASIEN,
            'HP_PASIEN' => $user->HP_PASIEN
        );

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

        if ($data->num_rows() > 0) {
            $this->session->set_userdata($session);
            redirect('pasien_login/index');
        } else {  // jika username dan password tidak ditemukan atau salah
            $url = base_url();
            echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
            redirect('welcome/login');
        }
    }

    public function google_login()
    {
        // include_once APPPATH . "../../vendor/autoload.php";
        require_once __DIR__ . '/../../vendor/autoload.php';
        $client = new Google_Client();
        $client->setApplicationName('Sign In With Google Account');
        $client->setClientId('976962102988-d0aalamruaq8v40tbinoe82ndlag0sgl.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('http://localhost/telemedicine/auth/google_login');
        $client->addScope(['https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile'], '[https://www.googleapis.com/auth/user.phonenumbers.read]');
        // $client->addScope('email');
        // $client->addScope('profile');

        if ($code = $this->input->get('code')) {
            $token = $client->fetchAccessTokenWithAuthCode($code);
            $client->setAccessToken($token);
            $oauth = new Oauth2($client);

            $user_info = $oauth->userinfo->get();
            $nama = $data['NAMA_PASIEN'] = $user_info->name;
            $username = $data['EMAIL_PASIEN'] = $user_info->email;
            $profile = $data['FILE_FOTO'] = $user_info->picture;
            $nohp = $data['HP_PASIEN'] = $user_info->phoneNumber;

            $user = $this->auth_pasien->getUser2($username);

            $session = array(
                'ID_PASIEN' => $user->ID_PASIEN,
                'NAMA_PASIEN' => $nama,
                'EMAIL_PASIEN' => $username,
                'HP_PASIEN' => $nohp
            );

            if ($this->auth_pasien->getUser($user_info->email)) {
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
