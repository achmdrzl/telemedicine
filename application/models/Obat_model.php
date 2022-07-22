<?php
class Obat_model extends CI_Model
{
    public function getAllObat()
    {
        return $query = $this->db->get('obat')->result_array();
    }
    public function getPasienByName($name)
    {
        $where = array('NAMA_PASIEN' => $name);
        $this->db->where($where);
        $query = $this->db->get('pasien');
        return $query->result();
    }
}
