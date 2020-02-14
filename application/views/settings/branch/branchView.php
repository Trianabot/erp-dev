
        
   
      
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Branch</h2>
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
                            <div class="row">
                            
                                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                <!-- <form enctype="multipart/form-data" method="post" action="<?php echo base_url();?>Plant_Dashboard/csv_data" role="form"> -->
                                <?php echo form_open_multipart(base_url()."Setting/addbranchcsv");?>
                                    <div class="form-group">
                                    <label for="exampleInputFile">File Upload</label>
                                    <input type="file" name="file" id="file" size="150" required>
                                    <p class="help-block">Only Excel/CSV File Import.</p>
                                    </div>
                                    <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
                                <?php echo form_close();?>
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Code</th>
                                               <th scope="col">Name</th>   
                                                <th scope="col">Master Group</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          $i = 1;
                                          if($branches){
                                             foreach($branches as $branch){
                                                 ?> 
                                                <tr> 
                                                    <td> <?php echo $i; ?></td>
                                                    <td> <?php echo $branch->branch_Code; ?></td>
                                                    <td> <?php echo $branch->branch_Master; ?></td>
                                                    <td> <?php echo $branch->branch_MasterGroup; ?></td>
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