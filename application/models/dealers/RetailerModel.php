<?php 
class RetailerModel extends CI_Model {

    public function addRetailer($addRetailer){
        $this->db->insert("retailer",$addRetailer);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }

    public function viewDistributors(){
        $this->db->where('distributor_Status', 1);
                $this->db->select("*");
                $this->db->from("distributor");
                $query = $this->db->get();        
                return $query->result();	
    }

    public function viewRetailers(){
                
                $result=$this->db->query("select * from retailer 
                                        INNER JOIN distributor ON retailer.dist_Id = distributor.distributor_Id 
                                        INNER JOIN city ON retailer.retailerCity_Id = city.city_Id
                                        INNER JOIN state ON retailer.retailerState_Id = state.state_Id
                                        where retailer.retailer_Status=1");

                    if($result->num_rows()>0) {
                         return $result->result();
                    } else {
                         return false; 
                    }
    }

    public function editRetailer($id){
        $result=$this->db->query("select * from retailer 
                                    INNER JOIN distributor ON retailer.dist_Id = distributor.distributor_Id 
                                    INNER JOIN city ON retailer.retailerCity_Id = city.city_Id
                                    INNER JOIN state ON retailer.retailerState_Id = state.state_Id
                                    where retailer.retailer_Id=$id");

        if($result->num_rows()>0) {
            return $result->row_object();
        } else {
            return false; 
        }
    }

    public function updateRetailer($edit_Retailer,$id) {
        $this->db->where(array("retailer_Id"=>$id));		
		$this->db->update("retailer",$edit_Retailer);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }
}
?>