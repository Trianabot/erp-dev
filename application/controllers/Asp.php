<?php 
class Asp extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form','date','security','string'));
        $this->load->library(array("session","form_validation"));
        $this->load->model("asp/AspModel");
        $this->load->model("settings/BranchModel");
        $this->load->model("settings/SupplierModel");
        $this->load->model("settings/DivisionModel");
        $this->load->model("settings/ProductModel");
        $this->load->model("Crm/CrmModel");
        $this->load->database();
    }
    
    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->view("asp/aspView");
    }
    
    public function newOrders(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['branchs']=$this->BranchModel->viewBranches();  
        $data['suppliers']=$this->SupplierModel->viewSupp(); 
        $data['divisions']=$this->DivisionModel->viewDivisions();  
        
       
       
        $data['products'] = $this->AspModel->viewProduct();

        //$data['partsmasters']=$this->AspModel->viewpartsMaster();
        
        $this->form_validation->set_rules("asporder_Date","Order Date","required|trim");
        $this->form_validation->set_rules("partbrand_Name","Brand Name","required|trim");
        
        
        if($this->form_validation->run()==true){
                   if(isset($_POST['Submit'])){
    
//echo "<pre>";
//                       print_r($_POST); die; 
         
            $voucher =  $this->input->post("Voucher_No");
            $order_Date =  $this->input->post("asporder_Date"); 
            $partbrand_Name = $this->input->post("partbrand_Name");  
//            $product_Name = $this->input->post("productcat_Name");
//            $parts_Id = $this->input->post("parts_Id");
           // echo $timestamp = strtotime('22-09-2008');
           // echo strtotime($date_Order); die; 
            //$order_Date =  strtotime();  product_Name  asp_ProductName
                       
            
           
                
            $Division =  $this->input->post("Division");
            
                       
//                       if(count($_POST['productcat_Name'] < 2)){
//                           echo "More than one data"; die; 
//                       }else {
//                           echo "Less than one data"; die; 
//                       }
                        for($i=0; $i < count($_POST['aspproduct_Quantity']); $i++ ) {
                            
                                $pur['asporder_Date'][]=  $order_Date;
                                $pur['partbrand_Name'][]=  $partbrand_Name;
                                //$pur['partbrand_Name'][] = $partbrand_Name;
                                $pur['product_Name'][]=   $_POST['product_Name'][$i]; 
                                $pur['parts_Id'][]=  $_POST['parts_Id'][$i];;
                                $pur['aspproduct_Quantity'][]=  $_POST['aspproduct_Quantity'][$i];
                                $pur['aspproduct_UnitRate'][]=  $_POST['aspproduct_UnitRate'][$i];
                                $pur['aspNet_Amount'][]=  $_POST['aspNet_Amount'][$i];      
                                $pur['aspNet_Landing'][]=  $_POST['aspNet_Landing'][$i]; 
                                $pur['aspDiscount_Perunit'][]=  $_POST['aspDiscount_Perunit'][$i]; 
                               
                        }
                       $orderAsp = array_filter($pur);
                       

                         $status=$this->AspModel->addOrder($pur);
                         
                         $voucher_Ticket = array(
                            "neworder" => $status
                        );
                        $this->session->set_userdata($voucher_Ticket);
                        
                        
                         if($status)
                        {
                                // $this->session->set_tempdata("add_success","New Order Added Successfully",2);
                                // redirect(base_url()."Asp/newOrders");
                                $this->session->set_flashdata('addorder_success','Order placed!!!!');
                                redirect(base_url()."Asp/newOrders");
                                
                        }
                        else
                        {
                                $this->session->set_tempdata("add_fail","Umable to Add new order",2);
                                redirect(base_url()."Asp/newOrders");
                        }
        }
        }else {
              $this->load->view("asp/neworderView",$data);
        }
//        echo "<pre>";
//        print_r($data['products']); die; 
 
        
      
        $this->load->view("footer");
    }
    
    
    public function partSpares($categoryName){
         $result=$this->db->query("SELECT * FROM skyzenpart_master WHERE Category='$categoryName'");

                    if($result->num_rows()>0) {
                        //$arr = array('parts_info' => $result->result());
                        $arr = $result->result();
                        echo json_encode($arr);
                    }else {
                        return false; 
                    }	
    }
    
    public function sparepartDetail($id){
        $part_Name = urldecode($id);
         $result = $this->db->query("select *  from skyzenpart_master where part_Name='$part_Name'");
        $res = $result->row();
		echo json_encode($res);
    }
    
    public function partDetails($id){
            $part_Name = urldecode($id);
           $result=$this->db->query("SELECT * FROM skyzenpart_master WHERE part_Name = '$part_Name'");

                    if($result->num_rows()>0) {
                        $arr = array('parts_info' => $result->result());
                        echo json_encode($arr);
                    }else {
                        return false; 
                    }	
    }
    
    public function ordersHisotry(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['orders'] = $this->AspModel->viewOrders();
//        echo "<pre>";
//        print_r($data['orders']); die; 
        $this->load->view("asp/ordershistView",$data);
        $this->load->view("footer");
    }
    
    public function ticketHistory(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['tickets'] = $this->AspModel->viewTickets();
                $email = $this->session->userdata('email');
        $query = $this->db->query("select * from users where email='$email'");
        
        $row=$query->row();
        $asp_Name = $row->id;
        $aspdept_Name =  $row->userdept_Name;
        //echo $asp_Name; die; 
        $data['asp_name'] = $aspdept_Name;
        $data['service_engineer'] = $this->AspModel->getServiceeng($aspdept_Name);
//        echo "<pre>";
//        print_r($data['tickets']); die;
        $this->load->view("asp/tickethistView",$data);
        $this->load->view("footer");
    }
    
    
    public function partDet($id){
         $result=$this->db->query("SELECT * FROM skyzenparts_master WHERE partsmaster_Id = '$id' ");

                    if($result->num_rows()>0) {
                        $arr = array('parts_info' => $result->result());
                        echo json_encode($arr);
                    }else {
                        return false; 
                    }	
    }
    
    public function productspare($name){
        //echo 
        $product_Name = urldecode($name);
         $result = $this->db->query("select *  from skyzenparts_master where category_Name='$product_Name' AND brand_Name='SKYZEN'");
        $res = $result->result();
		echo json_encode($res);
    }
    
    public function productsparepart($id){
        //$product_Name = urldecode($name);
         $result = $this->db->query("select *  from skyzenparts_master where partsmaster_Id=$id");
        $res = $result->row();
		echo json_encode($res);
    }

     public function aspAssign(){

          $date = date('Y-m-d');
           $se = $this->input->post("service_engineer");
          $ticket_id = $this->input->post("ticket_id");
          $asp_name = $this->input->post("asp_name");

         
         $query = $this->db->query("select email from users where userdept_Name='$asp_name'");

                foreach ($query->result() as $row)
                {
                   $asp_email =  $row->email;
                   
                }
                
         
         
          $assignTicket= array(
            "ticket_id"=>$ticket_id,
            "asp_name"=>$asp_email,
            "service_engineer"=>$se,
            "date"=>$date,
        
        );
         
//         echo "<pre>";
//         print_r($assignTicket); die; 
        
        
        
                //print_r($asp_email);die;
                
                
                $queryone = $this->db->query("select device_token from device_tokens where username='$asp_email'");

                foreach ($queryone->result() as $row)
                {
                   $asp_token =  $row->device_token;
                   
                }
              
    $assignTicket = xss_clean($assignTicket);
    $this->AspModel->assignAspToSe($assignTicket);
    $status = $this->AspModel->assignToSe($assignTicket);
    
    if($status==true)
        {
            //vgr

            $to = $asp_token;          
                
     //$to = "caQAZaGw8u8:APA91bFNhcye1_s2y6Fr-dh-wQXHkYtmISIfolMu9QrTTmeE1N8-Z3JjTGRa-NBV4xWXPD_BLhGBJnpr3rCli5ZyyGsWQaNsLn06cxfjEjJ2SDs6PwTzRrszBVzHHSczR-Ku0DA5LU8I";
     $data = array(
    'body' => 'Ticket no      '.$ticket_id. '   has been Assigned to you  ',
    'titile' => 'test title',
    'info'=> 'Ticket Assigned to you from'.$asp_name
    );
    $apiKey = 'AIzaSyBSONGZUkVOxT62WI8okWR9hZAE0bNXEHM';
    $fields = array( 'to' => $to, 'notification' => $data);

    $headers = array( 'Authorization: key='.$apiKey, 'Content-Type: application/json');

    $url = 'https://fcm.googleapis.com/fcm/send';

    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url);
    curl_setopt( $ch, CURLOPT_POST, true);
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    curl_close($ch);
                //$this->session->set_tempdata("add_success","Ticket Assigned Successfully",2);
        $this->session->set_flashdata('ticketassign_report','Successfully assign ticket!!!!');
                redirect(base_url()."Asp/ticketHistory");
        }
        else
        {
                $this->session->set_tempdata("add_fail","Unable to Assign Ticket",2);
                redirect(base_url()."Asp/ticketHistory");
        }

    }
    
    public function technician(){
        $this->load->view('header');
        $this->load->view('tabheader');
        $this->load->view('sidebar');
        $data['technicians'] = $this->AspModel->viewTechnicians();
//        echo "<pre>";
//        print_r($data['technicians']); die; 
        $this->load->view('asp/technicianView',$data);
        $this->load->view('footer');
    }
    
    public function aspTickets(){
        $this->load->view('header');
        $this->load->view('tabheader');
        $this->load->view('sidebar');
        $email = $this->session->userdata('email');
        $query = $this->db->query("select * from users where email='$email'");
        
        $row=$query->row();
        $asp_Name = $row->id;
        $aspdept_Name =  $row->userdept_Name;
        //echo $asp_Name; die; 
        $data['asp_name'] = $aspdept_Name;
//                foreach ($query->result() as $row)
//                {
//                   $asp_id =  $row->asp_id;
//                   
//                }
//                $query = $this->db->query("select asp_Name from asp where asp_Id='$asp_id'");
//
//                foreach ($query->result() as $row)
//                {
//                   $asp_Name =  $row->asp_Name;
//                   
//                }
//                $data['asp_name'] = $asp_Name;
        
       //print_r($asp_Name);die;
        $data['tickets'] = $this->AspModel->assignTickets($asp_Name);
        $data['service_engineer'] = $this->AspModel->getServiceeng($aspdept_Name);
//         echo "<pre>";
//        print_r($data['service_engineer']); die; 
      $this->load->view('asp/assignTicketsView',$data);
        $this->load->view('footer');
    }


    public function newTechnician(){
        $this->load->view('header');
        $this->load->view('tabheader');
        $this->load->view('sidebar');
        
        $this->form_validation->set_rules("name_technician","Technician Name","required|trim");
        $this->form_validation->set_rules("contact_number","Contact Number","required|trim");
        $this->form_validation->set_rules("alternatecontct_Num","Alternate Contact Number","required|trim");
        $this->form_validation->set_rules("technician_Email","Email","required|trim");
        $this->form_validation->set_rules("technician_Password","Contact Number","required|trim");
        $this->form_validation->set_rules("technician_Area","Area","required|trim");
        if($this->form_validation->run()==true){
            
//            echo "<pre>";
//            print_r($_POST); die; 
           $user_Id =  $this->session->userdata('id');
            $query = $this->db->query("select * from users where id=$user_Id");
            $res = $query->row();
            $user_Id = $res->userdept_Name; 
            //$asp_Id = $res->asp_id; 
            //echo $asp_Id; die;
            
//            $query1 = $this->db->query("select * from asp where asp_Id=$asp_Id");
//            $res1 = $query1->row();
//            $asp_Name = $res1->asp_Name;
//            
//            
            $add_Technican= array(
                    "usersdept_Name"=>$user_Id,
                    "user_role_id" => 8,
                    "contact_Person" => $this->input->post("name_technician"),
                    "contact_Number"=>$this->input->post("contact_number"),
                    "alternatecontact_Number" => $this->input->post("alternatecontct_Num"),
                    "email" => $this->input->post("technician_Email"),
                    "password" => md5($this->input->post("technician_Password")),
                    "user_City" => $this->input->post("technician_Area")
                
                );
            
            $add_Technican = xss_clean($add_Technican);
            
            $status = $this->AspModel->addTechnician($add_Technican);
            
            if($status==true)
				{
						$this->session->set_tempdata("add_success","New technician added Successfully",2);
						redirect(base_url()."Asp/newTechnician");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add technician",2);
						redirect(base_url()."Asp/newTechnician");
				}
        }else{
            $this->load->view('asp/newtechnicianView');
        }
        
        $this->load->view('footer');
    }
    
    public function newtechnicianList(){
        $this->load->view('header');
        $this->load->view('tabheader');
        $this->load->view('sidebar');
        
        $this->email = $this->session->userdata("email");
        
         $query = $this->db->query("select * from users where email='$this->email'");
        $res = $query->row();
        $dept_Name = $res->userdept_Name;
        
//        
//        $query1 = $this->db->query("select * from asp where asp_Id=$asp_Id");
//        $res1 = $query1->row();
//        $asp_Name = $res1->asp_Name;
        
        
        if ($this->input->post('submit')) {
                 
                $path = 'assets/files/asptechnician/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;

//                     echo "<pre>";
//                     print_r($allDataInSheet); die; 
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                        
                    $inserdata[$i]['contact_Person'] = $value['B'];
                    $inserdata[$i]['email'] = $value['C'];
                    $inserdata[$i]['usersdept_Name'] = $value['D'];
                    $inserdata[$i]['user_City'] = $value['E'];
                    $inserdata[$i]['contact_Number'] = $value['F'];
                    $inserdata[$i]['user_role_id'] = 8;
                    $inserdata[$i]['password'] = md5('asp');
                    

                        
                      $i++;
                    }          
                    // echo "<pre>";
                    // print_r($inserdata); die;      
                    $result = $this->AspModel->addtechnicianList($inserdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Technician Added Successfully",2);
                       // redirect(base_url()."Setting/engineer");
                        //redirect(base_url()."Setting/engineer");
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        
        
        $this->load->view('asp/newtechnicianlistView');
        $this->load->view('footer');
    }
    
    public function technicianCSV(){
        $filename = 'Technician_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		//$technicianData = $this->AspModel->gettechniancsv();
//        echo "<pre>";
//        print_r($technicianData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Name","Email","Asp Name","Area","Contact");
		fputcsv($file, $header);

//		foreach ($technicianData as $key=>$line){
//            $line = (array) $line;
//		 fputcsv($file,$line);
//		}

		fclose($file);
		exit; 
//    }
    }
    
    public function orderView($voucherNo){
        $this->load->view('header');
        $this->load->view('tabheader');
        $this->load->view('sidebar');
        $data['orders'] = $this->AspModel->orderviewDetail($voucherNo);
//        echo "<pre>";
//        print_r($data['orders']); die; 
       // $data['finalOrders'] = $this->AspModel->finalorders($voucherNo);
        
//        $orders = $data['orders'];
//        $finalorder = $data['finalOrders'];
//        
//        $finaleords = array_merge($orders,$finalorder);
        
        
//                echo "<pre>";
//        print_r($finaleord); die; 
        $data['voucherId']= $data['orders']['0']->Voucher_No; 
        $data['orderDate']= $data['orders']['0']->order_Date; 
        

        $this->load->view('asp/orderView',$data);
        $this->load->view('footer');
    }
    
    public function asppartStock(){
        $this->load->view('header');
        $this->load->view('tabheader');
        $this->load->view('sidebar');
        $data['partsstock'] = $this->AspModel->viewpartStock();
        $this->load->view('asp/partstockView',$data);
        $this->load->view('footer');
    }
    
    public function ticketView($ticket_Id){
         $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['ticket'] = $this->CrmModel->viewticketDetail($ticket_Id);
        $data['aspticketinfo'] = $this->CrmModel->viewaspticketInfo($ticket_Id);
        $data['partpendings'] = $this->CrmModel->viewpartPendings($ticket_Id);
//        echo "<pre>";
//        print_r($data['ticket']); 
//         print_r($data['aspticketinfo']); die; 
        $this->load->view("asp/ticketviewDetail",$data);
        $this->load->view("footer");
    }
    
    public function assignTech($id){
        $query = $this->db->query("select * from ticket_generate where ticketgenerate_Id=$id");
        $data = $query->row();
        
        $aspId = $data->asp;
        
        $query1 = $this->db->query("select * from users where id=$aspId");
        $res = $query1->row();
        $dept_Name = $res->userdept_Name;
        
        $query2 = $this->db->query("select * from users where usersdept_Name='$dept_Name' AND user_role_id=8");
        $data1 = $query2->result();
        //echo $data1;
        //echo $data->cust_Town;
        echo json_encode(array($data,$data1));
    }
    
    public function technician_update(){
        

        
        
         $data = array(
				        'service_Engineer' => $this->input->post('asp_Name')				
                     );

		$this->AspModel->technician_update(array('ticketgenerate_Id' => $this->input->post('ticketgenerate_id')), $data);
        
//        $aspId = $this->input->post('asp_Id');
//        //echo $asp_Id; die; 
//        echo "select * from users where id=$aspId"; die; 
//        $query = $this->db->query("select * from users where id=$aspId");
//        $res = $query->row();
//        
//        $asp_Email = $res->email;


//        $ticketassign_Update = array(
//            "ticket_id" => $this->input->post('ticketassign_Id'),
//            "asp_name" => $this->input->post('asp_Name'),
//            "service_engineer" => $this->input->post('asp_Name'),
//            "date" => date('Y-m-d')
//        );
//        
//        $this->db->insert("ticket_assign_details",$ticketassign_Update);
        
        
        echo json_encode(array("status" => TRUE));
    }
    
    public function editticket($id){
        
        //print_r($id);die;
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
          $data['ticket'] = $this->CrmModel->editTicket($id);
          $prodCategory = $data['ticket']->prod_Category; 
          $result = $this->db->query("select * from product_complaint where product_Category='$prodCategory'");
        $res_complaint = $result->result();
        $data['complaint'] = $res_complaint;
        
          $data['asp'] = $this->CrmModel->viewaspAssign($id);
          
          $data['technician'] = $this->CrmModel->viewtechnAssign($id);
          $data['asp_review'] = $this->CrmModel->aspreview($id);
          $asp_City = $data['ticket']->cust_Town; 
          $data['asps'] = $this->CrmModel->viewticketasps($asp_City);
          $prodModel = $data['ticket']->prod_Name; 
          $partCategory = $data['ticket']->prod_Category;
          
          $data['parts'] = $this->CrmModel->viewParts($partCategory);
          
          $partstock = $data['ticket']->prod_Name;
          
           $aspId = $data['ticket']->asp; 
           
           
            $query = $this->db->query("select * from users where id=$aspId");
            $res = $query->row();
            $aspEmail = $res->email;
            
            
            
           $query1 = $this->db->query("select * from asp_prod_part_stock where asp_Name='$aspEmail' AND part_Name='$partstock'");
           $partAvailabel = $query1->row();
           $data['part'] =  $partAvailabel;  
           
           $data['part_Cost'] = $this->CrmModel->viewproductCost($prodModel);
           
           
           
            $part_available = $this->input->post("partaspCost");
                //$part_name = $this->input->post("editpartName");
                $warranty = $this->input->post("prodwarranty_Casetype");
                 //print_r($warranty);die;
                 if($warranty == 'Warranty'){
                    $part_name = $this->input->post("editasppartName");
                   
                 }elseif($warranty == 'Outofwarranty') {
                    $part_name = $this->input->post("editasppartName_Two");
                    
                 }
                 
            
               $ticketId = $this->input->post("tickt_Id");
           
            if($part_available == "Part Not Available"){
               
               
               $this->db->query("UPDATE ticket_generate SET status='Part Pending' WHERE ticket_Id='$ticketId'");
                
                  $partnotData = array(
                    "aspId" => $aspId,
                    "ticketId" => $ticketId,
                    "partName" => $part_name,
                    "warranty_Type" => $warranty,
                    "notification_Date" => now(),
                  );
              
              $this->db->insert("partnotavail_data",$partnotData);
              
              // echo "test"; die; 
                //print_r("vgggggggg");  print_r($part_name);die;
                    $queryuemail = $this->db->query("select email from users where id='$aspId'");
                    
                                    foreach ($queryuemail->result() as $row)
                                    {
                                       $uemail =  $row->email;
                                       
                                    }
                                     
                                    $queryone = $this->db->query("select device_token from device_tokens where username='$uemail'");
                    
                                    foreach ($queryone->result() as $row)
                                    {
                                       $asp_token =  $row->device_token;
                                       
                                    }
                                   $to = $asp_token;   
                                   
                                $data = array(
                        'body' => 'This Part is Not Available in your Store. Part name is:  '.$part_name,
                        'titile' => 'test title',
                        //'info'=> 'Ticket Assigned to you from'.$asp_name
                        );
                        $apiKey = 'AIzaSyBSONGZUkVOxT62WI8okWR9hZAE0bNXEHM';
                        $fields = array( 'to' => $to, 'notification' => $data);
                    
                        $headers = array( 'Authorization: key='.$apiKey, 'Content-Type: application/json');
                    
                        $url = 'https://fcm.googleapis.com/fcm/send';
                    
                        $ch = curl_init();
                        curl_setopt( $ch, CURLOPT_URL, $url);
                        curl_setopt( $ch, CURLOPT_POST, true);
                        curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
                        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
                    
                        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($fields));
                        $result = curl_exec($ch);
                        curl_close($ch);
               redirect(base_url() . "Asp/ticketHistory");
                    
                }else {
           
           

          $this->form_validation->set_rules("prod_Datepurchase","Date","required|trim");
          $this->form_validation->set_rules("cust_Mobile","Mobile","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
          $this->form_validation->set_rules("cust_Altmobile","A;termate Mobile","numeric|regex_match[/^[0-9]{10}$/]|trim");          
          $this->form_validation->set_rules("cust_Name","Customer Name","required|trim|xss_clean|trim");   
          $this->form_validation->set_rules("cust_Email","Email","valid_email|trim");   
          $this->form_validation->set_rules("cust_Address1","Address","required|trim"); 
          $this->form_validation->set_rules("cust_Town","Town","required|trim"); 
          $this->form_validation->set_rules("aspeditticket_Name","Asp","required|trim");
          //$this->form_validation->set_rules("barcode_Scan","Barcode Scan","required|trim");
          $this->form_validation->set_rules("complaint_overview","Complaint Overview","required|trim");
        //   $this->form_validation->set_rules("service_Cost","Service Cost","required|trim");
        //   $this->form_validation->set_rules("distance_Travel","Distance Travel","required|trim");  
        
         $email = $this->session->userdata("email");
         
         $query = $this->db->query("select * from users where email='$email'");
        
        $row=$query->row();
        $asp_Name = $row->id;
        $aspdept_Name =  $row->userdept_Name;
        //echo $asp_Name; die; 
        $data['asp_name'] = $aspdept_Name;
        $data['service_engineer'] = $this->AspModel->getServiceeng($aspdept_Name);
        
        
          //$data['products'] = $this->CrmModel->viewProducts();
          $data['brands'] = $this->CrmModel->viewBrands();

                //print_r($this->form_validation->run());die;
       
          if($this->form_validation->run() == true){
               
             // echo "test"; die;
              $config['upload_path']          = './assets/images/billcopy/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;
			$this->load->library('upload', $config);

			if($this->upload->do_upload("custbill_Copy"))
			{
			   $data['success']=$this->upload->data();
			   $filename=$data['success']['file_name'];
			}
			else
			{
				$filename='';
			}	
              
              $aspId = $this->input->post("aspeditticket_Name"); 
               $category = $this->input->post("prod_Category");
               $distTravel = $this->input->post("distance_Travel");
               
               $prodCategory = $this->input->post("prod_Category");
               if($prodCategory == 'LED'){
                   $afterrate = 2;
               }else {
                   $afterrate = 3;
               }
               
               if($distTravel <= 50){
                  $amt_lati_longi = 0;
              }else if($distTravel >= 130){
                  $amt_lati_longi = 390;
              }else {
                  $amt_lati_longi = $distTravel * $afterrate;
              }
              
              $updateticket = array(
				"asp"=>$this->input->post("aspeditticket_Name"),
                "service_Engineer" => $this->input->post("technician_Name"),
                "barcode" =>$this->input->post("barcode_Scan"),
                "distance" => $distTravel,
                "amt_textbox" =>$amt_lati_longi,
                "prod_Serialno" => $this->input->post("prod_Serialno"),
                "prod_Storeretailer" => $this->input->post("prod_Storeretailer"),
                "status" => 'Ticket Closed',
                "ticket_Closedate" => date("d-m-Y"),
                "prod_Brand" => $this->input->post("prod_Brand"),
                "prod_Category" => $this->input->post("prod_Category"),
                "prod_Name" =>$this->input->post("prod_Name")
			 );
              
              
             
              $status=$this->CrmModel->updticket($updateticket,$id);
			  
			if($status==true)
				{
                $this->db->query("delete from partnotavail_data where ticketId='$id'");
                $complaint_Nat = $this->input->post("productcomplaint_Nature");
                
                if($complaint_Nat == ''){
                    $complaint_Nat = 0;
                }else {
                        $complaint_Nat = $this->input->post("productcomplaint_Nature");
                }
                
            $caseType = $this->input->post("prodwarranty_Casetype");
            if($caseType == 'Warranty'){
                $partName = $this->input->post("editasppartName");
            }else if($caseType == 'Outofwarranty'){
                 $partName = $this->input->post("editasppartName_Two");
            }
            
            
                    
                $partproductinfo = array(
                    "username" => $email,
                    "ticket_id" => $id,
                    "barcode_scan" =>$this->input->post("barcode_Scan"),
                    "complaint_type" =>$complaint_Nat,
                    "complaint_overview" =>$this->input->post("complaint_overview"),
                    "warrantycase_Type" =>$caseType,
                    "part_replace" => $this->input->post("repair_Info"),
                    "replace_date" =>date("Y-m-d"),
                    "amount" => $this->input->post("distance_Travel"),
                    "bill_copy" =>$filename,
                    "part_cost" => $this->input->post("partCost"),
                    "part_cost_gst" => $this->input->post("partcostGST"),
                    "part_discount_amt" => $this->input->post("partDiscount"),
                    "total_cost" => $this->input->post("totalCost"),
                    "service_engineer_fee" =>$this->input->post("service_Cost"),
                    "part_section" => $partName,
                    "repair_Remarks" => $this->input->post("repair_Remarks"),
                    "status" => 'Ticket Closed'
                );
                
                $this->db->insert("asp_product_info_replace_info",$partproductinfo);
                
                
                $aspId = $this->input->post("aspeditticket_Name");  
              $partName = $this->input->post("editasppartName");
              $warranty = $this->input->post("prodwarranty_Casetype");
              $userquery = $this->db->query("select * from users where id=$aspId");
          $resuser = $userquery->row();
          $userEmail = $resuser->email;
          
          $aspstockquery = $this->db->query("select * from asp_prod_part_stock where asp_Name='$userEmail' AND part_Name='$partName'");
          $stockRow = $aspstockquery->row();
          
          $goodQty = $stockRow->good_Quantity; 
          $badQty = $stockRow->bad_Quantity;  
        
        
            if($warranty = 'Warranty'){
                
    $gd_quantity = $goodQty - 1;
  $bdquantity = $badQty + 1;
    $this->db->query("UPDATE asp_prod_part_stock SET good_Quantity='$gd_quantity',bad_Quantity='$bdquantity' WHERE asp_Name='$userEmail' AND part_Name='$partName' ");
                           
                           
            }else if($warranty = 'Outofwarranty') {
                $gd_quantity = $goodQty - 1;
    $this->db->query("UPDATE asp_prod_part_stock SET good_Quantity='$gd_quantity' WHERE asp_Name='$userEmail' AND part_Name='$partName' ");
            }
            
                $this->session->set_flashdata('editticket_report','Successfully close ticket!!!!');
                redirect(base_url() . "Asp/ticketHistory");
                
				}
				else
				{
                    echo "Fail"; die; 
				}
              
             
          
        }else {
              $this->load->view("asp/ediaspticketview",$data);
          }          
          $this->load->view("footer");
                }
    }
    
    public function orderinvoiceView($id){
        $this->load->view("header");
        $this->load->view('tabheader');
        $this->load->view('sidebar');
          $data['orders'] = $this->AspModel->orderinvoiceDetail($id);
         $data['voucherId']= $data['orders']['0']->invoice_No; 
        $data['orderDate']= $data['orders']['0']->orderplaced_Date; 
        $this->load->view('asp/orderinvoiceView',$data);
        $this->load->view('footer');
    }
    
    public function ordershipView($id){
        $this->load->view("header");
        $this->load->view('tabheader');
        $this->load->view('sidebar');
          $data['orders'] = $this->AspModel->ordershipDetail($id);
         $data['voucherId']= $data['orders']['0']->shipment_No; 
        
        $data['shipment'] = $this->AspModel->shipmentDetail($id);
        $data['orderDate']= $data['orders']['0']->orderplaced_Date; 
        $this->load->view('asp/ordershipView',$data);
        $this->load->view('footer');
    }
    
    // public function ordermrView($id){
    //     $this->load->view("header");
    //     $this->load->view('tabheader');
    //     $this->load->view('sidebar');
    //     $data['orders'] = $this->AspModel->ordermrDetail($id);
    //     $data['voucherId']= $data['orders']['0']->mrinvoice_No; 
    //     $data['receiveDate']= $data['orders']['0']->materialreceive_Date; 
    //     $data['mrdetail'] = $this->AspModel->mrDetail($id);
    //     $this->load->view('asp/ordermrView',$data);
    //     $this->load->view('footer');
    // }
    
    public function editTechnician($id){
        $this->load->view("header");
        $this->load->view('tabheader');
        $this->load->view('sidebar');
        $data['technician'] = $this->AspModel->editTech($id);
//        echo "<pre>";
//        print_r($data['technician']); die; 
        if(isset($_POST['edittechsubmit'])){
//            echo "<pre>";
//            print_r($_POST); die; 
                $edittech = array(
                    "contact_Person" => $this->input->post("name_technician"),
                    "contact_Number" => $this->input->post("contact_number"),
                    "alternatecontact_Number" => $this->input->post("alternatecontct_Num"),
                    "email" => $this->input->post("technician_Email"),
                    "password" => md5($this->input->post("technician_Password")),
                    "user_City" => $this->input->post("technician_Area")
                );
                
                $edittech = xss_clean($edittech);
            $status=$this->AspModel->updateTech($edittech,$id);
            if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Technician Updated Successfully",2);
					redirect(base_url()."Asp/editTechnician/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Asp/editTechnician/".$id);
				}
            
                
        }   
        $this->load->view('asp/editechnicianView',$data);
        $this->load->view('footer');
    }
    
    public function delete_Technician($id){
        $this->db->query("update users set status='Inactive' where id=$id");		
		if($this->db->affected_rows()>0) 
		{
			echo "success";		
		} 
		else
		{
			echo "fail";
		}
    }
    
     public function emailExist(){
        $tech_email=$this->input->post("technician_Email");
		$result=$this->db->query("select * from users where email='$tech_email'");
		if($result->num_rows()>0)
		{
			echo json_encode("Email already existed"); 
		}
		else
		{
			echo "true"; 
		}
    }
    
    public function technicianAssign($id){
        $query = $this->db->query("select * from ticket_generate where ticketgenerate_Id=$id");
        $data = $query->row();
        
        $aspId = $data->asp;
        
        //$query1
        $query2 = $this->db->query("select * from users where id=$aspId");
        $data2 = $query2->row();
        $deptsName = $data2->userdept_Name;
        
        $query1 = $this->db->query("select * from users where user_role_id=8 AND usersdept_Name='$deptsName'");
        $data1 = $query1->result();
        //echo $data1;
        //echo $data->cust_Town;
        echo json_encode(array($data,$data1));
    }
    
    public function asporderReceive($shipno){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['orders'] = $this->AspModel->viewasporderHist($shipno);
        $data['order'] = $this->AspModel->viewshipoderbasic($shipno);
        $data['shipment'] = $this->AspModel->viewshipmentDetail($shipno);
        
         $email_Id = $data['order']->order_By; 
        $data['asp'] = $this->CrmModel->aspuserDetail($email_Id);
        
        if(isset($_POST['orderReceive'])){
            $config['upload_path']          = './assets/images/courierInvoice/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;
			$this->load->library('upload', $config);

			if($this->upload->do_upload("courierImage"))
			{
			   $data['success']=$this->upload->data();
			   $filename=$data['success']['file_name'];
			}
			else
			{
				$filename='';
			}	
            
            
            $date_comp = $this->db->query("select * from materialreceive_vouchers ORDER BY id DESC");
            $order_date = $date_comp->row();

            $date1 = date("dmY");
            if($order_date){
                $date = substr($order_date->mrvoucher_No,5,8);

                 if($date === $date1){
                $date_comp = $this->db->query("select * from materialreceive_vouchers ORDER BY id DESC");
                $ticket_date = $date_comp->row();
                $old_date = substr($order_date->mrvoucher_No,5,8);
                $date = substr($order_date->mrvoucher_No,-5);

                $new_Dat = str_pad($date + 1, 5, 0, STR_PAD_LEFT);
                $new_Date = "SKYMR".$old_date.$new_Dat;
            }else {
                $new_Date = "SKYMR".$date1.'00001';
            }
            }else {
                 $new_Date = "SKYMR".$date1.'00001';
            }
            
            
            
            for($i=0; $i < count($_POST['shipment_No']); $i++ ) {
                                
                                $partId= $_POST['Part_Name'][$i];
                                $aspName = $_POST['asp_Name'][$i];
                                $pur['shipment_No'][]=  $_POST['shipment_No'][$i];
                                $pur['asp_Name'][]=  $_POST['asp_Name'][$i];
                                $pur['voucher_No'][]=  $_POST['voucher_No'][$i];
                                $pur['Part_Name'][]=  $_POST['Part_Name'][$i];
                                $pur['materialreceive_Qty'][]=  $_POST['materialreceive_Qty'][$i];
                                $pur['mrinvoice_No'][] = $new_Date;
                    
                         $query2 = $this->db->query("select * from asp_prod_part_stock where part_Name='$partId'");

        if($query2->num_rows()>0){
                foreach ($query2->result() as $row){
                  $prodgood_quantity =  $row->good_Quantity;                }

                $newqty = $prodgood_quantity + $_POST['materialreceive_Qty'][$i];
            $this->db->query("update asp_prod_part_stock set good_Quantity='$newqty' where part_Name='$partId' AND asp_Name='$aspName'"); 
        }else {
             $addaspStock = array(
                    "part_Name"=>$_POST['Part_Name'][$i],
                    "good_Quantity"=>$_POST['materialreceive_Qty'][$i],
                    "asp_Name" => $_POST['asp_Name'][$i]
                );
                 
            $this->db->insert("asp_prod_part_stock",$addaspStock);
        }
            }
            $status=$this->AspModel->addmaterialReceive($pur);
                         if($status){                             
                             $addmaterialReceive = array(
                                "mrvoucher_No"=>$new_Date,
                                "shipment_No"=>$pur['shipment_No'][0],
                                "lr_Number" => $this->input->post("lrNumber"),
                                "voucher_No" => $pur['voucher_No'][0],
                                "courierinvoice_Image" => $filename,
                                "asp_Name" => $pur['asp_Name'][0],
                                "mrreceive_Date" => now()
                             );
                             
                             $this->db->insert("materialreceive_vouchers",$addmaterialReceive);
                             $shipNo = $pur['shipment_No'][0];
                             
                             if($status == 'Order Received'){
                                 $this->session->set_flashdata('order_receive','Successfully order received!!!!');
                              redirect(base_url()."Asp/ordersHisotry");
                             }else if($status == 'Partial Order'){
                                 $this->session->set_flashdata('partial_order','Partial Order received!!!!');
                              redirect(base_url()."Asp/ordersHisotry");
                             }
                             
                         }
            
        }else {
            $this->load->view("asp/asporderreceiveView",$data);
        }
        
        $this->load->view("footer");   
    }
    
    public function asporderbalReceive($mrinvoiceNo){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['mrdetail'] = $this->AspModel->mrdetail($mrinvoiceNo);
        $data['orders'] = $this->AspModel->mrreceiveOrders($mrinvoiceNo);
//        $data['order'] = $this->CrmModel->viewmrbasic($mrinvoiceNo);
        $data['courierdetail'] = $this->AspModel->viewcourierDetail($mrinvoiceNo);
        $asp_Email = $data['orders'][0]->order_By; 
        $data['asp_detail'] = $this->AspModel->viewmraspDetail($asp_Email);
        //$data['shipment'] = $this->AspModel->viewshipDetail($mrinvoiceNo);
        
        //   echo "<pre>";
        // print_r($data['courierdetail']); die;
        $shipId = $data['mrdetail']->shipment_No;
        
        
        $query = $this->db->query("select * from asp_shipmentorder where shipment_Id='$shipId'");
        $data['shipment'] = $query->row();

        if(isset($_POST['aspbalordersubmit'])){
            
            
//            echo "<pre>";
//            print_r($_POST); die; 
            
            
            $config['upload_path']          = './assets/images/courierInvoice/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;
			$this->load->library('upload', $config);

			if($this->upload->do_upload("courierImage"))
			{
			   $data['success']=$this->upload->data();
			   $filename=$data['success']['file_name'];
			}
			else
			{
				$filename='';
			}
            
            
             $date_comp = $this->db->query("select * from materialreceive_vouchers ORDER BY id DESC");
            $order_date = $date_comp->row();

            $date1 = date("dmY");
           //echo $date1 = '14082019'; die; 
            if($order_date){
                $date = substr($order_date->mrvoucher_No,5,8);

                 if($date === $date1){
                $date_comp = $this->db->query("select * from materialreceive_vouchers ORDER BY id DESC");
                $ticket_date = $date_comp->row();
                $old_date = substr($order_date->mrvoucher_No,5,8);
                $date = substr($order_date->mrvoucher_No,-5);

                $new_Dat = str_pad($date + 1, 5, 0, STR_PAD_LEFT);
                $new_Date = "SKYMR".$old_date.$new_Dat;
            }else {
                $new_Date = "SKYMR".$date1.'00001';
            }
            }else {
                 $new_Date = "SKYMR".$date1.'00001';
            }
            
            
//            echo "<pre>";
//            print_r($_POST); die; 
            for($i=0; $i < count($_POST['mrinvoice_No']); $i++ ) {
                
                                $partId= $_POST['part_Name'][$i];
                                $aspName = $_POST['asp_Name'][$i];
                                $pur['part_Name'][] = $_POST['part_Name'][$i];
                                $pur['mrinvoice_No'][] = $_POST['mrinvoice_No'][$i];
                                $pur['mrnewinvoice_No'][]=  $new_Date;
                                $pur['materialreceive_Qty'][]=  $_POST['materialreceive_Qty'][$i];
//                                $pur['prodnet_Amount'][]=  $_POST['prodnet_Amount'][$i];
                $pur['shipment_No'][]=  $_POST['shipment_No'][$i];
                $pur['voucher_No'][]=  $_POST['voucher_No'][$i];
                $pur['asp_Name'][] = $_POST['asp_Name'][$i];
                //$pur['mrinvoice_No'][] = $new_Date;
                
                
                
                
                
                $query2 = $this->db->query("select * from asp_prod_part_stock where part_Name='$partId'");

        
                foreach ($query2->result() as $row)
                {
                  $prodgood_quantity =  $row->good_Quantity;

                }

                $newqty = $prodgood_quantity + $_POST['materialreceive_Qty'][$i];
            
            $this->db->query("update asp_prod_part_stock set good_Quantity='$newqty' where part_Name='$partId' AND asp_Name='$aspName'"); 
                        }
            
            
                         $status=$this->AspModel->addbalmaterialReceive($pur);
            
            
            
                if($status){   
                    
                    $addmaterialReceive = array(
                                "mrvoucher_No"=>$new_Date,
                                "shipment_No"=>$pur['shipment_No'][0],
                                "lr_Number" => $this->input->post("lrNumber"),
                                "voucher_No" => $pur['voucher_No'][0],
                                "courierinvoice_Image" => $filename,
                                "asp_Name" => $pur['asp_Name'][0],
                                "mrreceive_Date" => now()
                             );
                             
                             $this->db->insert("materialreceive_vouchers",$addmaterialReceive);
                             $shipNo = $pur['shipment_No'][0];
                             
                             if($status == 'Order Received'){
                                 $this->session->set_flashdata('order_receive','Successfully order received!!!!');
                            //redirect(base_url()."Crm/orderProcess/".$voucher_No);
                              redirect(base_url()."Asp/ordersHisotry");
                             }else if($status == 'Partial Order'){
                                 $this->session->set_flashdata('partial_order','Partial Order received!!!!');
                            //redirect(base_url()."Crm/orderProcess/".$voucher_No);
                              redirect(base_url()."Asp/ordersHisotry");
                             }
                    
                    
                    
                    
//                     $this->session->set_flashdata('order_receive','Successfully order received!!!!');
//                              redirect(base_url()."Asp/ordersHisotry");
                    
                    
                    
                    
                    }else {
                    echo "Fail"; die; 
                }
            
            
            
            
        }
        $this->load->view("asp/asporderbalreceiveView",$data);
        $this->load->view("footer");
    }
    
    public function asporderShip($voucherNo){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['asporderproducts'] = $this->AspModel->asporderProducts($voucherNo);
        $data['shipment'] = $this->AspModel->shipmentDetail($voucherNo);
//        echo "<pre>";
//        print_r($data['shipment']); die; 
        $asp_Id = $data['shipment']->asp_Id; 
//        echo $asp_Id; die; 
        $data['aspdetail'] = $this->AspModel->aspbasicDetail($asp_Id);
////        $data['shipdetail'] = $this->CrmModel->shipmentOrder($voucherNo);
//        echo "<pre>";
//        print_r($data['aspdetail']); die; 
        $this->load->view("asp/aspshipmentorderView",$data);
        $this->load->view("footer");        
    }
    
    public function asporderview($voucherNo){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['order'] = $this->AspModel->aspordDetail($voucherNo);
        $data['orders'] = $this->AspModel->asporderDetail($voucherNo);
        $aspEmail = $data['order']->order_By;  
        $query = $this->db->query("select * from users where email='$aspEmail'");
        $aspDetail = $query->row();
        $data['asp_Detail'] = $aspDetail;
        // echo "<pre>";
        // print_r($data['orders']); die; 
        $this->load->view("asp/asporderinvoiceView",$data);
        $this->load->view("footer");
    }
    
    //delete order
    
    public function delete_order($id){
        $this->db->query("update asps_orders, asporder_vouchers set  asps_orders.ord_Status='0',asporder_vouchers.order_Status='0' where asporder_vouchers.voucher_No='$id' AND asps_orders.Voucher_No='$id'");		
		if($this->db->affected_rows()>0) 
		{
			echo "success";		
		} 
		else
		{
			echo "fail";
		}
    }
    
    public function ordermrView($id){
        $this->load->view("header");
        $this->load->view('tabheader');
        $this->load->view('sidebar');
        $data['mrdet'] = $this->AspModel->mrvoucherDetail($id);
//        echo $mrNo = $data['mrdet']['mrvoucher_No'];
//        die; 
        
        $mrdetail = $data['mrdet'];
        
        // echo "<pre>";
        // print_r($mrdetail); die; 
        foreach($mrdetail as $det){
            $mrNo = $det->voucher_No; 
            
        } 
        $data['voucher_No'] = $mrNo; 
//        //die; 
//        
//        
//        echo "<pre>";
//        print_r($data['mrdet']); 
//        print_r($data['mrhistorydetail']);
//        die; 
//        $data['orders'] = $this->AspModel->ordermrDetail($id);
//        $data['voucherId']= $data['orders']['0']->mrinvoice_No; 
//        $data['receiveDate']= $data['orders']['0']->materialreceive_Date; 
        //$data['mrdetail'] = $this->AspModel->mrDetail($id);
        $this->load->view('asp/ordermrView',$data);
        $this->load->view('footer');
    }
    
      public function invoicePayment(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        //$data['orders'] = $this->AspModel->viewaspOrders();
        $data['payments'] = $this->AspModel->viewaspPayments();
        // echo "<pre>";
        // print_r($data['payments']); die; 
        $this->load->view('asp/invoicepaymentView',$data);
        $this->load->view("footer");
    }
    
    public function insertaspAmount(){
         $invoice_Id = $this->input->post("invoice_Id");
        $payment_Amt = $this->input->post("payment_Amt");
        
        //echo "Ticket ID : ".$ticketId; echo "Amount :".$crmAmt; die; 
        $pay_Date =  date('d-m-Y');
        $txn_Id = random_string('numeric',8);
        $asppay_Amt = array(
            "transaction_Id" => ('TXN'.$txn_Id),
            "invoice_Id" => $invoice_Id,
            "payment_Amt" => $payment_Amt,
            "pay_Date" => $pay_Date
            
        );
        
        $this->db->insert("asporder_payment",$asppay_Amt);
//        $this->db->query("UPDATE ticket_generate SET crm_Amount=$crmAmt, crmapproveamt_Date='$crmamt_Update' WHERE ticket_Id=$ticketId");
        if($this->db->affected_rows()>0){
            echo 'update Success';
        }
    }
    
    public function paymentDetail($id){
        //echo "select * from asporder_payment where invoice_Id='$id'"; die; 
        $query = $this->db->query("select * from asporder_payment where invoice_Id='$id'");
        if($query->num_rows()>0){
            echo json_encode($query->result());
        }else{
            echo "No Data";
        }
    }
    
    public function ticketCSV(){
        $filename = 'ticket.csv';
		
		
		$ticketData = $this->AspModel->ticketcsvData();
// 		echo "<pre>";
// 		print_r($ticketData); die; 
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
		$file = fopen('php://output', 'w');

		$header = array("Ticket","Mobile1","Mobile2","Customer Name","Email","Address1","Address2","City/Town","State","Pincode","Brand","Category","Model","Purchase Date","Serial No","Warranty","Store/Retailer","Case Type","Complaint Nature","Priority","Product Remarks","Asp Name","Asp Amount","Barcode","Crm Approved Amt","Comaplaint Type","Complaint Overview","Repair Info","Part Section","Total Cost","Service Engineer Fee","Status","Ticket Generate Date","Closed Date");
		fputcsv($file, $header);
        
        foreach ($ticketData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;  
    }
    
    public function viewInvoice($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['invoice'] = $this->AspModel->viewInvoicedata($id);
//        echo "<pre>";
//        print_r($data['invoice']); die; 
        
        $from_Date = $data['invoice']->from_Date; 
        $to_Date = $data['invoice']->to_Date; 
        $asp_Id = $data['invoice']->asp_Id; 
        
//        echo "select * from `ticket_generate` 
//        INNER JOIN asp_product_info_replace_info ON asp_product_info_replace_info.ticket_id=ticket_generate.ticket_Id
//        where ticket_Closedate between '$from_Date' and '$to_Date' AND asp=$asp_Id"; die; 
        $result1 = $this->db->query("select * from `ticket_generate` 
        INNER JOIN asp_product_info_replace_info ON asp_product_info_replace_info.ticket_id=ticket_generate.ticket_Id
        where ticket_Closedate between '$from_Date' and '$to_Date' AND asp=$asp_Id");
   
        $data['tickets'] = $result1->result();
        
        
        $query = $this->db->query("select * from users where id=$asp_Id");
        $res = $query->row();
        
        $aspemail = $res->email; 
        
        
        $newaspfromDate = strtotime($from_Date);
        $newaspfromDate = date('m-d-Y', $newaspfromDate);
        
        
        $newasptoDate = strtotime($to_Date);
        $newasptoDate = date('m-d-Y', $newasptoDate);
        
        $this->db->where('orderplaced_Date >=', $newaspfromDate);
        $this->db->where('orderplaced_Date <=', $newasptoDate);
        $this->db->where('order_By', $aspemail);
        $result2= $this->db->get('asps_orders');
        
        //echo $this->db->last_query(); die; 
        $data['orders'] = $result2->result();
        
//        echo "<pre>";
//        print_r($res2); die; 
        
        
//        echo "<pre>";
//        print_r($data['tickets']); die; 
        
        $this->load->view("asp/invoiceView",$data);
        $this->load->view("footer");
    }
    
    
    //asp billings
    
    
    
    
    
}
?>