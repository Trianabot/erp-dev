<style>
    .formError{
        color:red;
    }
    .card-header{
        padding:10px 0px !important;
    }
</style>


<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Raise Ticket </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Raise Ticket</li>
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
                                <?php 
                                 $attributes = array('id' => 'raiseticketForm');
                                 echo form_open_multipart(base_url()."Crm/raiseTicket", $attributes);
                                 ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="border-right:1px solid #ddd">
                                        <h5 class="card-header">Customer Information</h5>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">                                                
                                            <div class="form-group">
                                                <label for="cust_Mobile">Mobile(Primary): <span class="formError">*</span></label>
                                                <input id="cust_Mobile"  type="text" name="cust_Mobile" data-parsley-trigger="change" placeholder="Enter Mobile" autocomplete="off" class="form-control" value="<?php echo set_value("cust_Mobile");?>">
                                                 <span class="text-danger"><?php echo form_error("cust_Mobile");?></span>
                                            </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="cust_Altmobile">Mobile(Alternate):</label>
                                                <input id="cust_Altmobile" type="text" name="cust_Altmobile" data-parsley-trigger="change" placeholder="Enter Alternate Mobile" autocomplete="off" class="form-control" value="<?php echo set_value("cust_Altmobile");?>">
                                            </div>
                                            </div>
                                        </div>  
                                         <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">                                                
                                            <div class="form-group">
                                                <label for="cust_Name">Name: <span class="formError">*</span></label>
                                                <input id="cust_Name" type="text" name="cust_Name" data-parsley-trigger="change" placeholder="Enter Name" autocomplete="off" class="form-control" value="<?php echo set_value("cust_Name");?>">
                                                <span class="text-danger"><?php echo form_error("cust_Name");?></span>
                                            </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="cust_Email">Email:</label>
                                                <input id="cust_Email" type="text" name="cust_Email" data-parsley-trigger="change" placeholder="Enter Email" autocomplete="off" class="form-control" value="<?php echo set_value("cust_Email");?>">
                                                 <span class="text-danger"><?php echo form_error("cust_Email");?></span>
                                            </div>
                                            </div>
                                        </div>            
                                         <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">                                                
                                            <div class="form-group">
                                                <label for="cust_Address1">Address1: <span class="formError">*</span></label>
                                                <textarea id="cust_Address1" name="cust_Address1" placeholder="Enter Address" autocomplete="off" class="form-control"><?php echo set_value("cust_Address1");?></textarea>
                                                <span class="text-danger"><?php echo form_error("cust_Address1");?></span>
                                            </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="cust_Address2">Address2:</label>
                                                <textarea id="cust_Address2" name="cust_Address2" placeholder="Enter Address" autocomplete="off" class="form-control"><?php echo set_value("cust_Address2");?></textarea>
                                            </div>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">                                                
                                                <div class="form-group">
                                                    <label for="asp_Town">City/Town/Village: <span class="formError">*</span></label>
