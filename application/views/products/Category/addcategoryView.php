
        
   
    
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
                            <h2 class="pageheader-title">Category </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Products</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Category" class="breadcrumb-link">Category</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
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
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                <h5 class="card-header">Add Category</h5>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                <a href="<?php echo base_url()?>Products/Category"> <h5 class="card-header1">  View Categories </h5> </a>
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
                                            $attributes = array('id' => 'categoryform');
                                            echo form_open_multipart(base_url()."Products/addCategory", $attributes);?>
                                            <div class="form-group">
                                                <label for="category_Name" class="col-form-label">Enter Category Name</label>
                                                <input id="category_Name" type="text" class="form-control" name="category_Name" placeholder="enter category name">
                                                <span class="text-danger"> <?php echo form_error("category_Name");?></span>
                                            </div>
                                            
                                             <div class="form-group">
                                                    <label for="brand_Name" class="col-form-label">Select Brand Name</label>
                                                    <!-- <input id="brand_Name" type="text" class="form-control" name="brand_Name" placeholder="enter brand name"> -->
                                                    <select name="brand_Name" class="progControlSelect2 form-control"> 
                                                        <option value="0"> Select Brand Name </option>
                                                        <?php 
                                                        foreach($brands as $brand){
                                                            ?>
                                                            <option value="<?php echo $brand->brand_Id;?>"><?php echo $brand->brand_Name;?></option>
                                                            <?php
                                                        } 
                                                        ?>
                                                    </select>
                                                    <span class="text-danger"> <?php echo form_error("brand_Name");?></span>
                                                </div>
                                                
                                                
                                            <div class="form-group">
                                                <input type="submit" value="Submit" name="categorysubmit" class="btn btn-rounded btn-primary">
                                            </div>
                                            
                                            <?php echo form_close();?>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>
