<?php

class detailJadwal_model extends CI_Model
{
  public function getAllDetailJadwal()
  {
    return $query = $this->db->get('detail_jadwal')->result_array();
  }
  public function getJadwalByIdDokter()
  {
    return $query = $this->db->where('ID_DOKTER', 1)->get('detail_jadwal')->result_array();
  }
}
