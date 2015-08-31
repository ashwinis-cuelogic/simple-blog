<?php 
class Blog_model extends CI_Model{

	function __construct(){
        parent::__construct();
         $this->load->database();
    }

    public function getBlogs( $blog_id = NULL ){
              
        $strSql =  "SELECT b.*, 
                            u.first_name,
                            u.last_name 
                    FROM blogs b
                        JOIN users u ON( b.user_id = u.id )";
                    if( false == is_null( $blog_id ) ) {
                        $strSql.= " WHERE b.id = ". $blog_id;
                    }
              
           $query = $this->db->query($strSql);
           $arrobjBlogs = $query->result();
           return $arrobjBlogs;
    }

    public function getBlogsByCategoryId( $blog_category_id = NULL ){
              
        $strSql =  "SELECT b.*, 
                            u.first_name,
                            u.last_name
                    FROM blogs b
                        JOIN blog_categories bc ON( b.blog_category_id = bc.id )
                        JOIN users u ON( b.user_id = u.id ) ";
                    if( false == is_null( $blog_category_id ) ) {
                        $strSql.= " WHERE bc.id = ". $blog_category_id;
                    }
               
           $query = $this->db->query($strSql);
           $arrobjBlogs = $query->result();
           return $arrobjBlogs;
    }
}
?>