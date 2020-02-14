<?php 

class BillingModel extends CI_Model {
    
    public function viewCitites(){
            $query = $this->db->query("select retailer_city as city from sales_executives_master group by retailer_city");   
            $query1 = $this->db->query("select distributor_city as city from sales_executives_master group by distributor_city");
            $res = $query->result();
            $res1 = $query1->result();
        
       $result =  array_unique(array_merge($res, $res1), SORT_REGULAR);
        
        return $result; 
    
            
    }
    
    public function viewDists(){
        $query = $this->db->query("select distributor_name from sales_executives_master group by distributor_name");
        if( $query->num_rows() > 0 ){
            return $query->result();
        }else {
            return false; 
        }
    }
    
    public function viewDealers(){
        $query = $this->db->query("select retailer_name from sales_executives_master group by retailer_name");
        if( $query->num_rows() > 0 ){
            return $query->result();
        }else {
            return false; 
        }
    }
    
    
    public function getbilldata(){
        
        
        
        
//        $this->db->select('*');
//        $query = $this->db->get('scheme_assign_to_retailer_cheques');
//        return $query->result_array();
        
//        $query = $this->db->query("select *, sum(cheque_amt) as totalPaid from scheme_assign_to_retailer_cheques group by retailer_name");
//        $res = $query->result_array();
//        
//        $query1 = $this->db->query("select *, sum(amount) as totalAmount from asp_billings group by party_name");
//        $res1 = $query1->result_array();
        
        $query = $this->db->query("select *, sum(amount) as total, sum(pending_Amt) as totalPending from asp_billings group by party_name");
        $res = $query->result_array();
        
        
        
//        $query4 = $this->db->query("select sum(cheque_amt) as paid from scheme_assign_to_retailer_cheques");
//        $res3 = $query4->row();
//        
//         $query5 = $this->db->query("select sum(cheque_amt) as chequePaid from scheme_assign_to_retailer_cheques where payment_Mode='Cheque'");
//        $res5 = $query5->row();
//        
//        $query5 = $this->db->query("select sum(cheque_amt) as chequeDue from scheme_assign_to_retailer_cheques where status='Due'");
//        $res5 = $query5->row();
        
//        echo "select sum(cheque_amt) as chqdueAmt from scheme_assign_to_retailer_cheques where status='Due' AND cheque_stage != 'Received' AND cheque_stage != 'In Transit' AND cheque_stage != 'Paid'"; die; 
        
        $query1 = $this->db->query("select sum(cheque_amt) as chqdueAmt from scheme_assign_to_retailer_cheques where status='Due' AND cheque_stage != 'Paid'");
        $res1 = $query1->row();
        
        $query2 = $this->db->query("select sum(cheque_amt) as intransitchqdueAmt from scheme_assign_to_retailer_cheques where status='Due' AND cheque_stage = 'In Transit'");
        $res2 = $query2->row();
        
        $query3 = $this->db->query("select sum(cheque_amt) as rtgsAmt from scheme_assign_to_retailer_cheques where payment_Mode='rtgs'");
        $res3 = $query3->row();
        
        $query4 = $this->db->query("select sum(overdue_cal) as dueAmt from asp_billings where overdue_cal < 1");
        $res4 = $query4->row();
        
        return array($res,$res1,$res2,$res3, $res4);
        //return array($res,$res1,$res2,$res3,$res5);
        
//        $query = $this->db->query("select * from scheme_assign_to_retailer_cheques, asp_billings");
//        return $query->result_array();
        
//        $query1 = $this->db->query("select * from asp_billings
//                            RIGHT JOIN scheme_assign_to_retailer_cheques ON asp_billings.invoice_number = scheme_assign_to_retailer_cheques.order_id");
//        return $res1 = $query1->result_array();
        
//        $query1 = $this->db->query("select *, sum(asp_billings.amount) as total from asp_billings
//                            RIGHT JOIN scheme_assign_to_retailer_cheques ON asp_billings.invoice_number = scheme_assign_to_retailer_cheques.order_id");
//        return $res1 = $query1->result_array();
    }
    
