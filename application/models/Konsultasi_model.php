<?php
class Konsultasi_model extends CI_Model
{
  public function jumlahKonsul()
  {
    return $query = $this->db->count_all('konsultasi');
  }
  public function getAllKonsul()
  {
    $this->db->select('konsultasi.*,pasien.NAMA_PASIEN,dokter.NAMA_DOKTER');
    $this->db->from('konsultasi');
    $this->db->join('pasien', 'pasien.ID_PASIEN=konsultasi.ID_PASIEN');
    $this->db->join('dokter', 'dokter.ID_DOKTER=konsultasi.ID_DOKTER');
    return $query = $this->db->get()->result_array();
  }
}
