<?php
class Setting extends CI_Controller{

    public function __construct(){
        parent::__construct();
        
        require_once APPPATH . "/third_party/PHPExcel.php";
            $this->load->helper(array("form","url","security","date"));
            $this->load->library(array("form_validation","session"));
            $this->load->model("settings/UserroleModel");
            $this->load->model("settings/VoucherModel");
            $this->load->model("settings/BranchModel");
            $this->load->model("settings/SupplierModel");  
            $this->load->model("settings/DivisionModel"); 
            $this->load->model("settings/ProductModel"); 
            $this->load->model("settings/PartsmasterModel"); 
            $this->load->model("settings/CustomerBalanceModel"); 
            $this->load->model("settings/LedgerreportModel");
            $this->load->model("settings/RoleengineModel");
            $this->load->model("settings/MasterModel");
        $this->load->helper("url");
        $this->load->database();
    }

    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->view("Settingview");
    }

    public function roles(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['roles'] = $this->UserroleModel->viewRoles();
        $this->load->view("settings/rolesView",$data);
        $this->load->view("footer");
    }

    public function addRole(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->form_validation->set_rules("role_Name","Role Name","required|trim");

        if($this->form_validation->run()==true){
            $add_Role=array(
				"role_Name"=>$this->input->post("role_Name"),
			);
			
			$add_Role=xss_clean($add_Role);
			$status=$this->UserroleModel->addRole($add_Role);			
				if($status==true)
				{
						$this->session->set_tempdata("add_success","Role Added Successfully",2);
						redirect(base_url()."Setting/addRole");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Role",2);
						redirect(base_url()."Setting/addRole");
				}
        }else {

        $this->load->view("settings/addroleView");
        }
        $this->load->view("footer");
    }

    public function editRole($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['role']=$this->UserroleModel->editRole($id);
        $this->form_validation->set_rules("role_Name","Role Name","required|trim");
		if($this->form_validation->run()==true) 
		{
			$edit_role=array(
				"role_Name"=>$this->input->post("role_Name"),
			);
			
			$edit_role=xss_clean($edit_role);
			
			$status=$this->UserroleModel->updateRole($edit_role,$id);
			
			if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Updated Successfully",2);
					redirect(base_url()."Setting/editRole/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Setting/editRole/".$id);
				}
		} 
		else 
		{
        $this->load->view("settings/editroleView",$data);
        }
        $this->load->view("footer");
    }

    public function users(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['users'] = $this->UserroleModel->users();
        // echo "<pre>";
        // print_r($data['users']); die; 
        $this->load->view("settings/userrolesView",$data);
        $this->load->view("footer");
    }

    public function voucher(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['vouchers'] = $this->VoucherModel->viewVouchers();
        $this->load->view("settings/voucherView",$data);
        $this->load->view("footer");
    }

    public function addVoucher(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->form_validation->set_rules("voucher_Series","Voucher Series","required|trim");

		if($this->form_validation->run()==true) {
			$add_Voucher=array(
				"voucher_Type"=>$this->input->post("voucher_Type"),
                "voucher_Name"=>$this->input->post("voucher_Name"),
                "voucher_Series"=>$this->input->post("voucher_Series"),
                "voucher_Description"=>$this->input->post("voucher_Description")
			);
			
			$add_Voucher=xss_clean($add_Voucher);
			$status=$this->VoucherModel->addVoucher($add_Voucher);
			
			if($status==true){
						$this->session->set_tempdata("add_success","Voucher Added Successfully",2);
						redirect(base_url()."Setting/addVoucher");
				}else{
						$this->session->set_tempdata("add_fail","Voucher Umable to Add",2);
						redirect(base_url()."Setting/addVoucher");
				}
				
		}
		 else{
        $this->load->view("settings/addvoucherView");
         }
        $this->load->view("footer");
    }
    
    public function editVoucher($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['voucher'] = $this->VoucherModel->editVoucher($id);
//        echo "<pre>";
//        print_r($data['voucher']); die; 
        $this->form_validation->set_rules("voucher_Series","Voucher Series","required|trim");

		if($this->form_validation->run()==true) {
			$edit_Voucher=array(
				"voucher_Type"=>$this->input->post("voucher_Type"),
                "voucher_Name"=>$this->input->post("voucher_Name"),
                "voucher_Series"=>$this->input->post("voucher_Series"),
                "voucher_Description"=>$this->input->post("voucher_Description")
			);
			
			$edit_Voucher=xss_clean($edit_Voucher);
			$status=$this->VoucherModel->updateVoucher($edit_Voucher,$id);
			
			 if($status==true){
                $this->session->set_tempdata("upd_succ","Updated Successfully",2);
                redirect(base_url()."Setting/editVoucher/".$id);
            }else{
                $this->session->set_tempdata("upd_fail","Updated Fail");
                redirect(base_url()."Setting/editVoucher/".$id);
            }			
				
		}
		 else{
        $this->load->view("settings/editvoucherView",$data);
         }
        $this->load->view("footer");
    }
    
   
    
    public function addbranchcsv(){
        if(isset($_POST["submit"]))
		{ 
			$file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0;//
            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
                 
                $Code = $filesop[1];
                $Master = $filesop[2];
                $Master_Node = $filesop[3];
                $Master_Type = $filesop[4];
                $Master_Group = $filesop[5];
                $Master_Folder = $filesop[6];

                if($c<>0){	
                    $branchcsv_Data= array(
                        "branch_Code"=>$Code,
                        "branch_Master"=>$Master,
                        "branch_MasterNode"=>$Master_Node,
                        "branch_MasterType"=>$Master_Type,
                        "branch_MasterGroup"=>$Master_Group,
                        "branch_MasterFolder"=>$Master_Folder
                    );
                    $status= $this->BranchModel->addbranchCSV($branchcsv_Data);
                }
                  $c = $c + 1;
            }                
             $this->branch();
        }
    }
    
    public function supplier(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['supps'] = $this->SupplierModel->viewSupp();
        $this->load->view("settings/supplier/supplierView",$data);
        $this->load->view("footer");
    }
    
    public function addsuppliercsv(){
        if (isset($_POST["submit"])) {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0; //
            while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
                $Master = $filesop[1];
                $Status = $filesop[2];
                $Node = $filesop[3];
                $Master_Group = $filesop[4];
                $Description = $filesop[5];

                if ($c <> 0) {
                    $suppliercsv_Data = array(
                        "supp_Master" => $Master,
                        "supp_Status" => $Status,
                        "supp_Node" => $Node,
                        "supp_MasterGroup" => $Master_Group,
                        "supp_Description" => $Description
                    );
                    $status = $this->SupplierModel->addsupplierCSV($suppliercsv_Data);
                }
                $c = $c + 1;
            }
            $this->supplier();
        }
    }
    
    public function division(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['divisions'] = $this->DivisionModel->viewDivisions();
        $this->load->view("settings/division/divisionView",$data);
        $this->load->view("footer");
    }
    
    public function adddivisioncsv(){
        if (isset($_POST["submit"])) {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0; //
            while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
//                echo "<pre>";
//                print_r($filesop); die; 
                $Code = $filesop[1];
                $Master = $filesop[2];
                $MasterNode = $filesop[3];
                $MasterType = $filesop[4];
                $MasterGroup = $filesop[5];
                $MasterFolder = $filesop[6];

                if ($c <> 0) {
                    $divisioncsv_Data = array(
                        "division_Code" => $Code,
                        "division_Master" => $Master,
                        "division_MasterNode" => $MasterNode,
                        "division_MasterType" => $MasterType,
                        "division_MasterGroup" => $MasterGroup,
                        "division_MasterFolder" => $MasterFolder
                    );
                    $status = $this->DivisionModel->adddivisionCSV($divisioncsv_Data);
                }
                $c = $c + 1;
            }
            $this->division();
        }
    }

  public function products(){
    $this->load->view("header");
    $this->load->view("tabheader");
      $this->load->view("sidebar");
    $data['products'] = $this->ProductModel->viewcsvProducts();
    $this->load->view("settings/products/productsView",$data);
    $this->load->view("footer");
    }
  
  public function addproductcsv(){
      if (isset($_POST["submit"])) {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0; //
            while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
//                echo "<pre>";
//                print_r($filesop); die; 
                $Master = $filesop[1];
                $Short = $filesop[2];
                $SMU = $filesop[3];
                $AlternateSMU = $filesop[4];
                $Status = $filesop[5];
                $Node = $filesop[6];
                $MasterGroup = $filesop[6];
                $Description = $filesop[6];

                if ($c <> 0) {
                    $productscsv_Data = array(
                        "product_Master" => $Master,
                        "product_Short" => $Short,
                        "product_SMU" => $SMU,
                        "product_AlternateSMU" => $AlternateSMU,
                        "product_Status" => $Status,
                        "product_Node" => $Node,
                        "product_MasterGroup" => $MasterGroup,
                        "product_Description" => $Description
                    );
                    $status = $this->ProductModel->addproductCSV($productscsv_Data);
                }
                $c = $c + 1;
            }
            $this->products();
        }
  }
  
  public function partsmaster(){
    $this->load->view("header");
    $this->load->view("tabheader");
      $this->load->view("sidebar");
    $data['parts'] = $this->PartsmasterModel->partsLists();
    // echo "<pre>";
    // print_r($data['sales']); die; 
    $this->load->view("settings/partsmasterView",$data);
    $this->load->view("footer");
  }

  public function addpartsmaster(){
    if (isset($_POST["submit"])) {
        $file = $_FILES['file']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0; //
        while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
            //    echo "<pre>";
            //    print_r($filesop); die; 
            $Master = $filesop[1];
            $Short = $filesop[2];
            $SMU = $filesop[3];
            $AlternateSMU = $filesop[4];
            $Status = $filesop[5];
            $Node = $filesop[6];
            $MasterGroup = $filesop[7];
            $Masternode1 = $filesop[8];
            $Masternode2 = $filesop[9];
            $Masternode3 = $filesop[10];
            $Masternode4 = $filesop[11];

            if ($c <> 0) {
                $partsmaster_Data = array(
                    "Master" => $Master,
                    "Short" => $Short,
                    "Stock_Manag_Unit" => $SMU,
                    "AlternateSMU" => $AlternateSMU,
                    "status" => $Status,
                    "Node" => $Node,
                    "MasterGroup" => $MasterGroup,
                    "Master_Node1" => $Masternode1,
                    "Master_Node2" => $Masternode2,
                    "Master_Node3" => $Masternode3,
                    "Master_Node4" => $Masternode4
                );
                $status = $this->PartsmasterModel->addpartsMaster($partsmaster_Data);
            }
            $c = $c + 1;
        }
        $this->partsmaster();
    }
  }
  
  
 public function custbalance(){
    $this->load->view("header");
    $this->load->view("tabheader");
      $this->load->view("sidebar");
    $data['balances'] = $this->CustomerBalanceModel->custbalanceLists();
    $this->load->view("settings/custbalanceView",$data);
    $this->load->view("footer");
  }

  public function addcustomerbalance(){
       $this->load->view("header");
    $this->load->view("tabheader");
      $this->load->view("sidebar");
      if($this->input->post('upload') != NULL ){
          
        $this->db->truncate('customerbalance');
          
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/custbalance'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/custbalance/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filesop = fgetcsv($file, 1000, ",")) !== FALSE) {

				// 		 echo "<pre>";
				// 		 print_r($filesop); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
								 $Account = $filesop[1];
                    $Debit = $filesop[2];
                    $Credit = $filesop[3];
                    $Balance = $filesop[4];
                    $lessthan30 = $filesop[5];
                    $lessthan45 = $filesop[6];
                    $lessthan60 = $filesop[8];
                    $lessthan90 = $filesop[9];
                    $greaterthan90 = $filesop[10];
                    $value2 = round(preg_replace('/[^0-9-_\.]/', '',$lessthan45)) + round(preg_replace('/[^0-9-_\.]/', '',$lessthan60)) + round(preg_replace('/[^0-9-_\.]/', '',$lessthan90)) + round(preg_replace('/[^0-9-_\.]/', '',$greaterthan90));
                    $value = round(preg_replace('/[^0-9-_\.]/', '',$lessthan60)) + round(preg_replace('/[^0-9-_\.]/', '',$lessthan90)) + round(preg_replace('/[^0-9-_\.]/', '',$greaterthan90));
                    $value1 = round(preg_replace('/[^0-9-_\.]/', '',$lessthan90)) + round(preg_replace('/[^0-9-_\.]/', '',$greaterthan90));
                        
								if ($c <> 0) {
									$custbalance_Data = array(
                                        "Account" => $Account,
                                        "Debit" => preg_replace('/[^0-9-_\.]/', '', $Debit) ,
                                        "Credit" => preg_replace('/[^0-9-_\.]/', '', $Credit),
                                        "Balance" => preg_replace('/[^0-9-_\.]/', '',$Balance),
                                        "lessthan30" => round(preg_replace('/[^0-9-_\.]/', '',$lessthan30)),
                                        "lessthan45" => round(preg_replace('/[^0-9-_\.]/', '',$lessthan45)),
                                        "lessthan60" => round(preg_replace('/[^0-9-_\.]/', '',$lessthan60)),
                                        "lessthan90" => round(preg_replace('/[^0-9-_\.]/', '',$lessthan90)),
                                        "greaterthan90" => round(preg_replace('/[^0-9-_\.]/', '',$greaterthan90)),
                                        "greaterthan30" => $value2,
                                        "greaterthan45" => $value,
                                        "greaterthan60" => $value1
									);
									$status = $this->CustomerBalanceModel->addcustbalance($custbalance_Data);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Customer Balance Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add Brand",2);
   			} 
   			// load view 
   			$this->load->view('settings/masters/addcustbalanceView'); 
          
          
          
  		}else{
      
       $this->load->view("settings/masters/addcustbalanceView");
      }
    $this->load->view("footer");
  
      
      
  }

