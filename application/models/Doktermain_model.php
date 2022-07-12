<?php
class Doktermain_model extends CI_Model
{
  public function getSesi()
  {
    return $query = $this->db->get('sesi')->result_array();
  }
}
