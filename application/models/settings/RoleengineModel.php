<?php
class RoleengineModel extends CI_Model {
    
    public function viewCities(){
        $query = $this->db->query("select DISTINCT city_name from dealer_target where city_name <> '';");
        if($query->num_rows()>0){
            return $query->result();
        }else {
            return false; 
        }
    }
    
    public function targetView($city_name,$dealer_name,$month){
         $query = $this->db->query("select * from dealer_target WHERE city_name LIKE '%$city_name%' AND dealer_name LIKE '%$dealer_name%' AND month LIKE '%$month%'");
            if($query->num_rows()>0){
                   return $query->row();
            }else {
                return false;
            }
    }
    
     public function viewmasterProducts(){
          $result = $this->db->query("select DISTINCT product_type from products_master");
          if($result->num_rows()>0) {
                return $result->result();}
            else {
                return false; 

            }
      }
    
    public function viewasps(){
         $result = $this->db->query("select * from asp");
          if($result->num_rows()>0) {
                return $result->result();}
            else {
                return false; 

            }
    }

    
    public function addgeneralRUles($pur){
       
           for($i=0; $i < count($pur['aspallowcategory_Name']); $i++){
                                $after_free = (float)preg_replace('/[^0-9\.]/ui','',$pur['aspallowrateafter_Free'][$i]);
                                    $addgeneral_Rules = array(
                                            "aspallowcategory_Name"=> $pur['aspallowcategory_Name'][$i],
                                            "aspallowsubcategory_Name"=> $pur['aspallowsubcategory_Name'][$i],
                                            "aspallow_Free"=> $pur['aspallow_Free'][$i],
                                            "aspallowrateafter_Free"=> $after_free
                                    );				
                                  $this->db->insert("aspallowgeneral_Rules",$addgeneral_Rules);
                       }
                        
                                   //echo $this->db->last_query();die; 
                                   if($this->db->affected_rows()>0){
                                       return true;
                                   }else {
                                       return false; 
                                   }
      }
      
      public function viewgeneralRules(){
          $result = $this->db->query("select * from aspallowgeneral_Rules ORDER BY generalrules_Id desc");
          if($result->num_rows()>0){
              return $result->result();
          }else {
              return false; 
          }
      }
    
    public function editgeneralRule($id){
        $result = $this->db->query("select * from aspallowgeneral_Rules where generalrules_Id=$id");
          if($result->num_rows()>0){
              return $result->row_object();
          }else {
              return false; 
          }
    }
    
    public function updategeneralRule($edit_generalRule,$id){
         $this->db->where(array("generalrules_Id"=>$id));		
		$this->db->update("aspallowgeneral_Rules",$edit_generalRule);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }
    
    public function addspecificRUles($pur){
         for($i=0; $i < count($pur['aspallowcategory_Name']); $i++){	
              $after_free = (float)preg_replace('/[^0-9\.]/ui','',$pur['aspallowrateafter_Free'][$i]);
                                    $addspecific_Rules = array(
                                            "aspspecific_Name" => $pur['aspspecific_Name'][$i],
                                            "aspallowcategory_Name"=> $pur['aspallowcategory_Name'][$i],
                                            "aspallowsubcategory_Name"=> $pur['aspallowsubcategory_Name'][$i],
                                            "aspallow_Free"=> $pur['aspallow_Free'][$i],
                                            "aspallowrateafter_Free"=> $after_free
                                    );				
                                  $this->db->insert("aspspecific_rules",$addspecific_Rules);
                       }
                        
                                   //echo $this->db->last_query();die; 
                                   if($this->db->affected_rows()>0){
                                       return true;
                                   }else {
                                       return false; 
                                   }
    }
    
    public function viewspecificRules(){
          $result = $this->db->query("select * from aspspecific_rules 
                                    INNER JOIN asp ON asp.asp_Id = aspspecific_rules.aspspecific_Name
                                    ORDER BY specificrules_Id desc");
          if($result->num_rows()>0){
              return $result->result();
          }else {
              return false; 
          }
      }
    
    public function editspecificRule($id){
         $result = $this->db->query("select * from aspspecific_rules 
                            INNER JOIN asp ON asp.asp_Id = aspspecific_rules.aspspecific_Name
                            where specificrules_Id=$id");
          if($result->num_rows()>0){
              return $result->row_object();
          }else {
              return false; 
          }
    }
    
    public function updatespecificRule($edit_specificRule,$id){
         $this->db->where(array("specificrules_Id"=>$id));		
		$this->db->update("aspspecific_rules",$edit_specificRule);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }
}