<?php
class Pengiriman_model extends CI_Model
{
  public function ongkirWilayah()
  {
    $this->db->where('ID_KAB', '3517');
    return $query = $this->db->get('kecamatan')->result_array();
  }
}
