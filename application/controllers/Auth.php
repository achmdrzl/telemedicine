<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
    
    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek_data = $this->auth_pasien->login($username, $password);

        if ($cek_data->num_rows() > 0) {
            $data = $cek_data->row_array();
            $this->session->set_userdata('logged', TRUE);
            $this->session->set_userdata('ses_id', $data['USERNAME']);
            $this->session->set_userdata('ses_nama', $data['NAMA_PASIEN']);
            redirect('pasien_login/index');
        } else {  // jika username dan password tidak ditemukan atau salah
            $url = base_url();
            echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
            redirect('welcome/login');
        }
    }

    public function google_login()
    {
        $client = new GoogleClient();
        $client->setApplicationName('google login');
        $client->setClientId('902962175899-8nrvj9locj2uva71sima93kg49an587g.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('http://localhost/ci-google/home/google_login');
        $client->addScope(['https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile']);
        if ($code = $this->input->get('code')) {
            $token = $client->fetchAccessTokenWithAuthCode($code);
            $client->setAccessToken($token);
            $oauth = new Oauth2($client);

            $user_info = $oauth->userinfo->get();
            $data['NAMA_PASIEN'] = $user_info->name;
            $data['EMAIL_PASIEN'] = $user_info->email;
            $data['image'] = $user_info->picture;

            if ($user = $this->pasien_login->getUser($user_info->email)) {
                $this->session->set_userdata('logged', $user);
            } else {
                $this->pasien_login->createUser($data);
            }

            redirect('pasien_login/index');

        } else {
            $url = $client->createAuthUrl();
            header('Location:' . filter_var($url, FILTER_SANITIZE_URL));
        }
    }
}
