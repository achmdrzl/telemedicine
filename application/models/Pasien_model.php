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
    $this->db->select('ps.*, pk.NAMA_PEKERJAAN, gd.NAMA_GOL, kl.*, kc.*, kb.*, prov.*');
    $this->db->from('pasien as ps');
    $this->db->join('pekerjaan as pk', 'ps.ID_PEKERJAAN=pk.ID_PEKERJAAN', 'LEFT');
    $this->db->join('gol_darah as gd', 'ps.ID_GOL=gd.ID_GOL', 'LEFT');
    $this->db->join('desa as kl', 'ps.ID_DESA=kl.ID_DESA', 'LEFT');
    $this->db->join('kecamatan as kc', 'kc.ID_KEC=kl.ID_KEC', 'LEFT');
    $this->db->join('kab_kota as kb', 'kb.ID_KAB=kc.ID_KAB', 'LEFT');
    $this->db->join('provinsi as prov', 'prov.ID_PROV=kb.ID_PROV', 'LEFT');
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
  public function getSesi()
  {
    return $query = $this->db->get('sesi')->result_array();
  }

  public function getJadwal()
  {
    return $query = $this->db->get('jadwal')->result_array();
  }

  public function getIdJadwal($day)
  {
    return $this->db->where('HARI', $day)->get('jadwal')->row();
  }

  public function getIdDetJadwal($id)
  {
    return $this->db->where('ID_DETAIL_JADWAL', $id)->get('detail_jadwal')->result_array();
  }

  public function getDetailJadwal($id_jadwal, $sesi)
  {
    $this->db->select('dj.ID_DETAIL_JADWAL, dr.ID_DOKTER, dr.NAMA_DOKTER, dr.SPESIALISASI, dr.PROFIL_DOKTER');
    $this->db->from('dokter as dr');
    $this->db->join('detail_jadwal as dj', 'dr.ID_DOKTER=dj.ID_DOKTER', 'JOIN');
    $this->db->where('ID_JADWAL', $id_jadwal);
    $this->db->where('ID_SESI', $sesi);
    $this->db->group_by('dr.ID_DOKTER');
    $query = $this->db->get();
    return $query->result_array();
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
    $this->db->order_by('NAMA_PROV', 'ASC');
    return $query = $this->db->get('provinsi')->result_array();
  }

  public function getKota($id_provinsi)
  {
    $this->db->where('ID_PROV', $id_provinsi);
    $this->db->order_by('NAMA_KAB', 'ASC');
    return $query = $this->db->get('kab_kota')->result_array();
  }
  public function getKab()
  {
    $this->db->order_by('NAMA_KAB', 'ASC');
    return $query = $this->db->get('kab_kota')->result_array();
  }

  public function getKecamatan($id_kabupaten)
  {
    $this->db->where('ID_KAB', $id_kabupaten);
    $this->db->order_by('NAMA_KEC', 'ASC');
    return $query = $this->db->get('kecamatan')->result_array();
  }

  public function getKelurahan($id_kecamatan)
  {
    $this->db->where('ID_KEC', $id_kecamatan);
    $this->db->order_by('NAMA_DESA', 'ASC');
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
      "ALAMAT_PASIEN" => $this->input->post('alamat', true),
      "HP_PASIEN" => $this->input->post('hp', true),
      "JENIS_KELAMIN" => $this->input->post('jk', true)
      // "ID_DESA" => $this->input->post('kelurahan', true),
    ];
    $this->db->where('ID_PASIEN', $id);
    $this->db->update('pasien', $data);
  }
  public function uploadKTP($id, $uploaded_data_ktp)
  {
    $data = [
      "FILE_KTP" => $uploaded_data_ktp['file_name']
    ];
    $this->db->where('ID_PASIEN', $id);
    $this->db->update('pasien', $data);
  }
}
