
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Distributor Master</h2>
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
                            <span class="table-title">Distributor Lists</span>
<!--                              <a href='<?php echo base_url()?>Setting/adddistMaster'> <h5 class="card-header1"> Add Distributor </h5></a>-->
                              <a href='<?php echo base_url()?>Setting/adddistMaster'> <h5 class="card-header1"> Add Distributor </h5></a>
                              <a href="<?php echo base_url()?>Setting/addbulkdistMaster"> <h5 class="card-header1"> Bulk Distributor </h5> </a>
                                </div>
                            </div>
                               
                                 
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Distributor Name</th>
                                                <th scope="col">Contact Person</th>  
                                                <th scope="col">Email</th>
                                                <th scope="col">Contact</th>
                                                <th scope="col">State</th>
                                                <th scope="col">City</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
    
                                        $i =1; 
                                        if($distributors){
                                            foreach($distributors as $dist){
                                                ?> 
                                                <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $dist->userdept_Name;?></td>
                                                <td><?php echo $dist->contact_Person;?></td>
                                                    <td><?php echo $dist->email;?></td>
                                                <td><?php echo $dist->contact_Number;?></td>
                                                <td><?php echo $dist->user_State;?></td>
                                                <td><?php echo $dist->user_City;?></td>
                                                <td><a href='<?php echo base_url()?>Setting/editDistributor/<?php echo $dist->id?>'>Edit</a></td>
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
