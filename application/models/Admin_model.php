<?php
class Admin_model extends CI_Model
{

  public function getAdmin($id_user)
  {
    return $this->db->where('ID_USER', $id_user)->get('admin')->row();
  }
}