<!--                                                   <input id="cust_Town" type="text" name="cust_Town" data-parsley-trigger="change" placeholder="Enter Town" autocomplete="off" class="form-control" value="<?php echo set_value("cust_Town");?>">-->
                                                    <select name="asp_Town" id="asp_Town" class="form-control">
                                                        <option value="0"> Select City/Town/Village</option>
                                                        <?php 
                                                        foreach($asps as $asp){
                                                            ?> 
            <option <?php echo  set_select('asp_Town', $asp->user_City); ?>> <?php echo $asp->user_City;?> </option>    
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                     <span class="text-danger"><?php echo form_error("asp_Town");?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="cust_State">State:</label>
                                                    <input id="cust_State" type="text" name="cust_State" data-parsley-trigger="change" placeholder="Enter state" autocomplete="off" class="form-control" value="<?php echo set_value("cust_State");?>">
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="cust_Pincode">Pin-Code:</label>
                                                    <input id="cust_Pincode" type="text" name="cust_Pincode" data-parsley-trigger="change" placeholder="Enter PinCode" autocomplete="off" class="form-control" value="<?php echo set_value("cust_Pincode");?>">
                                                </div>
                                                <span id='custpinerr' style='color:red'></span>
                                            </div>
                                            
                                        </div>    
                                        <div class='aspSection' style="display:none;">
                                             <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                     <div class="form-group">
                                                         <label for="aspName">Select ASP</label>
                                                         <select name="aspName" id='aspName' class="form-control"> </select>
                                                         
                                                    </div>
                                                </div>  
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Select All Asp </label>
                                                        <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input is-valid" id="allaspList" name= 'allaspList'>
                                                <label class="custom-control-label" for="allaspList">All Asp</label>
                                            </div>
                                                        
                                                        
                                                    </div>
                                                 </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <h5 class="card-header">Product Complaint Details</h5>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">                                                
                                                <div class="form-group">
                                                    <label for="prod_Brand">Brand: <span class="formError">*</span></label>
                                                    <select id="prod_Brand" type="text" name="prod_Brand" data-parsley-trigger="change" class="form-control">
                                                        <option value="0">Select Brand</option>
                                                        <option value='Skyzen'>Skyzen</option>
                                                        <?php /* ?> 
                                                        foreach($brands as $brand){
                                                            ?> 
                                                            <option value='<?php echo $brand->brand;?>'><?php echo $brand->brand;?></option>
                                                            <?php
                                                        }
                                                        ?> <?php */ ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Category">Category: <span class="formError">*</span></label>
                                                     <select id="prod_Category" type="text" name="prod_Category" data-parsley-trigger="change" class="form-control">
                                                        <option value="0">Select Category</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Name">Product: <span class="formError">*</span></label>
                                                    <select id="prod_Name" type="text" name="prod_Name" data-parsley-trigger="change" class="form-control">
                                                        <option value="0">Select Product</option>
                                                        <?php 
                                                        foreach($products as $product){
                                                            ?> 
            <option value="<?php echo $product->product_Name;?>" <?php echo  set_select('prod_Name', $product->product_Name); ?>><?php echo $product->product_Name;?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <span class="text-danger"><?php echo form_error("prod_Name");?></span>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">                                                
                                                <div class="form-group">
                                                    <label for="prod_Datepurchase">Date of Purchase: <span class="formError">*</span></label>
                                                     <input id="prod_Datepurchase" type="text" name="prod_Datepurchase" data-parsley-trigger="change" placeholder="Purchase Date" autocomplete="off" class="form-control" value="<?php echo set_value("prod_Datepurchase");?>">
                                                     <span class="text-danger"><?php echo form_error("prod_Datepurchase"); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Serialno">Serial No:</label>
                                                     <input id="prod_Serialno" type="text" name="prod_Serialno" data-parsley-trigger="change" placeholder="Serial No" autocomplete="off" class="form-control" value="<?php echo set_value("prod_Serialno");?>">
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Warranty">Warranty: <span class="formError">*</span></label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Warranty" class="custom-control-input" value="Inwarranty" <?php echo set_radio('prod_Warranty', 'Inwarranty'); ?>><span class="custom-control-label">In Warranty</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Warranty" class="custom-control-input" value="Outofwarranty" <?php echo set_radio('prod_Warranty', 'Outofwarranty'); ?>><span class="custom-control-label">Out of Warranty</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Warranty" class="custom-control-input" value="Dontknow" <?php echo set_radio('prod_Warranty', 'Dontknow'); ?>><span class="custom-control-label">Don't know</span>
                                                    </label> 
                                                    
                                                    <label for="prod_Warranty" class="error"></label>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-9">
                                                <div class="form-group">
                                                    <label for="prod_Storeretailer">Store/Retailer:</label>
                                                     <input id="prod_Storeretailer" type="text" name="prod_Storeretailer" data-parsley-trigger="change" placeholder="Store / Retailer" autocomplete="off" class="form-control" value="<?php echo set_value("prod_Storeretailer");?>">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3">
                                                
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-9">
                                                <label>Case Type: <span class="formError">*</span> </label>
                                                <div class="form-group">                                                   
                                                      <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Casetype" class="custom-control-input" value='Install' <?php echo set_radio('prod_Casetype', 'Install'); ?>><span class="custom-control-label">Installation</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Casetype" class="custom-control-input" value='Complaint' <?php echo set_radio('prod_Casetype', 'Complaint'); ?>><span class="custom-control-label">Complaint</span>
                                                    </label>
                                                    <span class="text-danger"><?php echo form_error("prod_Casetype");?></span>
                                                    <label for="prod_Casetype" class="error"></label>
                                                </div>
                                                
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3">                                                
                                            </div>
                                        </div>
                                        
                                        <div class='complaintNature' style='display:none'>
                                                 <div class='row'>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <label>Nature of Complaint</label>
                                                        <select name='productcomplaint_Nature' class='form-control'>
                                                           
                                                        </select>
                                        <span class="text-danger"><?php echo form_error("productcomplaint_Nature");?></span>
                                                     </div>
                                                     <div class='col-xs-12 col-sm-6 col-md-6'>
                                                     
                                                     </div>
                                                 </div>
                                        </div>
                                       
                                        
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-9">
                                                <label>Prioriiy: <span class="formError">*</span> </label>
                                                <div class="form-group">
                                                   <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Priority" class="custom-control-input" value='normal' <?php echo set_radio('prod_Priority', 'normal'); ?>><span class="custom-control-label">Normal</span>
                                                    </label>
                                                      <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Priority" class="custom-control-input" value='medium' <?php echo set_radio('prod_Priority', 'medium'); ?>><span class="custom-control-label">Medium</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Priority" class="custom-control-input" value='high' <?php echo set_radio('prod_Priority', 'high'); ?>><span class="custom-control-label">High</span>
                                                    </label>
                                                    <span class="text-danger"><?php echo form_error("prod_Priority");?></span>
                                                    <label for="prod_Priority" class="error"></label>
                                                </div>
                                                
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3">
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-9">
                                                 <div class="form-group">
                                                    <label for="prod_Remarks">Complaint Details:</label>
                                                      <textarea id="prod_Remarks" name="prod_Remarks" placeholder="Complaint Details" autocomplete="off" class="form-control"><?php echo set_value("prod_Remarks");?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <input type="submit" value="Submit" class="btn btn-primary" style="margin-left: 11%;">
                                        </div>
                                    </div>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                                        
                                        
                                  
              
</div>
</div>
            </div>
        </div>



 <div class="modal fade" id="raiseticketModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Raise Ticket</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('report')?></h5>
                    <h5 class="text-center">
                        <?php echo $this->session->userdata('ticket')?></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