public function custbalanceCSV(){
        $filename = 'custbalance_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->CustomerBalanceModel->custbalanceLists();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("S No","Account","Debit","Credit","Balance","<= 30 Days","<= 45 Days","<= 60 Days","<= 90 Days","> 90 Days","> 30 Days","> 45 Days","> 60 Days");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;
    }
    
// Credit Notes start
    
    public function creditNotes(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['creditNotes'] = $this->LedgerreportModel->viewcreditNotes();
        $this->load->view("settings/ledgerreport/creditnotesView",$data);
        $this->load->view("footer");
    }
    
    
    public function newcreditNote(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/creditnotes'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/creditnotes/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {

						// echo "<pre>";
						// print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
								$credit_Date = $filedata[1];
								$credit_VoucherNo = $filedata[2];
								$credit_Branch = $filedata[3];
								$credit_Party = $filedata[4];
                                $credit_Account = $filedata[5];
								$credit_Netamount = $filedata[6];
								$credit_Division = $filedata[7];
                        
								if ($c <> 0) {
									$credit_Notes = array(
										"credit_Date" => $credit_Date,
										"credit_VoucherNo" => $credit_VoucherNo,
										"credit_Branch" => $credit_Branch,
										"credit_Party" => $credit_Party,
                                        "credit_Account" => $credit_Account,
										"credit_Netamount" => $credit_Netamount,
										"credit_Division" => $credit_Division
									);
									$status = $this->LedgerreportModel->insertCreditnotes($credit_Notes);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Credit Note Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add Brand",2);
   			} 
   			// load view 
   			$this->load->view('settings/ledgerreport/addcreditnotesView'); 
  		}else{
        $this->load->view('settings/ledgerreport/addcreditnotesView');
        }
        $this->load->view("footer");
        
    }
    
    public function debitNotes(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['debitNotes'] = $this->LedgerreportModel->viewdebitNotes();
        $this->load->view("settings/ledgerreport/debitnotesView",$data);
        $this->load->view("footer");
    }
    
    public function newdebitNote(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/debitnotes'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/debitnotes/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {

//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
								$debit_Date = $filedata[1];
								$debit_VoucherNo = $filedata[2];
								$debit_Branch = $filedata[3];
								$debit_Party = $filedata[4];
                                $debit_Account = $filedata[5];
								$debit_Netamount = $filedata[6];
								$debit_Division = $filedata[7];
                        
								if ($c <> 0) {
									$debit_Notes = array(
										"debit_Date" => $debit_Date,
										"debit_VoucherNo" => $debit_VoucherNo,
										"debit_Branch" => $debit_Branch,
										"debit_Party" => $debit_Party,
                                        "debit_Account" => $debit_Account,
										"debit_Netamount" => $debit_Netamount,
										"debit_Division" => $debit_Division
									);
									$status = $this->LedgerreportModel->insertdebitnotes($debit_Notes);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Debit Note Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add Brand",2);
   			} 
   			// load view 
   			$this->load->view('settings/ledgerreport/adddebitnotesView'); 
  		}else{
        $this->load->view('settings/ledgerreport/adddebitnotesView');
        }
        $this->load->view("footer");
    }
    
    public function journalEntries(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['journals'] = $this->LedgerreportModel->viewjournalEntries();
        $this->load->view("settings/ledgerreport/journalentriesView",$data);
        $this->load->view("footer");
    }
    
    public function newjournalEntry(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/journal'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/journal/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {

//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
								$journalentry_Date = $filedata[1];
								$journalentry_VoucherNo = $filedata[2];
								$journalentry_Branch = $filedata[3];
								$journalentry_DebitAc = $filedata[4];
                                $journalentry_CreditAc = $filedata[5];
								$journalentry_Amount = $filedata[7];
								$journalentry_Division = $filedata[8];
                        
								if ($c <> 0) {
									$journal_Entries = array(
										"journalentry_Date" => $journalentry_Date,
										"journalentry_VoucherNo" => $journalentry_VoucherNo,
										"journalentry_Branch" => $journalentry_Branch,
										"journalentry_DebitAc" => $journalentry_DebitAc,
                                        "journalentry_CreditAc" => $journalentry_CreditAc,
										"journalentry_Amount" => $journalentry_Amount,
										"journalentry_Division" => $journalentry_Division
									);
									$status = $this->LedgerreportModel->insertjournalEntry($journal_Entries);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Journal Entry Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add journal entry",2);
   			} 
   			// load view 
   			$this->load->view('settings/ledgerreport/addjournalentryView'); 
  		}else{
        $this->load->view('settings/ledgerreport/addjournalentryView');
        }
        $this->load->view("footer");
    }
    
    public function ledger(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['ledgers'] = $this->LedgerreportModel->viewledgers();
        $this->load->view("settings/ledgerreport/ledgerView",$data);
        $this->load->view("footer");
    }
    
    public function addLedger(){
        
        
         $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/ledger'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/ledger/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {

//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
								$ledger_Date = $filedata[1];
								$ledger_VoucherNo = $filedata[2];
								$ledger_Branch = $filedata[3];
								$ledger_Debitac = $filedata[4];
                                $ledger_Creditac = $filedata[5];
								$ledger_Amount = $filedata[7];
								$ledger_Division = $filedata[8];
                        
								if ($c <> 0) {
									$ledger_Entries = array(
										"ledger_Date" => $ledger_Date,
										"ledger_VoucherNo" => $ledger_VoucherNo,
										"ledger_Branch" => $ledger_Branch,
										"ledger_Debitac" => $ledger_Debitac,
                                        "ledger_Creditac" => $ledger_Creditac,
										"ledger_Amount" => $ledger_Amount,
										"ledger_Division" => $ledger_Division
									);
									$status = $this->LedgerreportModel->insertLedger($ledger_Entries);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Ledger Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add ledger",2);
   			} 
   			// load view 
   			$this->load->view('settings/ledgerreport/addledgerView'); 
  		}else{
        $this->load->view('settings/ledgerreport/addledgerView');
        }
        $this->load->view("footer");
    }
    
    public function purchase(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['purchases'] = $this->LedgerreportModel->viewPurchases();
        $this->load->view("settings/ledgerreport/purchaseView",$data);
        $this->load->view("footer");
    }
    
    public function addPurchase(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/purchase'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/purchase/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {

//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
								$purchase_Date = $filedata[1];
								$purchase_VoucherNo = $filedata[2];
								$purchase_Branch = $filedata[3];
								$purchase_Party = $filedata[4];
                                $purchase_Purchaseac = $filedata[5];
								$purchase_Product = $filedata[6];
								$purchase_Netamt = $filedata[7];
                                $purchase_Division = $filedata[8];
                        
								if ($c <> 0) {
									$purchase_Entries = array(
										"purchase_Date" => $purchase_Date,
										"purchase_VoucherNo" => $purchase_VoucherNo,
										"purchase_Branch" => $purchase_Branch,
										"purchase_Party" => $purchase_Party,
                                        "purchase_Purchaseac" => $purchase_Purchaseac,
										"purchase_Product" => $purchase_Product,
										"purchase_Netamt" => $purchase_Netamt,
                                        "purchase_Division" => $purchase_Division
									);
									$status = $this->LedgerreportModel->insertPurchase($purchase_Entries);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Purchase Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add purchase",2);
   			} 
   			// load view 
   			$this->load->view('settings/ledgerreport/addpurchaseView'); 
  		}else{
        $this->load->view('settings/ledgerreport/addpurchaseView');
        }
        $this->load->view("footer");
    }
    
    public function purchasereturn(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['purchasereturns'] = $this->LedgerreportModel->viewPurchasereturns();
        $this->load->view("settings/ledgerreport/purchasereturnView",$data);
        $this->load->view("footer");
    }
    
    public function addpurchaseReturn(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/purchasereturn'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/purchasereturn/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
//
//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
								$purchasereturn_Date = $filedata[1];
								$purchasereturn_VoucherNo = $filedata[2];
								$purchasereturn_Branch = $filedata[3];
								$purchasereturn_Party = $filedata[4];
                                $purchasereturn_Puretac = $filedata[5];
								$purcahsereturn_Product = $filedata[6];
								$purchasereturn_Amt = $filedata[7];
                                $purchasereturn_Division = $filedata[8];
                        
								if ($c <> 0) {
									$purchasereturn_Entries = array(
										"purchasereturn_Date" => $purchasereturn_Date,
										"purchasereturn_VoucherNo" => $purchasereturn_VoucherNo,
										"purchasereturn_Branch" => $purchasereturn_Branch,
										"purchasereturn_Party" => $purchasereturn_Party,
                                        "purchasereturn_Puretac" => $purchasereturn_Puretac,
										"purcahsereturn_Product" => $purcahsereturn_Product,
										"purchasereturn_Amt" => $purchasereturn_Amt,
                                        "purchasereturn_Division" => $purchasereturn_Division
									);
									$status = $this->LedgerreportModel->insertPurchasereturn($purchasereturn_Entries);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Purchase return Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add purchase return",2);
   			} 
   			// load view 
   			$this->load->view('settings/ledgerreport/addpurchasereturnView'); 
  		}else{
        $this->load->view('settings/ledgerreport/addpurchasereturnView');
        }
        $this->load->view("footer");
    }
    
    public function receipts(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['receipts'] = $this->LedgerreportModel->viewReceipts();
        $this->load->view("settings/ledgerreport/receiptView",$data);
        $this->load->view("footer");
    }
    
    public function addReceipt(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/receipt'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/receipt/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
////
//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
		    				    $Date = $filedata[1];
                                $newDate = date("d-m-Y", strtotime($Date));
                
								//$receipt_Date = $filedata[1];
								$receipt_Voucherno = $filedata[2];
								$receipt_Mode = $filedata[3];
								$receipt_Branch = $filedata[4];
                                $receipt_Party = $filedata[5];
								$receipt_Account = $filedata[6];
								$receipt_Netamt = $filedata[7];
                                $receipt_Division = $filedata[8];
                            
								if ($c <> 0) {
									$receipt_Entries = array(
										"receipt_Date" => $newDate,
										"receipt_Voucherno" => $receipt_Voucherno,
										"receipt_Mode" => $receipt_Mode,
										"receipt_Branch" => $receipt_Branch,
                                        "receipt_Party" => $receipt_Party,
										"receipt_Account" => $receipt_Account,
										"receipt_Netamt" => round(preg_replace('/[^0-9-_\.]/', '',$receipt_Netamt)),
                                        "receipt_Division" => $receipt_Division
									);
									$status = $this->LedgerreportModel->insertReceipt($receipt_Entries);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Receipt Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add receipt",2);
   			} 
   			// load view 
   			$this->load->view('settings/ledgerreport/addreceiptView'); 
  		}else{
        $this->load->view('settings/ledgerreport/addreceiptView');
        }
        $this->load->view("footer");
    }
    
    public function sales(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['sales'] = $this->LedgerreportModel->viewSales();
        $this->load->view("settings/ledgerreport/salesView",$data);
        $this->load->view("footer");
    }
    
    public function addSales(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/sales'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/sales/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
////
//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
								$sales_Date = $filedata[1];
								$sales_VoucherNo = $filedata[2];
								$sales_Branch = $filedata[3];
								$sales_Party = $filedata[4];
                                $sales_Product = $filedata[5];
								$sales_Amount = $filedata[6];
								$sales_Division = $filedata[7];
                        
								if ($c <> 0) {
									$sales_Entries = array(
										"sales_Date" => $sales_Date,
										"sales_VoucherNo" => $sales_VoucherNo,
										"sales_Branch" => $sales_Branch,
										"sales_Party" => $sales_Party,
                                        "sales_Product" => $sales_Product,
										"sales_Amount" => $sales_Amount,
										"sales_Division" => $sales_Division,
									);
									$status = $this->LedgerreportModel->insertSales($sales_Entries);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Sales Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add Sales",2);
   			} 
   			// load view 
   			$this->load->view('settings/ledgerreport/addsalesView'); 
  		}else{
        $this->load->view('settings/ledgerreport/addsalesView');
        }
        $this->load->view("footer");
    }
    
    public function salesreturn(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['salesreturns'] = $this->LedgerreportModel->viewSalesreturn();
        $this->load->view("settings/ledgerreport/salesreturnView",$data);
        $this->load->view("footer");
    }
    
    public function addSalesreturn(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/salesreturn'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/salesreturn/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
////
//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
								$salesreturn_Date = $filedata[1];
								$salesreturn_Voucherno = $filedata[2];
								$salesreturn_Branch = $filedata[3];
								$salesreturn_Party = $filedata[4];
                                $salesreturn_Account = $filedata[5];
								$salesreturn_Product = $filedata[6];
								$salesreturn_Amount = $filedata[7];
                                $salesreturn_Division = $filedata[8];
                        
								if ($c <> 0) {
									$salesreturn_Entries = array(
										"salesreturn_Date" => $salesreturn_Date,
										"salesreturn_Voucherno" => $salesreturn_Voucherno,
										"salesreturn_Branch" => $salesreturn_Branch,
										"salesreturn_Party" => $salesreturn_Party,
                                        "salesreturn_Account" => $salesreturn_Account,
										"salesreturn_Product" => $salesreturn_Product,
										"salesreturn_Amount" => $salesreturn_Amount,
                                        "salesreturn_Division" => $salesreturn_Division
									);
									$status = $this->LedgerreportModel->insertSalesreturn($salesreturn_Entries);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Sales Return Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add Sales return",2);
   			} 
   			// load view 
   			$this->load->view('settings/ledgerreport/addsalesreturnView'); 
  		}else{
        $this->load->view('settings/ledgerreport/addsalesreturnView');
        }
        $this->load->view("footer");
    }
  
   /* Export CSV */
     public function creditnoteCSV(){
         // file name
		$filename = 'creditnote_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->LedgerreportModel->getcreditnotecsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Date","VoucherNo","Branch","Party","Account","Amount","Division");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;    
    }
    
    public function debitnotescsv(){
         // file name
		$filename = 'debitnote_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->LedgerreportModel->getdebitnotecsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Date","VoucherNo","Branch","Party","Account","Amount","Division");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;    
    }
    
    public function journalentrycsvExport(){
         // file name
		$filename = 'journalentry_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->LedgerreportModel->getjournalcsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Date","VoucherNo","Branch","Debit Ac","Credit Ac","Amount","Division");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;    
    }
    
    public function ledgercsvExport(){
         // file name
		$filename = 'ledger_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->LedgerreportModel->getledgercsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Date","VoucherNo","Branch","Debit Ac","Credit Ac","Amount","Division");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;    
    }
    
    public function purchasecsvExport(){
         // file name
		$filename = 'purchase_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->LedgerreportModel->getpurchasecsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Date","VoucherNo","Branch","Party","Purchase Ac","Product","Amount","Division");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;    
    }
    
    public function purreturncsvExport(){
        // file name
		$filename = 'purchasereturn_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->LedgerreportModel->getpurchasereturncsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Date","VoucherNo","Branch","Party","Purchase Return Ac","Product","Amount","Division");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;    
    }
    
    public function receiptscsvExport(){
         // file name
		$filename = 'receipt_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->LedgerreportModel->getreceiptcsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Date","VoucherNo","Mode","Branch","Party","Account","Amount","Division");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;    
    }
    
    public function salesreturncsvExport(){
         // file name
		$filename = 'salesreturn'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->LedgerreportModel->getsalesreturncsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Date","VoucherNo","Branch","Party","Product","Quantity","Unit Rate","Amount","Division");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;    
    }
    
    public function salescsvExport(){
        // file name
		$filename = 'sales_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->LedgerreportModel->getSalescsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Date","VoucherNo","Branch","Party","Product","Amount","Division");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;
    }
    
    public function collectionTarget(){
         $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->form_validation->set_rules("targetdays","Target Days","required|callback_target_check");
        if($this->form_validation->run()==true){
                    $add_target=array(
				"targetdays"=>$this->input->post("targetdays"),
                                "date" => date('d-m-Y')
			);
			
			$add_target=xss_clean($add_target);
			$status=$this->LedgerreportModel->addcollectionTarget($add_target);			
				if($status==true)
				{
						$this->session->set_tempdata("add_success","Target Days Added Successfully",2);
						redirect(base_url()."Setting/collectionTarget");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Target Day",2);
						redirect(base_url()."Setting/collectionTarget");
				}
        }else {
        $this->load->view("settings/collectiontargetView");
        }
        
        $this->load->view("footer");
    }
    
     public function target_check()
    {
            if ($this->input->post('targetdays') === '0')  {
            $this->form_validation->set_message('target_check', 'Please choose target days.');
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
  
    public function collectionTargets(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['targets']= $this->LedgerreportModel->viewTargets();
        $this->load->view("settings/collectiontargetsView",$data);
        $this->load->view("footer");
    }
    
    public function setsalesTarget(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['cities'] = $this->RoleengineModel->viewCities();
         $this->form_validation->set_rules("dealertarget_city","City","required|trim");
        
        if($this->form_validation->run()==true){
            $city_name = $this->input->post("dealertarget_city");
            $dealer_name = $this->input->post("dealer_Name");
            $month = $this->input->post("dealer_month");
            
           $data['dealer'] = $this->RoleengineModel->targetView($city_name,$dealer_name,$month);
           $this->load->view("settings/roleengine/setsaletargetView",$data);
           }else {
            $this->load->view("settings/roleengine/setsaletargetView",$data);
        }  
            //$this->load->view("settings/roleengine/setsaletargetView",$data);        
        $this->load->view("footer");
    }
    
    public function salesTarget(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->form_validation->set_rules("dealertarget_city", "City", "required|trim");

        if ($this->form_validation->run() == true) {
            $city_name = $this->input->post("dealertarget_city");
            $dealer_name = $this->input->post("dealer_Name");
            $month = $this->input->post("dealer_month");

            $data['dealer'] = $this->RoleengineModel->targetView($city_name, $dealer_name, $month);
            $this->load->view("settings/roleengine/saletargetView", $data);
        } else {
            $this->load->view("settings/roleengine/saletargetView", $data);
        }
        
        
        // $this->load->view("settings/roleengine/saletargetView");
        $this->load->view("footer");
    }
    
    public function salestargetUpdate(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if(isset($_POST['target_Update'])){
           
            $dealer_Id = $this->input->post("dealer_Id");
            $washer = $this->input->post("washer_Target");
            $washing_machine = $this->input->post("washingmachine_Target");
            $led = $this->input->post("led_Target");
            $air_cooler = $this->input->post("aircooler_Target");
            $dispenser = $this->input->post("dispense_Target");
            
            $query = $this->db->query("update dealer_target set washer='$washer', washing_machine='$washing_machine', led='$led', air_cooler='$air_cooler', dispenser='$dispenser'");
            if($this->db->affected_rows()>0){
                    $this->session->set_tempdata("upd_succ","Updated Successfully",2);
                    redirect(base_url()."Setting/salestargetUpdate");
            }else {
                 $this->session->set_tempdata("upd_error","Updated Successfully",2);
                    redirect(base_url()."Setting/salestargetUpdate");
            }
            
        }
        $this->load->view("settings/roleengine/salestargetUpdateview");
         $this->load->view("footer");
    }
    public function dealerName($id){
        //echo $id; echo "<br>";
       //echo "Decode ".urldecode($id); die; 
        $title = urldecode($id);
        //echo $title; die; 
//        echo "SELECT * FROM dealer_target WHERE city_name LIKE '%$title%'"; die; 
//        $query = $this->db->query("SELECT * FROM dealer_target WHERE city_name LIKE '%$title%'");
//        if($query->num_rows()>0){
//            $result= $query->result();
//            echo json_encode($result);
//        }else {
//            return false; 
//        }
        //echo "SELECT * FROM dealer_target WHERE city_name LIKE '$title'"; die; 
        $result=$this->db->like("city_name",$title)->get("dealer_target")->result();    
        echo json_encode($result);
    }
    
     public function generalRules(){
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("sidebar");
        $data['rules'] = $this->RoleengineModel->viewgeneralRules();
        $this->load->view("settings/roleengine/generalrulesView",$data);
        $this->load->view("footer");
    }
    
    public function addgeneralRule(){
       $this->load->view("header");
       $this->load->view("tabheader");
        $this->load->view("sidebar");
       $data['masterproducts'] = $this->RoleengineModel->viewmasterProducts();
       
       if(isset($_POST['generalrulesubmit'])){
           
            for($i=0; $i < count($_POST['aspallowsubcategory_Name']); $i++ ) {
                                $pur['aspallowcategory_Name'][]=  $_POST['aspallowcategory_Name'][$i];
                                $pur['aspallow_Free'][]=  $_POST['aspallow_Free'][$i];
                                $pur['aspallowrateafter_Free'][]=  $_POST['aspallowrateafter_Free'][$i];
                                $pur['aspallowsubcategory_Name'][]=  $_POST['aspallowsubcategory_Name'][$i];
                        }
                        
                        
                         $status=$this->RoleengineModel->addgeneralRUles($pur);
                         
                         if($status == true){
                             $this->session->set_flashdata('message_name', 'Successfully added general rules');
                            // $this->session->set_tempdata("addrules_success","Added success");
                            redirect(base_url()."Setting/addgeneralRule");
                         }
       }
                
        $this->load->view("settings/roleengine/addgeneralruleView",$data);
         $this->load->view("footer");
    
    }
    
    public function editgeneralRule($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['generalrule'] = $this->RoleengineModel->editgeneralRule($id);
        $data['masterproducts'] = $this->RoleengineModel->viewmasterProducts();
        $allowFree = $this->input->post("aspallowrateafter_Free");
        $after_free = (float)preg_replace('/[^0-9\.]/ui','',$allowFree);
        
        
            if(isset($_POST['editgeneralsubmit'])){
                 $edit_generalRule=array(
				"aspallow_Free"=>$this->input->post("aspallow_Free"),
				"aspallowrateafter_Free"=> $after_free
			);
			
			$edit_generalRule=xss_clean($edit_generalRule);
			
			$status=$this->RoleengineModel->updategeneralRule($edit_generalRule,$id);
			
			if($status==true)
				{
					$this->session->set_flashdata("upd_succ","Updated Successfully",2);
					redirect(base_url()."Setting/editgeneralRule/".$id);
				}
				else
				{
					$this->session->set_flashdata("upd_fail","Updated Fail");
					redirect(base_url()."Setting/editgeneralRule/".$id);
				}
            }
        
         $this->load->view("settings/roleengine/editgeneralruleView",$data);
         $this->load->view("footer");
    }
    
    public function delete_Generalrule($id){
        $this->db->query("delete from aspallowgeneral_rules where generalrules_Id=$id");		
		if($this->db->affected_rows()>0) 
		{
			echo "success";		
		} 
		else
		{
			echo "fail";
		}
    }
    
    public function productName($prodType){
        //echo ; die; 
        $type = urldecode($prodType);
        //echo $type; die; 
//        echo "SELECT * FROM dealer_target WHERE city_name LIKE '%$title%'"; die; 
//        $query = $this->db->query("SELECT * FROM dealer_target WHERE city_name LIKE '%$title%'");
//        if($query->num_rows()>0){
//            $result= $query->result();
//            echo json_encode($result);
//        }else {
//            return false; 
//        }
        //echo "SELECT * FROM products_master WHERE product_name LIKE '$type'"; die; 
        $result=$this->db->like("product_type",$type)->get("products_master")->result();    
        echo json_encode($result);
    }
    
    public function subcateDetail($id){
        $prod_Name = urldecode($id);
        
         //$result=$this->db->query("SELECT * FROM products_master WHERE product_name = '$prod_Name' ");
           $result=$this->db->like("product_name",$prod_Name)->get("products_master")->row();    
        echo json_encode($result);
//                    if($result->num_rows()>0) {
//                        $arr = array('product_info' => $result->result());
//                        echo json_encode($arr);
//                    }else {
//                        return false; 
//                    }	
    }
    
   
    public function specificRules(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['rules'] = $this->RoleengineModel->viewspecificRules();
        $this->load->view("settings/roleengine/specificrulesView",$data);
        $this->load->view("footer");
    }
    
    public function addspecificRule(){
       $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['masterproducts'] = $this->RoleengineModel->viewmasterProducts();
         $data['asps'] = $this->RoleengineModel->viewasps();
        if(isset($_POST['specificrulesubmit'])){
           
            for($i=0; $i < count($_POST['aspallowsubcategory_Name']); $i++ ) {
                                $pur['aspspecific_Name'][]=  $_POST['aspspecific_Name'][$i];
                                $pur['aspallowcategory_Name'][]=  $_POST['aspallowcategory_Name'][$i];
                                $pur['aspallow_Free'][]=  $_POST['aspallow_Free'][$i];
                                $pur['aspallowrateafter_Free'][]=  $_POST['aspallowrateafter_Free'][$i];
                                $pur['aspallowsubcategory_Name'][]=  $_POST['aspallowsubcategory_Name'][$i];
                        }
                        
                        
                         $status=$this->RoleengineModel->addspecificRUles($pur);
                         
                         if($status == true){
                             $this->session->set_flashdata('message_name', 'Successfully added speicific rules');
                            // $this->session->set_tempdata("addrules_success","Added success");
                            redirect(base_url()."Setting/addspecificRule");
                         }
       }
        $this->load->view("settings/roleengine/addspecificrulesView",$data);
        $this->load->view("footer"); 
    }
    
    public function editspecific_Rule($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['specificrule'] = $this->RoleengineModel->editspecificRule($id);  
            
         $allowFree = $this->input->post("aspallowrateafter_Free");
        $after_free = (float)preg_replace('/[^0-9\.]/ui','',$allowFree);
        
            if(isset($_POST['editspecificsubmit'])){
                 $edit_specificRule=array(
				"aspallow_Free"=>$this->input->post("aspallow_Free"),
				"aspallowrateafter_Free"=> $after_free
			);
			
			$edit_specificRule=xss_clean($edit_specificRule);
			
			$status=$this->RoleengineModel->updatespecificRule($edit_specificRule,$id);
			
			if($status==true)
				{
					$this->session->set_flashdata("upd_succ","Updated Successfully",2);
					redirect(base_url()."Setting/editspecific_Rule/".$id);
				}
				else
				{
					$this->session->set_flashdata("upd_fail","Updated Fail");
					redirect(base_url()."Setting/editspecific_Rule/".$id);
				}
            }
        
        $this->load->view("settings/roleengine/editspecificruleView",$data);
        $this->load->view("footer"); 
    }
    
    public function delete_Specificrule($id){
         $this->db->query("delete from aspspecific_rules where specificrules_Id=$id");		
		if($this->db->affected_rows()>0) 
		{
			echo "success";		
		} 
		else
		{
			echo "fail";
		}
    }
    
    public function dealers(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['dealers'] = $this->MasterModel->viewDealers();
        $this->load->view("settings/masters/dealersView",$data);
        $this->load->view("footer");
    }
    
    
    public function newDealers(){
        $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/dealers'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '2048000000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/dealers/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                    
                    
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {

//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
                                    $Dealer_Name = $filedata[1];
                                    $City = $filedata[2];
                        
                                    if ($c <> 0) {
                            $new_Dealer = array(
                                "Dealer_Name" => $Dealer_Name,
                                "City" => $City
                            );
                                        
                            
                                            $status = $this->MasterModel->addDealer($new_Dealer);    
                                        
                                        
                            
                        
                        }
                        $c = $c + 1;
                        
                       
                    
                    }
                    fclose($file);
                         
                    
                        $this->session->set_tempdata("add_success","Dealers Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add Dealers",2);
   			} 
   			// load view 
   			$this->load->view('settings/masters/adddealerView'); 
  		}else{
        $this->load->view("settings/masters/adddealerView");
        }
        $this->load->view("footer");
    }
    
    public function executive(){
         $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['executives'] = $this->MasterModel->viewExecutives();
        $this->load->view("settings/masters/executiveView",$data);
        $this->load->view("footer");
    }

    
    public function newExecutive(){
        
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){ 
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/executives'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/executives/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
//
//						 echo "<pre>";
//						 print_r($filedata); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
								$Executive_Name = $filedata[1];
                            $Manager = $filedata[2];
                            $Company = $filedata[3];
                        
								if ($c <> 0) {
									$new_Executive = array(
                                "Executive_Name" => $Executive_Name,
                                "Manager" => $Manager,
                                "Company" => $Company
                            );
                                    
									$status = $this->MasterModel->addExecutive($new_Executive);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Purchase Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add purchase",2);
   			} 
   			// load view 
   			$this->load->view('settings/masters/addexecutiveView'); 
  		}else{
        $this->load->view('settings/masters/addexecutiveView');
        }
        $this->load->view("footer");
    
}


    /*Users Sections */
    
    public function newUser(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        //userdept_Name
        $this->form_validation->set_rules("userdept_Name","Distributor Name","required|trim");
        $this->form_validation->set_rules("user_Name","Name","required|trim");
        $this->form_validation->set_rules("role_Name","Role","required|callback_role_check");  
        $this->form_validation->set_rules("email","Email","required|valid_email|trim");
        $this->form_validation->set_rules("password","Password","required|trim");
        $this->form_validation->set_rules("confirmPassword","Confirm Password","required|matches[password]|trim");
        if($this->form_validation->run()==true){
            
            $addnewUser = array(
                "userdept_Name" => $this->input->post("userdept_Name"),
                "contact_Person"=> $this->input->post("user_Name"),
                "user_role_id"=> $this->input->post("role_Name"),
                "email"=> $this->input->post("email"),
                "password"=> md5($this->input->post("password")),
                "user_City" => $this->input->post("user_City"),
                "contact_Number" => $this->input->post("contact_Number")
                );
            
            $addnewUser = xss_clean($addnewUser);
            
            $status=$this->UserroleModel->addnewUser($addnewUser);			
				if($status==true)
				{
						$this->session->set_tempdata("add_success","User Added Successfully",2);
						redirect(base_url()."Setting/newUser");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Role",2);
						redirect(base_url()."Setting/newUser");
				}
            
        }else {
            $this->load->view("settings/users/newuserView");
        }
        $this->load->view("footer");
    }
    
 function role_check(){
          if ($this->input->post('role_Name') === "0")  {
            $this->form_validation->set_message('role_check', 'Please choose role');
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    
    public function updatePassword($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['user'] = $this->UserroleModel->userData($id);
        $this->form_validation->set_rules("password","Password","required|trim");
        $this->form_validation->set_rules("confirmPassword","Confirm Password","required|matches[password]|trim");
        
        if($this->form_validation->run()==true){
            
            $updatePwd = array(
                    "password"=>md5($this->input->post("password"))
                );
            $updatePwd = xss_clean($updatePwd);
            
            $status=$this->UserroleModel->updatePassword($updatePwd,$id);
            
            if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Password has changed Successfully",2);
					redirect(base_url()."Setting/updatePassword/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Setting/updatePassword/".$id);
				}
            
        }else {
            $this->load->view("settings/users/updatepasswordView",$data);
        }
        $this->load->view("footer");
        
    }
    
    public function bulkUsers(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){
          
       
          
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/users'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/users/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filesop = fgetcsv($file, 1000, ",")) !== FALSE) {

				// 		 echo "<pre>";
				// 		 print_r($filesop); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;  
						
						    $roleId = $filesop[0];
                            $deptName = $filesop[1];
                            $contactPerson = $filesop[2];
                            $Email = $filesop[3];
                            $Password = $filesop[4];
                            $contact = $filesop[5];
                            $altternateContact = $filesop[6];
                            $address = $filesop[7];
                            $altaddress = $filesop[8];
                            $state = $filesop[9];
                            $userCity = $filesop[10];
                            $userpin = $filesop[11];
                            $latitude = $filesop[12];
                            $longitude = $filesop[13];
                            $deptsName = $filesop[14];
                            $distType = $filesop[15];
                            $partyType = $filesop[16];
                        
								if ($c <> 0) {
									$users_Data = array(
                                        "user_role_id" => $roleId,
                                        "userdept_Name" => $deptName,
                                        "contact_Person" => $contactPerson,
                                        "email" => $Email,
                                        "password" => md5($Password),
                                        "contact_Number" => $contact,
                                        "alternatecontact_Number" => $altternateContact,
                                        "address" => $address,
                                        "alternate_Address" => $altaddress,
                                        "user_State" => $state,
                                        "user_City" => $userCity,
                                        "user_Pincode" => $userpin,
                                        "user_Latitude" => $latitude,
                                        "user_Longitutde" => $longitude,
                                        "usersdept_Name" => $deptsName,
                                        "dealer_type" => $distType,
                                        "party_Type" => $partyType
									);
									$status = $this->UserroleModel->addUsers($users_Data);
								}
								
								// $deptName = $filesop[0];
        //                     $Email = $filesop[1];
        //                     $Password = $filesop[2];
        //                     $contact = $filesop[3];
        //                     $altternateContact = $filesop[4];
        //                     $userCity = $filesop[5];
        //                     $usersdeptName = $filesop[5];
                            
								
								// if ($c <> 0) {
								// 	$users_Data = array(
        //                                 "user_role_id" => 4,
        //                                 "userdept_Name" => $deptName,
        //                                 "email" => $Email,
        //                                 "password" => md5($Password),
        //                                 "contact_Number" => $contact,
        //                                 "alternatecontact_Number" => $altternateContact,
        //                                 "user_City" => $userCity,
        //                                 "usersdept_Name" => $usersdeptName
								// 	);
								// 	$status = $this->UserroleModel->addUsers($users_Data);
								// }
								
								
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Users Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add Users",2);
   			} 
   			// load view 
   			$this->load->view('settings/users/bulkusersView'); 
          
          
          
  		}else{
        $this->load->view("settings/users/bulkusersView");
        }
        $this->load->view("footer");
    }
    
     public function citymasters(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['masters'] = $this->MasterModel->citymasterLists();
        $this->load->view("settings/masters/citymastersView",$data);
        $this->load->view("footer");
    }
    
    public function addcityMaster(){
        
        $this->load->view("header");
    $this->load->view("tabheader");
      $this->load->view("sidebar");
      if($this->input->post('upload') != NULL ){
          
        $this->db->truncate('customerbalance');
          
   			$data = array(); 
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/citymaster'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/citymaster/".$filename,"r");
                    $c = 0;

                    $importData_arr = array();
                       
                    while (($filesop = fgetcsv($file, 1000, ",")) !== FALSE) {

//						 echo "<pre>";
//						 print_r($filesop); die; 
                        // $num = count($filedata);

                        // for ($c=0; $c < $num; $c++) {
                        //     $importData_arr[$i][] = $filedata[$c];
                        // }
						// $i++;
                    $District = $filesop[0];
                    $City = $filesop[1];
                    $ExecutiveName = $filesop[2];
                   
                        
								if ($c <> 0) {
									$citymasters_Data = array(
                                        "District" => $District,
                                        "City" => $City ,
                                        "ExecutiveName" => $ExecutiveName,
									);
									$status = $this->MasterModel->addcitymaster($citymasters_Data);
								}
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","City Masters Added Successfully",2);
     				   //$data['response'] = 'successfully uploaded '.$filename; 
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add City Master",2);
   			} 
   			// load view 
   			$this->load->view('settings/masters/addcitymastersView'); 
          
          
          
  		}else{
      
       $this->load->view("settings/masters/addcitymastersView");
      }
    $this->load->view("footer");
        
    }
    
    public function citymasterCSV(){
        // file name
		$filename = 'cityMaster_'.now().'.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
		$usersData = $this->MasterModel->citymasterLists();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("District","City","Executive Name");
		fputcsv($file, $header);

		foreach ($usersData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;
    }
    
    public function product(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['products'] = $this->MasterModel->productDetail();
        $this->load->view("settings/masters/productsView",$data);
        $this->load->view("footer");
    }
    
    public function addProducts(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){

       
        $data = array(); 
        if(!empty($_FILES['file']['name'])){ 
        // Set preference 
        $config['upload_path'] = 'assets/files/products'; 
        $config['allowed_types'] = 'csv'; 
        $config['max_size'] = '100000'; // max_size in kb 
        $config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

        // Load upload library 
        $this->load->library('upload',$config); 

        // File upload
        if($this->upload->do_upload('file')){ 
        // Get data about the file
        $uploadData = $this->upload->data(); 
        $filename = $uploadData['file_name']; 

        // Reading file
        $file = fopen("assets/files/products/".$filename,"r");
        $c = 0;

        $importData_arr = array();

        while (($filesop = fgetcsv($file, 1000, ",")) !== FALSE) {

//        						 echo "<pre>";
//        						 print_r($filesop); die; 
        // $num = count($filedata);

        // for ($c=0; $c < $num; $c++) {
        //     $importData_arr[$i][] = $filedata[$c];
        // }
        // $i++;
        $Master = $filesop[0];
        $Brand = $filesop[1];
        $Category = $filesop[2];
        
        if ($c <> 0) {
        $products_Data = array(
        "prod_Name" => $Master,
        "brand" => $Brand,
        "category" => $Category
        );
        $status = $this->MasterModel->addProduct($products_Data);
        }
        $c = $c + 1;

        }
        fclose($file);

        $this->session->set_tempdata("add_success","Products Added Successfully",2);
        //$data['response'] = 'successfully uploaded '.$filename; 
        }else{ 
        //$data['response'] = 'failed'; 
        $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
        } 
        }else{ 
        //$data['response'] = 'failed'; 
        $this->session->set_tempdata("add_fail","Umable to Add Brand",2);
        } 
        // load view 
        $this->load->view('settings/masters/addproductsView'); 



        }else{

        $this->load->view("settings/masters/addproductsView");
        }
        $this->load->view("footer");
    }
    
    public function partmasters(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['partmasters'] = $this->MasterModel->partsmasterDetail();
        $this->load->view("settings/masters/partsmasterView",$data);
        $this->load->view("footer");
    }
    
 //   public function addpartMaster(){
