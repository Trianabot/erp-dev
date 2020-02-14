<?php
class SubDistModel extends CI_Model {

    public function addSubdistrict($add_Subdistrict) {
        $this->db->insert("subdistrict",$add_Subdistrict);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewsubdistricts() {
        $result=$this->db->query("SELECT * FROM subdistrict 
										INNER JOIN state ON subdistrict.state_Id = state.state_Id
                                        INNER JOIN district ON subdistrict.dist_Id = district.dist_Id
                                where subdistrict.status=1");
                                
                        //         echo "SELECT * FROM subdistrict 
                        //         INNER JOIN state ON subdistrict.state_Id = state.state_Id
                        //         INNER JOIN district ON subdistrict.dist_Id = district.dist_Id
                        // where subdistrict.status=1"; die; 

		if($result->num_rows()>0) {
			return $result->result();
		}else{
			return false; 
		}
    } 
    
    public function edistsubDist($id){
		$result=$this->db->query("SELECT * FROM subdistrict 
                                    INNER JOIN state ON subdistrict.state_Id = state.state_Id
                                    INNER JOIN district ON subdistrict.dist_Id = district.dist_Id
								where subdistrict.subdist_Id=$id");

		if($result->num_rows()>0) {
			return $result->row_object();
		}else{
			return false; 
		}
    }

    public function updateSubdistrict($edit_Subdistrict,$id){
        $this->db->where(array("subdist_Id"=>$id));		
		$this->db->update("subdistrict",$edit_Subdistrict);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }

}
?>



