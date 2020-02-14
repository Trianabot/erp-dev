<?php

class DivisionModel extends CI_Model {
    
    public function adddivisionCSV($divisioncsv_Data){
        
        $this->db->insert("division",$divisioncsv_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewDivisions(){
         $result = $this->db->query("select * from division");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
}

