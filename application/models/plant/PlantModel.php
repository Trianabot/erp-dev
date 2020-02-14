<?php
class PlantModel extends CI_Model {

     public function manufacturing_details() {
        $result=$this->db->query("SELECT * FROM manufacturing_details ORDER BY id DESC");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    } 
    public function get_all_fan($type){

        $result=$this->db->query("SELECT * FROM parts_master where producttype = '$type' ");
        if($result->num_rows()>0){ return $result->result();}
       else{return false;}
    }
    public function get_all_pump(){
        $result=$this->db->query("SELECT * FROM sky_parts_master where Node = 'SKY PUMP MOTORS' ");
        if($result->num_rows()>0){ return $result->result();}
       else{return false;}
    }
    public function get_all_swing(){
        $result=$this->db->query("SELECT * FROM sky_parts_master where Node='SKY W/M SPARES'");
        if($result->num_rows()>0){ return $result->result();}
       else{return false;}
    }
    public function get_all_modelname() {
        $result=$this->db->query("SELECT * FROM product_model_barcode ");
        if($result->num_rows()>0){ return $result->result();}
       else{return false;}
    }

    public function get_product_modelname($ptype) {
        //print_r(trim($ptype);die;
        $pro_type=trim($ptype);
        //$result=$this->db->query("SELECT * FROM product_model_barcode where product_type='$ptype' ");
        $result=$this->db->query("SELECT * FROM products_master where product_type='$pro_type' ");
        if($result->num_rows()>0){ 
            //print_r($result);die;
            return $result->result();}
       else{return false;}
    }
    public function get_modelname($ptype) {
        $result=$this->db->query("SELECT * FROM plant_product_mfg_info where cur_date='$ptype'");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    } 

    public function product_info($data){
        $this->db->insert('plant_product_mfg_info', $data);
       
        $insert_id = $this->db->insert_id();
         return  $insert_id;
    }
    
    public function product_barcodes($databarcodes){
        $this->db->insert('plant_product_barcodes', $databarcodes);
    }

