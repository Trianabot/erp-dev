
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
                            <a class="nav-link" href="<?php echo base_url()?>Purchase" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                      

                            <li class="nav-item">
                            <a class="nav-link <?=($this->uri->segment(2)==='Suppliers')?'active':''?>" href="<?php echo base_url()?>Purchase/Suppliers" ><i class="fa fa-fw fa-user-circle"></i> Suppliers</a>
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
                            <h2 class="pageheader-title">Suppliers </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Purchase" class="breadcrumb-link">Purchase</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Purchase/Suppliers" class="breadcrumb-link">Suppliers</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Suppliers Lists</li>
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
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <h5 class="card-header">Suppliers Lists</h5>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                <a href="<?php echo base_url()?>Purchase/addSupplier"> <h5 class="card-header1">  Add Supplier </h5> </a>
                                </div>
                            </div>
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Organization/Company</th>
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
                                         if($suppliers){
                                             $i=1;
                                            foreach($suppliers as $supplier){
                                                ?> 
                                                <tr> 
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $supplier->supporg_Name;?></td>
                                                    <td><?php echo $supplier->suppcont_Person;?></td>
                                                    <td><?php echo $supplier->supp_Mobile;?></td>
                                                    <td><?php echo $supplier->supp_Email;?></td>
                                                    <td><?php echo $supplier->supp_Address1;?></td>
                                                    <td><?php echo $supplier->city_Name;?></td>
                                                    <td>
                                                        <a href="<?php echo base_url()?>Purchase/editSupplier/<?php echo $supplier->supplier_Id;?>" class="editbtn"> Edit </a>
                                                        <a href="<?php echo base_url()?>Purchase/deleteSupplier/<?php echo $supplier->supplier_Id;?>" class="deletebtn"> Delete </a>
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

                
            <!-- ============================================================== -->
            <!-- footer -->


           