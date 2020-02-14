<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Sales</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                            
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> ASP </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/Asp" ><i class="fa fa-fw fa-user-circle"></i> ASP </a>
                                    </li>
                                    
                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" href="<?php echo base_url()?>Crm/Serviceengineer" ><i class="fa fa-fw fa-user-circle"></i> Service Engineer </a>         -->
                                    <!--</li>-->
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/Stockview" ><i class="fa fa-fw fa-user-circle"></i> Stock View </a>         
                                    </li>
                                    
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i> Service Calls </a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/raiseTicket" ><i class="fa fa-fw fa-user-circle"></i> Raise Ticket </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/ticketHistory" ><i class="fa fa-fw fa-user-circle"></i> Ticket History </a>         
                                    </li>
                                    
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
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
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm_Dashboard" class="breadcrumb-link">ASP</a></li>
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
                            <span class="table-title">Branch Lists</span>
                               
                                    <a href="<?php echo base_url()?>Crm_Dashboard/newAsp"> <h5 class="card-header1">  Add ASP List  </h5> </a>
                                </div>
                            </div>
                               
                                 <div class=""> <a href="<?php echo base_url()?>Crm_Dashboard/aspCSV"> <i class="fas fa-file-excel" title="Export CSV" style="font-size:30px"></i> </a> </div>

                                <div class="card-body">
                                    <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">ASP Name</th>
                                                <th scope="col">Contact Number</th>   
                                                <th scope="col">Pin Code</th>
                                                <th scope="col">Area</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                         $i = 1; 
                                         if($asps){
                                             foreach($asps as $asp){
                                                 ?> 
                                                <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $asp->asp_Name;?></td>
                                                    <td><?php echo $asp->asp_Contact;?></td>
                                                    <td><?php echo $asp->asp_Pincode;?></td>
                                                    <td><?php echo $asp->asp_Area;?></td>
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