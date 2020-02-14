<?php 
class UserroleModel extends CI_Model {
    
    public function users() {
        $result=$this->db->query("SELECT * FROM users 
                                    INNER JOIN roles 
                                            ON 
                                            users.user_role_id = roles.role_Id");
		if($result->num_rows()>0) {
			return $result->result();
		}else{
			return false; 
		}
    }

    public function addRole($add_Role){
        $this->db->insert("roles",$add_Role);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }

    public function viewRoles(){
        $result=$this->db->query("SELECT * FROM roles");
		if($result->num_rows()>0) {
			return $result->result();
		}else{
			return false; 
		}
    }

    public function editRole($id){
        $result=$this->db->query("select * from roles where role_Id=$id");
		if($result->num_rows()>0) {
			return $result->row_object();
		} else {
		 return false; 
		 }
    }

    public function updateRole($edit_role,$id){
        $this->db->where(array("role_Id"=>$id));		
		$this->db->update("roles",$edit_role);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }
    
    public function addnewUser($addnewUser){
         $this->db->insert("users",$addnewUser);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function userData($id){
         $result=$this->db->query("select * from users where id=$id");
		if($result->num_rows()>0) {
			return $result->row_object();
		} else {
		 return false; 
		 }
    }
    
    public function updatePassword($updatePwd,$id){
        $this->db->where(array("id"=>$id));		
		$this->db->update("users",$updatePwd);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }
    
    public function addUsers($users_Data){
        
         $this->db->insert("users",$users_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function usercsvData(){
         $query = $this->db->query("select  userdept_Name, contact_Person,  email, password, contact_Number, alternatecontact_Number, address, user_State, user_City, user_Pincode, usersdept_Name, user_role.user_role from users 
        
        LEFT JOIN user_role ON user_role.id = users.user_role_id");
        
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false; 
        }
    }
    
    public function distData(){
        $query = $this->db->query("select  user_role_id, userdept_Name, contact_Person,  email, contact_Number, alternatecontact_Number, address, alternate_Address, user_State, user_City, user_Pincode, user_Latitude, user_Longitutde, usersdept_Name, dealer_type, party_Type from users 
        where user_role_id=3");
        
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false; 
        }
    }
    
    public function dealerData(){
        $query = $this->db->query("select  user_role_id, userdept_Name, contact_Person,  email, contact_Number, alternatecontact_Number, address, alternate_Address, user_State, user_City, user_Pincode, user_Latitude, user_Longitutde, usersdept_Name, dealer_type, party_Type from users 
        where user_role_id=4");
        
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false; 
        }
    }
    
}
?>