//        $this->load->view("header");
//        $this->load->view("tabheader");
//        $this->load->view("sidebar");
//        if($this->input->post('upload') != NULL ){
//
//       
//        $data = array(); 
//        if(!empty($_FILES['file']['name'])){ 
//        // Set preference 
//        $config['upload_path'] = 'assets/files/partsmaster'; 
//        $config['allowed_types'] = 'csv'; 
//        $config['max_size'] = '100000'; // max_size in kb 
//        $config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 
//
//        // Load upload library 
//        $this->load->library('upload',$config); 
//
//        // File upload
//        if($this->upload->do_upload('file')){ 
//        // Get data about the file
//        $uploadData = $this->upload->data(); 
//        $filename = $uploadData['file_name']; 
//
//        // Reading file
//        $file = fopen("assets/files/partsmaster/".$filename,"r");
//        $c = 0;
//
//        $importData_arr = array();
//
//        while (($filesop = fgetcsv($file, 1000, ",")) !== FALSE) {
////
////        						 echo "<pre>";
////        						 print_r($filesop); die; 
//        // $num = count($filedata);
//
//        // for ($c=0; $c < $num; $c++) {
//        //     $importData_arr[$i][] = $filedata[$c];
//        // }
//        // $i++;
//        $Product = $filesop[0];
//        $partName = $filesop[1];
//        
//        if ($c <> 0) {
//        $parts_Data = array(
//        "product_Name" => $Product,
//        "partName" => $partName,
//        );
//        $status = $this->MasterModel->addpartsMaster($parts_Data);
//        }
//        $c = $c + 1;
//
//        }
//        fclose($file);
//
//        $this->session->set_tempdata("add_success","Parts master Added Successfully",2);
//        //$data['response'] = 'successfully uploaded '.$filename; 
//        }else{ 
//        //$data['response'] = 'failed'; 
//        $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
//        } 
//        }else{ 
//        //$data['response'] = 'failed'; 
//        $this->session->set_tempdata("add_fail","Umable to Add parts",2);
//        } 
//        // load view 
//        $this->load->view('settings/masters/addpartsmasterView'); 
//
//
//
//        }else{
//
//        $this->load->view("settings/masters/addpartsmasterView");
//        }
//        $this->load->view("footer");
        
