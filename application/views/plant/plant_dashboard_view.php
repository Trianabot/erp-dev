<style>
.nav-link{
display:inline-block;
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
                            
                        <li class="nav-item ">
                                            <a class="nav-link" href="<?php echo base_url()?>Plant_Dashboard/Production_plan" ><i class="fa fa-fw fa-user-circle"></i>Production Plan</a>                           
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="<?php echo base_url();?>Plant_Dashboard/prod_plan_edit" ><i class="fa fa-fw fa-user-circle"></i>Production Plan Edit</a>                           
                                        </li>
                                        
                                        
                                        
 <li class="nav-item">
                             <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> Production History </a>
                             <div id="submenu-4" class="collapse submenu" style="">
                                 <ul class="nav flex-column">
                                     <li class="nav-item ">
                                         <a class="nav-link" href="<?php echo base_url() ?>Plant_Dashboard/coolerDetails" ><i class="fa fa-fw fa-user-circle"></i>Cooler</a>                      
                                     </li>

                                     <li class="nav-item ">
                                         <a class="nav-link" href="<?php echo base_url() ?>Plant_Dashboard/washerDetails" ><i class="fa fa-fw fa-user-circle"></i>Washer</a>                              
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
			 <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Plant Dashboard Overview</h2>
                            
                            <hr>
                        </div>

                        <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center" style="background-color: #e9ecef;">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                     <span style="background-color:red"></span>
                                        <h4 style="padding-left: 0px;margin-right: -23px;margin-left: -30px;"> Production Plan </h4>
                                        
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted"></h5> 
                                        <a class="nav-link" href="<?php echo base_url()?>Plant_Dashboard/Production_plan" >Production Plan</a>  
                                    </div>
                                   
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center" style="background-color: #e9ecef;">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                     <span style="background-color:red"></span>
                                        <h4 style="margin-left: -70px;margin-right:-68px">Production plan Edit</h4>
                                        
                                    </div>
                                    <div class="">
                                        <h5 class="text-muted"></h5>
                                        <a class="nav-link" href="<?php echo base_url();?>Plant_Dashboard/prod_plan_edit" >Production Plan Edit</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center" style="background-color: #e9ecef;">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                     <span style="background-color:red"></span>
                                       <h4 style="margin-left: -60px; margin-right: -60px">Production History </h4>
                                        
                                    </div>
                                    <div class="" style="margin-top:15px;">
                                       
                                        <a class="nav-link" href="<?php echo base_url() ?>Plant_Dashboard/coolerDetails" >Cooler</a> 
                                        <a class="nav-link" href="<?php echo base_url() ?>Plant_Dashboard/washerDetails" >Washer</a>
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
    <script>
        // ============================================================== 
    // Revenue Cards
    // ============================================================== 
    $("#sparkline-revenue").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#5969ff',
        fillColor: '#dbdeff',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ff407b',
        fillColor: '#ffdbe6',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#25d5f2',
        fillColor: '#dffaff',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#fec957',
        fillColor: '#fff2d5',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true,
    });
    </script>

    <script>
    $("#sparkline-1").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#5969ff',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ff407b',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#25d5f2',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ffc750',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true,
    });
    </script>
</body>
 
</html>