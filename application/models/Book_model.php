<?php

class Book_model extends CI_Model
{
 
    public function getSesi()
    {
        return $query = $this->db->get('sesi')->result_array();
    }

    public function getJadwal()
    {
        return $query = $this->db->get('jadwal')->result_array();
    }

    public function getDetailJadwal($id_jadwal, $sesi){
        $this->db->select('dj.ID_DETAIL_JADWAL, dr.ID_DOKTER, dr.NAMA_DOKTER, dr.SPESIALISASI, dr.PROFIL_DOKTER');
        $this->db->from('dokter as dr');
        $this->db->join('detail_jadwal as dj', 'dr.ID_DOKTER=dj.ID_DOKTER', 'JOIN');
        $this->db->where('ID_JADWAL', $id_jadwal);
        $this->db->where('ID_SESI', $sesi);
        $this->db->group_by('dr.ID_DOKTER');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getIdJadwal($day)
    {
        return $this->db->where('HARI', $day)->get('jadwal')->row();
    }

    public function getIdDetJadwal($id)
    {
        return $this->db->where('ID_DETAIL_JADWAL', $id)->get('detail_jadwal')->result_array();
    }


}
