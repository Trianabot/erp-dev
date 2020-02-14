<?php

class ProductModel extends CI_Model {
    
     public function addproductCSV($productscsv_Data){
        
        $this->db->insert("products_CSV",$productscsv_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewcsvProducts(){
         //$result = $this->db->query("select * from products_CSV");
//        $result = $this->db->query("SELECT `product_Master` AS `title`, `product_SMU`
//                                    FROM `products_csv`
//                                    UNION
//                                    SELECT `product_Status` AS `title`, `product_MasterGroup`
//                                    FROM `products_csv`
//                                   ");
        $result = $this->db->query("SELECT 
                                    *, 
                                    CONCAT_WS(',',product_Master,product_Short,product_Short2) AS Name 
                                    FROM `products_csv` ");
        
        
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
}