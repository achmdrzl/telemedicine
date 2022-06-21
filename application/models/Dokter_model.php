<?php
class Dokter_model extends CI_Model
{
  public function getAllDokter()
  {
    return $query = $this->db->get('dokter')->result_array();
  }
  public function jumlahDokter()
  {
    return $query = $this->db->count_all('dokter');
  }
}
