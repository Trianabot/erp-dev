<!--<div class="" style="background-color: blue; z-index: 99999; position: fixed; z-index: 9999999; ">-->
<!--                <div class="container-fluid" style="background-color: white, z-index: 99999; position: fixed; " >-->
<!--                    <div class="row">-->
                        
<!--                        <div class="col-md-12" style="padding: 5px; background-color: #f2f2f2">-->
<!--                            <div class="">-->
<!--                                <ul class="nav-btn" >-->
<!--                                <li class=" <?=($this->uri->segment(1)==='index')?'active':''?> p-tb-10 p-lr-20"><a href="" class="" style="">Products</a></li>-->
<!--                                <li class="<?=($this->uri->segment(1)==='Stock')?'active':''?> p-tb-10 p-lr-20"><a href="<?php echo base_url()?>Distributor_Stock">Stock</a></li>-->
<!--                                <li class="p-tb-10 "><a href="" class="" style="">Plant</a></li>-->
<!--                                <li class=" <?=($this->uri->segment(1)==='Sales')?'active':''?> p-tb-10"><a href="<?php echo base_url()?>Sales">Sales</a></li>-->
                               
                                
<!--                                <li class="p-tb-10 "><a href="" class="" style="">Employees</a></li>-->
                              
<!--                                <li class="p-tb-10 "><a href="" class="" style="">Reports</a></li>-->
<!--                                <li class="p-tb-10 "><a href="" class="" style="">Alerts</a></li>-->
<!--                                <li class="p-tb-10 "><a href="" class="" style="">Setting</a></li>-->
                                
                                
<!--                                    </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->


        
         <div class="dashboard-wrapper">
			 <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Plant Overview</h2>
                            
                            <hr>
                        </div>

                        <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center">
                                     <div class="icon-circle-medium  icon-box-lg  bg-info-light">
                                     <span style="font-size:20px;color:#333">4</span>
                                        <h4 style="padding-left: 0px;margin-right: -23px;margin-left: -30px;"> Stock </h4>
                                        
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
                                     <span style="font-size:20px;color:#333">3</span>
                                        <h4 style="margin-left: -17px;">Production</h4>
                                        
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
                                     <span style="font-size:20px;color:#333">6</span>
                                       <h4 style="margin-left: -16px;">Shipping </h4>
                                        
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