    public function plant_product_barcodes($dataone,$pid){
        //$this->db->insert('plant_product_barcodes', $dataone);
        //vgr
        
        $data = $dataone;

            $where = array('product_info_id ' => $pid);
            $this->db->where($where);
            
            if( $this->db->update('plant_product_barcodes ', $data))
      {
        return true;
      }
      else
      {
        return false;
      }
       //vgr
    }
    public function update_product($data,$id){
         $data_modify = $data;

            $where = array('id ' => $id);
            $this->db->where($where);
            
            if( $this->db->update('plant_product_mfg_info ', $data_modify))
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    public function cooler_delete($id){
        //$this->db->delete('tbl_user', array('id' => $id)); 
        $data = array(
            'status' =>"inactive",
           );

            $where = array('id ' => $id);
            $this->db->where($where);
            
            if( $this->db->update('plant_product_mfg_info ', $data))
      {
        return true;
      }
      else
      {
        return false;
      }
    }
     public function plant_product_ca_and_manpower($datatwo){
        $this->db->insert('plant_product_ca_and_manpower', $datatwo);
     }
    public function ca_details() {
        //$result=$this->db->query("SELECT * FROM plant_ca ORDER BY id DESC");
        
        $result=$this->db->query("SELECT * FROM critical_area_master ");
		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    } 
    public function man_details() {
        $result=$this->db->query("SELECT * FROM plant_man_power ");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    } 
    public function get_ca_man($pid){
        $result=$this->db->query("SELECT * FROM plant_product_ca_and_manpower where product_info_id='$pid' ");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    public function get_all_plan($date,$pid){
        $result=$this->db->query("SELECT * FROM plant_product_mfg_info where cur_date='$date' and id='$pid' ");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    public function get_supervisor($supervisor_name){
        $result=$this->db->query("SELECT * FROM plant_supervisor_list where id='$supervisor_name' ");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    
    //vgr  
    public function get_companies(){
        $result=$this->db->query("SELECT * FROM company_names_master");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    public function get_colors(){
        $result=$this->db->query("SELECT * FROM color_master ");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    
    //vgr
    public function supervisor_list($a) {

        $result=$this->db->query("SELECT * FROM $a ");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }

    public function defects(){
        $result=$this->db->query("SELECT * FROM defects_rejects");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    public function orders_recieved(){
        $result=$this->db->query("SELECT * FROM orders_recieved");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }

    }
    public function barcodes(){
        $result=$this->db->query("SELECT barcode,product_type,modelname FROM manufacturing_details ORDER BY id DESC");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    public function getCat($cat){
        $result=$this->db->query("SELECT name FROM cat_parts_barcode where code = '$cat'");

		if($result->num_rows()>0) 
        {
            //print_r($result->result());
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    public function getBarcodeDate_prod($date,$productid){
        $result=$this->db->query("SELECT id FROM plant_product_mfg_info where cur_date = '$date'  and product_name = '$productid'");

		if($result->num_rows()>0) 
        {
            //print_r($result->result());
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }

    public function get_qty($date,$productid){
        
     $query = $this->db->query("SELECT * FROM plant_product_mfg_info where cur_date = '$date'  and id = '$productid'");
        return $query;
    }
    public function get_products_barcodes($productid){
           $query = $this->db->query("SELECT * FROM plant_product_barcodes where  product_info_id = '$productid'");
        return $query;
    }
    public function getBarcodeDate($date,$ptype){
        
        $result=$this->db->query("SELECT id FROM plant_product_mfg_info where cur_date = '$date' and product_type = '$ptype' ");

		if($result->num_rows()>0) 
        {
            //print_r($result->result());
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
     public function update_manpower($id,$change_resource,$ca_name){
    
        $data = array(
            'man_name' =>$change_resource,
           );

            $where = array('product_info_id ' => $id , 'ca_name ' => $ca_name);
            $this->db->where($where);
            
            if( $this->db->update('plant_product_ca_and_manpower ', $data))
      {
        return true;
      }
      else
      {
        return false;
      }
     }

    public function get_name($manpower){
        $result=$this->db->query("SELECT mp_name FROM plant_man_power where id = '$manpower'");

		if($result->num_rows()>0) 
        {
            //print_r($result->result());
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }

    public function ca_name($c){
        
        $query=$this->db->query("SELECT ca_name FROM critical_area_master where id = '$c'");
     return $query;
    }
    public function ca_assign_details($manpower,$infoid){
        $query=$this->db->query("SELECT * FROM plant_product_ca_and_manpower where product_info_id = '$infoid' and man_name = '$manpower'");
     return $query;
    }
    public function get_dates(){
        $result=$this->db->query("SELECT DISTINCT cur_date FROM plant_product_mfg_info ");

		if($result->num_rows()>0) 
        {
            //print_r($result->result());
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    
    function get_category(){
        $query = $this->db->get('categorytest');
        return $query;  
    }
 
    function get_sub_category($category_id){
        $query = $this->db->query("SELECT * FROM plant_product_mfg_info where  cur_date='$category_id'");
        return $query;
    }
    public function getInfoId($pname,$date){
        $result=$this->db->query("SELECT id FROM plant_product_mfg_info where product_name='$pname' and cur_date = '$date'");

		if($result->num_rows()>0) 
        {
            //print_r($result->result());
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    public function get_barcodes($bid){
        $result=$this->db->query("SELECT * FROM plant_product_barcodes where product_info_id = '$bid'");

		if($result->num_rows()>0) 
        {
            //print_r($result->result());
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    public function getProduct($product_Name){
        $result=$this->db->query("SELECT id FROM products_master where product_name = '$product_Name'");

		if($result->num_rows()>0) 
        {
            //print_r($result->result());
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }

    public function getValue($a,$b,$m){
        $result=$this->db->query("SELECT $a FROM $b where code = '$m'");

		if($result->num_rows()>0) 
        {
            //print_r($result->result());
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    public function shipment(){
        $result=$this->db->query("SELECT * FROM shipment");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
                            
    //public function file_to_store($ReciveBarcode,$product_type,$modelname,$mfg_date,$assembled_by,$approved_by){
    public function file_to_store($partName,$brand,$category,$unitRate,$status){
        $query="insert into test_parts_table values(null,'$partName','$brand','$category','$unitRate','$status')";
		$this->db->query($query);
    }
    
   public function file_to_store_dist($user_role_id,$userdept_Name,$email,$password,$user_City){
       $query="insert into users values(null,'$user_role_id','$userdept_Name','','$email','$password','','','','','','$user_City','','','','active','','')";
		$this->db->query($query);
   }
    
    
    
    
    /*Code added for cooler section by Naveen*/
    
    public function viewcoolers(){
        $result= $this->db->query("select * from plant_product_mfg_info where product_Type='SKY COOLERS' and status !='inactive'");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function productmgfDet($id){
        $result= $this->db->query("select * from plant_product_mfg_info where id=$id");
        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        }
    }
    
    public function coolerbarcodeDet($id){
        $result= $this->db->query("select * from plant_product_mfg_info 
                                INNER JOIN plant_product_barcodes ON plant_product_barcodes.product_info_id=plant_product_mfg_info.id
                                where plant_product_mfg_info.id=$id");
        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        }
    }
    
    public function viewcriticals($id){
//        $result= $this->db->query("select * from plant_product_ca_and_manpower 
//                                     INNER JOIN plant_product_ca_and_manpower ON plant_product_ca_and_manpower.id=plant_product_mfg_info.id	
//                                 where plant_product_ca_and_manpower.id=$id");
       
       $result= $this->db->query("SELECT * FROM plant_product_ca_and_manpower
                                INNER JOIN plant_product_mfg_info ON plant_product_mfg_info.id=plant_product_ca_and_manpower.product_info_id
                                WHERE plant_product_ca_and_manpower.product_info_id=$id");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    public function viewWashers(){
        $result= $this->db->query("select * from plant_product_mfg_info where product_Type='SKYZEN WASHERS' and status !='inactive'");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function productmfgwasherDet($id){
        $result= $this->db->query("select * from plant_product_mfg_info where id=$id");
        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        }
    }
    
     public function washerbarcodeDet($id){
        $result= $this->db->query("select * from plant_product_mfg_info 
                                INNER JOIN plant_product_barcodes ON plant_product_barcodes.product_info_id=plant_product_mfg_info.id
                                where plant_product_mfg_info.id=$id");
        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        }
    }
    
    public function viewwashercriticals($id){
         $result= $this->db->query("SELECT * FROM plant_product_ca_and_manpower
                                INNER JOIN plant_product_mfg_info ON plant_product_mfg_info.id=plant_product_ca_and_manpower.product_info_id
                                WHERE plant_product_ca_and_manpower.product_info_id=$id");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    /*Added new function by Naveen*/
     public function defectsDetails(){
         $result= $this->db->query("select * from asp_product_info_replace_info
                 INNER JOIN ticket_generate ON ticket_generate.ticket_Id=asp_product_info_replace_info.ticket_id");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    
}
?>



