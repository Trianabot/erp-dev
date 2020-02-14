
        

<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Parts Master</h2>
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
                                <?php echo form_open_multipart(base_url()."Setting/addpartsmaster");?>
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
                                                <th scope="col">Master</th>
                                                <th scope="col">Short</th>   
                                                <th scope="col">SMU</th>
                                                <th scope="col">Node</th>
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
                                                    <td><?php echo $part->Master;?></td>
                                                    <td><?php echo $part->Short;?></td>
                                                    <td><?php echo $part->Stock_Manag_Unit;?></td>
                                                    <td><?php echo $part->Node;?></td>
                                                </tr>
                                                <?php
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