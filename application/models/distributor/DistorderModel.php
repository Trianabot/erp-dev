<?php
class DistorderModel extends CI_Model {
    
    public function adddistOrder($adddistributor_Order,$pur){
                    $result=$this->db->insert("distributor_order",$adddistributor_Order);			

                    if($this->db->affected_rows()>0) 
                    {
                            $insert_id = $this->db->insert_id();

                            $pur_res=$this->db->query("select * from distributor_order where distorder_Id=$insert_id");

                            $row_pur=$pur_res->row();


                            for($i=0; $i < count($pur['distorderprod_Name']); $i++){			 		
                                    $add_prodcts=array(
                                            "productscsv_Id"=> $pur['productscsv_Id'][$i],
                                            "distorderprod_Name"=> $pur['distorderprod_Name'][$i],
                                            "distorderprod_Qty"=> $pur['distorderprod_Qty'][$i],
                                            "distorderprod_Unitrate"=> $pur['distorderprod_Unitrate'][$i],
                                            "distorderprod_Discount"=> $pur['distorderprod_Discount'][$i],
                                            "distorderprod_Netland"=> $pur['distorderprod_Netland'][$i],
                                            "distorderprod_Netamt"=> $pur['distorderprod_Netamt'][$i],
                                            "distorderproduct_Code"=> $pur['distorderproduct_Code'][$i],
                                            "distproductorder_Date"=> $row_pur->ordergenerate_Date,
                                            "distorder_Id"=> $insert_id
                                    );				
                                    $this->db->insert("distributororder_product",$add_prodcts);					
                            }
                        return true; 			
                    }
                    else
                    {
                            return false; 
                    }
            }
            
            public function viewOrders(){
                 $result=$this->db->query("SELECT * FROM distributor_order 
                            INNER JOIN distributor ON distributor_order.distributor_Id = distributor.distributor_Id
                            INNER JOIN city ON distributor.distcity_Id = city.city_Id
                            where distributor_order.order_Status=1");

            if($result->num_rows()>0) {
            return $result->result();
            }else {
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
    
    public function productDetail($id){
         $result=$this->db->query("SELECT * FROM distributororder_product 
                                INNER JOIN distributor_order ON distributor_order.distorder_Id=distributororder_product.distorder_Id	
                                 where distributororder_product.distorder_Id=$id");
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
    
    public function updateinvoiceStatus($id){
        $result=$this->db->query("UPDATE distributor_order SET invoice_Status=1 WHERE distorder_Id=$id");
        if($this->db->affected_rows()>0) 
        {
            return true;
        } else {
            return false; 
        }
    }
    
    public function adddistinvoiceOrder($pur){
                     for($i=0; $i < count($pur['distorder_Id']); $i++){			 		
                                    $adddistinvoice_prodcts=array(
                                            "distorder_Id"=> $pur['distorder_Id'][$i],
                                            "productscsv_Id"=> $pur['productscsv_Id'][$i],
                                            "distributor_Id"=> $pur['distributor_Id'][$i],
                                            "distorderprod_Name"=> $pur['distorderprod_Name'][$i],
                                            "distinvoiceprod_Qty"=> $pur['distinvoiceprod_Qty'][$i],
                                            "distinvoiceprod_Unitrate"=> $pur['distinvoiceprod_Unitrate'][$i],
                                            "distinvoiceprod_Discount"=> $pur['distinvoiceprod_Discount'][$i],
                                            "distinvoiceprod_Netland"=> $pur['distinvoiceprod_Netland'][$i],
                                            "distinvoiceprod_Netamt"=> $pur['distinvoiceprod_Netamt'][$i],
                                            "distinvoiceprod_Serial"=> $pur['distinvoiceprod_Serial'][$i]
                                    );				
                                  $this->db->insert("distorder_invoice",$adddistinvoice_prodcts);
                       }
                        
                                   //echo $this->db->last_query();die; 
                                   if($this->db->affected_rows()>0){
                                       return true;
                                   }else {
                                       return false; 
                                   }
    }
}
