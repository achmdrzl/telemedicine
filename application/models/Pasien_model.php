<?php
class Pasien_model extends CI_Model
{
  public function jumlahPasien()
  {
    return $query = $this->db->count_all('pasien');
  }
}
