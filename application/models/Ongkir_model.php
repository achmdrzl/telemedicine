<?php
class Ongkir_model extends CI_Model
{
  public function ongkirWilayah()
  {
    $this->db->where('ID_KAB', '3517');
    return $query = $this->db->get('kecamatan')->result_array();
  }
  public function updateOngkir()
  {
    $data = [
      "BIAYA_ONGKIR" => $this->input->post('biaya_ongkir')
    ];
    $this->db->where('ID_KEC', $this->input->post('id_kec'));
    $this->db->update('kecamatan', $data);
  }
}
