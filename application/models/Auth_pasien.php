<?php
class Auth_pasien extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        return $this->db->get('pasien');
    }

    public function register($name, $username, $password, $nohp)
    {
        $data_user = array(
            'USERNAME' => $username,
            // 'PASSWORD' => password_hash($password, PASSWORD_DEFAULT),
            'PASSWORD' => $password,
            'JENIS_USER' => 'PASIEN'
        );

        $otp = strval(rand(1000, 10000));
        $data_user2 = array(
            'OTP' => $otp,
            'EMAIL_PASIEN' => $username,
            'NAMA_PASIEN' => $name,
            'HP_PASIEN' => $nohp
        );

        $this->db->insert('user', $data_user);
        $this->db->insert('pasien', $data_user2);

    }

    public function verif($otp)
    {
        $update_status = array(
            'STATUS_AKUN' => 1
        );
        $this->db->where('OTP',$otp);
        $this->db->update('pasien', $update_status);
        
    }

    public function login($username, $password){
        $query = $this->db->query("SELECT * FROM user WHERE USERNAME='$username' AND PASSWORD ='$password' LIMIT 1");
        return $query;
    }

    public function getUser($email)
    {
        return $this->db->where('EMAIL', $email)->get('USERNAME')->row();
    }

    public function createUser($data)
    {
        $this->db->insert('PASIEN', $data);
    }


}
