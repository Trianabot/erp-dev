<?php 
class ServiceEngmodel extends CI_Model {
    
    private  $email;
    private $id;
    public function __construct(){
        parent::__construct();
        
        
       $this->email = $this->session->userdata("email");
         $this->id = $this->session->userdata("id");
        
    }
    
    
    public function viewTickets(){
        //echo "select * from ticket_generate where service_Engineer=$this->id"; die; 
         $result = $this->db->query("select * from ticket_generate where service_Engineer=$this->id");
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false; 
        }
    }
    
    public function updticket($updateticket,$id){
        $this->db->where(array("ticket_Id"=>$id));		
		$this->db->update("ticket_generate",$updateticket);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 } 
    }
}
?>