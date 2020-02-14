<?php 
class DistributorModel extends CI_Model {

    public function addDistributor($addDistributor){
        $this->db->insert("distributor",$addDistributor);
        if($this->db->affected_rows()>0) {
                $insert_id = $this->db->insert_id();
                $dist_res=$this->db->query("select * from distributor where distributor_Id=$insert_id");

                $row_pur=$dist_res->row();

                $userRole = array(
                    "user_role_id"=>3,
                    "username"=>'',
                    "first_name"=>$row_pur->contact_Person,
                    "last_name"=>$row_pur->contact_Person,
                    "email"=>$row_pur->dist_Email,
                    "password"=>$row_pur->dist_Password,
                    "distributor_Id"=>$row_pur->distributor_Id
                );

                $this->db->insert("users",$userRole);	
                
                return true;

        }else{
                return false; 
        }
    }

    public function viewDistributors(){
        $result=$this->db->query("SELECT * FROM distributor 
										INNER JOIN city ON distributor.distcity_Id = city.city_Id
                                        INNER JOIN state ON distributor.diststate_Id = state.state_Id
								where distributor.distributor_Status=1");

		if($result->num_rows()>0) {
			return $result->result();
		}else {
			return false; 

		}
    }

    public function editDistributor($id){
        $result=$this->db->query("select * from distributor 
                                    INNER JOIN city ON distributor.distcity_Id = city.city_Id
                                    INNER JOIN state ON distributor.diststate_Id = state.state_Id
                                    where distributor.distributor_Id=$id");

        if($result->num_rows()>0) {
            return $result->row_object();
        } else {
            return false; 
        }
    }

    public function updateDistributor($edit_Distributor,$id){
        $this->db->where(array("distributor_Id"=>$id));		
		$this->db->update("distributor",$edit_Distributor);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }

    public function adddistributorOrder($adddistributor_Order,$pur){
        $result=$this->db->insert("distributor_order",$adddistributor_Order);			
			
		if($this->db->affected_rows()>0) 
		{
			$insert_id = $this->db->insert_id();
			
			$pur_res=$this->db->query("select * from distributor_order where distorder_Id=$insert_id");
			
			$row_pur=$pur_res->row();
			
			
			for($i=0; $i < count($pur['product_Name']); $i++){			 		
				$add_prodcts=array(
					
                    "product_Id"=> $pur['product_Id'][$i],
                    "product_Name"=> $pur['product_Name'][$i],
                    "product_HSN"=> $pur['product_HSN'][$i],
                    "product_Qty"=> $pur['product_Qty'][$i],
                    "product_Unitprice"=> $pur['product_Unitprice'][$i],
                    "product_Value"=> $pur['product_Value'][$i],
                    "product_GST"=> $pur['product_GST'][$i],
                    "inputGST"=> $pur['inputGST'][$i],
                    "product_Discount"=> $pur['product_Discount'][$i],
                    "inputDiscount"=> $pur['inputDiscount'][$i],
                    "product_Total"=> $pur['product_Total'][$i],
                    "productorder_Date"=> $row_pur->ordergenerate_Date,
                    "distorder_Id"=> $insert_id
					
				);				
				$this->db->insert("distorder_product",$add_prodcts);					
				
				
			}
			
		
			return true; 			
		}
		else
		{
			return false; 
		}
    }

    public function viewdistorder(){
        // echo "SELECT * FROM distributor_order 
        // INNER JOIN distributor ON distributor_order.distributor_Id = distributor.distributor_Id
        // where distributor_order.order_Status=1"; die; 
        $result=$this->db->query("SELECT * FROM distributor_order 
                            INNER JOIN distributor ON distributor_order.distributor_Id = distributor.distributor_Id
                            where distributor_order.order_Status=1");

            if($result->num_rows()>0) {
            return $result->result();
            }else {
            return false; 

            }
    }
    
    public function viewshipments(){
        $result=$this->db->query("SELECT * FROM ship_distributor_order 
                             INNER JOIN distributor ON ship_distributor_order.distributor_Id = distributor.distributor_Id
                            where ship_distributor_order.shipment_Status=1");

            if($result->num_rows()>0) {
            return $result->result();
            }else {
            return false; 

            }
    }
    
     public function viewShip($id){
         $result=$this->db->query("SELECT * FROM ship_distributor_order 
                            INNER JOIN distributor_order ON distributor_order.distorder_Id=ship_distributor_order.distorder_Id
                            INNER JOIN distributor ON ship_distributor_order.distributor_Id = distributor.distributor_Id
                            where ship_distributor_order.shipdistorder_Id=$id");

            if($result->num_rows()>0) {
            return $result->row_object();
            }else {
            return false; 

            }
    }
    
    public function viewProducts($id){
             $result=$this->db->query("SELECT * FROM ship_distributor_order 
                             INNER JOIN distorder_product ON distorder_product.distorder_Id=ship_distributor_order.distorder_Id
                            where ship_distributor_order.shipdistorder_Id=$id");
        
         if($result->num_rows()>0) {
            return $result->result();
            }else {
            return false; 

            }

    }
}
?>