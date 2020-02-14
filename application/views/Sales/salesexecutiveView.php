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

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> Sales </a>
                                <div id="submenu-2" class="collapse submenu" style="">
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
                                        <a class="nav-link" href="<?php echo base_url()?>Sales/salesReturn"><i class="fa fa-fw fa-user-circle"></i> Sales Returns  </a>         
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
                            <h2 class="pageheader-title">Sales Executive Overview </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Sales" class="breadcrumb-link">Sales</a></li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Sales Executive Overview</li>
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
                                <h5 class="card-header">Lists</h5>
                            </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                               
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                               <th scope="col" style="display:none">Serial No</th>
                                               <th scope="col">Store Name</th>
                                                <th scope="col">Status</th>
                                               
                                                </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $i=1;
                                            foreach($sales_track as $detail) {
                                                ?>
                                                <tr> 
                                                    <td style="display:none"><?php echo $i;?></td>
                                                    <td><?php echo $detail->store_name;?></td>
                                                    <td><?php echo $detail->status_report;?></td>
                                                     
                                                    </tr>
                                                <?php
                                                $i++;
                                            }
                                            
                                           ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>

                
            <!-- ============================================================== -->
            <!-- footer -->


           
