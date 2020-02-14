
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
                            <a class="nav-link " href="<?php echo base_url()?>Sales" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                      
              
                        <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='DistributorSale')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> New Sales </a>
                                <div id="submenu-4" class="<?=($this->uri->segment(2)==='RetailerSales')?'collapse':''?> submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item ">
                                            <a class="nav-link" href="<?php echo base_url()?>Sales/DistributorSale" ><i class="fa fa-fw fa-user-circle"></i>Distributor Sales</a>                      
                                        </li>
                                        
                                        <li class="nav-item ">
                                            <a class="nav-link" href="<?php echo base_url()?>Sales/RetailerSales" ><i class="fa fa-fw fa-user-circle"></i>Retailer Sales</a>                              
                                        </li>
                                    </ul>
                                </div>
                        </li>
 <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Sales/SalesExecutive" ><i class="fa fa-fw fa-user-circle"></i> Sales Executive </a>
                            </li>
                   

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Distributor Sales </h2>
                        </div>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-xs-12 col-sm-4 col-md-4"> 
                    
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4"> 
                            <div class="distlistForm"> 
                                <?php echo form_open(base_url()."Stock/diststockList");?>
                                    <div class="form-group"> 
                                        <select name="dist_City" class="form-control"> 
                                            <option value="0"> Select a Distributor Village/Town/City</option>
                                        </select>
                                    </div>
                                    <div class="form-group"> 
                                        <select name="dist_Name" class="form-control"> 
                                            <option value="0"> Select a Distributor </option>
                                        </select>
                                    </div>
                                    <div class="form-group"> 
                                    
                                    </div>
                                <?php echo form_close();?>
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4"> 
                    
                    </div>
                </div>

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Distributor</th>
                                                <th scope="col">Retailer</th>
                                                <th scope="col">Order No</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">No. of Items</th>
                                                <th scope="col">Invocie Ref No</th>
                                                <th scope="col">Invoice No</th>
                                                <th scope="col">Invoice Date</th>
                                                <th scope="col">Delivery Date</th>
                                                <th scope="col">Invoice Total</th>
                                                <th scope="col">Cancelled</th>
                                                <th scope="col">By</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
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


           