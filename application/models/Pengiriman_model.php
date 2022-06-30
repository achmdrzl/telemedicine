<?php
class Pengiriman_model extends CI_Model
{
  public function getAllPengiriman()
  {
    $this->db->select('konsultasi.*,pasien.NAMA_PASIEN,dokter.NAMA_DOKTER');
    $this->db->from('konsultasi');
    $this->db->join('pasien', 'pasien.ID_PASIEN=konsultasi.ID_PASIEN');
    $this->db->join('dokter', 'dokter.ID_DOKTER=konsultasi.ID_DOKTER');
    return $query = $this->db->get('pengiriman')->result_array();
  }
  // public function updateOngkir()
  // {
  //   $data = [
  //     "BIAYA_ONGKIR" => $this->input->post('biaya_ongkir')
  //   ];
  //   $this->db->where('ID_KEC', $this->input->post('id_kec'));
  //   $this->db->update('kecamatan', $data);
  // }
}
