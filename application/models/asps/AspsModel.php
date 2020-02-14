<?php
class AspsModel extends CI_Model {

    public function addProduct($add_brand) {
        $this->db->insert("products",$add_brand);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewAsps() {
        $result=$this->db->query("SELECT * FROM asps");

		if($result->num_rows()>0) 

		{

			return $result->result();

		}

		else 

		{

			return false; 

		}
    } 

    public function viewServiceengineer() {
        $result=$this->db->query("SELECT * FROM asps");

		if($result->num_rows()>0) 

		{

			return $result->result();

		}

		else 

		{

			return false; 

		}
    }
    public function users() {
        $result=$this->db->query("SELECT * FROM user_role");

		if($result->num_rows()>0) 

		{

			return $result->result();

		}

		else 

		{

			return false; 

		}
    }
    
    public function editProd($id){
        $result=$this->db->query("select * from products 
        INNER JOIN brand ON products.brand_Id = brand.brand_Id
        INNER JOIN category ON products.cat_Id = category.category_Id
        INNER JOIN subcategory ON products.subcat_Id = subcategory.subcat_Id
                                where product_Id=$id");
		if($result->num_rows()>0) {
			return $result->row_object();
		} else {
		 return false; 
		 }
    }

    public function updateProduct($editProduct,$id){
        $this->db->where(array("product_Id"=>$id));		
		$this->db->update("products",$editProduct);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }

}
?>



