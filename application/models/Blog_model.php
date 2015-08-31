<?php 
class Blog_model extends CI_Model{

	function __construct(){
        parent::__construct();
         $this->load->database();
    }

    public function getBlogs() {
    	$strSql = "SELECT * FROM blogs";
    	$query  = $this->db->query($strSql);
        $arrobjBlogs = $query->result();
        return $arrobjBlogs;
    }
}
?>