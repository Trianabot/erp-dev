
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Executive Distributor & Retailer</h2>
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
                            
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Distributor & Dealer  Lists</span>
<!--                              <a href='<?php echo base_url()?>Setting/adddistMaster'> <h5 class="card-header1"> Add Distributor </h5></a>-->
                              <a href="<?php echo base_url()?>Setting/addbulkdistdealMaster"> <h5 class="card-header1"> Bulk Upload </h5> </a>
                                </div>
                            </div>
                               
                                 
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th;>
                                                <th scope="col">Executive Name</th>
                                                <th scope="col">Retailer Name</th>
                                                <th scope="col">Retailer City</th>
                                                <th scope="col">Distributor Name</th>
                                                <th scope="col">Distributor City</th> 
                                                <th scope="col">State</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                         $i = 1;
                                         if($executives){
                                             foreach($executives as $exec){
                                                 ?> 
                                                 <tr>
                                                     <td><?php echo $i;?></td>
                                                     <td><?php echo $exec->sales_exe_Name;?></td>
                                                     <td><?php echo $exec->retailer_name;?></td>
                                                     <td><?php echo $exec->retailer_city;?></td>
                                                     <td><?php echo $exec->distributor_name;?></td>
                                                     <td><?php echo $exec->distributor_city;?></td>
                                                     <td><?php echo $exec->salesexe_State;?></td>
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
