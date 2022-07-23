<?php

class Book_model extends CI_Model
{

    public function getSesi()
    {
        return $query = $this->db->get('sesi')->result_array();
    }

    public function cekStatus($id)
    {
        return $this->db->where('ID_PASIEN', $id)->get('pasien')->row();
    }

    public function getJadwal()
    {
        return $query = $this->db->get('jadwal')->result_array();
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
    public function getDetailJadwal2($id_jadwal, $sesi)
    {
        $this->db->select('dj.ID_DETAIL_JADWAL, dr.ID_DOKTER, dr.NAMA_DOKTER, dr.SPESIALISASI, dr.PROFIL_DOKTER');
        $this->db->from('dokter as dr');
        $this->db->join('detail_jadwal as dj', 'dr.ID_DOKTER=dj.ID_DOKTER', 'JOIN');
        $this->db->where('ID_JADWAL', $id_jadwal);
        $this->db->where('ID_SESI', $sesi);
        $this->db->group_by('dr.ID_DOKTER');
        $query = $this->db->get();
        return $query->row();
    }

    public function getIdJadwal($day)
    {
        return $this->db->where('HARI', $day)->get('jadwal')->row();
    }

    public function getJam($sesi)
    {
        return $this->db->where('ID_SESI', $sesi)->get('sesi')->row();
    }

    public function getIdDetJadwal($id)
    {
        return $this->db->where('ID_DETAIL_JADWAL', $id)->get('detail_jadwal')->result_array();
    }

    public function genZoom($date, $jam)
    {
        //generate zoom
        require_once __DIR__ . '/../../config/api.php';
        require_once __DIR__ . '/../../config/config.php';

        $arr['topic'] = 'Konsultasi RSUD Jombang';
        $arr['start_date'] = date($date . $jam);

        $arr['duration'] = 30;
        $arr['password'] = 'jombang';
        $arr['type'] = '2';
        $arr['timezone'] = 'Asia/Jakarta';
        $result = createMeeting($arr);
        return $result;
    }
}
