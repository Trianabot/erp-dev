<?php
class StateModel extends CI_Model {

    public function addState($add_category) {
        $this->db->insert("state",$add_category);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewStates() {
        $this->db->where('status', 1);
        $this->db->select("*");
        $this->db->from("state");
        $query = $this->db->get();        
        return $query->result();	
    } 
    
    public function editSta($id){
        $result=$this->db->query("select * from state where state_Id=$id");
		if($result->num_rows()>0) {
			return $result->row_object();
		} else {
		 return false; 
		 }
    }

    public function updateState($edit_state,$id){
        $this->db->where(array("state_Id"=>$id));		
		$this->db->update("state",$edit_state);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }

}
?>



