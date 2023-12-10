<?php
class News extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session', 'database');
        $this->load->model('CategoryModel');
        $this->load->model('SlugModel');
        $this->load->model('NewsModel');
    }
    public function index(){
        $data['title'] = "Panel Master";
        $data['news'] = $this->NewsModel->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }
    public function create(){
        $data['title'] = "Panel Create";
        $data['slug'] = $this->SlugModel->getAll();
        $data['category'] = $this->CategoryModel->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('news/create', $data);
        $this->load->view('templates/footer');
    }
    public function save(){
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $image = array('upload_data'=>$this->upload->data());

        $data = [
            'news_title'=>$this->input->post('title'),
            'slug_id'=>$this->input->post('slug'),
            'category_id'=>$this->input->post('category'),
            'description'=>$this->input->post('description'),
            'news_image'=>$image['upload_data']['file_name'],
        ];
        $this->NewsModel->save($data);
        $session = $this->session->set_flashdata('berhasil', 'berhasil menambahkan data');
        redirect(base_url('news/index'));
    }
    public function edit($id){
        $data['title'] = "Panel Edit";
        $data['news'] = $this->NewsModel->getById($id);
        $data['slug'] = $this->SlugModel->getAll();
        $data['category'] = $this->CategoryModel->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('news/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update(){
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $image = array('upload_data'=>$this->upload->data());
        $id = $this->input->post('news_id');
        $data = [
            'news_title'=>$this->input->post('title'),
            'slug_id'=>$this->input->post('slug'),
            'category_id'=>$this->input->post('category'),
            'description'=>$this->input->post('description'),
            'news_image'=>$image['upload_data']['file_name'],
        ];
        $this->NewsModel->update($data, $id);
        $session = $this->session->set_flashdata('berhasil', 'berhasil menambahkan data');
        redirect(base_url('news/index'));
    }
    public function delete($id){
        $data['news'] = $this->NewsModel->delete($id);
        $session = $this->session->set_flashdata('berhasil', 'berhasil menghapus data');
        redirect(base_url('news/index'));
    }
}
?>