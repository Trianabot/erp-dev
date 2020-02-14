<?php 
class MasterModel extends CI_Model {
    
    public function addDealer($new_Dealer){
          $this->db->insert("dealers",$new_Dealer);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewDealers(){
         $result = $this->db->query("select * from dealers");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function addExecutive($new_Executive){
          $this->db->insert("executives",$new_Executive);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewExecutives(){
        $result = $this->db->query("select * from executives");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function addcitymaster($citymasters_Data){
         $this->db->insert("citymasters",$citymasters_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function citymasterLists(){
        $result = $this->db->query("select * from citymasters");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
     public function addProduct($products_Data){
         $this->db->insert("prod_master",$products_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function productDetail(){
        $result = $this->db->query("select * from prod_master");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function addpartsMaster($parts_Data){
         $this->db->insert("skyzenparts_master",$parts_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function partsmasterDetail(){
        $result = $this->db->query("select * from skyzenparts_master");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
        public function addaspLocation($asplocation_Data){
        $this->db->insert("asp_location",$asplocation_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewasplocations(){
        $result = $this->db->query("select * from asp_location");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function addspareParts($inserdata){
        $res = $this->db->insert_batch('skyzenparts_master',$inserdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function addprodComplaint($inserdata){
         $res = $this->db->insert_batch('product_complaint',$inserdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function viewprodcomplaints() {
        $result = $this->db->query("select * from product_complaint");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function addskyzenProduct($inserdata){
        // $res = $this->db->insert_batch('skyzenproducts_master',$inserdata);
        $res = $this->db->insert_batch('product_Master',$inserdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function viewskyzenProducts(){
       $result = $this->db->query("select * from skyzenproducts_master 
                                    where status='Active'");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function addskyzenPart($inserdata){
        $res = $this->db->insert_batch('skyzenpart_master',$inserdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function viewskyzenParts(){
       $result = $this->db->query("select * from skyzenpart_master 
                   
            where skyzenpart_master.part_Status=1");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function addaspMaster($inserdata){
        
        
//        echo "<pre>";
//        print_r($inserdata); die; 
//        foreach($inserdata as $data){
//            echo "<pre>";
//            print_r($data); 
//        } die; 
        
        
        foreach($inserdata as $data){
            $addaspusers = array(
                    "user_role_id" => 7,
                    "email" => $data['asp_Email'],
                    "password" =>md5('asp')
                );
                
            $this->db->insert("users",$addaspusers);
                
                //$data['asp_Name']; 
        }
        die; 
        $res = $this->db->insert_batch('asp_master',$inserdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function viewaspMaster(){
        $result = $this->db->query("select * from users where user_role_id=7");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function addCategory($addcategory_Details){
        $this->db->insert("category_master",$addcategory_Details);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewmasterCategories(){
        $result = $this->db->query("select * from category_master 
                                INNER JOIN brand_master ON brand_master.brand_Name = category_master.categorybrand_Name
                                where category_Status=1");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function addbulkcategoryMaster($inserdata){
        $res = $this->db->insert_batch('category_master',$inserdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function addpartMaster($addpartMaster){
        $this->db->insert("skyzenpart_master",$addpartMaster);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function addprodMaster($addprodMaster){
        $this->db->insert("skyzenproducts_master",$addprodMaster);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function addbranchMaster($addbranchMaster){
        $this->db->insert("branch_master",$addbranchMaster);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewBranches(){
        $result = $this->db->query("select * from branch_master where branch_Status=1");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function editbrancDetail($id){
        $result = $this->db->query("select * from branch_master where branch_Id=$id");
        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        } 
    }
    
    public function updateBranch($editbranch,$id){
         $this->db->where(array("branch_Id"=>$id));		
		$this->db->update("branch_master",$editbranch);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }
    
    public function addbulkbranch($inserdata){
        $res = $this->db->insert_batch('branch_master',$inserdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function addlocationMaster($addlocationMaster){
        $this->db->insert("location_master",$addlocationMaster);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewLocations(){
        $result = $this->db->query("select * from location_master where location_Status=1");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function addbulklocation($inserdata){
        $res = $this->db->insert_batch('location_master',$inserdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function editlocationDetail($id){
        $result = $this->db->query("select * from location_master where location_Id=$id");
        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        } 
    }
    
    public function addAsp($addasp){
         $res = $this->db->insert('users',$addasp);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function adddistMaster($insertdata){
        $res = $this->db->insert_batch('users',$insertdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function viewdistMaster(){
        $result = $this->db->query("select * from users where user_role_id=3");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
     public function addexeMaster($insertdata){
         $res = $this->db->insert_batch('users',$insertdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function viewexeMaster(){
       $result = $this->db->query("select * from users where user_role_id=6");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function adddealerMaster($insertdata){
        $res = $this->db->insert_batch('users',$insertdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    } 
    
    //viewdealerMaster()
      public function viewdealerMaster(){
       $result = $this->db->query("select * from users where user_role_id=4");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function partMasters(){
        $result = $this->db->query("select part_Name,part_Description,part_Smu,part_AlternateSmu,Brand,Category,partunit_Rate from skyzenpart_master");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function execData(){
        $result = $this->db->query("select user_role_id,contact_Person,email,password,contact_Number,alternatecontact_Number,
            address, alternate_Address, user_State, user_City, user_Pincode, user_Latitude, user_Longitutde, usersdept_Name, salesretailer_Name from users where user_role_id=6");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function viewexedistretCity(){
        $result = $this->db->query("select * from sales_executives_master");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function addexedistdealercity($insertdata){
        $res = $this->db->insert_batch('sales_executives_master',$insertdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function addDistributor($addDistributor){
        $res = $this->db->insert('users',$addDistributor);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function editdistMaster($id){
        $query = $this->db->query("select * from users where id=$id");
        if($query->num_rows () > 0){
            return $query->row_object();
        }else {
            return false; 
        }
    }
    
    public function updateDistributor($updateDistributor,$id){
        $this->db->where(array("id"=>$id));		
		$this->db->update("users",$updateDistributor);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }  
    }
    
}
?>