<?php 
class Stockmodel extends CI_Model {
    
    
    public function partsStock(){
         $result = $this->db->query("select * from skyzenpart_stock 
            ");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        } 
    }
    
    public function addprodStock($inserdata){
         $addparthist= array();
        $res = $this->db->insert_batch('skyzenprod_Stock',$inserdata);
    
        foreach($inserdata as $data){
             $addparthist = array(
                    "prod_Name"=>$data['prod_Name'],
                    "good_Qty"=>$data['good_Quantity'],
                    "bad_Qty"=>$data['bad_Quantity'],
                    "stockgen_Date"=>date('d-m-Y'),
                    "prod_Status" => 'add'
                );
                 
                 $this->db->insert("skyzenprodstock_History",$addparthist);
                    
        }
        
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function addpartStock($addstockPart){
        
//        echo "<pre>";
//        print_r($addstockPart); die; 
        
        
        $query = $this->db->query("select * from skyzenpart_stock");
        $result = $query->result();

        
        if(count($result)>0){
           
            
        $partId = $addstockPart['part_Name']; 
        $items = array();
        
        foreach($result as $res){
          $items[] = $res->part_Name; 
        }


        if(in_array($partId,$items)){
            
                $query2 = $this->db->query("select * from skyzenpart_stock where part_Name='$partId'");
                $result1= $query2->row(); 
            
                $oldgood_Quantity = $result1->good_Quantity; 
                $oldbad_Quantity = $result1->bad_Quantity; 
                
               $latgood_Qty = $oldgood_Quantity + $addstockPart['good_Quantity'];
               $latbad_Qty = $oldbad_Quantity + $addstockPart['bad_Quantity']; 
                
                
                $query3 = $this->db->query("UPDATE skyzenpart_stock SET good_Quantity = $latgood_Qty, bad_Quantity = $latbad_Qty WHERE part_Name='$partId'"); 
                
                
                $addparthist = array(
                    "part_Id"=>$addstockPart['part_Name'],
                    "good_Qty"=>$addstockPart['good_Quantity'],
                    "bad_Qty"=>$addstockPart['bad_Quantity'],
                    "stockgen_Date"=>date('d-m-Y')
                );
                
                $this->db->insert("skypartstock_history",$addparthist);
                
            
                    if($this->db->affected_rows()>0){
                        return true;
                        
                    }else {
                        return false; 
                    }
            
            
            
            
        }else {
             $this->db->insert("skyzenpart_stock",$addstockPart);
                $addparthist = array(
                    "part_Id"=>$addstockPart['part_Name'],
                    "good_Qty"=>$addstockPart['good_Quantity'],
                    "bad_Qty"=>$addstockPart['bad_Quantity'],
                    "stockgen_Date"=>date('d-m-Y')
                );
                
                $this->db->insert("skypartstock_history",$addparthist);
                
                
                if($this->db->affected_rows()>0){
                        return true;
                    }else {
                        return false; 
                    }
            
        }
            
            
            
            
            
            
        }else {
            
             $this->db->insert("skyzenpart_stock",$addstockPart);
                $addparthist = array(
                    "part_Id"=>$addstockPart['part_Name'],
                    "good_Qty"=>$addstockPart['good_Quantity'],
                    "bad_Qty"=>$addstockPart['bad_Quantity'],
                    "stockgen_Date"=>date('d-m-Y')
                );
                
                $this->db->insert("skypartstock_history",$addparthist);
            
            if($this->db->affected_rows()>0){
                        return true;
                    }else {
                        return false; 
                    }
        }
        
        
        
    }
    
    
    public function addbulkpartData($inserdata){ 
        
        $addparthist= array();
//        echo "<pre>";
//        print_r($inserdata); die; 
        $res = $this->db->insert_batch('skyzenpart_stock',$inserdata);
    
        foreach($inserdata as $data){
            
//            echo "<pre>";
//            print_r($inserdata); 
             $addparthist = array(
                    "part_Name"=>$data['part_Name'],
                    "good_Qty"=>$data['good_Quantity'],
                    "bad_Qty"=>$data['bad_Quantity'],
                    "stockgen_Date"=>date('d-m-Y')
                );
                 
                 $this->db->insert("skypartstock_history",$addparthist);
                    
        }
        
        
//         $addparthist = array(
//                    "part_Id"=>$inserdata['part_Name'],
//                    "good_Qty"=>$inserdata['good_Quantity'],
//                    "bad_Qty"=>$inserdata['bad_Quantity'],
//                    "stockgen_Date"=>date('d-m-Y')
//                );
//                
//                $this->db->insert_batch("skypartstock_history",$addparthist);
//        
//        
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
//    public function addbulkpartData($inserdata){  
//        
////        $dbquery = $this->db->query("select * from skyzenpart_stock");
////        $dbresult = $dbquery->result();
//        
//
//        
////        foreach($inserdata as $data){
////           echo "<pre>";
////            print_r();
////        }
//        
//    
//              
//        
//        
////        echo "<pre>";
////        print_r($inserdata);
////        $dblength = count($dbresult);
////        for($i = 0; $i < $dblength; $i++){
////            
////            
////            echo $dbresult[$i]; 
////            
//////                for($j = 0; $j < $inserdata.length; j++){
//////                    
//////                     
//////                   
//////                }
////        }
//        
////        
//        
////        foreach($dbresult as $resultData){
////            
////            //echo $resultData->part_Name; 
////            
////            foreach($inserdata as $storeData){
////               // echo $storeData['part_Name']; echo "<br>";
////                
////                if($resultData->part_Name == $storeData['part_Name'] ){
////                    
////                    //echo $resultData->part_Name; die; 
////                    
////                    $query1 = $this->db->query("select * from skyzenpart_stock where part_Name=$resultData->part_Name");
////                    $result = $query1->row();
//////                    echo "<pre>";
//////                    print_r($result); die; 
////                   $oldgoodQty = $result->good_Quantity;  
////                   $oldbadQty = $result->bad_Quantity;
////                    
////                    //echo " Old Qty " +$oldQty; echo "<br>";
////                   $storegoodQty =  $storeData['good_Quantity']; 
////                   $storebadQty = $storeData['bad_Quantity']; 
////                    //$oldQty + $storeData['good_Quantity']; 
////                    
////                    $newgoodqty = $oldgoodQty + $storegoodQty; 
////                    $newbadqty = $oldbadQty + $storebadQty; 
////                    
////                    $query3 = $this->db->query("UPDATE skyzenpart_stock SET good_Quantity = $newgoodqty, bad_Quantity = $newbadqty WHERE part_Name=$resultData->part_Name"); 
////                    
////                    
//////                    $addparthist = array(
//////                        "part_Id"=>$addstockPart['part_Name'],
//////                        "good_Qty"=>$addstockPart['good_Quantity'],
//////                        "bad_Qty"=>$addstockPart['bad_Quantity'],
//////                        "stockgen_Date"=>date('d-m-Y')
//////                    );
//////                
//////                $this->db->insert("skypartstock_history",$addparthist);
//////                
//////            
//////                    if($this->db->affected_rows()>0){
//////                        return true;
//////                        
//////                    }else {
//////                        return false; 
//////                    }
////                    
////                    
////                   //echo $resultData->good_Quantity = $resultData->good_Quantity + $storeData['good_Quantity'];
////                }
////                
////                
////                else  {
////                    
//////                    echo "<pre>";
//////                    print_r($storeData); 
////                    
////                    $storeremainData = array(
////                        "brand_Name" => $storeData['brand_Name'],
////                        "category_Name" => $storeData['category_Name'],
////                        "part_Name" => $storeData['part_Name'],
////                        "good_Quantity" => $storeData['good_Quantity'],
////                        "bad_Quantity" => $storeData['bad_Quantity']
////                        );
////                    $this->db->insert("skyzenpart_stock",$storeremainData);
//////                       echo $storeData['part_Name']; echo "<br>";
//////                       echo $storeData['good_Quantity']; echo "<br>";
////                }
//////                else {
//////                            $this->db->insert("skyzenpart_stock",$inserdata);
//////                            $addparthist = array(
//////                                "part_Id"=>$storeData['part_Name'],
//////                                "good_Qty"=>$storeData['good_Quantity'],
//////                                "bad_Qty"=>$storeData['bad_Quantity'],
//////                                "stockgen_Date"=>date('d-m-Y')
//////                            );
//////
//////                            $this->db->insert("skypartstock_history",$addparthist);
//////
//////
//////                            if($this->db->affected_rows()>0){
//////                                    return true;
//////                                }else {
//////                                    return false; 
//////                                }
//////                }
////            }
////            
////        }
//        
////        foreach($dbresult as $resultData){
////                foreach($inserdata as $storeData){
////                    
////                    echo $resultData->part_Name; echo "<br>";
////                    echo $storeData->part_Name; echo "<br>";
//////                        if($resultData->part_Name != $storeData['part_Name'] ){
//////                            
//////                $storeremainData = array(
//////                        "brand_Name" => $storeData['brand_Name'],
//////                        "category_Name" => $storeData['category_Name'],
//////                        "part_Name" => $storeData['part_Name'],
//////                        "good_Quantity" => $storeData['good_Quantity'],
//////                        "bad_Quantity" => $storeData['bad_Quantity']
//////                        );
//////                    $this->db->insert("skyzenpart_stock",$storeremainData);
//////                            
//////                        }
////                }
////        }
////        $query = $this->db->query("select * from skyzenpart_stock");
////        $result = $query->result();
////        
////        
////          $resultArray = array();
////        
////        foreach($result as $res){
////            $resultArray[] = $res->part_Name; 
////        }
//////        
//////        
//////        
////////        echo "<pre>";
////////        print_r($result); 
////////        print_r($inserdata);
//////        
////         $storeArray = array();
////        
////        foreach($inserdata as $data){
////           $storeArray[] = $data['part_Name']; 
////        }
//////       
////        
//      
//        
//       
//        
////        echo "<pre>";
////          print_r($resultArray);
////        print_r($storeArray);
////      
////        $resultArr=array_diff($storeArray,$resultArray );
////        $resultArr1=array_intersect($storeArray,$resultArray );
//        
////        
////        foreach($resultArr as $resStore){
////            
////            
////            //echo $resStore; echo "<br>";
////        }
////        print_r($resultArr);
////        print_r($resultArr1);
//        
//        
//        //$partData = array_values($resultArray);
//        
// 
//        $query = $this->db->query("select * from skyzenpart_stock");
//        $result = $query->result();
//        
//
//        $resultArray = array();
//        
//        foreach($result as $res){
//           $resultArray[] = $res->part_Name; echo "<br>";
//        }
//        
//////        
//////        echo "<pre>";
//////        print_r($resultArray); 
//////        echo "<pre>";
//////        print_r($result);
//////        print_r($inserdata); 
////        
////        
//        $storeArray = array();
//        foreach($inserdata as $data){
//            $storeArray[] = $data['part_Name'];
//        }
////        
////        
//        $resultArr=array_diff($storeArray,$resultArray );
//         $resultArr1=array_intersect($storeArray,$resultArray );
//        echo "<pre>";
//               print_r($resultArray); 
//                print_r($storeArray);
//        print_r($resultArr);
//        print_r($resultArr1);
////        
////         echo "<pre>";
////        foreach($resultArr1 as $resAr){
////            echo $resAr; echo "<br>";
////        }
////        print_r($resultArray); 
////        print_r($storeArray);
////        print_r($resultArr);
////        print_r($resultArr1); 
//        
//        die; 
//        
//        
////        echo "<pre>";
////        print_r($storeArray); die; 
//    }
    
    
    public function viewasppartsStock(){
        $query = $this->db->query("select * from asp_prod_part_stock");
        
        if($query->num_rows()>0){
                return $query->result();
        }else{
                return false; 
        }
    }
    
    public function productStock(){
        $query = $this->db->query("select * from skyzenprod_Stock");
        
        if($query->num_rows()>0){
                return $query->result();
        }else{
                return false; 
        }
    }
    
    public function prodstockData(){
        $query = $this->db->query("select * from skyzenprod_Stock");
        
        if($query->num_rows()>0){
                return $query->result();
        }else{
                return false; 
        }
    }
}
?>