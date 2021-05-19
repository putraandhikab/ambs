<?php

class Homelogin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_logged') != TRUE){
            redirect('http://localhost/ambs');
        }
        $this->load->model('Homelogin_model');
    }

    public function index() {
        $id_user = $this->session->userdata('id_user');

        $where = ['id_user' => $id_user];
        $data['note'] = $this->Homelogin_model->getAllNotes('note', $where)->result();
        $this->load->view('homelogin', $data);
    }
}