<?php 
class Login_model extends CI_Model{

    function __construct(){
        parent::__construct();
         $this->load->database();
    }
    
    public function validate(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        $query = $this->db->get('users');
        $row = $query->row();

        if(isset($row->id))
        { 
            // If there is a user, then create session data
             $data = array(
                    'userid' => $row->id,
                    'firstname' => $row->first_name,
                    'lastname' => $row->last_name,
                    'username' => $row->username,
                    'usertypeid' => $row->user_type_id,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
}
?>