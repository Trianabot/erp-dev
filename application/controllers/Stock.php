<?php
class Stock extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security"));
        $this->load->library(array("form_validation","session"));
        
        $this->load->helper("url");
        $this->load->model("Stockmodel");
        $this->load->database();
       
    }

    public function index(){
        
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
       // Set the options to use in the map
       
        $this->load->view("Stockview");
      


    }

    public function distributorStock(){
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("sidebar");
        $this->load->view("stock/diststockview");
        $this->load->view("footer");
    }
    
    public function retailerStock(){
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("sidebar");
        $this->load->view("stock/retailerstockview");
        $this->load->view("footer");
    }

    public function warehousestock(){
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("sidebar");
        $this->load->view("stock/warehousestockView");
        $this->load->view("footer");
    }
    
    public function skyzenproductStock(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['products'] = $this->Stockmodel->productStock();
        // echo "<pre>";
        // print_r($data['products']); die; 
        $this->load->view("stock/productstockview",$data);
        $this->load->view("footer");
    }
    
    public function addstockProduct(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->load->view("stock/addproductstockview");
        $this->load->view("footer");
    }
    
    public function bulkstockProduct(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        
        if ($this->input->post('submit')) {
                 
            
            $this->db->truncate('skyzenprod_Stock');
                
                $path = 'assets/files/skyzenprodstock/';
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
                     
                    $inserdata[$i]['brand_Name'] = $value['A'];
                    $inserdata[$i]['category_Name'] = $value['B'];
                    $inserdata[$i]['prod_Name'] = $value['C'];
                    $inserdata[$i]['good_Quantity'] = $value['D'];
                    $inserdata[$i]['bad_Quantity'] = $value['E'];
                    
                        
                      $i++;
                    }          
                    $result = $this->Stockmodel->addprodStock($inserdata);   
                    if($result){
                        $this->session->set_tempdata("add_success","Products Added Successfully",2);
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
        
        $this->load->view("stock/bulkproductstockview");
        $this->load->view("footer");
    }
    
    public function skyzenpartStock(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
       // $data['parts'] = $this->Stockmodel->partsStock();
//        echo "<pre>";
//        print_r($data['parts']); die; 
        $this->load->view("stock/partstockview");
        $this->load->view("footer"); 
    }
    
    public function bulkstockPart(){
        
        
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        
        
        if ($this->input->post('submit')) {
                 
            
            $this->db->truncate('skyzenpart_stock');
                
                $path = 'assets/files/skyzenpartstock/';
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
                     
                    $inserdata[$i]['brand_Name'] = $value['A'];
                    $inserdata[$i]['category_Name'] = $value['B'];
                    $inserdata[$i]['part_Name'] = $value['C'];
                    $inserdata[$i]['good_Quantity'] = $value['D'];
                    $inserdata[$i]['bad_Quantity'] = $value['E'];
                        
                      $i++;
                    }          
//                     echo "<pre>";
//                     print_r($inserdata); die;    
                    
                    $result = $this->Stockmodel->addbulkpartData($inserdata);   
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
        
        
        
        $this->load->view("stock/bulkpartstockview");
        $this->load->view("footer"); 
    }
    
    public function addstockPart(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->form_validation->set_rules("good_Qty","Good Quantity","required|trim");
        if($this->form_validation->run()==true){
            
//            echo "<pre>";
//            print_r($_POST); die; 
            
                $addstockPart = array(
                        "brand_Name"=>$this->input->post("stockbrand_Name"),
                        "category_Name"=>$this->input->post("stockcategory_Name"),
                        "part_Name"=>$this->input->post("stockpart_Name"),
                        "good_Quantity"=>$this->input->post("good_Qty"),
                        "bad_Quantity"=>$this->input->post("bad_Qty"),
                    );
            $status =    $this->Stockmodel->addpartStock($addstockPart);
            
            if($status==true)
				{
						$this->session->set_tempdata("add_success","Part Stock Added Successfully",2);
						redirect(base_url()."Stock/addstockPart");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Part Stock",2);
						redirect(base_url()."Stock/addstockPart");
				}
                    
        }else{
            $this->load->view("stock/addpartstockview");
        }
        
        $this->load->view("footer");
    }
    
    public function categoryList($brandId){
        $brandId = urldecode($brandId);
        //echo "select * from skyzenpart_master where Brand='$brandId'"; die; 
        $result = $this->db->query("select DISTINCT(Category) from skyzenpart_master where Brand='$brandId'");
        $res = $result->result();
		echo json_encode($res);
    }
    
    public function partList($categoryId){
    $categoryId = urldecode($categoryId);
       $result = $this->db->query("select * from skyzenpart_master where Category='$categoryId'");
        $res = $result->result();
		echo json_encode($res); 
    }
    
    public function partStock($partId){
        $partId = urldecode($partId);
       // echo "select * from skyzenpart_master where part_Name=$partId";  die; 
        $result = $this->db->query("select * from skyzenpart_stock where part_Name='$partId'");
        $res = $result->row();
        //echo "Good Quantity".$res->good_Quantity;
		echo json_encode($res); 
    }
    
    public function aspStock(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['parts'] = $this->Stockmodel->viewasppartsStock();
//        echo "<pre>";
//        print_r($data['parts']); die; 
        $this->load->view("stock/asppartstockview",$data);
        $this->load->view("footer");
    }
    
    public function bulkpartCSV(){
         $filename = 'partStock.csv';
		
		
		$ticketData = $this->Stockmodel->partsStock();
// 		echo "<pre>";
// 		print_r($ticketData); die; 
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
		$file = fopen('php://output', 'w');

		$header = array("S No","Brand","Category","Part Name","Good Qty","Defective Qty");
		fputcsv($file, $header);
        
        foreach ($ticketData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;  
    }
    
    public function productStock(){
        $filename = 'productStock.csv';
		
		
		$ticketData = $this->Stockmodel->prodstockData();
// 		echo "<pre>";
// 		print_r($ticketData); die; 
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; "); 
		$file = fopen('php://output', 'w');

		$header = array("S No","Brand","Category","Product Name","Good Qty","Defective Qty");
		fputcsv($file, $header);
        
        foreach ($ticketData as $key=>$line){
            $line = (array) $line;
		 fputcsv($file,$line);
		}

		fclose($file);
		exit;  
    }
    

  
}
?>