<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Sales</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                            
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> ASP </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/Asp" ><i class="fa fa-fw fa-user-circle"></i> ASP </a>
                                    </li>
                                    
                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/Serviceengineer" ><i class="fa fa-fw fa-user-circle"></i> Service Engineer </a>         -->
                                    <!--</li>-->
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/Stockview" ><i class="fa fa-fw fa-user-circle"></i> Stock View </a>         
                                    </li>
                                    
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i> Service Calls </a>
                                <div id="submenu-3" class="<?=($this->uri->segment(2)==='Listretailerorders')?'collapse':''?> submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/raiseTicket" ><i class="fa fa-fw fa-user-circle"></i> Raise Ticket </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/ticketHistory" ><i class="fa fa-fw fa-user-circle"></i> Ticket History </a>         
                                    </li>
                                    
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
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
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm_Dashboard" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Raise Ticekt</li>
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
                                 $attributes = array('id' => '');
                                 echo form_open_multipart(base_url()."Crm_Dashboard/raiseTicket", $attributes);
                                 ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style='border-right: 2px solid black'>
                                        <h5 class="card-header">Customer Information</h5>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">                                                
                                            <div class="form-group">
                                                <label for="cust_Mobile">Mobile(Primary):</label>
                                                <input id="cust_Mobile" type="text" name="cust_Mobile" data-parsley-trigger="change" placeholder="Enter Mobile" autocomplete="off" class="form-control" value="<?php echo set_value("cust_Mobile");?>">
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
                                                <label for="cust_Name">Name:</label>
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
                                                <label for="cust_Address1">Address1:</label>
                                                <textarea id="cust_Address1" name="cust_Address1" placeholder="Enter Address" autocomplete="off" class="form-control"><?php echo set_value("cust_Address1");?></textarea>
                                                <span class="text-danger"><?php echo form_error("cust_Address1");?></span>
                                            </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="cust_Address2">Address2:</label>
                                                <textarea id="cust_Address2" name="cust_Address2" placeholder="Enter Address" autocomplete="off" class="form-control"></textarea>
                                            </div>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">                                                
                                                <div class="form-group">
                                                    <label for="cust_Town">City/Town/Village:</label>
                                                   <input id="cust_Town" type="text" name="cust_Town" data-parsley-trigger="change" placeholder="Enter Town" autocomplete="off" class="form-control" value="<?php echo set_value("cust_Town");?>">
                                                     <span class="text-danger"><?php echo form_error("cust_Town");?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="cust_State">State:</label>
                                                    <input id="cust_State" type="text" name="cust_State" data-parsley-trigger="change" placeholder="Enter state" autocomplete="off" class="form-control">
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="cust_Pincode">Pin-Code:</label>
                                                    <input id="cust_Pincode" type="text" name="cust_Pincode" data-parsley-trigger="change" placeholder="Enter PinCode" autocomplete="off" class="form-control">
                                                </div>
                                            </div>
                                        </div>         
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <h5 class="card-header">Product Complaint Details</h5>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">                                                
                                                <div class="form-group">
                                                    <label for="prod_Brand">Brand:</label>
                                                    <select id="prod_Brand" type="text" name="prod_Brand" data-parsley-trigger="change" class="form-control">
                                                        <option value="0">Select Brand</option>
                                                        <option value="Brand1">Brand1</option>
                                                        <option value="Brand2">Brand2</option>
                                                        <option value="Brand3">Brand3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Category">Category:</label>
                                                     <select id="prod_Category" type="text" name="prod_Category" data-parsley-trigger="change" class="form-control">
                                                        <option value="0">Select Category</option>
                                                        <option value="Category1">Category1</option>
                                                        <option value="Category2">Category2</option>
                                                        <option value="Category3">Category3</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Name">Product:</label>
                                                    <select id="prod_Name" type="text" name="prod_Name" data-parsley-trigger="change" class="form-control">
                                                        <option value="0">Select Product</option>
                                                        <?php 
                                                        foreach($products as $product){
                                                            ?> 
                                                            <option value="<?php echo $product->product_Id;?>"><?php echo $product->product_Name;?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">                                                
                                                <div class="form-group">
                                                    <label for="prod_Datepurchase">Date of Purchase:</label>
                                                     <input id="prod_Datepurchase" type="text" name="prod_Datepurchase" data-parsley-trigger="change" placeholder="Purchase Date" autocomplete="off" class="form-control">
                                                     <span class="text-danger"><?php echo form_error("prod_Datepurchase"); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="prod_Serialno">Serial No:</label>
                                                     <input id="prod_Serialno" type="text" name="prod_Serialno" data-parsley-trigger="change" placeholder="Serial No" autocomplete="off" class="form-control">
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
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
                                                     <input id="prod_Storeretailer" type="text" name="prod_Storeretailer" data-parsley-trigger="change" placeholder="Store / Retailer" autocomplete="off" class="form-control">
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
                                                        <input type="radio" name="prod_Casetype" class="custom-control-input" value='Install'><span class="custom-control-label">Installation</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Casetype" class="custom-control-input" value='Complaint'><span class="custom-control-label">Complaint</span>
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
                                                        <input type="radio" name="prod_Priority" class="custom-control-input" value='normal'><span class="custom-control-label">Normal</span>
                                                    </label>
                                                      <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Priority" class="custom-control-input" value='medium'><span class="custom-control-label">Medium</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="prod_Priority" class="custom-control-input" value='high'><span class="custom-control-label">High</span>
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
                                                      <textarea id="prod_Remarks" name="prod_Remarks" placeholder="Remarks" autocomplete="off" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
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