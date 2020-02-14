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
                            <h2 class="pageheader-title">Ticket Detail</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm_Dashboard" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Ticket detail</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-8 col-sm-8 col-8">
                        <div class="card">
                            <h5 class="card-header">Ticket Detail</h5>
                            <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="" novalidate="">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="inputUserName">User Name</label>
                                                    <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="inputEmail">Email address</label>
                                                    <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="inputPassword">Password</label>
                                                    <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                 <div class="form-group">
                                                    <label for="inputPassword">ASP Assigned By</label>
                                                    <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                 <div class="form-group">
                                                    <label for="inputPassword">Issue related to</label>
                                                    <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Case Details</label>
                                            <textarea id="inputRepeatPassword" data-parsley-equalto="#inputPassword" required="" placeholder="Password" class="form-control"> </textarea>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-6">
                                                
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                               
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>