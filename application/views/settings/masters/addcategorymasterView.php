
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Category Master</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Add Proudct Master</li>
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
                                <span class="table-title">Add Category</span>
                                
                                <a href="<?php echo base_url()?>Setting/categoryMaster"> <h5 class="card-header1">  View Categories</h5> </a>
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
                                            echo form_open_multipart(base_url()."Setting/addcategoryMaster", $attributes);?>
                                           <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                
                                            <div class="form-group"> 
                                                <label for="masterbrand_Name" class="col-form-label">Brand Name</label>
                                                <select name='masterbrand_Name' class='form-control'>
                                                    <option value='0'>Select Brand</option>
                                                    <option value='Skyzen'>Skyzen</option>
                                                </select>
                                                <span class='text-danger'><?php echo form_error('masterbrand_Name');?></span>
                                            </div>
                                                
                                            <div class="form-group"> 
                                                <label for="category_Name" class="col-form-label">Category Name</label>
                                                <input type='text' class='form-control' name='category_Name' placeholder='Enter category name'>
                                                <span class='text-danger'><?php echo form_error('category_Name');?></span>
                                            </div>
                                               
                                            <div class="form-group"> 
                                                <label for="category_Alias" class="col-form-label">Category Alias Name</label>
                                                <input type="text" name="category_Alias" id="category_Alias" class="form-control" placeholder="Enter alias name">
                                                <span class='text-danger'><?php echo form_error('category_Alias');?></span>
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
