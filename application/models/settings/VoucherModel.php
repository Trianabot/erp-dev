<?php 
class VoucherModel extends CI_Model {
    
    public function addVoucher($add_Voucher){
         $this->db->insert("voucher_type",$add_Voucher);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    } 
    
    public function viewVouchers(){
        $this->db->where('status', 1);
        $this->db->select("*");
        $this->db->from("voucher_type");
        $query = $this->db->get();        
        return $query->result();	
    }
    
    public function editVoucher($id){
          $result=$this->db->query("select * from voucher_type where voucher_Id=$id");
		if($result->num_rows()>0) {
			return $result->row_object();
		} else {
		 return false; 
		 }
    }
    
    public function updateVoucher($edit_Voucher,$id){
        $this->db->where(array("voucher_Id"=>$id));		
		$this->db->update("voucher_type",$edit_Voucher);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }
    
}
?>