//        $this->load->view("header");
//        $this->load->view("tabheader");
//        $this->load->view("sidebar");
//        
//        if ($this->input->post('submit')) {
//                 
//                $path = 'assets/files/partsmaster/';
//                require_once APPPATH . "/third_party/PHPExcel.php";
//                $config['upload_path'] = $path;
//                $config['allowed_types'] = 'xlsx|xls|csv';
//                $config['remove_spaces'] = TRUE;
//                $this->load->library('upload', $config);
//                $this->upload->initialize($config);            
//                if (!$this->upload->do_upload('uploadFile')) {
//                    $error = array('error' => $this->upload->display_errors());
//                } else {
//                    $data = array('upload_data' => $this->upload->data());
//                }
//                if(empty($error)){
//                  if (!empty($data['upload_data']['file_name'])) {
//                    $import_xls_file = $data['upload_data']['file_name'];
//                } else {
//                    $import_xls_file = 0;
//                }
//                $inputFileName = $path . $import_xls_file;
//                 
//                try {
//                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
//                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
//                    $objPHPExcel = $objReader->load($inputFileName);
//                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
//                    $flag = true;
//                    $i=0;
//
////                     echo "<pre>";
////                     print_r($allDataInSheet); die; 
//                    foreach ($allDataInSheet as $value) {
//                      if($flag){
//                        $flag =false;
//                        continue;
//                      }
//                        
//                        $inserdata[$i]['brand_Name'] = $value['A'];
//                        $inserdata[$i]['category_Name'] = $value['B'];
//                        $inserdata[$i]['partName'] = $value['C'];
//                        $inserdata[$i]['hsn_Code'] = $value['D'];
//                        $inserdata[$i]['stock_Qty'] = $value['E'];
//                        $inserdata[$i]['unit_Rate'] = $value['F'];
//                        $inserdata[$i]['discount_Amount'] = $value['G'];
//                        $inserdata[$i]['support'] = $value['H'];
//                        $inserdata[$i]['SGST'] = $value['I'];
//                        $inserdata[$i]['CGST'] = $value['J'];
//                        $inserdata[$i]['IGST'] = $value['K'];
//                      $i++;
//                    }          
//                    // echo "<pre>";
//                    // print_r($inserdata); die;      
//                    $result = $this->MasterModel->addspareParts($inserdata);   
//                    if($result){
//                      //echo "Imported successfully";
//                        $this->session->set_tempdata("add_success","Parts master Added Successfully",2);
//                       // redirect(base_url()."Setting/engineer");
//                        //redirect(base_url()."Setting/engineer");
//                    }else{
//                      echo "ERROR !";
//                    }             
//      
//              } catch (Exception $e) {
//                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
//                            . '": ' .$e->getMessage());
//                }
//              }else{
//                  echo $error['error'];
//                }
//                 
//                 
//        }
//        
//        $this->load->view("settings/masters/addpartsmasterView");
//        $this->load->view("footer");
        
   // }
    
    public function aspLocation(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['asplocations'] = $this->MasterModel->viewasplocations();
        $this->load->view("settings/masters/asplocationView",$data);
        $this->load->view("footer");
    }
    
    public function addaspLocation(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if($this->input->post('upload') != NULL ){

       
        $data = array(); 
        if(!empty($_FILES['file']['name'])){ 
        // Set preference 
        $config['upload_path'] = 'assets/files/asplocation'; 
        $config['allowed_types'] = 'csv'; 
        $config['max_size'] = '100000'; // max_size in kb 
        $config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

        // Load upload library 
        $this->load->library('upload',$config); 

        // File upload
        if($this->upload->do_upload('file')){ 
        // Get data about the file
        $uploadData = $this->upload->data(); 
        $filename = $uploadData['file_name']; 

        // Reading file
        $file = fopen("assets/files/asplocation/".$filename,"r");
        $c = 0;

        $importData_arr = array();

        while (($filesop = fgetcsv($file, 1000, ",")) !== FALSE) {
//
//        						 echo "<pre>";
//        						 print_r($filesop); die; 
        // $num = count($filedata);

        // for ($c=0; $c < $num; $c++) {
        //     $importData_arr[$i][] = $filedata[$c];
        // }
        // $i++;
        $asp_Name = $filesop[0];
        $asp_Contactperson = $filesop[1];
        $asp_City = $filesop[2];
        $asp_Latitude = $filesop[3];
        $asp_Longitude = $filesop[4];
        $asp_Status = $filesop[5];
        
        if ($c <> 0) {
        $asplocation_Data = array(
        "asp_Name" => $asp_Name,
        "asp_Contactperson" => $asp_Contactperson,
        "asp_City" => $asp_City,
        "asp_Latitude" => $asp_Latitude,
        "asp_Longitude" => $asp_Longitude,
        "asp_Status" => $asp_Status,
        );
        $status = $this->MasterModel->addaspLocation($asplocation_Data);
        }
        $c = $c + 1;

        }
        fclose($file);

        $this->session->set_tempdata("add_success","ASP Location Added Successfully",2);
        //$data['response'] = 'successfully uploaded '.$filename; 
        }else{ 
        //$data['response'] = 'failed'; 
        $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
        } 
        }else{ 
        //$data['response'] = 'failed'; 
        $this->session->set_tempdata("add_fail","Umable to Add Location",2);
        } 
        // load view 
        $this->load->view('settings/masters/addasplocationView'); 



        }else{

        $this->load->view("settings/masters/addasplocationView");
        }
        $this->load->view("footer");
    }
    
      public function aspspecicDetail($id){
        $result = $this->db->query("select * from asp where asp_Id='$id'");
        $res = $result->row();
		echo json_encode($res);
    }
    
    public function productComplaint(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $data['complaints'] = $this->MasterModel->viewprodcomplaints();
        $this->load->view("settings/masters/prodcomplaintView",$data);
        $this->load->view("footer");
        
    }
    
    public function addproductComplaint(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        if ($this->input->post('submit')) {
                 
                $this->db->truncate('product_complaint');
                $path = 'assets/files/prodcomplaint/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;

//                     echo "<pre>";
//                     print_r($allDataInSheet); die; 
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                     
                      $inserdata[$i]['product_Category'] = $value['A'];
                      $inserdata[$i]['nature_Complaint'] = $value['B'];
                      $i++;
                    }          
                    // echo "<pre>";
                    // print_r($inserdata); die;      
                    $result = $this->MasterModel->addprodComplaint($inserdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Product Complaint Added Successfully",2);
                       // redirect(base_url()."Setting/engineer");
                        //redirect(base_url()."Setting/engineer");
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $this->load->view("settings/masters/addprodcomplaintView");
        $this->load->view("footer");
    }
    
    public function productMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $data['productsmaster'] = $this->MasterModel->viewskyzenProducts();
        // echo "<pre>";
        // print_r($data['productsmaster']); die; 
        $this->load->view("settings/masters/prodmasterView",$data);
        $this->load->view("footer");
    }
    
    public function addbulkproductMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        if ($this->input->post('submit')) {
                 
               // $this->db->truncate("skyzenproducts_master");
                $this->db->truncate("product_Master");
                $path = 'assets/files/skyzenproducts/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;

                    // echo "<pre>";
                    // print_r($allDataInSheet); die; 
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                     //print_r($value); die; 
                    $inserdata[$i]['prod_Name'] = $value['B'];
                    $inserdata[$i]['prod_Description'] = $value['C'];
                    $inserdata[$i]['prod_Smu'] = $value['D'];
                    $inserdata[$i]['prod_AlternateSmu'] = $value['E'];
                    $inserdata[$i]['brand_Name'] = 'Skyzen';
                    $inserdata[$i]['status'] = $value['F'];
                    $inserdata[$i]['node'] = $value['G'];
                    $inserdata[$i]['master_Group'] = $value['H'];
                    $inserdata[$i]['master_Node1'] = $value['I'];
                    $inserdata[$i]['category_Name'] = $value['J'];
                    $inserdata[$i]['category_Two'] = $value['K'];
                    $inserdata[$i]['category_Three'] = $value['L'];
                    $inserdata[$i]['cost_One'] = $value['M'];
                    $inserdata[$i]['cost_Two'] = $value['N'];
                    $inserdata[$i]['cost_Three'] = $value['O'];
                        
                      $i++;
                    }          
                    // echo "<pre>";
                    // print_r($inserdata); die;      
                    $result = $this->MasterModel->addskyzenProduct($inserdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Products  Added Successfully",2);
                       // redirect(base_url()."Setting/engineer");
                        //redirect(base_url()."Setting/engineer");
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        
        
        $this->load->view("settings/masters/addbulkproductView");
        $this->load->view("footer");
    }
    
    public function addproductMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        $this->form_validation->set_rules("product_Name","Product Name","required|trim");
        
        if($this->form_validation->run()==true){
            
            $addprodMaster = array(
                        "brand_Name" => $this->input->post("partbrand_Name"),
                        "category_Name" => $this->input->post("partcategory_Name"),
                        "prod_Name" => $this->input->post("product_Name"),
                        "prod_Description" => $this->input->post("product_Description"),
                        "prod_Smu" => $this->input->post("proudct_Smu"),
                        "prod_AlternateSmu" => $this->input->post("prod_AlternateSmu"),
                        "prod_Unitrate" => $this->input->post("produnit_Rate")
                    );
            
                    $addprodMaster = xss_clean($addprodMaster);
            
                $status = $this->MasterModel->addprodMaster($addprodMaster);
            if($status==true)
				{
						$this->session->set_tempdata("add_success","Product Added Successfully",2);
						redirect(base_url()."Setting/addproductMaster");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Product",2);
						redirect(base_url()."Setting/addproductMaster");
				}
            
            
        }else {
            $this->load->view("settings/masters/addprodmasterView");
        }
        
        $this->load->view("footer");
    }
    
    public function productCSV(){
        $filename = 'ProductMaster.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 

		// get data
	//	$aspData = $this->CrmModel->getaspcsv();
//        echo "<pre>";
//        print_r($usersData); die; 
		// file creation
		$file = fopen('php://output', 'w');

		$header = array("Product Name","Product Description","Product SMU","Alternate SMU","Product Rate","Product GST","Brand","Category");
		fputcsv($file, $header);

//		foreach ($aspData as $key=>$line){
//            $line = (array) $line;
//		 fputcsv($file,$line);
//		}

		fclose($file);
		exit; 
    }
    
    public function partMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $data['partsmasters'] = $this->MasterModel->viewskyzenParts();
