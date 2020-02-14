<?php
class CategoryModel extends CI_Model {

    public function addCategory($add_category) {
        $this->db->insert("category",$add_category);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewCategories() {
                    // $this->db->where('status', 1);
                    // $this->db->select("*");
                    // $this->db->from("category");
                    // $query = $this->db->get();        
                    // return $query->result();	
                    $result=$this->db->query("SELECT * FROM category 
										INNER JOIN brand ON category.brand_Id = brand.brand_Id
								where category.status=1");
		if($result->num_rows()>0){
			return $result->result();
		}else{
			return false; 
		}
    } 
    
    public function editcategoryName($id){
        $result=$this->db->query("select * from category 
                                INNER JOIN brand ON category.brand_Id = brand.brand_Id
                                where category_Id=$id");
		if($result->num_rows()>0) {
			return $result->row_object();
		} else {
		 return false; 
		 }
    }

    public function updateCategory($edit_category,$id){
        $this->db->where(array("category_Id"=>$id));		
		$this->db->update("category",$edit_category);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }

}
?>



