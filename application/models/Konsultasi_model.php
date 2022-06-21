<?php
class Konsultasi_model extends CI_Model
{
  public function jumlahKonsul()
  {
    return $query = $this->db->count_all('konsultasi');
  }
}
