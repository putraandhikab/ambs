<?php

class Homelogin_model extends CI_Model{
    public function getAllNotes($table, $where){
        return $this->db->order_by('tanggal', 'DESC')
                        ->order_by('jam', 'DESC')
                        ->limit(3)
                        ->get_where($table, $where);
    }
}