<?php 

class Profile extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_logged') != TRUE){
            redirect('http://localhost/ambs');
        }
        $this->load->model('Profile_model');
    }
    public function index() {
        $this->load->view('profile');
    }

    public function edit(){
        $id_user = $this->input->post('id_user');
        $fullname = $this->input->post('fullname');
        $username = $this->input->post('username');

        $data = [
            'fullname' => $fullname,
            'username' => $username
        ];

        $where = ['id_user' => $id_user];
        $this->Profile_model->updateUser($where, 'user', $data);
        $this->session->set_flashdata('message', '<script>$(document).ready(function() {$("#updateSuccess").modal("show");})</script>');
        redirect('http://localhost/ambs');
    }
}

?>