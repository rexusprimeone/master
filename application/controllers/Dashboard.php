<?php
class Dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session', 'database');
        $this->load->model('BlogModel');
        $this->load->model('NewsModel');
        $this->load->model('PostModel');
        $this->load->model('GalleryModel');
        $this->load->model('CategoryModel');
        $this->load->model('SlugModel');
    }
    public function index(){
        $data['blogcount'] = $this->BlogModel->count();
        $data['newscount'] = $this->NewsModel->count();
        $data['postcount'] = $this->PostModel->count();
        $data['gallerycount'] = $this->GalleryModel->count();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
?>