<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function index() {
		$this->load->model( 'blog_category_model' );
		$arrobjBlogCategories[ 'blog_categories' ] = $this->blog_category_model->getBlogCategories();
		$this->load->view( 'blog_categories_new', $arrobjBlogCategories );
	}
}
