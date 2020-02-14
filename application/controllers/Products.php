<?php
class Products extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url","security"));
        $this->load->library(array("session","form_validation"));
        $this->load->model("product/BrandModel");
		$this->load->model("product/CategoryModel");
		$this->load->model("product/SubcategoryModel");
		$this->load->model("product/ProductModel");
		$this->load->model("product/ProducthsnModel");
        $this->load->helper("url");
        $this->load->database();
    }

    public function index(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['brands']=$this->BrandModel->viewBrands();
        $this->load->view("Productsview",$data);
    }
    
    public function brandProducts($id){
		$this->load->view("header");
		$this->load->view("tabheader");
		$data['brands']=$this->BrandModel->viewBrandProduct($id);
// 		echo "<pre>";
// 		print_r($data['brands']); die; 
        $this->load->view("products/BrandproductView.php",$data);
	}

    public function Brand(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['brands']=$this->BrandModel->viewBrands();
        $this->load->view("products/Brand/Brandview",$data);
        $this->load->view("footer");
    }

    public function addBrand(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $this->form_validation->set_rules("brand_Name","Brand Name","required|trim");

        if($this->form_validation->run()==true){
           
           
           $config['upload_path']          = './assets/images/brand/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;
			$this->load->library('upload', $config);

			if($this->upload->do_upload("brand_Logo"))
			{
			   $data['success']=$this->upload->data();
			   $filename=$data['success']['file_name'];
			   $this->resizeImage($data['success']['file_name']);
			}
			else
			{
				$filename='';
			}					


            $add_brand=array(
				"brand_Name"=>preg_replace('/[^A-Za-z0-9]/', '',$this->input->post("brand_Name")),
				"brand_Logo"=>$filename,
			);
			
			$add_brand=xss_clean($add_brand);
			$status=$this->BrandModel->addBrand($add_brand);			
				if($status==true)
				{
						$this->session->set_tempdata("add_success","Brand Added Successfully",2);
						redirect(base_url()."Products/addBrand");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Brand",2);
						redirect(base_url()."Products/addBrand");
				}
        }else {
            $this->load->view("products/Brand/addbrandView");
        }
        
        $this->load->view("footer");
    }

    public function editBrand($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['brand']=$this->BrandModel->editbrandName($id);
		
		$this->form_validation->set_rules("brand_Name","Brand Name","required|trim");
		if($this->form_validation->run()==true) 
		{
		$config['upload_path']          = './assets/images/brand/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;

			$this->load->library('upload', $config);
			if($this->upload->do_upload("brand_Logo")){
			   $data['success']=$this->upload->data();
			   $filename=$data['success']['file_name'];
			   $this->resizeImage($data['success']['file_name']);
			}else{
				$filename=$data['brand']->brand_Logo;
			}	



			$edit_brand=array(
				"brand_Name"=>$this->input->post("brand_Name"),
				"brand_Logo"=>$filename,
			);
			
			$edit_brand=xss_clean($edit_brand);
			
			$status=$this->BrandModel->updateBrand($edit_brand,$id);
			
			if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Updated Successfully",2);
					redirect(base_url()."Products/editBrand/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Products/editBrand/".$id);
				}
		} 
		else 
		{
		$this->load->view("products/Brand/editbrandView",$data);
		}
		$this->load->view("footer");
    }

    public function deleteBrand($id){
        //$this->db->query("delete from brand where brand_Id=$id");
        $this->db->query("update brand set status='0' where brand_Id=$id");	
        

		if($this->db->affected_rows()>0) 
		{
            //echo "Success";
            redirect(base_url()."Products/Brand");
			//redirect(base_url()."brand");
		} 
		else
		 {
		 redirect(base_url()."Products/Brand");
		 }
    }


    function brandExist(){
        $brand_Name=$this->input->post("brand_Name");
		$result=$this->db->query("select * from brand where brand_Name='$brand_Name'");
		if($result->num_rows()>0)
		{
			echo json_encode("Brand Name Already entered"); 
		}
		else
		{
			echo "true"; 
		}
    }

    function categoryExist(){
        $category_Name=$this->input->post("category_Name");
		$result=$this->db->query("select * from category where category_Name='$category_Name'");
		if($result->num_rows()>0)
		{
			echo json_encode("Category Name Already entered"); 
		}
		else
		{
			echo "true"; 
		}
    }
    public function Category(){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['categories']=$this->CategoryModel->viewCategories();
        // echo "<pre>";
        // print_r($data['categories']); die; 
        $this->load->view("products/Category/Categoryview",$data);
        $this->load->view("footer");
    }

    public function addCategory(){
        $this->load->view("header");
        $this->load->view("tabheader");
         $this->load->view("sidebar");
		$data['brands']=$this->BrandModel->viewBrands();
		
        $this->form_validation->set_rules("category_Name","Category Name","required|trim");

        if($this->form_validation->run()==true){
            $add_category=array(
				"category_Name"=>$this->input->post("category_Name"), 
				"brand_Id"=>$this->input->post("brand_Name") 
			);
			
			$add_category=xss_clean($add_category);
			$status=$this->CategoryModel->addCategory($add_category);			
				if($status==true)
				{
						$this->session->set_tempdata("add_success","Category Added Successfully",2);
						redirect(base_url()."Products/addCategory");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Category",2);
						redirect(base_url()."Products/addCategory");
				}
        }else {
            $this->load->view("products/Category/addcategoryView",$data);
        }
        
        $this->load->view("footer");
    }

    public function editCategory($id){
        $this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
        $data['brands'] = $this->BrandModel->viewBrands();
		$data['category'] = $this->CategoryModel->editcategoryName($id);
// 		echo "<pre>";
// 		print_r($data['category']); die; 
		$this->form_validation->set_rules("editcategory_Name","Category Name","required|trim");
		if($this->form_validation->run()==true) 
		{
			$edit_category=array(
				"category_Name"=>$this->input->post("editcategory_Name"),
				"brand_Id"=>$this->input->post("brand_Name") 
			);
			
			$edit_category=xss_clean($edit_category);
			
			$status=$this->CategoryModel->updateCategory($edit_category,$id);
			
			if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Updated Successfully",2);
					redirect(base_url()."Products/editCategory/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Products/editCategory/".$id);
				}
		} 
		else 
		{
		$this->load->view("products/Category/editcategoryView",$data);
		}
		$this->load->view("footer");
    }

    public function deleteCategory($id){
        //$this->db->query("delete from brand where brand_Id=$id");
        $this->db->query("update category set status='0' where category_Id=$id");	
        

		if($this->db->affected_rows()>0) 
		{
            //echo "Success";
            redirect(base_url()."Products/Category");
			//redirect(base_url()."brand");
		} 
		else
		 {
		 redirect(base_url()."Products/Category");
		 }
	}
	
	
	public function Subcategory(){
        $this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['subcategories']=$this->SubcategoryModel->viewSubCategories();
		// echo "<pre>";
		// print_r($data['subcategories']); die; 
        $this->load->view("products/SubCategory/SubCategoryview",$data);
        $this->load->view("footer");
	}
	
	public function addSubCategory(){
		$this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['categories']=$this->CategoryModel->viewCategories();

		$this->form_validation->set_rules("subcategory_Name","Sub Category Name","required|trim");

		if($this->form_validation->run()==true) 
		{
			$add_subcategory=array(
				"cat_Id"=>$this->input->post("category_Name"),
				"subcategory_Name"=>$this->input->post("subcategory_Name"),
			);
			
			$add_subcategory=xss_clean($add_subcategory);
			
			$status=$this->SubcategoryModel->addSubCategory($add_subcategory);
			
			if($status==true)
				{
						$this->session->set_tempdata("add_success","Sub-Category Added Successfully",2);
						redirect(base_url()."Products/addSubCategory");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Sub-Category Umable to Add",2);
						redirect(base_url()."Products/addSubCategory");
				}
				
		}
		 else 
		{
		$this->load->view("products/SubCategory/addsubcategoryView",$data);
		}
      
        $this->load->view("footer");

	}

	public function editSubcategory($id){
		$this->load->view("header");
        $this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['categories']=$this->CategoryModel->viewCategories();
		// echo "<pre>";
		// print_r($data['categories']); die; 
		$data['subCategory']=$this->SubcategoryModel->editSubCatmodel($id);
		// echo "<pre>";
		// print_r($data['subCategory']); die; 
		$this->form_validation->set_rules("cat_name","Category Name","required|trim");
		$this->form_validation->set_rules("subcategory_Name","Sub Category Name","required|trim");
		if($this->form_validation->run()==true)
		{			
				$updatesub_cat=array(
					"cat_Id"=>$this->input->post("cat_name"),
					"subcategory_Name"=>$this->input->post("subcategory_Name"),
				);
				$updatesub_cat=xss_clean($updatesub_cat);				
				$status=$this->SubcategoryModel->updateSubCategory($updatesub_cat,$id);
				
				if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Updated Successfully",2);
					redirect(base_url()."Products/editSubcategory/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Products/editSubcategory/".$id);
				}
		}
		else
		{
			$this->load->view("products/SubCategory/editSubCategoryView",$data);
		}
		$this->load->view("footer");

	}

	public function deleteSubCategory($id){
		$this->db->query("update subcategory set status='0' where subcat_Id=$id");	
        

		if($this->db->affected_rows()>0) 
		{
            //echo "Success";
            redirect(base_url()."Products/Subcategory");
			//redirect(base_url()."brand");
		} 
		else
		 {
		 redirect(base_url()."Products/Subcategory");
		 }
	}


	/* Product Section */

	public function Lists(){
		$this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['products']=$this->ProductModel->viewProducts();
		// echo "<pre>";
		// print_r($data['products']); die; 
		$this->load->view("products/productsView",$data);
		$this->load->view("footer");
	}

	public function addProduct(){
		$this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['brands']=$this->BrandModel->viewBrands();
		$data['categories']=$this->CategoryModel->viewCategories();
		$data['hsncodes'] = $this->ProducthsnModel->viewhsnCode();

		$this->form_validation->set_rules("brand_Name","Brand Name","required|trim");
		$this->form_validation->set_rules("product_Name","Product Name","required|trim");
		$this->form_validation->set_rules("product_Code","Product Code","required|trim");
		$this->form_validation->set_rules("product_Hsn","Product HSN","required|trim"); 
		$this->form_validation->set_rules("productdist_Price","Distributor Price","required|trim"); 
		$this->form_validation->set_rules("productret_Price","Product GST","required|trim");
		$this->form_validation->set_rules("product_GST","Product GST","required|trim");
		$this->form_validation->set_rules("cat_Name","Category Name","required|trim");
		$this->form_validation->set_rules("subcat_Name","Subcategory Name","required|trim");

		if($this->form_validation->run()==true){

			$config['upload_path']          = './assets/images/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;
			$this->load->library('upload', $config);

			if($this->upload->do_upload("product_Image"))
			{
			   $data['success']=$this->upload->data();
			   $filename=$data['success']['file_name'];
			   $this->resizeproductImage($data['success']['file_name']);
			}
			else
			{
				$filename='';
			}	

				$addProduct=array(
					"brand_Id"=>$this->input->post("brand_Name"),
					"product_Name"=>$this->input->post("product_Name"),
					"product_Code"=>$this->input->post("product_Code"),
					"product_Hsn"=>$this->input->post("product_Hsn"),
					"product_GST"=>$this->input->post("product_GST"),
					"product_Uom" => $this->input->post("product_Uom"),
					"productdist_Price" => $this->input->post("productdist_Price"),
					"productret_Price" => $this->input->post("productret_Price"),
					"cat_Id"=>$this->input->post("cat_Name"),
					"subcat_Id"=>$this->input->post("subcat_Name"),
					"product_Image"=>$filename,
				);

				$addProduct=xss_clean($addProduct);			
			$status=$this->ProductModel->addProduct($addProduct);			
			if($status==true)
			{
					$this->session->set_tempdata("add_success","Product Added Successfully",2);
                    redirect(base_url()."Products/addProduct");
			}
			else
			{
				$this->session->set_tempdata("add_error","Sorry! Unable to Add Product",2);
                    redirect(base_url()."Products/addProduct");
			}

		} else {
			$this->load->view("products/addproductsView",$data);
		}
		$this->load->view("footer");
	}

      
	public function editProduct($id){
		$this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['product']=$this->ProductModel->editProd($id);
		
		$data['brands']=$this->BrandModel->viewBrands();
		$data['categories']=$this->CategoryModel->viewCategories();
		$data['hsncodes'] = $this->ProducthsnModel->viewhsnCode();



		if(isset($_POST['editproductsubmit'])) {
		
		$this->form_validation->set_rules("brand_Name","Brand Name","required|trim");
		$this->form_validation->set_rules("product_Name","Product Name","required|trim");
		$this->form_validation->set_rules("cat_Name","Category Name","required|trim");
		$this->form_validation->set_rules("subcat_Name","Subcategory Name","required|trim");
		$this->form_validation->set_rules("product_Code","Product Code","required|trim");
		$this->form_validation->set_rules("product_Hsn","Product HSN","required|trim"); 
		$this->form_validation->set_rules("productdist_Price","Distributor Price","required|trim"); 
		$this->form_validation->set_rules("productret_Price","Product GST","required|trim");

		if($this->form_validation->run()==true){
			
		
			$config['upload_path']          = './assets/images/product/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;
			$this->load->library('upload', $config);

			if($this->upload->do_upload("product_Image"))
			{
			   $data['success']=$this->upload->data();
			   $filename=$data['success']['file_name'];
			   $this->resizeproductImage($data['success']['file_name']);
			}
			else
			{
				$filename=$data['product']->product_Image;
				//$filename='';
			}	


				$editProduct=array(
					"brand_Id"=>$this->input->post("brand_Name"),
					"product_Name"=>$this->input->post("product_Name"),
					"cat_Id"=>$this->input->post("cat_Name"),
					"subcat_Id"=>$this->input->post("subcat_Name"),
					"product_Code"=>$this->input->post("product_Code"),
					"product_Hsn"=>$this->input->post("product_Hsn"),
					"product_GST"=>$this->input->post("product_GST"),
					"product_Uom" => $this->input->post("product_Uom"),
					"productdist_Price" => $this->input->post("productdist_Price"),
					"productret_Price" => $this->input->post("productret_Price"),
					"product_Image"=>$filename,
				);

				$editProduct=xss_clean($editProduct);			
			$status=$this->ProductModel->updateProduct($editProduct,$id);			
			if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Updated Successfully",2);
					redirect(base_url()."Products/editProduct/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Products/editProduct/".$id);
				}

		} else {
			$this->load->view("products/editProductView",$data);
		}


		}

		$this->load->view("products/editProductView",$data);
		$this->load->view("footer");
	}

	public function deleteProduct($id){
		$this->db->query("update products set status='0' where product_Id=$id");	
    
		if($this->db->affected_rows()>0) {
            redirect(base_url()."Products/Lists");
		} else{
		 	redirect(base_url()."Products/Lists");
		 }
	}

	public function subcat($id){
		$result=$this->db->where("cat_Id",$id)->get("subcategory")->result();
		echo json_encode($result);
	}
	
	function resizeImage($filename){
		$config['image_library'] = 'gd2';
		$config['source_image'] = './assets/images/brand/'.$filename; 
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']    = 75;
		$config['height']   = 50;
		$config['new_image'] = './assets/images/brand/thumb/'.$filename;
		$this->load->library('image_lib', $config); 
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
	}

	function resizeproductImage($filename){
		$config['image_library'] = 'gd2';
		$config['source_image'] = './assets/images/product/'.$filename; 
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']    = 75;
		$config['height']   = 50;
		$config['new_image'] = './assets/images/product/thumb/'.$filename;
		$this->load->library('image_lib', $config); 
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
	}

	public function ProductHSN(){
		$this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['hsncodes'] = $this->ProducthsnModel->viewhsnCode();
		// echo "<pre>";
		// print_r($data['hsncodes']); die; 
		$this->load->view("products/ProductHSN/productshsnView",$data);
		$this->load->view("footer");
	}

	public function addproductHSN(){
		$this->load->view("header");
		$this->load->view("tabheader");
$this->load->view("sidebar");
		$this->form_validation->set_rules("producthsn_Code","Product HSN Code","required|trim"); 
		$this->form_validation->set_rules("product_GST","Product GST","required|trim");

		if($this->form_validation->run()==true){
			$add_HSN=array(
				"producthsn_Code"=>$this->input->post("producthsn_Code"), 
				"product_GST"=>$this->input->post("product_GST") 
			);
			
			$add_HSN=xss_clean($add_HSN);
			$status=$this->ProducthsnModel->addhsnCode($add_HSN);			
				if($status==true)
				{
						$this->session->set_tempdata("add_success","Code Added Successfully",2);
						redirect(base_url()."Products/addproductHSN");
				}
				else
				{
						$this->session->set_tempdata("add_fail","Umable to Add Code",2);
						redirect(base_url()."Products/addproductHSN");
				}
		}else {
			$this->load->view("products/ProductHSN/addproductshsnView");
		}
		$this->load->view("footer");
	}

	public function edithsnCode($id){
		$this->load->view("header");
		$this->load->view("tabheader");
        $this->load->view("sidebar");
		$data['hsncode'] = $this->ProducthsnModel->edithsnCode($id);
		
		$this->form_validation->set_rules("producthsn_Code","Product HSN Code","required|trim"); 
		$this->form_validation->set_rules("product_GST","Product GST","required|trim");

		if($this->form_validation->run()==true){
			$edit_HSN=array(
				"producthsn_Code"=>$this->input->post("producthsn_Code"), 
				"product_GST"=>$this->input->post("product_GST") 
			);
			
			$edit_HSN=xss_clean($edit_HSN);
			$status=$this->ProducthsnModel->updatehsnCode($edit_HSN, $id);			
			if($status==true)
				{
					$this->session->set_tempdata("upd_succ","Updated Successfully",2);
					redirect(base_url()."Products/edithsnCode/".$id);
				}
				else
				{
					$this->session->set_tempdata("upd_fail","Updated Fail");
					redirect(base_url()."Products/edithsnCode/".$id);
				}
		}else {
		$this->load->view("products/ProductHSN/editproductshsnView",$data);
		}
		$this->load->view("footer");
	}

	public function deletehsnCode($id){
		$this->db->query("update producthsn set hsn_Status='0' where producthsn_Id=$id");	
    
		if($this->db->affected_rows()>0) {
            redirect(base_url()."Products/ProductHSN");
		} else{
		 	redirect(base_url()."Products/ProductHSN");
		 }
	}

	public function hsn_Details($id){
		$result=$this->db->where("producthsn_Id",$id)->get("producthsn")->result();		
		$arr = array('hsn_info' => $result);
		echo json_encode($arr);
	}

}
?>