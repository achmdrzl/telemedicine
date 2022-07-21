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

    public function getOTP()
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

    public function gantiformat($nomorhp)
    {
        //Terlebih dahulu kita trim dl
        $nomorhp = trim($nomorhp);
        //bersihkan dari karakter yang tidak perlu
        $nomorhp = strip_tags($nomorhp);
        // Berishkan dari spasi
        $nomorhp = str_replace(" ", "", $nomorhp);
        // bersihkan dari bentuk seperti  (022) 66677788
        $nomorhp = str_replace("(", "", $nomorhp);
        // bersihkan dari format yang ada titik seperti 0811.222.333.4
        $nomorhp = str_replace(".", "", $nomorhp);

        //cek apakah mengandung karakter + dan 0-9
        if (!preg_match('/[^0-9]/', trim($nomorhp))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($nomorhp), 0, 3) == '62') {
                $nomorhp = trim($nomorhp);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr($nomorhp, 0, 1) == '0') {
                $nomorhp = '62' . substr($nomorhp, 1);
            }
        }
        return $nomorhp;
    }

    public function verif($otp)
    {
        $update_status = array(
            'STATUS_AKUN' => 1
        );
        $this->db->where('OTP', $otp);
        $this->db->update('pasien', $update_status);
    }

    public function login($username, $password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE USERNAME='$username' AND PASSWORD ='$password' LIMIT 1")->result_array();
        return $query;

        // return $this->db->where('EMAIL_PASIEN', $username)->get('pasien')->row();
        // return $this->db->where('USERNAME', $username)->get('user')->row();
        // $this->db->select('ur.USERNAME, ur.PASSWORD, ps.NAMA_PASIEN, ps.EMAIL_PASIEN, ps.ID_PASIEN');
        // $this->db->from('pasien as ps');
        // $this->db->join('user as ur', 'ps.EMAIL_PASIEN=ur.USERNAME', 'JOIN');
        // $this->db->where('ps.EMAIL_PASIEN', $username);
        // return $this->db->get()->row();
    }

    public function getUser($username)
    {
        $this->db->select('ur.USERNAME, ur.PASSWORD, ps.ID_PASIEN, ps.NAMA_PASIEN, ps.EMAIL_PASIEN');
        $this->db->from('pasien as ps');
        $this->db->join('user as ur', 'ps.EMAIL_PASIEN=ur.USERNAME', 'JOIN');
        $this->db->where('ps.EMAIL_PASIEN', $username);
        return $this->db->get()->row();
        // return $this->db->where('USERNAME', $username)->get('user')->row();
    }

    public function getUser2($email)
    {
        return $this->db->where('EMAIL_PASIEN', $email)->get('pasien')->row();
    }

    public function createUser($nama, $email, $profile, $nohp)
    {
        $otp = strval(rand(1000, 10000));
        $data = array(
            'NAMA_PASIEN' => $nama,
            'EMAIL_PASIEN' => $email,
            'FILE_FOTO' => $profile,
            'OTP' => $otp,
            'HP_PASIEN' => $nohp
        );

        $data2 = array(
            'USERNAME' => $email,
            'JENIS_USER' => "PASIEN"
        );

        $this->db->insert('pasien', $data);
        $this->db->insert('user', $data2);
    }
}
