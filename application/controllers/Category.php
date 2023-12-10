<?php
class Category extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session', 'session');
        $this->load->model('CategoryModel');
    }
    public function index(){
        $data['title'] = "Panel Master";
        $data['category'] = $this->CategoryModel->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('category/index', $data);
        $this->load->view('templates/footer');
    }
    public function create(){
        $data['title'] = "Panel Create";
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('category/create', $data);
        $this->load->view('templates/footer');
    }
    public function save(){
        $data = [
            'category_title'=>$this->input->post('title'),
            'description'=>$this->input->post('description'),
        ];
        $this->CategoryModel->save($data);
        $session = $this->session->set_flashdata('berhasil', 'berhasil menambahkan data');
        redirect(base_url('category/index'));
    }
    public function edit($id){
        $data['title'] = "Panel Edit";
        $data['category'] = $this->CategoryModel->getById($id);
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('category/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update(){
        $id = $this->input->post('category_id');
        $data = [
            'category_title'=>$this->input->post('title'),
            'description'=>$this->input->post('description'),
        ];
        $this->CategoryModel->update($data, $id);
        $session = $this->session->set_flashdata('berhasil', 'berhasil memperbaharui data');
        redirect(base_url('category/index'));
    }
    public function delete($id){
        $data['category'] = $this->CategoryModel->delete($id);
        $session = $this->session->set_flashdata('berhasil', 'berhasil menghapus data');
        redirect(base_url('category/index'));
    }
}
?>