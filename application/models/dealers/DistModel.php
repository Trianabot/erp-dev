<?php
class DistModel extends CI_Model {

    public function addDistrict($add_District) {
        $this->db->insert("district",$add_District);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewdistricts() {
        $result=$this->db->query("SELECT 
									* 
								FROM 
                                district 
										INNER JOIN state 
											ON 
                                            district.state_Id = state.state_Id
								where district.status=1");

		if($result->num_rows()>0) {
			return $result->result();
		}else{
			return false; 
		}
    } 
    
    public function editDist($id){
		$result=$this->db->query("SELECT 
									* FROM district 
									INNER JOIN
									state ON district.state_Id = state.state_Id
								where dist_Id=$id");

		if($result->num_rows()>0) {
			return $result->row_object();
		}else{
			return false; 
		}
    }

    public function updateDistrict($update_District,$id){
        $this->db->where(array("dist_Id"=>$id));		
		$this->db->update("district",$update_District);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }

}
?>



