<?php
class Pengiriman_model extends CI_Model
{
  public function getAllPengiriman()
  {
    $this->db->select('p.ID_PENGIRIMAN, ps.ID_PASIEN, ps.NAMA_PASIEN,ps.EMAIL_PASIEN, ps.HP_PASIEN, ps.ALAMAT_PASIEN, p.TGL_PENGIRIMAN,kr.NAMA_KURIR');
    $this->db->from('pengiriman as p');
    $this->db->join('kurir as kr', 'p.ID_KURIR=kr.ID_KURIR');
    $this->db->join('resep as r', 'r.ID_RESEP=p.ID_RESEP');
    $this->db->join('konsultasi k ', 'r.ID_KONSUL=k.ID_KONSUL');
    $this->db->join('pasien as ps', 'k.ID_PASIEN=ps.ID_PASIEN');

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
