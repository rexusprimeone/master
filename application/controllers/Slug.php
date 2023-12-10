<?php
class Slug extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session', 'database');
        $this->load->model('SlugModel');
    }
    public function index(){
        $data['title'] = "Panel Master";
        $data['slug'] = $this->SlugModel->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('slug/index', $data);
        $this->load->view('templates/footer');
    }
    public function create(){
        $data['title'] = "Panel Add Data";
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('slug/create', $data);
        $this->load->view('templates/footer');
    }
    public function save(){
        $data = [
            'slug_title'=>$this->input->post('title'),
            'description'=>$this->input->post('description'),
        ];
        $this->SlugModel->save($data);
        $session = $this->session->set_flashdata('berhasil', 'berhasil menambahkan data');
        redirect(base_url('slug/index'));
    }
    public function edit($id){
        $data['title'] = "Panel Edit Data";
        $data['slug'] = $this->SlugModel->getById($id);
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('slug/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update(){
        $id = $this->input->post('slug_id');
        $data = [
            'slug_title'=>$this->input->post('title'),
            'description'=>$this->input->post('description'),
        ];
        $this->SlugModel->update($data, $id);
        $session = $this->session->set_flashdata('berhasil', 'berhasil memperbaharui data');
        redirect(base_url('slug/index'));
    }
    public function delete($id){
        $data['slug'] = $this->SlugModel->delete($id);
        $session = $this->session->set_flashdata('berhasil', 'berhasil menghapus data');
        redirect(base_url('slug/index'));
    }
}
?>