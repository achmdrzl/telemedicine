<?php
class Auth_pasien extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function register($username, $password)
    {
        $data_user = array(
            'USERNAME' => $username,
            'PASSWORD' => password_hash($password, PASSWORD_DEFAULT),
            'JENIS_USER' => 'PASIEN'
        );
        $this->db->insert('user', $data_user);
    }
}
?>