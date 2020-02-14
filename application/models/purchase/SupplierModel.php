<?php
class SupplierModel extends CI_Model {

    public function addSupplier($add_Supplier) {
        $this->db->insert("supplier",$add_Supplier);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }

    public function viewSuppliers(){
        $result=$this->db->query("SELECT * FROM supplier 
										INNER JOIN city ON supplier.suppcity_Id = city.city_Id
                                        INNER JOIN state ON supplier.suppstate_Id = state.state_Id
								where supplier.supplier_Status=1");

		if($result->num_rows()>0) {
			return $result->result();
		}else {
			return false; 

		}
    }

    public function editSupplier($id){
        $result=$this->db->query("SELECT * FROM supplier 
                                        INNER JOIN city ON supplier.suppcity_Id = city.city_Id
                                        INNER JOIN state ON supplier.suppstate_Id = state.state_Id
                                where supplier.supplier_Id=$id");

            if($result->num_rows()>0) {
                return $result->row_object();
            } else {
                return false; 
            }
    }

    public function updateSupplier($edit_Supplier,$id){
        $this->db->where(array("supplier_Id"=>$id));		
		$this->db->update("supplier",$edit_Supplier);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }

}
?>