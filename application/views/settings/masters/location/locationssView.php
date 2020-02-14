
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Locations</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Location Details</li>
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
                            <span class="table-title">Location Lists</span>
                              <a href='<?php echo base_url()?>Setting/addlocationMaster'> <h5 class="card-header1"> Add Location </h5></a>
                              <a href="<?php echo base_url()?>Setting/addbulkLocation"> <h5 class="card-header1"> Bulk Location </h5> </a>
                                </div>
                            </div>
                               
                                 
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Branch Name</th>
                                                <th scope="col">Location Name</th>
                                                <th scope="col">Location Code</th>  
                                                <th scope="col">Location Alias Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $i = 1;
                                        if($locations){
                                            foreach($locations as $location){
                                             ?> 
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $location->locbranch_Name;?></td>
                                                <td><?php echo $location->location_Name;?></td>
                                                <td><?php echo $location->location_Code;?></td>
                                                <td><?php echo $location->location_Aliasname;?></td>
                                                <td>
                                                    <a href='<?php echo base_url()?>Setting/editlocation/<?php echo $location->location_Id;?>'>Edit</a>  
                                        <a class="branch_delete" data-emp-id="<?php echo $location->location_Id;?>" href="javascript:void(0)"><i class="fa fa-trash" aria-hidden="true" title="delete"></i></a>  
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
