<?php
class Schemes extends CI_Controller{

    public function __construct(){
        parent::__construct();
        
        $this->load->helper(array("form","url","security"));
        $this->load->library(array("session","form_validation"));
        $this->load->library('excel');
        $this->load->model("Schemes/schemesModel");
        $this->load->database();
    }
    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['lists'] = $this->schemesModel->viewassignedSchemes();
         $this->load->view("Schemes/schemes_view",$data);
        // $this->load->view("Salesview");
         $this->load->view("footer");
    }
    
    public function createOrder(){
        	if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
			
			$c = 0;//
			$s = "";$preid = "";$r = "";$sad = "";
		      $oid = 20005;
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				
			   
			$town = $filesop[0];
			$dist = $filesop[1];
			$retailer = $filesop[2];
			$scheme = $filesop[3];
			$scheme_assign_date = $filesop[4];
			
			$total_amt = $filesop[5];
			$product_name = $filesop[6];
			$product_qty = $filesop[7];
			$cheque_number = $filesop[8];
			$cheque_amt = $filesop[9];
			
			$cheque_issue_date = $filesop[10];
			$bank_town = $filesop[11];
			$bank_name = $filesop[12];
			$cheque_status = $filesop[13];
			$adv_amt = $filesop[14];
			$exe_mail = $filesop[15];
		
		      
			 
		
		
		
			//$retailer_short = str_split($retailer, 3);
		//	$scod = "SCOD";
		//	$assignDate = date("dmY", strtotime($scheme_assign_date));
		//	$order_id = $scod.$assignDate.$oid;
			//print_r($scheme_assign_date);die;
			//$user_City = $filesop[4];
		
					 
                
				if($c<>0){			
                   if($s == $scheme && $r == $retailer && $sad == $scheme_assign_date){
                       //print_r("same");die;
                       $this->schemesModel->insertOrderProducts($preid,$retailer,$product_name,$product_qty);
                       $this->schemesModel->insertOrderCheques($preid,$exe_mail,$dist,$retailer,$cheque_number,$cheque_amt,$cheque_issue_date,$bank_town,$bank_name,$cheque_status);
                   }else{
                  $this->schemesModel->insertOrder($oid,$exe_mail,$town,$dist,$retailer,$scheme);
		            $this->schemesModel->insertOrderProducts($oid,$retailer,$product_name,$product_qty);
		            $this->schemesModel->insertOrderCheques($oid,$exe_mail,$dist,$retailer,$cheque_number,$cheque_amt,$cheque_issue_date,$bank_town,$bank_name,$cheque_status);
                   }
		            $preid = $oid;
				}
                $c = $c + 1;
                $oid++;
                $s = $scheme;
                $r = $retailer;
                $sad = $scheme_assign_date;
                //echo $c;
			}
			$this->index();
				
		}
    }
    
    public function schmes(){
        $this->load->helper('url');
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->model("Schemes/schemesModel");
        $data['schemes']=$this->schemesModel->getSchemes();
        $data['schemeMembers']=$this->schemesModel->getSchemeMembers();
        // print_r($data['schemes']);die;
         $this->load->view("Schemes/test_view",$data);
        // $this->load->view("Salesview");
         $this->load->view("footer");
    }
    
    public function test1(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
         $this->load->view("Schemes/test1_view");
        // $this->load->view("Salesview");
         $this->load->view("footer");
    }
    
    public function test2(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
         $this->load->view("Schemes/test2view");
        // $this->load->view("Salesview");
         $this->load->view("footer");
    }
    
    
    public function addScheme(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['products'] = $this->schemesModel->viewProducts();
//        echo "<pre>";
//        print_r($data['products']); die; 
        $this->form_validation->set_rules("scheme_name","Scheme Name","required|trim");
		//$this->form_validation->set_rules("product_eligible","Product Eligibility","required|trim");
		$this->form_validation->set_rules("product_qty","Product Qty","required|trim");
		$this->form_validation->set_rules("scheme_duration","Scheme Duration","required|trim"); 
		

		if($this->form_validation->run()==true){

            $scheme_Name = $this->input->post("scheme_name");
            for($i=0; $i<count($_POST['product_eligible']); $i++){
                
                $prod_Name = $_POST['product_eligible'][$i];
                $prodName=str_replace("_"," ",$prod_Name);
               
                $query = $this->db->query("select * from skyzenproducts_master where prod_Name='$prodName'");
                //echo $this->db->last_query();
                $res = $query->result();
                
               
                foreach($res as $r){
                   
                 $unit_Rate = $r->prod_Unitrate; 
                 $prod_Gst = $r->prod_GST;
                    }
                
                $addschemeProduct = array(
                    "product_Eligible" => $prodName,
                    "product_Rate" => $unit_Rate,
                    "product_Gst" => $prod_Gst,
                    "scheme_Name" => $scheme_Name,
                    
                    
                );
                
                $this->db->insert("schemeprod_eligible",$addschemeProduct);
              
            }
          
				$addScheme=array(
					"scheme_name"=>$this->input->post("scheme_name"),
					"product_qty"=>$this->input->post("product_qty"),
					"scheme_duration"=>$this->input->post("scheme_duration"),
					"to_date"=>$this->input->post("to_date"),
				    "status"=>"Active"
				);
                 
				$addScheme=xss_clean($addScheme);			
			$status=$this->schemesModel->newScheme($addScheme);	
			
			
			if($status==true)
			{
			    
			    $this->session->set_flashdata('newscheme_Add','New Scheme Added Successfull !!!!');
                //redirect(base_url()."Crm/asporderShipment/".$voucherNo);
                redirect(base_url()."Schemes/schmes");
                
                
				// 	$this->session->set_tempdata("add_success","Scheme Added Successfully",2);
    //                 redirect(base_url()."Schemes/schmes");
			}
			else
			{
				$this->session->set_tempdata("add_error","Sorry! Unable to Add Scheme",2);
                    redirect(base_url()."Schemes/addScheme");
			}

		} else {
		
         $this->load->view("Schemes/add_schemes",$data);
		}
        // $this->load->view("Salesview");
         $this->load->view("footer");
    }
    
    
    
    	public function createScheme(){
		$this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
	

		$this->form_validation->set_rules("scheme_name","Scheme Name","required|trim");
		$this->form_validation->set_rules("product_eligible","Product Eligibility","required|trim");
		$this->form_validation->set_rules("product_qty","Product Qty","required|trim");
		$this->form_validation->set_rules("scheme_duration","Scheme Duration","required|trim"); 
		

		if($this->form_validation->run()==true){
  
	

				$addScheme=array(
					"scheme_name"=>$this->input->post("scheme_name"),
					"product_eligible"=>$this->input->post("product_eligible"),
					"product_qty"=>$this->input->post("product_qty"),
					"scheme_duration"=>$this->input->post("scheme_duration"),
					"to_date"=>$this->input->post("to_date"),
				    "status"=>"Active"
				);
                 
				$addScheme=xss_clean($addScheme);			
			$status=$this->schemesModel->newScheme($addScheme);	
			echo "<pre>";
                 print_r($status);
			
			if($status==true)
			{
					$this->session->set_tempdata("add_success","Scheme Added Successfully",2);
                    redirect(base_url()."Schemes/schmes");
			}
			else
			{
				$this->session->set_tempdata("add_error","Sorry! Unable to Add Scheme",2);
                    redirect(base_url()."Schemes/addScheme");
			}

		} else {
			$this->load->view("Schemes/add_schemes");
		}
		$this->load->view("footer");
	}
	
