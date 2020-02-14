
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Distributor Master</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Add Distrbutor Master</li>
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
                                <span class="table-title">Add Distributor</span>
                                
                                <a href="<?php echo base_url()?>Setting/distributorMaster"> <h5 class="card-header1">  View Distributor  </h5> </a>
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
                                        if($this->session->tempdata("add_fail"))
                                        {
                                        echo "<div class='alert alert-warning succ-msg' role='alert'>".$this->session->tempdata("add_fail")."</div>";
                                        }
                                        if($this->session->tempdata("add_creditfail"))
                                        {
                                        echo "<div class='alert alert-danger succ-msg' role='alert'>".$this->session->tempdata("add_creditfail")."</div>";
                                        }

                                        ?>
                                                </div>
                                            <div class='clearfix'></div>
                                            </div>
                                            <?php 
                                            $attributes = array('id' => 'brandform');
                            echo form_open_multipart(base_url()."Setting/adddistMaster", $attributes);?>
                                           
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Distributor Name</label>
                                                <input type='text' name='userdept_Name' class='form-control' placeholder="enter distributor name">
                                          <span class='text-danger'><?php echo form_error("userdept_Name");?></span>
                                            </div>
                                           
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Contact Person</label>
                                                <input type='text' name='contact_Person' class='form-control' placeholder="enter contact person">
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Contact Number</label>
                                                <input type='text' name='contact_Number' class='form-control' placeholder="enter contact number">
                                            </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Alternate Contact</label>
                                                <input type='text' name='alternatecontact_Number' class='form-control' placeholder="enter alternate contact">
                                            </div>
                                        </div>
                                    </div>
                                     <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Email</label>
                                                <input type='text' name='email' class='form-control' placeholder="enter email">
                                                <span class='text-danger'><?php echo form_error("email");?></span>
                                            </div>
                                            
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Password</label>
                                                <input type='text' name='password' class='form-control' placeholder="enter contact person">
                                                 <span class='text-danger'><?php echo form_error("password");?></span>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Address</label>
                                                <textarea name='address' class='form-control'></textarea>
                                            </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Alternate Address</label>
                                                <textarea type='text' name='alternate_Address' class='form-control'></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                            <div class='form-group'>
                                                <label>State</label>
                                                <input type='text' name='user_State' class='form-control' placeholder="enter state">
                                            </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                            <div class='form-group'>
                                                <label>City</label>
                                                <input type='text' name='user_City' class='form-control' placeholder="enter city">
                                                <span class='text-danger'><?php echo form_error("user_City");?></span>
                                            </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                            <div class='form-group'>
                                                <label>Pincode</label>
                                                <input type='text' name='user_Pincode' class='form-control' placeholder="enter pin code">
                                            </div>
                                        </div>
                                    </div>
                                     <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Latitude</label>
                                                <input type='text' name='user_Latitude' class='form-control' placeholder="enter latitude">
                                            </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Longitude</label>
                                                <input type='text' name='user_Longitutde' class='form-control' placeholder="enter longitude">
                                            </div>
                                        </div>
                                    </div>  
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Distributor Type</label>
                                                <input type='text' name='dealer_type' class='form-control' placeholder="Direct or Indirect type">
                                            </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='form-group'>
                                                <label>Party Type</label>
                                                <input type='text' name='party_Type' class='form-control' placeholder="normal or cooler">
                                                <span class='text-danger'><?php echo form_error("party_Type");?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <input type='submit' name='submit' value='Submit' class='btn btn-primary'>
                                        </div>
                                    </div>
                                            
                                            <?php echo form_close();?>
                                            
                                        
                                       
                                    </div>
                    </div>
                                </div>
                </div>
              
</div>
</div>
