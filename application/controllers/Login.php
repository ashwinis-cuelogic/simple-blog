<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');   
    }
    
    public function index($msg = NULL){
        $data['msg'] = $msg;
        $this->load->view('login_user', $data);
    }

    public function process(){
        $this->load->model('login_model');
        $result = $this->login_model->validate();
        if(! $result){
            $strInvalidUser = 'Please enter valid username and password';
            $this->index($strInvalidUser);
        }else{
              redirect('category');
        }        
    }
}
