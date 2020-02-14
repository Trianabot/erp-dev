
    
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
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/ProductHSN" class="breadcrumb-link">Products HSN</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Product HSN </li>
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
                                <span class="table-title">Add Product HSN</span>
                                
                                <a href="<?php echo base_url()?>Products/ProductHSN"> <h5 class="card-header1">  View HSN </h5> </a>
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
                                        echo form_open_multipart(base_url()."Products/addproductHSN", $attributes);
                                        ?>
                                        <div class="form-group">
                                            <label for="producthsn_Code" class="col-form-label">Enter HSN Code</label>
                                            <input id="producthsn_Code" type="text" class="form-control" name="producthsn_Code" placeholder="Enter HSN Code">
                                            <span class="text-danger"> <?php echo form_error("producthsn_Code");?></span>
                                        </div>
    
                                        <div class="form-group">
                                            <label for="product_GST" class="col-form-label">Enter GST</label>
                                            <input id="product_GST" type="text" class="form-control" name="product_GST" placeholder="Enter GST">
                                            <span class="text-danger"> <?php echo form_error("product_GST");?></span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="btn btn-rounded btn-primary">
                                        </div>
                                        
                                        <?php echo form_close();?>
                                        </div>
                                    </div>
                                       
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>
