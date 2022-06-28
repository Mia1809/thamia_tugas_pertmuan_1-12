<?php
defined("BASEPATH") or exit("No direct script ");
class ModelUser extends CI_Model
{
    public function simpanData($data = null){
        $this->db->insert("user", $data);
    }

    public function cekData($where = null){
        return $this->db->get_where('user', $where);
    }

    public function getUserWhere($where= null){
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->wehre($where);
        return $this->db->get();
    }

    public function getUserLimit(){
        $this->db->select('*');
        $this->db->from("user");
        $this->db->limit(10, 0);
        return $this->db->get();
    }

}