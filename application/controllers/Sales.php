<?php
class Sales extends CI_Controller{

    public function __construct(){
        parent::__construct();
            $this->load->helper("url");
            $this->load->library(array("form_validation","session"));
            $this->load->model("sales/SalesModel");
            $this->load->model("plant/PlantModel");
            $this->load->model("settings/BranchModel");
            $this->load->model("settings/SupplierModel");
            $this->load->model("settings/DivisionModel");
            $this->load->model("settings/ProductModel");
            $this->load->database();
    }
    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
         $this->load->view("Salesview");
         //$this->load->view("footer");
    }

    public function DistributorSale(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("distributors/salesview");
        $this->load->view("footer");
    }

    public function RetailerSales(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("retailer/retailersalesview");
        $this->load->view("footer");
    }

    public function SalesExecutive(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['sales_track']=$this->SalesModel->sales_executive_track();
        $this->load->view("Sales/salesexecutiveView",$data);
        $this->load->view("footer");
    }

    public function newSales(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['sales'] = $this->SalesModel->salesView();
        // echo "<pre>";
        // print_r($data['sales']); die; 
        $this->load->view("Sales/newsalesView",$data);
        $this->load->view("footer");
    }

    public function newcsvSales(){
        if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0;//
            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
                // echo "<pre>";
                // print_r($filesop); die; 
                $Date = $filesop[1];
                $voucher_No = $filesop[2];
                $Branch = $filesop[3];
                $Party = $filesop[4];
                $Product = $filesop[5];
                $Quantity = $filesop[6];
                $Unit_Rate = $filesop[7];
                $Net_Amount = $filesop[8];
                $Division = $filesop[9];

                if($c<>0){	
                    $salescsv_Data= array(
                        "Date"=>$Date,
                        "voucher_No"=>$voucher_No,
                        "Branch"=>$Branch,
                        "Party"=>$Party,
                        "Product"=>$Product,
                        "Quantity"=>$Quantity,
                        "Unit_Rate"=>$Unit_Rate,
                        "Net_Amount"=>$Net_Amount,
                        "Division"=>$Division
                    );
    
                    $status= $this->SalesModel->salestostore($salescsv_Data);

                }
                  $c = $c + 1;
            // if($status == true){
            //     echo "success"; die; 
            // }else {
            //     echo "Fail"; die; 
            // }
            }
           
             $this->newSales();
            
        }
    }

    public function salesView($id){
        $sales_Id = urldecode($id);
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['sale'] = $this->SalesModel->salesVoucher($sales_Id);
        $data['sale_Result'] = $this->SalesModel->salesCount($sales_Id);
        $data['sales'] = $this->SalesModel->salesvoucherView($sales_Id);
        // echo "<pre>";
        // print_r($data['sales'] ); die; 
        $this->load->view("Sales/salesview",$data);
        $this->load->view("footer");
    }

    public function salesDeliveries(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['deliveries'] = $this->SalesModel->salesdeliveryView();
        // echo "<pre>";
        // print_r($data['deliveries']); die; 
        $this->load->view("Sales/salesdeliveryView",$data);
        $this->load->view("footer");
    }

    public function newsalesDelivery(){
        if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0;//
            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
                // echo "<pre>";
                // print_r($filesop); die; 
                $Date = $filesop[1];
                $voucher_No = $filesop[2];
                $Branch = $filesop[3];
                $Party = $filesop[4];
                $Product = $filesop[5];
                $Quantity = $filesop[6];
                $Unit_Rate = $filesop[7];
                $Net_Amount = $filesop[8];
                $Division = $filesop[9];

                if($c<>0){	
                    $salescsv_Data= array(
                        "Date"=>$Date,
                        "Voucher_No"=>$voucher_No,
                        "Branch"=>$Branch,
                        "Party"=>$Party,
                        "Product"=>$Product,
                        "Quantity"=>$Quantity,
                        "Unit_Rate"=>$Unit_Rate,
                        "Net_Amount"=>$Net_Amount,
                        "Division"=>$Division
                    );
    
                    $status= $this->SalesModel->salesDelivery($salescsv_Data);

                }
                  $c = $c + 1;
        
            }
           
             $this->salesDeliveries();
            
        }
    }

    public function delieryView($id){
        $voucher_Id = urldecode($id);
       // echo $voucher_Id; die; 
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['delivery'] = $this->SalesModel->deliveryVoucher($voucher_Id);
        $data['deliveries'] = $this->SalesModel->deliveryvoucherView($voucher_Id);
        // echo "<pre>";
        // print_r($data['deliveries']); die; 
        $this->load->view("Sales/deliveryView",$data);
        $this->load->view("footer");
    }

    public function deliveryReturn(){
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("sidebar");
        $data['delreturns'] = $this->SalesModel->salesdeliveryreturnView();
        // echo "<pre>";
        // print_r($data['sales']); die; 
        $this->load->view("Sales/salesdeliveryreturnView",$data);
        $this->load->view("footer");
    }

    public function saesdeliveryreturn(){
        if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0;//
            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
                // echo "<pre>";
                // print_r($filesop); die; 
                $Date = $filesop[1];
                $voucher_No = $filesop[2];
                $Branch = $filesop[3];
                $Party = $filesop[4];
                $Product = $filesop[5];
                $Quantity = $filesop[6];
                $Unit_Rate = $filesop[7];
                $Net_Amount = $filesop[8];
                $Division = $filesop[9];

                if($c<>0){	
                    $salescsv_Data= array(
                        "Date"=>$Date,
                        "Voucher_No"=>$voucher_No,
                        "Branch"=>$Branch,
                        "Party"=>$Party,
                        "Product"=>$Product,
                        "Quantity"=>$Quantity,
                        "Unit_Rate"=>$Unit_Rate,
                        "Net_Amount"=>$Net_Amount,
                        "Division"=>$Division
                    );
    
                    $status= $this->SalesModel->salesDeliveryReturn($salescsv_Data);

                }
                  $c = $c + 1;
        
            }
           
             $this->deliveryReturn();
            
        }
    }
    public function delieryreturnView($id){
        $voucher_Id = urldecode($id);
        // echo $voucher_Id; die; 
         $this->load->view("header");
         $this->load->view("tabheader");
         $data['delivery'] = $this->SalesModel->deliveryReturn($voucher_Id);
         $data['deliveries'] = $this->SalesModel->deliveryreturnView($voucher_Id);
         // echo "<pre>";
         // print_r($data['deliveries']); die; 
         $this->load->view("Sales/deliveryreturnView",$data);
         $this->load->view("footer");
    }

    public function salesReturn(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['salesreturns'] = $this->SalesModel->salesreturnView();
        // echo "<pre>";
        // print_r($data['deliveries']); die; 
        $this->load->view("Sales/salesreturnView",$data);
        $this->load->view("footer");
    }

    public function newsalesReturn(){
        if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0;//
            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
                // echo "<pre>";
                // print_r($filesop); die; 
                $Date = $filesop[1];
                $voucher_No = $filesop[2];
                $Branch = $filesop[3];
                $Party = $filesop[4];
                $Product = $filesop[5];
                $Quantity = $filesop[6];
                $Unit_Rate = $filesop[7];
                $Net_Amount = $filesop[8];
                $Division = $filesop[9];

                if($c<>0){	
                    $salescsv_Data= array(
                        "salesreturn_Date"=>$Date,
                        "Voucher_No"=>$voucher_No,
                        "Branch"=>$Branch,
                        "Party"=>$Party,
                        "Product"=>$Product,
                        "Quantity"=>$Quantity,
                        "Unit_Rate"=>$Unit_Rate,
                        "Net_Amount"=>$Net_Amount,
                        "Division"=>$Division
                    );
    
                    $status= $this->SalesModel->salesReturnData($salescsv_Data);

                }
                  $c = $c + 1;
        
            }
           
             $this->salesReturn();
            
        }
    }

    public function salereturnView($id){
        $voucher_Id = urldecode($id);
        // echo $voucher_Id; die; 
         $this->load->view("header");
         $this->load->view("tabheader");
         $data['salesreturn'] = $this->SalesModel->saleReturn($voucher_Id);
         $data['salesreturns'] = $this->SalesModel->salereturnView($voucher_Id);
         // echo "<pre>";
         // print_r($data['deliveries']); die; 
         $this->load->view("Sales/salereturnView",$data);
         $this->load->view("footer");
    }
    
    public function pendingDeliveries(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['pendings'] = $this->SalesModel->pendings();
        // echo "<pre>";
        // print_r($data['sales']); die; 
        $this->load->view("Sales/salespendingdeliveryView",$data);
        $this->load->view("footer");
    }
    
    public function pendingDelivery(){
        if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0;//
            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
//                 echo "<pre>";
//                 print_r($filesop); die; 
                $Date = $filesop[1];
                $voucher_No = $filesop[2];
                $Branch = $filesop[3];
                $Party = $filesop[4];
                $Product = $filesop[5];
                $Item_Pending_Type = $filesop[6];
                $Booked_Qty = $filesop[7];
                $Pending_Qty = $filesop[8];
                $Division = $filesop[9];

                if($c<>0){	
                    $salescsv_Data= array(
                        "pending_Date"=>$Date,
                        "Voucher_No"=>$voucher_No,
                        "Branch"=>$Branch,
                        "Party"=>$Party,
                        "Product"=>$Product,
                        "Item_Pend_Type"=>$Item_Pending_Type,
                        "Booked_Quantity"=>$Booked_Qty,
                        "Pending_Quanity"=>$Pending_Qty,
                        "Division"=>$Division
                    );
    
                    $status= $this->SalesModel->pendingDelivery($salescsv_Data);

                }
                  $c = $c + 1;
        
            }
           
             $this->pendingDeliveries();
            
        }
    }
    
    public function pendingView($id){
         $voucher_Id = urldecode($id);
        // echo $voucher_Id; die; 
         $this->load->view("header");
         $this->load->view("tabheader");
         $data['pending'] = $this->SalesModel->salespendingDelivery($voucher_Id);
         $data['pendings'] = $this->SalesModel->salespendingProducts($voucher_Id);
         // echo "<pre>";
         // print_r($data['deliveries']); die; 
         $this->load->view("Sales/pendingView",$data);
         $this->load->view("footer");
    }
    
    public function pickLists(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['lists'] = $this->SalesModel->pickList();
        // echo "<pre>";
        // print_r($data['sales']); die; 
        $this->load->view("Sales/picklistView",$data);
        $this->load->view("footer");
    }
    
    public function picklist(){
        if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0;//
            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
//                 echo "<pre>";
//                 print_r($filesop); die; 
                $Party_Account = $filesop[1];
                $Route = $filesop[2];
                $Product = $filesop[3];
                $Location = $filesop[4];
                $Storage_Bin = $filesop[5];
                $Quantity = $filesop[6];

                if($c<>0){	
                    $salescsv_Data= array(
                        "Party_Account"=>$Party_Account,
                        "Route"=>$Route,
                        "Product"=>$Product,
                        "Location"=>$Location,
                        "Storage_Bin"=>$Storage_Bin,
                        "Quantity"=>$Quantity
                    );
    
                    $status= $this->SalesModel->addpickList($salescsv_Data);

                }
                  $c = $c + 1;
        
            }
           
             $this->pickLists();
            
        }
    }
    
     public function newSale(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['branchs']=$this->BranchModel->viewBranches();  
        $data['suppliers']=$this->SupplierModel->viewSupp(); 
        $data['divisions']=$this->DivisionModel->viewDivisions();  
        $data['products']=$this->ProductModel->viewcsvProducts();
        $this->load->view("Sales/sale/newsaleView",$data);
        $this->load->view("footer");
    }
    
    
        public function produt_Details($id){
            $product = urldecode ($id);
            //echo "SELECT * FROM products_csv WHERE product_Master LIKE '$id'"; die; 
         $result=$this->db->query("SELECT * FROM products_csv "
                            . "WHERE "
                            . "product_Master LIKE '$product' OR product_Short LIKE '$product' OR product_Short2 LIKE '$product'");


                    if($result->num_rows()>0) {
                        $arr = array('product_info' => $result->result());
                        echo json_encode($arr);
                    }else {
                        return false; 
                    }	
    }
    
    public function produtDet($id){
      $result=$this->db->query("SELECT * FROM products_csv WHERE productscsv_Id = '$id' ");

                    if($result->num_rows()>0) {
                        $arr = array('product_info' => $result->result());
                        echo json_encode($arr);
                    }else {
                        return false; 
                    }	
    }

    public function salesexecutiveTrack(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['executives'] = $this->SalesModel->viewExecutives();
        $this->load->view("Sales/salesexectrackView",$data);
        $this->load->view("footer");
    }
    
     public function visitDetail(){
        $executive = $this->input->post("executive");
        $visitDate = $this->input->post("visitDate");
        
//        echo "<pre>";
//        print_r($executive); die; 
        //echo "select * from users where exe_id=$executive"; die; 
        $query1 = $this->db->query("select * from users where exe_id=$executive");
        $executive_result = $query1->row();
        $executive_username= $executive_result->email;
       // echo $executive_username; die; 
        // $result1= $this->db->query("select * from store_lati_longi_values");
        // $res1 = $result1->result();select * from route_plan WHERE executive_username LIKE '%$executive%' AND dat_exp LIKE '%$visitDate%' ORDER BY start_place REGEXP '^[a-z]' DESC
       
        $result = $this->db->query("select * from route_plan WHERE executive_username LIKE '%$executive_username%' AND dat_exp LIKE '%$visitDate%' ORDER BY start_place ASC");
        $res = $result->result();
        
        $my_values = array();
        
        foreach($res as $row){
            $my_values[] = $row->start_place;
        }
        
        $this->db->select('*');
        $this->db->from('dealers');
        $this->db->or_where_in('City', $my_values);
        $query = $this->db->get();
        $cities = $query->result();
        
        
        $result = $this->db->query("select * from dsr_visit_confirmation WHERE username LIKE '%$executive_username%' AND date LIKE '%$visitDate%' AND status='visit confirmed'");
        $res = $result->result();
        
        
        //echo json_encode($cities);
        echo json_encode(array("Cities"=>$cities,"DST"=>$res));
    }
    
}
?>