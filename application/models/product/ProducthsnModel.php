<?php 
class ProducthsnModel extends CI_Model {

    public function addhsnCode($add_HSN){
        $this->db->insert("producthsn",$add_HSN);
        if($this->db->affected_rows()>0) {
                return true; 
        }else{
                return false; 
        }
    }

    public function viewhsnCode(){
         $this->db->where('hsn_Status', 1);
                    $this->db->select("*");
                    $this->db->from("producthsn");
                    $query = $this->db->get();        
                    return $query->result();	
    }

    public function edithsnCode($id){
        $result=$this->db->query("select * from producthsn 
                                 where producthsn_Id=$id");
            if($result->num_rows()>0) {
            return $result->row_object();
            } else {
            return false; 
            }
    }

    public function updatehsnCode($edit_HSN,$id){
        $this->db->where(array("producthsn_Id"=>$id));		
		$this->db->update("producthsn",$edit_HSN);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }
}
?>