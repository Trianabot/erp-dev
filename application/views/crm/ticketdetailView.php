

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
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
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