
        
   
        
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
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Category" class="breadcrumb-link">Category</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Category - <?php echo $subCategory->subcategory_Name;?></li>
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
                                <span class="table-title">Edit Sub-Category</span>
                              
                                <a href="<?php echo base_url()?>Products/Subcategory"> <h5 class="card-header1">  View Sub-Categories </h5> </a>
                                </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                        <?php
                        if($this->session->tempdata("upd_succ")){
                        echo "<div class='alert alert-success'>".$this->session->tempdata("upd_succ")."</div>";
                        }
                        ?>

                        <?php echo form_open(base_url()."Products/editSubcategory/".$subCategory->subcat_Id);?>
                        
                        <div class="form-group">
                            <label> Category Name </label>
                            <select name="cat_name" class="form-control">
                            <option value="<?php echo $subCategory->cat_Id?>"> <?php echo $subCategory->category_Name;?> </option>                              	
                            <?php 
                            foreach($categories as $category) {
                            ?>
                            <option value="<?php echo $category->category_Id?>"> <?php echo $category->category_Name;?></option>
                            <?php
                            }
                            ?>
                            </select> 
                        </div>

                        <div class="form-group">
                        <label> Sub Category Name </label>

                        <input type="text" name="subcategory_Name" class="form-control" value="<?php echo $subCategory->subcategory_Name?>">

                        </div>

                        <div class="form-group">

                        <input type="submit" value="Update" class="dropbtn">

                        </div>

                        <?php echo form_close();?>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>
