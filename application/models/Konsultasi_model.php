<?php
class Konsultasi_model extends CI_Model
{
  public function jumlahKonsul()
  {
    return $query = $this->db->count_all('konsultasi');
  }
  public function getAllKonsul()
  {
    $current_date = date("Y-m-d");
    $this->db->select('konsultasi.*,pasien.EMAIL_PASIEN,pasien.HP_PASIEN,pasien.NAMA_PASIEN,dokter.NAMA_DOKTER');
    $this->db->from('konsultasi');
    $this->db->join('pasien', 'pasien.ID_PASIEN=konsultasi.ID_PASIEN');
    $this->db->join('dokter', 'dokter.ID_DOKTER=konsultasi.ID_DOKTER');
    // $this->db->where('TGL_KONSUL',$current_date);
    return $query = $this->db->get()->result_array();
  }
  public function isiHasilKonsul($data, $id){
    $this->db->where('ID_KONSUL', $id);
    $this->db->update('konsultasi', $data);
  }
  public function getKonsultasiDetail($id){
    $this->db->where('ID_KONSUL', $id);
    $current_date = date("Y-m-d");
    $this->db->select('konsultasi.*,pasien.EMAIL_PASIEN,pasien.NAMA_PASIEN,dokter.NAMA_DOKTER');
    $this->db->from('konsultasi');
    $this->db->join('pasien', 'pasien.ID_PASIEN=konsultasi.ID_PASIEN');
    $this->db->join('dokter', 'dokter.ID_DOKTER=konsultasi.ID_DOKTER');
    // $this->db->where('TGL_KONSUL',$current_date);
    return $query = $this->db->get()->result_array();
  }
  public function konsul($data, $id){
    $this->db->where('ID_KONSUL', $id);
    $this->db->update('konsultasi', $data);

  }
}
