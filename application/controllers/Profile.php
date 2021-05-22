<?php 

class Profile extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_logged') != TRUE){
            redirect('http://localhost/ambs');
        }
        $this->load->model('Profile_model');
        $this->load->library('form_validation');
    }
    public function index() {
        $this->load->view('profile');
    }

    public function edit(){
        $id_user = $this->input->post('id_user');
        $fullname = $this->input->post('fullname');
        $username = $this->input->post('username');

        //check image
        $upload_image = $_FILES['foto']['name'];

        if($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);

            if( $this->upload->do_upload('foto') ) {
                $new_foto = $this->upload->data('file_name');
            }else{
                echo $this->upload->display_errors();
            }
        }

        $data = [
            'fullname' => $fullname,
            'username' => $username,
            'foto' => $new_foto
        ];

        $where = ['id_user' => $id_user];
        $this->Profile_model->updateUser($where, 'user', $data);
        $this->session->set_flashdata('message', '<script>$(document).ready(function() {$("#updateSuccess").modal("show");})</script>');
        redirect('http://localhost/ambs');
    }

    public function editpass(){
        $this->load->view('changepass');
    }

    public function editpassprocess(){
        $this->form_validation->set_rules('current', 'Current', 'required|trim');
        $this->form_validation->set_rules('newpass', 'Newpass', 'required|trim');
        $this->form_validation->set_rules('confirmpass', 'Confirmpass', 'required|trim|matches[newpass]', [
            'matches' => '*Password tidak sama!'
        ]);

        if( $this->form_validation->run() == false ) {
            $this->load->view('changepass');
        }else{
            $id_user = $this->input->post('id_user');
            $current = $this->input->post('current');
            $newpass = $this->input->post('newpass');
            $confirmpass = $this->input->post('confirmpass');
            if( !password_verify($current, $this->session->userdata('password')) ){
                $this->session->set_flashdata('message', '<script>alert("Wrong current password!");</script>');
                redirect('http://localhost/ambs/profile/editpass');
            }else{
                $password_hash = password_hash($newpass, PASSWORD_DEFAULT);

                $this->db->set('password', $password_hash);
                $this->db->where('id_user', $id_user);
                $this->db->update('user');

                $this->session->set_flashdata('message', '<script>$(document).ready(function() {$("#passupdateSuccess").modal("show");})</script>');
                redirect('http://localhost/ambs');
            }
        }




    }
}

?>