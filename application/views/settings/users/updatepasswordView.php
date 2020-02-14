
    

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Change Password </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
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
                                <span class="table-title">Change Password</span>
                                <a href="<?php echo base_url()?>Setting/users"> <h5 class="card-header1">  View Users </h5> </a>
                                </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                        <?php
                                        if($this->session->tempdata("upd_succ"))
                                        {
                                        echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("upd_succ")."</div>";
                                        }

                                        ?>
                                            <?php 
                                            $attributes = array('id' => '');
                                            echo form_open(base_url()."Setting/updatePassword/".$user->id, $attributes);?>
                                           
                                            <div class='form-group'>
                                                <label for="password" class="col-form-label">New Password</label>
                                                <input id="password" type="text" class="form-control" name="password" placeholder="enter password" value='<?php echo set_value("password")?>'>
                                                <span class="text-danger"><?php echo form_error("password");?></span>
                                            </div>
                                            <div class='form-group'>
                                                <label for="confirmPassword" class="col-form-label">Confirm Password</label>
                                                <input id="confirmPassword" type="text" class="form-control" name="confirmPassword" placeholder="enter confirm password">
                                                <span class="text-danger"><?php echo form_error("confirmPassword");?></span>
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
                
            </div>
</div>
