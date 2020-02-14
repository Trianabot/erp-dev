
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Brand </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Products</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Brand" class="breadcrumb-link">Brand</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Brand</li>
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
                                <span class="table-title">Add Brand</span>
                                
                                <a href="<?php echo base_url()?>Products/Brand"> <h5 class="card-header1">  View Brands </h5> </a>
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
                                            $attributes = array('id' => 'brandform');
                                            echo form_open_multipart(base_url()."Products/addBrand", $attributes);?>
                                            <div class="form-group">
                                                <label for="brand_Name" class="col-form-label">Enter Brand Name</label>
                                                <input id="brand_Name" type="text" class="form-control" name="brand_Name" placeholder="enter brand name">
                                                <span class="text-danger"> <?php echo form_error("brand_Name");?></span>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="brand_Logo" class="col-form-label"> </label>
                                                <input type="file" name="brand_Logo" id="brand_Logo" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Submit" name="brandsubmit" class="btn btn-rounded btn-primary">
                                            </div>
                                            
                                            <?php echo form_close();?>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>