//        echo "<pre>";
//        print_r($data['partsmasters']); die; 
        $this->load->view("settings/masters/partmasterView",$data);
        $this->load->view("footer");
    }
    
    public function addbulkpartMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        if ($this->input->post('submit')) {
                 
                 $this->db->truncate("skyzenpart_master");
                $path = 'assets/files/skyzenparts/';
                //require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;

                    // echo "<pre>";
                    // print_r($allDataInSheet); die; 
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                    
                    $inserdata[$i]['branch'] = $value['A'];
                    $inserdata[$i]['part_Name'] = $value['B'];
                    $inserdata[$i]['part_Description'] = $value['C'];
                    $inserdata[$i]['part_Smu'] = $value['D'];
                    $inserdata[$i]['part_AlternateSmu'] = $value['E'];
                    $inserdata[$i]['Brand'] = $value['F'];
                    $inserdata[$i]['Category'] = $value['G'];
                    $inserdata[$i]['model_No'] = $value['H'];
                    $inserdata[$i]['partunit_Rate'] = $value['I'];
                        
                      $i++;
                    }          
                    // echo "<pre>";
                    // print_r($inserdata); die;      
                    $result = $this->MasterModel->addskyzenPart($inserdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Parts Added Successfully",2);
                       // redirect(base_url()."Setting/engineer");
                        //redirect(base_url()."Setting/engineer");
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        
        $this->load->view("settings/masters/addbulkpartsView");
        $this->load->view("footer");
    }
    
    public function addpartMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        $this->form_validation->set_rules("part_Name","Part Name","required|trim");
        if($this->form_validation->run()==true){
//            echo "<pre>";
//            print_r($_POST); die; 
                    $addpartMaster = array(
                        "Brand" => $this->input->post("partbrand_Name"),
                        "Category" => $this->input->post("partcategory_Name"),
                        "part_Name" => $this->input->post("part_Name"),
                        "part_Description" => $this->input->post("part_Description"),
                        "part_Smu" => $this->input->post("part_Smu"),
                        "part_AlternateSmu" => $this->input->post("part_AlternateSmu"),
                        "partunit_Rate" => $this->input->post("partunit_Rate")
                    );
            
                    $addpartMaster = xss_clean($addpartMaster);
            
                $status = $this->MasterModel->addpartMaster($addpartMaster);
            if($status==true)
				{
						$this->session->set_tempdata("add_success","Part Added Successfully",2);
						redirect(base_url()."Setting/addpartMaster");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Part",2);
						redirect(base_url()."Setting/addpartMaster");
				}
        }else {
            $this->load->view("settings/masters/addpartmasterView");
        }
        
        $this->load->view("footer");
    }
    
    public function categorymasterList($brandId){
        $result = $this->db->query("select * from category_master where categorybrand_Name='$brandId'");
        $res = $result->result();
		echo json_encode($res);
    }
    
    public function partCSV(){
		$filename = 'PartMaster.csv';
		
		
		$partsData = $this->MasterModel->partMasters();
// 		echo "<pre>";
// 		print_r($partsData); die; 
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
		$file = fopen('php://output', 'w');

		$header = array("Part Name","Part Description","Part SMU","Alternate SMU","Brand","Category","Unit Rate");
		fputcsv($file, $header);
        
        foreach ($partsData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;   
    }
    
    public function aspMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $data['asps'] = $this->MasterModel->viewaspMaster();
//        echo "<pre>";
//        print_r($data['products']); die; 
        $this->load->view("settings/masters/aspmasterView",$data);
        $this->load->view("footer");
    }
    
    public function addbulkaspMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        if ($this->input->post('submit')) {
                 //$insertdata = array();
                $path = 'assets/files/aspmaster/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;

//                     echo "<pre>";
//                     print_r($allDataInSheet); die; 
                    
                    
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                     
                    $insertdata[$i]['asp_Name'] = $value['B'];
                    $insertdata[$i]['contact_Person'] = $value['C'];
                    $insertdata[$i]['contact_Number'] = $value['D'];
                    $insertdata[$i]['alternatecontact_Number'] = $value['E'];
                    $insertdata[$i]['asp_Email'] = $value['F'];
                    $insertdata[$i]['asp_Address'] = $value['G'];
                    $insertdata[$i]['asp_Alternateaddress'] = $value['H'];
                    $insertdata[$i]['asp_State'] = $value['I'];
                    $insertdata[$i]['asp_City'] = $value['J'];
                    $insertdata[$i]['asp_Pincode'] = $value['K'];
                    $insertdata[$i]['asp_Latittude'] = $value['L'];
                    $insertdata[$i]['asp_Longitude'] = $value['M'];
                        
                      $i++;
                    }          
