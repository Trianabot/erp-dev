<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                   
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Orders" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='Listorders')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i> Orders History </a>
                                <div id="submenu-1" class="<?=($this->uri->segment(2)==='Listretailerorders')?'collapse':''?> submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Distributor/Listorders" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Listretailerorders" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> New Orders </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Distributor/Neworder" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Newretailerorder" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>
                             <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Orders" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
                            <div class="page-header">
                                <h2 class="pageheader-title">Order Invoice </h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Invoice</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Distributor Invoice</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-4 text-right">
                            <a href="<?php echo base_url()?>Distributor/Listorders"> <button> Previous </button> </a>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <?php echo form_open(base_url()."Distributor/InvoiceOrder/".$order->distorder_Id);?>
                        <input type="hidden" name="distorder_Id" value="<?php echo $order->distorder_Id;?>">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="card-header p-4">
                                        <a class="pt-2 d-inline-block" href="">Skyzen</a>
                                       <div class="float-right"> <h3 class="mb-0">Invoice #<?php echo $order->distorder_Id;?></h3>
                                       Date: 3 Dec, 2020</div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="mb-3">From:</h5>                                            
                                            <h3 class="text-dark mb-1">Skyzen</h3>
                                         
                                            <div>#16/87/1, Moula Nagar, </div>
                                            <div>Gollapudi, Vijayawada-520 012 </div>
                                            <div>Andhra Pradesh </div>
                                            <div>GSTIN:  37ABCDE1234FZ1</div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 class="mb-3">To:</h5>
                                            <h3 class="text-dark mb-1"><?php echo $order->comporganization_Name;?></h3>                                            
                                            <div><?php echo $order->dist_Address1;?></div>
                                            <div><?php echo $order->dist_Address2;?></div>
                                            <div>Email: <?php echo $order->dist_Email;?></div>
                                            <div>Phone: <?php echo $order->dist_Mobile;?></div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="table-responsive-sm">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="center">#</th>
                                                    <th>Item</th>
                                                    <th class="center">Qty</th>
                                                    <th class="right">Unit Rate</th>
                                                    <th class="center">Discount</th>
                                                    <th class="right">Net Landing Price</th>
                                                    <th class="right">Net Amount</th>
                                                    <th class="right">Serial No</th>
                                                    <th class="right">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $i=1;
                                                if($products){
                                                    foreach($products as $product){
                                                          
                                                        ?> 
                                                            <input type="hidden" name="distorder_Id[]" value="<?php echo $product->distorder_Id;?>">
                                                            <input type="hidden" name="productscsv_Id[]" value="<?php echo $product->productscsv_Id;?>">
                                                            <input type="hidden" name="distributor_Id[]" value="<?php echo $product->distributor_Id;?>">
                                                        <tr>
                                                          
                                                            <td><?php echo $i;?></td>
                                                            
                                                            <td><input type="text" name="distorderprod_Name[]" value="<?php echo $product->distorderprod_Name;?>" readonly="" style="width: 180px;"></td>
                                                            <td><input type="text" name="distinvoiceprod_Qty[]" id="distinvoiceprod_Qty" value="<?php echo $product->distorderprod_Qty;?>"  style="width: 70px;"></td>
                                                            <td><input type="text" name="distinvoiceprod_Unitrate[]" value="<?php echo $product->distorderprod_Unitrate;?>"  style="width: 70px;"></td>
                                                            <td><input type="text" name="distinvoiceprod_Discount[]" value="<?php echo $product->distorderprod_Discount;?>" readonly="" style="width: 70px;"></td>
                                                            <td><input type="text" name="distinvoiceprod_Netland[]" value="<?php echo $product->distorderprod_Netland;?>" readonly="" style="width: 70px;"></td>
                                                           <td><input type="text" name="distinvoiceprod_Netamt[]" value="<?php echo $product->distorderprod_Netamt;?>" readonly="" style="width: 70px;"></td>
                                                           <td><input type="text" name="distinvoiceprod_Serial[]"></td>
                                                          <td> 
                                                                <button type="button" class="btn btn-warning btn-sm btn-invoiceedit">Edit</button>
                                                               
                                                           </td>
                                                            <td> 
                                                                <button id="buttonAddItem" type="button" class="btn btn-warning btn-sm btn-invoiceremove">Delete</button>
                                                               
                                                           </td>
                                                        </tr>
                                                        <?php
                                                        $i++;
                                                    }
                                                }
                                                ?>

                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    
                                    <div class="row">
                                        
                                            <table class="table table-clear">
                                                <tbody>
                                                    <tr>
                                                        <td class="float-right">
                                                            <strong class="text-dark">Subtotal</strong>
                                                        </td>
                                                        <td class="right"><span class="totalInvoice"><?php echo $order->totalAmount;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="float-right">
                                                            <strong class="text-dark">Discount</strong>
                                                        </td>
                                                        <td class="right"><span class="totalDiscount"><?php echo $order->grandDiscount;?> </span></td>
                                                    </tr>
                                                  
                                                    <tr>
                                                        <td class="float-right">
                                                            <strong class="text-dark">Total</strong>
                                                        </td>
                                                        <td class="right"><span class="totalFinal"><?php echo $order->final_Result;?></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" value="Send Invoice" class="btn btn-rounded btn-primary float-right">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php echo form_close();?>
                    </div>
                    
                    
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
              
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>