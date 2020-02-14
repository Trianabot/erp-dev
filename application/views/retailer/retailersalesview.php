
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
                            <a class="nav-link" href="<?php echo base_url()?>Sales"><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                      
              
                        <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='RetailerSales')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> New Sales </a>
                                <div id="submenu-4" class="<?=($this->uri->segment(2)==='DistributorSale')?'collapse':''?>submenu" style="">
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
                            <h2 class="pageheader-title">Retailer Sales </h2>
                        </div>
                    </div>
                </div>

               

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Retailer</th>
                                                <th scope="col">ISD</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Brand</th>
                                                <th scope="col">Model</th>
                                                <th scope="col">Serial</th>
                                                <th scope="col">Won</th>
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


           