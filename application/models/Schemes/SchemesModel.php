<?php
class SchemesModel extends CI_Model {

    public function newScheme($addScheme) {
        $this->db->insert("schemes",$addScheme);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    public function getSchemes() {
       
        $result=$this->db->query("SELECT * FROM schemes where status='Active'");

		if($result->num_rows()>0) {
			return $result->result();
		}else {
			return false; 
		}
    }
    public function getSchemeMembers(){
        $result=$this->db->query("SELECT * FROM scheme_assign_to_retailer");

		if($result->num_rows()>0) {
			return $result->result();
		}else {
			return false; 
		}
    }
    
     public function file_to_store($partName,$brand,$category,$unitRate,$status){
        $query="insert into test_parts_table values(null,'$partName','$brand','$category','$unitRate','$status')";
		$this->db->query($query);
    }
    
    public function insertOrder($oid,$exe_mail,$town,$dist,$retailer,$scheme){
        
        $query="insert into scheme_assign_to_retailer values(null,'$oid','$exe_mail','$retailer','$town','','$scheme','','','','','','','','','$dist')";
		$this->db->query($query);
    }
    
    public function insertOrderProducts($preid,$retailer,$product_name,$product_qty){
       
        $query="insert into scheme_products_assign_to_retailer values(null,'$preid','$retailer','$product_name','$product_qty','','','','')";
		$this->db->query($query);
    }
	public function insertOrderCheques($oid,$exe_mail,$dist,$retailer,$cheque_number,$cheque_amt,$cheque_issue_date,$bank_town,$bank_name,$cheque_status){
		 //$this->db->insert_batch('scheme_assign_to_retailer_cheques', $cheques);
		 
		 $query="insert into scheme_assign_to_retailer_cheques values(null,'$oid','$exe_mail','$dist','$retailer','$cheque_number','$cheque_amt','$cheque_issue_date','$bank_town','$bank_name','','$cheque_status','')";
		$this->db->query($query);
	 }
    
    
    
    public function viewassignedSchemes(){
        $result=$this->db->query("SELECT * FROM scheme_assign_to_retailer");

		if($result->num_rows()>0) {
			return $result->result();
		}else {
			return false; 
		}
    }
    
    public function editScheme($id){
        $query = $this->db->query("select * from schemes where scheme_name='$id'");
        if($query->num_rows()>0){
            return $query->row_object();
        }else{
            return false;
        }
    }
    
    public function updateScheme($editScheme,$id){
        $this->db->where(array("scheme_name"=>$id));		
		$this->db->update("schemes",$editScheme);
		if($this->db->affected_rows()>0) {
	    	return $id;    
		} else {
		     return false; 
		 }
    }
    
    public function viewProducts(){
        $query = $this->db->query("select * from skyzenproducts_master where category_Name='COOLER'");
        
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false; 
        }
    }
    
    
    
}
?>