<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
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
        $this->load->model( 'blog_category_model' );
		 $arrobjBlogCategories['blog_categories'] = $this->blog_category_model->getBlogCategories();
		 $this->load->view('create_blog', $arrobjBlogCategories );    
    }

     public function insert_blog(){
        $this->validateBlog();
        $this->db->insert('blogs', $_POST);
        redirect('blog');
    }

     public function edit_blog() {
        
        $this->load->model('blog_model');
        $arrobjBlogs['blog'] = $this->blog_model->getBlogs($this->uri->segment(3));
        $arrobjBlogs['title'] = 'Edit Blog';

        $this->load->view('edit_blog', $arrobjBlogs ); 

    }

    public function update_blog(){
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('blogs', $_POST); 
        redirect('blog/blog_detail/'.$this->uri->segment(3));
    }

    public function unpublish_blog() {
    	$this->load->model('blog_model');
        $this->blog_model->unpublishBlogPost($this->uri->segment(3));
       	redirect('blog');
    }

    public function publish_blog() {
    	$this->load->model('blog_model');
        $this->blog_model->publishBlogPost($this->uri->segment(3));
       	redirect('blog');
    }

    public function validateBlog() {
    	
    }

}
