
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit Ticket </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Ticekt</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <?php
                                                if($this->session->tempdata("add_success"))
                                                {
                                                echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("add_success")."</div>";
                                                }
                                                ?>
                                            </div>
                                        </div>

                                       
                                        
                                               
                                        
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-header text-center">EDIT CALL</h2>
                                     <?php
    if($this->session->tempdata("upd_succ"))

    {

        echo "<div class='alert alert-success'>".$this->session->tempdata("upd_succ")."</div>";

    }

                                        ?>
                                <?php 
                                 $attributes = array('id' => 'editticketForm');
                                 echo form_open_multipart(base_url()."ServiceEngineer/editticket/".$ticket->ticket_Id, $attributes);
                                 //echo form_open_multipart(base_url()."Products/editBrand/".$brand->brand_Id)
                                 ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style='border-right: 2px solid black'>
                                        <h5 class="card-header text-center">BASIC INFO</h5>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">                                                
                                            <div class="form-group">
                                                <label for="cust_Mobile">Mobile(Primary):</label>
                                                <input id="cust_Mobile" type="text" name="cust_Mobile" data-parsley-trigger="change" placeholder="Enter Mobile" autocomplete="off" class="form-control" value="<?php echo $ticket->cust_Mobile;?>" readonly>
                                                 <span class="text-danger"><?php echo form_error("cust_Mobile");?></span>
                                            </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="cust_Altmobile">Mobile(Alternate):</label>
                                                <input id="cust_Altmobile" type="text" name="cust_Altmobile" data-parsley-trigger="change" placeholder="Enter Alternate Mobile" autocomplete="off" class="form-control" value="<?php echo $ticket->cust_Altmobile;?>" readonly>
                                            </div>
                                            </div>
                                        </div>  
                                         <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">                                                
                                            <div class="form-group">
                                                <label for="cust_Name">Name:</label>
                                                <input id="cust_Name" type="text" name="cust_Name" data-parsley-trigger="change" placeholder="Enter Name" autocomplete="off" class="form-control" value="<?php echo $ticket->cust_Name;?>" readonly>
                                                <span class="text-danger"><?php echo form_error("cust_Name");?></span>
                                            </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="cust_Email">Email:</label>
                                                <input id="cust_Email" type="text" name="cust_Email" data-parsley-trigger="change" placeholder="Enter Email" autocomplete="off" class="form-control" value="<?php echo $ticket->cust_Email;?>" readonly>
                                                 <span class="text-danger"><?php echo form_error("cust_Email");?></span>
                                            </div>
                                            </div>
                                        </div>            
                                         <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">                                                
                                            <div class="form-group">
                                                <label for="cust_Address1">Address1:</label>
                                                <textarea id="cust_Address1" name="cust_Address1" placeholder="Enter Address" autocomplete="off" class="form-control" readonly><?php echo $ticket->cust_Address1;?></textarea>
                                                <span class="text-danger"><?php echo form_error("cust_Address1");?></span>
                                            </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="cust_Address2">Address2:</label>
                                                <textarea id="cust_Address2" name="cust_Address2" placeholder="Enter Address" autocomplete="off" class="form-control" readonly><?php echo $ticket->cust_Address2;?></textarea>
                                            </div>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">                                                
                                                <div class="form-group">
                                                    <label for="cust_Town">City/Town/Village:</label>
                                                   <input id="cust_Town" type="text" name="cust_Town" data-parsley-trigger="change" placeholder="Enter Town" autocomplete="off" class="form-control" value="<?php echo $ticket->cust_Town;?>" readonly>
                                                     <span class="text-danger"><?php echo form_error("cust_Town");?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="cust_State">State:</label>
                                                    <input id="cust_State" type="text" name="cust_State" data-parsley-trigger="change" placeholder="Enter state" autocomplete="off" class="form-control" value="<?php echo $ticket->cust_State;?>" readonly>
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="cust_Pincode">Pin-Code:</label>
                                                    <input id="cust_Pincode" type="text" name="cust_Pincode" data-parsley-trigger="change" placeholder="Enter PinCode" autocomplete="off" class="form-control" value="<?php echo $ticket->cust_Pincode;?>" readonly>
                                                </div>
                                            </div>
                                        </div>         
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <h5 class="card-header text-center">COMPLAINT INFO</h5>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">                                                
                                                <div class="form-group">
                                                    <label for="prod_Brand">Brand:</label>
                                                    <select id="prod_Brand" type="text" name="prod_Brand" data-parsley-trigger="change" class="form-control">
                                                        <option value="<?php echo $ticket->prod_Brand;?>"><?php echo $ticket->prod_Brand;?></option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Category">Category:</label>
                                                     <select id="prod_Category" type="text" name="prod_Category" data-parsley-trigger="change" class="form-control">
                                                        <option value="<?php echo $ticket->prod_Category;?>"><?php echo $ticket->prod_Category;?></option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Name">Model:</label>
                                                    <select id="prod_Name" type="text" name="prod_Name" data-parsley-trigger="change" class="form-control">
                                                        <option value="<?php echo $ticket->prod_Name;?>"><?php echo $ticket->prod_Name;?></option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">                                                
                                                <div class="form-group">
                                                    <label for="prod_Datepurchase">Date of Purchase:</label>
                                                     <input id="prod_Datepurchase" type="text" name="prod_Datepurchase" data-parsley-trigger="change" placeholder="Purchase Date" autocomplete="off" class="form-control" value="<?php echo $ticket->prod_Datepurchase;?>">
                                                     <span class="text-danger"><?php echo form_error("prod_Datepurchase"); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Serialno">Serial No:</label>
                                                     <input id="prod_Serialno" type="text" name="prod_Serialno" data-parsley-trigger="change" placeholder="Serial No" autocomplete="off" class="form-control" value="<?php echo $ticket->prod_Serialno;?>">
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Warranty">Warranty Status:</label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Warranty" class="custom-control-input" value="Inwarranty"><span class="custom-control-label">In Warranty</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Warranty" class="custom-control-input" value="Outofwarranty"><span class="custom-control-label">Out of Warranty</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Warranty" class="custom-control-input" value="Dontknow"><span class="custom-control-label">Don't know</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-9">
                                                <div class="form-group">
                                                    <label for="prod_Storeretailer">Store/Retailer:</label>
                                                     <input id="prod_Storeretailer" type="text" name="prod_Storeretailer" data-parsley-trigger="change" placeholder="Store / Retailer" autocomplete="off" class="form-control" value="<?php echo $ticket->prod_Storeretailer;?>">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3">
                                                
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-9">
                                                <label>Case Type:</label>
                                                <div class="form-group">                                                   
                                                      <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="editcall_Casetype" class="custom-control-input" value='Install'><span class="custom-control-label">Installation</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="editcall_Casetype" class="custom-control-input" value='Complaint'><span class="custom-control-label">Complaint</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3">                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-9">
                                                <label>Prioriiy:</label>
                                                <div class="form-group">
                                                   <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Priority" class="custom-control-input" value='normal' <?php if($ticket->prod_Priority == "normal"){ echo "checked";}?>><span class="custom-control-label">Normal</span>
                                                    </label>
                                                      <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Priority" class="custom-control-input" value='medium' <?php if($ticket->prod_Priority == "medium"){ echo "checked";}?>><span class="custom-control-label">Medium</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Priority" class="custom-control-input" value='high' <?php if($ticket->prod_Priority == "high"){ echo "checked";}?>><span class="custom-control-label">High</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3">
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-9">
                                                 <div class="form-group">
                                                    <label for="prod_Remarks">Remarks:</label>
                                                      <textarea id="prod_Remarks" name="prod_Remarks" placeholder="Remarks" autocomplete="off" class="form-control"><?php echo $ticket->prod_Remarks;?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                        <h5 class="card-header text-center">Part Replace Information</h5>
                                        </div>
                                    </div>
                             
                                    
                                
                                    
                                    
                                    
                                    
                                 <div class='row'>
                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                        <div class='form-group'>
                                            <label>BarCode Scan</label>
                    <input type='text' name='barcode_Scan' class='form-control' value='<?php echo set_value("barcode_Scan");?>'>
                                            <span class='text-danger'><?php echo form_error("barcode_Scan");?></span>
                                        </div>
                                    </div>
                                     <div class='clearfix'></div>
                                     
                                    
                                </div>
                                
                                <div class='editcall_Complaint' style='display:none;'> 
                                <div class='row'>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                        <div class='form-group'>
                                            <label>Complaint Type</label>  
                                            <select name='productcomplaint_Nature' class='form-control'>
                                            
                                            </select>
                                        </div>
                                    </div>
                                     <div class='col-xs-12 col-sm-4 col-md-4'>
                                        <div class='form-group'>
                                            <label>Complaint Overview</label>
                                            <input type='text' name='complaint_overview' id='complaint_overview' class='form-control' value='<?php echo $ticket->prod_Remarks;?>'>
                                            <span class='text-danger'><?php echo form_error("complaint_overview");?></span>
                                        </div>
                                    </div>
                                    <div class='clearfix'></div>
                                </div>
                                 </div>
                                    
                                    
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class='form-group'>
                                            <label class="col-form-label"> Repair Info: </label>
