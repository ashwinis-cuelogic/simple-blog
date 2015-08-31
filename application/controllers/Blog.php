<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
        parent::__construct();
    }

	public function index() {
		$this->load->model( 'blog_model' );
		 $arrobjBlogs['blogs'] = $this->blog_model->getBlogsByCategoryId($this->uri->segment(3));
        $this->load->view('view_blogs', $arrobjBlogs );  
	}
}
