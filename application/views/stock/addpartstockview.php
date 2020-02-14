
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Parts Stock</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Add Parts Master</li>
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
                                <span class="table-title">Add Part Stock</span>
                                
                                <a href="<?php echo base_url()?>Stock/skyzenpartStock"> <h5 class="card-header1">  View Parts</h5> </a>
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
                                            echo form_open_multipart(base_url()."Stock/addstockPart", $attributes);?>
                                           <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                
                                            <div class="form-group"> 
                                                <label for="stockbrand_Name" class="col-form-label">Brand Name</label>
                                                <select name='stockbrand_Name' id='stockbrand_Name' class='form-control'>
                                                    <option value='0'>Select Brand</option>
                                                    <option value='Skyzen'>Skyzen</option>
                                                </select>
                                                <span class='text-danger'><?php echo form_error('stockbrand_Name');?></span>
                                            </div>
                                               </div>
                                               
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group"> 
                                                <label for="stockcategory_Name" class="col-form-label">Category Name</label>
                                                <select name='stockcategory_Name' id='stockcategory_Name' class='form-control'>
                                                
                                                </select>
                                                <span class='text-danger'><?php echo form_error('stockcategory_Name');?></span>
                                            </div>
                                               </div>
                                        </div>
                                                
                                        <div class='row'>
                                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                                <div class="form-group"> 
                                                <label for="stockpart_Name" class="col-form-label">Part Name</label>
                                                <select name='stockpart_Name' id='stockpart_Name' class='form-control'>
                                                
                                                </select>
                                                <span class='text-danger'><?php echo form_error('stockpart_Name');?></span>
                                            </div>
                                            </div>
                                            <div class='col-xs-12 col-sm-3 col-md-3'>
                                                <div class="form-group"> 
                                                <label for="good_Qty" class="col-form-label">Good Quantity</label>
                                                <input type="text" name="good_Qty" id="good_Qty" class="form-control" placeholder="Enter Good quantity">
                                                    <span id='goodQuantity'></span>
                                                <span class='text-danger'><?php echo form_error('good_Qty');?></span>
                                            </div>
                                            </div>
                                            <div class='col-xs-12 col-sm-3 col-md-3'>
                                                <div class="form-group"> 
                                                <label for="bad_Qty" class="col-form-label">Bad Quantity</label>
                                                <input type="text" name="bad_Qty" id="bad_Qty" class="form-control"  placeholder="Enter Bad quantity">
                                                    <span id='badQuantity'></span>
                                                <span class='text-danger'><?php echo form_error('bad_Qty');?></span>
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
