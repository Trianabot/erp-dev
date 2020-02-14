<?php
class Crm extends CI_Controller{

    public function __construct(){
        parent::__construct();
        error_reporting(E_ALL & ~E_NOTICE);
        $this->load->helper(array("form","url","date","string","security"));
        $this->load->library(array("form_validation","session"));
        $this->load->model("Crm/CrmModel");
        $this->load->model("ticketmodel","ticket");
        $this->load->model("travelexpModel","travel");
        $this->load->model("DealersalesModel","dealerSale");
        $this->load->database();
    }
    public function index(){
        
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['asps'] = $this->CrmModel->viewAspName();
        
        $aspnum = $this->input->post("aspname");
      
        $data['aspid'] = $aspnum;
        $this->load->view("crm_view",$data);
        
         
         
      }
      public function test(){
          $username = "cvr@skyzen.com";
          $your_url = "(https://www.trianabot.com/test_api/city_list.php,$username)"; 
          $data['objectlist'] = file_get_contents($your_url);
          echo "<pre>";
          print_r($data['objectlist']);die;
      }
      public function aspname(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['asps'] = $this->CrmModel->viewAspName();
        
        $aspnum = $this->input->post("aspname");
      
        $data['aspid'] = $aspnum;
        $this->load->view("crm/crm_aspview",$data);
      }
      
//      public function raiseTicket() {
//        $this->load->view("header");
//        $this->load->view("tabheader");
//        $data['asps'] = $this->CrmModel->viewAsp();
//        $data['products'] = $this->CrmModel->viewProducts();
//        $this->form_validation->set_rules("raiseticket_Date","Date","required|trim");
//        $this->form_validation->set_rules("raiseticket_Custname","Customer Name","required|trim");
//        $this->form_validation->set_rules("raiseticket_Product","Product","required|callback_product_check");
//        $this->form_validation->set_rules("raiseticket_Asp","ASP","required|callback_asp_check");
//        
//        $ticket = random_string('nozero',6);
//        if($this->form_validation->run()==true){
//            $addraise_Ticket = array(
//                "raise_Ticket" => "SKYZEN".$ticket,
//                "raiseticket_Date" => $this->input->post("raiseticket_Date"),
//                "raiseticket_Custname" => $this->input->post("raiseticket_Custname"),
//                "raiseticket_Contact" => $this->input->post("raiseticket_Contact"),
//                "raiseticket_Address" => $this->input->post("raiseticket_Address"),
//                "raiseticket_City" => $this->input->post("raiseticket_City"),
//                "raiseticket_Pincode" => $this->input->post("raiseticket_Pincode"),
//                "raiseticket_Product" => $this->input->post("raiseticket_Product"),
//                "raiseticket_Asp" => $this->input->post("raiseticket_Asp"),
//            );
//            
//            $addraise_Ticket = xss_clean($addraise_Ticket);
//            
//            $status = $this->CrmModel->addraiseTicket($addraise_Ticket);
//           if($status==true)
//            {
//                            $this->session->set_tempdata("add_success","Raise Ticekt Added Successfully",2);
//                            redirect(base_url()."Crm/raiseTicket");
//            }
//            else
//            {
//                            $this->session->set_tempdata("add_fail","Umable to Add Raise Ticket",2);
//                            redirect(base_url()."Crm/raiseTicket");
//            }
//        }else{
//            $this->load->view("crm/raiseticketview",$data);
//        }
//        
//        $this->load->view("footer");
//    }
    
