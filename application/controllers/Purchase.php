<?php
class Purchase extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security"));
        $this->load->model("dealers/StateModel");
        $this->load->model("purchase/SupplierModel");
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->library("form_validation");
        $this->load->database();
    }

    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("Purchasesview");
    }

    public function Suppliers(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['suppliers']=$this->SupplierModel->viewSuppliers();
        // echo "<pre>";
        // print_r($data['suppliers']);die; 
        $this->load->view("purchase/supplier/suppliersView",$data);
        $this->load->view("footer");
    }

    public function supplierCity($id){
        $result=$this->db->where("state_Id",$id)->get("city")->result();
		echo json_encode($result);
    }

    public function addSupplier(){
        $this->load->view("header");
        $this->load->view("tabheader");

        $data['states']=$this->StateModel->viewStates();
        
        $this->form_validation->set_rules("supporg_Name","Company/Organisation Name","required|trim");
        $this->form_validation->set_rules("suppcont_Person","Contact Person","required|trim");
        $this->form_validation->set_rules("supp_Mobile","Mobile Number","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
        $this->form_validation->set_rules("supp_Email","Email","required|valid_email|trim");        
        $this->form_validation->set_rules("supp_Address1","Address 1","required|trim");
        $this->form_validation->set_rules("supp_Address2","Address 2","required|trim");
        
        $this->form_validation->set_rules("supp_GSTIN","GSTIn","required|trim"); 
        $this->form_validation->set_rules("supp_PAN","PAN","required|trim");
        $this->form_validation->set_rules("supp_Pincode","Pin Code","required|trim");
        
        $this->form_validation->set_rules("supp_Account","Account Number","required|numeric|trim");
          $this->form_validation->set_rules("supp_IFSC","IFSC","required|trim");
        if($this->form_validation->run()==true) {
              
            $add_Supplier = array(
                "supporg_Name"=>$this->input->post("supporg_Name"),
                "suppcont_Person"=>$this->input->post("suppcont_Person"),
                "supp_Mobile"=>$this->input->post("supp_Mobile"),
                "supp_Email"=>$this->input->post("supp_Email"),
                "suppstate_Id"=>$this->input->post("suppstate_Name"),	
                "suppcity_Id"=>$this->input->post("suppcity_Name"),
                "supp_Address1"=>$this->input->post("supp_Address1"),
                "supp_Address2"=>$this->input->post("supp_Address2"),
                "supp_Pincode"=>$this->input->post("supp_Pincode"),
                "supp_GSTIN"=>$this->input->post("supp_GSTIN"),
                "supp_PAN"=>$this->input->post("supp_PAN"),
                "supp_Bank"=>$this->input->post("supp_Bank"),	
                "supp_Account"=>$this->input->post("supp_Account"),
                "supp_IFSC"=>$this->input->post("supp_IFSC"),
            );

            $add_Supplier = xss_clean($add_Supplier);			
            $status=$this->SupplierModel->addSupplier($add_Supplier);	

            if($status==true)
            {
            $this->session->set_tempdata("add_success","Supplier Added Successfully",2);
            redirect(base_url()."Purchase/addSupplier");
            }
            else
            {
            $this->session->set_tempdata("add_error","Sorry! Unable to Add Supplier",2);
            redirect(base_url()."Purchase/addSupplier");
            }
            
        }else {
            $this->load->view("purchase/supplier/addsuppliersView",$data);
        }
        $this->load->view("footer");
    }

    public function editSupplier($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $data['states']=$this->StateModel->viewStates();
        $data['supplier'] = $this->SupplierModel->editSupplier($id);
    //    echo "<pre>";
    //    print_r($data['supplier']); die; 
        $this->form_validation->set_rules("supporg_Name","Company/Organisation Name","required|trim");
        $this->form_validation->set_rules("suppcont_Person","Contact Person","required|trim");
        $this->form_validation->set_rules("supp_Mobile","Mobile Number","required|numeric|regex_match[/^[0-9]{10}$/]|trim");
        $this->form_validation->set_rules("supp_Email","Email","required|valid_email|trim");        
        $this->form_validation->set_rules("supp_Address1","Address 1","required|trim");
        $this->form_validation->set_rules("supp_Address2","Address 2","required|trim");
        
        $this->form_validation->set_rules("supp_GSTIN","GSTIn","required|trim"); 
        $this->form_validation->set_rules("supp_PAN","PAN","required|trim");
        $this->form_validation->set_rules("supp_Pincode","Pin Code","required|trim");
        
        $this->form_validation->set_rules("supp_Account","Account Number","required|numeric|trim");
          $this->form_validation->set_rules("supp_IFSC","IFSC","required|trim");
        if($this->form_validation->run()==true) {
              
            $edit_Supplier = array(
                "supporg_Name"=>$this->input->post("supporg_Name"),
                "suppcont_Person"=>$this->input->post("suppcont_Person"),
                "supp_Mobile"=>$this->input->post("supp_Mobile"),
                "supp_Email"=>$this->input->post("supp_Email"),
                "suppstate_Id"=>$this->input->post("suppstate_Name"),	
                "suppcity_Id"=>$this->input->post("suppcity_Name"),
                "supp_Address1"=>$this->input->post("supp_Address1"),
                "supp_Address2"=>$this->input->post("supp_Address2"),
                "supp_Pincode"=>$this->input->post("supp_Pincode"),
                "supp_GSTIN"=>$this->input->post("supp_GSTIN"),
                "supp_PAN"=>$this->input->post("supp_PAN"),
                "supp_Bank"=>$this->input->post("supp_Bank"),	
                "supp_Account"=>$this->input->post("supp_Account"),
                "supp_IFSC"=>$this->input->post("supp_IFSC"),
            );

            $edit_Supplier = xss_clean($edit_Supplier);			
            $status=$this->SupplierModel->updateSupplier($edit_Supplier,$id);	

            if($status==true)
            {
                $this->session->set_tempdata("upd_succ","Updated Successfully",2);
                redirect(base_url()."Purchase/editSupplier/".$id);
            }
            else
            {
                $this->session->set_tempdata("upd_fail","Updated Fail");
                redirect(base_url()."Purchase/editSupplier/".$id);
            }
            
        }else {
        $this->load->view("purchase/supplier/editsuppliersView",$data);
        }
        $this->load->view("footer");
    }

    public function deleteSupplier($id){
        $this->db->query("update supplier set supplier_Status='0' where supplier_Id=$id");	
		if($this->db->affected_rows()>0) {
                redirect(base_url()."Purchase/Suppliers");
		} else{
		        redirect(base_url()."Purchase/Suppliers");
		 }
    }
  
}
?>