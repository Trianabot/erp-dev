<?php
class SubcategoryModel extends CI_Model {

    public function addSubCategory($add_subcategory) {
        $this->db->insert("subcategory",$add_subcategory);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewSubCategories() {
        $result=$this->db->query("SELECT 
									* 
								FROM 
									subcategory 
										INNER JOIN category 
											ON 
										subcategory.cat_Id = category.category_Id
								where subcategory.status=1");

		if($result->num_rows()>0) 

		{

			return $result->result();

		}

		else 

		{

			return false; 

		}
    } 
    
    public function editSubCatmodel($id){
        // $result=$this->db->query("select * from subcategory where subcat_Id=$id");
		// if($result->num_rows()>0) {
		// 	return $result->row_object();
		// } else {
		//  return false; 
		//  }
		$result=$this->db->query("select * from subcategory 
									INNER JOIN
									category ON subcategory.cat_Id = category.category_Id
								where subcat_Id=$id");

		

		if($result->num_rows()>0) 

		{

			return $result->row_object();

		} 

		else

		{

			return false; 

		}
    }

    public function updateSubCategory($updatesub_cat,$id){
        $this->db->where(array("subcat_Id"=>$id));		
		$this->db->update("subcategory",$updatesub_cat);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }

}
?>



