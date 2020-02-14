<?php 
class DistributororderModel extends CI_Model {

    private  $sid;

    public function __construct() {
     parent::__construct();
        $this->sid=$this->session->userdata('distributorId');
    }

    public function distributorDetails(){
      
        $result=$this->db->query("select * from users 
                            INNER JOIN distributor ON users.distributor_Id = distributor.distributor_Id
                        where users.distributor_Id= $this->sid");

        if($result->num_rows()>0) {
			return $result->row_object();
		} else {
		 return false; 
		 }
    }

    public function viewOrders(){
        $result = $this->db->query("select * from distributor_order 
                                            where 
                                            distributor_Id=$this->sid");
        if($result->num_rows()>0) {
			return $result->result();
		}else {
			return false; 

		}
    }

    public function viewtotalOrders(){
        $result=$this->db->query("select sum(final_Result) as total from distributor_order");
        return $result->result();
    }

    public function addOrder($add_Order,$pur){
        $result=$this->db->insert("distributor_order",$add_Order);			
			
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
    
    public function orderDetail($id){
         $result=$this->db->query("select * from distributor_order 
                            INNER JOIN distorder_product ON distributor_order.distorder_Id = distorder_product.distorder_Id
                            INNER JOIN distributor ON distributor_order.distributor_Id = distributor.distributor_Id
                        where distributor_order.distorder_Id=$id");

        if($result->num_rows()>0) {
			return $result->row_object();
		} else {
		 return false; 
		 }
    }
    
    public function updateinvoiceStatus($id){
        $result=$this->db->query("UPDATE distributor_order SET invoice_Status=1 WHERE distorder_Id=$id");
        if($this->db->affected_rows()>0) 
        {
            return true;
        } else {
            return false; 
        }
    }
    
    public function updateShipmentStatus($id){
        $result=$this->db->query("UPDATE distributor_order SET shipment_Status=1 WHERE distorder_Id=$id");
        if($this->db->affected_rows()>0) 
        {
            return true;
        } else {
            return false; 
        }
    }
    
    public function addShipment($add_Shipment){
        $this->db->insert("ship_distributor_order",$add_Shipment);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function productDetail($id){
         $result=$this->db->query("SELECT * FROM distorder_product 
									INNER JOIN distributor_order ON distributor_order.distorder_Id=distorder_product.distorder_Id	
									 where distorder_product.distorder_Id=$id");
		//$result= $this->db->query("select * from purchase_product where purchase_id=$status");		
		if($result->num_rows()>0) 
		{
			return $result->result();
		} 
		else
		{
			return false; 
		}
    }
    
    public function viewshipments(){
        $result=$this->db->query("SELECT * FROM ship_distributor_order 
                             INNER JOIN distributor ON ship_distributor_order.distributor_Id = distributor.distributor_Id
                            where ship_distributor_order.distributor_Id=$this->sid");

            if($result->num_rows()>0) {
            return $result->result();
            }else {
            return false; 

            }
    }

  
       
}
?>