<!--                                                        <input type="text" class="form-control" name='repair_Info'>-->
                                            <select name='repair_Info' class='form-control'>
                                                <option value='0'>Select Repair Info</option>
                                                <option>Part Replacement</option>
                                                <option>Adjustment</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                            <labe class="col-form-label"l> Repair Remarks: </label>
                                            <input type="text" class="form-control" name='repair_Remarks'>
                                        </div>
                                    </div>
                             </div>
                            
                            <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class='form-group'>
                                            <label>Product Warranty</label>
                                            <div class="form-group">                                                   
                                          <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="prodwarranty_Casetype" class="custom-control-input" value='Warranty'><span class="custom-control-label">Warranty</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="prodwarranty_Casetype" class="custom-control-input" value='Outofwarranty'><span class="custom-control-label">Out of Warranty</span>
                                        </label>
                                                <span class='text-danger'><?php echo form_error("prodwarranty_Casetype");?></span>
                                                </div>
                                        </div>
                                    </div>
                                    <div class='clearfix'>
                                    </div>
                            </div>
                            
                            <div class='productwithwarranty' style='display:none'>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class='form-group'>
                                             <label>Part Name</label>
                                                <select name='editpartName' id='editpartName' class='form-control'>
                                                    <option value='0'>Select Part Name</option>
                                                    <?php 
                                                    foreach($parts as $part){
                                                        ?> 
                                                        <option><?php echo $part->part_Name?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                        </div>
                                    </div>
                                    
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class='form-group'>
                                            <label>Part Cost</label>
                            <input type='text' name='partCost' id='partCost' class='form-control'>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class='productcostDetails' style='display:none;'> 
                            <div class='row'>
                                
                                <div class='col-xs-12 col-sm-3 col-md-3'>
                                            <div class='form-group'>
                                            <label>Part Name</label>
                                                <select name='editpartName' id='editpartName' class='form-control'>
                                                    <option value='0'>Select Part Name</option>
                                                    <?php 
                                                    if($parts){
                                                        foreach($parts as $part){
                                                        ?> 
                                                        <option><?php echo $part->part_Name?></option>
                                                        <?php
                                                    }
                                                    }else {
                                                        ?> 
                                                        <option>NO Part</option>
                                                        <?php
                                                    }
                                                    
                                                    ?>
                                                </select>
                                        
                                        </div>
                                            </div>
                                
                                <div class='col-xs-12 col-sm-3 col-md-3'>
                                        <div class='form-group'>
                                            <label>Part Cost</label>
                            <input type='text' name='partCost' id='partCost' class='form-control'>
                                        </div>
                                    </div>
                                
                                
                                    <div class='col-xs-12 col-sm-2 col-md-2'>
                                        <div class='form-group'>
                                            <label>Part Cost GST</label>
                                            <input type='text' name='partcostGST' id='partcostGST' class='form-control'>
                                        </div>
                                    </div>
                                     <div class='col-xs-12 col-sm-2 col-md-2'>
                                        <div class='form-group'>
                                            <label>Part Discount</label>
                                            <input type='text' name='partDiscount' id='partDiscount' class='form-control'>
                                        </div>
                                    </div>
                                     <div class='col-xs-12 col-sm-2 col-md-2'>
                                        <div class='form-group'>
                                            <label>Total Cost</label>
                                            <input type='text' name='totalCost' id='totalCost' class='form-control'>
                                        </div>
                                    </div>
                            </div>
                            </div>  
                                    
                                    <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class='form-group'>
                                            <label>Service Cost</label>
                                            <input type='text' name='service_Cost' class='form-control' value='<?php echo set_value("service_Cost");?>'>
                                            <span class='text-danger'><?php echo form_error("service_Cost");?></span>
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class='form-group'>
                                            <label>Distance Travelled</label>
                                            <input type='text' name='distance_Travel' class='form-control' value='<?php echo set_value("distance_Travel");?>'>
                                            <span class='text-danger'><?php echo form_error("distance_Travel");?></span>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class='form-group'>
                                            <label>Bill Copy</label>
                                            <input type='file' name='custbill_Copy' id='custbill_Copy' class='form-control'>
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class='form-group'>
                                            <label>Video</label>
                                            <input type='file' name='bill_Copy' class='form-control'>
                                        </div>
                                    </div>
                                </div>
                                    
                                    
                                           
                                    
                                            
                                      
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" value="Submit" class="btn btn-primary" style="margin-left: 10%;">
                                        </div>
                                    </div>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                                        
                                        
                                  
              
</div>
</div>
            </div>
        </div>


