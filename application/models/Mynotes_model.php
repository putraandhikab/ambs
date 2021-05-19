<?php

class Mynotes_model extends CI_Model{
    public function getAllNotes($table, $where){
        // return $this->db->query('SELECT * FROM note');
        return $this->db->get_where($table, $where);
    }

    public function getNoteById($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function updateNote($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deleteNote($where, $table){
        $this->db->where($where)
                 ->delete($table);
    }
}