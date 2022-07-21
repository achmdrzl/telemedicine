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

  public function getDokterById($id)
  {
    $this->db->select('dt.*,u.USERNAME AS EMAIL_DOKTER');
    $this->db->from('dokter as dt');
    $this->db->join('user as u', 'dt.ID_USER=u.ID_USER', 'LEFT');
    $this->db->where('dt.ID_DOKTER', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
}
