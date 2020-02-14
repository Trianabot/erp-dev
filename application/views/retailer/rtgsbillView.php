
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
                                    <h3>RTGS</h3>
                                    <div class='row'>
                                        
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <?php echo form_open(base_url()."");?>
                                        <div class='form-group'>
                                            <label>RTGS Id</label>
                                            <input type='text' name='bill_Amt' class='form-control'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Amount</label>
                                            <input type='text' name='bill_Amt' class='form-control'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Invoice No</label>
                                            <input type='text' name='invoice_No' class='form-control'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Bank Name</label>
                                            <input type='text' name='invoice_No' class='form-control'>
                                        </div>
                                        
                                        <div class='form-group'>
                                            <input type='submit' name='submit' class='btn btn-primary' value='Submit'>
                                        </div>
                                    <?php echo form_close();?>
                                        </div>
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
