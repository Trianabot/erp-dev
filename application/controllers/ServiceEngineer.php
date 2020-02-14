<?php 
class ServiceEngineer extends CI_Controller{
    
     public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form','date','security'));
        $this->load->library(array("session","form_validation"));
         $this->load->model("ServiceEngmodel");    
        $this->load->model("Crm/CrmModel");
         $this->load->model("asp/AspModel");
         $this->load->database();
    }
    
    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->view("serviceengineer/servcengView");
    }
    
    public function ticketHistory(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['tickets'] = $this->ServiceEngmodel->viewTickets();
//        $email = $this->session->userdata('email');
//        $query = $this->db->query("select * from users where email='$email'");
//        
//        $row=$query->row();
//        $asp_Name = $row->id;
//        $aspdept_Name =  $row->userdept_Name;
//        //echo $asp_Name; die; 
//        $data['asp_name'] = $aspdept_Name;
//        $data['service_engineer'] = $this->AspModel->getServiceeng($aspdept_Name);
//        echo "<pre>";
//        print_r($data['tickets']); die;
        $this->load->view("serviceengineer/tickethistView",$data);
        $this->load->view("footer");
    }
    
    public function editticket($id){
        //echo $id; die;
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
          $data['ticket'] = $this->CrmModel->editTicket($id);
          $data['asp'] = $this->CrmModel->viewaspAssign($id);
          //$data['technician'] = $this->CrmModel->viewtechnicianAssign($id);
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
        
          //$data['product_Cost'] = $this->CrmModel->viewproductCost($prodModel);
        //$data['service_engineer'] = $this->AspModel->getServiceeng($aspdept_Name);
//          $aspId = $data['ticket']->asp;  
//          $data['asp_detail'] = $this->CrmModel->viewaspDetail($aspId);
//          echo "<pre>";
//          print_r($data['asps']); die; 
          $this->form_validation->set_rules("prod_Datepurchase","Date","required|trim");
          $this->form_validation->set_rules("cust_Mobile","Mobile","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
          $this->form_validation->set_rules("cust_Altmobile","A;termate Mobile","numeric|regex_match[/^[0-9]{10}$/]|trim");          
          $this->form_validation->set_rules("cust_Name","Customer Name","required|trim|xss_clean|trim");   
          $this->form_validation->set_rules("cust_Email","Email","valid_email|trim");   
          $this->form_validation->set_rules("cust_Address1","Address","required|trim");
          $this->form_validation->set_rules("barcode_Scan","Barcode Scan","required|trim");
          $this->form_validation->set_rules("complaint_overview","Complaint Overview","required|trim");
          $this->form_validation->set_rules("service_Cost","Service Cost","required|trim");
          $this->form_validation->set_rules("distance_Travel","Distance Travel","required|trim");  
        
         $email = $this->session->userdata("email");
        
        //$email = $this->session->userdata('email');
        $query = $this->db->query("select * from users where email='$email'");
        
        $row=$query->row();
        $asp_Name = $row->id;
        $aspdept_Name =  $row->userdept_Name;
        //echo $asp_Name; die; 
       // $data['asp_name'] = $aspdept_Name;
        $data['service_engineer'] = $this->AspModel->getServiceeng($aspdept_Name);
        
          //$data['products'] = $this->CrmModel->viewProducts();
          $data['brands'] = $this->CrmModel->viewBrands();

                      
       
          if($this->form_validation->run() == true){
//              
       
//  echo "<pre>";
//              print_r($_POST); die;

              //$path = 'https://www.trianabot.com/test_api/uploads/1569924884757.jpg'
              
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
              
            //   echo "<pre>";
            //   print_r($_POST); die;
              
              $updateticket = array(
				
                "barcode" =>$this->input->post("barcode_Scan"),
                "distance_traveled" => $this->input->post("distance_Travel"),
                "status" => 'Ticket Closed',
                 "ticket_Closedate" => date("d-m-Y")
			 );
              
              
            $repair_Info = $this->input->post("repair_Info"); 
            $this->input->post("prodwarranty_Casetype");   
            $prodctModel = $this->input->post("prod_Name");
            
           
              
              
              $status=$this->ServiceEngmodel->updticket($updateticket,$id);
			
			if($status==true)
				{
                
                    
                $partproductinfo = array(
                    "username" => $email,
                    "ticket_id" => $id,
                    "barcode_scan" =>$this->input->post("barcode_Scan"),
                    "complaint_type" =>$this->input->post("productcomplaint_Nature"),
                    "complaint_overview" =>$this->input->post("complaint_overview"),
                    "part_replace" => $this->input->post("repair_Info"),
                    "replace_date" =>date("Y-m-d"),
                    "amount" => $this->input->post("distance_Travel"),
                    "bill_copy" =>$filename,
                    "part_cost" => $this->input->post("partCost"),
                    "part_cost_gst" => $this->input->post("partcostGST"),
                    "total_cost" => $this->input->post("totalCost"),
                    "service_engineer_fee" =>$this->input->post("service_Cost"),
                    "part_section" => $this->input->post("editpartName"),
                    "status" => 'Ticket Closed'
                );
                
                $this->db->insert("asp_product_info_replace_info",$partproductinfo);
                
                
                
                $this->session->set_flashdata('editticket_report','Successfully close ticket!!!!');
                //$this->session->set_tempdata("add_success", "Successfully raise ticket!!!", 2);
                redirect(base_url() . "ServiceEngineer/ticketHistory");
                
                
             //   echo "Success"; die; 
//					$this->session->set_tempdata("upd_succ","Updated Successfully",2);
//					redirect(base_url()."Crm/editBrand/".$id);
				}
				else
				{
                    echo "Fail"; die; 
//					$this->session->set_tempdata("upd_fail","Updated Fail");
//					redirect(base_url()."Crm/editBrand/".$id);
				}
              
             
          
        }else {
              $this->load->view("serviceengineer/editticketview",$data);
          }          
          $this->load->view("footer");
    }
    
    public function ticketView($id){
        $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['ticket'] = $this->CrmModel->viewticketDetail($id);
        $data['aspticketinfo'] = $this->CrmModel->viewaspticketInfo($id);
//        echo "<pre>";
//        print_r($data['ticket']); 
//         print_r($data['aspticketinfo']); die; 
        $this->load->view("serviceengineer/ticketviewDetail",$data);
    }
    
    
}
?>