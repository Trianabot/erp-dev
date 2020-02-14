
    

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Roles </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add State</li>
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
                                <span class="table-title">Add Role</span>
                                <a href="<?php echo base_url()?>Setting/roles"> <h5 class="card-header1">  View Roles </h5> </a>
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
                                            $attributes = array('id' => 'categoryform');
                                            echo form_open(base_url()."setting/addRole", $attributes);?>
                                            <div class="form-group">
                                                <label for="role_Name" class="col-form-label">Role Name</label>
                                                <input id="role_Name" type="text" class="form-control" name="role_Name" placeholder="enter role name">
                                                <span class="text-danger"> <?php echo form_error("role_Name");?></span>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" value="Submit" name="categorysubmit" class="btn btn-rounded btn-primary">
                                            </div>
                                            
                                            <?php echo form_close();?>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>
