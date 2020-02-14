
        
   
        
        
        <div class="" style="background-color: blue; z-index: 99999; position: fixed; z-index: 9999999;margin-top:5px; ">
                <div class="container-fluid" style="background-color: white, z-index: 99999; position: fixed; " >
                    <div class="row bg-white" style="border-bottom:2px solid #3663fe;">
                        
                        <div class="col-md-12" style="padding:0px 0px 0px 0px;">
                            <div class="">
                                <ul class="nav-btn" style="padding: 0px;">
                                <li class=" <?=($this->uri->segment(1)==='Plant_Dashboard')?'active':''?> p-tb-10 p-lr-20"><a href="<?php echo base_url();?>Plant_Dashboard">Manufacturing</a></li>
                                <li class="p-tb-10 p-lr-20"><a href="<?php echo base_url();?>Plant_Dashboard/defects">Defects & Rejects</a></li>
                              
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                           
                       
                      


                            <!-- <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Brand')?'active':''?>" href="<?php echo base_url()?>Products/Brand" ><i class="fa fa-fw fa-user-circle"></i>Brand</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link " href="<?php echo base_url()?>Products/Category" ><i class="fa fa-fw fa-user-circle"></i>Category</a>
                                
                            </li>-->
                            
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
                            
                            
<!--
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Stock</a>
                                
                            </li>
-->
                          
                            
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
                            <h2 class="pageheader-title">Manufacturing Details </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Plant</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Lists" class="breadcrumb-link">Manufacturing Details</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
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
                            
                                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                <form enctype="multipart/form-data" method="post" action="<?php echo base_url();?>Plant_Dashboard/csv_data" role="form">
<div class="form-group">
<label for="exampleInputFile">File Upload</label>
<input type="file" name="file" id="file" size="150">
<p class="help-block">Only Excel/CSV File Import.</p>
</div>
<button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form>
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                               <th scope="col">Serial No</th>
                                              
                                                <th scope="col">Bar Code</th>
                                                <th scope="col">Product Type</th>
                                                <th scope="col">Model</th>
                                                
                                                <th scope="col">Manufactured Date</th>
                                                <th scope="col">Assembled By</th>
                                                <th scope="col">Approved By</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $i=1;
                                            foreach($mfg_details as $detail) {
                                                ?>
                                                <tr> 
                                                    <td><?php echo $i;?></td>
                                                    
                                                    <td><?php echo $detail->barcode;?></td>
                                                    <td><?php echo $detail->product_type;?></td>
                                                    <td><?php echo $detail->modelname;?></td>
                                                    
                                                    <td><?php echo $detail->mfg_date;?></td>
                                                    <td><?php echo $detail->assembled_by;?></td>
                                                    <td><?php echo $detail->approved_by;?></td>
                                                    
                                                   
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


           