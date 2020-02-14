<?php

class PartsmasterModel extends CI_Model {
    
    public function addpartsMaster($partsmaster_Data){
        
        $this->db->insert("sky_parts_master",$partsmaster_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function partsLists(){
         $result = $this->db->query("select * from sky_parts_master");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
}

