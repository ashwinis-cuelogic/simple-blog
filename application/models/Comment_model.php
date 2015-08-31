<?php 
class Comment_model extends CI_Model{

    function __construct(){
        parent::__construct();
         $this->load->database();
    }
    
    public function getComments($blog_id){
              
       $strSql =  "SELECT * FROM comments where blog_id= ".$blog_id;
       $query = $this->db->query($strSql);
       $arrobjComments = $query->result();
       return $arrobjComments;
    }
}
?>