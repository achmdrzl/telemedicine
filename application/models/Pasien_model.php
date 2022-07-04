<?php
class Pasien_model extends CI_Model
{
  public function jumlahPasien()
  {
    return $query = $this->db->count_all('pasien');
  }
  public function getAllPasien()
  {
    return $query = $this->db->get('pasien')->result_array();
  }

  public function getAllPasien2($username)
  {
    // $where = array('NAMA_PASIEN' => $username);
    // $this->db->where($where);
    // $query = $this->db->get('pasien');
    // return $query->result_array();

    return $this->db->where('NAMA_PASIEN', $username)->get('pasien')->row();
  }

  public function getPasienByName($name)
  {
    $where = array('NAMA_PASIEN' => $name);
    $this->db->where($where);
    $query = $this->db->get('pasien');
    return $query->result();
  }

  public function getPasienByID($id)
  {
    $this->db->select('ps.*, pk.NAMA_PEKERJAAN, gd.NAMA_GOL');
    $this->db->from('pasien as ps');
    $this->db->join('pekerjaan as pk', 'ps.ID_PEKERJAAN=pk.ID_PEKERJAAN', 'LEFT');
    $this->db->join('gol_darah as gd', 'ps.ID_GOL=gd.ID_GOL', 'LEFT');
    $this->db->where('ps.ID_PASIEN', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
  public function updateStatus($id)
  {
    $data = [
      "STATUS_AKUN" => 1
    ];
    $this->db->where('ID_PASIEN', $id);
    $this->db->update('pasien', $data);
  }
  public function getPekerjaan()
  {
    return $query = $this->db->get('pekerjaan')->result_array();
  }
  public function getGol()
  {
    return $query = $this->db->get('gol_darah')->result_array();
  }
  public function getProv()
  {
    return $query = $this->db->get('provinsi')->result_array();
  }
  public function getKota()
  {
    return $query = $this->db->get('kab_kota')->result_array();
  }
  public function getKecamatan()
  {
    return $query = $this->db->get('kecamatan')->result_array();
  }
  public function getKelurahan()
  {
    return $query = $this->db->get('desa')->result_array();
  }
  public function updateProfile($id)
  {
    $data = [
      "ID_PEKERJAAN" => $this->input->post('pekerjaan', true),
      "ID_GOL" => $this->input->post('gol', true),
      "NIK_PASIEN" => $this->input->post('nik', true),
      "KELAHIRAN" => $this->input->post('kelahiran', true),
      "TGL_LAHIR" => $this->input->post('tgl_lahir', true),
      "ALAMAT_PASIEN" => $this->input->post('alamat', true)
    ];
    $this->db->where('ID_PASIEN', $id);
    $this->db->update('pasien', $data);
  }
}
