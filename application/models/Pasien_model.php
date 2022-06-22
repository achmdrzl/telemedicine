<?php
class Pasien_model extends CI_Model
{
  public function jumlahPasien()
  {
    return $query = $this->db->count_all('pasien');
  }
  public function getAllPasien()
  {
    return $query = $this->db->get('pasien')->result_array();
  }
  public function getPasienByID($id)
  {
    return $this->db->get_where('pasien', ['ID_PASIEN' => $id])->result_array();
  }
}
