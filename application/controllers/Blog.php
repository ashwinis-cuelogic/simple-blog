<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
        parent::__construct();
    }

	public function index() {
		$this->load->model( 'blog_model' );
		 $arrobjBlogs['blogs'] = $this->blog_model->getBlogsByCategoryId($this->uri->segment(3));
        $this->load->view('view_blog_new', $arrobjBlogs );  
	}

	public function blog_detail() {
		$this->load->model( 'blog_model' );
		 $arrobjBlogs['blogs'] = $this->blog_model->getBlogs($this->uri->segment(3));
        $this->load->view('blog_detail', $arrobjBlogs );  
	}

	
	 public function create_blog() {
        
        if(! $this->session->userdata('validated')){
            redirect('category');
        }
        $this->load->view('create_blog' );    
    }
}
