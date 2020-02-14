
        
   
        
        
        
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Stock</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>Service" ><i class="fa fa-fw fa-user-circle"></i>Overview</a>
        </li>
                        <li class="nav-item">
<a class="nav-link" href="<?php echo base_url()?>Asps/Lists" ><i class="fa fa-fw fa-user-circle"></i> ASPs</a>
        </li>
        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Asps/service_engineer" ><i class="fa fa-fw fa-user-circle"></i> Service Engineers</a>
                            </li>
                            <li class="nav-item">
                    <a class="nav-link" href="" ><i class="fa fa-fw fa-user-circle"></i> Service Calls</a>
                            </li>
                            <li class="nav-item">
                    <a class="nav-link" href="" ><i class="fa fa-fw fa-user-circle"></i>Travel Expenses</a>
                            </li>


                            <!-- <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Brand')?'active':''?>" href="<?php echo base_url()?>Products/Brand" ><i class="fa fa-fw fa-user-circle"></i>Brand</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Category')?'active':''?>" href="<?php echo base_url()?>Products/Category" ><i class="fa fa-fw fa-user-circle"></i>Category</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Subcategory')?'active':''?>" href="<?php echo base_url()?>Products/Subcategory" ><i class="fa fa-fw fa-user-circle"></i>Sub Category</a>
                            </li> -->


                            
                            
<!--
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Stock</a>
                                
                            </li>
-->
                          
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Service Engineers </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Lists" class="breadcrumb-link">Service Engineers</a></li>
                                       
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
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                
                            </div>
                                
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Code</th>
                                                <th scope="col">ASC</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Contact</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">City</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $i=1;
                                            foreach($se as $product) {
                                                ?>
                                                <tr> 
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $product->asp_name;?></td>
                                                    <td><?php echo $product->contact_person;?></td>
                                                    <td><?php echo $product->mobile;?></td>
                                                    <td><?php echo $product->email;?></td>
                                                    <td><?php echo $product->address;?></td>
                                                    <td><?php echo $product->city;?></td>
                                                    
                                                    <td> 
                                                        <a href="<?php echo base_url()?>Products/editProduct/<?php echo $product->id;?>"> Edit </a>
                                                        <a href="<?php echo base_url()?>Products/deleteProduct/<?php echo $product->id;?>"> Delete </a>
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

                
            <!-- ============================================================== -->
            <!-- footer -->


           