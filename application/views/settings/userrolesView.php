

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Users </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Settings</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Lists" class="breadcrumb-link">Users</a></li>
                                        
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
                                <span class="table-title">Users List</span>
                                <a href="<?php echo base_url()?>Setting/newUser"> <h5 class="card-header1">Add New User</h5> </a>
                                    <a href="<?php echo base_url()?>Setting/bulkUsers"> <h5 class="card-header1">Bulk Upload</h5> </a>
                                </div>
                             </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                            <th scope="col">S. No</th>
                                                
                                                <th scope="col">Department Name</th>
                                                <th scope="col">User Role</th>
                                                <th scope="col"> Email </th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $i=1;
                                            foreach($users as $user) {
                                                ?>
                                                <tr> 
                                                    <td><?php echo $i;?></td>
                                                   
                                                    <td><?php echo ucfirst($user->userdept_Name);?></td>
                                                    <td><?php echo ucwords($user->role_Name);?></td>  
                                                    <td><?php echo $user->email;?></td>
                                                    <td>
                                                        
                                                        <a href='<?php echo base_url()?>Setting/updatePassword/<?php echo $user->id?>' class="btn btn-info">Change Password</a>
                                                    
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
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