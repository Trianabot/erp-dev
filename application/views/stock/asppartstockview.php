
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Parts Stock</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Stock" class="breadcrumb-link">Stock</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
<!--
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Part Lists</span>
                                    <a href='<?php echo base_url()?>Stock/addstockPart'> <h5 class="card-header1"> Add Part Stock </h5></a>
                                    <a href="<?php echo base_url()?>Stock/bulkstockPart"> <h5 class="card-header1">  Bulk Upload  </h5> </a>
                                </div>
                            </div>
-->
                               
                                 
                            <div class="card">
                                <div class="card-body">
                                    <table class="table" id="">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Asp Name</th>
                                                <th scope="col">Part Name</th>
                                                <th scope="col">Good Quantity</th>  
                                                <th scope="col">Bad Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                        $i =1; 
                                          if($parts){
                                              foreach($parts as $part){
                                                  ?> 
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $part->asp_Name;?></td>
                                                        <td><?php echo $part->part_Name;?></td>
                                                        <td><?php echo $part->good_Quantity;?></td>
                                                        <td><?php echo $part->bad_Quantity;?></td>
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

