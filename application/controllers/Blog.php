<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
        parent::__construct();
    }

	public function index() {
		$this->load->model( 'blog_model' );
		$arrobjBlogs[ 'blog_model' ] = $this->blog_model->getBlogs();
		$this->load->view( 'view_blogs', $arrobjBlogs );
	}
}
