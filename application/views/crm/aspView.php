
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">ASP</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">Crm</a></li>
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
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">ASP Lists</span>
                                    <!--<a href='<?php echo base_url()?>Crm/newAsp'> <h5 class="card-header1"> Add Asp </h5></a>-->
                                    <!--<a href="<?php echo base_url()?>Crm/newaspList"> <h5 class="card-header1">  Add ASP List  </h5> </a>-->
                                </div>
                            </div>
                               
                                 <div class=""> 
<!--                                     <a href="<?php echo base_url()?>Crm/aspCSV" class='btn btn-success'>Export CSV</a> -->
<!--
                                <a href="<?php echo base_url()?>Crm/aspCSV" class="btn btn-info btn-lg">
                                                    <span class="glyphicon glyphicon-export"></span> Export
                                </a>
-->
                                </div>

                                <div class="card-body">
                                    <table class="table" id="">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">ASP Name</th>
                                                <th scope="col">Contact Person</th>  
                                                <th scope="col">Pin Code</th>
                                                <th scope="col">Contact Number</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Area</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                         $i = 1;
                                         if($asps){
                                            //  echo "<pre>";
                                            //  print_r($asps); die; 
                                             foreach($asps as $asp){
                                                 ?> 
                                                 <tr>
                                                     <td><?php echo $i;?></td>
                                                     <td><?php echo $asp->userdept_Name;?></td>
                                                     <td><?php echo $asp->contact_Person;?></td>
                                                     <td><?php echo $asp->user_Pincode;?></td>
                                                     <td><?php echo $asp->contact_Number;?></td>
                                                     <td><?php echo $asp->email;?></td>
                                                     <td><?php echo $asp->user_City;?></td>
                                                     <td>
<!--                                                         <a class="asp_delete" data-emp-id="<?php echo $asp->asp_Id;?>"  onclick="display()">Delete</a>-->
                                                         
<!--                                                         <a class="asp_delete" data-emp-id="<?php echo $asp->asp_Id;?>" href="javascript:void(0)"><i class="fa fa-trash" aria-hidden="true" title="delete"></i></a>-->
                                                         
                                                         

<!--                                                     <a class="asp_delete" data-emp-id="<?php echo $asp->asp_Id;?>" href="javascript:void(0)"><i class="fa fa-trash" aria-hidden="true" title="delete"></i></a>-->
                                                         
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

<script>
         <!--
            function display() {
               alert("Hello World")
            }
         //-->
      </script>