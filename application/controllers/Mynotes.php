<?php

class Mynotes extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_logged') != TRUE){
            redirect('http://localhost/ambs');
        }
        $this->load->model('Mynotes_model');
        // $this->load->library('form_validation');
    }

    public function index(){
        $id_user = $this->session->userdata('id_user');

        $where = ['id_user' => $id_user];
        $data['note'] = $this->Mynotes_model->getAllNotes('note', $where)->result();
        $this->load->view('mynotes', $data);
    }

    public function tambah(){
        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => '*kolom judul harus diisi!'
        ]);
        $this->form_validation->set_rules('isi', 'Isi', 'required', [
            'required' => '*note belum ditulis, silahkan tulis note terlebih dahulu sebelum disimpan.'
        ]);

        if($this->form_validation->run() == false){
            $this->load->view('formnote');
        }else{
            $id_user = $this->input->post('id_user');
            $judul = $this->input->post('judul');
            $kategori = $this->input->post('kategori');
            $isi = $this->input->post('isi');
            $tanggal = date("Y-m-d");
            date_default_timezone_set("Asia/Jakarta");
            $jam = date("h:i:sa");

            $data = [
                'id_user' => $id_user,
                'judul' => $judul,
                'kategori' => $kategori,
                'isi' => $isi,
                'tanggal' => $tanggal,
                'jam' => $jam
            ];

            $this->db->insert('note', $data);
            $this->session->set_flashdata('message', '<script>alert("Note berhasil dibuat!")</script>');
            redirect('mynotes');
        }
    }

    public function view($id){
        $where = ['id' => $id];
        $data['note'] = $this->Mynotes_model->getNoteById($where, 'note')->result();
        $this->load->view('viewnote', $data);
    }
    
    public function edit(){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $kategori = $this->input->post('kategori');
        $isi = $this->input->post('isi');
        $tanggal = date("Y-m-d");
        date_default_timezone_set("Asia/Jakarta");
        $jam = date("h:i:sa");

        $data = [
            'judul' => $judul,
            'kategori' => $kategori,
            'isi' => $isi,
            'tanggal' => $tanggal,
            'jam' => $jam
        ];

        $where = ['id' => $id];
        $this->Mynotes_model->updateNote($where, 'note', $data);
        redirect('http://localhost/ambs/mynotes');

        // ------------------------------------------------------------------------------------------------------
        // $this->form_validation->set_rules('judul', 'Judul', 'required', [
        //     'required' => '*kolom judul harus diisi!'
        // ]);
        // $this->form_validation->set_rules('isi', 'Isi', 'required', [
        //     'required' => '*note belum ditulis, silahkan tulis note terlebih dahulu sebelum disimpan.'
        // ]);

        // if($this->form_validation->run() == false){
        //     $this->load->view('viewnote');
        // }else{
            // $id = $this->input->post('id');
            // $judul = $this->input->post('judul');
            // $kategori = $this->input->post('kategori');
            // $isi = $this->input->post('isi');
            // $tanggal = date("Y-m-d");
            // date_default_timezone_set("Asia/Jakarta");
            // $jam = date("h:i:sa");

            // $data = array(
            //     'judul' => $judul,
            //     'kategori' => $kategori,
            //     'isi' => $isi,
            //     'tanggal' => $tanggal,
            //     'jam' => $jam
            // );

            // $where = array('id' => $id);
            // $this->Mynotes_model->updateNote($where,'note',$data);
            // $this->session->set_flashdata('message', '<script>alert("Note berhasil diubah!")</script>');
            // redirect('http://localhost/ambs/mynotes/');
        // }
    }

    public function delete($id) {
        $where = ['id' => $id];
        $this->Mynotes_model->deleteNote($where, 'note');
        $this->session->set_flashdata('message', '<script>alert("Note berhasil dihapus!")</script>');
        redirect('mynotes');
    }
}