public function editScheme($id){
        $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
        
        
        $data['scheme'] = $this->schemesModel->editScheme($id);
        $scheme_Name = $data['scheme']->scheme_name;
        
        $query = $this->db->query("select * from schemeprod_eligible where scheme_Name='$scheme_Name'");
        $resprodEligibles = $query->result();
        
        $prodctname = array();
        
        foreach($resprodEligibles as $eligible){
            $prodctname[] = $eligible->product_Eligible;
        }
        
        $data['prodEligibles'] = $prodctname;
        $data['products'] = $this->schemesModel->viewProducts();

        if(isset($_POST['editschemeSubmit'])){
            
            $query1 = $this->db->query("select * from schemeprod_eligible where scheme_Name='$scheme_Name'");
            $resprodEligibles = $query1->result();
            
            $oldproducts = array();
            foreach($resprodEligibles as $prod){
                $oldproducts[] =  $prod->product_Eligible; 
            }
            
            $newproducts = array();
            
                $newproducts = str_replace('_', ' ', $_POST['product_eligible']);
            
            $result_array=array_diff($newproducts,$oldproducts);
            $result2 = array_intersect($newproducts, $oldproducts);
            
            $final_Result= array_merge($result_array,$result2);
            $this->db->query("delete FROM schemeprod_eligible WHERE scheme_Name ='$scheme_Name' ");
            
            foreach($final_Result as $res){
                $res = $res;
            }
            $i = 0; 
            foreach($final_Result as $res){
                $i++;
                $query = $this->db->query("select * from skyzenproducts_master where prod_Name='$res'");
                $result_prod = $query->result();
                foreach($result_prod as $r){
                   
                $unit_Rate = $r->prod_Unitrate; 
                $prod_Gst = $r->prod_GST; 

                
                $addschemeProduct = array(
                    "product_Eligible" => $res,
                    "product_Rate" => $unit_Rate,
                    "product_Gst" => $prod_Gst,
                    "scheme_Name" => $id
                    
                    
                );

                $this->db->insert("schemeprod_eligible",$addschemeProduct);
                
            }
            }
            
           
            
            
            
            $editScheme= array(
                "product_qty"=> $this->input->post("product_qty"),
                "scheme_duration"=> $this->input->post("scheme_duration"),
                "to_date"=> $this->input->post("to_date")
            );
            
            $editScheme = xss_clean($editScheme);
            
            $status=$this->schemesModel->updateScheme($editScheme,$id);
			
			if($status==true)
				{
                
                $this->session->set_flashdata('editscheme_report','Successfully updated the Scheme!!!!');
                redirect(base_url() . "Schemes/schmes");
                
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Schemes/editScheme/".$id);
				}
            
        }
        $this->load->view("Schemes/editschemeView",$data);
        $this->load->view("footer");
    }
    
    public function delete_Scheme($id){
        $this->db->query("update schemes set status='Inactive' where id=$id");		
		if($this->db->affected_rows()>0) 
		{
			echo "success";		
		} 
		else
		{
			echo "fail";
		}
    }
    
    
}

?>