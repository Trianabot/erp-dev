<?php 
class CrmModel extends CI_Model {
    
    public function addAsplist($new_Asp){
        
        $this->db->insert("asp",$new_Asp);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    public function getBillingData($invoice_number){
        $result = $this->db->query("select * from crm_billings_new where invoice_number='$invoice_number'");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function viewAsp(){
        $result = $this->db->query("select * from users where user_role_id=7");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    
    public function viewAspName(){
        $result = $this->db->query("select DISTINCT asp,asp_Name from ticket_generate");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    
    public function getaspcsv(){
         $response = array();
        // Select record
        $this->db->where('asp_Status', 1);
        $this->db->select('asp_Name,asp_Contact,asp_Pincode,asp_Area,mobile_primary,mobile_alternative');
        $q = $this->db->get('asp');
        
        $response = $q->result_array();
        return $response;
    }
    
    public function viewProducts(){
        $result = $this->db->query("select * from prod");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    
    public function addraiseTicket($addraise_Ticket){
        $this->db->insert("raise_ticket",$addraise_Ticket);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function ticketHistory(){
         $result = $this->db->query("select * from raise_ticket 
                 INNER JOIN asp ON asp.asp_Id = raise_ticket.raiseticket_Asp
                 INNER JOIN prod ON prod.product_Id = raise_ticket.raiseticket_Product
                 ORDER  BY raiseticket_Id DESC");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    
    public function ticketHist(){
         $result = $this->db->query("select * from ticket_generate where status_ticket=1 ORDER BY ticketgenerate_Id desc");
         if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function raiseTicket($raise_Ticket){
        $this->db->insert("ticket_generate",$raise_Ticket);
        if($this->db->affected_rows()>0) {
            
//                $insert_id = $this->db->insert_id();
//                
//                $ticket_res=$this->db->query("select * from ticket_generate where ticketgenerate_Id=$insert_id");
//                $row_ticket=$ticket_res->row();
//                
//                $pincode = $row_ticket->cust_Pincode;
//                $ticket_Id = $row_ticket->ticketgenerate_Id;
//                echo "<pre>";
//                echo "Pin code";
//                print_r($pincode);die; 
                //echo "SELECT * FROM asp WHERE asp_Pincode LIKE '%$pincode%'"; die; 
//                $pin_row= $this->db->query("SELECT * FROM asp WHERE asp_Pincode LIKE '%$pincode%'");
//                $row_pincode=$pin_row->row();
//                $asp_Id = $row_pincode->asp_Id;
//                $asp_Name = $row_pincode->asp_Name;
//                $asp_Contact = $row_pincode->asp_Contact;
//                $this->db->query("update ticket_generate set asp='$asp_Id', asp_Name= '$asp_Name', asp_Contact='$asp_Contact' where ticketgenerate_Id=$ticket_Id");
//                
//                echo "<pre>";
//                print_r($row_pincode); die; 
                
//                echo "<pre>";
//                print_r($row_ticket); die; 
                
            $insert_id = $this->db->insert_id();
            $ticket_res=$this->db->query("select * from ticket_generate where ticketgenerate_Id=$insert_id");
            $row_ticket=$ticket_res->row();
            
            $ticket_Id = $row_ticket->ticket_Id;
            
              
            return $ticket_Id; 
        }else{
        return false; 
        }
    }
   
    public function getaspDetail($id){
//        $this->db->from("ticket_generate");
//        $this->db->where('ticketgenerate_Id',$id);
//        $query = $this->db->get();
//
//        return $query->row();
    }
    
    public function asp_update($where, $data)
	{
		$this->db->update("ticket_generate", $data, $where);
		return $this->db->affected_rows();
        //echo $this->db->last_query(); die; 
	}
        
//         public function happycall_update($where, $data)
//	{
//		$this->db->update("ticket_generate", $data, $where);
//		return $this->db->affected_rows();
//	}
        
    public function editTicket($id){
            $result = $this->db->query("select * from ticket_generate 
                                        where ticket_generate.ticket_Id=$id");
            if($result->num_rows()>0){
                return $result->row_object();
            }else {
                return false; 
            }
        }
        
        public function aspreview($id){
            $query = $this->db->query("select * from asp_product_info_replace_info where ticket_id=$id");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
        }
        
     public function updateraiseTicket($editraise_Ticket,$id){
          $this->db->where(array("ticket_Id"=>$id));		
		$this->db->update("ticket_generate",$editraise_Ticket);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
     }
     
     public function updateaspData($edit_aspdata,$id){
          $this->db->where(array("ticket_id"=>$id));		
        $this->db->update("asp_product_info_replace_info",$edit_aspdata);
        return $this->db->affected_rows();
     }

      public function register_sale() {
        $result=$this->db->query("SELECT * FROM register_sale");
        if($result->num_rows()>0) 
          {
           return $result->result();
          }
          else { return false; }
       } 

      public function viewIsd() {
        $result=$this->db->query("SELECT * FROM isd_executive_info");
       if($result->num_rows()>0) {return $result->result();}
       else {return false; }
      }
      
      public function viewAsps(){
          $result=$this->db->query("SELECT DISTINCT user_City FROM users where user_role_id=7");
            if($result->num_rows()>0) {
                return $result->result();}
            else {
                return false; 

            }
      }
    
    public function viewaspAssign($id){
        $query = $this->db->query("select * from ticket_generate 
                         INNER JOIN asp ON asp.asp_Id = ticket_generate.asp
                        where ticket_generate.ticket_id=$id");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
    public function viewtechnAssign($id){
        $query = $this->db->query("select * from ticket_generate 
                         INNER JOIN asp_technicians ON asp_technicians.id = ticket_generate.service_Engineer
                        where ticket_generate.ticket_id=$id");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
    public function viewtechnicianAssign($id){
         $query = $this->db->query("select * from ticket_assign_details 
                         INNER JOIN asp_technicians ON asp_technicians.id = ticket_assign_details.service_engineer
                        where ticket_assign_details.ticket_id=$id");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
//    public function addAsptechlist($new_Asptech){
//         $result = $this->db->query("select * from asp_technicians");
//         if($result->num_rows()>0){
//              $res = $this->db->query("TRUNCATE asp_technicians");
//                        if($this->db->affected_rows()>0) {
//                        $this->db->insert("asp_technicians",$new_Asptech);
//                        if($this->db->affected_rows()>0) {
//                        return true; 
//                        }
//                        else {
//                        return false;
//                        }
//             }
//             else {
//                return false; 
//             }
//         }else {
//             $this->db->insert("asp_technicians",$new_Asptech);
//                        if($this->db->affected_rows()>0) {
//                        return true; 
//                        }
//                        else {
//                        return false;
//                        }
//         }
//            
//             
//            
//         }
    
    
   
        public function addAsptechlist($new_Asptech){
//           $this->db->query("TRUNCATE asp_technicians");
//            if($this->db->affected_rows() >= 0){
//                echo $this->insertAsptechlist($new_Asptech);
//            }else {
//                return false;
//            }
            
            
          
                $this->db->insert("asp_technicians",$new_Asptech);
                    if($this->db->affected_rows()>0) {
                        return true; 
                    }else {
                        return false; 
                    }
            
            
        }
    
        function insertAsptechlist($new_Asptech){
            echo "<pre>";
            print_r($new_Asptech); die; 
        }
    
//        public function addAsptechlist($new_Asptech){
//            
//            $res = $this->db->query("TRUNCATE asp_technicians");
//            if($this->db->affected_rows() >= 0){
//                
////                 $this->db->insert("asp_technicians",$new_Asptech);
////                
////                if($this->db->affected_rows()>0) {
////                       return true; 
////                        }
////                        else {
////                        return false;
////                        }
//                
//               echo $this->insertAsptechlist($new_Asptech);
//            }else {
//                return false;
//            }
// //       }
//        }
////    
//    public function insertTech($new_Asptech){
//        //echo "yes"; die;
////        echo "After deleting inside insert"; die; 
//         $this->db->insert("asp_technicians",$new_Asptech);
//                        if($this->db->affected_rows()>0) {
//                        return true; 
//                        }
//                        else {
//                        return false;
//                        }
//    }
//    
//          public function insertAsptechlist($new_Asptech){
//              //echo "yes"; die;
////               echo "<pre>";
////              print_r($new_Asptech); 
////        echo "<pre>";
////        print_r($new_Asptech); die; 
//           $this->db->insert("asp_technicians",$new_Asptech);
//                
////                if($this->db->affected_rows()>=0) {
////                        return true; 
////                        }
////                        else {
////                        return false;
////                        }
//    }
    
            
       
//            $result = $this->db->query("select * from asp_technicians");
//        
//            if($result->num_rows()>0){
//                    $res = $this->db->query("TRUNCATE TABLE asp_technicians");
//                
//                    if($this->db->affected_rows()){
//                         $this->db->insert("asp_technicians",$new_Asptech);
//                    if($this->db->affected_rows()>0) {
//                    return true; 
//                    }else{
//                    return false; 
//                    }
//                    }
//            }else {
//                    $this->db->insert("asp_technicians",$new_Asptech);
//                    if($this->db->affected_rows()>0) {
//                    return true; 
//                    }else{
//                    return false; 
//                    }
//            }
         
    
    
    public function viewTechnicians(){
        $result = $this->db->query("select * from users where user_role_id=8");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false;
        }
    }
    
        public function viewtravelExpenses(){
        $result = $this->db->query("select * from ticket_generate 
                            INNER JOIN users ON users.id = ticket_generate.asp
                            where close_Ticket='0' AND ticket_generate.status='Ticket Closed' ORDER BY ticket_generate.ticketgenerate_Id DESC");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false;
        }
    }
    
    public function viewBrands(){
        $result = $this->db->query("select DISTINCT brand from prod_master");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false;
        }
    }
    
    public function viewTickets(){
        $result = $this->db->query("select * from ticket_generate where close_Ticket='0' ORDER BY ticketgenerate_Id DESC");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false;
        }
    }
    
    public function updateTravelexpense($updatetravel_Expense,$ticket_Id){
        $this->db->where(array("ticket_Id"=>$ticket_Id));
        $this->db->update("ticket_generate",$updatetravel_Expense);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }
    
     public function ticketdecline($where, $data)
	{
		$this->db->update("ticket_generate", $data, $where);
		return $this->db->affected_rows();
	}
	
	 public function viewaspOrders(){
//         echo "select *, COUNT (DISTINCT Quantity) from asps_orders
//                     INNER JOIN skyzenparts_master ON skyzenparts_master.partsmaster_Id = asps_orders.Part_Name group by asps_orders.Voucher_No"; die; 
//         echo "SELECT `order_Date`,`order_By`, `order_Status`, SUM(Quantity) as 'Total_Qty' FROM asps_orders INNER JOIN skyzenparts_master ON skyzenparts_master.partsmaster_Id = asps_orders.Part_Name group by asps_orders.Voucher_No,asps_orders.invoice_No  ORDER BY order_Id desc"; die; 
        $result = $this->db->query("SELECT `mrinvoice_No`,`shipment_No`,`Voucher_No`,`invoice_No`,`order_Date`,`order_By`, `order_Status`, SUM(Quantity) as 'Total_Qty',ord_Status FROM asps_orders 
         group by asps_orders.Voucher_No,asps_orders.invoice_No,asps_orders.shipment_No,asps_orders.mrinvoice_No HAVING ord_Status=1 ORDER BY order_Id desc");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false;
        }
    }
    
    public function viewticketDetail($ticket_Id){
         $query = $this->db->query("select * from ticket_generate 
                                    where ticket_generate.ticket_id=$ticket_Id");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
    public function viewaspticketInfo($ticket_Id){
        $query = $this->db->query("select * from asp_product_info_replace_info 
                        where asp_product_info_replace_info.ticket_id=$ticket_Id");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
     var $asptable = 'asp';
    var $column_order = array(null, 'asp_Name','asp_Contact','asp_Pincode','asp_Area','mobile_primary','mobile_alternative'); //set column field database for datatable orderable
    var $column_search = array('asp_Name','asp_Contact','asp_Pincode','asp_Area','mobile_primary','mobile_alternative'); //set column field database for datatable searchable 
    var $order = array('asp_Id' => 'asc'); // default order 
    
    
    private function _get_datatables_query()
    {
         
        //add custom filter here
        if($this->input->post('asp_Name'))
        {
            $this->db->where('asp_Name', $this->input->post('asp_Name'));
        }
        if($this->input->post('asp_Contact'))
        {
            $this->db->like('asp_Contact', $this->input->post('asp_Contact'));
        }
        if($this->input->post('asp_Pincode'))
        {
            $this->db->like('asp_Pincode', $this->input->post('asp_Pincode'));
        }
        if($this->input->post('asp_Area'))
        {
            $this->db->like('asp_Area', $this->input->post('asp_Area'));
        }
 
        $this->db->from($this->asptable);
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    
    
    public function get_datatables(){
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    
     public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->asptable);
        return $this->db->count_all_results();
    }
    
    public function viewaspOrder($voucher_No){
        $query = $this->db->query("select * from asps_orders 
                                
                                where asps_orders.Voucher_No='$voucher_No'");
            if($query->num_rows()>0){
                return $query->result();                
            }else {
                return false; 
            }
    }
    
    public function orderbasic($voucher_No){
        $query = $this->db->query("select * from asps_orders 
                                
                                where asps_orders.Voucher_No='$voucher_No'");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
    public function addaspOrder($pur){
        
        
            $date_comp = $this->db->query("select * from asp_finalorder ORDER BY aspfinalorder_Id DESC");
            $order_date = $date_comp->row();

            $date1 = date("dmY");
           //echo $date1 = '14082019'; die; 
            if($order_date){
                $date = substr($order_date->ordergen_Id,5,8);

                 if($date === $date1){
                $date_comp = $this->db->query("select * from asp_finalorder ORDER BY aspfinalorder_Id DESC");
                $ticket_date = $date_comp->row();
                $old_date = substr($order_date->ordergen_Id,5,8);
                $date = substr($order_date->ordergen_Id,-5);

                $new_Dat = str_pad($date + 1, 5, 0, STR_PAD_LEFT);
                $new_Date = "SKYIV".$old_date.$new_Dat;
            }else {
                $new_Date = "SKYIV".$date1.'00001';
            }
            }else {
                 $new_Date = "SKYIV".$date1.'00001';
            }

        
        
        for($i= 0; $i <count($pur['prodpart_Id']); $i++){
                            $data = array(
                               'delivered_Qty' =>$pur['proddemand_Qty'][$i],
                                'invoice_No' => $new_Date,
                                'orderplaced_Date' => date("m-d-Y")
                            );
                $where = array('Part_Name ' => $pur['prodpart_Id'][$i] , 'Voucher_No ' => $pur['voucher_No'][$i]);
                $this->db->where($where);
                $this->db->update('asps_orders ', $data);
            
            
            
            
        }
        
        $invoiceData = array(
                        "invoice_No" => $new_Date,
                        "voucher_Status" => 'Order Placed'
                    );
                    $where = array('voucher_No ' => $pur['voucher_No'][0]);
                $this->db->where($where);
                $this->db->update('asporder_vouchers ', $invoiceData);
        // $this->db->insert("asporder_vouchers",$voucherHistory);
        
        
        
        
        

        

        
        if($this->db->affected_rows()>0){
                
                        //echo $this->db->last_query(); die; 

        
        $voucherNo = $pur['voucher_No'];
        
       // echo $voucherNo['0']; 
//        echo "<pre>";
//        print_r($voucherNo); die; 
        
        $addorder = array(
                "voucher_No" => $voucherNo['0'],
                "ordergen_Id" => $new_Date
            );
        
        $this->db->insert("asp_finalorder",$addorder);
        
        foreach($voucherNo as $voucher){
            $this->db->query("UPDATE asps_orders SET order_Status='Order Placed' WHERE Voucher_No='$voucher'");
        }
                                       
            
            // $insert_id = $this->db->insert_id();
            // $ticket_res=$this->db->query("select * from ticket_generate where ticketgenerate_Id=$insert_id");
            // $row_ticket=$ticket_res->row();
            
            // $ticket_Id = $row_ticket->ticket_Id;
            
              
            // return $ticket_Id;
            
            return $new_Date;
                                      // return true;
                                   }else {
                                       return false; 
                                   }
        
        
       
        
                                   //echo $this->db->last_query();die; 
                                   
    }
 
   
	
      
     public function asporderDetail($voucherNo){
          $query = $this->db->query("select * from asps_orders 
                                
                                where asps_orders.invoice_No='$voucherNo'");
            if($query->num_rows()>0){
                return $query->result();                
            }else {
                return false; 
            }
     }
    
    public function aspordDetail($voucherNo){
        $query = $this->db->query("select * from asps_orders 
                                where asps_orders.invoice_No='$voucherNo'");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
    public function aspfinalordDetail($voucherNo){
        $query = $this->db->query("select * from asps_orders 
                                where asps_orders.Voucher_No='$voucherNo'");
            if($query->num_rows()>0){
                return $query->result();                
            }else {
                return false; 
            }
    }
    
    public function aspfinalorderDetail($voucherNo){
       
        $query = $this->db->query("select * from asps_orders where Voucher_No='$voucherNo'");
         //print_r($query->num_rows());die;
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
    public function aspDetail($email_Id){
        $query = $this->db->query("select * from users where email='$email_Id'");
        $result = $query->row();
//        $asp_Id = $result->asp_id; 
//        $query1 = $this->db->query("select * from asp where asp_Id=$asp_Id");
//        $result1= $query1->row();
        return $result;
    }
    
    public function addshipmentOrder($shipmentOrder){
         $this->db->insert("asp_shipmentorder",$shipmentOrder);
         $last_id = $this->db->insert_id();
        
        $query1 = $this->db->query("select * from asp_shipmentorder where shipmentorder_Id=$last_id");
        $result = $query1->row();
        
        $voucher_Id = $result->voucher_Id;
        $shipId = $result->shipment_Id;
        
        $this->db->query("UPDATE asps_orders SET order_Status='Order Shipped' WHERE Voucher_No='$voucher_Id'");

        
                        if($this->db->affected_rows()>0) {
                            
                        //     $insert_id = $this->db->insert_id();
                        //     $ticket_res=$this->db->query("select * from asp_shipmentorder where shipmentorder_Id=$insert_id");
                        //     $row_ticket=$ticket_res->row();
            
                        // $ship_Id = $row_ticket->shipment_Id;
            
              
                        return $shipId;
            
            
                        //return true; 
                        }
                        else {
                        return false;
                        }
        
        
    }
    
    public function asporderId($voucherNo){
        $query1 = $this->db->query("select * from asp_finalorder where voucher_No='$voucherNo'");
        $result1= $query1->row();
        return $result1;
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
    
    public function shipmentDetail($voucherNo){
        $query = $this->db->query("select * from asp_shipmentorder where shipment_Id='$voucherNo'");
        $result = $query->row();
        return $result;
    }
    
    public function aspbasicDetail($asp_Id){
        //echo "select * from asp where asp_Id=$asp_Id"; die; 
        $query = $this->db->query("select * from users where id=$asp_Id");
        $result = $query->row();
        return $result;
    }
    
    public function addnewAsp($addnewAsp){
         $this->db->insert("asp",$addnewAsp);
                        if($this->db->affected_rows()>0) {
                        return true; 
                        }
                        else {
                        return false;
                        }
    }
    
   public function getaspdailyOrders(){
       
        $nowDate = date('m-d-Y'); 
         $response = array();
        // Select record
//        $this->db->where('order_Date', $nowDate);
//        $this->db->select('Voucher_No');
//        $q = $this->db->get('asps_orders');
       
    //   echo "select asps_orders.Voucher_No, order_Date, asps_orders.Part_Name,  asps_orders.Part_Name, skyzenpart_master.part_Name, asps_orders.Quantity, asps_orders.Unit_Rate, asps_orders.Net_Amount from asps_orders 
    //                 INNER JOIN users ON users.email = asps_orders.order_By
    //                 where asps_orders.orderplaced_Date='$nowDate'";  die; 
      $query =  $this->db->query("select users.userdept_Name, users.user_City, asps_orders.Voucher_No, order_Date, asps_orders.Part_Name, asps_orders.Quantity, asps_orders.delivered_Qty, asps_orders.Unit_Rate, asps_orders.Net_Amount from asps_orders 
                                INNER JOIN users ON users.email = asps_orders.order_By
                                where asps_orders.orderplaced_Date='$nowDate'");
        //echo $this->db->last_query(); die; 
        $response = $query->result();
//        echo "<pre>";
//       print_r($response);
        return $response;
    }
    
    public function addaspDetail($inserdata){
         $res = $this->db->insert_batch('users',$inserdata);
            if($res){
                return TRUE;
            }else{
                return FALSE;
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
            
            
            
            $query=$this->db->query("select SUM(delivered_Qty) AS delqty from asps_orders where mrinvoice_No='$mrNo'");
            $res = $query->row();

            $query1=$this->db->query("select SUM(materialreceive_Qty) AS matrecqty from asps_orders where mrinvoice_No='$mrNo'");
            $res1 = $query1->row();
            $deliverd_Qty = $res->delqty;
            $matrec_Qty = $res1->matrecqty;
                             
                             
            if($deliverd_Qty == $matrec_Qty){
                $this->db->query("UPDATE asps_orders SET order_Status='Order Received' WHERE mrinvoice_No='$mrNo'");
                
                $query = $this->db->query("select * from asps_orders where mrinvoice_No='$mrNo'");
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
                $this->db->query("UPDATE asps_orders SET order_Status='Partial Order' WHERE mrinvoice_No='$mrNo'");
                $query = $this->db->query("select * from asps_orders where mrinvoice_No='$mrNo'");
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
            
            
                    
                return true;
                        //echo $this->db->last_query(); die; 

        
//        $voucherNo = $pur['voucher_No'];
//        
//       // echo $voucherNo['0']; 
////        echo "<pre>";
////        print_r($voucherNo); die; 
//        
//        $addorder = array(
//                "voucher_No" => $voucherNo['0'],
//                "ordergen_Id" => $new_Date
//            );
//        
//        $this->db->insert("asp_finalorder",$addorder);
//        
//        foreach($voucherNo as $voucher){
//            $this->db->query("UPDATE asps_orders SET order_Status='2' WHERE Voucher_No='$voucher'");
//        }
//                                       
//            
//            
//                                       return true;
                                   }else {
                                       return false; 
                                   }
        
        
        
        
        
    }
    
    public function mrdetail($mrinvoiceNo){
        $query = $this->db->query("select * from materialreceive_vouchers where mrvoucher_No='$mrinvoiceNo'");
        $row = $query->row();
        return $row;
    }
    
    public function mrreceiveOrders($mrinvoiceNo){
        $query = $this->db->query("select * from asps_orders where mrinvoice_No='$mrinvoiceNo'");
        if($query->num_rows()>0){
            return $query->result();
        }else {
            return false; 
        }
    }
    
    public function addbalmaterialReceive($pur){
         for($i= 0; $i <count($pur['mrinvoice_No']); $i++){
             
             $mrinvoiceNo = $_POST['mrinvoice_No'][$i];
    $queryone = $this->db->query("select materialreceive_Qty from asps_orders where mrinvoice_No='$mrinvoiceNo'");

                                        foreach ($queryone->result() as $row)
                                        {
                                          $old_quantity =  $row->materialreceive_Qty;
                                          
                                        }
                                      
                                      $newqty   = $old_quantity + $_POST['matrecieve_Qty'][$i];
             
             
                 //$this->db->query("update skyzenpart_stock set good_Quantity='$bal' where part_Name='$partId'");
             
             
             
             
                            $data = array(
                               'materialreceive_Qty' =>$newqty
                            );
                $where = array('Part_Name ' => $pur['part_Name'][$i] , 'mrinvoice_No ' => $pur['mrinvoice_No'][$i]);
                $this->db->where($where);
                $this->db->update('asps_orders ', $data);
            
        }
        
        if($this->db->affected_rows()>0){
                
                    for($i= 0; $i <count($pur['part_Name']); $i++){
                            $data = array(
                                "Parts" => $pur['part_Name'][$i],
                               'materialreceive_Qty' =>$pur['matrecieve_Qty'][$i],
                                'mrinvoice_No' => $pur['mrinvoice_No'][$i],
                                'materialreceive_Date' => date("m-d-Y")
                            );
                        
                            $this->db->insert("materiralreceive_history",$data);
//                
                    }
            
                $mrNo = $pur['mrinvoice_No'][0];
            
            
            
            $query=$this->db->query("select SUM(delivered_Qty) AS delqty from asps_orders where mrinvoice_No='$mrNo'");
            $res = $query->row();

            $query1=$this->db->query("select SUM(materialreceive_Qty) AS matrecqty from asps_orders where mrinvoice_No='$mrNo'");
            $res1 = $query1->row();
            $deliverd_Qty = $res->delqty;
            $matrec_Qty = $res1->matrecqty;
                             
                             
            if($deliverd_Qty == $matrec_Qty){
                $this->db->query("UPDATE asps_orders SET order_Status='Order Received' WHERE mrinvoice_No='$mrNo'");
                
                $query = $this->db->query("select * from asps_orders where mrinvoice_No='$mrNo'");
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
                $this->db->query("UPDATE asps_orders SET order_Status='Partial Order' WHERE mrinvoice_No='$mrNo'");
                
                $query = $this->db->query("select * from asps_orders where mrinvoice_No='$mrNo'");
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
            
            
                    
                return true;

                                   }else {
                                       return false; 
                                   }
    }
    
    
    public function viewmatrecOrders($mrinvoice){
        $query = $this->db->query("select * from asps_orders where mrinvoice_No='$mrinvoice'");
        if($query->num_rows()>0){
            return $query->result();
        }else {
            return false; 
        }
    }
    
    public function viewshipDetail($shipNo){
        $query = $this->db->query("select * from asp_shipmentorder where shipment_Id='$shipNo'");
        if($query->num_rows()>0){
            return $query->row();
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
    
     public function aspShipmentDetails($voucherNo){
        $query = $this->db->query("select * from asp_shipmentorder where voucher_Id='$voucherNo'");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
    public function viewaspDetail($aspId){
        //echo $aspId; die; 
        $query = $this->db->query("select * from users where id=$aspId");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
     public function viewticketasps(){
        $query = $this->db->query("select * from users where user_role_id=7");
        if($query->num_rows()>0){
            return $query->result();
        }else {
            return false; 
        }
    }
    
    public function viewproductCost($prodModel){
        $query = $this->db->query("select prod_Unitrate from skyzenproducts_master where prod_Name='$prodModel'");
            if($query->num_rows()>0){
                return $query->row_object();                
            }else {
                return false; 
            }
    }
    
     public function updticket($updateticket,$id){
       
         $this->db->where(array("ticket_Id"=>$id));		
		$this->db->update("ticket_generate",$updateticket);
		if($this->db->affected_rows()>0) {
	    	return $id;    
		} else {
		     return false; 
		 }     
    }
    
    public function viewParts($partCategory){
        $category = urldecode($partCategory);
        //echo $category; die; 
        $query = $this->db->query("select * from skyzenpart_master where Category='$category'");
            if($query->num_rows()>0){
                return $query->result();                
            }else {
                return false; 
            }
    }
    
    public function asporderreceiveProducts($mrNo){
        $query = $this->db->query("select * from asps_orders where mrinvoice_No='$mrNo'");
            if($query->num_rows()>0){
                return $query->result();                
            }else {
                return false; 
            }
    }
    
    public function mrshipmentDetail($shipId){
        $query = $this->db->query("select * from asp_shipmentorder where shipment_Id='$shipId'");
            if($query->num_rows()>0){
                return $query->row();                
            }else {
                return false; 
            }
    }
    
    public function viewpartPendings($ticket_Id){
        $query = $this->db->query("select * from partnotavail_data where ticketId='$ticket_Id'");
            if($query->num_rows()>0){
                return $query->result();                
            }else {
                return false; 
            }
    }
    
    public function viewasppmtOrder(){
        $result = $this->db->query("select * from asporder_vouchers 
                                where order_Status=1 ORDER BY id DESC;");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
     
     public function ticketcsvData(){
        
        
        $query = $this->db->query("select ticket_generate.ticket_Id, cust_Mobile,cust_Altmobile,cust_Name,cust_Email,cust_Address1,cust_Address2,cust_Town,cust_State,cust_Pincode,prod_Brand, prod_Category, prod_Name, prod_Datepurchase,prod_Serialno, prod_Warranty, prod_Storeretailer, prod_Casetype, productcomplaint_Nature, prod_Priority, prod_Remarks, ticket_generate.asp_Name, amt_textbox, barcode, crm_Amount, asp_product_info_replace_info.complaint_type, asp_product_info_replace_info.complaint_overview, asp_product_info_replace_info.part_replace, asp_product_info_replace_info.part_section,total_cost,service_engineer_fee,ticket_generate.status,
        from_unixtime(ticket_Generatedate, '%d-%m-%Y') as genDate, ticket_Closedate from ticket_generate 
        LEFT JOIN asp_product_info_replace_info ON asp_product_info_replace_info.ticket_id = ticket_generate.ticket_Id");
        
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false; 
        }
    }
    
    
    public function viewaspList(){
        $query = $this->db->query("select * from users where user_role_id=7");
        if($query->num_rows()>0){
             return $query->result();
        }else {
            return false;
        }
    }
    public function viewDealerList(){
        $query = $this->db->query("select * from users where user_role_id=4");
        if($query->num_rows()>0){
             return $query->result();
        }else {
            return false;
        }
    }
    public function viewaspPayment(){
        $result = $this->db->query("select * from asp_Payment 
                                INNER JOIN users ON users.id = asp_Payment.asp_Id
                                where asp_Payment.status=1 ORDER BY asp_Payment.id DESC;");
        if($result->num_rows()>0){
            return $result->result();
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
    
            public function file_to_store_billings($bill_date,$invoice_number,$party_name,$town,$sales_account,$other_account,$product,$uom,$quantity,$unit_rate,$gross_amt,$discount,$gross_minus_discount,$cgst,$sgst,$igst,$gst_amt,$amount,$division,$due_date,$credit_period,$above_due_days,$aeigins,$pending_Amt,$less_equal_thirty,$greater_thirty_less_forty_five,$greater_fortyfive_less_forty_sixty,$greater_sixty_less_forty_ninty,$gninty,$current_date,$overdue_cal){
               //public function file_to_store_billings($bill_date,$invoice_number,$party_name,$town,$sales_account,$other_account,$product,$uom,$quantity,$unit_rate,$gross_amt,$discount,$gross_minus_discount,$cgst,$sgst,$igst,$gst_amt,$amount,$division,$due_date,$credit_period,$aeigins,$overdue,$pending_Amt){
        $query="insert into asp_billings values(null,'$bill_date','$invoice_number','$party_name','$town','$sales_account','$other_account','$product','$uom','$quantity','$unit_rate','$gross_amt','$discount','$gross_minus_discount','$cgst','$sgst','$igst','$gst_amt','$amount','$division','$credit_period','$due_date','$aeigins','$above_due_days','','','','$pending_Amt','$less_equal_thirty','$greater_thirty_less_forty_five','$greater_fortyfive_less_forty_sixty','$greater_sixty_less_forty_ninty','$gninty','$current_date','$overdue_cal')";
		$this->db->query($query);
    }
    
    public function store_billings($bill_date,$invoice_number,$party_name,$town,$amount,$pending_Amt,$division,$aeigins,$credit_period,$due_date,$above_due_days,$less_equal_thirty,$greater_thirty_less_forty_five,$greater_fortyfive_less_forty_sixty,$greater_sixty_less_forty_ninty,$gninty,$current_date,$overdue_cal){
    $query="insert into crm_billings_new values(null,'$bill_date','$invoice_number','$party_name','$town','$amount','$pending_Amt','$division','$aeigins','$credit_period','$due_date','$above_due_days','$less_equal_thirty','$greater_thirty_less_forty_five','$greater_fortyfive_less_forty_sixty','$greater_sixty_less_forty_ninty','$gninty','$current_date','$overdue_cal')";
		$this->db->query($query);
    }
    
                       public function store_billings_products($bill_date,$invoice_number,$party_name,$sales_acc,$other_acc,$product,$uom,$qty,$unit_rate,$amount,$discount,$gross_minus_discount,$cgst,$sgst,$igst,$gst_amt,$net_amt,$division){
        $query="insert into crm_billings_products values(null,'$bill_date','$invoice_number','$party_name','$sales_acc','$other_acc','$product','$uom','$qty','$unit_rate','$amount','$discount','$gross_minus_discount','$cgst','$sgst','$igst','$gst_amt','$net_amt','$division')";
		$this->db->query($query);
    }
    
    public function aspBillings(){
        
        
    //     $result=$this->db->query("SELECT invoice_number,party_name,town,amount,credit_period,due_date,aeigins,bill_date,SUM(amount) AS totalamt, pending_Amt FROM asp_billings GROUP BY invoice_number");
    //     if($result->num_rows()>0){ return $result->result();}
    //   else{return false;}
    
    $result=$this->db->query("SELECT * FROM crm_billings_new GROUP BY invoice_number");
        if($result->num_rows()>0){ return $result->result();}
       else{return false;}
       
       
        
    }
     
     public function aspBillingsDates($newfromDate,$newtoDate){
        
      
        $result=$this->db->query("SELECT * FROM asp_billings  WHERE bill_date BETWEEN '$newfromDate' AND '$newtoDate'");
        if($result->num_rows()>0){ 
            //print_r($result->num_rows());die;
            return $result->result();}
       else{return false;}
        
    }
    
    public function aspBillingsDateAsp($newfromDate,$newtoDate,$asp_namee){
         $result=$this->db->query("SELECT * FROM asp_billings  WHERE bill_date BETWEEN '$newfromDate' AND '$newtoDate' and party_name='$asp_name'");
        if($result->num_rows()>0){ 
            //print_r($result->num_rows());die;
            return $result->result();}
       else{return false;}
    }
    
    public function aspBillingsAsp($asp_name){
        $result=$this->db->query("SELECT * FROM asp_billings  WHERE party_name='$asp_name'");
        if($result->num_rows()>0){ 
            //print_r($result->num_rows());die;
            return $result->result();}
       else{return false;}
    }
    
    public function billPayments(){
        $query1 = $this->db->query("select *,scheme_assign_to_retailer_cheques.status as chequeStatus from scheme_assign_to_retailer_cheques
                    INNER JOIN users ON users.id = scheme_assign_to_retailer_cheques.retailer_name");
        if($query1->num_rows() > 0){
            return $query1->result();
        }else {
            return false;
        }
    }
    
    public function viewCheques(){
         $query = $this->db->query("select * from scheme_assign_to_retailer_cheques
         INNER JOIN users ON users.id = scheme_assign_to_retailer_cheques.retailer_name");
        if($query->num_rows()>0){
             return $query->result();
        }else {
            return false;
        }
    }
    
    public function viewrecieveCheques(){
        $result=$this->db->query("SELECT *, sum(cheque_amt) as totalAmount FROM scheme_assign_to_retailer_cheques  WHERE payment_Mode='Cheque' AND cheque_stage='Receive' group by cheque_number");
        if($result->num_rows()>0){ 
            //print_r($result->num_rows());die;
            return $result->result();}
       else{return false;}
    }
    
    public function viewintransitCheques(){
        $result=$this->db->query("SELECT *, sum(cheque_amt) as totalAmount FROM scheme_assign_to_retailer_cheques  WHERE payment_Mode='Cheque' AND cheque_stage='In Transit' group by cheque_number");
        if($result->num_rows()>0){ 
            //print_r($result->num_rows());die;
            return $result->result();}
       else{return false;}
    }
    
    public function cheque_update($where, $data)
	{
//        echo "<pre>";
//        print_r($data); die; 
		$this->db->update("scheme_assign_to_retailer_cheques", $data, $where);
        
		return $this->db->affected_rows();
        //echo $this->db->last_query(); die; 
	}
	
	public function chequepaid_update($where, $data){
	    $this->db->update("scheme_assign_to_retailer_cheques", $data, $where);
        
		return $this->db->affected_rows();
	}
    
}

?>	