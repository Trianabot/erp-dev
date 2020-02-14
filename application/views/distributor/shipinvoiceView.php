<style>
    .orderSection{
        padding-left: 50px !important;
    }
    .producttotal_Section{
        padding-left: 50px !important;
    }
</style>

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
                            <a class="nav-link" href="<?php echo base_url()?>Distributors" ><i class="fa fa-fw fa-user-circle"></i>Overview</a>                            
                        </li>

                                        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Distributors/orders" ><i class="fa fa-fw fa-user-circle"></i> Orders History</a>
                            </li>

                            <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Distributors/neworder" ><i class="fa fa-fw fa-user-circle"></i> New Order</a>
                            </li>

                            <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Distributors/shipment" ><i class="fa fa-fw fa-user-circle"></i> Shipment </a>
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
                        <div class="col-xl-12 col-lg-12 col-md-8 col-sm-8 col-8">
                            <div class="page-header">
                                <h2 class="pageheader-title">Order Shippment </h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Shippment</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Distributor Shippment</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-12 col-lg-12 col-md-8 col-sm-8 col-8"> 
                            <a href="<?php echo base_url()?>Distributors/shipment" class="btn btn-rounded btn-primary float-right">Previous</a>
                         </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                
                                <div class="card-header p-4">
                                    
                                     <div class="content" id="content">
                                     <a class="pt-2 d-inline-block" href="index.html">Skyzen</a>
                                   
                                    <div class="float-right"> <h3 class="mb-0">
                                        
                                           
                                           Shipment Against Invoice
                                           
                                        </h3>
                                            </div>
                              
                                
                               <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                             <h5 class="card-header">Order Details</h5> <hr>
                                        <div class="orderSection"> 
                                             <div class="row">
                                                <div class="col-xs-12 col-sm-4 col-md-4">
                                                    <h5> Order No :  
                                                                </h5> 
                                                       
                                                                 Not generate Invoice
                                                               
                                                 </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4">
                                                    
                                                        <h5> Distributor Name : </h5>
                                                    <?php echo $ship->comporganization_Name;?>
                                                       
                                                 </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4">
                                                        
                                                        <h5> Order Date :  </h5>
                                                        <?php echo $ship->invoice_Date;?>
                                                    </div>
                                                 </div>
                                            </div>
                                            </div>
                                    </div>
                              
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                             <h5 class="card-header">Shipping Products</h5>
                                             <div class="table-responsive-sm">
                                            <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th class="center">Qty</th>
                                                    <th class="right">Unit Cost</th>
                                                    <th class="center">GST</th>
                                                    <th class="center">Discount</th>
                                                    <th class="right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                if($products){
                                                    foreach($products as $product){
                                                    ?> 
                                                    <tr> 
                                                        <td><?php echo $product->product_Name;?></td>
                                                        <td><?php echo $product->product_Qty;?></td>
                                                        <td><?php echo $product->product_Unitprice;?></td>
                                                        <td><?php echo $product->product_GST;?></td>
                                                        <td><?php echo $product->product_Discount;?></td>
                                                        <td><?php echo $product->product_Total;?></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                                 <div class="producttotal_Section"> 
                                            <table class="table table-clear">
                                                <tbody>
                                                    <tr> 
                                                        <td> Sub Total </td>
                                                        <td> Discount </td>
                                                        <td> GST </td>
                                                        <td> Grand Total</td>
                                                    </tr>
                                                    <tr>
                                                        <td> 28,809,00 </td>
                                                        <td> 5,761,00 </td>
                                                        <td> 2,304,00 </td>
                                                        <td> 20,744,00 </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                                     </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                   <div class="row">
                                       
                                       
                                        <div class="col-xs-12 col-sm-6 col-md-6"> 
                                            <div class="card">
                                                <h5 class="card-header">Shipping Address</h5> <hr>
                                            <div class="card-body">
<!--
                                            <div class="form-group">
                                                <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="shipping custom-control-input" id="same_Shipping" name="same_Shipping" onchange="valueChanged()" value="1"><span class="custom-control-label">Shipping same as order address</span>
                                            </label>
                                            </div>
-->
                                            <div class="newshipping"> 
                                                 <h4> Ship To  </h4>
                                                        <div class="form-group"> 
                                                                <h3> Name:  </h3> 
                                                                <?php echo $ship->shipnew_Name;?>
                                                        </div>
                                                       
                                                       <div class="form-group">
                                                          
                                                        <h3> Address:  </h3> 
                                                               <?php echo $ship->shipnew_Address;?>
                                                        
                                                        </div>
                                            </div>
                                                </div>
                                            </div>
                                            
                                       </div>
                                       
                                       
                                        <div class="col-xs-12 col-sm-6 col-md-6"> 
                                            <div class="card">
                                                <h5 class="card-header">Shipping Details</h5> <hr>
                                            <div class="card-body">
                                                
                                                        <h3> Shpping To : </h3>
                                                        <?php echo $ship->shipping_To;?>
                                                                                              
                                                        <h3> Shipping Through : </h3> 
                                                        <?php echo $ship->shipping_Through;?>
                                            
                                              
                                                        <h3> Shipping Date : </h3>
                                                        <?php echo $ship->shipping_Date;?>
                                                
                                                
                                            </div>
                                            </div>
                                       </div>
                                    </div>
                                 <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <a href="javascript:Clickheretoprint()" style="font-size:20px;">  <button class="btn btn-rounded btn-primary float-right">Print Invocie</button> </a>
                                        </div>
                                    </div>
                                     
                                    
                           
                            </div>
                            </div>
                              </div>
                        </div>
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


    <script>
        function Clickheretoprint(){
           var printContents = document.getElementById('content').innerHTML;

    //var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    //document.body.innerHTML = originalContents;
        }
    </script>