//                     echo "<pre>";
//                     print_r($insertdata); die;      
                    $result = $this->MasterModel->addaspMaster($insertdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Asp Added Successfully",2);
                       // redirect(base_url()."Setting/engineer");
                        //redirect(base_url()."Setting/engineer");
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        
        $this->load->view("settings/masters/addbulkaspsView");
        $this->load->view("footer");
    }
    
    public function addaspMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        $this->form_validation->set_rules("asp_Name","Asp Name","required|trim");
        //asp_Name
        if($this->form_validation->run()==true){
            // echo "<pre>";
            // print_r($_POST); die;
            
            $addasp= array(
                    "user_role_id" => 7,
                    "userdept_Name" => $this->input->post("asp_Name"),
                    "contact_Person" => $this->input->post("contact_Person"),
                    "contact_Number" => $this->input->post("contact_Number"),
                    "alternatecontact_Number" => $this->input->post("alternatecontact_Number"),
                    "email" => $this->input->post("asp_Email"),
                    "password" => md5('asp'),
                    "address" => $this->input->post("asp_Address"),
                    "alternate_Address" => $this->input->post("asp_Alternateaddress"),
                    "user_State" => $this->input->post("asp_State"),
                    "user_City" => $this->input->post("asp_City"),
                    "user_Pincode" => $this->input->post("asp_Pincode"),
                    "user_Latitude" => $this->input->post("asp_Latittude"),
                    "user_Longitutde" => $this->input->post("asp_Longitude")
                );
                
                $addasp = xss_clean($addasp);
                
                $status = $this->MasterModel->addAsp($addasp);
                if($status==true)
				{
						$this->session->set_tempdata("add_success","Asp Added Successfully",2);
						redirect(base_url()."Setting/addaspMaster");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Asp",2);
						redirect(base_url()."Setting/addaspMaster");
				}
        }else {
            $this->load->view("settings/masters/addaspmasterView");
        }
        
        $this->load->view("footer");
    }
    
    
    
    public function categoryMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $data['categories']=$this->MasterModel->viewmasterCategories();
//        echo "<pre>";
//        print_r($data['categories']); die; 
        $this->load->view("settings/masters/categorymasterView",$data);
        $this->load->view("footer");
    }
    
    public function addcategoryMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $this->form_validation->set_rules("category_Name","Category Name","required|trim");
        
        if($this->form_validation->run()==true){
            
                $addcategory_Details = array(
                        "categorybrand_Name"=>$this->input->post("masterbrand_Name"),
                        "category_Name"=>$this->input->post("category_Name"),
                        "category_Alias"=>$this->input->post("category_Alias")
                    );
            
            $addcategory_Details = xss_clean($addcategory_Details);
            
            $status = $this->MasterModel->addCategory($addcategory_Details);
            
            if($status==true)
				{
						$this->session->set_tempdata("add_success","Category added Successfully",2);
						redirect(base_url()."Setting/addcategoryMaster");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Category",2);
						redirect(base_url()."Setting/addcategoryMaster");
				}
        }else {
            $this->load->view("settings/masters/addcategorymasterView");
        }
        
        $this->load->view("footer");
    }
    
    public function bulkcategoryMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        
