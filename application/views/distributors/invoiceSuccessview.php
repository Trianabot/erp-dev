
     <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                   
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Orders" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='Listorders')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i> Orders History </a>
                                <div id="submenu-1" class="<?=($this->uri->segment(2)==='Listretailerorders')?'collapse':''?> submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Distributor/Listorders" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Listretailerorders" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> New Orders </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Distributor/Neworder" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Newretailerorder" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
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
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Invoice </h2>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                   
                                    <div class="card">
                                        
                                        <div class="card-body">
                                            
                                            
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                            <?php
                                                if($this->session->tempdata("upd_succ"))
                                                {
                                                echo "<div class='alert alert-success' role='alert'>".$this->session->tempdata("upd_succ")."</div>";
                                                }
                                                ?>
                                            <?php 
                                               if($this->session->tempdata("upd_fail"))
                                                {
                                                echo "<div class='alert alert-warning' role='alert'>".$this->session->tempdata("upd_fail")."</div>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                            
                                           
                                         
                                            </div>
                                           
<!--
                                            <div class="alert alert-warning" role="alert">
                                                
                                            </div>
-->
                                            
                                        </div>
                                
                                    
                                    
                                    </div>
                                </div>
                        </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
              
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>