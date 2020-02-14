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
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Edit ASP Technician</li>
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
                                <span class="table-title">Edit Technician</span>
                                
                                <a href="<?php echo base_url()?>Asp/technician"> <h5 class="card-header1">  View technician Lists </h5> </a>
                                </div>
                                </div>
                                    <div class="card-body">

                                        
                                                <?php
                                                if($this->session->tempdata("upd_succ"))
                                                {
                                                echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("upd_succ")."</div>";
                                                }
                                                ?>
                                            <?php 
                                            //$attributes = array('id' => 'edittechform');
                                        $attributes = array('id' => 'edittechform');
                                            echo form_open_multipart(base_url()."Asp/editTechnician/".$technician->id, $attributes);?>
                                           <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                
                                            <div class="form-group"> 
                                   <label for="name_technician" class="col-form-label">Technician Name</label>
                                                <input type="text" name="name_technician" id="name_technician" class="form-control" value='<?php echo $technician->contact_Person?>'>
                                                <span class='text-danger'><?php echo form_error('name_technician');?></span>
                                            </div>
                                               
                                            <div class="form-group"> 
                                                <label for="contact_number" class="col-form-label">Mobile Number</label>
                                                <input type="text" name="contact_number" id="contact_number" class="form-control" value='<?php echo $technician->contact_Number?>'>
                                                <span class='text-danger'><?php echo form_error('contact_number');?></span>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="alternatecontct_Num" class="col-form-label">Alternate Contact Number</label>
               <input type="text" name="alternatecontct_Num" id="alternatecontct_Num" class="form-control"  value='<?php echo $technician->contact_Number?>'>
                                                <span class='text-danger'><?php echo form_error('alternatecontct_Num');?></span>
                                            </div>
                                            
                                            </div>
                                               <div class="col-xs-12 col-sm-6 col-md-6">
                                                
                                            <div class="form-group"> 
                                                <label for="technician_Email" class="col-form-label">Email</label>
            <input type="text" name="technician_Email" id="technician_Email" class="form-control" value='<?php echo $technician->email?>'>
                                                <span class='text-danger'><?php echo form_error('technician_Email');?></span>
                                            </div>
                                               
                                            <div class="form-group"> 
                                                <label for="technician_Password" class="col-form-label">Password</label>
           <input type="text" name="technician_Password" id="technician_Password" class="form-control">
                                                <span class='text-danger'><?php echo form_error('technician_Password');?></span>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="technician_Area" class="col-form-label">Area</label>
            <input type="text" name="technician_Area" id="technician_Area" class="form-control"  value='<?php echo $technician->user_City?>'>
                                                <span class='text-danger'><?php echo form_error('technician_Area');?></span>
                                            </div>
                                            
                                            </div>
                                               
                                               
                                        </div>
                                        <div class='row'>
                                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                            <div class="form-group">
                                                <input type="submit" value="Submit" name="edittechsubmit" class="btn btn-rounded btn-primary">
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
