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

    function register($name, $username, $password, $nohp)
    {
        $data_user = array(
            'USERNAME' => $username,
            'PASSWORD' => password_hash($password, PASSWORD_DEFAULT),
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

    function verif($otp)
    {
        $data_user = array(
            'STATUS_AKUN' => 1
        );
        $this->db->where('OTP',$otp);
        $this->db->update('pasien',$data_user);
        
    }
}
