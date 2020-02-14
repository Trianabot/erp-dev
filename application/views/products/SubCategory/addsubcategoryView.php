
        
   
        
        
     
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
                            <h2 class="pageheader-title">Sub Category </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Products</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/addSubCategory" class="breadcrumb-link">Sub Category</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Sub-Category</li>
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
                                <span class="table-title">Add Sub-Category</span>
                               
                                <a href="<?php echo base_url()?>Products/Subcategory"> <h5 class="card-header1">  View Sub-Categories </h5> </a>
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
                                            $attributes = array('id' => 'subcategoryform');
                                            echo form_open(base_url()."Products/addSubCategory", $attributes);?>
                                            <div class="form-group">
                                                <label for="category_Name" class="col-form-label">Select Category Name</label>
                                                <select name="category_Name" class="form-control">
                                                    <option value="0"> Select Category Name </option>
                                                        <?php
                                                        foreach($categories as $category){
                                                            ?>
                                                                <option value="<?php echo $category->category_Id?>"> <?php echo $category->category_Name?> </option>
                                                            <?php
                                                        }
                                                        ?>
                                                </select>
                                                <!-- <input id="category_Name" type="text" class="form-control" name="category_Name" placeholder="enter category name"> -->
                                                <span class="text-danger"> <?php echo form_error("category_Name");?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="subcategory_Name" class="col-form-label"> Sub Category </label>
                                                <input id="subcategory_Name" type="text" class="form-control" name="subcategory_Name" placeholder="enter sub category name">
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
