<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set("Asia/Calcutta"); 

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array("form","url","cookie","date"));
		$this->load->library(array("form_validation","session"));
		$this->load->model("Loginmodel");
		$this->load->database();
	}

	public function index(){

		/*if(isset($_POST['loginSubmit'])){
			echo "<pre>";
			print_r($_POST); die; 


		}*/
		if(isset($_POST['loginSubmit'])){
				$this->form_validation->set_rules("email","Email","required|trim");
				$this->form_validation->set_rules("password","Password","required|trim");

				if($this->form_validation->run()==true){
					$email=$this->input->post("email");
					$pwd=$this->input->post("password");
					$pwd1=md5($pwd);

					$status=$this->Loginmodel->checkData($email);

					if($status){
							if($status->password == $pwd1){
								
								$data = array(
									'id'        => $status->id,
									'email'  => $status->email,
								    'userrole' => $status->user_role_id,
								);
								$this->session->set_userdata($data);

							
								$this->db->where('id',$status->id);
								$this->db->update('admin', array('lastLogin'=> now()));



								$remember=$this->input->post("remember");
						if($remember){
								$cookie1= array( 
								'name'   => 'email',
								'value'  => $email,
								'expire' => time()+(10 * 365 * 24 * 60 * 60),
								);
							$this->input->set_cookie($cookie1);
							
							$cookie2= array( 
								'name'   => 'password',
								'value'  => $pwd,
								'expire' => time()+(10 * 365 * 24 * 60 * 60),
								);
 
							$this->input->set_cookie($cookie2);
							
							 $this->input->cookie('email'); 
							 $this->input->cookie('password');
							
							
							//setcookie("uname", $_POST['uname'], time()+(10 * 365 * 24 * 60 * 60));
							//setcookie("pwd", $_POST['pwd'], time()+(10 * 365 * 24 * 60 * 60));
						}else{
							//if(isset($_COOKIE['uname'])){
							if(get_cookie('email')){
							$this->input->cookie('email',"");
								//setcookie("uname", "");
								
								//echo "Cookie User Name Set"; 
							}
							if(get_cookie('password')){
								$this->input->cookie('password',"");
								//setcookie("pwd", "");
							}
						} 
							
						sleep(2);
					switch($status->user_role_id){
							case 1: redirect(base_url()."Home",'refresh');
										 break;
							case 2: redirect(base_url()."Crm", 'refresh');
                                                            break;		 
							case 3:	redirect(base_url()."Distributors",'refresh');
									 break;		
							case 4:	redirect(base_url()."Retailer",'refresh');
									 break;
							case 5:	redirect(base_url()."Plant_Dashboard",'refresh');
									 break;
                            case 7:	redirect(base_url()."Asp",'refresh');
									 break;
                            case 9: redirect(base_url()."Coordinate",'refresh');
                                    break;
                            case 8: redirect(base_url()."ServiceEngineer",'refresh');
                                    break;
							default: echo "No role assigned";
					}

							}else {
								$this->session->set_tempdata("pwd_error","Wrong Details",2);
								redirect(base_url()."login");
							}
					}else {
						$this->session->set_tempdata("username_error","Wrong Details",2);
						redirect(base_url()."login");
					}
				}
		}
		$this->load->view("Loginview"); 
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url()."login");
	}
}
?>