<?php
class BrandModel extends CI_Model {

    public function addBrand($add_brand) {
        $this->db->insert("brand",$add_brand);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewBrands() {
        $this->db->where('status', 1);
        $this->db->select("*");
        $this->db->from("brand");
        $query = $this->db->get();        
        return $query->result();	
    } 
    
    public function editbrandName($id){
        $result=$this->db->query("select * from brand where brand_Id=$id");
		if($result->num_rows()>0) {
			return $result->row_object();
		} else {
		 return false; 
		 }
    }

    public function updateBrand($edit_brand,$id){
        $this->db->where(array("brand_Id"=>$id));		
		$this->db->update("brand",$edit_brand);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }
    
     public function viewBrandProduct($id){
        $result=$this->db->query("select * from products where brand_Id=$id");
       
		if($result->num_rows()>0) {
			return $result->result();
		} else {
		 return false; 
		 }
    }

    public function totalProduct($id){
        $this->db->from('products');

        $this->db->or_where('brand_Id =', $id);

        return $totalProduct = $this->db->count_all_results();
        // echo $this->db->last_query(); die; 
    }

}
?>



