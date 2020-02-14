<?php
class Distributor extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security","date"));
         $this->load->library(array("form_validation","session"));
        $this->load->model("dealers/DistributorModel");
        $this->load->model("distributor/DistributororderModel");
        $this->load->model("distributor/DistorderModel");
       $this->load->model("settings/ProductModel");
        $this->load->helper("url");
        $this->load->database();
    }

    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("Salesview");
        //$this->load->view("products/Brand/Brandview");
        //$this->load->view("footer");
    }

    public function Listorders(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['distorders']=$this->DistorderModel->viewOrders();
//         echo "<pre>";
//         print_r($data['distorders']); die; 
        $this->load->view("distributors/distorderview",$data);
        $this->load->view("footer");
    }

    public function DistributorSale(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("distributors/salesview");
        $this->load->view("footer");
    }
       
    public function Neworder(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['distributors'] = $this->DistributorModel->viewDistributors();
        $data['products']=$this->ProductModel->viewcsvProducts();

        $this->form_validation->set_rules("distorder_Date","Order Date","required|trim");
        $totalAmount = $this->input->post("totalAmount");
        $grandDiscount = $this->input->post("grandDiscount");
        $value = $this->input->post("final_Result");
        $final_Result = preg_replace('/[^a-zA-Z0-9_ -]/s','', $value);
        if($this->form_validation->run()==true){

                      $adddistributor_Order=array(
                            "distributor_Id"=>$this->input->post("distributor_Name"),
                            "same_shipping"=>$this->input->post("same_Shipping"),
                            "shipping_Personname"=>$this->input->post("shipping_Personname"),
                            "shipping_Address"=>$this->input->post("shipping_Address"),
                            "Order_Date"=>$this->input->post("distorder_Date"),
                            "Order_RefNumber"=>$this->input->post("Order_RefNumber"),
                            "Order_Due"=>$this->input->post("Order_Due"),
                            "final_Result"=>$final_Result, 
                            "totalAmount"=>$totalAmount,
                            "grandDiscount"=>$grandDiscount,
                            "order_By"=> $this->input->post("order_By"),
                            "ordergenerate_Date"=>now()
                        );
                      
                      $adddistributor_Order=xss_clean($adddistributor_Order);
                      
                      for($i=0; $i < count($_POST['distorderprod_Name']); $i++ ) {
                                $pur['productscsv_Id'][]=  $_POST['productscsv_Id'][$i];
                                $pur['distorderprod_Name'][]=  $_POST['distorderprod_Name'][$i];
                                $pur['distorderprod_Qty'][]=  $_POST['distorderprod_Qty'][$i];
                                $pur['distorderprod_Unitrate'][]=  $_POST['distorderprod_Unitrate'][$i];
                                $pur['distorderprod_Discount'][]=  $_POST['distorderprod_Discount'][$i];
                                $pur['distorderprod_Netland'][]=  $_POST['distorderprod_Netland'][$i];
                                $pur['distorderprod_Netamt'][]=  $_POST['distorderprod_Netamt'][$i];
                                $pur['distorderproduct_Code'][]=  $_POST['distorderproduct_Code'][$i];
                        }
                        
                         $status=$this->DistorderModel->adddistOrder($adddistributor_Order,$pur);
                        if($status==true)
                        {
                                $this->session->set_tempdata("add_success","New Order Added Successfully",2);
                                redirect(base_url()."Distributor/Neworder");
                        }
                        else
                        {
                                $this->session->set_tempdata("add_fail","Umable to Add new order",2);
                                redirect(base_url()."Distributor/Neworder");
                        }
                      

        }else {
        $this->load->view("distributors/distneworderview",$data);
        }
        
        $this->load->view("footer");
    }
    
  public function orderInvoice($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['order'] = $this->DistorderModel->orderDetail($id);
//         echo "<pre>";
//        print_r( $data['order']); die; 
        $data['products'] = $this->DistorderModel->productDetail($id);
//           echo "<pre>";
//        print_r( $data['products']); die; 
        $this->load->view("distributors/distorderInvoice",$data);
        $this->load->view("footer");
    }
    
     
    
     public function shipProcess($id){
        $this->load->view("header");
       $this->load->view("tabheader");
       $data['order'] = $this->DistributororderModel->orderDetail($id);
//         echo "<pre>";
//         print_r($data['order']); die; 
        $data['products'] = $this->DistributororderModel->productDetail($id);
        $this->load->view("distributors/shipprocessView",$data);
        $this->load->view("footer");
    }
    
    public function orderView($id){
         $this->load->view("header");
        $this->load->view("tabheader");
        $data['order'] = $this->DistributororderModel->orderDetail($id);
        $data['products'] = $this->DistributororderModel->productDetail($id);
        $this->load->view("distributors/distorderdetailView",$data);
        $this->load->view("footer");
    }
    
    public function Invoice($id){
       $this->load->view("header");
       $this->load->view("tabheader");
       $status=$this->DistributororderModel->updateinvoiceStatus($id);
        
        if($status == true){
                $this->session->set_tempdata("upd_succ","Invoice has generated success and sent to distributor!");
                redirect(base_url()."Distributor/InvoiceSuccess");
            }else{
                $this->session->set_tempdata("upd_fail","Invoice has not generated");
                redirect(base_url()."Distributor/InvoiceSuccess");
            }		
        
        
       //$this->load->view("distributors/invoiceSuccess");
       $this->load->view("footer");
    }
    
    /*Invoice Generated start */
     public function InvoiceOrder($id){
      $this->load->view("header");
       $this->load->view("tabheader");
//       echo "<pre>";
//       print_r($_POST); die; 
       $status=$this->DistorderModel->updateinvoiceStatus($id);
       if($status == true){
                
                        for($i=0; $i < count($_POST['distorder_Id']); $i++ ) {
                                $pur['distorder_Id'][]=  $_POST['distorder_Id'][$i];
                                $pur['productscsv_Id'][]=  $_POST['productscsv_Id'][$i];
                                $pur['distributor_Id'][]=  $_POST['distributor_Id'][$i];
                                $pur['distorderprod_Name'][]=  $_POST['distorderprod_Name'][$i];
                                $pur['distinvoiceprod_Qty'][]=  $_POST['distinvoiceprod_Qty'][$i];
                                $pur['distinvoiceprod_Unitrate'][]=  $_POST['distinvoiceprod_Unitrate'][$i];
                                $pur['distinvoiceprod_Discount'][]=  $_POST['distinvoiceprod_Discount'][$i];
                                $pur['distinvoiceprod_Netland'][]=  $_POST['distinvoiceprod_Netland'][$i];
                                $pur['distinvoiceprod_Netamt'][]=  $_POST['distinvoiceprod_Netamt'][$i];
                                $pur['distinvoiceprod_Serial'][]=  $_POST['distinvoiceprod_Serial'][$i];
                        }
                        
                        
                         $status=$this->DistorderModel->adddistinvoiceOrder($pur);
                         
                         if($status == true){
                             $this->session->set_tempdata("upd_succ","Invoice has generated success and sent to distributor!");
                            redirect(base_url()."Distributor/InvoiceSuccess");
                         }
                
                
            }else{
                $this->session->set_tempdata("upd_fail","Invoice has not generated");
                redirect(base_url()."Distributor/InvoiceSuccess");
            }		
        
        
       //$this->load->view("distributors/invoiceSuccess");
       $this->load->view("footer");
    }   
    
        /*Invoice Generated end */
        
    public function InvoiceSuccess(){
        $this->load->view("header");
       $this->load->view("tabheader");
        $this->load->view("distributors/invoiceSuccessview");
        $this->load->view("footer");
        
    }
    
    
    

    
    public function Shipment($id){
         $this->load->view("header");
       $this->load->view("tabheader");
//        echo "<pre>";
//        print_r($_POST); die; 
       $status=$this->DistributororderModel->updateShipmentStatus($id);
        if($status == true){
                
                $add_Shipment=array(
                        "distorder_Id" => $this->input->post("distorder_Id"),
                        "distributor_Id" => $this->input->post("distributor_Id"),
                        "same_Shipping" =>$this->input->post("same_Shipping"),
                        "shipnew_Name" => $this->input->post("shipnew_Name"),
                        "shipnew_Address" => $this->input->post("shipnew_Address"),
                        "shipping_To" => $this->input->post("shipping_To"),
                        "shipping_Through" => $this->input->post("shipping_Through"),
                        "shipping_Date" => $this->input->post("shipping_Date"),
                        "shippinggenerate_Date" => now(),
                        "shipment_Status" =>1
			     );
			
			$add_Shipment=xss_clean($add_Shipment);
			$status=$this->DistributororderModel->addShipment($add_Shipment);
			
			if($status == true){
						$this->session->set_tempdata("upd_succ","Shipment has generated success!");
						redirect(base_url()."Distributor/ShipmentSuccess");
				}else{
						 $this->session->set_tempdata("upd_fail","Shipment has not generated");
						redirect(base_url()."Distributor/ShipmentSuccess");
				}
            
            
        }else {
             $this->session->set_tempdata("upd_fail","Shipment has not generated");
            redirect(base_url()."Distributor/ShipmentSuccess");
        }
        
//        
//        if($status == true){
//            echo "Success"; die; 
////                $this->session->set_tempdata("upd_succ","Invoice has generated success and sent to distributor!");
////                redirect(base_url()."Distributor/ShipmentSuccess");
//            }else{
////                $this->session->set_tempdata("upd_fail","Invoice has not generated");
////                redirect(base_url()."Distributor/ShipmentSuccess");
//            echo "Fail"; die; 
//            }		
//        
        
       //$this->load->view("distributors/invoiceSuccess");
       $this->load->view("footer");
    }
   
    public function ShipmentSuccess(){
        $this->load->view("header");
       $this->load->view("tabheader");
        $this->load->view("distributors/shipmentSuccessview");
        $this->load->view("footer");
    }

    function dist_Details($id){
            $result=$this->db->query("SELECT * FROM distributor 
                                    INNER JOIN city ON distributor.distcity_Id = city.city_Id
                                    INNER JOIN state ON distributor.diststate_Id = state.state_Id
                                    where distributor.distributor_Id=$id");

                if($result->num_rows()>0) {
                      $arr = array('distributor_info' => $result->result());
	    		      echo json_encode($arr);
                }else {
                         return false; 
                }	
    }

    function productDetails($id){
                            $result=$this->db->query("SELECT * FROM products 
                                            INNER JOIN brand ON products.brand_Id = brand.brand_Id
                                            INNER JOIN category on products.cat_Id = category.category_Id
                                            INNER JOIN subcategory on products.subcat_Id = subcategory.subcat_Id
                                            INNER JOIN producthsn on products.product_Hsn = producthsn.producthsn_Id
                            where products.product_Id=$id");


                    if($result->num_rows()>0) {
                        $arr = array('product_info' => $result->result());
                        echo json_encode($arr);
                    }else {
                        return false; 
                    }	
    }

    public function product_Details($id){
        $result=$this->db->where("product_Id",$id)->get("products")->result();
        // $arr = array('prod' => $result);
		// echo json_encode($arr);
		echo json_encode($result);
    }
}
?>