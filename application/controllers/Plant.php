<?php
class Plant extends CI_Controller{

    public function __construct(){
        parent::__construct();
        
        $this->load->helper(array("form","url","security"));
        $this->load->library(array("session","form_validation"));
        
		$this->load->model("plant/PlantModel");
       
        $this->load->database();
    }
    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
         $this->load->view("plant_view");
        // $this->load->view("Salesview");
         $this->load->view("footer");
    }
    public function manufacturing_details(){
		$this->load->view("header");
		$this->load->view("tabheader");
		$this->load->view("sidebar");
		$data['mfg_details']=$this->PlantModel->manufacturing_details();
		 //echo "<pre>";
		 //print_r($data['mfg_details']); die; 
		$this->load->view("plant/plant_mfg_view",$data);
		$this->load->view("footer");
    }

    public function defects(){
        $this->load->view("header");
		$this->load->view("tabheader");
		$this->load->view("sidebar");
		$data['defects']=$this->PlantModel->defects();
		 //echo "<pre>";
		 //print_r($data['mfg_details']); die; 
		$this->load->view("plant/defects_view",$data);
		$this->load->view("footer");
    }
    public function orders_recieved(){
        $this->load->view("header");
		$this->load->view("tabheader");
		$this->load->view("sidebar");
		$data['orders']=$this->PlantModel->orders_recieved();
		 //echo "<pre>";
		 //print_r($data['mfg_details']); die; 
		$this->load->view("plant/orders_view",$data);
		$this->load->view("footer");
    }
    public function barcodes(){
        $this->load->view("header");
		$this->load->view("tabheader");
		$this->load->view("sidebar");
		$data['barcodes']=$this->PlantModel->barcodes();
		 //echo "<pre>";
		 //print_r($data['mfg_details']); die; 
		$this->load->view("plant/barcodes_view",$data);
		$this->load->view("footer");
    }
    public function shipment(){
        $this->load->view("header");
		$this->load->view("tabheader");
		$this->load->view("sidebar");
		$data['shipment']=$this->PlantModel->shipment();
		 //echo "<pre>";
		 //print_r($data['mfg_details']); die; 
		$this->load->view("plant/shipment_view",$data);
		$this->load->view("footer");

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
				//$product_id = $filesop[0];
				$ReciveBarcode = $filesop[1];
                //$product_name = $filesop[2];
                //$category = $filesop[3];
                //$sub_cat = $filesop[4];
               // $mfg_date = $filesop[5];
                $assembled_by = $filesop[6];
				$approved_by = $filesop[7];
				
                
				if($c<>0){			

					
$GETBARCODE = str_split($ReciveBarcode,9);

$SepratedDetails['vendor'] = $GETBARCODE[0][0];
$SepratedDetails['catagory'] = $GETBARCODE[0][1];
$SepratedDetails['modelone'] = $GETBARCODE[0][2].$GETBARCODE[0][3];
//$SepratedDetails['modeltwo'] = $GETBARCODE[0][3];
$SepratedDetails['motor'] = $GETBARCODE[0][4];
$SepratedDetails['pump'] = $GETBARCODE[0][5];
$SepratedDetails['yearone'] = $GETBARCODE[0][6].$GETBARCODE[0][7];
//$SepratedDetails['yeartwo'] = $GETBARCODE[0][7];
$SepratedDetails['month'] = $GETBARCODE[0][8];
$SepratedDetails['serialno'] = $GETBARCODE[1];


					 //echo ($fname);		//SKIP THE FIRST ROW
					 $category = $this->PlantModel->getValue('name','cat_parts_barcode',$SepratedDetails['catagory']);
					 $model = $this->PlantModel->getValue('model_name','product_model_barcode',$SepratedDetails['modelone']);
					 $year = $this->PlantModel->getValue('description','description_year_barcode',$SepratedDetails['yearone']);
					 $month = $this->PlantModel->getValue('month_description','description_month_barcode',$SepratedDetails['month']);
					 
					 $product_type = $category[0]->name;
					 $modelname = $model[0]->model_name;
					 $year = $year[0]->description;
					 $month = $month[0]->month_description;

                     

		$this->PlantModel->file_to_store($ReciveBarcode,$product_type,$modelname,$year.$month,$assembled_by,$approved_by);
				}
                $c = $c + 1;
                //echo $c;
			}
			$this->manufacturing_details();
				
		}

	}
	
}
?>