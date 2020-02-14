
        
   
        
        
        
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Products</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
<!--
                            <li class="nav-divider">
                                Menu
                            </li>
-->
<li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Dealers" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='addsubDistrict')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> Location Settings </a>
                                <div id="submenu-2" class="<?=($this->uri->segment(2)==='City')?'collapse':''?> submenu" style="">
                                    <ul class="nav flex-column">
                                    <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url()?>Dealers/State" ><i class="fa fa-fw fa-user-circle"></i>State</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url()?>Dealers/District" ><i class="fa fa-fw fa-user-circle"></i>District</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url()?>Dealers/Subdistrict" ><i class="fa fa-fw fa-user-circle"></i>Sub District</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url()?>Dealers/City" ><i class="fa fa-fw fa-user-circle"></i>City</a>
                            </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='State')?'active':''?>" href="<?php echo base_url()?>Dealers/State" ><i class="fa fa-fw fa-user-circle"></i>State</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='District')?'active':''?>" href="<?php echo base_url()?>Dealers/District" ><i class="fa fa-fw fa-user-circle"></i>District</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='addsubDistrict')?'active':''?>" href="<?php echo base_url()?>Dealers/Subdistrict" ><i class="fa fa-fw fa-user-circle"></i>Sub District</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='City')?'active':''?>" href="<?php echo base_url()?>Dealers/City" ><i class="fa fa-fw fa-user-circle"></i>City</a>
                            </li> -->
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Distributor')?'active':''?>" href="<?php echo base_url()?>Dealers/Distributor" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='Retailer')?'active':''?>" href="<?php echo base_url()?>Dealers/Retailer" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>
                            </li>
                            
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
                            <h2 class="pageheader-title">Sub-District </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Dealers" class="breadcrumb-link">Dealers</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Dealers/addsubDistrict" class="breadcrumb-link">Sub District</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Sub-District</li>
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
                                <span class="table-title">Add Sub-District</span>
                                <a href="<?php echo base_url()?>Dealers/Subdistrict"> <h5 class="card-header1">  View Subdistrict </h5> </a>
                                </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                        <?php
                                        if($this->session->tempdata("add_success"))
                                        {
                                        echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("add_success")."</div>";
                                        }

                                        ?>
                                            <?php 
                                            $attributes = array('id' => '');
                                            echo form_open(base_url()."Dealers/addsubDistrict", $attributes);?>
                                            <div class="form-group">
                                                <label for="state_Name" class="col-form-label">Select State Name</label>
                                                <select name="state_Name" class="form-control">
                                                    <option value="0"> Select State Name </option>
                                                        <?php
                                                        foreach($states as $state){
                                                            ?>
                                                                <option value="<?php echo $state->state_Id?>"> <?php echo $state->state_Name?> </option>
                                                            <?php
                                                        }
                                                        ?>
                                                </select>
                                                <!-- <input id="category_Name" type="text" class="form-control" name="category_Name" placeholder="enter category name"> -->
                                                <span class="text-danger"> <?php echo form_error("state_Name");?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="dist_Name" class="col-form-label">Select District Name</label>
                                                <select name="dist_Name" class="form-control">
                                                    <option value="0"> Select District Name </option>
                                                        <?php
                                                        foreach($districts as $dist){
                                                            ?>
                                                                <option value="<?php echo $dist->dist_Id?>"> <?php echo $dist->dist_name?> </option>
                                                            <?php
                                                        }
                                                        ?>
                                                       
                                                </select>
                                                <!-- <input id="category_Name" type="text" class="form-control" name="category_Name" placeholder="enter category name"> -->
                                                <span class="text-danger"> <?php echo form_error("dist_Name");?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="subdist_name" class="col-form-label"> Sub District </label>
                                                <input id="subdist_name" type="text" class="form-control" name="subdist_name" placeholder="enter subdistrict name">
                                                <span class="text-danger"><?php echo form_error("subdist_name");?></span>
                                            </div>   

                                            <div class="form-group">
                                                <input type="submit" value="Submit" class="btn btn-rounded btn-primary">
                                            </div>
                                            
                                            <?php echo form_close();?>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>
