<?php 
class Distributors extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","date","security"));
        $this->load->library("session");
        $this->load->model("distributor/DistributororderModel");
        $this->load->model("product/ProductModel");
         $this->load->model("dealers/DistributorModel");
        $this->load->library(array("form_validation","session"));
        $this->load->database();
    }
    public function index(){    
        $this->load->view("header");
        $this->load->view("distributor/distributor_header");
        $this->load->view("distributor/distributor_dashboard_view");
    }

    public function orders(){
        $this->load->view("header");
        $this->load->view("distributor/distributor_header");
        $data['orders'] = $this->DistributororderModel->viewOrders();
        $this->load->view("distributor/ordersView",$data);
        $this->load->view("footer");
    }

    public function neworder(){
        $this->load->view("header");
        $this->load->view("distributor/distributor_header");
        $data['distributor'] = $this->DistributororderModel->distributorDetails();
        $data['products']=$this->ProductModel->viewProducts();
        $this->form_validation->set_rules("invoice_Date","Invocie Date","required|trim");

        if($this->form_validation->run()==true){
                        $add_Order=array(
                            "distributor_Id"=>$this->input->post("distributor_Name"),
                            "same_Shipping"=>$this->input->post("same_Shipping"),
                            "shipping_Personname"=>$this->input->post("shipping_Personname"),
                            "shipping_Address"=>$this->input->post("shipping_Address"),
                            "invoice_Date"=>$this->input->post("invoice_Date"),
                            "invocie_RefNumber"=>$this->input->post("invocie_RefNumber"),
                            "invoice_Due"=>$this->input->post("invoice_Due"),
                            "delivery_Date"=>$this->input->post("delivery_Date"),
                            "final_Result"=>$this->input->post("final_Result"),
                            "order_By"=> $this->input->post("order_By"),
                            "ordergenerate_Date"=>now()
                            
                        );
                        
                        $add_Order=xss_clean($add_Order);
                        for($i=0; $i < count($_POST['product_Name']); $i++ ) {
                                $pur['product_Id'][]=  $_POST['product_Id'][$i];
                                $pur['product_Name'][]=  $_POST['product_Name'][$i];
                                $pur['product_HSN'][]=  $_POST['product_HSN'][$i];
                                $pur['product_Qty'][]=  $_POST['product_Qty'][$i];
                                $pur['product_Unitprice'][]=  $_POST['product_Unitprice'][$i];
                                $pur['product_Value'][]=  $_POST['product_Value'][$i];
                                $pur['product_GST'][]=  $_POST['product_GST'][$i];
                                $pur['inputGST'][]=  $_POST['inputGST'][$i];
                                $pur['product_Discount'][]=  $_POST['product_Discount'][$i];
                                $pur['inputDiscount'][]=  $_POST['inputDiscount'][$i];
                                $pur['product_Total'][]=  $_POST['product_Total'][$i];
                        } 
                
                        $status=$this->DistributororderModel->addOrder($add_Order,$pur);
                        if($status==true)
                        {
                                $this->session->set_tempdata("add_success","New Order Added Successfully",2);
                                redirect(base_url()."Distributors/neworder");
                        }
                        else
                        {
                                $this->session->set_tempdata("add_fail","Umable to Add new order",2);
                                redirect(base_url()."Distributors/neworder");
                        }


        }else {
        $this->load->view("distributor/neworderView",$data);
        }
        $this->load->view("footer");
    }
    
     public function orderView($id){
        $this->load->view("header");
        $this->load->view("distributor/distributor_header");
       $data['order'] = $this->DistributororderModel->orderDetail($id);
       $data['products'] = $this->DistributororderModel->productDetail($id);
       $this->load->view("distributor/distorderView",$data);
       $this->load->view("footer");
   }
   
   public function shipment(){
    $this->load->view("header");
    $this->load->view("distributor/distributor_header");
    $data['shipments']  = $this->DistributororderModel->viewshipments();
    // echo "<pre>";
    // print_r($data['shipments']); die; 
    $this->load->view("distributor/shipmentView",$data);
    $this->load->view("footer");
   }
   
    public function shipInvoice($id){
    $this->load->view("header");
    $this->load->view("distributor/distributor_header");
    $data['ship'] = $this->DistributorModel->viewShip($id);
    $data['products'] = $this->DistributorModel->viewProducts($id);
    $this->load->view("distributor/shipinvoiceView",$data);
    $this->load->view("footer");
   }
}
?>