
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Billings</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Retailer" class="breadcrumb-link">Retailer</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Billing Lists</span>
                                   <a href='<?php echo base_url()?>Retailer/billings'> <h5 class="card-header1"> Billings </h5></a>
                                    
                                </div>
                                
                            </div>
                               
                                 <div class=""> 
<!--                                     <a href="<?php echo base_url()?>Crm/aspCSV" class='btn btn-success'>Export CSV</a> -->
                               
                                </div>
<div class="card">
                                <div class="card-body">
                                    <h3>Cheque</h3>
                                   
                                        
                                      
                                            <?php echo form_open(base_url()."Retailer/chequeBill");?>
                                             <div class='row'>
                                          <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class='form-group'>
                                            <label>Cheque Number</label>
                                            <input type='text' name='cheque_Number' class='form-control'>
                                        </div>
                                        
                                        <div class='form-group'>
                                            <label>Cheque Date</label>
                                            <input type='date' name='cheque_Date' class='form-control'>
                                        </div>
                                        
                                        <div class='form-group'>
                                            <label>Amount</label>
                                            <input type='text' name='bill_Amt' class='form-control'>
                                        </div>
                                        
                                        <div class='form-group'>
                                            <label>Bank Name</label>
                                            <input type='text' name='bank_Name' class='form-control'>
                                        </div>
                                        
                                        <div class='form-group'>
                                            <label>Invoice Number</label>
                                            <select  name="invoice_No[]"  multiple id='invoice_No' class='form-control'>
                                                <option value='0'>Select Invoice</option>
                                                <?php 
                                                if($invoices){
                                                foreach($invoices as $invoice){
                                                    ?> 
                                    <option value="<?php echo $invoice->invoice_number;?>">
                                         <?php echo $invoice->invoice_number.''.$invoice->totalamt;?>
                                   
                                    </option>
                                                    <?php
                                                }
                                                }
                                                ?>
                                            </select>
                                            <span id='invoice_Amt'></span>
                                            <input type='hidden' name='invoiceAmount' id='invoiceAmount'>
                                        </div>
                                        </div>
                                        
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Courier Name</label>
                                                <input type='text' name='courier_Name' class='form-control'>
                                            </div>
                                            <div class='form-group'>
                                                <label>Courier No</label>
                                                <input type='text' name='courier_No' class='form-control'>
                                            </div>
                                            <div class='form-group'>
                                                <label>Courier Date</label>
                                                <input type='date' name='courier_Date' class='form-control'>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class='row'>
                                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                                  <div class='form-group'>
                                            <input type='submit' name='cheque_submit' class='btn btn-primary' value='Submit'>
                                        </div>
                                            </div>
                                        </div>
                                        
                                    <?php echo form_close();?>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>

<div class="modal fade" id="billchequeModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Bill</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('bill_Paycheque')?></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    
