<?php
class Asps extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security"));
        $this->load->library(array("session","form_validation"));
        $this->load->model("product/BrandModel");
		$this->load->model("product/CategoryModel");
		$this->load->model("product/SubcategoryModel");
		$this->load->model("asps/AspsModel");
        $this->load->helper("url");
        $this->load->database();
    }

    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("Aspsview");
        //$this->load->view("footer");
    }

   

	public function Lists(){
		$this->load->view("header");
		$this->load->view("tabheader");
		$data['asps']=$this->AspsModel->viewAsps();
		 //echo "<pre>";
		 //print_r($data['asps']); die; 
		$this->load->view("asps/AspsView",$data);
		$this->load->view("footer");
    }
    

    public function Employee(){
		$this->load->view("header");
		$this->load->view("tabheader");
		$data['emps']=$this->AspsModel->viewAsps();
		 //echo "<pre>";
		 //print_r($data['asps']); die; 
		$this->load->view("employee/EmployeeView",$data);
		$this->load->view("footer");
    }
    public function users(){
		$this->load->view("header");
		$this->load->view("tabheader");
		$data['users']=$this->AspsModel->users();
		 //echo "<pre>";
		 //print_r($data['asps']); die; 
		$this->load->view("employee/usersView",$data);
		$this->load->view("footer");
    }
    
    public function service_engineer(){
		$this->load->view("header");
		$this->load->view("tabheader");
		$data['se']=$this->AspsModel->viewServiceengineer();
		 //echo "<pre>";
		 //print_r($data['asps']); die; 
		$this->load->view("asps/engineers",$data);
		$this->load->view("footer");
	}

	}
?>