
        
   

<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Executives  </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Settings" class="breadcrumb-link">Settings</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Executive Lists</li>
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
                            <span class="table-title">Executive Lists</span>
                               
                                <a href="<?php echo base_url()?>Setting/newExecutive"> <h5 class="card-header1">  Add new Executive </h5> </a>
                                </div>
                            </div>
                               
<!--                                 <div class=""> <a href="<?php echo base_url()?>Setting/creditnoteCSV"> <i class="fas fa-file-excel" title="Export CSV" style="font-size:30px"></i> </a> </div>-->
                               
                                <div class="card-body">
                                    <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Executive Name</th>
                                               <th scope="col">Manager</th> 
                                                <th scope="col">Company</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i = 1;
                                            if($executives){
                                                foreach($executives as $executive){
                                                  ?> 
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $executive->Executive_Name;?></td>
                                                        <td><?php echo $executive->Manager;?></td>
                                                        <td><?php echo $executive->Company;?></td>
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
