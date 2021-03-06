
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Product Master</h2>

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
                                <span class="table-title">Add Product</span>
                                
                                <a href="<?php echo base_url()?>Setting/productMaster"> <h5 class="card-header1">  View Proudcts</h5> </a>
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
                                            echo form_open_multipart(base_url()."Setting/addproductMaster", $attributes);?>
                                           <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class='form-group'>
                                            <label>Brand Name</label>
                                            <select name='partbrand_Name' id='partbrand_Name' class='form-control'>
                                                <option value='0'>Select Brand</option>
                                                <option value='Skyzen'>Skyzen</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class='form-group'>
                                            <label>Category Name</label>
                                            <select name='partcategory_Name' id='partcategory_Name' class='form-control'>

                                            </select>
                                        </div>
                                    </div>                                               
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <label>Product Name</label>
                                        <input type='text' name='product_Name' id='part_Name' class='form-control' placeholder='Enter part name'>
                                        <span class="text-danger"><?php echo form_error("product_Name");?></span>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <label>Part Description</label>
                                        <input type='text' name='product_Description' id='product_Description' class='form-control' placeholder='Enter part description'>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <label>SMU</label>
                                        <input type='text' name='proudct_Smu' id='proudct_Smu' class='form-control' placeholder='Enter SMU'>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <label>Alternate SMU</label>
                                        <input type='text' name='prod_AlternateSmu' id='prod_AlternateSmu' class='form-control' placeholder='Enter Alternate SMU'>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <label>Unit Rate</label>
                                        <input type='text' name='produnit_Rate' id='produnit_Rate' class='form-control' placeholder='Enter Unit Rate'>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        
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
