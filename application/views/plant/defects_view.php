
        
   
    
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
                            <h2 class="pageheader-title">Defects & Rejects </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Plant</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Lists" class="breadcrumb-link">Defects & Rejects</a></li>
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
                                <div class="col-xs-12 col-sm-12 col-md-12 padding0">
                            <span class="table-title">Lists</span>
                            </div>
                             
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                               <th scope="col">Serial No</th>
                                               <th scope="col">Barcode</th>
                                               <th scope="col">Model</th>
                                                <th scope="col">Product Type</th>
                                                <th scope="col">Defect Type</th>
                                                <th scope="col">Mfg Date</th>
                                                <th scope="col">Warranty Status</th>
                                                <th scope="col">Assembled By</th>
                                                <th scope="col">Reported Date</th>
                                                <th scope="col">Reported Person</th>
                                               
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $i=1;
                                            foreach($defects as $detail) {
                                                ?>
                                                <tr> 
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $detail->barcode;?></td>
                                                    <td><?php echo $detail->model;?></td>
                                                    <td><?php echo $detail->product_type;?></td>
                                                    <td><?php echo $detail->defect_type;?></td>
                                                    <td><?php echo $detail->mfg_date;?></td>
                                                    <td><?php echo $detail->warranty_status;?></td>
                                                    
                                                    <td><?php echo $detail->assembled_by;?></td>
                                                    <td><?php echo $detail->reported_date;?></td>
                                                    <td><?php echo $detail->reported_person;?></td>
                                                    
                                                   
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


           