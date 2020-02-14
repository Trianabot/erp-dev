

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
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Orders </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Orders" class="breadcrumb-link">Orders</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Distributor/Listorders" class="breadcrumb-link">List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">General Orders</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                            <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <h5 class="card-header">Orders Lists</h5>
                            </div>
                                
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order By </th>
                                                <th scope="col">Order No</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Ref No</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Invoice</th>
                                                <th scope="col">Shipping</th>
                                                <th scope="col">Payment</th>
                                                 <th scope="col"> View </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          if($orders){
                                            foreach($orders as $order){
                                            ?> 
                                            <tr> 
                                                <td><?php
                                                        if($order->order_By == 'admin'){
                                                            echo "Skyzen";
                                                        } else {
                                                            echo "Self";
                                                        }?></td>
                                                <td><?php echo $order->distorder_Id;?></td>
                                                <td><?php echo $order->invoice_Date;?></td>
                                                <td><?php echo $order->invocie_RefNumber;?></td>
                                                <td><?php echo $order->final_Result;?></td>
                                                <td><?php 
                                                        if($order->invoice_Status == '0'){
                                                          
                                                           echo  "Process";
                                                        }else {
                                                            ?> <p class="text-success">Success</p> <?php
                                                        }
                                                        ?></td>
                                                    <td><?php 
                                                        if($order->shipment_Status == '0'){
                                                            echo "Process";
                                                        }else {
                                                           ?> <p class="text-success">Success</p> <?php
                                                        }
                                                        ?></td>
                                                    <td><?php 
                                                        if($order->payment_Status == '0'){
                                                           echo "Process";
                                                        }else {
                                                            ?> <p class="text-success">Success</p> <?php
                                                        }
                                                        ?></td>
                                                         <td> <a href="<?php echo base_url()?>Distributors/orderView/<?php echo $order->distorder_Id;?>"> View </a> </td>
                                            </tr>
                                            <?php
                                            }
                                          }
                                          ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            
</div>
</div>