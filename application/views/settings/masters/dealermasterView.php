
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Dealer Master</h2>
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
                            <span class="table-title">Dealers Lists</span>
<!--                              <a href='<?php echo base_url()?>Setting/adddistMaster'> <h5 class="card-header1"> Add Distributor </h5></a>-->
                              <a href="<?php echo base_url()?>Setting/addbulkdealerMaster"> <h5 class="card-header1"> Bulk Dealers </h5> </a>
                                </div>
                            </div>
                               
                                 
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Dealer Name</th>
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
                                        if($dealers){
                                            foreach($dealers as $dealer){
                                                ?> 
                                                <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $dealer->userdept_Name;?></td>
                                                <td><?php echo $dealer->usersdept_Name;?></td>
                                                <td><?php echo $dealer->contact_Person;?></td>
                                                <td><?php echo $dealer->email;?></td>
                                                <td><?php echo $dealer->contact_Number;?></td>
                                                <td><?php echo $dealer->user_State;?></td>
                                                <td><?php echo $dealer->user_City;?></td>
                                                <td></td>
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
