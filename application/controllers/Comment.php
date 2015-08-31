<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {


	function __construct(){
        parent::__construct();       
    }
    
    public function index(){
        $this->load->model('blog_model');
        $arrobjComments['blog'] = $this->blog_model->getBlogs($this->uri->segment(3));
        $this->load->model('comment_model');
        $arrobjComments['comments'] = $this->comment_model->getComments($this->uri->segment(3));
        
        $this->load->view('view_comment', $arrobjComments );    
    }	

    public function insert_comment(){
        $this->db->insert('comments', $_POST);
        redirect('comment/index/'.$_POST['blog_id']);
    }

}
