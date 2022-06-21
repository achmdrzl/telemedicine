<?php
class Dokter_model extends CI_Model
{
  public function getAllDokter()
  {
    return $query = $this->db->get('dokter')->result_array();
  }
  public function updateStatusDokter($id)
  {
    $data = [
      "STATUS_DOKTER" => 0
    ];
    $this->db->where('ID_DOKTER', $id);
    $this->db->update('dokter', $data);
  }
}
