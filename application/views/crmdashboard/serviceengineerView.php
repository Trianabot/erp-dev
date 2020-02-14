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
                            <a class="nav-link" href="<?php echo base_url()?>Crm" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                            
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> ASP </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/Asp" ><i class="fa fa-fw fa-user-circle"></i> ASP </a>
                                    </li>
                                    
                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/Serviceengineer" ><i class="fa fa-fw fa-user-circle"></i> Service Engineer </a>         -->
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
                            <h2 class="pageheader-title">Stock View</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm_Dashboard" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Service Engineer Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                            
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="text-center">
                                                <h3> Stock Overview</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                            <label> Product Type </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                            <select name="" class="form-control">
                                                <option> Select Product Type </option>
                                            </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                            <label> Product</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                             <select name="" class="form-control">
                                                <option> Select Product  </option>
                                            </select>
                                        </div>
                                    </div>
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col"> Product Type </th>
                                                <th scope="col"> Product </th>
                                                <th scope="col"> Spares </th>
                                                <th scope="col"> Qty </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
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