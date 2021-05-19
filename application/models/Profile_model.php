<?php

class Profile_model extends CI_Model{
    public function updateUser($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}