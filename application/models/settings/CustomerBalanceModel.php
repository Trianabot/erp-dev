<?php

class CustomerBalanceModel extends CI_Model {
    
    public function addcustbalance($custbalance_Data){
        
        $this->db->insert("customerbalance",$custbalance_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function custbalanceLists(){
         $result = $this->db->query("select * from customerbalance");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
}

