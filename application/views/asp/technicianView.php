
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Technician</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Asp" class="breadcrumb-link">Asp technician</a></li>
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
                            <span class="table-title">ASP Lists</span>
                                    <a href='<?php echo base_url()?>Asp/newTechnician'> <h5 class="card-header1"> Add Technician </h5></a>
                                    <a href="<?php echo base_url()?>Asp/newtechnicianList"> <h5 class="card-header1">  Add Technician List  </h5> </a>
                                </div>
                            </div>
                               
                                 <div class=""> 
<!--                                     <a href="<?php echo base_url()?>Crm/aspCSV" class='btn btn-success'>Export CSV</a> -->
                               
                                </div>
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Technician Name</th>
                                                <th scope="col">Contact Number</th> 
                                                <th scope="col">Email</th>
                                                <th scope="col">Area</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $i = 1; 
                                        if($technicians){
                                        foreach($technicians as $tech){
                                            ?> 
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $tech->contact_Person;?></td>
                                                <td><?php echo $tech->contact_Number;?></td>
                                                <td><?php echo $tech->email;?></td>
                                                <td><?php echo $tech->user_City;?></td>
                                                <td>
                                                    <a href='<?php echo base_url()?>Asp/editTechnician/<?php echo $tech->id;?>'>Edit</a>
                                                    <a class="technician_delete" data-emp-id="<?php echo $tech->id;?>" href="javascript:void(0)">Delete</a>
                                                </td>
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

<script>
         <!--
            function display() {
               alert("Hello World")
            }
         //-->
      </script>