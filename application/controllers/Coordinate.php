<?php 
class Coordinate extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->database();
    }
    
    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->view("coordinate/coordinateview");
        $this->load->view("footer");
    }
}
?>