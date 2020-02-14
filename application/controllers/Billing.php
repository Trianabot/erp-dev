<?php 
class Billing extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","date","string","security"));
        $this->load->library(array("form_validation","session"));
        $this->load->model("BillingModel");
        $this->load->database();
    }
    
    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        //$data['distributors'] = $this->BillingModel->viewDists();
        $data['cities'] = $this->BillingModel->viewCitites();
        $data['dists'] = $this->BillingModel->viewDists();
        $data['dealers'] = $this->BillingModel->viewDealers();
        $this->load->view("billing/billingView",$data);
        $this->load->view("footer");
    }
    
    public function getBills(){
         $fromdate = $this->input->post('fromdate');
        $newFromdate = strtotime($fromdate);
        $newFrom = date('m/d/Y', $newFromdate);        
        
        $todate = $this->input->post('todate');
        $newtoDate = strtotime($todate);
       $newTo = date('m/d/Y', $newtoDate); 
        
        
        $distName = $this->input->post('distName');
        
        if($this->input->post('distName')){
            $distName = $this->input->post('distName');
            $query = $this->db->query("SELECT *, sum(amount) as total, sum(pending_Amt) as totalPending FROM asp_billings 
            WHERE STR_TO_DATE(bill_date, '%m/%d/%Y') between STR_TO_DATE('$newFrom', '%m/%d/%Y') and STR_TO_DATE('$newTo', '%m/%d/%Y') AND party_name='$distName'");
         $res = $query->row();
        }
        
        $query1 = $this->db->query("select 'rtgs' as order_id, sum(cheque_amt) as chqdueAmt from scheme_assign_to_retailer_cheques where status='Due' AND cheque_stage != 'Paid' AND retailer_name='$distName'");
        $res1 = $query1->row();
        
         $query2 = $this->db->query("select 'Cheque' as order_id, sum(cheque_amt) as chqdueAmt from scheme_assign_to_retailer_cheques where status='Due' AND cheque_stage = 'In Transit' AND retailer_name='$distName'");
        $res2 = $query2->row();
        
        $query3 = $this->db->query("select sum(cheque_amt) as rtgsAmt from scheme_assign_to_retailer_cheques where payment_Mode='rtgs' AND retailer_name='$distName'");
        $res3 = $query3->row();
        
          echo json_encode(array($res, $res1, $res2, $res3));
        
        
    }
    public function getBillings(){
//        echo "<pre>";
//        print_r($_POST); 
       
        
      
        $data  = $this->BillingModel->getbilldata();
       echo json_encode($data, true);
    }
    
    public function getamountType(){
        $data = $this->BillingModel->getAmountTyp();
        echo json_encode($data, true);
    }
    
    public function getpaymentData(){
        $data = $this->BillingModel->getpaymentDet();
        echo json_encode($data, true);
    }
    
    public function pendingAgein(){
        $data = $this->BillingModel->getageinData();
        echo json_encode($data, true);
    }
    
    public function getmonthBill(){
        
        $data =  $this->BillingModel->getmonthBillData();
        
//        $dayQuery =  $this->db->query("SELECT *, COUNT(id) as count, bill_date as billDate, MONTH(STR_TO_DATE(bill_date, '%m/%d/%Y')) as monthName, YEAR(STR_TO_DATE(bill_date, '%m/%d/%Y')) as yearDate from 
//asp_billings
//WHERE 
//MONTH(STR_TO_DATE(bill_date, '%m/%d/%Y')) = '" . date('m') . "' AND YEAR(STR_TO_DATE(bill_date, '%m/%d/%Y'))= '" . date('Y') . "' group by bill_date"); 
        
        echo json_encode($data, true);
        
        //$data['day_wise'] =  $dayQuery->result();
        
//        echo "<pre>";
//        print_r($data['day_wise']); die; 
        
        // $data['day_wise'] = $this->BillingModel->getmonthBillData();
//       echo "<pre>";
//        print_r($data['datas']); die; 
        //echo json_encode($data, true);
        //$this->load->view("billing/billingView",$data);
    }
    
    public function distibutorLists($id){
        
        $query = $this->db->query("select * from sales_executives_master where retailer_city='$id' OR distributor_city = '$id' group by distributor_name");
        $result = $query->result();
         //$result=$this->db->where("state_Id",'$id')->get("sales_executives_master")->result();
		echo json_encode($result);
    }
    
    public function dealerLists($id){
        $dist_Name = urldecode($id);
        
        $query = $this->db->query("select * from sales_executives_master where distributor_name='$dist_Name' group by retailer_name");
        $result = $query->result();
         //$result=$this->db->where("state_Id",'$id')->get("sales_executives_master")->result();
		echo json_encode($result);
    }
    
    public function getdistData(){
        $data = $this->BillingModel->getdistData();
        echo json_encode($data, true);
    }
    
    public function getdealerData(){
        $data = $this->BillingModel->getdealerData();
        echo json_encode($data, true);
    }
    
    
    public function getcityData(){
        
        $fromdate = $this->input->post('fromdate');
        $newFromdate = strtotime($fromdate);
        $newFrom = date('m/d/Y', $newFromdate);        
        
        $todate = $this->input->post('todate');
        $newtoDate = strtotime($todate);
       $newTo = date('m/d/Y', $newtoDate); 
        
        $cityName = $this->input->post('cityName');
        
        if($this->input->post('cityName')){
            $cityName = $this->input->post('cityName');
            $query = $this->db->query("SELECT *, sum(amount) as total, sum(pending_Amt) as totalPending FROM asp_billings 
            WHERE STR_TO_DATE(bill_date, '%m/%d/%Y') between STR_TO_DATE('$newFrom', '%m/%d/%Y') and STR_TO_DATE('$newTo', '%m/%d/%Y') AND town='$cityName' group by party_name");
         
            $query1 = $this->db->query("select sum(overdue_cal) as totalDue from asp_billings
            WHERE STR_TO_DATE(bill_date, '%m/%d/%Y') between STR_TO_DATE('$newFrom', '%m/%d/%Y') and STR_TO_DATE('$newTo', '%m/%d/%Y') AND town='$cityName' group by party_name AND overdue_cal < 1");
            
            $res1 = $query1->row();
            $res = $query->result();
        }
        echo json_encode(array($res, $res1));
        
    }
    
    
}
?>