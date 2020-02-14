<?php 
class AspModel extends CI_Model {
 
   private  $email;
    private $id;
    public function __construct(){
        parent::__construct();
        
        
       $this->email = $this->session->userdata("email");
         $this->id = $this->session->userdata("id");
        
    }
    public function viewTickets(){
        $result = $this->db->query("select * from ticket_generate where asp=$this->id ORDER BY ticketgenerate_Id DESC");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
    
    public function viewOrders(){
        $result = $this->db->query("select * from asporder_vouchers 
                                where username='$this->email' AND order_Status=1 ORDER BY id DESC;");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }

    public function assignTickets($email){
        $result = $this->db->query("select * from ticket_generate where asp='$email'");
            if($result->num_rows()>0){
            return $result->result();
            }else{
            return false; 
            }
    }

    public function assignToSe($assignTicket){

        //print_r($assignTicket['ticket_id']);die;
        $this->db->insert("ticket_assign_details",$assignTicket);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }

    public function assignAspToSe($assignTicket){
       $ticket_id =  $assignTicket['ticket_id'];
       $service_engineer =  $assignTicket['service_engineer'];
        $result = $this->db->query("update ticket_generate set service_Engineer='$service_engineer'  where ticket_Id='$ticket_id'");
       
    }

    public function getServiceeng($aspdept_Name){
        $result = $this->db->query("select * from users where user_role_id=8 AND usersdept_Name='$aspdept_Name'");
        if($result->num_rows()>0){
        return $result->result();
        }else{
        return false; 
        }
    }
    
    public function addOrder($pur){
        
//        $date_comp = $this->db->query("select * from asporder_vouchers ORDER BY id DESC");
//            $order_date = $date_comp->row();
//        //  echo "<pre>";
//        
//            //echo $order_date->vouchergen_Date;  die; 
//           // $orderDate = $order_date->vouchergen_Date;
//          $date1 = date("dmY");
//           //echo $date1 = '14082019'; die; 
//            if($order_date){
//               $order_date->voucher_No; 
//               $date = substr($order_date->voucher_No,0,8); 
//                
//               // echo $date; die; 
//                 if($date === $date1){
//                $date_comp = $this->db->query("select * from asporder_vouchers ORDER BY id DESC");
//                $voucher_date = $date_comp->row();
//                     
//                     
//                $old_date = substr($voucher_date->voucher_No,0,8);
//                     echo $old_date; die; 
//                     
//                $date = substr($order_date->voucher_No,-4);
//
//                $new_Dat = str_pad($date + 1, 4, 0, STR_PAD_LEFT);
//                $new_Date = $old_date.$new_Dat;
//            }else {
//                $new_Date = "SH".$date1.'00001';
//            }
//            }else {
//                 $new_Date = "SH".$date1.'00001';
//            } die; 
        
        
            $date_comp = $this->db->query("select * from asporder_vouchers ORDER BY id DESC");
            $order_date = $date_comp->row();

           $date1 = date("dmY");
           //echo $date1 = '14082019'; 
            if($order_date){
           $date = substr($order_date->voucher_No,5,8); 
            //echo $date; die; 
                 if($date === $date1){
                $date_comp = $this->db->query("select * from asporder_vouchers ORDER BY id DESC");
                $ticket_date = $date_comp->row();
                $old_date = substr($order_date->voucher_No,5,8);
                $date = substr($order_date->voucher_No,-5);
                //echo $date1; die; 
                $new_Dat = str_pad($date + 1, 5, 0, STR_PAD_LEFT);
                $new_Date = "SKYPO".$old_date.$new_Dat;
            }else {
                $new_Date = "SKYPO".$date1.'00001';
            }
            }else {
                 $new_Date = "SKYPO".$date1.'00001';
            }
        
        
        
        //Voucher_No
         for($i=0; $i < count($pur['product_Name']); $i++){			 		
                                    $addaspOrders=array(
                                    "Voucher_No" => $new_Date,
                                    "order_Date" => $_POST['asporder_Date'], 
                                    "partbrand_Name" => $_POST['partbrand_Name'],
                                    "partcategory_Name" =>  $_POST['product_Name'][$i],
                                    "Part_Name" =>  $_POST['parts_Id'][$i],
                                    "Quantity" =>  $_POST['aspproduct_Quantity'][$i],
                                    "Unit_Rate" =>  $_POST['aspproduct_UnitRate'][$i],
                                    "Net_Amount" =>  $_POST['aspNet_Amount'][$i],  
                                    "Net_Landingprice" => $_POST['aspNet_Landing'][$i],
                                    "Discount_Amount" => $_POST['aspDiscount_Perunit'][$i], 
                                    "order_By" => $this->email,
                                    "order_Status" => 'New Order',
                                    "ordergenerate_Date" =>now()
                                    );		
             
              $this->db->insert("asps_orders",$addaspOrders);
                                  
                       }
        
                $voucherHistory = array(
                        "voucher_No" => $new_Date,
                        "vouchergen_Date" => now(),
                        "voucher_Status" => 'New Order',
                        "username" => $this->email
                    );
        $this->db->insert("asporder_vouchers",$voucherHistory);
           // echo $this->db->last_query(); die;
       
                        
                                   //echo $this->db->last_query();die; 
                                   if($this->db->affected_rows()>0){
                                       return $new_Date;
                                   }else {
                                       return false; 
                                   }
    }
    
     public function viewpartsMaster(){
        $result = $this->db->query("select * from skyzenparts_master");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
    
    public function viewProduct(){
//        $result = $this->db->query("select DISTINCT(category_Name) from skyzenparts_master");
//        if($result->num_rows()>0){
//            return $result->result();
//        }else{
//            return false; 
//        }
        
//        $query1 = $this->db->query("select * from skyzenparts_master where brand_Name='SKYZEN'");
//        $res= $query1->result();
//        
//        foreach($res as $result){
//            $res_brand = $result->brand_Name;
////            echo "<pre>";
////            print_r($res_brand); die;
//            $query2 = $this->db->query("select DISTINCT(category_Name) from skyzenparts_master where brand_Name='$res_brand'");
//            $res2= $query2->result();
//            return $res2;
//        }
//        echo "select * from skyzenpart_master 
//                            INNER JOIN category_master ON category_master.category_Id = skyzenpart_master.Category
//                                            where skyzenpart_master.Brand=1 GROUP BY Category"; die; 
             $query1 = $this->db->query("select * from skyzenpart_master 
                           
                                            where skyzenpart_master.Brand='Skyzen' GROUP BY Category");
            $res = $query1->result();
        return $res;
        
        
        
    }
    
    public function addTechnician($add_Technican){
    
        $this->db->insert("users",$add_Technican);
        //echo $this->db->last_query(); die; 
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewTechnicians(){
            
        $query = $this->db->query("select * from users where email='$this->email'");
        $res = $query->row();
        $dept_Name = $res->userdept_Name;
        //echo $dept_Name; die; 
        $query1 = $this->db->query("select * from users where usersdept_Name='$dept_Name' AND user_role_id=8 AND status='active'");
//        $res1 = $query1->row();
//        $asp_Name = $res1->asp_Name;
//        
//        $query2 = $this->db->query("select * from asp_technicians where asp_name='$asp_Name'");
        if($query1->num_rows()>0){
            return $query1->result();
        }else {
            return false; 
        }
         
    }
    
    public function gettechniancsv(){
        $query = $this->db->query("select * from users where email='$this->email'");
        $res = $query->row();
        $asp_Id = $res->asp_id;
        
        $query1 = $this->db->query("select * from asp where asp_Id=$asp_Id");
        $res1 = $query1->row();
        $asp_Name = $res1->asp_Name;
        //echo $asp_Name; die; 
        $response = array();
        // Select record
        //$this->db->where('technician_Status', 1);
        $array = array('technician_Status' => 1, 'asp_name' => $asp_Name);
        $this->db->where($array);
        $this->db->select('name_technician,contact_number,area');
        $q = $this->db->get('asp_technicians');
        
        $response = $q->result_array();
        
        //echo $this->db->last_query(); die; 
        return $response;
        
        
    }
    
     public function addtechnicianList($inserdata){
        $res = $this->db->insert_batch('users',$inserdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
    }
    
    public function orderviewDetail($voucherNo){
         $result = $this->db->query("select * from asps_orders 
                                where Voucher_No='$voucherNo'");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
    
    public function finalorders($voucherNo){
//        echo "select * from aspfinal_order 
//                         INNER JOIN skyzenpart_master ON skyzenpart_master.id = aspfinal_order.prodpart_Name
//                                where aspfinal_order.voucher_No='$voucherNo'";
        $result = $this->db->query("select * from aspfinal_order 
                         INNER JOIN skyzenpart_master ON skyzenpart_master.id = aspfinal_order.prodpart_Id 
                                where aspfinal_order.voucher_No='$voucherNo'");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
    
    public function viewpartStock(){
        $query = $this->db->query("select * from asp_prod_part_stock where asp_Name='$this->email'");
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false; 
        }
    }
    
      public function technician_update($where, $data)
	{
		$this->db->update("ticket_generate", $data, $where);
          
          if($this->db->affected_rows()){
              
                        
                return true; 
          }
		//return $this->db->affected_rows();
        //echo $this->db->last_query(); die; 
	}
	
	public function orderinvoiceDetail($id){
        $result = $this->db->query("select * from asps_orders where invoice_No='$id'");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
    
    public function ordershipDetail($id){
         $result = $this->db->query("select * from asps_orders where shipment_No='$id'");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
    
    public function shipmentDetail($id){
        $result = $this->db->query("select * from asp_shipmentorder where shipment_Id='$id'");
        if($result->num_rows()>0){
            return $result->row_object();
        }else{
            return false; 
        }
    }
    
    public function ordermrDetail($id){
        $result = $this->db->query("select * from asps_orders where mrinvoice_No='$id'");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
    
    public function mrDetail($id){
        $result = $this->db->query("select * from materialreceive_vouchers where mrvoucher_No='$id'");
        if($result->num_rows()>0){
            return $result->row_object();
        }else{
            return false; 
        }
    }
    
    public function editTech($id){
        $result = $this->db->query("select * from users where id=$id");
        if($result->num_rows()>0){
            return $result->row_object();
        }else{
            return false; 
        }
    }
    
    public function updateTech($edittech,$id){
        $this->db->where(array("id"=>$id));		
		$this->db->update("users",$edittech);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 } 
    }
    
    public function viewasporderHist($shipno){
        $query = $this->db->query("select * from asps_orders where shipment_No='$shipno'");
        if($query->num_rows()>0){
            return $query->result();
        }else {
            return false; 
        }
    }
    
    public function viewshipoderbasic($shipno){
        $query = $this->db->query("select * from asps_orders where shipment_No='$shipno'");
        if($query->num_rows()>0){
            return $query->row_object();
        }else {
            return false; 
        }
    }
    
    public function aspuserDetail($email_Id){
                $query = $this->db->query("select * from users where email='$email_Id'");
        $result = $query->row();
//        $asp_Id = $result->asp_id; 
//        $query1 = $this->db->query("select * from asp where asp_Id=$asp_Id");
//        $result1= $query1->row();
        return $result;
    }
    
    public function viewshipmentDetail($shipno){
        $query = $this->db->query("select * from asp_shipmentorder where shipment_Id='$shipno'");
        $result = $query->row();
//        $asp_Id = $result->asp_id; 
//        $query1 = $this->db->query("select * from asp where asp_Id=$asp_Id");
//        $result1= $query1->row();
        return $result;
    }
    
    
    
    public function addmaterialReceive($pur){
        
                    for($i= 0; $i <count($pur['Part_Name']); $i++){
                            $data = array(
                               'materialreceive_Qty' =>$pur['materialreceive_Qty'][$i],
                                'mrinvoice_No' => $pur['mrinvoice_No'][$i],
                                'materialreceive_Date' => date("m-d-Y")
                            );
                $where = array('Part_Name ' => $pur['Part_Name'][$i] , 'shipment_No ' => $pur['shipment_No'][$i]);
                $this->db->where($where);
                $this->db->update('asps_orders ', $data);
            
        }
        
        if($this->db->affected_rows()>0){
                
                    for($i= 0; $i <count($pur['Part_Name']); $i++){
                            $data = array(
                                "Parts" => $pur['Part_Name'][$i],
                               'materialreceive_Qty' =>$pur['materialreceive_Qty'][$i],
                                'mrinvoice_No' => $pur['mrinvoice_No'][$i],
                                'materialreceive_Date' => date("m-d-Y")
                            );
                        
                            $this->db->insert("materiralreceive_history",$data);
                
                    }
            
                $mrNo = $pur['mrinvoice_No'][0];
                $shNo = $pur['shipment_No'][0];
            
            $invoiceData= array();
            
            $query=$this->db->query("select SUM(delivered_Qty) AS delqty from asps_orders where shipment_No='$shNo'");
            $res = $query->row();

            $query1=$this->db->query("select SUM(materialreceive_Qty) AS matrecqty from asps_orders where shipment_No='$shNo'");
            $res1 = $query1->row();
            $deliverd_Qty = $res->delqty;
            $matrec_Qty = $res1->matrecqty;
                             
                             
            if($deliverd_Qty == $matrec_Qty){
                $this->db->query("UPDATE asps_orders SET order_Status='Order Received' WHERE shipment_No='$shNo'");
                
                $query = $this->db->query("select * from asps_orders where shipment_No='$shNo'");
                $res = $query->row();
                $voucherNo = $res->Voucher_No;
                $invoiceData = array(
                        "mrinvoice_No" => $mrNo,
                        "voucher_Status" => 'Order Received'
                    );
                    $where = array('voucher_No ' => $voucherNo);
                $this->db->where($where);
                $this->db->update('asporder_vouchers ', $invoiceData);
                
                
                
            }else {
                $this->db->query("UPDATE asps_orders SET order_Status='Partial Order' WHERE shipment_No='$shNo'");
                $query = $this->db->query("select * from asps_orders where shipment_No='$shNo'");
                $res = $query->row();
                $voucherNo = $res->Voucher_No;
                $invoiceData = array(
                        "mrinvoice_No" => $mrNo,
                        "voucher_Status" => 'Partial Order'
                    );
                    $where = array('voucher_No ' => $voucherNo);
                $this->db->where($where);
                $this->db->update('asporder_vouchers ', $invoiceData);
                
            }
            
            
                    
                return $invoiceData['voucher_Status'];

                                   }else {
                                       return false; 
                                   }
        
        
        
        
        
    }
    
    // public function mrdetail($mrinvoiceNo){
    //     $query = $this->db->query("select * from materialreceive_vouchers where mrvoucher_No='$mrinvoiceNo'");
    //     $row = $query->row();
    //     return $row;
    // }
    
    public function mrreceiveOrders($mrinvoiceNo){
        $query = $this->db->query("select * from asps_orders where mrinvoice_No='$mrinvoiceNo'");
        if($query->num_rows()>0){
            return $query->result();
        }else {
            return false; 
        }
    }
    
    public function viewcourierDetail($mrNo){
        $query = $this->db->query("select * from materialreceive_vouchers where mrvoucher_No='$mrNo'");
        if($query->num_rows()>0){
            return $query->row();
        }else {
            return false; 
        }
    }
    
    public function viewmraspDetail($asp_Email){
         $query = $this->db->query("select * from users where email='$asp_Email'");
        if($query->num_rows()>0){
            return $query->row();
        }else {
            return false; 
        }
    }
    
    public function addbalmaterialReceive($pur){
        
        
        
        
        
        
         for($i= 0; $i <count($pur['mrinvoice_No']); $i++){
               //
             $mrinvoiceNo = $_POST['mrinvoice_No'][$i];
             $newmrinvoice = $pur['mrnewinvoice_No'][$i];
    $queryone = $this->db->query("select materialreceive_Qty from asps_orders where mrinvoice_No='$mrinvoiceNo'");

                                        foreach ($queryone->result() as $row)
                                        {
                                          $old_quantity =  $row->materialreceive_Qty;
                                          
                                        }
                                      
                                      $newqty   = $old_quantity + $_POST['materialreceive_Qty'][$i];
             
             
                 //$this->db->query("update skyzenpart_stock set good_Quantity='$bal' where part_Name='$partId'");
             
             
             
             
                            $data = array(
                               'materialreceive_Qty' =>$newqty,
                               'mrinvoice_No' => $newmrinvoice
                            );
                $where = array('Part_Name ' => $pur['part_Name'][$i] , 'mrinvoice_No ' => $pur['mrinvoice_No'][$i]);
                $this->db->where($where);
                $this->db->update('asps_orders ', $data);
            
        }
        
        if($this->db->affected_rows()>0){
                
                    for($i= 0; $i <count($pur['part_Name']); $i++){
                            $data = array(
                                "Parts" => $pur['part_Name'][$i],
                               'materialreceive_Qty' =>$pur['materialreceive_Qty'][$i],
                                'mrinvoice_No' => $pur['mrnewinvoice_No'][$i],
                                'materialreceive_Date' => date("m-d-Y")
                            );
                        
                            $this->db->insert("materiralreceive_history",$data);
//                
                    }
            
                $mrNo = $pur['mrinvoice_No'][0];
                $shNo = $pur['shipment_No'][0];
            $invoiceData = array();
            
            $query=$this->db->query("select SUM(delivered_Qty) AS delqty from asps_orders where shipment_No='$shNo'");
            $res = $query->row();

            $query1=$this->db->query("select SUM(materialreceive_Qty) AS matrecqty from asps_orders where shipment_No='$shNo'");
            $res1 = $query1->row();
            $deliverd_Qty = $res->delqty;
            $matrec_Qty = $res1->matrecqty;
                             
                             
            if($deliverd_Qty == $matrec_Qty){
                $this->db->query("UPDATE asps_orders SET order_Status='Order Received' WHERE shipment_No='$shNo'");
                
                $query = $this->db->query("select * from asps_orders where shipment_No='$shNo'");
                $res = $query->row();
                $voucherNo = $res->Voucher_No;
                $invoiceData = array(
                        "mrinvoice_No" => $newmrinvoice,
                        "voucher_Status" => 'Order Received'
                    );
                    $where = array('voucher_No ' => $voucherNo);
                $this->db->where($where);
                $this->db->update('asporder_vouchers ', $invoiceData);
                
                
                
            }else {
                $this->db->query("UPDATE asps_orders SET order_Status='Partial Order' WHERE mrinvoice_No='$mrNo'");
                
                $query = $this->db->query("select * from asps_orders where mrinvoice_No='$mrNo'");
                $res = $query->row();
                $voucherNo = $res->Voucher_No;
                $invoiceData = array(
                        "mrinvoice_No" => $newmrinvoice,
                        "voucher_Status" => 'Partial Order'
                    );
                    $where = array('voucher_No ' => $voucherNo);
                $this->db->where($where);
                $this->db->update('asporder_vouchers ', $invoiceData);
                
                
            }
            
            
                   return $invoiceData['voucher_Status'];    
                //return true;

                                   }else {
                                       return false; 
                                   }
    }
    
    public function asporderProducts($voucherNo){
        $query = $this->db->query("select * from asps_orders 
                                where shipment_No='$voucherNo'");
        if($query->num_rows()>0){
                return $query->result();                
            }else {
                return false; 
            }
    }
    
    // public function shipmentDetail($voucherNo){
    //     $query = $this->db->query("select * from asp_shipmentorder where shipment_Id='$voucherNo'");
    //     $result = $query->row();
    //     return $result;
    // }
    
    public function aspbasicDetail($asp_Id){
        //echo "select * from asp where asp_Id=$asp_Id"; die; 
        $query = $this->db->query("select * from users where id=$asp_Id");
        $result = $query->row();
        return $result;
    }
    
    public function asporderDetail($voucherNo){
          $query = $this->db->query("select * from asps_orders 
                                where asps_orders.Voucher_No='$voucherNo'");
            if($query->num_rows()>0){
                return $query->result();                
            }else {
                return false; 
            }
     }
    
    public function aspordDetail($voucherNo){
        $query = $this->db->query("select * from asps_orders 
                                where asps_orders.Voucher_No='$voucherNo'");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
    public function mrvoucherDetail($id){
        $query = $this->db->query("select * from materialreceive_vouchers 
                                where materialreceive_vouchers.voucher_No='$id'");
            if($query->num_rows()>0){
                return $query->result();                
            }else {
                return false; 
            }
    }
    
    public function viewaspOrders(){
        $result = $this->db->query("select * from asporder_vouchers 
                                where username='$this->email' AND order_Status=1 ORDER BY id DESC;");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
    
    public function viewaspPayments(){
        $result = $this->db->query("select * from asp_Payment 
                                where asp_Id=$this->id AND status=1 ORDER BY id DESC;");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
    
    public function ticketcsvData(){
        
        
        $query = $this->db->query("select ticket_generate.ticket_Id, cust_Mobile,cust_Altmobile,cust_Name,cust_Email,cust_Address1,cust_Address2,cust_Town,cust_State,cust_Pincode,prod_Brand, prod_Category, prod_Name, prod_Datepurchase,prod_Serialno, prod_Warranty, prod_Storeretailer, prod_Casetype, productcomplaint_Nature, prod_Priority, prod_Remarks, ticket_generate.asp_Name, amt_textbox, barcode, crm_Amount, asp_product_info_replace_info.complaint_type, asp_product_info_replace_info.complaint_overview, asp_product_info_replace_info.part_replace, asp_product_info_replace_info.part_section,total_cost,service_engineer_fee,ticket_generate.status,
        from_unixtime(ticket_Generatedate, '%d-%m-%Y') as genDate, ticket_Closedate from ticket_generate 
        LEFT JOIN asp_product_info_replace_info ON asp_product_info_replace_info.ticket_id = ticket_generate.ticket_Id
       where ticket_generate.asp=$this->id
        ");
        
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false; 
        }
    }
    
    public function viewInvoicedata($id){
        $query = $this->db->query("select * from asp_Payment where payment_Id='$id'");
        if($query->num_rows()>0){
            return $query->row();
        }else{
            return false; 
        }
    }
    
    public function viewBillings(){
        $query = $this->db->query("select * from users where id=$this->id");
        $res = $query->row();
        $party_Name = $res->userdept_Name; 
        
        
        $query1 = $this->db->query("select * from asp_billings where party_name='$party_Name'");
        if($query1->num_rows()>0){
            return $query1->result();
        }else {
            return false;
        }
        
    }
	
	
    
    
    
}
?>