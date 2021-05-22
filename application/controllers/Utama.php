<?php

class Utama extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view("utama");
    }

    public function signup() {
        $this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]', [
            'is_unique' => '*Username sudah digunakan!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'trim|required|matches[password]', [
            'matches' => '*Password tidak sesuai!'
        ]);

        if( $this->form_validation->run() == false ) {
            $this->session->set_flashdata('message', '<script>$(document).ready(function() {$("#exampleModalSignup").modal("show");})</script>');
            redirect('http://localhost/ambs');
        }else {
    
            $data = [
                'fullname' => htmlspecialchars($this->input->post('fullname')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<script>$(document).ready(function() {$("#signupSuccess").modal("show");})</script>');
            redirect('http://localhost/ambs');
        }
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //cek user
        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        //cek password
        if( $user ) {
            if( password_verify($password, $user['password']) ) {
                $data = [
                    'id_user' => $user['id_user'],
                    'fullname' => $user['fullname'],
                    'username' => $user['username'],
                    'password' => $user['password'],
                    'foto' => $user['foto'],
                    'is_logged' => TRUE
                ];
                $this->session->set_userdata($data);
                redirect('http://localhost/ambs/homelogin');
            }else {
                $this->session->set_flashdata('message', '<script>$(document).ready(function() {$("#wrongpassmodal").modal("show");})</script>');
                redirect('http://localhost/ambs');
            }
        }else {
            $this->session->set_flashdata('message', '<script>$(document).ready(function() {$("#wronguser").modal("show");})</script>');
            redirect('http://localhost/ambs');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->session->unset_userdata('is_logged');
        $this->session->unset_userdata($data);

        $this->session->set_flashdata('message', '<script>alert("Berhasil Logout!");</script>');
        redirect('http://localhost/ambs/utama');
    }
}

?>