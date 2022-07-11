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

  public function getDokterDetailJadwal($id)
  {
    return $this->db->where('ID_DOKTER', $id)->get('dokter')->row();
  }

}
