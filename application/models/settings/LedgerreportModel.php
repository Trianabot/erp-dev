<?php 
class LedgerreportModel extends CI_Model {
    
    public function insertCreditnotes($credit_Notes){
        
         $this->db->insert("credit_notes",$credit_Notes);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
        
    }
    
     public function viewcreditNotes(){
         $result = $this->db->query("select * from credit_notes");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
      public function insertdebitnotes($debit_Notes){
        
         $this->db->insert("debit_notes",$debit_Notes);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
        
    }
    
     public function viewdebitNotes(){
         $result = $this->db->query("select * from debit_notes");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function insertjournalEntry($journal_Entries){
          $this->db->insert("journal_entries",$journal_Entries);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewjournalEntries(){
         $result = $this->db->query("select * from journal_entries");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function insertLedger($ledger_Entries){
         $this->db->insert("ledger",$ledger_Entries);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
     public function viewledgers(){
         $result = $this->db->query("select * from ledger");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    public function insertPurchase($purchase_Entries){
          $this->db->insert("purchase_ledger",$purchase_Entries);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
      public function viewPurchases(){
         $result = $this->db->query("select * from purchase_ledger");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
      }
    
    public function insertPurchasereturn($purchasereturn_Entries){
          $this->db->insert("purchasereturn_ledger",$purchasereturn_Entries);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewPurchasereturns(){
         $result = $this->db->query("select * from purchasereturn_ledger");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
      }
    
    public function insertReceipt($receipt_Entries){
        $this->db->insert("receipts_ledger",$receipt_Entries);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
     public function viewReceipts(){
         $result = $this->db->query("select * from receipts_ledger");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
      }
    
    public function insertSales($sales_Entries){
        $this->db->insert("sales_ledger",$sales_Entries);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewSales(){
         $result = $this->db->query("select * from sales_ledger");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
      }
    
    public function insertSalesreturn($salesreturn_Entries){
         $this->db->insert("salesreturn_ledger",$salesreturn_Entries);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
     public function viewSalesreturn(){
         $result = $this->db->query("select * from salesreturn_ledger");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
      }
      
      public function getcreditnotecsv(){
        $response = array();
        // Select record
        $this->db->select('credit_Date,credit_VoucherNo,credit_Branch,credit_Party,credit_Account,credit_Netamount,credit_Division');
        $q = $this->db->get('credit_notes');
        $response = $q->result_array();
        return $response;
    }
    
    public function getdebitnotecsv(){
        $response = array();
        // Select record
        $this->db->select('debit_Date,debit_VoucherNo,debit_Branch,debit_Party,debit_Account,debit_Netamount,debit_Division');
        $q = $this->db->get('debit_notes');
        $response = $q->result_array();
        return $response;
    }
    
    public function getjournalcsv(){
        $response = array();
        // Select record
        $this->db->select('journalentry_Date,journalentry_VoucherNo,journalentry_Branch,journalentry_DebitAc,journalentry_CreditAc,journalentry_Amount,journalentry_Division');
        $q = $this->db->get('journal_entries');
        $response = $q->result_array();
        return $response;
    }
    
    public function getledgercsv(){
        $response = array();
        // Select record
        $this->db->select('ledger_Date,ledger_VoucherNo,ledger_Branch,ledger_Debitac,ledger_Creditac,ledger_Amount,ledger_Division');
        $q = $this->db->get('ledger');
        $response = $q->result_array();
        return $response;
    }
    
    public function getpurchasecsv(){
         $response = array();
        // Select record
        $this->db->select('purchase_Date,purchase_VoucherNo,purchase_Branch,purchase_Party,purchase_Purchaseac,purchase_Product,purchase_Netamt,purchase_Division');
        $q = $this->db->get('purchase_ledger');
        $response = $q->result_array();
        return $response;
    }
    
    public function getpurchasereturncsv(){
        $response = array();
        // Select record
        $this->db->select('purchasereturn_Date,purchasereturn_VoucherNo,purchasereturn_Branch,purchasereturn_Party,purchasereturn_Puretac,purcahsereturn_Product,purchasereturn_Amt,purchasereturn_Division');
        $q = $this->db->get('purchasereturn_ledger');
        $response = $q->result_array();
        return $response;
    }
    
    public function getreceiptcsv(){
         $response = array();
        // Select record
        $this->db->select('receipt_Date,receipt_Voucherno,receipt_Mode,receipt_Branch,receipt_Party,receipt_Account,receipt_Netamt,receipt_Division');
        $q = $this->db->get('receipts_ledger');
        $response = $q->result_array();
        return $response;
    }
    
     public function getSalescsv(){
        $response = array();
           
        // Select record
        $this->db->select('sales_Date,sales_VoucherNo,sales_Branch,sales_Party,sales_Product,sales_Amount,sales_Division');
        $q = $this->db->get('sales_ledger');
        $response = $q->result_array();
        
        return $response;
    }
    
    public function getsalesreturncsv(){
          $response = array();
        // Select record
        $this->db->select('salesreturn_Date,Voucher_No,Branch,Party,Product,Quantity,Unit_Rate,Net_Amount,Division');
        $q = $this->db->get('sales_return');
        $response = $q->result_array();
        return $response;
    }
    
     public function addcollectionTarget($add_target){
        $this->db->insert("CollectionTarget",$add_target);
        if($this->db->affected_rows()>0) {
            return true; 
        }else{
        return false; 
        }
    }
    
    public function viewTargets(){
        $result = $this->db->query("select * from CollectionTarget");
        if($result->num_rows()>0){
            return $result->result();
        }else {
            return false; 
        }
    }
    
    
}
?>