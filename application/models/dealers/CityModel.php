<?php
class CityModel extends CI_Model {

    public function addCity($add_City) {
        $this->db->insert("city",$add_City);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewCities() {
        $result=$this->db->query("SELECT * FROM city 
										INNER JOIN state ON city.state_Id = state.state_Id
                                        INNER JOIN district ON city.dist_Id = district.dist_Id
                                        INNER JOIN subdistrict ON city.subdist_Id = subdistrict.subdist_Id
                                where city.status=1");
  

		if($result->num_rows()>0) {
			return $result->result();
		}else{
			return false; 
		}
    } 
    
    public function editCity($id){
		$result=$this->db->query("SELECT * FROM city 
                                        INNER JOIN state ON city.state_Id = state.state_Id
                                        INNER JOIN district ON city.dist_Id = district.dist_Id
                                        INNER JOIN subdistrict ON city.subdist_Id = subdistrict.subdist_Id
								where city.city_Id=$id");

		if($result->num_rows()>0) {
			return $result->row_object();
		}else{
			return false; 
		}
    }

    public function updateCity($edit_City,$id){
        $this->db->where(array("city_Id"=>$id));		
		$this->db->update("city",$edit_City);
		if($this->db->affected_rows()>0) {
	    	return true;    
		} else {
		     return false; 
		 }     
    }

}
?>



