<?php
class Service extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security"));
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->database();
    }

    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("Serviceview");
    }

  
}
?>