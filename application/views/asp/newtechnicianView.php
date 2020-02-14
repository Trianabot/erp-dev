<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">ASP Technician</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Asp" class="breadcrumb-link">Asp</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Add ASP Technician</li>
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
                                <span class="table-title">Add Technician</span>
                                
                                <a href="<?php echo base_url()?>Asp/technician"> <h5 class="card-header1">  View technician Lists </h5> </a>
                                </div>
                                </div>
                                    <div class="card-body">

                                        
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
                                            <?php 
                                            $attributes = array('id' => 'newtechform');
                                            echo form_open_multipart(base_url()."Asp/newTechnician", $attributes);?>
                                           <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                
                                            <div class="form-group"> 
                                   <label for="name_technician" class="col-form-label">Technician Name</label>
                                                <input type="text" name="name_technician" id="name_technician" class="form-control" placeholder="Enter technician Name">
                                                <span class='text-danger'><?php echo form_error('name_technician');?></span>
                                            </div>
                                               
                                            <div class="form-group"> 
                                                <label for="contact_number" class="col-form-label">Mobile Number</label>
                                                <input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Enter mobile number">
                                                <span class='text-danger'><?php echo form_error('contact_number');?></span>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="alternatecontct_Num" class="col-form-label">Alternate Contact Number</label>
               <input type="text" name="alternatecontct_Num" id="alternatecontct_Num" class="form-control"  placeholder="Enter alternate contact">
                                                <span class='text-danger'><?php echo form_error('alternatecontct_Num');?></span>
                                            </div>
                                            
                                            </div>
                                               <div class="col-xs-12 col-sm-6 col-md-6">
                                                
                                            <div class="form-group"> 
                                                <label for="technician_Email" class="col-form-label">Email</label>
            <input type="text" name="technician_Email" id="technician_Email" class="form-control" placeholder="Enter email">
                                                <span class='text-danger'><?php echo form_error('technician_Email');?></span>
                                            </div>
                                               
                                            <div class="form-group"> 
                                                <label for="technician_Password" class="col-form-label">Password</label>
           <input type="text" name="technician_Password" id="technician_Password" class="form-control" placeholder="Enter password">
                                                <span class='text-danger'><?php echo form_error('technician_Password');?></span>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="technician_Area" class="col-form-label">Area</label>
            <input type="text" name="technician_Area" id="technician_Area" class="form-control"  placeholder="Enter Asp area">
                                                <span class='text-danger'><?php echo form_error('technician_Area');?></span>
                                            </div>
                                            
                                            </div>
                                               
                                               
                                        </div>
                                        <div class='row'>
                                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                            <div class="form-group">
                                                <input type="submit" value="Submit" name="Submit" class="btn btn-rounded btn-primary">
                                            </div>
                                            </div>
                                        </div>
                                       <?php echo form_close();?>
                                    </div>
                                    
                                
                </div>
              
</div>
</div>
                
    </div>
</div>
