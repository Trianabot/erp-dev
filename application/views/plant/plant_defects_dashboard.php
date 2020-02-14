
        
   
        
        <div class="" style="background-color: blue; z-index: 99999; position: fixed; z-index: 9999999;margin-top:5px; ">
                <div class="container-fluid" style="background-color: white; z-index: 99999; position: fixed; " >
                    <div class="row bg-white" style="border-bottom:2px solid #3663fe;">
                        
                        <div class="col-md-12" style="padding:0px 0px 0px 0px;">
                            <div class="">
                                <ul class="nav-btn" style="padding: 0px;">
                                <li class="p-tb-10 p-lr-20"><a href="<?php echo base_url();?>Plant_Dashboard">Manufacturing</a></li>
                                <li class=" <?=($this->uri->segment(2)==='defects')?'active':''?> p-tb-10 p-lr-20"><a href="<?php echo base_url();?>Plant_Dashboard/defects">Defects</a></li>
                              
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
                    <a class="d-xl-none d-lg-none" href="#">asaaasasas</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            
                       
              


                            <!-- <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Brand')?'active':''?>" href="<?php echo base_url()?>Products/Brand" ><i class="fa fa-fw fa-user-circle"></i>Brand</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Category')?'active':''?>" href="<?php echo base_url()?>Products/Category" ><i class="fa fa-fw fa-user-circle"></i>Category</a>
                                
                            </li> -->
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Subcategory')?'active':''?>" href="" ><i class="fa fa-fw fa-user-circle"></i>Defects Overview</a>
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
                            <h2 class="pageheader-title">Defects</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Plant_Dashboard/defects" class="breadcrumb-link">Defects</a></li>
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
                                               <th scope="col">Serial No</th>
                                               <th scope="col">Ticket Id</th>
                                               <th scope="col">Barcode</th>
                                                <th scope="col">Complaint Type</th>
                                                <th scope="col">Part Replace</th>
                                                <th scope="col">Part Section</th>
                                                <th scope="col">Warranty Status</th>
                                                <th scope="col">Critical Areas</th>
                                                <th scope="col">Reported Date</th>
                                                 <th scope="col">Status</th>
                                                <th scope="col">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $i =1; 
                                           if($defects){
                                               foreach($defects as $defect){
                                                   ?> 
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $defect->ticket_id;?></td>
                                                        <td><?php echo $defect->barcode_scan;?></td>
                                                        <td><?php echo $defect->complaint_type;?></td>
                                                        <td><?php echo $defect->part_replace;?></td>
                                                        <td><?php echo $defect->part_section;?></td>
                                                        <td><?php echo $defect->prod_Warranty;?></td>
                              <td><input type="button" name="view" value="view" id="<?php echo $defect->barcode_scan; ?>" class="btn btn-info btn-xs viewca_data" /></td>
                                                        <td><?php echo $defect->replace_date;?></td>
                                                        <td><?php echo $defect->status;?></td>
                                                        <td>
                                                            <input type="button" name="view" value="view" id="<?php echo $defect->ticket_Id; ?>" class="btn btn-info btn-xs viewticket_data" />
                                                            </td>
                                                    </tr>    
                                                   <?php
                                                   $i++;
                                               }
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


 <div id="dataplantModal" class="modal fade" style="z-index:99999999 !important;">  
      <div class="modal-dialog modal-xl" style="margin:auto 21px !important;">  
           <div class="modal-content modal-dialog-scrollable" style="
background-color:#e9ecef;width:1140px !important;margin:auto 21px!important">  
                <div class="modal-header col-md-12">  
                     
                     <h2 class="modal-title">Ticket Overview</h2>  
                </div>  
                <div class="modal-body" id="">
                    <div style="background-color:white">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            Product Complaint : <span id="prod_Remakrs"></span>   
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            ASP Feedback : <span id="complaint_overview"></span>
                        </div>
                    </div>
                    </div>
                    <div class="card m-t-10">
                       
                        <div class="col-xs-12 col-md-12 col-12 text-center">
                        <h3>Soft Copy</h3>
                        </div>
                        <div class="card-body">
                             <div class="row" >
                        <div class="col-xs-12 col-sm-4 col-md-4">
                             Bill Copy Image: 
                             <span id="ajax_Bill"> </span>
                    
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                             Warranty Card :
                             <span id="ajax_Warranty"> </span>
                  
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            Customer Signature :
                            <span id="ajax_Custsign"> </span>
                   
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="card text-center m-t-20">
                      <h3 class="m-t-20">Videos</h3> 
                    
                    <div class="card-body">
                     <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <span id="ajax_video"> </span>
                        </div>
                         <div class="col-xs-12 col-sm-6 col-md-6">
                            <span id="ajax_Second"> </span>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    
                   
                   
                    
                    <!-- <video width="300" height="200" id="aspVideo1" controls>
	 <source src="<?php echo base_url()?>assets/videos/short.mp4" type="video/mp4"> 
	</video>  -->
                
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="dataplantModal1" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     
                     <h4 class="modal-title">TIcket Overview</h4>  
                </div>  
                <div class="modal-body" id="">
                   <h4>In Progress</h4>
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>

<div id="datacaModal" class="modal fade" style="z-index:99999999 !important">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     
                     <h4 class="modal-title">Critical Areas</h4>  
                </div>  
                <div class="modal-body" id="">
                       <table class="table" id="catable" style="border:1px">
                                <thead>
                                    <tr>
                                        <th>Critical Area</th>
                                        <th>Man Name</th>
                                    </tr>
                                </thead>
                        </table>
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>


                
            <!-- ============================================================== -->
            <!-- footer -->


           