<?php
class Plant_Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security"));
        $this->load->library(array("session","form_validation"));
        $this->load->model("plant/PlantModel");
        $this->load->database();
    }
    public function index(){
        $this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
		
         $this->load->view("plant/plant_dashboard_view");
        // $this->load->view("Salesview");
		 //$this->load->view("footer");
	
    }
    public function manufacturing_details(){
		$this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
		$data['mfg_details']=$this->PlantModel->manufacturing_details();
		$this->load->view("plant/plant_mfg_dashboard",$data);
		$this->load->view("footer");
    }

    public function defects(){
        $this->load->view("plant/header_plant");
// 		$data['defects']=$this->PlantModel->defects();
        $data['defects'] = $this->PlantModel->defectsDetails();
        $this->load->view("plant/plant_defects_dashboard", $data);
        $this->load->view("footer");
    }
	
	public function Production_plan(){
	    $this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
		$data['ptype'] = "Choose";
		$plant_supervisor = "plant_supervisor_list";
		$line_supervisor = "line_supervisor";
		$fan = "SKY FAN MOTORS";
		$pump = "PUMP Motor";
		$swing = "Auto Swing Motor";
		$motor = "Washer Motor";
		$timer = "Washer Timer";
		$gear = "Washer Gearbox";
		$data['fan_motor']=$this->PlantModel->get_all_fan($fan);
		$data['pump_motor']=$this->PlantModel->get_all_fan($pump);
		$data['swing_motor']=$this->PlantModel->get_all_fan($swing);
		$data['motor']=$this->PlantModel->get_all_fan($motor);
		$data['timer_motor']=$this->PlantModel->get_all_fan($timer);
		$data['gear_details']=$this->PlantModel->get_all_fan($gear);
		//$data['mfg_details']=$this->PlantModel->get_all_modelname();
        $data['ca_details']=$this->PlantModel->ca_details();
		$data['man_details']=$this->PlantModel->man_details();
		$data['supervisor_list']=$this->PlantModel->supervisor_list($plant_supervisor);
		$data['Line_supervisor_list']=$this->PlantModel->supervisor_list($line_supervisor);
		$data['companies']=$this->PlantModel->get_companies();
		$data['colors']=$this->PlantModel->get_colors();
		$this->form_validation->set_rules("product_qty","Product Quantity","required|trim");
		$this->load->view("plant/production_plan",$data);
		$this->load->view("footer");
		
		
		}
		public function addProduct(){
			$this->session->set_flashdata('item','');
			$this->session->set_flashdata('error_report','');
			$ptype = $this->input->post('ptype');
			$data['ptype'] = $ptype;
			$data['mfg_details']=$this->PlantModel->get_product_modelname($ptype);
			//echo "<pre>";
			//print_r($data['mfg_details']);die;
			$data['companies']=$this->PlantModel->get_companies();
		$data['colors']=$this->PlantModel->get_colors();
			$plant_supervisor = "plant_supervisor_list";
		$line_supervisor = "line_supervisor";
		$this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
		$fan = "SKY FAN MOTORS";
		$pump = "PUMP Motor";
		$swing = "Auto Swing Motor";
		$motor = "Washer Motor";
		$timer = "Washer Timer";
		$gear = "Washer Gearbox";
		$data['fan_motor']=$this->PlantModel->get_all_fan($fan);
		$data['pump_motor']=$this->PlantModel->get_all_fan($pump);
		$data['swing_motor']=$this->PlantModel->get_all_fan($swing);
		$data['motor']=$this->PlantModel->get_all_fan($motor);
		$data['timer_motor']=$this->PlantModel->get_all_fan($timer);
		//print_r($data['timer_motor']);die;
		$data['gear_details']=$this->PlantModel->get_all_fan($gear);
		
        $data['ca_details']=$this->PlantModel->ca_details();
		$data['man_details']=$this->PlantModel->man_details();
		$data['supervisor_list']=$this->PlantModel->supervisor_list($plant_supervisor);
		$data['Line_supervisor_list']=$this->PlantModel->supervisor_list($line_supervisor);
		//print_r($data['Line_supervisor_list']);die;
		$this->load->view("plant/production_plan",$data);
		$this->load->view("footer");
		}


	public function prod_plan_edit(){
		//print_r($_POST);die;
		$data['category'] = $this->PlantModel->get_category()->result();
			//$this->load->view('product_view', $data);
	    $date = date('Y-m-d');
		$data['date_details']=$this->PlantModel->get_dates();
		$data['mfg_details']=$this->PlantModel->get_modelname($date);
		$data['mfg_unit_details'] = "";
		$data['dat'] ="";
		//echo "<pre>";
		//print_r($data['mfg_details']);die;
		$data['ca_details']=$this->PlantModel->ca_details();
		$data['man_details']=$this->PlantModel->man_details();
		
		$bid = 0;
		$data['bid'] = $bid;
		$data['product_qty'] = 0;
		$id = 0;
		$data['id'] = $id;
		$data['product_Name'] = "";
		$this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
		$this->load->view("plant/production_plan_edit",$data);
		$this->load->view("footer");
		}
		public function get_product(){
	//	print_r($_POST);die;
			$date = $this->input->post('selectdate',TRUE);
			$productid = $this->input->post('product',TRUE);
			//$data = $this->PlantModel->get_sub_category($category_id)->result();
			
			$data = $this->PlantModel->get_qty($date,$productid)->result();
			//print_r($data);die;
			echo json_encode($data);
			
			//print_r($pqty);die;
		}

	public function get_product_barcodes(){
	        //$date = $this->input->post('selectdate',TRUE);
			$productid = $this->input->post('product',TRUE);
		    $data = $this->PlantModel->get_products_barcodes($productid)->result();
		  
		       echo json_encode($data);
		   
			
	}
		
		
		function get_sub_category(){
			$category_id = $this->input->post('id',TRUE);
			$data = $this->PlantModel->get_sub_category($category_id)->result();
			echo json_encode($data);
		}
		//
		public function get_date_product(){
			print_r($_POST);die;
			$this->session->set_flashdata('barcode','');
			$this->session->set_flashdata('error_report','');
			$date = $this->input->post('select_date');
			$data['dat'] = $this->input->post('select_date');
			$data['date_details']=$this->PlantModel->get_dates();
		$data['mfg_unit_details']=$this->PlantModel->get_modelname($date);
		//echo "<pre>";
		//print_r($data['mfg_details']);die;
		$data['ca_details']=$this->PlantModel->ca_details();
		$data['man_details']=$this->PlantModel->man_details();
		
		$bid = 0;
		$data['bid'] = $bid;
		$data['product_qty'] = 0;
		$id = 0;
		$data['id'] = $id;
		$data['product_Name'] = "";
		$this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
		$this->load->view("plant/production_plan_edit",$data);
			
			
		}
		public function barcode_assign(){
		//echo "<pre>";    
		//print_r($_POST);die;
		
		$cdate  = $this->input->post('cdate');
		$pid  = $this->input->post('product');
		$aq  = $this->input->post('actual_qty');
		$pq  = $this->input->post('product_qty');
		$barcode_from[]  = $this->input->post('barcode_from');
		//print_r($barcode_from);die;
		$barcode_to[] = $this->input->post('barcode_to');
		
		$barcode_count_from = $barcode_from[0][0];
		$barcode_count_to = $barcode_to[0][0];
		
		if($cdate == "" || $aq == "" || $pq = "" || $barcode_count_from == "" || $barcode_count_to == "" || $pid == ""){
			//echo "some fields are miss";die;
			
			$this->session->set_flashdata('error_report','Please Fill All Fields');
			$this->prod_plan_edit();
	 }else{
		     //echo "all fields are filled";die;
	    $barcode_from[]  = $this->input->post('barcode_from');
		$barcode_to[] = $this->input->post('barcode_to');
		$barcode_count = count($barcode_from[0]);
		for($i=0;$i<$barcode_count;$i++){
			$barcode_start = $barcode_from[0][$i];
			$barcode_end =  $barcode_to[0][$i];
			$dataone = array(
				'actual_qty' => $aq,
			  'barcode_start' => $barcode_start,
			  'barcode_end' => $barcode_end,
			  //'product_info_id' => $pid
			  );
			  $this->PlantModel->plant_product_barcodes($dataone,$pid);
			  
			 }
			 $this->session->set_flashdata('barcode','Barcodes Inserted Successfully');
			 $this->prod_plan_edit();
		}
	}

	/* public function pro(){
		$this->load->view("header");
		$this->load->view("plant/plant_header");
		$product_Name  = $this->input->post('product_Name');
		$data['product_Name'] = $product_Name;
		$date = date('Y-m-d');
		$day = $this->PlantModel->getBarcodeDate_prod($date,$product_Name);
		if($day == null){
			$bid = 0;
			$data['bid'] = $bid;
			$product = $this->PlantModel->getProduct($product_Name);
			$product_info = $product[0]->model_name;
			$this->session->set_flashdata('noplan','No plan for '.$product_info); 
		}else{
			$bid = $day[0]->id;
			$data['bar'] = $this->PlantModel->get_barcodes($bid);
			$data['bid'] = $bid;
		}
		$data['barcode_from'] = "";
		$data['barcode_to'] = "";
		$data['manpower'] = "";
		$data['mfg_details']=$this->PlantModel->get_all_modelname();
			$data['ca_details']=$this->PlantModel->ca_details();
		    $data['man_details']=$this->PlantModel->man_details();
			$this->load->view("plant/production_plan_edit",$data);
		} */
	
	public function change_manpower(){
	//echo "<pre>";
	//print_r($_POST);die;

	
		$id  = $this->input->post('id');
	    $ca_name  = $this->input->post('ca_name');
		$change_resource  = $this->input->post('change_resource');

		$data['msg'] = $this->PlantModel->update_manpower($id,$change_resource,$ca_name);
		$data['id'] = 0;
		$data['dat'] = 0;
		$data['product_qty'] = 0;
		$data['date_details']=$this->PlantModel->get_dates();
		
		
		$data['ca_details']=$this->PlantModel->ca_details();
		$data['man_details']=$this->PlantModel->man_details();
		//$this->load->view("plant/header_plant");
		//$this->load->view("plant/plant_header");
		//$this->load->view("plant/production_plan_edit",$data);
		//$this->load->view("footer");
		$this->prod_plan_edit();
			
}


	public function edit_plan(){
		//echo "<pre>";
		//print_r($_POST);die;
		$date = date('Y-m-d ');
		$pname  = $this->input->post('product_Name',TRUE);
		$manpower  = $this->input->post('manpower',TRUE);
		$pid=$this->PlantModel->getInfoId($pname,$date);
		$id = $pid[0]->id;
		$data= $id;
		//print_r($id);die;
	     $data = $this->PlantModel->ca_assign_details($manpower,$id)->result();

			echo json_encode($data);

		
		}
	public function addProduction_plan(){
	   // echo "<pre>";
	  	//print_r($_POST);die;
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->form_validation->set_rules('product_Name', 'Product Name', 'required');
		$this->form_validation->set_rules('product_qty', 'Product Quantity', 'required');
		
		$this->form_validation->set_rules('ca_names', 'CA Name', 'required');
		$this->form_validation->set_rules('manpower_name', 'Manpower Name', 'required');
		$this->form_validation->set_rules('supervisor_name', 'Supervisor Name', 'required');
		
		
		$product_Name = rtrim($this->input->post('product_Name'));
		$product_qty  = $this->input->post('product_qty');
		$ptype  = $this->input->post('ptype');
		
		$ca_names[][]  = $this->input->post('ca_names');
		$product = $this->PlantModel->getProduct($product_Name);
		
		$product_info = $this->input->post('product_Name');
		
		$manpower_name[]  = $this->input->post('manpower_name');
		
		$man_count = count($manpower_name[0]);

		$supervisor_name  = $this->input->post('supervisor_name');
		$sname = $this->PlantModel->get_supervisor($supervisor_name);
		
		if($sname == null){
			$super = "";
		}else {
			$super = $sname[0]->supervisor_name;
		}
		
$fan = $this->input->post('fan_name');
		$pump = $this->input->post('pump_name');
		$auto = $this->input->post('auto_swing_name');
		$company_name = $this->input->post('company_name');
		$cur_date = $this->input->post('cur_date');
		$line_name = $this->input->post('line_name');
		 if($ptype == "" || $company_name == "" || $product_Name == "" || $product_qty = "" || $fan == "" || $pump == "" || $auto == "" || $sname == "" || $cur_date == "" || $line_name == ""){
			 
			   $this->session->set_flashdata('error_report','Please Fill All Fields');
		}else{
			
			if($ptype == "SKY COOLERS"){
				$data = array(    
					'product_Type' => $this->input->post('ptype'),
					'product_name' => trim($this->input->post('product_Name')),
					'product_color' => trim($this->input->post('pcolor')),
					
					'company_name' => trim($this->input->post('company_name')),
				
					
					
					'product' => $product_info,
					'fan_or_motor_name' => trim($this->input->post('fan_name')),
					'pump_or_timer_name' => trim($this->input->post('pump_name')),
					'auto_swing_or_gear_name' => trim($this->input->post('auto_swing_name')),
					'product_qty' => $this->input->post('product_qty'),
					'cur_date' => $this->input->post('cur_date'),
					'supervisor_name' => $super,
					'line_supervisor_name' => $this->input->post('line_name'),
					'manpower_Qty' => $this->input->post('manpower_Qty')
					
					);
			}elseif($ptype == "SKYZEN WASHERS"){
				$data = array(
					'product_Type' => $this->input->post('ptype'),
					'product_name' => trim($this->input->post('product_Name')),
					'product_color' => trim($this->input->post('pcolor')),
					
					'company_name' => trim($this->input->post('company_name')),
					'product' => $product_info,
					'fan_or_motor_name' => trim($this->input->post('fan_name')),
					'pump_or_timer_name' => trim($this->input->post('pump_name')),
					'auto_swing_or_gear_name' => trim($this->input->post('auto_swing_name')),
					'product_qty' => $this->input->post('product_qty'),
					'cur_date' => $this->input->post('cur_date'),
					'supervisor_name' => $super,
					'line_supervisor_name' => $this->input->post('line_name'),
					'manpower_Qty' => $this->input->post('manpower_Qty')
					);
			}
			$pid = $this->PlantModel->product_info($data);
			$databarcodes = array(
									'actual_qty' => "",
									'barcode_start' => "",
									'barcode_end' => "",
									'product_info_id' => $pid
									);
									$this->PlantModel->product_barcodes($databarcodes);
			
			    for ($row = 0; $row < $man_count; $row++) {
							
							for ($col = 0; $col <count($ca_names[0][0][$row]); $col++) {
								$ca_nam = $ca_names[0][0][$row][$col];
								$man_name =  $manpower_name[0][$row];
								$datatwo = array(
									'ca_name' => $ca_nam,
									'man_name' => $man_name,
									'product_info_id' => $pid
									);
									$this->PlantModel->plant_product_ca_and_manpower($datatwo);
							}
							
						  }
						
				
			   
				 $this->session->set_flashdata('item','Plant Inserted Successfully');
		}
 
        
				 $this->Production_plan(); 
				 $this->load->view("footer");

	}
	public function export_csv(){ 
		//print_r("sdsd");
		// file name 
		$filename = 'users_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   // get data 
	   $usersData = $this->PlantModel->get_all_plan($pid);
		//$usersData = $this->Crud_model->getUserDetails();
		// file creation 
		$file = fopen('php://output','w');
		$header = array("product","Fan","pump","Email"); 
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		fclose($file); 
		exit; 
	}
    public function Production_plan_view($pid){
		//print_r($product_Name);die;
		$date = date('Y-m-d ');
		$data['plan_details']=$this->PlantModel->get_all_plan($date,$pid);
		$data['ca_man_details']=$this->PlantModel->get_ca_man($pid);
		;
		$data['ca_details'] = $data['ca_man_details'][0]->ca_name;
		$data['man_details']= $data['ca_man_details'][0]->man_name;
		//print_r($ca);die;
		$data['pid'] = $pid;
		$this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
		$this->load->view("plant/plan_view",$data);
		//$this->load->view("footer");

	}
    public function csv_data(){
        
		if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
			
			$c = 0;//
			
		
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				//print_r($c);
				//vgr$product_id = $filesop[0];
				//vgr$partName = $filesop[1];
                //$product_name = $filesop[2];
                //$category = $filesop[3];
                //$sub_cat = $filesop[4];
               // $mfg_date = $filesop[5];
               //vgr $brand = $filesop[5];
			//vgr	$category = $filesop[6];
			//vgr	$unitRate = $filesop[7];
			//vgr	$status = $filesop[8];
			
			$user_role_id = $filesop[0];
			$userdept_Name = $filesop[1];
			$email = $filesop[2];
			$password = $filesop[3];
			$user_City = $filesop[4];
                
				if($c<>0){			

					
// $GETBARCODE = str_split($ReciveBarcode,9);

// $SepratedDetails['vendor'] = $GETBARCODE[0][0];
// $SepratedDetails['catagory'] = $GETBARCODE[0][1];
// $SepratedDetails['modelone'] = $GETBARCODE[0][2].$GETBARCODE[0][3];
// //$SepratedDetails['modeltwo'] = $GETBARCODE[0][3];
// $SepratedDetails['motor'] = $GETBARCODE[0][4];
// $SepratedDetails['pump'] = $GETBARCODE[0][5];
// $SepratedDetails['yearone'] = $GETBARCODE[0][6].$GETBARCODE[0][7];
// //$SepratedDetails['yeartwo'] = $GETBARCODE[0][7];
// $SepratedDetails['month'] = $GETBARCODE[0][8];
// $SepratedDetails['serialno'] = $GETBARCODE[1];


				// 	 //echo ($fname);		//SKIP THE FIRST ROW
				// 	 $category = $this->PlantModel->getValue('name','cat_parts_barcode',$SepratedDetails['catagory']);
				// 	 $model = $this->PlantModel->getValue('model_name','product_model_barcode',$SepratedDetails['modelone']);
				// 	 $year = $this->PlantModel->getValue('description','description_year_barcode',$SepratedDetails['yearone']);
				// 	 $month = $this->PlantModel->getValue('month_description','description_month_barcode',$SepratedDetails['month']);
					 
				// 	 $product_type = $category[0]->name;
				// 	 $modelname = $model[0]->model_name;
				// 	 $year = $year[0]->description;
				// 	 $month = $month[0]->month_description;

              //vgr$this->PlantModel->file_to_store($partName,$brand,$category,$unitRate,$status); 
                  $this->PlantModel->file_to_store_dist($user_role_id,$userdept_Name,$email,$password,$user_City);
		//$this->PlantModel->file_to_store($ReciveBarcode,$product_type,$modelname,$year.$month,$assembled_by,$approved_by);
				}
                $c = $c + 1;
                //echo $c;
			}
			//$this->manufacturing_details();
				
		}

	}
	
	public function coolerDetails(){
        $this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
        $data['coolers']= $this->PlantModel->viewcoolers();
//        echo "<pre>";
//        print_r($data['coolers']); die; 
       $data['count'] = count($data['coolers']);
		for($i=0;$i<count($data['coolers']);$i++){
			$bid = $data['coolers'][$i]->id;
			//print_r($bid);die;
			$data['barcodes'][$i]= $this->PlantModel->get_barcodes($bid);
		}
        $this->load->view("plant/coolerdetailsView",$data);
        $this->load->view("footer");
    }
     public function coolerpdf($id){
        $this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
        $data['cooler_det']=$this->PlantModel->productmgfDet($id);
       $data['barcode_det']=$this->PlantModel->coolerbarcodeDet($id);
        $data['critical_areas'] = $this->PlantModel->viewcriticals($id);
//        echo "<pre>";
//        print_r($data['critical_areas']); die; 
        $this->load->view("plant/coolerpdfView",$data);
        $this->load->view("footer");
    }
    
    public function cooleredit($id){
        $this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
		$ptype = "SKY COOLERS";
		$fan = "SKY FAN MOTORS";
		$pump = "PUMP Motor";
		$swing = "Auto Swing Motor";
		$plant_supervisor = "plant_supervisor_list";
		$line_supervisor = "line_supervisor";
		$data['id'] = $id;
		$data['fan_motor']=$this->PlantModel->get_all_fan($fan);
		$data['pump_motor']=$this->PlantModel->get_all_fan($pump);
		$data['swing_motor']=$this->PlantModel->get_all_fan($swing);
		$data['mfg_details']=$this->PlantModel->get_product_modelname($ptype);
        $data['cooler_det']=$this->PlantModel->productmgfDet($id);
        $data['barcode_det']=$this->PlantModel->coolerbarcodeDet($id);
        $data['supervisor_list']=$this->PlantModel->supervisor_list($plant_supervisor);
		$data['Line_supervisor_list']=$this->PlantModel->supervisor_list($line_supervisor);
        $data['companies']=$this->PlantModel->get_companies();
        $data['colors']=$this->PlantModel->get_colors();
        $this->load->view("plant/coolerEditView",$data);
        $this->load->view("footer");
    }
    
    public function washeredit($id){
        $this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
		$ptype = "SKYZEN WASHERS";
        
        $motor = "Washer Motor";
		$timer = "Washer Timer";
		$gear = "Washer Gearbox";
		$plant_supervisor = "plant_supervisor_list";
		$line_supervisor = "line_supervisor";
		$data['id'] = $id;
		
		$data['motor']=$this->PlantModel->get_all_fan($motor);
		$data['timer_motor']=$this->PlantModel->get_all_fan($timer);
	
		$data['gear_details']=$this->PlantModel->get_all_fan($gear);
		 
		
			$data['mfg_details']=$this->PlantModel->get_product_modelname($ptype);
        $data['washer_det']=$this->PlantModel->productmfgwasherDet($id);
        $data['barcode_det']=$this->PlantModel->washerbarcodeDet($id);
        $data['supervisor_list']=$this->PlantModel->supervisor_list($plant_supervisor);
		$data['Line_supervisor_list']=$this->PlantModel->supervisor_list($line_supervisor);
      $data['companies']=$this->PlantModel->get_companies();
      $data['colors']=$this->PlantModel->get_colors();
        $this->load->view("plant/washerEditView",$data);
        $this->load->view("footer");
        
    }
    
    public function cooler_edit(){
        // echo "<pre>";
        // print_r($_POST);die;
        $id = $this->input->post('id');
        $data = array(
					'product_Type' => $this->input->post('ptype'),
					
					
					'company_name' => $this->input->post('company_name'),
					'product_name' => trim($this->input->post('product_name')),
					'product_color' => $this->input->post('product_color'),
				'product' => trim($this->input->post('product_name')),
					'fan_or_motor_name' => $this->input->post('fan_name'),
					'pump_or_timer_name' => $this->input->post('pump_name'),
					'auto_swing_or_gear_name' => $this->input->post('auto_swing_name'),
					'product_qty' => $this->input->post('product_qty'),
					'cur_date' => $this->input->post('date'),
					'supervisor_name' => $this->input->post('supervisor_name'),
					'line_supervisor_name' => $this->input->post('line_name')
					
					);
						$this->PlantModel->update_product($data,$id);
					 $dataone = array(
					'barcode_start' => $this->input->post('barcode_start'),
					'barcode_end' => trim($this->input->post('barcode_end')),
					'actual_qty' => $this->input->post('actual_qty')
				
					
					);
				 $this->PlantModel->plant_product_barcodes($dataone,$id);
					//$this->session->set_flashdata('item','Plan Updated Successfully');
					$this->coolerDetails(); 
				 $this->load->view("footer");
    }
    
    public function washer_edit(){
        $id = $this->input->post('id');
        $data = array(  
					'product_Type' => $this->input->post('ptype'),
						'company_name' => trim($this->input->post('company_name')),
					'product_name' => trim($this->input->post('product_name')),
					'product_color' => $this->input->post('product_color'),
				'product' => trim($this->input->post('product_name')),
					'fan_or_motor_name' => $this->input->post('fan_name'),
					'pump_or_timer_name' => $this->input->post('pump_name'),
					'auto_swing_or_gear_name' => $this->input->post('auto_swing_name'),
					'product_qty' => $this->input->post('product_qty'),
					'cur_date' => $this->input->post('date'),
					'supervisor_name' => $this->input->post('supervisor_name'),
					'line_supervisor_name' => $this->input->post('line_name')
					
					);
						$this->PlantModel->update_product($data,$id);
					 $dataone = array(
					'barcode_start' => $this->input->post('barcode_start'),
					'barcode_end' => trim($this->input->post('barcode_end')),
					'actual_qty' => $this->input->post('actual_qty')
				
					
					);
				 $this->PlantModel->plant_product_barcodes($dataone,$id);
					//$this->session->set_flashdata('item','Plan Updated Successfully');
					$this->washerDetails(); 
				 $this->load->view("footer");
    }
    
    public function coolers($id){
        //print_r($id);die;
        $this->PlantModel->cooler_delete($id);
        $this->coolerDetails(); 
				 $this->load->view("footer");
    }
    
    public function washers($id){
        $this->PlantModel->cooler_delete($id);
        $this->washerDetails(); 
				 $this->load->view("footer");
    }
    public function washerDetails(){
		$dat=[];
        $this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
		$data['washers']= $this->PlantModel->viewWashers();
		//echo "<pre>";
		//print_r(count($data['washers']));die;
		$data['count'] = count($data['washers']);
		for($i=0;$i<count($data['washers']);$i++){
			$bid = $data['washers'][$i]->id;
			//print_r($bid);die;
			$data['barcodes'][$i]= $this->PlantModel->get_barcodes($bid);
		}
		//echo "<pre>";
        //print_r($data['barcodes'][0][0]);die;
        $this->load->view("plant/washerdetailsView",$data);
        $this->load->view("footer");
    }
    
    public function washerpdf($id){
         $this->load->view("plant/header_plant");
		$this->load->view("plant/plant_header");
        $data['washer_det']=$this->PlantModel->productmfgwasherDet($id);
        $data['barcode_det']=$this->PlantModel->washerbarcodeDet($id);
//        echo "<pre>";
//        print_r($data['washer_det']); die; 
        $data['critical_areas'] = $this->PlantModel->viewwashercriticals($id);
//        echo "<pre>";
//        print_r($data['critical_areas']); die; 
        $this->load->view("plant/washerpdfView",$data);
        $this->load->view("footer");
    }
    
    public function criticalareasData(){
        $barcode = $this->input->post("barcode");
        
        $query = $this->db->query("select * from plant_product_barcodes where barcode_start='$barcode' OR barcode_end='$barcode'");
        $res = $query->row();
        $prod_ino = $res->product_info_id;
        
        $query1 = $this->db->query("select * from plant_product_ca_and_manpower where product_info_id='$prod_ino'");
        $res_ca = $query1->result();
        
        //$product_info_id = 
        
        echo json_encode($res_ca);
    }
    
	
}
?>