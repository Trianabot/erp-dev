
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Locations</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Location</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Add Locations</span>
                              
                              <a href="<?php echo base_url()?>Setting/location"> <h5 class="card-header1"> View Locations </h5> </a>
                                </div>
                            </div>
                               
                                 
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            
                                             <?php
                                        if($this->session->tempdata("add_success"))
                                        {
                                        echo "<div class='alert alert-success' role='alert'>".$this->session->tempdata("add_success")."</div>";
                                        }
                                        if($this->session->tempdata("add_fail"))
                                        {
                                        echo "<div class='alert alert-warning' role='alert'>".$this->session->tempdata("add_fail")."</div>";
                                        }
                                        if($this->session->tempdata("add_creditfail"))
                                        {
                                        echo "<div class='alert alert-danger' role='alert'>".$this->session->tempdata("add_creditfail")."</div>";
                                        }

                                        ?>
                                            <?php 
                                            $attributes = array('id' => 'brandform');
                               echo form_open_multipart(base_url()."Setting/addlocationMaster", $attributes);?>
                                           
                                            <div class="form-group"> 
                                                <label for="locbranch_Name" class="col-form-label"> Branch Name </label>
                                                <select name='locbranch_Name' id='locbranch_Name' class='form-control'>
                                                    <option value='0'>Select Branch</option>
                                                    <?php 
                                                    if($branches){
                                                        foreach($branches as $branch){
                                                           ?> 
                         <option value='<?php echo $branch->branch_Name;?>'><?php echo $branch->branch_Name;?></option>
                                                            <?php 
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            <span class='text-danger'><?php echo form_error("locbranch_Id");?></span>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="location_Name" class="col-form-label"> Location Name </label>
                                                <input type="text" name="location_Name" id="location_Name" class="form-control" placeholder='Enter branch Code'>
                                                <span class='text-danger'><?php echo form_error('location_Name');?></span>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="location_Code" class="col-form-label"> Location Code </label>
                                                <input type="text" name="location_Code" id="location_Code" class="form-control" placeholder='Enter branch Code'>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="location_Aliasname" class="col-form-label"> Location Alias Name </label>
                                                <input type="text" name="location_Aliasname" id="location_Aliasname" class="form-control" placeholder='Enter branch alias'>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Submit" name="submit" class="btn btn-rounded btn-primary">
                                            </div>
                                            
                                            <?php echo form_close();?>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>
