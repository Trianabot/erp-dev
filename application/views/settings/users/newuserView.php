
    

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">New User </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add User</li>
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
                                <span class="table-title">Add User</span>
                                <a href="<?php echo base_url()?>Setting/users"> <h5 class="card-header1">  View Users </h5> </a>
                                </div>
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
                                            echo form_open(base_url()."Setting/newUser", $attributes);?>
                                            <div class="form-group">
                                                <label for="userdept_Name" class="col-form-label">Distributor Name</label>
                                                <input id="userdept_Name" type="text" class="form-control" name="userdept_Name" placeholder="enter distributor name" value='<?php echo set_value("userdept_Name");?>'>
                                                <span class="text-danger"> <?php echo form_error("userdept_Name");?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="user_Name" class="col-form-label"> Name</label>
                                                <input id="user_Name" type="text" class="form-control" name="user_Name" placeholder="enter  name" value='<?php echo set_value("user_Name");?>'>
                                                <span class="text-danger"> <?php echo form_error("user_Name");?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="role_Name" class="col-form-label">Role</label>
                                                <select name='role_Name' id='role_Name' data-parsley-trigger="change" class="form-control">
                                                    <option value='0'>Select Role</option>
                                                    <option value='1'>Admin</option>
                                                    <option value='2'>CRM</option>
                                                    <option value='3'>Distributor</option>
                                                    <option value='4'>Retailer</option>
                                                    <option value='5'>Plant</option>
                                                    <option value='6'>Sales</option>
                                                    <option value='7'>Asp</option>
                                                    <option value='8'>Asp Technician</option>
                                                </select>
                                                <span class="text-danger"><?php echo form_error("role_Name");?></span>
                                            </div>
                                            <div class='form-group'>
                                                <label for="email" class="col-form-label">Email</label>
                                                <input id="email" type="text" class="form-control" name="email" placeholder="enter email" value='<?php echo set_value("email");?>'>
                                                <span class='text-danger'><?php echo form_error("email");?></span>
                                            </div>
                                            <div class='form-group'>
                                                <label for="password" class="col-form-label">Password</label>
                                                <input id="password" type="text" class="form-control" name="password" placeholder="enter password">
                                                <span class="text-danger"><?php echo form_error("password");?></span>
                                            </div>
                                            <div class='form-group'>
                                                <label for="confirmPassword" class="col-form-label">Confirm Password</label>
                                                <input id="confirmPassword" type="text" class="form-control" name="confirmPassword" placeholder="enter confirm password">
                                                <span class="text-danger"><?php echo form_error("confirmPassword");?></span>
                                            </div>
                                            <div class='form-group'>
                                                <label for="contact_Number" class="col-form-label">Contact Number</label>
                                                <input id="contact_Number" type="text" class="form-control" name="contact_Number" placeholder="enter contact number">
                                                <span class="text-danger"><?php echo form_error("contact_Number");?></span>
                                            </div>
                                             <div class='form-group'>
                                                <label for="user_City" class="col-form-label">City</label>
                                                <input id="user_City" type="text" class="form-control" name="user_City" placeholder="enter city">
                                                <span class="text-danger"><?php echo form_error("user_City");?></span>
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
