<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Stock</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
<!--
                            <li class="nav-divider">
                                Menu
                            </li>
-->
<li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url()?>Plant_Dashboard/Production_plan" ><i class="fa fa-fw fa-user-circle"></i>Production Plan</a>  
                        </li>
                        <li class="nav-item ">
                                            <a class="nav-link" href="<?php echo base_url();?>Plant_Dashboard/prod_plan_edit" ><i class="fa fa-fw fa-user-circle"></i>Production Plan Edit</a>                              
                                        </li>
                       

                        <li class="nav-item">
                             <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> Production History </a>
                             <div id="submenu-4" class="<?=($this->uri->segment(2)==='washerpdf')?'collapse':''?> submenu" style="">
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
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Coolers History </h2>

                           
                        </div>
                    </div>
                </div>

                 <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <a href="javascript:Clickheretoprint()" style="font-size:20px;">  <button class="btn btn-rounded btn-primary float-right">Print</button> </a>
                                        </div>
                                    </div>
                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12"> 
                    <div class="card">
                        
                          <div class="content" id="content">
                                <div class="card-header p-4">
                                     <a class="pt-2 d-inline-block" href="index.html">Cooler Receipt</a>
                                   
                                    <div class="float-right"> <h3 class="mb-0"></h3>
                                    <?php echo $cooler_det->cur_date;?></div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-6">
                                            <div>Brand Name : <?php echo $cooler_det->company_name;?></div>
                                            <div>Product Name : <?php echo $cooler_det->product;?></div>
                                            <div>Product Quantity : <?php echo $cooler_det->product_qty;?> </div>
                                            <div>Production Supervisor : <?php echo $cooler_det->supervisor_name;?> </div>
                                            <div>Quality Supervisor : <?php echo $cooler_det->line_supervisor_name;?></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div>Fan Motor : <?php echo $cooler_det->fan_or_motor_name;?> </div>
                                            <div>Pump Motor : <?php echo $cooler_det->pump_or_timer_name;?> </div>
                                            <div>Auto Swing : <?php echo $cooler_det->auto_swing_or_gear_name;?></div>
                                            <div>Color : <?php echo ucfirst($cooler_det->product_color);?></div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <?php 
                                                if($barcode_det){
                                                ?> 
                                                <div style='margin-left: 15px;'> BARCODE SERIES - <?php echo $barcode_det->barcode_start;?> - <?php echo $barcode_det->barcode_end;?>
                                                </div>
                                                <?php
                                                }else {
                                                    ?> 
                                                    <div class="m-l-15"> No Bar Code Assigned </div> <?php  
                                                }
                                              ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped">
                                                <h4> Critical Area Assignment </h4>
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Critical Area</th>
                                                    <th>Man Power</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                if($critical_areas){
                                                   foreach($critical_areas as $ca){
                                                       ?> 
                                                        <tr>
                                                        <td> <?php echo $ca->ca_name;?></td>
                                                        <td> <?php echo $ca->man_name;?></td>
                                                        </tr>
                                                        <?php
                                                   } 
                                                }
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="" style="padding-top:40px">
                                       <h5> Quality Checked By :________________________________ </h5>
                                        
                                       <h5>Reworks Details : _____________________ </h5>
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
    <script>
        function Clickheretoprint(){
           var printContents = document.getElementById('content').innerHTML;

    //var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    //document.body.innerHTML = originalContents;
        }
    </script>


