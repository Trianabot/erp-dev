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
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Distributor Dashboard Overview</h2>
                            
                            <hr>
                        </div>

                        <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                     <span style="background-color:red">4</span>
                                        <h4 style="padding-left: 0px;margin-right: -23px;margin-left: -30px;"> Total Orders </h4>
                                        
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Total</h5> 
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">35</h2>
                                    </div>
                                   
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                     <span style="background-color:red">3</span>
                                        <h4 style="margin-left: -17px;">Total Shipment</h4>
                                        
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Total</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">400</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                     <span style="background-color:red">6</span>
                                       <h4 style="margin-left: -16px;">Cancel Orders </h4>
                                        
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted">Total</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">435</h2>
                                    </div>
                                   
                                </div>
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
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- sparkline js -->
    <script src="<?php echo base_url()?>assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/charts/sparkline/spark-js.js"></script>
    <script src="<?php echo base_url()?>assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.js">

</script>

    <script>
                $(document).ready(function() {
    $('#stockTable').DataTable();
} );
            </script>

    <script>
    
</body>
 
</html>