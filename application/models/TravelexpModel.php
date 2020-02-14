<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class TravelexpModel extends CI_Model {
 
    var $table = 'ticket_generate';
    var $column_order = array('ticket_Id','asp_Name','cust_Town','barcode','calulatedDistance','amt_lati_longi','distance'); //set column field database for datatable orderable
    var $column_search = array('cust_Name','cust_Mobile','asp','asp_Name','ticket_Id','cust_Town','ticket_Generatedate','ticket_Closedate','status'); //set column field database for datatable searchable 
    var $order = array('ticketgenerate_Id' => 'DESC'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
         
        
//        if($this->input->post('fromDate'))
//        {
//            $this->db->like('ticket_Generatedate', $this->input->post('fromDate'));
//        }
//        if($this->input->post('toDate'))
//        {
//            $this->db->like('ticket_Closedate', $this->input->post('toDate'));
//        }
        
//         if($this->input->post('fromDate'))
//        {
//            $this->db->where('ticket_Generatedate >=', $this->input->post('fromDate'));
//        }
//        if($this->input->post('toDate'))
//        {
//            $this->db->where('ticket_Closedate <=', $this->input->post('toDate'));
//        }
        
        
        if($this->input->post('ticketasp_Name'))
        {
            $this->db->where('asp', $this->input->post('ticketasp_Name'));
        }
 
        $this->db->from($this->table);
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    public function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->where('status_ticket', 1);
        $query = $this->db->get();
        return $query->result();
    }
 
    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
 
//    public function get_list_countries()
//    {
//        $this->db->select('country');
//        $this->db->from($this->table);
//        $this->db->order_by('country','asc');
//        $query = $this->db->get();
//        $result = $query->result();
// 
//        $countries = array();
//        foreach ($result as $row) 
//        {
//            $countries[] = $row->country;
//        }
//        return $countries;
//    }
 
}