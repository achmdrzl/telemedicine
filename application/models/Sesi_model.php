<?php
class Sesi_model extends CI_Model
{
  public function getAllSesi()
  {
    return $query = $this->db->get('sesi')->result_array();
  }
}
