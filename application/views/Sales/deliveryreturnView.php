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
                            <a class="nav-link" href="<?php echo base_url()?>Sales" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> Sales </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    <li class="nav-item">
                            <a class="nav-link <?=($this->uri->segment(2)==='newSales')?'active':''?>" href="<?php echo base_url()?>Sales/newSales" ><i class="fa fa-fw fa-user-circle"></i> Sales View </a>
                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Newretailerorder" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='salesDeliveries')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> Sales </a>
                                <div id="submenu-2" class="<?=($this->uri->segment(2)==='newSales')?'collapse':''?>  submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Sales/newSales" ><i class="fa fa-fw fa-user-circle"></i> Sales </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/salesDeliveries" ><i class="fa fa-fw fa-user-circle"></i> Deliveries </a>         
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/deliveryReturn" ><i class="fa fa-fw fa-user-circle"></i> Delivery Returns </a>         
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/salesReturn" ><i class="fa fa-fw fa-user-circle"></i> Sales Returns  </a>         
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/pendingDeliveries" ><i class="fa fa-fw fa-user-circle"></i> Pending Deliveries  </a>         
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/pickLists" ><i class="fa fa-fw fa-user-circle"></i> Pick Lists  </a>         
                                    </li>
                                           
                                    </ul>
                                </div>
                            </li>


                       
              
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Sales/SalesExecutive" ><i class="fa fa-fw fa-user-circle"></i> Sales Executive </a>
                            </li>
                         <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>Sales/newSale" ><i class="fa fa-fw fa-user-circle"></i> New Sale </a>
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
                            <h2 class="pageheader-title">Delivern Return Details </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Sales" class="breadcrumb-link">Sales</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <a href="javascript:Clickheretoprint()" style="font-size:20px;">  <button class="btn btn-rounded btn-primary float-right">Print</button> </a>
                                        </div>
                    </div>
                
                
                <div class="content" id="content">
                <div class="row"> 
                    <div class="col-xs-12 col-sm-6 col-md-6"> 
                  
                                         
                            <h6> Voucher No : <?php echo $delivery->Voucher_No;?> </h6>
                            <h6> Date : <?php echo $delivery->Date;?> </h6>
                            <h6> Branch : <?php echo $delivery->Branch;?> </h6>
                            <h6> Party : <?php echo $delivery->Party;?> </h6>
                            <h6> Division : <?php echo $delivery->Division;?> </h6>
                          
                                          
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6"> 
                    
                    </div>
                </div>
                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                            
                               
                                
                               
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Unit Rate</th>   
                                                 <th scope="col"> Discount Per Unit </th>
                                                  <th scope="col"> Net Landing Price </th>
                                                <th scope="col"> Net Amount </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                         if($deliveries){
                                            foreach($deliveries as $del){
                                            ?> 
                                            <tr> 
                                                <td><?php echo $del->Product;?></td>
                                                <td><?php echo $del->Quantity;?></td>
                                                <td><?php 
                                                    if($del->Unit_Rate){
                                                        echo $del->Unit_Rate;
                                                    }else {
                                                        echo '0';
                                                    }
                                                    ?>
                                                </td>
                                                <td> 
                                                <?php 
                                                if($del->Net_Amount){
                                                    $netamt = $del->Net_Amount;
                                                    $net = str_replace( array( '\'', ','), ' ', $netamt);
                                                    $net_Amt = str_replace(' ', '', $net);
                                                }else {
                                                    $net_Amt = 0;
                                                }

                                                if($del->Quantity){
                                                    $qty_Res = $del->Quantity;
                                                    $qty = str_replace( array( '\'', ','), ' ', $qty_Res);
                                                    $qtyRes = str_replace(' ', '', $qty);

                                                }else {
                                                    $qtyRes = 0;
                                                }
                                                   
                                                if($net_Amt > 0 ){
                                                    //echo $net_Amt / $qtyRes;
                                                    $net_land =$net_Amt / $qtyRes;
                                                }else {
                                                    $net_land = 0;
                                                }

                                                

                                                if($del->Unit_Rate){
                                                    $unitamt = $del->Unit_Rate;
                                                    $unit = str_replace( array( '\'', ','), ' ', $unitamt);
                                                    $unit_Amt = str_replace(' ', '', $unit);
                                                }else {
                                                    $unit_Amt = 0;
                                                }
                                               
                                                echo $net_land - $unit_Amt;

                                                  // echo $net_Amt ; echo "<br>"; echo $qtyRes;
                                                    
                                                   // echo $net_Amt / $qtyRes;
                                                ?>
                                                </td>
                                                <td> 
                                                <?php 
                                                if($del->Net_Amount){
                                                    $netamt = $del->Net_Amount;
                                                    $net = str_replace( array( '\'', ','), ' ', $netamt);
                                                    $net_Amt = str_replace(' ', '', $net);
                                                }else {
                                                    $net_Amt = 0;
                                                }

                                                if($del->Net_Amount){
                                                    $qty_Res = $del->Quantity;
                                                    $qty = str_replace( array( '\'', ','), ' ', $qty_Res);
                                                    $qtyRes = str_replace(' ', '', $qty);
                                                }else {
                                                    $qtyRes = 0;
                                                }
                                                   
                                                if($net_Amt > 0 ){
                                                    echo $net_Amt / $qtyRes;
                                                }else {
                                                    echo '0';
                                                }

                                                  // echo $net_Amt ; echo "<br>"; echo $qtyRes;
                                                    
                                                   // echo $net_Amt / $qtyRes;
                                                ?>
                                                </td>
                                                <td>
                                                <?php  if($del->Net_Amount){
                                                        echo $del->Net_Amount;
                                                    }else {
                                                        echo '0';
                                                    }
                                                    ?>
                                                </td>
                                                
                                                
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
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
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
