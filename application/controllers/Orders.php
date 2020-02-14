<?php
class Orders extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security"));
        $this->load->library("session");
        $this->load->model("distributor/DistributororderModel");
        $this->load->model("dealers/DistributorModel");
        $this->load->helper("url");
        $this->load->database();
    }

    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['total_Orders'] = $this->DistributororderModel->viewtotalOrders();
        // echo "<pre>";
        // print_r($data['total_Orders']); die; 
        $this->load->view("Ordersview",$data);
    }

    public function distributor(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->view("orders/distributor/addorder");
        $this->load->view("footer");
    }
    
    public function Shipment(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['shiporders'] = $this->DistributorModel->viewshipments();
//        echo "<pre>";
//        print_r($data['shiporders']); die; 
        $this->load->view("distributors/shipmentView",$data);
        $this->load->view("footer");
    }
    
    public function shipInvoice($id){
         $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['ship'] = $this->DistributorModel->viewShip($id);
        $data['products'] = $this->DistributorModel->viewProducts($id);
//        echo "<pre>";
//        print_r($data['products']); die; 
        $this->load->view("distributors/shipinvoiceView",$data);
        $this->load->view("footer");
    }

       public function Listorders(){
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("sidebar");
        //$data['distorders']=$this->DistorderModel->viewOrders();
//         echo "<pre>";
//         print_r($data['distorders']); die; 
        $this->load->view("distributors/distorderview");
        $this->load->view("footer");
    }
    
        public function getgeneratebyDet(){
//        echo "<pre>";
//        print_r($_POST); 
        $id = $this->input->post("genId");
        $query = $this->db->query("select * from users where id= $id");
        $res = $query->row();
        echo json_encode($res);
    }
  
}
?>