if ($this->input->post('submit')) {
                 
                $path = 'assets/files/skyzenparts/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;

//                     echo "<pre>";
//                     print_r($allDataInSheet); die; 
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                     
                    $inserdata[$i]['categorybrand_Name'] = $value['A'];
                    $inserdata[$i]['category_Name'] = $value['B'];
                    $inserdata[$i]['category_Alias'] = $value['C'];
                        
                      $i++;
                    }          
                    // echo "<pre>";
                    // print_r($inserdata); die;      
                    $result = $this->MasterModel->addbulkcategoryMaster($inserdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Category Added Successfully",2);
                       // redirect(base_url()."Setting/engineer");
                        //redirect(base_url()."Setting/engineer");
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $this->load->view("settings/masters/addbulkcategorymasterView");
        $this->load->view("footer");
    }
    
     public function branch(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['branches'] = $this->MasterModel->viewBranches();
//        echo "<pre>";
//         print_r($data['branches']); die; 
        $this->load->view("settings/masters/branch/branchsView",$data);
        $this->load->view("footer");
    }
    
    
    public function addbranchMaster(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        
        $this->form_validation->set_rules("branch_Name","Branch Name","required|trim");
        if($this->form_validation->run() == true){
            
                $addbranchMaster = array(
                        "branch_Name" => $this->input->post("branch_Name"),
                        "branch_Code" => $this->input->post("branch_Code"),
                        "branch_Aliasname" => $this->input->post("branch_Aliasname")                    
                    );
            
                $addbranchMaster = xss_clean($addbranchMaster);
            
                $status = $this->MasterModel->addbranchMaster($addbranchMaster);
            
             if($status==true)
				{
						$this->session->set_tempdata("add_success","Branch added Successfully",2);
						redirect(base_url()."Setting/addbranchMaster");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Branch",2);
						redirect(base_url()."Setting/addbranchMaster");
				}
        }else {
            $this->load->view("settings/masters/branch/addbranchsView");
        }
        
        $this->load->view("footer");
    }
    
    public function editbranchMaster($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['branch'] = $this->MasterModel->editbrancDetail($id);
        
        $this->form_validation->set_rules("branch_Name","Branch Name","required|trim");
        if($this->form_validation->run()==true){
            
            
                $editbranch = array(
                        "branch_Name" => $this->input->post("branch_Name"),
                        "branch_Code" => $this->input->post("branch_Code"),
                        "branch_Aliasname" => $this->input->post("branch_Aliasname")
                    );
            
                $editbranch = xss_clean($editbranch);
            
                $status = $this->MasterModel->updateBranch($editbranch,$id);
            
               if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Branch Details has changed Successfully",2);
					redirect(base_url()."Setting/editbranchMaster/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Setting/editbranchMaster/".$id);
				}
        }else {
            $this->load->view("settings/masters/branch/editbranchsView",$data);
        }
        
        $this->load->view("footer");
    }
    
    public function deleteBranch($id){
        $this->db->query("update branch_master set branch_Status='0' where branch_Id=$id");		
		if($this->db->affected_rows()>0) 
		{
			echo "success";		
		} 
		else
		{
			echo "fail";
		}
    }
    
    public function addbulkbranch(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if ($this->input->post('submit')) {
                 
                $path = 'assets/files/branchmaster/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;

//                     echo "<pre>";
//                     print_r($allDataInSheet); die; 
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                     
                    $inserdata[$i]['branch_Name'] = $value['A'];
                    $inserdata[$i]['branch_Code'] = $value['B'];
                    $inserdata[$i]['branch_Aliasname'] = $value['C'];
                        
                      $i++;
                    }          
                    // echo "<pre>";
                    // print_r($inserdata); die;      
                    $result = $this->MasterModel->addbulkbranch($inserdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Branch Added Successfully",2);
                       // redirect(base_url()."Setting/engineer");
                        //redirect(base_url()."Setting/engineer");
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        
        $this->load->view("settings/masters/branch/addbulkbranchView");
        $this->load->view("footer");
    }
    
    public function branchCSV(){
        $filename = 'PartMaster.csv';
		
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
		$file = fopen('php://output', 'w');

		$header = array("Part Name","Part Description","Part SMU","Alternate SMU","Brand","Category");
		fputcsv($file, $header);


		fclose($file);
		exit;   
    }
    
    public function location(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['locations'] = $this->MasterModel->viewLocations();
//        echo "<pre>";
//         print_r($data['branches']); die; 
        $this->load->view("settings/masters/location/locationssView",$data);
        $this->load->view("footer");
    }
    
    public function addlocationMaster(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['branches'] = $this->MasterModel->viewBranches();
        $this->form_validation->set_rules("location_Name","Location Name","required|trim");
        if($this->form_validation->run() == true){
            
                $addlocationMaster = array(
                        "locbranch_Name" => $this->input->post("locbranch_Name"),
                        "location_Name" => $this->input->post("location_Name"),
                        "location_Code" => $this->input->post("location_Code"),
                        "location_Aliasname" => $this->input->post("location_Aliasname") 
                    );
            
                $addlocationMaster = xss_clean($addlocationMaster);
            
                $status = $this->MasterModel->addlocationMaster($addlocationMaster);
            
             if($status==true)
				{
						$this->session->set_tempdata("add_success","Location added Successfully",2);
						redirect(base_url()."Setting/addlocationMaster");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Location",2);
						redirect(base_url()."Setting/addlocationMaster");
				}
        }else {
            $this->load->view("settings/masters/location/addlocationView",$data);
        }
        
        $this->load->view("footer");
    }
    
    public function addbulkLocation(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        if ($this->input->post('submit')) {
                 
                $path = 'assets/files/locationmaster/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;

//                     echo "<pre>";
//                     print_r($allDataInSheet); die; 
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                     
                    $inserdata[$i]['locbranch_Name'] = $value['A'];
                    $inserdata[$i]['location_Name'] = $value['B'];
                    $inserdata[$i]['location_Code'] = $value['C'];
                    $inserdata[$i]['location_Aliasname'] = $value['D'];
                        
                      $i++;
                    }          
                    // echo "<pre>";
                    // print_r($inserdata); die;      
                    $result = $this->MasterModel->addbulklocation($inserdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Location Added Successfully",2);
                       // redirect(base_url()."Setting/engineer");
                        //redirect(base_url()."Setting/engineer");
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        
        $this->load->view("settings/masters/location/addbulklocationView");
        $this->load->view("footer");
    }
    
    public function editlocation($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['location'] = $this->MasterModel->editlocationDetail($id);
        
        $this->form_validation->set_rules("branch_Name","Branch Name","required|trim");
        if($this->form_validation->run()==true){
            
            
                $editbranch = array(
                        "branch_Name" => $this->input->post("branch_Name"),
                        "branch_Code" => $this->input->post("branch_Code"),
                        "branch_Aliasname" => $this->input->post("branch_Aliasname")
                    );
            
                $editbranch = xss_clean($editbranch);
            
                $status = $this->MasterModel->updateBranch($editbranch,$id);
            
               if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Branch Details has changed Successfully",2);
					redirect(base_url()."Setting/editbranchMaster/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Setting/editbranchMaster/".$id);
				}
        }else {
            $this->load->view("settings/masters/branch/editbranchsView",$data);
        }
        
        $this->load->view("footer");
    }
    
    public function distributorMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $data['distributors'] = $this->MasterModel->viewdistMaster();
//        echo "<pre>";
//        print_r($data['distributors']); die; 
        $this->load->view("settings/masters/distmasterView",$data);
        $this->load->view("footer");
    }
    
    public function adddistMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $this->form_validation->set_rules("userdept_Name","Distributor Name","required|trim");
        $this->form_validation->set_rules("email","Email","required|valid_email|trim");
        $this->form_validation->set_rules("password","Password","required|trim");
        $this->form_validation->set_rules("user_City","City","required|trim");
        $this->form_validation->set_rules("party_Type","Party Type","required|trim");
        if($this->form_validation->run() == true){
                
                $addDistributor = array(
                    "user_role_id" => 3, 
                    "userdept_Name" => $this->input->post("userdept_Name"),
                    "contact_Person" => $this->input->post("contact_Person"),
                    "contact_Number" => $this->input->post("contact_Number"),
                    "alternatecontact_Number" => $this->input->post("alternatecontact_Number"),
                    "email" => $this->input->post("email"),
                    "password" => md5($this->input->post("password")),
                    "address" => $this->input->post("address"),
                    "alternate_Address" => $this->input->post("alternate_Address"),
                    "user_State" => $this->input->post("user_State"),
                    "user_City" => $this->input->post("user_City"),
                    "user_Pincode" => $this->input->post("user_Pincode"),
                    "user_Latitude" => $this->input->post("user_Latitude"),
                    "user_Longitutde" => $this->input->post("user_Longitutde"),
                    "dealer_type" => $this->input->post("dealer_type"),
                    "party_Type" => $this->input->post("party_Type"),
                    
                    );
            
                $addDistributor = xss_clean($addDistributor);
            
            $status = $this->MasterModel->addDistributor($addDistributor);
            
             if($status==true)
				{
						$this->session->set_tempdata("add_success","Distributor added Successfully",2);
						redirect(base_url()."Setting/adddistMaster");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Distributor",2);
						redirect(base_url()."Setting/adddistMaster");
				}
            
            
        }else {
            $this->load->view("settings/masters/adddistmasterView");
        }
        
        $this->load->view("footer");
    }
    
    public function editDistributor($id){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $data['dist'] = $this->MasterModel->editdistMaster($id);
//        echo "<pre>";
//        print_r($data['dist']); die; 
        
        $this->form_validation->set_rules("userdept_Name","Distributor Name","required|trim");
        $this->form_validation->set_rules("email","Email","required|valid_email|trim");
        $this->form_validation->set_rules("password","Password","required|trim");
        $this->form_validation->set_rules("user_City","City","required|trim");
        $this->form_validation->set_rules("party_Type","Party Type","required|trim");
        if($this->form_validation->run() == true){
                
                $updateDistributor = array(
                    "user_role_id" => 3, 
                    "userdept_Name" => $this->input->post("userdept_Name"),
                    "contact_Person" => $this->input->post("contact_Person"),
                    "contact_Number" => $this->input->post("contact_Number"),
                    "alternatecontact_Number" => $this->input->post("alternatecontact_Number"),
                    "email" => $this->input->post("email"),
                    "password" => md5($this->input->post("password")),
                    "address" => $this->input->post("address"),
                    "alternate_Address" => $this->input->post("alternate_Address"),
                    "user_State" => $this->input->post("user_State"),
                    "user_City" => $this->input->post("user_City"),
                    "user_Pincode" => $this->input->post("user_Pincode"),
                    "user_Latitude" => $this->input->post("user_Latitude"),
                    "user_Longitutde" => $this->input->post("user_Longitutde"),
                    "dealer_type" => $this->input->post("dealer_type"),
                    "party_Type" => $this->input->post("party_Type"),
                    
                    );
            
                $updateDistributor = xss_clean($updateDistributor);
            
            $status = $this->MasterModel->updateDistributor($updateDistributor,$id);
            
             if($status==true)
				{
						$this->session->set_tempdata("add_success","Distributor Updated Successfully",2);
						redirect(base_url()."Setting/editDistributor/".$id);
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Edit Distributor",2);
						redirect(base_url()."Setting/editDistributor/".$id);
				}
            
            
        
       
    }else {
            $this->load->view("settings/masters/editdistmasterView",$data);
        }
         $this->load->view("footer");
    }
    
    
//     public function addbulkdistMaster(){
       
//         $this->load->view("header");
//         $this->load->view("sidebar");
//         $this->load->view("tabheader");
        
//         if ($this->input->post('submit')) {
            
//             //$this->db->query("delete FROM users WHERE user_role_id =3");
//                  //$insertdata = array();
//                 $path = 'assets/files/distributors/';
//                 require_once APPPATH . "/third_party/PHPExcel.php";
//                 $config['upload_path'] = $path;
//                 $config['allowed_types'] = 'xlsx|xls|csv';
//                 $config['remove_spaces'] = TRUE;
//                 $this->load->library('upload', $config);
//                 $this->upload->initialize($config);            
//                 if (!$this->upload->do_upload('uploadFile')) {
//                     $error = array('error' => $this->upload->display_errors());
//                 } else {
//                     $data = array('upload_data' => $this->upload->data());
//                 }
//                 if(empty($error)){
//                   if (!empty($data['upload_data']['file_name'])) {
//                     $import_xls_file = $data['upload_data']['file_name'];
//                 } else {
//                     $import_xls_file = 0;
//                 }
//                 $inputFileName = $path . $import_xls_file;
                 
//                 try {
//                     $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
//                     $objReader = PHPExcel_IOFactory::createReader($inputFileType);
//                     $objPHPExcel = $objReader->load($inputFileName);
//                     $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
//                     $flag = true;
//                     $i=0;

//                     echo "<pre>";
//                     print_r($allDataInSheet); die; 
                    
                    
//                     foreach ($allDataInSheet as $value) {
//                       if($flag){
//                         $flag =false;
//                         continue;
//                       }
//                      $insertdata[$i]['user_role_id'] = 3;
                        
//                     $insertdata[$i]['userdept_Name'] = $value['A'];
//                     $insertdata[$i]['contact_Person'] = $value['B'];
//                     $insertdata[$i]['email '] = $value['C'];
//                     $insertdata[$i]['password'] =md5($value['D']);
//                     $insertdata[$i]['contact_Number'] = $value['E'];
//                     $insertdata[$i]['alternatecontact_Number'] = $value['F'];
//                     $insertdata[$i]['address'] = $value['G'];
//                     $insertdata[$i]['alternate_Address'] = $value['H'];
//                     $insertdata[$i]['user_State'] = $value['I'];
//                     $insertdata[$i]['user_City'] = $value['J'];
//                     $insertdata[$i]['user_Pincode'] = $value['K'];
                    
                        
//                       $i++;
//                     }          
// //                     echo "<pre>";
// //                     print_r($insertdata); die;      
//                     $result = $this->MasterModel->adddistMaster($insertdata);   
//                     if($result){
//                       //echo "Imported successfully";
//                         $this->session->set_tempdata("add_success","Distriburos Added Successfully",2);
//                       // redirect(base_url()."Setting/engineer");
//                         //redirect(base_url()."Setting/engineer");
//                     }else{
//                       echo "ERROR !";
//                     }             
      
//               } catch (Exception $e) {
//                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
//                             . '": ' .$e->getMessage());
//                 }
//               }else{
//                   echo $error['error'];
//                 }
                 
                 
//         }
        
//         $this->load->view("settings/masters/addbulkdistView");
//         $this->load->view("footer");
//     }
    
    public function executiveMaster(){
         $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $data['executives'] = $this->MasterModel->viewexeMaster();
//        echo "<pre>";
//        print_r($data['distributors']); die; 
        $this->load->view("settings/masters/executivemasterView",$data);
        $this->load->view("footer");
    }
    
    public function addbulkexecMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        if ($this->input->post('submit')) {
            
                $this->db->query("delete FROM users WHERE user_role_id =6");
                 //$insertdata = array();
                $path = 'assets/files/executives/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;

                    // echo "<pre>";
                    // print_r($allDataInSheet); die; 
                    
                    
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      
                    $insertdata[$i]['user_role_id'] = $value['A'];
                    $insertdata[$i]['contact_Person '] = $value['B'];
                    $insertdata[$i]['email'] = $value['C'];
                    $insertdata[$i]['password'] = md5($value['D']);
                    $insertdata[$i]['contact_Number'] = $value['E'];
                    $insertdata[$i]['alternatecontact_Number'] = $value['F'];
                    $insertdata[$i]['address'] = $value['G'];
                    $insertdata[$i]['alternate_Address'] = $value['H'];
                    $insertdata[$i]['user_State'] = $value['I'];
                    $insertdata[$i]['user_City '] = $value['J'];
                    $insertdata[$i]['user_Pincode'] = $value['K'];
                    $insertdata[$i]['usersdept_Name'] = $value['L'];
                    
                        
                      $i++;
                    }          
