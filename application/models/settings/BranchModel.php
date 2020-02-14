<?php

class BranchModel extends CI_Model {
    
    public function addbranchCSV($branchcsv_Data){
        
        $this->db->insert("branch",$branchcsv_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewBranches(){
         $result = $this->db->query("select * from branch");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
}

