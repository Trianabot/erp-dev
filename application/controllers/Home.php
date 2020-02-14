<?php
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library(array("form_validation","session"));
	}
    public function index(){
    	$this->load->view("header");
        $this->load->view("Homeview");
    }
}
?>