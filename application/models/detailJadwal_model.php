<?php
class detailJadwal_model extends CI_Model
{
  public function getAllDetailJadwal()
  {
    return $query = $this->db->get('detail_jadwal')->result_array();
  }
}
