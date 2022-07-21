<?php
class Doktermain_model extends CI_Model
{
  public function getSesi()
  {
    return $query = $this->db->get('sesi')->result_array();
  }

  public function getJadwal()
  {
    return $query = $this->db->get('jadwal')->result_array();
  }

  public function register($name, $username, $password, $nohp, $spesialis)
  {
    $data_user = array(
      'USERNAME' => $username,
      // 'PASSWORD' => password_hash($password, PASSWORD_DEFAULT),
      'PASSWORD' => $password,
      'JENIS_USER' => 'DOKTER'
    );
    $this->db->insert('user', $data_user);
    $query = $this->db->where('USERNAME', $username)->get('user')->result_array();
    $data_iduser = $query[0]['ID_USER'];
    $data_user2 = array(
      'ID_USER' => $data_iduser,
      'EMAIL_DOKTER' => $username,
      'NAMA_DOKTER' => $name,
      'SPESIALISASI' => $spesialis,
      'HP_DOKTER' => $nohp,
      'PROFIL_DOKTER' => 'profil.jpg'
    );

    $this->db->insert('dokter', $data_user2);
  }

  public function getEmailDokter($email)
  {
    return $this->db->where('EMAIL_DOKTER', $email)->get('dokter')->row();
  }

  public function getDokter($email)
  {
    return $this->db->where('EMAIL_DOKTER', $email)->get('dokter')->row();
  }
  public function getDokterByID($id)
  {
    return $this->db->where('ID_DOKTER', $id)->get('dokter')->row();
  }
}
