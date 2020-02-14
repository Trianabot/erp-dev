<?php

class Crm_Dashboard extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","date","string","security"));
        $this->load->library(array("form_validation","session"));
        $this->load->model("Crm/CrmModel");
        $this->load->database();
    }
    
    public function index(){        
        $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
        $this->load->view("crmdashboard/crmdashboardView");
    }
    
    
    public function raiseTicket() {
          $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
          $this->form_validation->set_rules("prod_Datepurchase","Date","required|trim");
          $this->form_validation->set_rules("cust_Mobile","Mobile","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
          $this->form_validation->set_rules("cust_Altmobile","A;termate Mobile","numeric|regex_match[/^[0-9]{10}$/]|trim");          
          $this->form_validation->set_rules("cust_Name","Customer Name","required|trim|xss_clean|callback_alpha_dash_space");   
          $this->form_validation->set_rules("cust_Email","Email","valid_email|trim");   
          $this->form_validation->set_rules("cust_Address1","Address","required|trim"); 
          $this->form_validation->set_rules("cust_Town","Town","required|trim"); 
          
          $data['products'] = $this->CrmModel->viewProducts();
          
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
              
              $raise_Ticket = array(
                   "ticket_Id" => $new_Date,
                  "cust_Mobile" => $this->input->post("cust_Mobile"),
                  "cust_Altmobile" => $this->input->post("cust_Altmobile"),
                  "cust_Name" => $this->input->post("cust_Name"),
                  "cust_Email" => $this->input->post("cust_Email"),
                  "cust_Address1" => $this->input->post("cust_Address1"),
                  "cust_Address2" => $this->input->post("cust_Address2"),
                  "cust_Town" => $this->input->post("cust_Town"),
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
                  "prod_Priority" => $this->input->post("prod_Priority"),
                  "prod_Remarks" => $this->input->post("prod_Remarks"),
                  "ticket_Generatedate" => now()                  
              );
              
              $raise_Ticket = xss_clean($raise_Ticket);
            
              $status = $this->CrmModel->raiseTicket($raise_Ticket);
            if ($status == true) {
                $this->session->set_tempdata("add_success", "Raise Ticekt Added Successfully", 2);
                redirect(base_url() . "Crm_Dashboard/raiseTicket");
            } else {
                $this->session->set_tempdata("add_fail", "Umable to Add Raise Ticket", 2);
                redirect(base_url() . "Crm_Dashboard/raiseTicket");
            }
        }else {
              $this->load->view("crmdashboard/raiseticketview",$data);
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

     public function product_check()
    {
            if ($this->input->post('raiseticket_Product') == '0')  {
            $this->form_validation->set_message('product_check', 'Please choose product.');
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    
    public function asp_check()
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
        $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
         $data['tickets'] = $this->CrmModel->ticketHist();
//         
//         echo "<pre>";
//         print_r($data['tickets']); die; 
         $data['asps'] = $this->CrmModel->viewAsp();
//                 echo "<pre>";
//        print_r($data['tickets']); die;
         $this->load->view("crmdashboard/tickethistoryView",$data);
         $this->load->view("footer");
     }
     
     public function assignASP(){
         $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
         $this->load->view("crmdashboard/tickethistoryView");
         $this->load->view("footer");
     }
    public function ticketDetails(){
       $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
        $this->load->view("crmdashboard/ticketdetailView");
        $this->load->view("footer");
    }
    
    public function Asp(){
        $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
        $data['asps'] = $this->CrmModel->viewAsp();
        $this->load->view("crmdashboard/aspView",$data);
        $this->load->view("footer");
    }
    
    public function newAsp(){
        $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
        
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/asp'; 
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
                   $file = fopen("assets/files/asp/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
//
//						 echo "<pre>";
//						 print_r($filedata); die; 
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

                        $this->session->set_tempdata("add_success","ASP List Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add ASP",2);
   			} 
   			// load view 
   			$this->load->view('crmdashboard/addaspView'); 
  		}else{
        $this->load->view('crmdashboard/addaspView');
        }
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

		$header = array("Name","Contact","Pin Code","Area");
		fputcsv($file, $header);

		foreach ($aspData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;   
    }
    
    public function Serviceengineer(){
        $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
        //$data['asps'] = $this->CrmModel->viewAsp();
        $this->load->view("crmdashboard/serviceengineerView");
        $this->load->view("footer");
    }
    
    public function newserviceEngineer(){
       $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
        
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
   			$this->load->view('crmdashboard/addserviceengineerView'); 
  		}else{
        $this->load->view('crmdashboard/addserviceengineerView');
        }
        $this->load->view("footer");
    }
    
    public function Stockview(){
        $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
        $this->load->view("crmdashboard/serviceengineerView");
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
        $data = $this->CrmModel->getaspDetail($id);
        echo json_encode($data);
    }
    
    public function asp_update(){
                     $data = array(
				'asp' => $this->input->post('asp_Name')
				
			);
		$this->CrmModel->asp_update(array('ticketgenerate_Id' => $this->input->post('ticketgenerate_id')), $data);
		echo json_encode(array("status" => TRUE));
    }
    
    public function editticket($id){
         $this->load->view("crmdashboard/headercrmView");
        $this->load->view("crmdashboard/crmheaderView");
          $data['ticket'] = $this->CrmModel->editTicket($id);
//          echo "<pre>";
//          print_r($data['ticket']); die; 
          $this->form_validation->set_rules("prod_Datepurchase","Date","required|trim");
          $this->form_validation->set_rules("cust_Mobile","Mobile","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
          $this->form_validation->set_rules("cust_Altmobile","A;termate Mobile","numeric|regex_match[/^[0-9]{10}$/]|trim");          
          $this->form_validation->set_rules("cust_Name","Customer Name","required|trim|xss_clean|callback_alpha_dash_space");   
          $this->form_validation->set_rules("cust_Email","Email","valid_email|trim");   
          $this->form_validation->set_rules("cust_Address1","Address","required|trim"); 
          $this->form_validation->set_rules("cust_Town","Town","required|trim"); 
          
          $data['products'] = $this->CrmModel->viewProducts();
          
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
//              echo "<pre>";
//              print_r($_POST); die; 
              $editraise_Ticket = array(
                  "cust_Mobile" => $this->input->post("cust_Mobile"),
                  "cust_Altmobile" => $this->input->post("cust_Altmobile"),
                  "cust_Name" => $this->input->post("cust_Name"),
                  "cust_Email" => $this->input->post("cust_Email"),
                  "cust_Address1" => $this->input->post("cust_Address1"),
                  "cust_Address2" => $this->input->post("cust_Address2"),
                  "cust_Town" => $this->input->post("cust_Town"),
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
                  "prod_Priority" => $this->input->post("prod_Priority"),
                  "prod_Remarks" => $this->input->post("prod_Remarks")
              );
              
              $editraise_Ticket = xss_clean($editraise_Ticket);
            
              $status = $this->CrmModel->updateraiseTicket($editraise_Ticket,$id);
            if($status==true)
                {
                        $this->session->set_tempdata("upd_succ","Updated Successfully",2);
                        redirect(base_url()."Crm_Dashboard/editticket/".$id);
                }
                else
                {
                        $this->session->set_tempdata("upd_fail","Updated Fail");
                        redirect(base_url()."Crm_Dashboard/editticket/".$id);
                }
        }else {
              $this->load->view("crmdashboard/editicketview",$data);
          }          
          $this->load->view("footer");
    }
    
    public function ticketviewData(){
        $ticket_id = $this->input->post("ticket_id");
        $query = $this->db->query("select * from asp_product_info_replace_info where ticket_id=$ticket_id");
        if ($query->num_rows() > 0)
        {
        $row = $query->row(); 
        echo $row->complaint_overview;
        }else {
            echo "Processing";
        }

    }
    
    public function updateHappycall(){
        $ticket_id = $this->input->post("ticket_Id");
        $calling_Data = $this->input->post("calling_Data");
        $res = $this->db->query("update ticket_generate set happyCalling='$calling_Data' where ticket_Id=$ticket_id");
        if ($this->db->affected_rows()) {
            echo "Thank you for feedback";
        }
    }
}

?>