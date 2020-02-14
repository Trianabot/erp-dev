<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Product Stock</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Stock" class="breadcrumb-link">Stock</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Add Product Stock</li>
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
                                <span class="table-title">Add Product Stock</span>
                                
                                <a href="<?php echo base_url()?>Stock/skyzenproductStock"> <h5 class="card-header1">  View Product Stock </h5> </a>
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
                                            $attributes = array('id' => 'brandform');
                                            echo form_open_multipart(base_url()."Crm/newAsp", $attributes);?>
                                           <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                
                                            <div class="form-group"> 
                                                <label for="asp_Name" class="col-form-label">Brand Name</label>
                                                <select name='' class='form-control'>
                                                
                                                </select>
                                                <span class='text-danger'><?php echo form_error('asp_Name');?></span>
                                            </div>
                                                
                                            <div class="form-group"> 
                                                <label for="asp_Name" class="col-form-label">Category Name</label>
                                                <select name='' class='form-control'>
                                                
                                                </select>
                                                <span class='text-danger'><?php echo form_error('asp_Name');?></span>
                                            </div>
                                               
                                            <div class="form-group"> 
                                                <label for="mobile_primary" class="col-form-label">Good Quantity</label>
                                                <input type="text" name="mobile_primary" id="mobile_primary" class="form-control" placeholder="Enter Good quantity">
                                                <span class='text-danger'><?php echo form_error('mobile_primary');?></span>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="asp_Area" class="col-form-label">Bad Quantity</label>
                                                <input type="text" name="asp_Area" id="asp_Area" class="form-control"  placeholder="Enter Bad quantity">
                                                <span class='text-danger'><?php echo form_error('asp_Area');?></span>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            </div>
                                               
                                               
                                        </div>
                                        <div class='row'>
                                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                            <div class="form-group">
                                                <input type="submit" value="Submit" name="upload" class="btn btn-rounded btn-primary">
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
