<?php 
class Blog_category_model extends CI_Model{

	function __construct(){
        parent::__construct();
         $this->load->database();
    }

    public function getBlogCategories() {
    	$strSql = "SELECT * FROM blog_categories";
    	$query  = $this->db->query($strSql);
        $arrobjBlogCategories = $query->result();
        return $arrobjBlogCategories;
    }
}
?>