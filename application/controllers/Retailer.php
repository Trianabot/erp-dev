<?php
class Retailer extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security","date"));
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->model("RetailerModel");
        $this->load->database();
    }

    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
         $this->load->view("Salesview");
        // $this->load->view("products/Brand/Brandview");
        // $this->load->view("footer");
    }

    public function Listretailerorders(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("retailer/retailerorderview");
        $this->load->view("footer");
    }

    public function Sales(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("retailer/retailersalesview");
        $this->load->view("footer");
    }

    public function Newretailerorder(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("retailer/newretailerorderview");
        $this->load->view("footer");
    }
    
  
    
    public function billings(){
         $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
         $data['billings'] = $this->RetailerModel->viewBillings();
        // echo "<pre>";
        // print_r($data['billings']); die; 
        $this->load->view("retailer/billingsView",$data);
        $this->load->view("footer");
    }
    
    public function salesexeBill(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->view("retailer/salexebillView");
        $this->load->view("footer");
        
    }
    
     public function chequeBill(){
        // echo "<pre>";
        // print_r($_POST);die;
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['invoices'] = $this->RetailerModel->viewBillings();
//         echo "<pre>";
//         print_r($data['invoices']);die;
        $this->id = $this->session->userdata("id");
        
        if(isset($_POST['cheque_submit'])){
        $invoice_no[]  = $this->input->post('invoice_No');
        
        
//         echo "<pre>";
//         print_r($invoice_no[]); die; 
        
       $invoice_count = count($invoice_no[0]); 
        
		
        for ($row = 0; $row < $invoice_count; $row++) {
              $invoice_number = str_replace('_', ' ',$invoice_no[0][$row]); 
               $dat = $this->db->query("select sum(amount) as totAmt from asp_billings where invoice_number='$invoice_number'");
                $ti = $dat->row();
            
                $amount = $ti->totAmt;
            
                $cheq_amt = $this->input->post("bill_Amt");
            
            
//                if(){
//                    
//                }
                   if($amount <= $cheq_amt){
                       $this->db->query("update asp_billings set bill_Status='Full Paid' where invoice_number='$invoice_number'");	
                       $invoice_amt =  $cheq_amt - $amount;
                   }else{
                       $this->db->query("update asp_billings set bill_Status='Partial Paid' where invoice_number='$invoice_number'");	
                       $invoice_amt =  $cheq_amt - $amount;
                   }
                     
			
								//print_r($amount);die;
								$chequeBill = array(
                                    "order_id" => $invoice_number,
                                    "username" => "",
                                    "distributor_name" => "",
                                    "retailer_name" => $this->id,
                                    "cheque_number" => $this->input->post("cheque_Number"),
                                    "cheque_amt" => $this->input->post("bill_Amt"),
                                    "cheque_issue_date" => $this->input->post("cheque_Date"),
                                    "bank_town" => "",
                                    "bank_name" => $this->input->post("bank_Name"),
                                    "cheque_image" => "",
                                    "status" => "Due",
                                    "cheque_paid_date" => "",
                                    "courier_name" => $this->input->post("courier_Name"),
                                    "courier_no" => $this->input->post("courier_No"),
                                    "courier_date" => $this->input->post("courier_Date"),
                                    "payment_Mode" => "Cheque",
                                    "invoice_Amount" => $invoice_amt,
                                    "billgen_Date" => now()
                       );
								 
									$status = $this->RetailerModel->addchequeBill($chequeBill);
						 }
            if($status == true){
                
                
               // echo "Success"; die;
               $this->session->set_flashdata('bill_Paycheque','Successfully paid the bill!!!!');
                            //redirect(base_url()."Crm/orderProcess/".$voucher_No);
                              redirect(base_url()."Retailer/chequeBill");
            }else {
                echo "Fail"; die;
            }
            
            
//       $this->load->view("retailer/chequebillView",$data);
//        $this->load->view("footer");
        }else{
        $this->load->view("retailer/chequebillView",$data);
        $this->load->view("footer");
        }
    } 
    
    public function chequeyAmt($id){
        $invoice_Id = urldecode($id);
        $query = $this->db->query("select * from asp_billings where invoice_number='$invoice_Id'");
            $res = $query->row();
            
           
            echo json_encode($res);
    }
    
    public function rtgsBill(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->view("retailer/rtgsbillView");
        $this->load->view("footer");
    }
      
    public function billingPayment(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['billpays'] = $this->RetailerModel->viewbillPay();
        // echo "<pre>";
        // print_r($data['billpays']); die;
        $this->load->view("retailer/billpaymentView",$data);
        $this->load->view("footer");
    }
    
    public function invoice_Prod($id){
        $invoice_Id = urldecode($id);
       // echo "select * from product_complaint where product_Category='$prod_Category'"; 
         $result = $this->db->query("select * from asp_billings where invoice_number='$invoice_Id'");
        $res_complaint = $result->result();
        
		echo json_encode($res_complaint);
    }
}
?>