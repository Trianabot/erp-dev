
        
   
        
    
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">ASP Locations</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
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
                            <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">ASP Locations</span>
                               
                                <a href="<?php echo base_url()?>Setting/addaspLocation"> <h5 class="card-header1">  Add new</h5> </a>
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="asplocationTable">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">ASP Name</th>
                                                <th scope="col">Contact Person</th>  
                                                <th scope="col">City</th>
                                                <th scope="col">Latitude</th>
                                                <th scope="col">Longitude</th> 
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                        $i = 1;
                                         if($asplocations){
                                             foreach($asplocations as $location){
                                                 ?> 
                                                <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $location->asp_Name;?></td>
                                                <td><?php echo $location->asp_Contactperson;?></td>
                                                <td><?php echo $location->asp_City;?></td>
                                                <td><?php echo $location->asp_Latitude;?></td>
                                                <td><?php echo $location->asp_Longitude;?></td>
                                                <td><?php echo $location->asp_Status;?></td>
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