      public function raiseTicket() {
          $this->load->view("header");
          $this->load->view("tabheader");
          $this->load->view("sidebar");
          $this->form_validation->set_rules("prod_Datepurchase","Date","required|trim");
          $this->form_validation->set_rules("cust_Mobile","Mobile","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
          $this->form_validation->set_rules("cust_Altmobile","A;termate Mobile","numeric|regex_match[/^[0-9]{10}$/]|trim");          
          $this->form_validation->set_rules("cust_Name","Customer Name","required|trim|xss_clean|callback_alpha_dash_space");   
          $this->form_validation->set_rules("cust_Email","Email","valid_email|trim");   
          $this->form_validation->set_rules("cust_Address1","Address","required|trim"); 
//          $this->form_validation->set_rules("cust_Town","Town","required|trim"); 
          
          //$data['products'] = $this->CrmModel->viewProducts();
          //$data['brands'] = $this->CrmModel->viewBrands();
          $data['asps'] = $this->CrmModel->viewAsps();
//          echo "<pre>";
//          print_r($data['asps']); die; 
            $date_comp = $this->db->query("select * from ticket_generate ORDER BY ticketgenerate_Id DESC");
            $ticket_date = $date_comp->row();

            $date1 = date("dmY");
            //$date1 = '14082019';
            if($ticket_date){
                $date = substr($ticket_date->ticket_Id,0,8);

                 if($date === $date1){
                $date_comp = $this->db->query("select * from ticket_generate ORDER BY ticketgenerate_Id DESC");
                $ticket_date = $date_comp->row();
                $old_date = substr($ticket_date->ticket_Id,0,8);
                $date = substr($ticket_date->ticket_Id,-4);

                $new_Dat = str_pad($date + 1, 4, 0, STR_PAD_LEFT);
                $new_Date = $old_date.$new_Dat;
            }else {
                $new_Date = $date1.'0001';
            }
            }else {
                 $new_Date = $date1.'0001';
            }

        
        
                
       
          if($this->form_validation->run() == true){
              $aspid = $this->input->post("aspName");
               if($aspid == ''){
                  $status = 'Open';
              }else {
                  $status = 'Assigned';
              }
              $dat = $this->db->query("select userdept_Name from users where id='$aspid'");
                $ti = $dat->row();
                $email = $ti->userdept_Name;
                 //echo "Warranty ".$this->input->post("prodwarranty_Casetype"); die; 
              $raise_Ticket = array(
                   "ticket_Id" => $new_Date,
                  "cust_Mobile" => $this->input->post("cust_Mobile"),
                  "cust_Altmobile" => $this->input->post("cust_Altmobile"),
                  "cust_Name" => $this->input->post("cust_Name"),
                  "cust_Email" => $this->input->post("cust_Email"),
                  "cust_Address1" => $this->input->post("cust_Address1"),
                  "cust_Address2" => $this->input->post("cust_Address2"),
                  "cust_Town" => $this->input->post("asp_Town"),
                  "cust_State" => $this->input->post("cust_State"),
                  "cust_Pincode" => $this->input->post("cust_Pincode"),
                  "prod_Brand" => $this->input->post("prod_Brand"),
                  "prod_Category" => $this->input->post("prod_Category"),
                  "prod_Name" => $this->input->post("prod_Name"),
                  "prod_Datepurchase" => $this->input->post("prod_Datepurchase"),
                  "prod_Serialno" => $this->input->post("prod_Serialno"),
                  "prod_Warranty" => $this->input->post("prod_Warranty"),
                  "prod_Storeretailer" => $this->input->post("prod_Storeretailer"),
                  "prod_Casetype" => $this->input->post("prod_Casetype"),
                  "productcomplaint_Nature" => $this->input->post("productcomplaint_Nature"),
                  "prod_Priority" => $this->input->post("prod_Priority"),
                  "prod_Remarks" => $this->input->post("prod_Remarks"),
                  "ticket_Generatedate" => now(),
                  "asp" => $this->input->post("aspName"),
                  "asp_Name" => $email,
                  "status" => $status
              );
              $aspid = $this->input->post("aspName");
              
              //print_r($aspid);die;
              $raise_Ticket = xss_clean($raise_Ticket);
            
              $status = $this->CrmModel->raiseTicket($raise_Ticket);
              
              $raise_tickets = array(
                    "ticket" => $status
              );
              $this->session->set_userdata($raise_tickets);
              
//                echo "<pre>";
//              echo $status; die; 
                
                if ($status) {
                  //echo '<script>alert("You Have Successfully Raise the ticket!");</script>';
                 $this->session->set_flashdata('report','Successfully raise ticket!!!!');
                //$this->session->set_tempdata("add_success", "Successfully raise ticket!!!", 2);
                redirect(base_url() . "Crm/raiseTicket");
              
              
//              //push notification
             $query = $this->db->query("select email from users where asp_id='$aspid'");

                foreach ($query->result() as $row)
                {
                  $asp_email =  $row->email;
                  
                }
                
                //print_r($asp_email);die;
                
                
                $queryone = $this->db->query("select device_token from device_tokens where username='$asp_email'");

                foreach ($queryone->result() as $row)
                {
                  $asp_token =  $row->device_token;
                  
                }
                
                
      $to = $asp_token;          
                
    //$to = "caQAZaGw8u8:APA91bFNhcye1_s2y6Fr-dh-wQXHkYtmISIfolMu9QrTTmeE1N8-Z3JjTGRa-NBV4xWXPD_BLhGBJnpr3rCli5ZyyGsWQaNsLn06cxfjEjJ2SDs6PwTzRrszBVzHHSczR-Ku0DA5LU8I";
    $data = array(
    'body' => 'Ticket no      '.$new_Date. '   has been Assigned to you  ',
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
    print_r(json_decode($result, true));
    return json_decode($result, true);
                
              
            } else {
                $this->session->set_tempdata("add_fail", "Umable to Add Raise Ticket", 2);
                redirect(base_url() . "Crm/raiseTicket");
            }
        } else {
              $this->load->view("crm/raiseticketview",$data);
          }          
          $this->load->view("footer");
      }
      
    
    
    
      function alpha_dash_space($fullname){
    if (! preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
        $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
        return FALSE;
    } else {
        return TRUE;
    }
}

      function product_check()
    {
            if ($this->input->post('raiseticket_Product') == '0')  {
            $this->form_validation->set_message('product_check', 'Please choose product.');
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    
     function complainttype_check()
    {
            if ($this->input->post('productcomplaint_Nature') == '0')  {
            $this->form_validation->set_message('complainttype_check', 'Please choose complaint.');
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    
     function asp_check()
    {
            if ($this->input->post('raiseticket_Asp') == '0')  {
            $this->form_validation->set_message('asp_check', 'Please choose ASP.');
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    
//    public function ticketHistory(){
//        $this->load->view("header");
//        $this->load->view("tabheader");
//        $data['tickets'] = $this->CrmModel->ticketHistory();
////        echo "<pre>";
////        print_r($data['tickets']); die; 
//        $this->load->view("crm/tickethistoryView",$data);
//        $this->load->view("footer");
//    }
    
     public function ticketHistory(){
         $this->load->view("header");
         $this->load->view("tabheader");
         $this->load->view("sidebar");
         $data['tickets'] = $this->CrmModel->ticketHist();
//         
//         echo "<pre>";
//         print_r($data['tickets']); die; 
         $data['asps'] = $this->CrmModel->viewAsp();
//                 echo "<pre>";
//        print_r($data['tickets']); die;
         $this->load->view("crm/tickethistoryView",$data);
         $this->load->view("footer");
     }
     
     public function ajax_list()
    {
        
        $list = $this->ticket->get_datatables();
        // echo "<pre>";
        // print_r($list); die; 
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $tickets) {
            $no++;
            $row = array();
            //$row[]= $customers->status;
            
            if($tickets->status === 'Ticket Closed'){
                $row[] = "<a onclick='return false' href='javascript:void(0)'><i class='fa fa-bars' aria-hidden='true' title='reassign asp'></i></a> <a href='javscript:void(0)' onclick='return false;'><i class='far fa-edit' aria-hidden='true' title='edit'></i></a>
                <a class='' onclick='return false' href='javascript:void(0)'><i class='fa fa-trash' aria-hidden='true' title='delete'></i></a>";
            }else if($tickets->status === 'Part Pending'){
                $row[]= "<a class='update_Asp' onclick='edit_asp($tickets->ticketgenerate_Id)' href='javascript:void(0)'><i class='fa fa-bars' aria-hidden='true' title='reassign asp'></i></a>
                <a href='editticket/$tickets->ticket_Id'><i class='far fa-edit' aria-hidden='true' title='edit'></i></a>
                <a class='ticket_delete' onclick='deleteTicket($tickets->ticketgenerate_Id)' data-emp-id='$tickets->ticketgenerate_Id' href='javascript:void(0)'><i class='fa fa-trash' aria-hidden='true' title='delete'></i></a>";
            }else if($tickets->status === 'Open'){
                $row[]= "<a class='update_Asp' onclick='edit_asp($tickets->ticketgenerate_Id)' href='javascript:void(0)'><i class='fa fa-bars' aria-hidden='true' title='reassign asp'></i></a>
                <a href='editticket/$tickets->ticket_Id'><i class='far fa-edit' aria-hidden='true' title='edit'></i></a>
                <a class='ticket_delete' onclick='deleteTicket($tickets->ticketgenerate_Id)' data-emp-id='$tickets->ticketgenerate_Id' href='javascript:void(0)'><i class='fa fa-trash' aria-hidden='true' title='delete'></i></a>";
            }else if($tickets->status === 'Assigned'){
                $row[]= "<a class='update_Asp' onclick='edit_asp($tickets->ticketgenerate_Id)' href='javascript:void(0)'><i class='fa fa-bars' aria-hidden='true' title='reassign asp'></i></a>
                <a href='editticket/$tickets->ticket_Id'><i class='far fa-edit' aria-hidden='true' title='edit'></i></a>
                <a class='ticket_delete' onclick='deleteTicket($tickets->ticketgenerate_Id)' data-emp-id='$tickets->ticketgenerate_Id' href='javascript:void(0)'><i class='fa fa-trash' aria-hidden='true' title='delete'></i></a>";
            }
            $row[] = $tickets->cust_Name;
             $row[] = $tickets->cust_Town;
            $row[] = $tickets->cust_Mobile;
            $row[] = $tickets->ticket_Id;
            $row[] = $tickets->prod_Priority;
            if($tickets->ticket_Generatedate){
                $gen_Date =  $tickets->ticket_Generatedate;
                $issueDate = date("d-m-Y", $gen_Date);
            }
            $row[]= $issueDate;
            $row[]= $tickets->ticket_Closedate;
            if($tickets->asp){
                $result = $this->db->query("select * from users where id=$tickets->asp");
                $res = $result->row();
                $dept_Name = $res->userdept_Name;
                $row[] = $dept_Name;
            }else{
                $row[] = "<h6 style='color:red'>Not assigned</h6>";
            }
            
            if($tickets->service_Engineer){
                $result = $this->db->query("select * from users where id=$tickets->service_Engineer");
                $res = $result->row();
                $dept_Name = $res->contact_Person;
                $row[] = $dept_Name;
            }else{
                $row[] = "";
            }
            
            $row[] = $tickets->crm_Amount;
            
            
            $resservice_Cost='';
            $query = $this->db->query("select * from asp_product_info_replace_info where ticket_id=$tickets->ticket_Id");
            if($query->num_rows()>0){
                $res = $query->row();
                $resservice_Cost = $res->service_engineer_fee;
                 if($resservice_Cost){
                        $resservice_Cost = $resservice_Cost;
                }else {
                    $resservice_Cost = 0;
                }
            }
            
           
            if($tickets->amt_textbox){
                $postedAmt = $tickets->amt_textbox;
            }else {
                $postedAmt = 0;
            }
            //$res_Cost = $postedAmt;
             $res_Cost = ((int)$postedAmt + (int)$resservice_Cost);
            $row[]= $res_Cost;
            
            if($tickets->status === 'Ticket Closed'){
                $row[] = "<a href='ticketView/$tickets->ticket_Id' class='btn btn-primary'>Closed</a>";
            }else if($tickets->status === 'Part Pending'){
               $row[] = "<a href='ticketView/$tickets->ticket_Id' class='btn btn-primary'>Part Pending</a>";
            }else if($tickets->status === 'Open'){
                $row[]= "<a href='ticketView/$tickets->ticket_Id' class='btn btn-primary'>Open</a>";
            }else if($tickets->status === 'Assigned'){
                $row[]= "<a href='ticketView/$tickets->ticket_Id' class='btn btn-primary'>Assigned</a>";
            }
            
                                                              

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->ticket->count_all(),
                        "recordsFiltered" => $this->ticket->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }
    
     public function assignASP(){
         $this->load->view("header");
         $this->load->view("tabheader");
         $this->load->view("sidebar");
         $this->load->view("crm/tickethistoryView");
         $this->load->view("footer");
     }
    public function ticketDetails(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->view("crm/ticketdetailView");
        $this->load->view("footer");
    }
    
    public function Asp(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['asps'] = $this->CrmModel->viewAsp();
//        echo "<pre>";
//        print_r($data['asps']); die; 
        $this->load->view("crm/aspView",$data);
        $this->load->view("footer");
    }
    
//    public function newaspList(){
//        $this->load->view("header");
//        $this->load->view("tabheader");
//        $this->load->view("sidebar");    
//        if($this->input->post('upload') != NULL ){ 
//   			$data = array(); 
//   			if(!empty($_FILES['file']['name'])){ 
//    			// Set preference 
//    			$config['upload_path'] = 'assets/files/users'; 
//    			$config['allowed_types'] = 'csv'; 
//    			$config['max_size'] = '2048000000'; // max_size in kb 
//    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 
//
//    			// Load upload library 
//    			$this->load->library('upload',$config); 
//   
//    			// File upload
//    			if($this->upload->do_upload('file')){ 
//     				// Get data about the file
//     				$uploadData = $this->upload->data(); 
//     				$filename = $uploadData['file_name']; 
//
//     				// Reading file
//                   $file = fopen("assets/files/asp/".$filename,"r");
//                    $c = 0;
//
//                    $importData_arr = array();
//                       
//                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
////
//						 echo "<pre>";
//						 print_r($filedata); die; 
//                        // $num = count($filedata);
//
//                        // for ($c=0; $c < $num; $c++) {
//                        //     $importData_arr[$i][] = $filedata[$c];
//                        // }
//						// $i++;
//                                    $Asp_Name = $filedata[0];
//                                    $Asp_Contact = $filedata[1];
//                                    $Asp_Pincode = $filedata[2];
//                                    $Asp_Area = $filedata[3];
//                        
//                                    if ($c <> 0) {
//                            $new_Asp = array(
//                                "asp_Name" => $Asp_Name,
//                                "asp_Contact" => $Asp_Contact,
//                                "asp_Pincode" => $Asp_Pincode,
//                                "asp_Area" => $Asp_Area
//                            );
//                            $status = $this->CrmModel->addAsplist($new_Asp);
//                        }
//                        $c = $c + 1;
//                    }
//                    fclose($file);
//
//                        $this->session->set_tempdata("add_success","ASP List Added Successfully",2);
//     				   //$data['response'] = 'successfully uploaded '.$filename; 
//    			}else{ 
//     				//$data['response'] = 'failed'; 
//                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
//    			} 
//   			}else{ 
//    			//$data['response'] = 'failed'; 
//                $this->session->set_tempdata("add_fail","Umable to Add ASP",2);
//   			} 
//   			// load view 
//   			$this->load->view('crm/addaspView'); 
//  		}else{
//        $this->load->view('crm/addaspView');
//        }
//        $this->load->view("footer");
//    }
    
    
    public function newAsp(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");  
        
        $this->form_validation->set_rules("asp_Name","Asp Name","required|trim");
        
        if($this->form_validation->run()==true){
           
//            echo "<pre>";
//            print_r($_POST); die; 
            
            
            $addnewAsp = array(
                    "asp_Name"=> $this->input->post("asp_Name"),
                    "mobile_primary"=> $this->input->post("mobile_primary"),
                    "asp_Area"=> $this->input->post("asp_Area"),
                    "asp_Contact"=> $this->input->post("asp_Contact"),
                    "mobile_alternative"=> $this->input->post("mobile_alternative"),
                    "asp_Pincode"=> $this->input->post("asp_Pincode"),
                );
            
            $addnewAsp = xss_clean($addnewAsp);
            
            $status = $this->CrmModel->addnewAsp($addnewAsp);
            
            if($status==true)
				{
						$this->session->set_tempdata("add_success","New Asp added Successfully",2);
						redirect(base_url()."Crm/newAsp");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Asp",2);
						redirect(base_url()."Crm/newAsp");
				}
            
        }
        $this->load->view('crm/addsingleaspView');
        $this->load->view("footer");
    }
    
    
    public function aspCSV(){
        // file name
		$filename = 'ASP_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$aspData = $this->CrmModel->getaspcsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Name","Contact","Pin Code","Area","Contact Number","Alternate Contact Number");
		fputcsv($file, $header);

		foreach ($aspData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;   
    }
    
    public function Serviceengineer(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        //$data['asps'] = $this->CrmModel->viewAsp();
        $this->load->view("crm/serviceengineerView");
        $this->load->view("footer");
    }
    
    public function newserviceEngineer(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/serviceengineer'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '2048000000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/serviceengineer/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
//
						 echo "<pre>";
						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
                                    $Asp_Name = $filedata[0];
                                    $Asp_Contact = $filedata[1];
                                    $Asp_Pincode = $filedata[2];
                                    $Asp_Area = $filedata[3];
                        
                                    if ($c <> 0) {
                            $new_Asp = array(
                                "asp_Name" => $Asp_Name,
                                "asp_Contact" => $Asp_Contact,
                                "asp_Pincode" => $Asp_Pincode,
                                "asp_Area" => $Asp_Area
                            );
                            $status = $this->CrmModel->addAsplist($new_Asp);
                        }
                        $c = $c + 1;
                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Service Engineer Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add Service Engineer",2);
   			} 
   			// load view 
   			$this->load->view('crm/addserviceengineerView'); 
  		}else{
        $this->load->view('crm/addserviceengineerView');
        }
        $this->load->view("footer");
    }
    
    public function Stockview(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->view("crm/serviceengineerView");
        $this->load->view("footer");
    }
    
    public function delete_Ticket($id){
        
		$this->db->query("update ticket_generate set status_ticket='0' where ticketgenerate_Id=$id");		
		if($this->db->affected_rows()>0) 
		{
			echo "success";		
		} 
		else
		{
			echo "fail";
		}
    }
    
    public function editAsp($id){
        //$data = $this->CrmModel->getaspDetail($id);
        $query = $this->db->query("select * from ticket_generate where ticketgenerate_Id=$id");
        $data = $query->row();
        
        //$town = $data->cust_Town;
        
        
        $query1 = $this->db->query("select * from users where user_role_id=7");
        $data1 = $query1->result();
        //echo $data1;
        //echo $data->cust_Town;
        echo json_encode(array($data,$data1));
    }
    
    public function aspDetails($id){
         $query1 = $this->db->query("select * from users where user_City='$id' AND user_role_id=7");
        $data = $query1->result();
        echo json_encode($data);
    }
    
    public function aspallDetails(){
         $query1 = $this->db->query("select * from users where user_role_id=7");
        $data = $query1->result();
        echo json_encode($data);
    }
    
    
    public function asp_update(){
                     $data = array(
				        'asp' => $this->input->post('asp_Name'),
				        'status' => 'Assigned'
                     );

		$this->CrmModel->asp_update(array('ticketgenerate_Id' => $this->input->post('ticketgenerate_id')), $data);
        
        
        
        
		
		//push notification
		$aspid = $this->input->post("asp_Name");
             $querytwo = $this->db->query("select email from users where id=$aspid");

                foreach ($querytwo->result() as $row)
                {
                  $asp_email =  $row->email;
                  
                }
                
                //print_r($asp_email);die;
                
                
                $querythree = $this->db->query("select device_token from device_tokens where username='$asp_email'");

                foreach ($querythree->result() as $row)
                {
                  $asp_token =  $row->device_token;
                  
                }
                $to = $asp_token;
		//$to = "caQAZaGw8u8:APA91bFNhcye1_s2y6Fr-dh-wQXHkYtmISIfolMu9QrTTmeE1N8-Z3JjTGRa-NBV4xWXPD_BLhGBJnpr3rCli5ZyyGsWQaNsLn06cxfjEjJ2SDs6PwTzRrszBVzHHSczR-Ku0DA5LU8I";
    $data = array(
    'body' => 'Ticket Re Assigned Successfully',
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
    print_r(json_decode($result, true));
    return json_decode($result, true);
  
		echo json_encode(array("status" => TRUE));
        
    }
    
    public function editticket($id){
      //$part_name = $this->input->post("editpartName");
               //print_r($part_name);die;
           $this->load->view("header");
          $this->load->view("tabheader");
        $this->load->view("sidebar");
          $data['ticket'] = $this->CrmModel->editTicket($id);
          $prodCategory = $data['ticket']->prod_Category; 
           //echo "select * from product_complaint where product_Category='$prodcategory'"; die; 
          $result = $this->db->query("select * from product_complaint where product_Category='$prodCategory'");
        $res_complaint = $result->result();
        $data['complaint'] = $res_complaint;
        //   echo "<pre>";
        //   print_r($data['complaint']); die; 
          $data['asp'] = $this->CrmModel->viewaspAssign($id);
          //$data['technician'] = $this->CrmModel->viewtechnicianAssign($id);
          $data['technician'] = $this->CrmModel->viewtechnAssign($id);
          $data['asp_review'] = $this->CrmModel->aspreview($id);
          //$asp_City = $data['ticket']->cust_Town; 
          $data['asps'] = $this->CrmModel->viewticketasps();
          $prodModel = $data['ticket']->prod_Name; 
          
          $partCategory = $data['ticket']->prod_Category;
          $partstock = $data['ticket']->prod_Name;
       
        //   echo "<pre>";
        //   print_r($data['ticket']); die; 
        if($data['ticket']->asp){
            $aspId = $data['ticket']->asp; 
           
          $userquery = $this->db->query("select * from users where id=$aspId");
          $resuser = $userquery->row();
          $userEmail = $resuser->email;
           
        }
          
           
          
                $part_available = $this->input->post("partCost");
                //$part_name = $this->input->post("editpartName");
                $warranty = $this->input->post("prodwarranty_Casetype");
                 //print_r($warranty);die;
                 if($warranty == 'Warranty'){
                    $part_name = $this->input->post("editpartName");
                   
                 }elseif($warranty == 'Outofwarranty') {
                    $part_name = $this->input->post("editpartName_two");
                    
                 }
                 
            
               $ticketId = $this->input->post("tickt_Id");
                 //vgr
           if($part_available == "Part Not Available"){
               
                $aspId = $this->input->post("aspeditticket_Name");
               $this->db->query("UPDATE ticket_generate SET status='Part Pending',asp=$aspId WHERE ticket_Id='$ticketId'");
              
                  $partnotData = array(
                    "aspId" => $aspId,
                    "ticketId" => $ticketId,
                    "partName" => $part_name,
                    "warranty_Type" => $warranty,
                    "notification_Date" => now(),
                  );
              
              $this->db->insert("partnotavail_data",$partnotData);
              $aspId = $this->input->post("aspeditticket_Name");
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
               redirect(base_url() . "Crm/ticketHistory");
                    
                }else {
         
          
          
          $data['parts'] = $this->CrmModel->viewParts($partCategory);
          
          $this->form_validation->set_rules("prod_Datepurchase","Date","required|trim");
          $this->form_validation->set_rules("cust_Mobile","Mobile","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
          $this->form_validation->set_rules("cust_Altmobile","A;termate Mobile","numeric|regex_match[/^[0-9]{10}$/]|trim");          
          $this->form_validation->set_rules("cust_Name","Customer Name","required|trim|xss_clean|callback_alpha_dash_space");   
          $this->form_validation->set_rules("cust_Email","Email","valid_email|trim");   
          $this->form_validation->set_rules("cust_Address1","Address","required|trim"); 
          $this->form_validation->set_rules("cust_Town","Town","required|trim"); 
          $this->form_validation->set_rules("aspeditticket_Name","Asp","required|callback_aspname_check");
        //   $this->form_validation->set_rules("barcode_Scan","Barcode Scan","required|trim");
        //   $this->form_validation->set_rules("service_Cost","Service Cost","required|trim");
        //   $this->form_validation->set_rules("distance_Travel","Distance Travel","required|trim");  
        
         $email = $this->session->userdata("email");
       
          $data['brands'] = $this->CrmModel->viewBrands();

                
       
          if($this->form_validation->run() == true){

              
              $config['upload_path']          = './assets/images/billcopy/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;
			$this->load->library('upload', $config);

			if($this->upload->do_upload("custbill_Copy"))
			{
			   $data['success']=$this->upload->data();
			   $filename=$data['success']['file_name'];
			   //$this->resizeImage($data['success']['file_name']);
			}
			else
			{
				$filename='';
			}	
            
            //echo $filename; die; 
              
              
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
			
			$close_Ticket = array(
                            "closedticket" => $status
                        );
                        $this->session->set_userdata($close_Ticket);
                        
			if($status)
				{
                $this->db->query("delete from partnotavail_data where ticketId='$id'");
                $complaint_Nat = $this->input->post("productcomplaint_Nature");
                
                if($complaint_Nat == ''){
                    $complaint_Nat = 0;
                }else {
                        $complaint_Nat = $this->input->post("productcomplaint_Nature");
                }
                // if( ($this->input->post("editpartName")) ||($this->input->post("editpartName_two")) ){
                //     $partName = $this->input->post("editpartName");
                // }else {
                //      $partName = $this->input->post("editpartName_two");
                // }
                // $partName = $this->input->post("editpartName");
                // $partName = $this->input->post("editpartName_two");
                
                $caseType = $this->input->post("prodwarranty_Casetype");
            if($caseType == 'Warranty'){
                $partName = $this->input->post("editpartName");
            }else if($caseType == 'Outofwarranty'){
                 $partName = $this->input->post("editpartName_two");
            }
                
               // echo $partName; die; 
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
              $partName = $this->input->post("editpartName");
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
            $this->session->set_flashdata('editticket_report','Successfully closed ticket!!!!');
                //$this->session->set_tempdata("add_success", "Successfully raise ticket!!!", 2);
                redirect(base_url() . "Crm/ticketHistory");
				}
				else
				{
                    echo "Fail"; die; 
				}
              
             
          
        }
        else {
              $this->load->view("crm/editicketview",$data);
          }          
          $this->load->view("footer");
                
                }
    }
    
    public function notifyPart(){
        
          
         
        //$partName = $this->input->post("partName");
        //$aspId = $this->input->post("aspId");
        $partStatus = $this->input->post("partStatus");
         $ticketId = $this->input->post("ticketId");
        $warranty = $this->input->post("type");
                 //print_r($warranty);die;
                 if($warranty == 'Warranty'){
                    $partName = $this->input->post("partName");
                   
                 }elseif($warranty == 'Outofwarranty') {
                    $partName = $this->input->post("partName_two");
                    
                 }
        
        
        
          if($partStatus == "Part Not Available"){
                   //print_r($partName);die;
                    $aspId = $this->input->post("aspeditticket_Name");
                    $this->db->query("UPDATE ticket_generate SET status='Part Pending' WHERE ticket_Id='$ticketId'");
                    $partnotData = array(
                    "aspId" => $aspId,
                    "ticketId" => $this->input->post("ticketId"),
                    "partName" => $partName,
                    "warranty_Type" => $warranty,
                    "notification_Date" => now(),
                  );
              
              $this->db->insert("partnotavail_data",$partnotData);
                    $queryuemail = $this->db->query("select email from users where id='$aspId'");
                    
                                    foreach ($queryuemail->result() as $row)
                                    {
                                       $uemail =  $row->email;
                                       
                                    }
                                     //print_r($uemail);die;
                                    $queryone = $this->db->query("select device_token from device_tokens where username='$uemail'");
                    
                                    foreach ($queryone->result() as $row)
                                    {
                                       $asp_token =  $row->device_token;
                                       
                                    }
                                   $to = $asp_token;          
                                $data = array(
                        'body' => 'This Part is Not Available in your Store. Part name is:  '.$partName,
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
               //redirect(base_url() . "Crm/ticketHistory");
                    
                }
        
    }
    public function aspname_check()
    {
            if ($this->input->post('aspeditticket_Name') == '0')  {
            $this->form_validation->set_message('aspname_check', 'Please assign asp');
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    
    public function ticketviewData(){
        $ticket_id = $this->input->post("ticket_id");
        // echo "select * from asp_product_info_replace_info 
        //                             INNER JOIN ticket_generate ON asp_product_info_replace_info.ticket_id = ticket_generate.ticket_id
								// 	where asp_product_info_replace_info.ticket_id=$ticket_id"; die; 
        $query = $this->db->query("select * from asp_product_info_replace_info 
                                    INNER JOIN ticket_generate ON asp_product_info_replace_info.ticket_id = ticket_generate.ticket_id
									where asp_product_info_replace_info.ticket_id=$ticket_id");
        if ($query->num_rows() > 0)
        {
        $row = $query->row(); 
        $data['status'] = 'ok';
        $data['result'] = $row;
       //echo json_encode($data);
        //echo json_encode(row);
        // echo $row->complaint_overview;
        // echo $row->prod_Remarks;
        }else {
            $data['status'] = 'err';
            //echo "Processing";
        }
        echo json_encode($data);
         
        

    }
    
    public function updateHappycall(){
        $ticket_id = $this->input->post("ticket_Id");
        $calling_Data = $this->input->post("calling_Data");
        $res = $this->db->query("update ticket_generate set happyCalling='$calling_Data' where ticket_Id=$ticket_id");
        if ($this->db->affected_rows()) {
            echo "Thank you for feedback";
        }
    }
    
    public function register_sale(){
       // print_r("wee");die;
		$this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['regsale'] = $this->CrmModel->register_sale();
		//$data['regsale']=$this->AspsModel->register_sale();
		 
		$this->load->view("crm/AspsView",$data);
		$this->load->view("footer");
    }
    
    public function isd(){
        //print_r("wee");die;
		$this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['se']=$this->CrmModel->viewIsd();
		
		$this->load->view("crm/engineers",$data);
		$this->load->view("footer");
    }
    
    
    public function Asptechnician(){
        $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['technicians'] = $this->CrmModel->viewTechnicians();
//        echo "<pre>";
//        print_r($data['technicians']); die; 
        $this->load->view("crm/asptechnicianView",$data);
        $this->load->view("footer");
    }
    
    public function newaspTechnican(){
        $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){
            
            
            
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/asptechnician'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '2048000000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/asptechnician/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                    
                    
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {

//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
                                    $Asp_Name = $filedata[2];
                                    $Area = $filedata[3];
                                    $Technician_Name = $filedata[1];
                                    $Contact = $filedata[4];
                        
                                    if ($c <> 0) {
                            $new_Asptech = array(
                                "asp_name" => $Asp_Name,
                                "area" => $Area,
                                "name_technician" => $Technician_Name,
                                "contact_number" => $Contact
                            );
                                        
                            
                                            $status = $this->CrmModel->addAsptechlist($new_Asptech);    
                                        
                                        
                            
                        
                        }
                        $c = $c + 1;
                        
                       
                    
                    }
                    fclose($file);
                         
                    
                        $this->session->set_tempdata("add_success","ASP Technician List Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add ASP Technician",2);
   			} 
   			// load view 
   			$this->load->view('crm/addasptechnicianView'); 
  		}else{
        $this->load->view("crm/addasptechnicianView");
        }
        $this->load->view("footer");
    }
    
    public function travelExpense(){
        $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['expenses']=$this->CrmModel->viewtravelExpenses();
         $data['asps'] = $this->CrmModel->viewAsp();
//         echo "<pre>";
//         print_r($data['expenses']); die; 
        $this->load->view("crm/travelexpenseView",$data);
        $this->load->view("footer");
    }
    
    public function brandList($brand_Name){
        //$result=$this->db->where("brand",$brand_Name)->get("prod_master")->result();
        
        $result = $this->db->query("select DISTINCT category_Name from skyzenproducts_master where brand_Name='$brand_Name'");
        $res = $result->result();
		echo json_encode($res);
    }
    
    public function productList($category_Name){
        $cat_Name = urldecode($category_Name);
         $result = $this->db->query("select * from skyzenproducts_master where category_Name='$cat_Name'");
        $res = $result->result();
		echo json_encode($res);
    }
    
    public function aspDetail($ticketNo){
        $result = $this->db->query("select * from ticket_generate where ticket_Id='$ticketNo'");
        $aspdetail = $result->row();
        
        $asp_Id = $aspdetail->asp;
        $query1 = $this->db->query("select * from asp where asp_id=$asp_Id");
        $res_asp = $query1->row();  
        $asp_tech = $res_asp->asp_Name;
        
         $query2 = $this->db->query("select * from asp_technicians where asp_name='$asp_tech'");
        $res_asptech = $query2->result();  
        
		echo json_encode(array("ticket"=>$aspdetail,"asp"=>$res_asp,"asptech"=>$res_asptech));
    }
    
    public function addtravelExpense(){
        $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['tickets'] = $this->CrmModel->viewTickets();
        
//        echo "<pre>";
//        print_r($data['tickets']); die;  distance_Calc distance_Asp  calc_Amount      asp_Amount
        if(isset($_POST['travelExpense'])){
            
            $ticket_Id = $this->input->post("ticket_No");
            $asp_Name = $this->input->post("ticket_Asp");
            $category_Name = $this->input->post("ticket_Category");
            $distance = $this->input->post("distance");
            
    $result = $this->db->query("select * from aspspecific_rules where aspspecific_Name='$asp_Name' AND aspallowcategory_Name='$category_Name'");
            
        $res_Rules = $result->row();

        $free =  $res_Rules->aspallow_Free;
        $afterFree = $res_Rules->aspallowrateafter_Free;

        $cal_distance = $distance;

        if(abs($cal_distance) > $free){
        $amt = 100 + (abs($cal_distance) - $free) * $afterFree;

        }else {
        $amt = 100;
        }
            
            
            $updatetravel_Expense = array(
                "service_Engineer"=>$this->input->post("service_Engineer"),
                "barcode"=>$this->input->post("ticket_Barcode"),
                "distance"=>$distance,
                "amt_textbox"=>$amt,
                "tickettravel_Status"=>'Approved',
                "close_Ticket"=>1
            );
//            
//            
            $status=$this->CrmModel->updateTravelexpense($updatetravel_Expense,$ticket_Id);
            if($status==true)
				{
						$this->session->set_tempdata("add_success","Travel Expense added Successfully",2);
						redirect(base_url()."Crm/addtravelExpense");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Travel expense",2);
						redirect(base_url()."Crm/addtravelExpense");
				}
            
            
            
            
        }
        $this->load->view("crm/addtravelexpenseView",$data);
        $this->load->view("footer");
    }
    
    public function updatetravelapproveStatus(){
        $ticket_Id = $this->input->post("ticket_id");
       // echo $ticket_Id;
        $this->db->query("UPDATE ticket_generate SET tickettravel_Status='Approved',close_Ticket=1 WHERE ticket_Id='$ticket_Id'");
        if($this->db->affected_rows()>0){
            echo 'success';
        }else{
           echo "fail";
        }
    }
    
    public function ticketdecline_update(){
         $data = array(
				'tickettravel_Status' => $this->input->post('reasondecline')
				
			);
		$this->CrmModel->ticketdecline(array('ticket_Id' => $this->input->post('ticket_ID')), $data);
        echo json_encode(array("status" => TRUE));
    }
    
    public function engineerDetail($engineer){
        $result = $this->db->query("select * from asp_technicians where id='$engineer'");
        $res = $result->row();
		echo json_encode($res);
    }
    
    public function asporders(){
        $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['orders'] = $this->CrmModel->viewaspOrders();
        // echo "<pre>";
        // print_r($data['orders']); die; 
        $this->load->view("crm/aspordersView",$data);
        $this->load->view("footer");
    }
    
    /* Ticket view */
    
    public function ticketView($ticket_Id){
        $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['ticket'] = $this->CrmModel->viewticketDetail($ticket_Id);
        $data['aspticketinfo'] = $this->CrmModel->viewaspticketInfo($ticket_Id);
        $data['partpendings'] = $this->CrmModel->viewpartPendings($ticket_Id);
        // echo "<pre>";
        // print_r($data['ticket']); 
        // print_r($data['aspticketinfo']); die; 
        $this->load->view("crm/ticketviewDetail",$data);
        $this->load->view("footer");
    }
    
    
    public function asplist(){
        $list = $this->CrmModel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->asp_Name;
            $row[] = $customers->asp_Contact;
            $row[] = $customers->asp_Pincode;
            $row[] = $customers->asp_Area;
            $row[] = $customers->mobile_primary;
            $row[] = $customers->mobile_alternative;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->customers->count_all(),
                        "recordsFiltered" => $this->customers->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    
    public function prodcomplaintDetail($prod_Category){
        $prodcategory = urldecode($prod_Category);
       // echo "select * from product_complaint where product_Category='$prod_Category'"; 
         $result = $this->db->query("select * from product_complaint where product_Category='$prodcategory'");
        $res_complaint = $result->result();
        
		echo json_encode($res_complaint);
    }
    
    public function orderProcess($voucher_No){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['orders'] = $this->CrmModel->viewaspOrder($voucher_No);
        $data['order'] = $this->CrmModel->orderbasic($voucher_No);
        
          $email_Id = $data['order']->order_By; 
        $data['asp'] = $this->CrmModel->aspDetail($email_Id);
        $data_info['asp'] = $this->CrmModel->aspDetail($email_Id);
        
        if(isset($_POST['orderprocess'])){

            for($i=0; $i < count($_POST['prodpart_Name']); $i++ ) {
                
                                $partId= $_POST['prodpart_Id'][$i];
                                $pur['voucher_No'][]=  $_POST['voucher_No'][$i];
                                $pur['asp_Name'][]=  $_POST['asp_Name'][$i];
                                $pur['prodpart_Name'][]=  $_POST['prodpart_Name'][$i];
                                $pur['prodpart_Id'][]=  $_POST['prodpart_Id'][$i];
                                $pur['proddemand_Qty'][]=  $_POST['proddemand_Qty'][$i];
                                $pur['Unit_Rate'][]=  $_POST['Unit_Rate'][$i];
                                $pur['prodnet_Amount'][]=  $_POST['prodnet_Amount'][$i];
                
                
                    
                
                // for($j=$i; $j <= count($_POST['prodpart_Name']); $j++){
                
                        //echo "select good_Quantity from skyzenpart_stock where part_Name='$partId'";
                                    $partName = urldecode($partId);
                
                 $queryone = $this->db->query("select good_Quantity from skyzenpart_stock where part_Name='$partName'");

                                        foreach ($queryone->result() as $row)
                                        {
                                          $good_quantity =  $row->good_Quantity;
                                          
                                        }
                                      
                                        $bal = $good_quantity - $_POST['proddemand_Qty'][$i];
                 $this->db->query("update skyzenpart_stock set good_Quantity='$bal' where part_Name='$partId'");
                
                
                
                
                
                               // }
                    
                
//                                 $query2 = $this->db->query("select * from asp_prod_part_stock where part_Name='$partId'");
//                                
//                                if($query2->num_rows()>0){
//                                        foreach ($query2->result() as $row)
//                                        {
//                                          $prodgood_quantity =  $row->good_Quantity;
//                                          
//                                        }
//                
//                                        $newqty = $prodgood_quantity + $_POST['proddemand_Qty'][$i];
//                                    $this->db->query("update asp_prod_part_stock set good_Quantity='$newqty' where part_Name='$partId'"); 
//                                    
//                                    
//                                }else {
//                                    $addaspStock = array(
//                                            "brand_Name"=>$_POST['brand_Name'][$i],
//                                            "category_Name"=>$_POST['category_Name'][$i],
//                                            "part_Name"=>$_POST['prodpart_Id'][$i],
//                                            "good_Quantity"=>$_POST['proddemand_Qty'][$i],
//                                            "asp_Name" => $_POST['asp_Name'][$i]
//                                        );
//
//                                        $this->db->insert("asp_prod_part_stock",$addaspStock);
//                                    
//                                    
//                                    
//                                }
                                        
                
                                
                
                        
                
                
                        }
                     

                        
                         $status=$this->CrmModel->addaspOrder($pur);
                         
                         $invoice_Ticket = array(
                            "invoice" => $status
                        );
                        $this->session->set_userdata($invoice_Ticket);
              
              
                         
           // echo $status; die; 
                         if($status){
                             
                             
                            $asp_email = $_POST['asp_Name'][0];
            $voucher_no = $_POST['voucher_No'][0];
            $queryone = $this->db->query("select device_token from device_tokens where username='$asp_email'");

                foreach ($queryone->result() as $row)
                {
                   $asp_token =  $row->device_token;
                   
                }
              
              
                //print_r($asp_token);die;
            
                
                
       $to = $asp_token;          
                
     
     $data = array(
    'body' => 'Your Order is Processed with voucher no:  '.$voucher_no,
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
    //print_r(json_decode($result, true));
    //return json_decode($result, true);
               // $this->load->library('email');
        
        //$this->email->from('naveenramlu@gmail.com', 'chary');
       // $this->email->to($asp_email);
        //$this->email->cc('another@another-example.com');
       // $this->email->bcc('them@their-example.com');
        
       // $this->email->subject('Your Order is Placed with voucher no:'.$voucher_no);
       // $this->email->message('Your Order is Placed from Skyzen.Voucher no is '.$voucher_no);
        
       // $this->email->send();
                $subject='Skyzen Order Placed';
        
        $config = Array(       
            'mailtype' => 'html',
             'charset' => 'utf-8',
             'priority' => '1'
        );
        $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
   
        $this->email->from('naveenramlu@gmail.com', 'Skyzen');
        $data = array(
             'dat'=> $pur,
             'asp'    => $data_info['asp']
                 );
        $this->email->to($asp_email); 
    $this->email->subject($subject); 
   
        $body = $this->load->view('crm/aspemail.php',$data,TRUE);
    $this->email->message($body);  
        $this->email->send();
            
            //vgr
                            // $this->session->set_tempdata("upd_succ","Invoice has generated success and sent to distributor!");
                              $this->session->set_flashdata('order_Process','Order received successfully !!!!');
                            //redirect(base_url()."Crm/orderProcess/".$voucher_No);
                              redirect(base_url()."Crm/asporders");
                         }
            
        }else {
             $this->load->view("crm/orderprocessView",$data);
        }
       
        $this->load->view("footer");
    }
    
    public function asporderview($voucherNo){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['order'] = $this->CrmModel->aspordDetail($voucherNo);
        $data['orders'] = $this->CrmModel->asporderDetail($voucherNo);
        $aspEmail = $data['order']->order_By;  
        $query = $this->db->query("select * from users where email='$aspEmail'");
        $aspDetail = $query->row();
        $data['asp_Detail'] = $aspDetail;
        // echo "<pre>";
        // print_r($data['asp_Detail']); die; 
        // echo "<pre>";
        // print_r($data['order']);
        // print_r($data['orders']); die; 
        $this->load->view("crm/asporderinvoiceView",$data);
        $this->load->view("footer");
    }
    
    public function asporderShipment($voucherNo){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['orders'] = $this->CrmModel->aspfinalordDetail($voucherNo);
        $data['order'] = $this->CrmModel->aspfinalorderDetail($voucherNo);
        $data_info['orders'] = $this->CrmModel->aspfinalordDetail($voucherNo);
         //echo "<pre>";
         //print_r($data['orders']); die; 
        $data['orderId'] = $this->CrmModel->asporderId($voucherNo);
        $email_Id = $data['order']->order_By; 
        $data['asp'] = $this->CrmModel->aspDetail($email_Id);
         $data_info['asp'] = $this->CrmModel->aspDetail($email_Id);

        
        if(isset($_POST['shipmentSubmit'])){
            
            
            $date_comp = $this->db->query("select * from asp_shipmentorder ORDER BY shipmentorder_Id DESC");
            $ship_date = $date_comp->row();

            $date1 = date("dmY");
           //echo $date1 = '14082019'; die; 
            if($ship_date){
                $date = substr($ship_date->shipment_Id,5,8);

                 if($date === $date1){
                $date_comp = $this->db->query("select * from asp_shipmentorder ORDER BY shipmentorder_Id DESC");
                $ship_date = $date_comp->row();
                $old_date = substr($ship_date->shipment_Id,5,8);
                $date = substr($ship_date->shipment_Id,-4);

                $new_Dat = str_pad($date + 1, 5, 0, STR_PAD_LEFT);
                $new_Date = "SKYSH".$old_date.$new_Dat;
            }else {
                $new_Date = "SKYSH".$date1.'00001';
            }
            }else {
                 $new_Date = "SKYSH".$date1.'00001';
            }
            
            
//            
//            echo "<pre>";
//            print_r($_POST); die; 
            
            
                     
            
            
            
            
            $shipmentOrder = array(
                        "voucher_Id" => $this->input->post("voucher_Id"),
                        "order_Id" => $this->input->post("order_Id"),
                        "asp_Id" => $this->input->post("asp_Id"),
                        "shipping_Via" => $this->input->post("shipping_Via"),
                        "shipment_Date" => now(),
                        "shipment_Id" => $new_Date,
                        "courier_No" => $this->input->post("courier_No"),
                        "additional_Detail" => $this->input->post("additional_Detail")
                        );
            
            $shipmentOrder = xss_clean($shipmentOrder);
            
            $status = $this->CrmModel->addshipmentOrder($shipmentOrder);  
            $shipment = array(
                    "shipped" => $status
              );
              $this->session->set_userdata($shipment);
            
//               for($i=0; $i < count($_POST['voucherNos']); $i++ ) {
//                                $pur['voucherNos'][]=  $_POST['voucherNos'][$i];
//                        }
            
            
            for($i= 0; $i <count($_POST['voucherNos']); $i++){
            
                            $data = array(
                                'shipment_No' => $new_Date,
                            );

                $where = array('Voucher_No ' => $_POST['voucherNos'][$i]);
                $this->db->where($where);
                $this->db->update('asps_orders ', $data);
            
        }
        
                $shipvouData = array(
                        "shipment_No" => $new_Date,
                        "voucher_Status" => 'Order Shipped'
                    );
                    $where = array('voucher_No ' => $_POST['voucherNos'][0]);
                $this->db->where($where);
                $this->db->update('asporder_vouchers ', $shipvouData);
                
            
            
            
            if($status){
                
                
                 $aspid = $this->input->post("asp_Id");
                $voucher_id = $this->input->post("voucher_Id");
                
              
                $data_info['shipment'] = $this->CrmModel->aspShipmentDetails($voucherNo);

                
                $query = $this->db->query("select email from users where id=$aspid");

                foreach ($query->result() as $row)
                {
                   $asp_email =  $row->email;
                   
                }
                //   echo $aspid;
                
                // print_r($asp_email);die;
                
                $queryone = $this->db->query("select device_token from device_tokens where username='$asp_email'");

                foreach ($queryone->result() as $row)
                {
                   $asp_token =  $row->device_token;
                   
                }
               
              
              
                
                
                
       $to = $asp_token;          
                
     //$to = "caQAZaGw8u8:APA91bFNhcye1_s2y6Fr-dh-wQXHkYtmISIfolMu9QrTTmeE1N8-Z3JjTGRa-NBV4xWXPD_BLhGBJnpr3rCli5ZyyGsWQaNsLn06cxfjEjJ2SDs6PwTzRrszBVzHHSczR-Ku0DA5LU8I";
     $data = array(
    'body' => 'Your Order Shipmented with voucher no '.$voucher_id,
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
    //print_r(json_decode($result, true));
    //return json_decode($result, true);
                         $subject='Order Shipment From Skyzen';
        
        $config = Array(       
            'mailtype' => 'html',
             'charset' => 'utf-8',
             'priority' => '1'
        );
        $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
   
        $this->email->from('naveenramlu@gmail.com', 'Skyzen');
        //$data['order'] =  $data_info['order'];
        $data = array(
            
            'order'=>$data_info['orders'],
            'asp' => $data_info['asp'],
             'shipment' =>  $data_info['shipment'],

             
             'order_Id' => $this->input->post("order_Id"),
                        
                        "shipping_Via" => $this->input->post("shipping_Via"),
                        "shipment_Date" => now(),
                        "shipment_Id" => "SH".$new_Date,
                        "courier_No" => $this->input->post("courier_No"),
             
                 );
        $this->email->to($asp_email); 
    $this->email->subject($subject); 
   
        $body = $this->load->view('crm/aspshipmentemail.php',$data,TRUE);
    //$this->email->message('Your Order Shipment is done from Skyzen'); 
     $this->email->message($body); 
        $this->email->send();
        
              
                //echo "<script>alert('success')</script>";
                //redirect(base_url() . "Crm/raiseTicket");
                $this->session->set_flashdata('shipment_Report','Order shipped Successfull !!!!');
                //redirect(base_url()."Crm/asporderShipment/".$voucherNo);
                redirect(base_url()."Crm/asporders");

                
                
                
                
            }else{
                $this->session->set_flashdata('shipment_Report','Order shipped Successfull !!!!');
                redirect(base_url()."Crm/asporderShipment/".$voucherNo);
            }
            
        }else {
             $this->load->view("crm/aspordershipmentView",$data);
        }
        
       
        $this->load->view("footer");
    }
    
    public function asporderShip($voucherNo){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['asporderproducts'] = $this->CrmModel->asporderProducts($voucherNo);
        $data['shipment'] = $this->CrmModel->shipmentDetail($voucherNo);
        // echo "<pre>";
        // print_r($data['shipment']); die; 
        $asp_Id = $data['shipment']->asp_Id; 
//        echo $asp_Id; die; 
        $data['aspdetail'] = $this->CrmModel->aspbasicDetail($asp_Id);
////        $data['shipdetail'] = $this->CrmModel->shipmentOrder($voucherNo);
//        echo "<pre>";
//        print_r($data['aspdetail']); die; 
        $this->load->view("crm/aspshipmentorderView",$data);
        $this->load->view("footer");        
    }
    
    public function insertcrmAmount(){
        $ticketId = $this->input->post("ticketId");
        $crmAmt = $this->input->post("crmAmt");
        
        //echo "Ticket ID : ".$ticketId; echo "Amount :".$crmAmt; die; 
        $crmamt_Update =  date("d-m-Y");
        $this->db->query("UPDATE ticket_generate SET crm_Amount=$crmAmt, crmapproveamt_Date='$crmamt_Update' WHERE ticket_Id=$ticketId");
        if($this->db->affected_rows()>0){
            echo 'update Success';
        }
       // echo json_encode(array($ticketId,$crmAmt));
        //echo $executive; echo $visitDate;
    }
    
    public function delete_Asp($id){
        $this->db->query("update asp set asp_Status='0' where asp_Id=$id");		
		if($this->db->affected_rows()>0) 
		{
			echo "success";		
		} 
		else
		{
			echo "fail";
		}
    }
    
    public function dailyaspOrders(){
        
       // echo "test";
        $filename = 'ASPOrders_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$aspData = $this->CrmModel->getaspdailyOrders();
        // echo "<pre>";
        // print_r($aspData); die; 
		// file creation
		$file = fopen('php://output', 'w');

// 		$header = array("Asp Name","Voucher","Order Date","Part Name","Quantity","Unit Rate","Net Amount");
        $header = array("Asp","City","Voucher","Order Date","Part Name","Demand Qty","Dispatched Qty","Unit Rate","Net Amount");
		fputcsv($file, $header);

		foreach ($aspData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;   
    }
    
    public function newaspList(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        if ($this->input->post('submit')) {
                 
                $path = 'assets/files/users/';
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
                     
                    $inserdata[$i]['user_role_id'] =7;
                    $inserdata[$i]['userdept_Name'] = $value['B'];
                    $inserdata[$i]['contact_Person'] = $value['C'];
                    $inserdata[$i]['email'] = $value['F'];
                    $inserdata[$i]['password'] = md5('asp');
                    $inserdata[$i]['contact_Number'] = $value['D'];
                    $inserdata[$i]['alternatecontact_Number'] = $value['E'];
                    $inserdata[$i]['address'] = $value['G'];
                    $inserdata[$i]['alternate_Address'] = $value['H'];
                    $inserdata[$i]['user_State'] = $value['I'];
                    $inserdata[$i]['user_City'] = $value['J'];
                    $inserdata[$i]['user_Pincode'] = $value['K'];
                    $inserdata[$i]['user_Latitude'] = $value['L'];
                    $inserdata[$i]['user_Longitutde'] = $value['M'];
                    
                        
                      $i++;
                    }          
                    // echo "<pre>";
                    // print_r($inserdata); die;      
                    $result = $this->CrmModel->addaspDetail($inserdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Asps Added Successfully",2);
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
        // $this->load->view('crm/addaspView');
        $this->load->view("crm/addaspView");
        $this->load->view("footer");
    }
    
    public function custDetails($custMobile){
       // echo $custMobile;
        
          //$data = $this->CrmModel->getaspDetail($id);
        $query = $this->db->query("select * from register_sale where mobile=$custMobile");
        $data = $query->row();
        
        //$town = $data->cust_Town;
        
        $query1 = $this->db->query("select * from ticket_generate where cust_Mobile=$custMobile");
        $data1 = $query1->row();
        
        echo json_encode(array("register_Sale"=>$data,"complaint"=>$data1));
        
        
//        $query1 = $this->db->query("select * from users where user_City='$town' AND user_role_id=7");
//        $data1 = $query1->result();
        //echo $data1;
        //echo $data->cust_Town;
        //echo json_encode(array($data,$data1));
        
        
    }
    
    public function asporderReceive($shipno){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['orders'] = $this->CrmModel->viewasporderHist($shipno);
        $data['order'] = $this->CrmModel->viewshipoderbasic($shipno);
        $data['shipment'] = $this->CrmModel->viewshipmentDetail($shipno);
//        echo "<pre>";
//        print_r($data['shipment']); die; 
        
         $email_Id = $data['order']->order_By; 
        $data['asp'] = $this->CrmModel->aspuserDetail($email_Id);
//                echo "<pre>";
//        print_r($data['asp']); die; 
        
        
        if(isset($_POST['orderReceive'])){
           
            
            
            $config['upload_path']          = './assets/images/courierInvoice/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;
			$this->load->library('upload', $config);

			if($this->upload->do_upload("courierImage"))
			{
			   $data['success']=$this->upload->data();
			   $filename=$data['success']['file_name'];
			   //$this->resizeImage($data['success']['file_name']);
			}
			else
			{
				$filename='';
			}	
            
           // echo $filename; die; 
            
            
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
            
            
            
            for($i=0; $i < count($_POST['shipment_No']); $i++ ) {
                                
                                $partId= $_POST['Part_Name'][$i];
                                $aspName = $_POST['asp_Name'][$i];
                                $pur['shipment_No'][]=  $_POST['shipment_No'][$i];
                                $pur['asp_Name'][]=  $_POST['asp_Name'][$i];
//                                $pur['prodpart_Name'][]=  $_POST['prodpart_Name'][$i];
                                $pur['Part_Name'][]=  $_POST['Part_Name'][$i];
                                $pur['materialreceive_Qty'][]=  $_POST['materialreceive_Qty'][$i];
                                $pur['mrinvoice_No'][] = $new_Date;
//                                $pur['Unit_Rate'][]=  $_POST['Unit_Rate'][$i];
//                                $pur['prodnet_Amount'][]=  $_POST['prodnet_Amount'][$i];
                
                
                    
                         $query2 = $this->db->query("select * from asp_prod_part_stock where part_Name='$partId'");

        if($query2->num_rows()>0){
                foreach ($query2->result() as $row)
                {
                  $prodgood_quantity =  $row->good_Quantity;

                }

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
            
//            echo "<pre>";
//            print_r($pur); die; 
            
          //shipNo  $pur['shipment_No'][0]; 
                     
                
                        
                         $status=$this->CrmModel->addmaterialReceive($pur);
                         
           // echo $status; die; 
                         if($status == true){
                             
                             $addmaterialReceive = array(
                                "mrvoucher_No"=>$new_Date,
                                "shipment_No"=>$pur['shipment_No'][0],
                                "lr_Number" => $this->input->post("lrNumber"),
                                "courierinvoice_Image" => $filename,
                                "asp_Name" => $pur['asp_Name'][0],
                                "mrreceive_Date" => now()
                             );
                             
                             $this->db->insert("materialreceive_vouchers",$addmaterialReceive);
                             $shipNo = $pur['shipment_No'][0];
                             
//                            $query = $this->db->query("select * from asps_orders where shipment_No='$shipNo'");
//                            $res = $query->result();
//                             echo "<pre>";
//                             print_r($res); die; 
                             
                             
                             
            
                             
             
                             
                             
                     //echo "success"; die; 
            
            //vgr
                            // $this->session->set_tempdata("upd_succ","Invoice has generated success and sent to distributor!");
                              $this->session->set_flashdata('partial_order','Partial Order received!!!!');
                            //redirect(base_url()."Crm/orderProcess/".$voucher_No);
                              redirect(base_url()."Crm/asporders");
                         }
            
        }else {
            $this->load->view("crm/asporderreceiveView",$data);
        }
        
        $this->load->view("footer");     
    }
    
    public function asporderbalReceive($mrinvoiceNo){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['mrdetail'] = $this->CrmModel->mrdetail($mrinvoiceNo);
        $data['orders'] = $this->CrmModel->mrreceiveOrders($mrinvoiceNo);
//        $data['order'] = $this->CrmModel->viewmrbasic($mrinvoiceNo);
        $data['courierdetail'] = $this->CrmModel->viewcourierDetail($mrinvoiceNo);
        $asp_Email = $data['orders'][0]->order_By; 
        $data['asp_detail'] = $this->CrmModel->viewmraspDetail($asp_Email);
        
        
        // echo "<pre>";
        // print_r($data['courierdetail']); die; 
        
        if(isset($_POST['aspbalordersubmit'])){
//            echo "<pre>";
//            print_r($_POST); die; 
            
            for($i=0; $i < count($_POST['mrinvoice_No']); $i++ ) {
                
                                $partId= $_POST['part_Name'][$i];
                                $aspName = $_POST['asp_Name'][$i];
                                $pur['part_Name'][] = $_POST['part_Name'][$i];
                                $pur['mrinvoice_No'][]=  $_POST['mrinvoice_No'][$i];
                                $pur['matrecieve_Qty'][]=  $_POST['matrecieve_Qty'][$i];
//                                $pur['prodnet_Amount'][]=  $_POST['prodnet_Amount'][$i];
                
                
                
                
                
                $query2 = $this->db->query("select * from asp_prod_part_stock where part_Name='$partId'");

        
                foreach ($query2->result() as $row)
                {
                  $prodgood_quantity =  $row->good_Quantity;

                }

                $newqty = $prodgood_quantity + $_POST['matrecieve_Qty'][$i];
            
            $this->db->query("update asp_prod_part_stock set good_Quantity='$newqty' where part_Name='$partId' AND asp_Name='$aspName'"); 


                
                
                
                        }
            
//            echo "<pre>";
//            print_r($pur); die; 
            
          //shipNo  $pur['shipment_No'][0]; 
                     
                
                        
                         $status=$this->CrmModel->addbalmaterialReceive($pur);
            
            
                if($status == true){   
                     $this->session->set_flashdata('order_receive','Successfully order received!!!!');
                            //redirect(base_url()."Crm/orderProcess/".$voucher_No);
                              redirect(base_url()."Crm/asporders");
                    }else {
                    echo "Fail"; die; 
                }
        }
        $this->load->view("crm/asporderbalreceiveView",$data);
        $this->load->view("footer");
    }
    
    public function aspmatreceiveorder($mrinvoice){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['orders'] = $this->CrmModel->viewmatrecOrders($mrinvoice);
//        foreach($data['orders'] as $row){
//            $shipNo = $data['orders']->shipment_No;
//        }
       $shipNo = $data['orders'][0]->shipment_No; 
        $data['shipdetail'] = $this->CrmModel->viewshipDetail($shipNo);
        $mrNo = $data['orders'][0]->mrinvoice_No; 
        $data['courierdetail'] = $this->CrmModel->viewcourierDetail($mrNo);
        $asp_Email = $data['orders'][0]->order_By; 
        $data['asp_detail'] = $this->CrmModel->viewmraspDetail($asp_Email);
        //echo $shipNo; die; 
//        echo "<pre>";
//        print_r($data['asp_detail']); die; 
        $this->load->view("crm/aspmatreceiveorderView",$data);
        $this->load->view("footer");
    }
    
    public function aspnameExist(){
         $asp_Name=$this->input->post("asp_Name");
        //echo $asp_Name; die; 
		$result=$this->db->query("select * from users where userdept_Name='$asp_Name'");
		if($result->num_rows()>0)
		{
			echo json_encode("Asp Name Already entered"); 
		}
		else
		{
			echo "true"; 
		}
    }
    
    
    public function partcostdetail(){
        $partName = $this->input->post("partName");
        $asp_Id = $this->input->post("aspId");
        
        
            $query = $this->db->query("select * from users where userdept_Name='$asp_Id'");
            $res = $query->row();
            $aspEmail = $res->email;
        //echo "select * from asp_prod_part_stock where asp_Name='$aspEmail' AND part_Name='$partName'"; 
            $query1 = $this->db->query("select * from asp_prod_part_stock where asp_Name='$aspEmail' AND part_Name='$partName'");
            $res1 = $query1->row();
            if($query1->num_rows()>0){
                $partaspstockName = $res1->part_Name;
                
                $query2 =$this->db->query("select * from skyzenpart_master where part_Name='$partaspstockName'");
                $res2 = $query2->row();
                $partRate = $res2->partunit_Rate;
                echo json_encode($partRate);
                
            }else {
                 echo json_encode('Part Not Available');
            }
          // echo $partAvailabel; die; 
//            $data['part'] =  $partAvailabel;  
//           
//           $data['part_Cost'] = $this->CrmModel->viewproductCost($prodModel);
        
        
        
       
    }
    
    public function asptechDetail($id){
             $query = $this->db->query("select * from users where id=$id");
            $res = $query->row();
            
            $deptsName = $res->userdept_Name;
            
            $query1 = $this->db->query("select * from users where usersdept_Name='$deptsName' AND user_role_id=8");
            $res1 = $query1->result();
            echo json_encode(array("technician"=>$res1,"asp"=>$res));
    }
    
    public function techDetail($id){
        $query = $this->db->query("select * from users where id=$id");
            $res = $query->row();
            
           
            echo json_encode($res);
    }
    
    public function mrorderShip($mrNo){
       $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
         $data['asporderproducts'] = $this->CrmModel->asporderreceiveProducts($mrNo);
       $query = $this->db->query("select * from materialreceive_vouchers where mrvoucher_No='$mrNo'");
        $result = $query->row();
        $shipId = $result->shipment_No;
        
        
        $data['mrdetail'] = $result;
        
        $data['shipmentDetail'] = $this->CrmModel->mrshipmentDetail($shipId);
        
        $aspId = $data['shipmentDetail']->asp_Id;
        
        $query1 = $this->db->query("select * from users where id=$aspId");
        $result1 = $query1->row();
        
        $data['aspDetail'] = $result1;
//        echo "<pre>";
//        print_r($data['mrdetail']); 
//        print_r($data['shipmentDetail']);
//        print_r($data['aspDetail'] ); die;
//         $data['shipment'] = $this->CrmModel->shipmentmrDetail($mrNo);
//         // echo "<pre>";
//         // print_r($data['shipment']); die; 
//         $asp_Id = $data['shipment']->asp_Id; 
// //        echo $asp_Id; die; 
//         $data['aspdetail'] = $this->CrmModel->aspbasicDetail($asp_Id);
//        $data['shipdetail'] = $this->CrmModel->shipmentOrder($voucherNo);
//        echo "<pre>";
//        print_r($data['asporderproducts']); die; 
        $this->load->view("crm/mrorderView",$data);
        $this->load->view("footer"); 
    }
    
    //asp changes
    public function aspstatecodeDetail($id){
         $query = $this->db->query("select * from users where id=$id");
        $data = $query->result();
        echo json_encode($data);
    }
    
    public function aspPayment(){
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("sidebar");
          $data['asps'] = $this->CrmModel->viewaspList();
         //$data['orders'] = $this->CrmModel->viewasppmtOrder();
         $data['payments'] = $this->CrmModel->viewaspPayment();
        // echo "<pre>";
        // print_r($data['payments']); die; 
         $this->load->view("crm/asppaymentView",$data);
         $this->load->view("footer");
    }
    
    public function aspBillings(){
        
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("sidebar");
         $from_date = $this->input->post("fromDate");
         $to_date = $this->input->post("toDate");
         $asp_name = $this->input->post("asp_name");
         
         $newfromDate = date("m/d/Y", strtotime($from_date));
         $newtoDate = date("m/d/Y", strtotime($to_date));
         $data['billings'] = $this->CrmModel->aspBillings();
        //  echo "<pre>";
        //  print_r($data['billings']); die; 
        $data['asps'] = $this->CrmModel->viewDealerList();
         $this->load->view("crm/aspBillingsView",$data);
         $this->load->view("footer");
    }
    
    public function dealerSales(){
        
        
        $list = $this->dealerSale->get_datatables();
//         echo "<pre>";
//         print_r($list); die; 
        
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $sales) {
            $no++;
            $row = array();
            //$row[]= $customers->status;
            
            $bill_invoice = $sales->invoice_number;
                        
                        

            $row[] = $no;
            $row[]= $sales->bill_date;
            
           // SpDetails(\''.$app_id.'\',\''.$app_details->app_name.'\');  \''.$app_id.'\'
//             $row[]="<a onclick='invoiceProd($sales->invoice_number)' href='javascript:void(0)'>$sales->invoice_number</a>";
            
            $row[] = '<a onclick="invoiceProd(\''.$sales->invoice_number.'\')">'.$sales->invoice_number.'</a>';
            $row[] = $sales->party_name;
            $row[] = $sales->town;
            $row[] = $sales->amount;
             
            $row[] = $sales->pending_Amt;
            $row[] = $sales->credit_period;
            $row[] = $sales->due_date;
            $row[] = $sales->aeigins;
            
           
            
            
          
            
          
            
            // $row[] = $tickets->distance;
                                                              

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->ticket->count_all(),
                        "recordsFiltered" => $this->ticket->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
        
        
    
    }
    
     public function aspBillingsfilter(){
      
        // echo $json;
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("sidebar");
         $from_date = $this->input->post("fromDate");
         $to_date = $this->input->post("toDate");
         $asp_name = $this->input->post("asp_name");
         
         $newfromDate = date("m/d/Y", strtotime($from_date));
         $newtoDate = date("m/d/Y", strtotime($to_date));
         
         if($newtoDate != null){
             //print_r("fgfg");die;
              $data['billings'] = $this->CrmModel->aspBillingsDates($newfromDate,$newtoDate);
              //echo "<pre>";
              //print_r($data['billings']);die;
         }elseif($to_date != null && $asp_name != null){
             $data['billings'] = $this->CrmModel->aspBillingsDateAsp($newfromDate,$newtoDate,$asp_name);
         }elseif($asp_name != null){
             $data['billings'] = $this->CrmModel->aspBillingsAsp($asp_name);
         }
         
        $data['asps'] = $this->CrmModel->viewDealerList();
         $this->load->view("crm/aspBillingsView",$data);
         $this->load->view("footer");
    }
     public function csv_data(){
        if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
			$c = 0;//
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
			$bill_date = $filesop[1];
			$invoice_number = $filesop[2];
			$party_name = $filesop[4];
			$town = $filesop[5];
			$sales_account = $filesop[6];       
            $other_account = $filesop[7];
            $product = $filesop[8];
            $uom = $filesop[9];
			$quantity = $filesop[10];
			$unit_rate = $filesop[11];
			$gross_amt = $filesop[12];
			$discount = $filesop[13];       
            $gross_minus_discount = $filesop[14];
            $cgst = $filesop[15];
            $sgst = $filesop[16];
			$igst = $filesop[17];
			$gst_amt = $filesop[18];
			$amountt = $filesop[19];
			$division = $filesop[20]; 
			$due_date = $filesop[21];   
			$pending_Amt = $filesop[22];
			$aeigins = $filesop[23];
			$credit_period = $filesop[24];
			$above_due_days = $filesop[25];
			$cur_date = $filesop[26];
			$newcur_Date = strtotime($cur_date);
			$current_date = date('m-d-Y',$newcur_Date);
			if($c<>0){	
			    $amount = str_replace( ',', '', $amountt );
				    $today = date('m/d/Y');
                    $date1 = strtotime($bill_date);
                    $date2 = strtotime($due_date);
                    $date3 = strtotime($current_date);
                    $datediff = $date2 - $date3;
                    $overdue_cal =  round($datediff / (60 * 60 * 24));
                    if($aeigins < 30 || $aeigins == 30){
                           $less_equal_thirty = $pending_Amt;
                           $greater_thirty_less_forty_five = "";
                           $greater_fortyfive_less_forty_sixty = "";
                           $greater_sixty_less_forty_ninty = "";
                           $gninty = "";
                       }elseif($aeigins > 30 || $aeigins == 45){
                            $less_equal_thirty = "";
                           $greater_thirty_less_forty_five = $pending_Amt;
                           $greater_fortyfive_less_forty_sixty = "";
                           $greater_sixty_less_forty_ninty = "";
                           $gninty = "";
                       }elseif($aeigins > 45 || $aeigins == 60){
                            $less_equal_thirty = $pending_Amt;
                           $greater_thirty_less_forty_five = "";
                           $greater_fortyfive_less_forty_sixty = $pending_Amt;
                           $greater_sixty_less_forty_ninty = "";
                           $gninty = "";
                       }elseif($aeigins > 60 || $aeigins == 90){
                            $less_equal_thirty = "";
                           $greater_thirty_less_forty_five = "";
                           $greater_fortyfive_less_forty_sixty = "";
                           $greater_sixty_less_forty_ninty = $pending_Amt;
                           $gninty = "";
                       }elseif($aeigins > 90){
                            $less_equal_thirty = "";
                           $greater_thirty_less_forty_five = "";
                           $greater_fortyfive_less_forty_sixty = "";
                           $greater_sixty_less_forty_ninty = "";
                           $gninty = $pending_Amt;
                       }
                      $this->CrmModel->file_to_store_billings($bill_date,$invoice_number,$party_name,$town,$sales_account,$other_account,$product,$uom,$quantity,$unit_rate,$gross_amt,$discount,$gross_minus_discount,$cgst,$sgst,$igst,$gst_amt,$amount,$division,$due_date,$credit_period,$above_due_days,$aeigins,$pending_Amt,$less_equal_thirty,$greater_thirty_less_forty_five,$greater_fortyfive_less_forty_sixty,$greater_sixty_less_forty_ninty,$gninty,$current_date,$overdue_cal);
		         
		         
		         
		         
		         
		         
		         
		         
		         
		         //vgr
        		           
    //     		        $query = $this->db->query("select email from users where userdept_Name='$party_name'");
    //                     foreach ($query->result() as $row)
    //                     {
    //                       $dealer_email =  $row->email;
    //                     }
    //                     $queryone = $this->db->query("select device_token from device_tokens where username='$dealer_email'");
    //                     foreach ($queryone->result() as $row)
    //                     {
    //                       $dealer_token =  $row->device_token;
    //                     }
    //                   $to = $dealer_token;          
    //          //$to = "caQAZaGw8u8:APA91bFNhcye1_s2y6Fr-dh-wQXHkYtmISIfolMu9QrTTmeE1N8-Z3JjTGRa-NBV4xWXPD_BLhGBJnpr3rCli5ZyyGsWQaNsLn06cxfjEjJ2SDs6PwTzRrszBVzHHSczR-Ku0DA5LU8I";
    //         $data = array(
    //         'body' => 'Bill Date      '.$bill_date.'Invoice Number  '.$invoice_number.'Amount  '.$amount.'Due Date'.$due_date,
            
    //         );
    //         $apiKey = 'AIzaSyBSONGZUkVOxT62WI8okWR9hZAE0bNXEHM';
    //         $fields = array( 'to' => $to, 'notification' => $data);
        
    //         $headers = array( 'Authorization: key='.$apiKey, 'Content-Type: application/json');
        
    //         $url = 'https://fcm.googleapis.com/fcm/send';
        
    //         $ch = curl_init();
    //         curl_setopt( $ch, CURLOPT_URL, $url);
    //         curl_setopt( $ch, CURLOPT_POST, true);
    //         curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    //         curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
    //         curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);
    //         curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($fields));
    //         $result = curl_exec($ch);
    //         curl_close($ch);

		  //         $to = $dealer_email;
				// 		$subject = "Skyzen Billing";
				// 		$txt = "Skyzen Billing";
				// 		$headers = "From: Skyzen Billing" . "\r\n" .
				// 		"CC: skyzen@skyzen.com";
				// 		mail($to,$subject,$txt,$headers);
		           
			    
			    //vgr
			}
                $c = $c + 1;
            }
			$this->aspBillings();
		}

	}
    public function billing(){
        if(isset($_POST["submit"]))
		{ 
		    
		    //$this->db->truncate('crm_billings_new');
		    $this->db->truncate('crm_billings_new');
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
			$c = 0;//
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
			 //   echo "<pre>";
			 //   print_r($filesop); die; 
            $bill_date = $filesop[1];
            $invoice_number = $filesop[2];
            $party_name = $filesop[5];
            $town = $filesop[6];
            $amountt = $filesop[7];
            $pending_amtt = $filesop[8];
            $division = $filesop[9];
            $aeigins = $filesop[10];
            $credit_period = $filesop[11];
            $due_date = $filesop[12];
            $above_due_days = $filesop[13];
            $current_date = $filesop[15];
            
            $dueDate = strtotime($due_date);
            $due_date = date('d-m-Y', $dueDate);
            
            $currentdate = strtotime($current_date);
            $current_date = date('d-m-Y', $currentdate);
                
                
			if($c<>0){	
			    $amount = str_replace( ',', '', $amountt );
			    $pending_Amt = str_replace( ',', '', $pending_amtt );
				    $today = date('m/d/Y');
                    $date1 = strtotime($bill_date);
                    $date2 = strtotime($due_date);
                    $date3 = strtotime($current_date);
                    $datediff = strtotime($due_date) - strtotime($current_date);
                    $overdue_cal =  round($datediff / (60 * 60 * 24));
                    if($aeigins < 30 || $aeigins == 30){
                           $less_equal_thirty = $pending_Amt;
                           $greater_thirty_less_forty_five = "";
                           $greater_fortyfive_less_forty_sixty = "";
                           $greater_sixty_less_forty_ninty = "";
                           $gninty = "";
                       }elseif($aeigins > 30 || $aeigins == 45){
                            $less_equal_thirty = "";
                           $greater_thirty_less_forty_five = $pending_Amt;
                           $greater_fortyfive_less_forty_sixty = "";
                           $greater_sixty_less_forty_ninty = "";
                           $gninty = "";
                       }elseif($aeigins > 45 || $aeigins == 60){
                            $less_equal_thirty = $pending_Amt;
                           $greater_thirty_less_forty_five = "";
                           $greater_fortyfive_less_forty_sixty = $pending_Amt;
                           $greater_sixty_less_forty_ninty = "";
                           $gninty = "";
                       }elseif($aeigins > 60 || $aeigins == 90){
                            $less_equal_thirty = "";
                           $greater_thirty_less_forty_five = "";
                           $greater_fortyfive_less_forty_sixty = "";
                           $greater_sixty_less_forty_ninty = $pending_Amt;
                           $gninty = "";
                       }elseif($aeigins > 90){
                            $less_equal_thirty = "";
                           $greater_thirty_less_forty_five = "";
                           $greater_fortyfive_less_forty_sixty = "";
                           $greater_sixty_less_forty_ninty = "";
                           $gninty = $pending_Amt;
                       }
                      $this->CrmModel->store_billings($bill_date,$invoice_number,$party_name,$town,$amount,$pending_Amt,$division,$aeigins,$credit_period,$due_date,$above_due_days,$less_equal_thirty,$greater_thirty_less_forty_five,$greater_fortyfive_less_forty_sixty,$greater_sixty_less_forty_ninty,$gninty,$current_date,$overdue_cal);
		         
			}
                $c = $c + 1;
            }
			$this->aspBillings();
		}

	}
	public function products(){
        if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
			$c = 0;//
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
			 //   echo "<pre>";
			 //   print_r($filesop); die; 
			$bill_date = $filesop[1];
			$invoice_number = $filesop[2];
			$party_name = $filesop[4];
			$sales_account = $filesop[5];
		$other_account = $filesop[6];
		$product = $filesop[7];
		$uom = $filesop[8];
		$quantity = $filesop[9];
		$unit_rate = $filesop[10];
		$amountt = $filesop[11];
		$discount = $filesop[12];
		$gross_minus_discount = $filesop[13];
		$cgst = $filesop[14];
		$sgst = $filesop[15];
		$igst = $filesop[16];
		$gst_amt = $filesop[17];
		$net_amt = $filesop[18];
		$division = $filesop[19];
		
		 //vgr
// 		$invoice_number = "SI-SCH 4";
 		  $data['billings_data'] = $this->CrmModel->getBillingData($invoice_number);
// 		  echo "<pre>";
// 		print_r($data['billings_data']);die;
               
		              // if($data['billings_data'][0]->invoice_number != null){
		              // //$data['billings_data'][0]->bill_date;
		              // //$data['billings_data'][0]->invoice_number;
		              //// $data['billings_data'][0]->party_name;
		              // $town = $data['billings_data'][0]->town;
                //       ////llings_data'][0]->amount;
		              //$data['billings_data'][0]->pending_Amt;
		              // //$data['billings_data'][0]->division;
		              // $aeigins = $data['billings_data'][0]->aeigins;
		              // $credit_period = $data['billings_data'][0]->credit_period;
		              // $due_date = $data['billings_data'][0]->due_date;
		              // $above_due_days = $data['billings_data'][0]->above_due_days;
		              // $less_equal_thirty = $data['billings_data'][0]->less_equal_thirty;
		               
		              //  $greater_thirty_less_forty_five = $data['billings_data'][0]->greater_thirty_less_forty_five;
		              // $greater_fortyfive_less_forty_sixty = $data['billings_data'][0]->greater_fortyfive_less_forty_sixty;
		              // $greater_sixty_less_forty_ninty = $data['billings_data'][0]->greater_sixty_less_forty_ninty;
		              // $gninty = $data['billings_data'][0]->gninty;
		              // $current_date = $data['billings_data'][0]->cur_date;
		              // $overdue_cal = $data['billings_data'][0]->overdue_ca;
		               
		              // }else{
		                   
		               //$data['billings_data'][0]->bill_date;
		               //$data['billings_data'][0]->invoice_number;
		              // $data['billings_data'][0]->party_name;
		               $town = $data['billings_data'][0]->town;
                       ////llings_data'][0]->amount;
		                    $data['billings_data'][0]->pending_Amt;
		               //$data['billings_data'][0]->division;
		               $aeigins = $data['billings_data'][0]->aeigins;
		               $credit_period = $data['billings_data'][0]->credit_period;
		               $due_date = $data['billings_data'][0]->due_date;
		               $above_due_days = $data['billings_data'][0]->above_due_days;
		               $less_equal_thirty = $data['billings_data'][0]->less_equal_thirty;
		               
		                $greater_thirty_less_forty_five = $data['billings_data'][0]->greater_thirty_less_forty_five;
		               $greater_fortyfive_less_forty_sixty = $data['billings_data'][0]->greater_fortyfive_less_forty_sixty;
		               $greater_sixty_less_forty_ninty = $data['billings_data'][0]->greater_sixty_less_forty_ninty;
		               $gninty = $data['billings_data'][0]->gninty;
		               $current_date = $data['billings_data'][0]->cur_date;
		               $overdue_cal = $data['billings_data'][0]->overdue_ca;
		              // }
		               
		
                // 		if($invoice_number == $in){
                // 		                   $pending_Amt = 0;
                // 		               }else{
                // 		                    $pending_Amt = $data['billings_data'][0]->pending_Amt;
                // 		               }
                		
		
		 //vgr
		
			if($c<>0){	
			    $amount = str_replace( ',', '', $net_amt );
			    $this->CrmModel->file_to_store_billings($bill_date,$invoice_number,$party_name,$town,$sales_account,$other_account,$product,$uom,$quantity,$unit_rate,$gross_amt,$discount,$gross_minus_discount,$cgst,$sgst,$igst,$gst_amt,$amount,$division,$due_date,$credit_period,$above_due_days,$aeigins,$pending_Amt,$less_equal_thirty,$greater_thirty_less_forty_five,$greater_fortyfive_less_forty_sixty,$greater_sixty_less_forty_ninty,$gninty,$current_date,$overdue_cal);
			     //$this->CrmModel->store_billings_products($bill_date,$invoice_number,$party_name,$sales_acc,$other_acc,$product,$uom,$qty,$unit_rate,$amount,$discount,$gross_minus_discount,$cgst,$sgst,$igst,$gst_amt,$net_amt,$division);
		         
			}
                $c = $c + 1;
                $in = $invoice_number;
            }
			$this->aspBillings();
		}

	}
   public function ticketCSV(){
        $filename = 'ticket.csv';
		
		
		$ticketData = $this->CrmModel->ticketcsvData();
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
    
    
public function invoiceGenerate(){
        
        $fromDate = $this->input->post("invfromDate"); 
       $to_Date = $this->input->post("invtoDate");    
        
        $newfromDate = strtotime($fromDate);
        $newfrom_Date = date('d-m-Y', $newfromDate);
        
        
        $newtoDate = strtotime($to_Date);
        $newto_Date = date('d-m-Y', $newtoDate); 
        
        $aspId = $this->input->post("asp_Name"); 
         
        $result1 = $this->db->query("select * from `ticket_generate` 
        INNER JOIN asp_product_info_replace_info ON asp_product_info_replace_info.ticket_id=ticket_generate.ticket_Id
        where ticket_Closedate between '$newfrom_Date' and '$newto_Date' AND asp=$aspId");
   
        $res1 = $result1->result();
        $ticketSum = 0;
        foreach($res1 as $re){
             $ticketSum += $re->amt_textbox + $re->service_engineer_fee + (int)$re->crm_Amount + (int)$re->total_cost; 
        }
        
        $query = $this->db->query("select * from users where id=$aspId");
        $res = $query->row();
        
        $aspemail = $res->email; 
          $newaspfromDate = strtotime($fromDate);
        $newaspfromDate = date('m-d-Y', $newaspfromDate);
        
        
        $newasptoDate = strtotime($to_Date);
        $newasptoDate = date('m-d-Y', $newasptoDate);
        
        $this->db->where('orderplaced_Date >=', $newaspfromDate);
        $this->db->where('orderplaced_Date <=', $newasptoDate);
        $this->db->where('order_By', $aspemail);
        $result2= $this->db->get('asps_orders');
        $res2 = $result2->result();
        $sumtotal_Rate = 0;
        foreach($res2 as $result){
          $total_Rate = $result->delivered_Qty * $result->Unit_Rate; 
            $sumtotal_Rate += $total_Rate;
        }
        $totalaspAmount = $sumtotal_Rate + $ticketSum;
        
        
        $date_comp = $this->db->query("select * from asp_Payment ORDER BY id DESC");
            $pay_date = $date_comp->row();

            $date1 = date("dmY");
           //echo $date1 = '14082019'; die; 
            if($pay_date){
                $date = substr($pay_date->payment_Id,8,8);
                
                 if($date === $date1){
                $date_comp = $this->db->query("select * from asp_Payment ORDER BY id DESC");
                $ship_date = $date_comp->row();
                $old_date = substr($pay_date->payment_Id,8,8);
                $date = substr($pay_date->payment_Id,-5);

                $new_Dat = str_pad($date + 1, 5, 0, STR_PAD_LEFT);
                $new_Date = "SKYCSINV".$old_date.$new_Dat;
            }else {
                $new_Date = "SKYCSINV".$date1.'00001';
            }
            }else {
                 $new_Date = "SKYCSINV".$date1.'00001';
            }
            // echo $pay_date->payment_Id; echo "<br>";
            // echo $date1; echo "<br>";
            // echo $date; echo "<br>";
            //     echo $date; die;
            
            $newasp_Payment = array(
                "payment_Id" => $new_Date,
                "from_Date" => $newfrom_Date,
                "to_Date" => $newto_Date,
                "asp_Id" => $aspId,
                "pay_Amount" => $totalaspAmount,
                "paymentgen_Date" => now(),
                );
                
                $newasp_Payment = xss_clean($newasp_Payment);
                
                $status = $this->db->insert("asp_Payment",$newasp_Payment);
                 $insert_id = $this->db->insert_id(); 
    
            $query = $this->db->query("select * from asp_Payment where id=$insert_id");
            $res = $query->row();
            $asp_Id = $res->asp_Id;
    
            $query1 = $this->db->query("select * from users where id=$asp_Id");
            $res1 = $query1->row();
            $asp_Name = $res1->userdept_Name;
    
                $aspname_pay = array(
                    "AspName" => $asp_Name
              );
              $this->session->set_userdata($aspname_pay);
    
    
                if($status){
                    $this->session->set_flashdata('invoice_Pay','Successfully generated Invoice!!!!');
                            //redirect(base_url()."Crm/orderProcess/".$voucher_No);
                              redirect(base_url()."Crm/aspPayment");
                   // echo "Success"; die;
                }else {
                    echo "Fail"; die; 
                }
        
    }
    
    public function delete_invoice($id){
        $this->db->query("update asp_Payment set status='0' where payment_Id='$id'");		
		if($this->db->affected_rows()>0) 
		{
			echo "success";		
		} 
		else
		{
			echo "fail";
		}
    }
    
     public function viewInvoice($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['invoice'] = $this->CrmModel->viewInvoicedata($id);
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
        
        $this->load->view("crm/invoiceView",$data);
        $this->load->view("footer");
    }
    
     public function travelexpesneslist(){
        
        $list = $this->travel->get_datatables();
        // echo "<pre>";
        // print_r($list); die; 
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $tickets) {
            $no++;
            $row = array();
            //$row[]= $customers->status;
            $row[]= $tickets->ticket_Id;
            $row[]= $tickets->asp_Name;
            $row[] = $tickets->cust_Town;
            $row[] = $tickets->prod_Category;
            $row[] = $tickets->barcode;
             
            $row[] = $tickets->calulatedDistance;
            $row[] = $tickets->amt_lati_longi;
            $row[] = $tickets->distance;
            
            $serviceFee = '';
            $query = $this->db->query("select * from asp_product_info_replace_info where ticket_id=$tickets->ticket_Id");   
            if($query->num_rows()>0){
            $res = $query->row();
            $serviceFee = $res->service_engineer_fee;
            if($serviceFee){
            $serviceFee = $serviceFee;
            }else {
            $serviceFee = 0;
            }
            }
            $amt = $tickets->amt_textbox;
             $res_Cost = ((int)$serviceFee + (int)$amt);
            
            $row[] = $res_Cost;
            
            
            if($tickets->crm_Amount){
            $row[] = "<input type='text' class='form-control crmupdate_Amt' name='crmupdate_Amount' id='crmupdate_Amount'           value='$tickets->crm_Amount' readonly='readonly'>";
              
           }else {
            $row[] = "<input type='text' name='crm_Amount' id='crm_Amount' class='form-control crm_Amt'>";
           }
            
            
            if($tickets->crm_Amount){
               $row[] = "     <button id='' class='btn btn-success crmedit_Btn'>Edit</button>
                    <button id='' class='btn btn-success crmupdate_Btn' value='$tickets->ticket_Id' style='display:none;'>Update</button>";
                   }else {
                 $row[] = " <button id='' class='btn btn-success crmamt_Btn' value='$tickets->ticket_Id' disabled><i class='fas fa-check' aria-hidden='true'></i> </button>";
                                                           }
            
            
            
            // $row[] = $tickets->distance;
                                                              

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->ticket->count_all(),
                        "recordsFiltered" => $this->ticket->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }
   
   public function billingPayment(){
       $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['billpays'] = $this->CrmModel->billPayments();
        // echo "<pre>";
        // print_r($data['billpays']); die; 
        $this->load->view("crm/billpaymentView",$data);
        $this->load->view("footer");
   }
   
   public function chequeTrack(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['cheques'] = $this->CrmModel->viewCheques();
        // echo "<pre>";
        // print_r($data['cheques']); die; 
        $this->load->view("crm/chequetrackView",$data);
        $this->load->view("footer");
   }
    
    public function chequePay($id){
        $this->db->query("update scheme_assign_to_retailer_cheques set status='Paid' where cheque_number=$id");		
		if($this->db->affected_rows()>0) 
		{
			echo "success";		
		} 
		else
		{
			echo "fail";
		}
    }
    
    public function receiveCheque(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['cheques'] = $this->CrmModel->viewrecieveCheques();

        $this->load->view("crm/receivechqView",$data);
        $this->load->view("footer");
    }
    
    public function intransistCheque(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['cheques'] = $this->CrmModel->viewintransitCheques();
//                echo "<pre>";
//        print_r($data['cheques']); die; 
        $this->load->view("crm/intransistchqView",$data);
        $this->load->view("footer");
    }
    
    public function chqintransitDetail($id){
        $query = $this->db->query("select * from scheme_assign_to_retailer_cheques where cheque_number=$id");
        $data = $query->result();
        
        //$town = $data->cust_Town;
        
        echo json_encode($data);
    }
    
    public function chqintransit_update(){
        $data = array(
				        'received_by' => $this->input->post('receive_By'),
				        'cheque_stage' => 'Receive',
                        'cheque_recieved_date' => now()
                     );

		//$this->CrmModel->asp_update(array('cheque_number' => $this->input->post('chequeNumber')), $data);
        $this->CrmModel->cheque_update(array('cheque_number' => $this->input->post('chequeNumber')), $data);
        echo json_encode(array("status" => TRUE));
    }
    
    public function chqrecvDetail($id){
        $query = $this->db->query("select * from scheme_assign_to_retailer_cheques where cheque_number=$id");
        $data = $query->result();
        
        //$town = $data->cust_Town;
        
        echo json_encode($data);
    }
    
    public function chqreceive_update(){
        $data = array(
				        'cheque_stage' => 'Paid',
                        'chequepaid_date' => now()
                     );

		//$this->CrmModel->asp_update(array('cheque_number' => $this->input->post('chequeNumber')), $data);
        $this->CrmModel->chequepaid_update(array('cheque_number' => $this->input->post('cheque_No')), $data);
        echo json_encode(array("status" => TRUE));
        
    }
    
}
?>