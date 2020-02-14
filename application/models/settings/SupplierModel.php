<?php

class SupplierModel extends CI_Model {
    
    public function addsupplierCSV($suppliercsv_Data){
        
        $this->db->insert("supp",$suppliercsv_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewSupp(){
         $result = $this->db->query("select * from supp");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
}

