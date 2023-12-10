<?php
class Gallery extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session', 'database');
        $this->load->model('CategoryModel');
        $this->load->model('SlugModel');
        $this->load->model('GalleryModel');
    }
    public function index(){
        $data['title'] = "Panel Master";
        $data['gallery'] = $this->GalleryModel->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('gallery/index', $data);
        $this->load->view('templates/footer');
    }
    public function create(){
        $data['title'] = "Panel Create";
        $data['slug'] = $this->SlugModel->getAll();
        $data['category'] = $this->CategoryModel->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('gallery/create', $data);
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
            'gallery_title'=>$this->input->post('title'),
            'slug_id'=>$this->input->post('slug'),
            'category_id'=>$this->input->post('category'),
            'description'=>$this->input->post('description'),
            'gallery_image'=>$image['upload_data']['file_name'],
        ];
        $this->GalleryModel->save($data);
        $session = $this->session->set_flashdata('berhasil', 'berhasil menambahkan data');
        redirect(base_url('gallery/index'));
    }
    public function edit($id){
        $data['title'] = "Panel Edit";
        $data['gallery'] = $this->GalleryModel->getById($id);
        $data['slug'] = $this->SlugModel->getAll();
        $data['category'] = $this->CategoryModel->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('gallery/edit', $data);
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
        $id = $this->input->post('gallery_id');
        $data = [
            'gallery_title'=>$this->input->post('title'),
            'slug_id'=>$this->input->post('slug'),
            'category_id'=>$this->input->post('category'),
            'description'=>$this->input->post('description'),
            'gallery_image'=>$image['upload_data']['file_name'],
        ];
        $this->GalleryModel->update($data, $id);
        $session = $this->session->set_flashdata('berhasil', 'berhasil menambahkan data');
        redirect(base_url('gallery/index'));
    }
    public function delete($id){
        $data['gallery'] = $this->GalleryModel->delete($id);
        $session = $this->session->set_flashdata('berhasil', 'berhasil menghapus data');
        redirect(base_url('gallery/index'));
    }
}
?>