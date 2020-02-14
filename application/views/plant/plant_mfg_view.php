
        
   
        
    
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


           