<?php 
class RetailerModel extends CI_Model {
    
    private  $email;
    private $id;
    public function __construct(){
        parent::__construct();
        
        
       $this->email = $this->session->userdata("email");
         $this->id = $this->session->userdata("id");
        
    }
    
    public function viewBillings(){
        $query = $this->db->query("select * from users where id=$this->id");
        $res = $query->row();
        $party_Name = $res->userdept_Name; 
        
        
       $query1 = $this->db->query("select *, SUM(amount) AS totalamt from asp_billings  where party_name='$party_Name' GROUP BY invoice_number");
        if($query1->num_rows()>0){
            return $query1->result();
        }else {
            return false;
        }
        
    }
    
    public function addchequeBill($chequeBill){
        $this->db->insert("scheme_assign_to_retailer_cheques",$chequeBill);
        if($this->db->affected_rows()>0){
            return true;
        }else {
            return false;
        }
    }
    
    public function viewbillPay(){
       // $query = $this->db->query("select * from dealer_Bills where dealer_Id = $this->id");
       $query = $this->db->query("select * from scheme_assign_to_retailer_cheques");
      // $query = $this->db->query("");
        if($query->num_rows() > 0){
            return $query->result();
        }else {
            return false;
        }
    }
    
}
?>