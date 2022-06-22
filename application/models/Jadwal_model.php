<?php
class Jadwal_model extends CI_Model
{
  public function getAllJadwal()
  {
    return $query = $this->db->get('jadwal')->result_array();
  }
  public function updateKuota()
  {
    $senin = [
      "KUOTA" => $this->input->post('Senin', true)
    ];
    $selasa = [
      "KUOTA" => $this->input->post('Selasa', true)
    ];
    $rabu = [
      "KUOTA" => $this->input->post('Rabu', true)
    ];
    $kamis = [
      "KUOTA" => $this->input->post('Kamis', true)
    ];
    $jumat = [
      "KUOTA" => $this->input->post('Jumat', true)
    ];


    $this->db->where('ID_JADWAL', 1);
    $this->db->update('jadwal', $senin);
    $this->db->where('ID_JADWAL', 2);
    $this->db->update('jadwal', $selasa);
    $this->db->where('ID_JADWAL', 3);
    $this->db->update('jadwal', $rabu);
    $this->db->where('ID_JADWAL', 4);
    $this->db->update('jadwal', $kamis);
    $this->db->where('ID_JADWAL', 5);
    $this->db->update('jadwal', $jumat);
  }
}