//                     echo "<pre>";
//                     print_r($insertdata); die;      
                    $result = $this->MasterModel->addexeMaster($insertdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Executive Added Successfully",2);
                       // redirect(base_url()."Setting/engineer");
                        //redirect(base_url()."Setting/engineer");
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        
        $this->load->view("settings/masters/addbulkexecView");
        $this->load->view("footer");
    }
    
    public function exedistretCity(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $data['executives'] = $this->MasterModel->viewexedistretCity();
        // echo "<pre>";
        // print_r($data['executives']); die; 
        $this->load->view("settings/masters/exedistretcityView",$data);
        $this->load->view("footer");
    }
    
    public function addbulkdistdealMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        if ($this->input->post('submit')) {
                //echo "test"; die;
                $this->db->query("truncate sales_executives_master");
                 //$insertdata = array();
                $path = 'assets/files/execdistdealercity/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file; 
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;

                    // echo "<pre>";
                    // print_r($allDataInSheet); die; 
                    
                    
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      
                    $insertdata[$i]['sales_exe_Name'] = $value['A'];
                    $insertdata[$i]['sales_exe_mail '] = $value['B'];
                    $insertdata[$i]['retailer_name'] = $value['C'];
                    $insertdata[$i]['retailer_city'] = $value['D'];
                    $insertdata[$i]['distributor_name'] = $value['E'];
                    $insertdata[$i]['distributor_city'] = $value['F'];
                    $insertdata[$i]['salesexe_State'] = $value['G'];
                    
                        
                      $i++;
                    }          
//                     echo "<pre>";
//                     print_r($insertdata); die;      
                    $result = $this->MasterModel->addexedistdealercity($insertdata);   
                    if($result){
                      //echo "Imported successfully";
                        $this->session->set_tempdata("add_success","Executive Cities Added Successfully",2);
                       // redirect(base_url()."Setting/engineer");
                        //redirect(base_url()."Setting/engineer");
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        
        $this->load->view("settings/masters/addbulkdistdealView");
        $this->load->view("footer");
    }
    
    public function dealersMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        $data['dealers'] = $this->MasterModel->viewdealerMaster();
//        echo "<pre>";
//        print_r($data['distributors']); die; 
        $this->load->view("settings/masters/dealermasterView",$data);
        $this->load->view("footer");
    }
    
//     public function addbulkdealerMaster(){
//         $this->load->view("header");
//         $this->load->view("sidebar");
//         $this->load->view("tabheader");
        
//         if ($this->input->post('submit')) {
            
//             $this->db->query("delete FROM users WHERE user_role_id =4");
//                  //$insertdata = array();
//                 $path = 'assets/files/dealers/';
//                 require_once APPPATH . "/third_party/PHPExcel.php";
//                 $config['upload_path'] = $path;
//                 $config['allowed_types'] = 'xlsx|xls|csv';
//                 $config['remove_spaces'] = TRUE;
//                 $this->load->library('upload', $config);
//                 $this->upload->initialize($config);            
//                 if (!$this->upload->do_upload('uploadFile')) {
//                     $error = array('error' => $this->upload->display_errors());
//                 } else {
//                     $data = array('upload_data' => $this->upload->data());
//                 }
//                 if(empty($error)){
//                   if (!empty($data['upload_data']['file_name'])) {
//                     $import_xls_file = $data['upload_data']['file_name'];
//                 } else {
//                     $import_xls_file = 0;
//                 }
//                 $inputFileName = $path . $import_xls_file;
                 
//                 try {
//                     $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
//                     $objReader = PHPExcel_IOFactory::createReader($inputFileType);
//                     $objPHPExcel = $objReader->load($inputFileName);
//                     $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
//                     $flag = true;
//                     $i=0;

// //                     echo "<pre>";
// //                     print_r($allDataInSheet); die; 
                    
           
//                     foreach ($allDataInSheet as $value) {
//                       if($flag){
//                         $flag =false;
//                         continue;
//                       }
//                      $insertdata[$i]['user_role_id'] = 4;
//                     $insertdata[$i]['userdept_Name'] = $value['A'];
//                     $insertdata[$i]['contact_Person '] = $value['B'];
//                     $insertdata[$i]['email'] = $value['C'];
//                     $insertdata[$i]['password'] = md5($value['D']);
//                     $insertdata[$i]['contact_Number'] = $value['E'];
//                     $insertdata[$i]['alternatecontact_Number'] = $value['F'];
//                     $insertdata[$i]['address'] = $value['G'];
//                     $insertdata[$i]['alternate_Address'] = $value['H'];
//                     $insertdata[$i]['user_State'] = $value['I'];
//                     $insertdata[$i]['user_City'] = $value['J'];
//                         $insertdata[$i]['user_Pincode'] = $value['K'];
//                     $insertdata[$i]['usersdept_Name'] = $value['L'];
//                         $insertdata[$i]['dealer_type'] = $value['M'];
                    
                        
//                       $i++;
//                     }          
// //                     echo "<pre>";
// //                     print_r($insertdata); die;      
//                     $result = $this->MasterModel->adddealerMaster($insertdata);   
//                     if($result){
//                       //echo "Imported successfully";
//                         $this->session->set_tempdata("add_success","Dealers Added Successfully",2);
//                       // redirect(base_url()."Setting/engineer");
//                         //redirect(base_url()."Setting/engineer");
//                     }else{
//                       echo "ERROR !";
//                     }             
      
//               } catch (Exception $e) {
//                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
//                             . '": ' .$e->getMessage());
//                 }
//               }else{
//                   echo $error['error'];
//                 }
                 
                 
//         }
        
//         $this->load->view("settings/masters/addbulkdealerView");
//         $this->load->view("footer");
//     }
    
    public function userCSV(){
        $filename = 'users.csv';
		
		
	//	$ticketData = $this->CrmModel->ticketcsvData();
	$userData = $this->UserroleModel->usercsvData();
// 		echo "<pre>";
// 		print_r($userData); die; 
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
		$file = fopen('php://output', 'w');

		$header = array("Department Name", "Contact Person", "Username","Password","Contact","Alternate Contact","Address", "State", "user City", "Pin Code", "usersdept Name","User Role");
		fputcsv($file, $header);
        
        foreach ($userData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;  
    }
    
    public function aspCSV(){
        $filename = 'Distributors.csv';
		$userData = $this->UserroleModel->distData();
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
		$file = fopen('php://output', 'w');

		$header = array("Asp Name","Contact Person","Contact Number","Alternate Contact Number","Email","Address","Alternate Address","State","City","Pincode","Latitude","Longitude");
		fputcsv($file, $header);
        foreach ($userData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit; 
    }
    
    public function addbulkdistMaster(){
       
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        if ($this->input->post('submit')) {
                 
                 $this->db->query("delete FROM users WHERE user_role_id =3");
          
       
          
   			//$data = array(); 
           // $users_Data = array();
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/users'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/users/".$filename,"r");
                    $c = 0;
                    $users_Data;
                    $importData_arr = array();
                    
                    
                    
                    
                    while (($filesop = fgetcsv($file, 1000, ",")) !== FALSE) {
                            // echo "<pre>";
                            // print_r($filesop); die; 
						    $roleId = $filesop[0];
                            $deptName = $filesop[1];
                            $contactPerson = $filesop[2];
                            $Email = $filesop[3];
                            $Password = $filesop[4];
                            $contact = $filesop[5];
                            $altternateContact = $filesop[6];
                            $address = $filesop[7];
                            $altaddress = $filesop[8];
                            $state = $filesop[9];
                            $userCity = $filesop[10];
                            $userpin = $filesop[11];
                            $latitude = $filesop[12];
                            $longitude = $filesop[13];
                            $distType = $filesop[14];
                            $partyType = $filesop[15];
                        
								if ($c <> 0) {
									$users_Data = array(
                                        "user_role_id" => $roleId,
                                        "userdept_Name" => $deptName,
                                        "contact_Person" => $contactPerson,
                                        "email" => $Email,
                                        "password" => md5($Password),
                                        "contact_Number" => $contact,
                                        "alternatecontact_Number" => $altternateContact,
                                        "address" => $address,
                                        "alternate_Address" => $altaddress,
                                        "user_State" => $state,
                                        "user_City" => $userCity,
                                        "user_Pincode" => $userpin,
                                        "user_Latitude" => $latitude,
                                        "user_Longitutde" => $longitude,
                                        "dealer_type" => $distType,
                                        "party_Type" => $partyType
									);
									$status = $this->UserroleModel->addUsers($users_Data);
								}
	   
								
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Distributors Added Successfully",2);
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add Distributors",2);
   			} 
   			// load view 
   			$this->load->view('settings/masters/addbulkdistView'); 
        }else{
        
        $this->load->view("settings/masters/addbulkdistView");
        }
        $this->load->view("footer");
    }
    
    public function dealerCSV(){
        $filename = 'Dealers.csv';
		$userData = $this->UserroleModel->dealerData();
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
		$file = fopen('php://output', 'w');

		$header = array("Role Id","Dealer Name","Contact Person","Email","Contact Number","Alternate Contact Number","Address","Alternate Address","State","City","Pincode","Latitude","Longitude","Distributor","Dealer Type","Party Type");
		fputcsv($file, $header);
        foreach ($userData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit; 
    }
    
    public function addbulkdealerMaster(){
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("tabheader");
        
        if ($this->input->post('submit')) {
                 
                 $this->db->query("delete FROM users WHERE user_role_id =4");
          
       
          
   			//$data = array(); 
           // $users_Data = array();
   			if(!empty($_FILES['file']['name'])){ 
    			// Set preference 
    			$config['upload_path'] = 'assets/files/users'; 
    			$config['allowed_types'] = 'csv'; 
    			$config['max_size'] = '100000'; // max_size in kb 
    			$config['file_name'] = date("M-d,Y h_i_s A").$_FILES['file']['name']; 

    			// Load upload library 
    			$this->load->library('upload',$config); 
   
    			// File upload
    			if($this->upload->do_upload('file')){ 
     				// Get data about the file
     				$uploadData = $this->upload->data(); 
     				$filename = $uploadData['file_name']; 

     				// Reading file
                   $file = fopen("assets/files/users/".$filename,"r");
                    $c = 0;
                    $users_Data;
                    $importData_arr = array();
                    
                    
                    
                    
                    while (($filesop = fgetcsv($file, 1000, ",")) !== FALSE) {
                            // echo "<pre>";
                            // print_r($filesop); die; 
						    $roleId = $filesop[0];
                            $deptName = $filesop[1];
                            $contactPerson = $filesop[2];
                            $Email = $filesop[3];
                            $Password = $filesop[4];
                            $contact = $filesop[5];
                            $altternateContact = $filesop[6];
                            $address = $filesop[7];
                            $altaddress = $filesop[8];
                            $state = $filesop[9];
                            $userCity = $filesop[10];
                            $userpin = $filesop[11];
                            $latitude = $filesop[12];
                            $longitude = $filesop[13];
                            $distributor = $filesop[14];
                            $distType = $filesop[15];
                            $partyType = $filesop[16];
                        
								if ($c <> 0) {
									$users_Data = array(
                                        "user_role_id" => $roleId,
                                        "userdept_Name" => $deptName,
                                        "contact_Person" => $contactPerson,
                                        "email" => $Email,
                                        "password" => md5($Password),
                                        "contact_Number" => $contact,
                                        "alternatecontact_Number" => $altternateContact,
                                        "address" => $address,
                                        "alternate_Address" => $altaddress,
                                        "user_State" => $state,
                                        "user_City" => $userCity,
                                        "user_Pincode" => $userpin,
                                        "user_Latitude" => $latitude,
                                        "user_Longitutde" => $longitude,
                                        "usersdept_Name	" => $distributor,
                                        "dealer_type" => $distType,
                                        "party_Type" => $partyType
									);
									$status = $this->UserroleModel->addUsers($users_Data);
								}
	   
								
								$c = $c + 1;

                    }
                    fclose($file);

                        $this->session->set_tempdata("add_success","Dealers Added Successfully",2);
    			}else{ 
     				//$data['response'] = 'failed'; 
                    $this->session->set_tempdata("add_creditfail","Please upload only CSV",2);
    			} 
   			}else{ 
    			//$data['response'] = 'failed'; 
                $this->session->set_tempdata("add_fail","Umable to Add dealer",2);
   			} 
   			// load view 
   			$this->load->view('settings/masters/addbulkdealerView'); 
        }else{
        
        $this->load->view("settings/masters/addbulkdealerView");
        }
        $this->load->view("footer");
    }
    
    public function executivesList(){
        $filename = 'Executives.csv';
		$userData = $this->MasterModel->execData();
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
		$file = fopen('php://output', 'w');

		$header = array("Role Id","Name","Email","Password","Contact","Alternate Contact","Address","Alternate Address","State","City",
		    "Pincode","Latitude","Longitude","Distributor","Dealer");
		fputcsv($file, $header);
        foreach ($userData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit; 
    }
  
}
?>