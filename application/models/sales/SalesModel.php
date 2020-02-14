<?php 
class SalesModel extends CI_Model {

    
    public function salestostore($salescsv_Data){
        $this->db->insert("sales",$salescsv_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }

    public function salesView(){
        //DISTINCT `Voucher_No`,
        //echo "select *, DISTINCT(Voucher_No) from sales_Csv"; die; 
        $result = $this->db->query("select DISTINCT Date, Voucher_No, Branch, Party, Division from sales");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }

    public function salesvoucherView($id){
        //echo "select FORMAT(Gross_Amount,4) from sales_Csv where Voucher_No='$id'"; die; 
        $result= $this->db->query("select * from sales where Voucher_No='$id'");

        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }

    public function salesVoucher($sales_Id){
        $result= $this->db->query("select * from sales where Voucher_No='$sales_Id'");

        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        }
    }

    public function salesCount($sales_Id){
        $result= $this->db->query("select SUM(Net_Amount) as net from sales where Voucher_No='$sales_Id'");

        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        }
    }

    public function salesDelivery($salescsv_Data){
        $this->db->insert("sales_delivery",$salescsv_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }

    public function salesdeliveryView(){
        //$result = $this->db->query("select DISTINCT Voucher_No, Branch, Party, Division from sales_delivery");
        $result = $this->db->query("select DISTINCT Voucher_No, Branch, Party from sales_delivery");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }

    public function deliveryVoucher($voucher_Id){
        $result= $this->db->query("select * from sales_delivery where Voucher_No='$voucher_Id'");

        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        }
    }

    public function deliveryvoucherView($voucher_Id){
        //echo "select * from sales_delivery where Voucher_No='$voucher_Id'"; die; 
        $result= $this->db->query("select * from sales_delivery where Voucher_No='$voucher_Id'");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }

    public function salesdeliveryreturnView(){
        $result = $this->db->query("select DISTINCT Voucher_No, Branch, Party from sales_deliveryreturn");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }

    public function deliveryReturn($voucher_Id){
        $result= $this->db->query("select * from sales_deliveryreturn where Voucher_No='$voucher_Id'");

        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        }
    }

    public function deliveryreturnView($voucher_Id){
        $result= $this->db->query("select * from sales_deliveryreturn where Voucher_No='$voucher_Id'");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }

    public function salesDeliveryReturn($salescsv_Data){
        $this->db->insert("sales_deliveryreturn",$salescsv_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }

    public function salesreturnView(){
        $result = $this->db->query("select DISTINCT Voucher_No, Branch, Party from sales_return");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }

    public function saleReturn($voucher_Id){
        $result= $this->db->query("select * from sales_return where Voucher_No='$voucher_Id'");

        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        }
    }

    public function salereturnView($voucher_Id){
        $result= $this->db->query("select * from sales_return where Voucher_No='$voucher_Id'");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }

    public function salesReturnData($salescsv_Data){
        $this->db->insert("sales_return",$salescsv_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function pendingDelivery($salescsv_Data){
         $this->db->insert("salespend_delivery",$salescsv_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function pendings(){
         $result = $this->db->query("select DISTINCT Voucher_No, Branch, Party from salespend_delivery");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function salespendingDelivery($voucher_Id){
          $result= $this->db->query("select * from salespend_delivery where Voucher_No='$voucher_Id'");

        if($result->num_rows()>0){
            return $result->row_object();
        }else {
            return false; 
        }
    }
    
    public function salespendingProducts($voucher_Id){
         $result= $this->db->query("select * from salespend_delivery where Voucher_No='$voucher_Id'");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function addpickList($salescsv_Data){
         $this->db->insert("sales_Picklist",$salescsv_Data);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function pickList(){
          $result = $this->db->query("select * from sales_Picklist");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function sales_executive_track(){
        $result=$this->db->query("SELECT * FROM store_information ORDER BY id DESC");

		if($result->num_rows()>0) 
        {
         return $result->result();
        }
       else 
        {
         return false; 
        }
    }
    
        
    public function viewExecutives(){
         $result = $this->db->query("select * from executives");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }

}
?>