    public function getAmountTyp(){
        $query1 = $this->db->query("select payment_Mode,sum(cheque_amt) as paid from scheme_assign_to_retailer_cheques where payment_Mode='rtgs'");
        $res1 = $query1->row();
        
         $query2 = $this->db->query("select payment_Mode,sum(cheque_amt) as paid from scheme_assign_to_retailer_cheques where payment_Mode='Cheque'");
        $res2 = $query2->row();
        
         return array($res1,$res2);
        
    }
    
    public function getmonthBillData(){

        $dayQuery =  $this->db->query("SELECT *, COUNT(id) as count, bill_date as billDate, MONTH(STR_TO_DATE(bill_date, '%d-%m-%Y')) as monthName, YEAR(STR_TO_DATE(bill_date, '%d-%m-%Y')) as yearDate from 
        crm_billings_new
            WHERE 
            MONTH(STR_TO_DATE(bill_date, '%d-%m-%Y')) = '" . date('m') . "' AND YEAR(STR_TO_DATE(bill_date, '%d-%m-%Y'))= '" . date('Y') . "' group by bill_date"); 
        
        
        $res1 = $dayQuery->result();
        
        $query1 = $this->db->query("SELECT * FROM crm_billings_new WHERE YEAR(STR_TO_DATE(bill_date, '%d-%m-%Y')) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(STR_TO_DATE(bill_date, '%d-%m-%Y')) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)");
        $res2 = $query1->result();
        
        
        
        return array($res1,$res2);
    }
    
//    public function getpaymentDet(){
//        
//        $lastWeek = date("d-m-Y", strtotime("-7 days")); 
//        //echo $last = str_to_date($lastWeek,'%d-%m-%Y'); echo "<br>";
//        $lasttwoWeek = date("d-m-Y", strtotime("-14 days")); 
//        //echo $lastTwo = str_to_date($last,'%d-%m-%Y');
////        echo $lastWeek = date("Y-m-d", strtotime("-21 days")); echo "<br>";
////        echo $lastWeek = date("Y-m-d", strtotime("-27 days")); echo "<br>";
////        echo $lastWeek = date("Y-m-d", strtotime("-34 days")); echo "<br>";
////        echo $lastWeek = date("Y-m-d", strtotime("-35 days")); echo "<br>"; die; 
//        
//        
//        echo "select * from scheme_assign_to_retailer_cheques where STR_TO_DATE(billgen_Date, '%d-%m-%Y')  < 
//            STR_TO_DATE('$lastWeek', '%d-%m-%Y') AND STR_TO_DATE(billgen_Date, '%d-%m-%Y') > STR_TO_DATE('$lasttwoWeek', '%d-%m-%Y') "; die; 
//        
//        
//        
////        echo "select * from scheme_assign_to_retailer_cheques where billgen_Date BETWEEN date('d-m-Y', strtotime('-7 days')) AND date('d-m-Y', strtotime('-14 days'))"; die; 
//        
////        echo "select * from scheme_assign_to_retailer_cheques where STR_TO_DATE(billgen_Date, '%d-%m-%Y') > date('d-m-Y', strtotime('-7 days'))"; die; 
//        
//        
////        echo "SELECT *
////FROM   scheme_assign_to_retailer_cheques
////WHERE  YEARWEEK(STR_TO_DATE(billgen_Date, '%d-%m-%Y'), 1) = YEARWEEK(CURDATE(), 1)"; die; 
////        echo "select * from scheme_assign_to_retailer_cheques where DATE(STR_TO_DATE(billgen_Date, '%d-%m-%Y')) > (NOW() - INTERVAL 7 DAY)"; die; 
//        
//        
////        echo "select * from scheme_assign_to_retailer_cheques where DATE(STR_TO_DATE(billgen_Date, '%d-%m-%Y')) > date('d-m-Y', strtotime('-7 days')) AND DATE(STR_TO_DATE(billgen_Date, '%d-%m-%Y')) < date('d-m-Y', strtotime('-14 days'))"; die; 
//        
////        echo "select * from scheme_assign_to_retailer_cheques where DATE(STR_TO_DATE(billgen_Date, '%d-%m-%Y')) > (NOW() - INTERVAL 7 DAY)"; die; 
//        
//        $query = $this->db->query("select * from scheme_assign_to_retailer_cheques where > (NOW() - INTERVAL 7 DAY)");
//        return $query->result();
//    }
    
    public function getageinData(){
        
         $query1 = $this->db->query("select '0 - 30 days' as aeigins, sum(pending_Amt) as Pending from crm_billings_new where aeigins <= 30");
        $res1 = $query1->row();
        //echo $res1->Pending; die; 
        
        //echo $res1; die; 
         $query2 = $this->db->query("select '31 - 45 days' as aeigins, sum(pending_Amt) as Pending from crm_billings_new where aeigins > 30 AND aeigins <= 45");
        $res2 = $query2->row();
        
        $query3 = $this->db->query("select '46 - 60 days' as aeigins, sum(pending_Amt) as Pending from crm_billings_new where aeigins >46 AND aeigins <= 60");
        $res3 =  $query3->row();
        
        $query4 = $this->db->query("select '61 - 90 days' as aeigins, sum(pending_Amt) as Pending from crm_billings_new where aeigins >61 AND aeigins <= 90");
        $res4 =  $query4->row();
        
                $query5 = $this->db->query("select '> 91 days' as aeigins, sum(pending_Amt) as Pending from crm_billings_new where aeigins >91");
        $res5 =  $query5->row();
        
        
         return array($res1,$res2,$res3,$res4,$res5);
        
        
//        
//        $query1 = $this->db->query("select sum(pending_Amt) as Pending from asp_billings where aeigins <= 30");
//        $res1 =  $query1->row();
//        
//        $query2 = $this->db->query("select sum(pending_Amt) as Pending from asp_billings where aeigins > 30 AND aeigins <= 45");
//        $res2 =  $query2->row();
//        
//        $query3 = $this->db->query("select sum(pending_Amt) as Pending from asp_billings where aeigins >46 AND aeigins <= 60");
//        $res3 =  $query3->row();
//        
//        $query4 = $this->db->query("select sum(pending_Amt) as Pending from asp_billings where aeigins >61 AND aeigins <= 90");
//        $res4 =  $query4->row();
//        
//        $query5 = $this->db->query("select sum(pending_Amt) as Pending from asp_billings where aeigins >91");
//        $res5 =  $query5->row();
//        
//        
//        return array($res1,$res2,$res3,$res4,$res5);
    }
    
    // public function viewDists(){
    //     $query = $this->db->query("select * from users where user_role_id=3");
    //     if( $query->num_rows() > 0 ){
    //         return $query->result();
    //     }else{
    //         return false; 
    //     }
    // }
    
    public function getdistData(){
            
            $distArray = array();

            $query = $this->db->query("select distributor_name from sales_executives_master group by distributor_name");   $res = $query->result();
            
            foreach($res as $value){
                $distArray[] = urldecode($value->distributor_name); 
            }
            
            $result = "'" . implode ( "', '", $distArray ) . "'";
            //print_r($result); die; 
            //print_r(implode(',',$distArray)); die;  
            
            //echo count($distArray); die;   select *, sum(amount) as total, sum(pending_Amt) as totalPending from asp_billings group by party_name
            //echo "select * from asp_billings where party_name IN (".implode(',',$distArray).")"; die; 
            $query1 = $this->db->query("select *, sum(amount) as total, sum(pending_Amt) as totalPending from asp_billings where party_name IN ($result) group by party_name");
            
            $res1 = $query1->result();
            return $res1; 
            
            
//            echo "<pre>";
//            print_r($distArray); 
           // $distArray = 
            //echo $res(); 
//            $query1 = $this->db->query("select * from asp_billings");
//            $res1 = $query1->result();
//            
//            return array($res, $res1);
        }
    
    public function getdealerData(){
            
            $distArray = array();

            $query = $this->db->query("select retailer_name from sales_executives_master group by retailer_name"); 
            $res = $query->result();
            
            foreach($res as $value){
                $dealerArray[] = urldecode($value->retailer_name); 
            }
            
            $result = "'" . implode ( "', '", $dealerArray ) . "'";
            $query1 = $this->db->query("select *, sum(amount) as total, sum(pending_Amt) as totalPending from asp_billings where party_name IN ($result) group by party_name");
            
            $res1 = $query1->result();
            return $res1; 
        }
        
    
}
?>