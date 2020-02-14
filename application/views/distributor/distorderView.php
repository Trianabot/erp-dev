

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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Distributor Invoice </h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">

                                            <li class="breadcrumb-item active" aria-current="page">Distributor Order Invoice</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                
                                <div class="content" id="content">
                               
                                <div class="card-header p-4">
                                     <a class="pt-2 d-inline-block" href="index.html">Skyzen</a>
                                   
                                    <div class="float-right"> <h3 class="mb-0">Invoice #<?php echo $order->distorder_Id;?></h3>
                                    Date: 3 Dec, 2020</div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
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
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="center">#</th>
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
                                                $i=1;
                                                if($products){
                                                    foreach($products as $product){
                                                        ?> 
                                                        <tr>
                                                            <td><?php echo $i;?></td>
                                                            <td><?php echo $product->product_Name;?></td>
                                                            <td><?php echo $product->product_Qty;?></td>
                                                            <td><?php echo $product->product_Unitprice;?></td>
                                                            <td><?php echo $product->product_GST;?></td>
                                                            <td><?php echo $product->product_Discount;?></td>
                                                           <td><?php echo $product->product_Total;?></td>
                                                        </tr>
                                                        <?php
                                                        $i++;
                                                    }
                                                }
                                                ?>
<!--    
                                                <tr>
                                                    <td class="center">1</td>
                                                    <td class="left strong">Origin License</td>
                                                    <td class="left">Extended License</td>
                                                    <td class="right">$1500,00</td>
                                                    <td class="center">1</td>                                                    
                                                    <td></td>
                                                    <td class="right">$1500,00</td>
                                                </tr>
-->
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                        </div>
                                        <div class="col-lg-4 col-sm-5 ml-auto">
                                            <table class="table table-clear">
                                                <tbody>
                                                    <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">Subtotal</strong>
                                                        </td>
                                                        <td class="right">4,80,500.00</td>
                                                    </tr>
                                                     <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">GST</strong>
                                                        </td>
                                                        <td class="right">86,490</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">Discount</strong>
                                                        </td>
                                                        <td class="right">25</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left">
                                                            <strong class="text-dark">Total</strong>
                                                        </td>
                                                        <td class="right">
                                                            <strong class="text-dark">5,66,965‬</strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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