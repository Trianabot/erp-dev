
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Branchs</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Branch Details</li>
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
                            <span class="table-title">Branch Lists</span>
                              <a href='<?php echo base_url()?>Setting/addbranchMaster'> <h5 class="card-header1"> Add Branch </h5></a>
                              <a href="<?php echo base_url()?>Setting/addbulkbranch"> <h5 class="card-header1"> Bulk Branch </h5> </a>
                                </div>
                            </div>
                               
                                 
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Branch Name</th>
                                                <th scope="col">Branch Code</th>  
                                                <th scope="col">Branch Alias Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i =1; 
                                             if($branches){
                                                foreach($branches as $branch){
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $branch->branch_Name;?></td>
                                                    <td><?php echo $branch->branch_Code;?></td>
                                                    <td><?php echo $branch->branch_Aliasname;?></td>
                                                    <td>
                                  <a href='<?php echo base_url()?>Setting/editbranchMaster/<?php echo $branch->branch_Id;?>'>Edit</a>  
                                        <a class="branch_delete" data-emp-id="<?php echo $branch->branch_Id;?>" href="javascript:void(0)"><i class="fa fa-trash" aria-hidden="true" title="delete"></i></a>  
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
