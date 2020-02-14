<?php
class Dealers extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security"));
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->model("dealers/StateModel");
        $this->load->model("dealers/DistModel");
        $this->load->model("dealers/SubdistModel");
        $this->load->model("dealers/CityModel");
        $this->load->model("dealers/DistributorModel");
        $this->load->model("dealers/RetailerModel");
        $this->load->library("form_validation");
        $this->load->database();
    }

    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("Dealersview");
    }

    public function State(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['states']=$this->StateModel->viewStates();
        $this->load->view("Dealers/state/stateview",$data);
        $this->load->view("footer");
    }

    public function addState(){
        $this->load->view("header");
        $this->load->view("tabheader");

        $this->form_validation->set_rules("state_Name","State Name","required|trim");

        if($this->form_validation->run()==true){
            $add_state=array(
				"state_Name"=>$this->input->post("state_Name"),
			);
			
			$add_state=xss_clean($add_state);
			$status=$this->StateModel->addState($add_state);			
				if($status==true)
				{
						$this->session->set_tempdata("add_success","State Added Successfully",2);
						redirect(base_url()."Dealers/addState");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add state",2);
						redirect(base_url()."Dealers/addState");
				}
        }else {

        $this->load->view("Dealers/state/addstateView");
        }
        $this->load->view("footer");
    }

    public function editState($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['state']=$this->StateModel->editSta($id);

        $this->form_validation->set_rules("state_Name","State Name","required|trim");
		if($this->form_validation->run()==true) 
		{
			$edit_state=array(
				"state_Name"=>$this->input->post("state_Name"),
			);
			
			$edit_state=xss_clean($edit_state);
			
			$status=$this->StateModel->updateState($edit_state,$id);
			
			if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Updated Successfully",2);
					redirect(base_url()."Dealers/editState/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Dealers/editState/".$id);
				}
		} 
		else 
		{
        $this->load->view("Dealers/state/editstateView",$data);
        }
        $this->load->view("footer");
    }

    public function deleteState($id){
        $this->db->query("update state set status='0' where state_Id=$id");	
		if($this->db->affected_rows()>0) 
		{
            redirect(base_url()."Dealers/State");
		} 
		else
		 {
		 redirect(base_url()."Dealers/State");
		 }
    }

    //District Section
    public function District(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['districts']=$this->DistModel->viewdistricts();
        // echo "<pre>";
        // print_r($data['districts']); die; 
        $this->load->view("Dealers/district/distrctview",$data);
        $this->load->view("footer");
    }

    public function addDistrict(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['states']=$this->StateModel->viewStates();

        $this->form_validation->set_rules("dist_name","District Name","required|trim");

		if($this->form_validation->run()==true) {
			$add_District=array(
				"state_Id"=>$this->input->post("state_Name"),
				"dist_name"=>$this->input->post("dist_name"),
			);
			
			$add_District=xss_clean($add_District);
			$status=$this->DistModel->addDistrict($add_District);
			
			if($status==true){
						$this->session->set_tempdata("add_success","District Added Successfully",2);
						redirect(base_url()."Dealers/addDistrict");
				}else{
						$this->session->set_tempdata("add_fail","District Umable to Add",2);
						redirect(base_url()."Products/addSubCategory");
				}
				
		}
		 else{
             $this->load->view("Dealers/district/adddistrctview",$data);
        }
        $this->load->view("footer");
    }

    public function editDistrict($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['states']=$this->StateModel->viewStates();
        $data['district']=$this->DistModel->editDist($id);
        $this->form_validation->set_rules("dist_name","District Name","required|trim");

		if($this->form_validation->run()==true){
			$update_District=array(
				"state_Id"=>$this->input->post("state_Name"),
				"dist_name"=>$this->input->post("dist_name"),
			);
			
			$update_District=xss_clean($update_District);
			$status=$this->DistModel->updateDistrict($update_District,$id);
			
			if($status==true){
					$this->session->set_tempdata("upd_succ","Updated Successfully",2);
					redirect(base_url()."Dealers/editDistrict/".$id);
				}else{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Dealers/editDistrict/".$id);
				}				
		}
		 else{
            $this->load->view("Dealers/district/editdistrictView",$data);
        }
        $this->load->view("footer");
    }

    public function deleteDistrict($id){

        $this->db->query("update district set status='0' where dist_Id=$id");	
		if($this->db->affected_rows()>0) {
            redirect(base_url()."Dealers/District");
		}else{
		 redirect(base_url()."Dealers/District");
         }
         
    }

    public function dist($id){
        $result=$this->db->where("state_Id",$id)->get("district")->result();
		echo json_encode($result);
    }

    public function Subdist($id){
        $array = array('dist_Id' => $id, 'status' => 1);
        $result=$this->db->where($array)->get("subdistrict")->result();
      
		echo json_encode($result);
    }

    public function Subdistrict(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['subdistricts']=$this->SubdistModel->viewsubdistricts();
        $this->load->view("Dealers/subdistrict/subdistrictview",$data);
        $this->load->view("footer");
    }

    public function addsubDistrict(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['states']=$this->StateModel->viewStates();
        $data['districts']=$this->DistModel->viewdistricts();

        $this->form_validation->set_rules("subdist_name","Sub District Name","required|trim");

		if($this->form_validation->run()==true) {
			$add_Subdistrict=array(
				"state_Id"=>$this->input->post("state_Name"),
                "dist_Id"=>$this->input->post("dist_Name"),
                "subdist_Name"=>$this->input->post("subdist_name")
			);
			
			$add_Subdistrict=xss_clean($add_Subdistrict);
			$status=$this->SubdistModel->addSubdistrict($add_Subdistrict);
			
			if($status==true){
						$this->session->set_tempdata("add_success","Sub District Added Successfully",2);
						redirect(base_url()."Dealers/addsubDistrict");
				}else{
						$this->session->set_tempdata("add_fail","Sub District Umable to Add",2);
						redirect(base_url()."Products/addsubDistrict");
				}
				
		}
		 else{
        $this->load->view("Dealers/subdistrict/addsubdistrictview",$data);
         }
        $this->load->view("footer");
    }

    public function editSubdistrct($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['subdist']=$this->SubdistModel->edistsubDist($id);
        // echo "<pre>";
        // print_r($data['subdist']); die; 
        $data['states']=$this->StateModel->viewStates();
        $data['districts']=$this->DistModel->viewdistricts();
        // echo "<pre>";
        // print_r($data['districts']); die; 
        $this->form_validation->set_rules("subdist_name","Sub District Name","required|trim");

		if($this->form_validation->run()==true) {
			$edit_Subdistrict=array(
				"state_Id"=>$this->input->post("state_Name"),
                "dist_Id"=>$this->input->post("dist_Name"),
                "subdist_Name"=>$this->input->post("subdist_name")
			);
			
			$edit_Subdistrict=xss_clean($edit_Subdistrict);
            $status=$this->SubdistModel->updateSubdistrict($edit_Subdistrict,$id);
            
			if($status==true){
                $this->session->set_tempdata("upd_succ","Updated Successfully",2);
                redirect(base_url()."Dealers/editSubdistrct/".$id);
            }else{
                $this->session->set_tempdata("upd_fail","Updated Fail");
                redirect(base_url()."Dealers/editSubdistrct/".$id);
            }		
				
		}
		 else{
        $this->load->view("Dealers/subdistrict/editsubdistrictView",$data);
         }
        $this->load->view("footer");
    }

    public function deleteSubdistrct($id){
        $this->db->query("update subdistrict set status='0' where subdist_Id=$id");	
		if($this->db->affected_rows()>0) {
            redirect(base_url()."Dealers/Subdistrict");
		}else{
		 redirect(base_url()."Dealers/Subdistrict");
         }
    }

    //City Section

    public function City(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['cities']=$this->CityModel->viewCities();
        // echo "<pre>";
        // print_r($data['cities']); die; 
        $this->load->view("Dealers/city/cityview",$data);
        $this->load->view("footer");
    }

    public function addCity(){
        $this->load->view("header");
        $this->load->view("tabheader");

        $data['states']=$this->StateModel->viewStates();
        $data['districts']=$this->DistModel->viewdistricts();
        $data['subdistricts']=$this->SubdistModel->viewsubdistricts();

        $this->form_validation->set_rules("city_Name","City Name","required|trim");

		if($this->form_validation->run()==true) {
			$add_City=array(
				"state_Id"=>$this->input->post("state_Name"),
                "dist_Id"=>$this->input->post("dist_Name"),
                "subdist_Id"=>$this->input->post("subdist_Name"),
                "city_Name"=>$this->input->post("city_Name")
			);
			
			$add_City=xss_clean($add_City);
			$status=$this->CityModel->addCity($add_City);
			
			if($status==true){
						$this->session->set_tempdata("add_success","City Added Successfully",2);
						redirect(base_url()."Dealers/addCity");
				}else{
						$this->session->set_tempdata("add_fail","City Umable to Add",2);
						redirect(base_url()."Dealers/addCity");
				}
				
		}
		 else{
        $this->load->view("Dealers/city/addcityview",$data);
         }
        $this->load->view("footer");
    }
  
    public function editCity($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['city']=$this->CityModel->editCity($id);
        $data['states']=$this->StateModel->viewStates();
        $data['districts']=$this->DistModel->viewdistricts();
        $data['subdistricts']=$this->SubdistModel->viewsubdistricts();
       
        $this->form_validation->set_rules("city_Name","City Name","required|trim");

		if($this->form_validation->run()==true) {
			$edit_City=array(
				"state_Id"=>$this->input->post("state_Name"),
                "dist_Id"=>$this->input->post("dist_Name"),
                "subdist_Id"=>$this->input->post("subdist_Name"),
                "city_Name"=>$this->input->post("city_Name")
			);
			
			$edit_City=xss_clean($edit_City);
			$status=$this->CityModel->updateCity($edit_City,$id);
			
            if($status==true){
                $this->session->set_tempdata("upd_succ","Updated Successfully",2);
                redirect(base_url()."Dealers/editCity/".$id);
            }else{
                $this->session->set_tempdata("upd_fail","Updated Fail");
                redirect(base_url()."Dealers/editCity/".$id);
            }			
				
		}
		 else{
        $this->load->view("Dealers/city/editcityview",$data);
         }
        $this->load->view("footer");
    }

    public function deleteCity($id){
        $this->db->query("update city set status='0' where city_Id=$id");	
		if($this->db->affected_rows()>0) {
            redirect(base_url()."Dealers/City");
		}else{
		 redirect(base_url()."Dealers/City");
         }
    }


    public function distributor(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['distributors']=$this->DistributorModel->viewDistributors();
        // echo "<pre>";
        // print_r($data['distributors']); die; 
        $this->load->view("Dealers/distributor/distributorView",$data);
        $this->load->view("footer");
    }

    public function distributorHistory(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("Dealers/distributor/distributorHist");
        $this->load->view("footer");
    }

    public function addDistributor(){
        
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['states']=$this->StateModel->viewStates();
        
        $this->form_validation->set_rules("comporganization_Name","Company/Organisation Name","required|trim");
        $this->form_validation->set_rules("contact_Person","Contact Person","required|trim");
        $this->form_validation->set_rules("dist_Mobile","Mobile Number","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
        $this->form_validation->set_rules("dist_Email","Email","required|valid_email|trim");
        $this->form_validation->set_rules("dist_Password","Password","required|trim");
        $this->form_validation->set_rules("diststate_Name","Select","required|callback_select_validate"); 
        $this->form_validation->set_rules("dist_Bank","Select","required|callback_select_validate1"); 
        $this->form_validation->set_rules("dist_Address1","Address 1","required|trim");
        $this->form_validation->set_rules("dist_Address2","Address 2","required|trim");
        

        $this->form_validation->set_rules("dist_GSTIN","GSTIn","required|trim"); 
        $this->form_validation->set_rules("dist_PAN","PAN","required|trim");
        $this->form_validation->set_rules("dist_Pincode","Pin Code","required|trim");
        
        $this->form_validation->set_rules("dist_Account","Account Number","required|numeric|trim");
          $this->form_validation->set_rules("dist_IFSC","IFSC","required|trim");
        if($this->form_validation->run()==true) {
              
            $addDistributor=array(
                "comporganization_Name"=>$this->input->post("comporganization_Name"),
                "contact_Person"=>$this->input->post("contact_Person"),
                "dist_Mobile"=>$this->input->post("dist_Mobile"),
                "dist_Email"=>$this->input->post("dist_Email"),
                "dist_Password"=>md5($this->input->post("dist_Password")),
                "diststate_Id"=>$this->input->post("diststate_Name"),	
                "distcity_Id"=>$this->input->post("distcity_Name"),
                "dist_Address1"=>$this->input->post("dist_Address1"),
                "dist_Address2"=>$this->input->post("dist_Address2"),
                "dist_Pincode"=>$this->input->post("dist_Pincode"),
                "dist_GSTIN"=>$this->input->post("dist_GSTIN"),
                "dist_PAN"=>$this->input->post("dist_PAN"),
                "dist_Bank"=>$this->input->post("dist_Bank"),	
                "dist_Account"=>$this->input->post("dist_Account"),
                "dist_IFSC"=>$this->input->post("dist_IFSC"),
            );

            $addDistributor=xss_clean($addDistributor);			
            $status=$this->DistributorModel->addDistributor($addDistributor);			
            if($status==true)
            {
            $this->session->set_tempdata("add_success","Distributor Added Successfully",2);
            redirect(base_url()."Dealers/addDistributor");
            }
            else
            {
            $this->session->set_tempdata("add_error","Sorry! Unable to Add Distributor",2);
            redirect(base_url()."Dealers/addDistributor");
            }



        }else {
            $this->load->view("Dealers/distributor/adddistributorView",$data);
        }
        $this->load->view("footer");
    }

    public function editDistributor($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['states']=$this->StateModel->viewStates();
        $data['distributor']=$this->DistributorModel->editDistributor($id);

        $this->form_validation->set_rules("comporganization_Name","Company/Organisation Name","required|trim");
        $this->form_validation->set_rules("contact_Person","Contact Person","required|trim");
        $this->form_validation->set_rules("dist_Mobile","Mobile Number","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
        $this->form_validation->set_rules("dist_Email","Email","required|valid_email|trim");
        $this->form_validation->set_rules("dist_Password","Password","required|trim");
        $this->form_validation->set_rules("diststate_Name","Select","required|callback_select_validate"); 
        $this->form_validation->set_rules("dist_Bank","Select","required|callback_select_validate1"); 
        $this->form_validation->set_rules("dist_Address1","Address 1","required|trim");
        $this->form_validation->set_rules("dist_Address2","Address 2","required|trim");
        
        $this->form_validation->set_rules("dist_GSTIN","GSTIn","required|trim"); 
        $this->form_validation->set_rules("dist_PAN","PAN","required|trim");
        $this->form_validation->set_rules("dist_Pincode","Pin Code","required|trim");
        
        $this->form_validation->set_rules("dist_Account","Account Number","required|numeric|trim");
          $this->form_validation->set_rules("dist_IFSC","IFSC","required|trim");
        if($this->form_validation->run()==true) {
              
            $edit_Distributor=array(
                "comporganization_Name"=>$this->input->post("comporganization_Name"),
                "contact_Person"=>$this->input->post("contact_Person"),
                "dist_Mobile"=>$this->input->post("dist_Mobile"),
                "dist_Email"=>$this->input->post("dist_Email"),
                "dist_Password"=>md5($this->input->post("dist_Password")),
                "diststate_Id"=>$this->input->post("diststate_Name"),	
                "distcity_Id"=>$this->input->post("distcity_Name"),
                "dist_Address1"=>$this->input->post("dist_Address1"),
                "dist_Address2"=>$this->input->post("dist_Address2"),
                "dist_Pincode"=>$this->input->post("dist_Pincode"),
                "dist_GSTIN"=>$this->input->post("dist_GSTIN"),
                "dist_PAN"=>$this->input->post("dist_PAN"),
                "dist_Bank"=>$this->input->post("dist_Bank"),	
                "dist_Account"=>$this->input->post("dist_Account"),
                "dist_IFSC"=>$this->input->post("dist_IFSC"),
            );

            $edit_Distributor=xss_clean($edit_Distributor);			
            $status=$this->DistributorModel->updateDistributor($edit_Distributor,$id);			
            if($status==true)
            {
                $this->session->set_tempdata("upd_succ","Updated Successfully",2);
                redirect(base_url()."Dealers/editDistributor/".$id);
            }
            else
            {
                $this->session->set_tempdata("upd_fail","Updated Fail");
                redirect(base_url()."Dealers/editDistributor/".$id);
            }



        }else {
        $this->load->view("Dealers/distributor/editdistributorView",$data);
        }
        $this->load->view("footer");
    }


    public function deleteDistributor($id){
		$this->db->query("update distributor set distributor_Status='0' where distributor_Id=$id");	
		if($this->db->affected_rows()>0) {
                redirect(base_url()."Dealers/distributor");
		} else{
		        redirect(base_url()."Dealers/distributor");
		 }
    }
    

    public function distCity($id){
        $result=$this->db->where("state_Id",$id)->get("city")->result();
		echo json_encode($result);
    }

    
    public function retailerCity($id){
        $result=$this->db->where("state_Id",$id)->get("city")->result();
		echo json_encode($result);
    }

    function select_validate($selectValue){
        if($selectValue == ''){
            $this->form_validation->set_message('select_validate', 'Please pick state.');
            return false;
        }else{
            return true;
        }
    }

    function select_validate1($selectValue){
        if($selectValue == ''){
            $this->form_validation->set_message('select_validate1', 'Please pick bank.');
            return false;
        }else{
            return true;
        }
    }

    public function retailer(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['retailers'] = $this->RetailerModel->viewRetailers();
        // echo "<pre>";
        // print_r($data['retailers']); die; 
        $this->load->view("Dealers/retailer/retailerView",$data);
        $this->load->view("footer");
    }

    public function addRetailer(){

        $this->load->view("header");
        $this->load->view("tabheader");
        $data['states']=$this->StateModel->viewStates();
        $data['distributors'] = $this->RetailerModel->viewDistributors();

        // $this->form_validation->set_rules("comporganization_Name","Company/Organisation Name","required|trim");
        // $this->form_validation->set_rules("contact_Person","Contact Person","required|trim");
        // $this->form_validation->set_rules("retailer_Mobile","Mobile Number","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
        // $this->form_validation->set_rules("retailer_Email","Email","required|valid_email|trim");
        // $this->form_validation->set_rules("retailer_State","Select","required|callback_selectstate_validate"); 
        // $this->form_validation->set_rules("retailer_Bank","Select","required|callback_selectbank_validate1"); 
        // $this->form_validation->set_rules("retailer_Address1","Address 1","required|trim");
        // $this->form_validation->set_rules("retailer_Address2","Address 2","required|trim");
        // $this->form_validation->set_rules("retailer_GSTIN","GSTIn","required|trim"); 
        // $this->form_validation->set_rules("retailer_PAN","PAN","required|trim");
        // $this->form_validation->set_rules("retailer_Pin","Pin Code","required|trim");
        
        $this->form_validation->set_rules("retailer_Account","Account Number","required|numeric|trim");
        $this->form_validation->set_rules("retailer_IFSC","IFSC","required|trim");

        if($this->form_validation->run()==true) {
           
            $addRetailer = array(

                "dist_Id"=>$this->input->post("dist_Name"),
                "retailercompany_Name"=>$this->input->post("comporganization_Name"),
                "retailercontact_Person"=>$this->input->post("contact_Person"),
                "retailer_Mobile"=>$this->input->post("retailer_Mobile"),
                "retailer_Email"=>$this->input->post("retailer_Email"),
                "retailerState_Id"=>$this->input->post("retailer_State"),	
                "retailerCity_Id"=>$this->input->post("retailer_City"),
                "retailer_Address1"=>$this->input->post("retailer_Address1"),
                "retailer_Address2"=>$this->input->post("retailer_Address2"),
                "retailer_Pin"=>$this->input->post("retailer_Pin"),
                "retailer_GSTIN"=>$this->input->post("retailer_GSTIN"),
                "retailer_PAN"=>$this->input->post("retailer_PAN"),
                "retailer_Bank"=>$this->input->post("retailer_Bank"),	
                "retailer_Account"=>$this->input->post("retailer_Account"),
                "retailer_IFSC"=>$this->input->post("retailer_IFSC"),
            );

            $addRetailer = xss_clean($addRetailer);			
            $status=$this->RetailerModel->addRetailer($addRetailer);			
            if($status==true)
            {
                $this->session->set_tempdata("add_success","Retailer Added Successfully",2);
                redirect(base_url()."Dealers/addRetailer");
            }
            else
            {
                $this->session->set_tempdata("add_error","Sorry! Unable to Add Retailer",2);
                redirect(base_url()."Dealers/addRetailer");
            }



        }else {
        $this->load->view("Dealers/retailer/addretailerView",$data);
        }
        $this->load->view("footer");
    }

    public function editRetailer($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['states']=$this->StateModel->viewStates();
        $data['distributors'] = $this->RetailerModel->viewDistributors();
        $data['retailer'] = $this->RetailerModel->editRetailer($id);
        

        $this->form_validation->set_rules("retailer_Account","Account Number","required|numeric|trim");
        $this->form_validation->set_rules("retailer_IFSC","IFSC","required|trim");

        if($this->form_validation->run()==true) {
           
            $edit_Retailer = array(

                "dist_Id"=>$this->input->post("dist_Name"),
                "retailercompany_Name"=>$this->input->post("comporganization_Name"),
                "retailercontact_Person"=>$this->input->post("contact_Person"),
                "retailer_Mobile"=>$this->input->post("retailer_Mobile"),
                "retailer_Email"=>$this->input->post("retailer_Email"),
                "retailerState_Id"=>$this->input->post("retailer_State"),	
                "retailerCity_Id"=>$this->input->post("retailer_City"),
                "retailer_Address1"=>$this->input->post("retailer_Address1"),
                "retailer_Address2"=>$this->input->post("retailer_Address2"),
                "retailer_Pin"=>$this->input->post("retailer_Pin"),
                "retailer_GSTIN"=>$this->input->post("retailer_GSTIN"),
                "retailer_PAN"=>$this->input->post("retailer_PAN"),
                "retailer_Bank"=>$this->input->post("retailer_Bank"),	
                "retailer_Account"=>$this->input->post("retailer_Account"),
                "retailer_IFSC"=>$this->input->post("retailer_IFSC"),
            );

            $edit_Retailer = xss_clean($edit_Retailer);			
            $status=$this->RetailerModel->updateRetailer($edit_Retailer,$id);			
            if($status==true)
            {
                $this->session->set_tempdata("upd_succ","Updated Successfully",2);
                redirect(base_url()."Dealers/editRetailer/".$id);
            }
            else
            {
                $this->session->set_tempdata("upd_fail","Updated Fail");
                redirect(base_url()."Dealers/editRetailer/".$id);
            }



        }else {
        $this->load->view("Dealers/retailer/editretailerView",$data);
        }
        $this->load->view("footer");
    }

    public function deleteRetailer($id){
        $this->db->query("update retailer set retailer_Status='0' where retailer_Id=$id");	
		if($this->db->affected_rows()>0) {
                redirect(base_url()."Dealers/retailer");
		} else{
		        redirect(base_url()."Dealers/retailer");
		 }
    }

    public function retailerHistory(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("Dealers/retailer/retailerhistoryView");
        $this->load->view("footer");
    }
}
?>