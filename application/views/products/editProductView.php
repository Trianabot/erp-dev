
        
        
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Product </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Products</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Lists" class="breadcrumb-link">Product Lists</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
                                <h5 class="card-header">Edit Product</h5>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                <a href="<?php echo base_url()?>Products/Lists"> <h5 class="card-header1">  View Products </h5> </a>
                                </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <?php
                                                if($this->session->tempdata("upd_succ"))
                                                {
                                                echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("upd_succ")."</div>";
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        
                                                <?php 
                                        $attributes = array('id' => '');
                                        echo form_open_multipart(base_url()."Products/editProduct/".$product->product_Id, $attributes);?>
<div class="row"> 
                                                <div class="col-xs-12 col-sm-8 col-md-8"> 
<div class="row"> 
                                        <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                <div class="form-group">
                                                    <label for="brand_Name" class="col-form-label">Select Brand Name</label>
                                                    <!-- <input id="brand_Name" type="text" class="form-control" name="brand_Name" placeholder="enter brand name"> -->
                                                    <select name="brand_Name" class="progControlSelect2 form-control"> 
                                                    <option value="<?php echo $product->brand_Id;?>"> <?php echo $product->brand_Name;?> </option>
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
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                <div class="form-group"> 
                                                    <label class="col-form-label"> Product Name</label>
                                                    <input type="text" name="product_Name" id="product_Name" class="form-control" value="<?php echo $product->product_Name;?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <label for="cat_Name" class="col-form-label"> Select Category </label>
                                                    <select name="cat_Name" class="progControlSelect2 form-control"> 
                                                        <option value="<?php echo $product->cat_Id;?>"> <?php echo $product->category_Name;?> </option>
                                                        <?php 
                                                        foreach($categories as $category){
                                                            ?>
                                                                <option value="<?php echo $category->category_Id;?>"><?php echo $category->category_Name;?></option>   
                                                            <?php
                                                        }   
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="subcat_Name" class="col-form-label"> Select Sub-Category </label>
                                                        <select name="subcat_Name" class="form-control"> 
                                                        <option value="<?php echo $product->subcat_Id;?>"> <?php echo $product->subcategory_Name;?> </option>
                                                        </select>
                                                </div>
                                        </div>


                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="product_Code" class="col-form-label"> Code </label>
                                                        <input type="text" name="product_Code" id="product_Code" class="form-control" value="<?php echo $product->product_Code;?>">
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="product_Uom" class="col-form-label"> UoM </label>
                                                        <input type="text" name="product_Uom" id="product_Uom" class="form-control" value="<?php echo $product->product_Uom;?>">
                                                </div>
                                        
                                        </div>

                                        <div class="row">
                                               
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="productdist_Price" class="col-form-label"> Distributor Price </label>
                                                        <input type="text" name="productdist_Price" id="productdist_Price" class="form-control distPrice" value="<?php echo $product->productdist_Price;?>" data-d-group="2" dGroup= "2" vMin= "0.00" aPad= 'true'>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="productret_Price" class="col-form-label"> Retailer Price </label>
                                                        <input type="text" name="productret_Price" id="productret_Price" class="form-control retailerPrice" value="<?php echo $product->productret_Price;?>" data-d-group="2" dGroup= "2" vMin= "0.00" aPad= 'true'>
                                                </div>
                                        </div>


                                        <div class="row"> 
                                              

                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="product_Hsn" class="col-form-label"> HSN </label>
                                                        <!-- <input type="text" name="product_Hsn" id="product_Hsn" class="form-control" placeholder="enter product HSN"> -->
                                                        <select name="product_Hsn" id="product_Hsn" class="progControlSelect2 form-control"> 
                                                        <option value="<?php echo $product->producthsn_Id;?>"><?php echo $product->producthsn_Code;?></option>
                                                        <?php 
                                                        foreach($hsncodes as $hsncode){
                                                            ?> 
                                                                <option value="<?php echo $hsncode->producthsn_Id;?>"><?php echo $hsncode->producthsn_Code;?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                        </select>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="product_GST" class="col-form-label"> GST </label>
                                                        <input type="text" name="product_GST" id="product_GST" class="form-control" value="<?php echo $product->product_GST;?>">
                                                </div>
                                        </div>

                                        <!-- <div class="row"> 
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                       
                                                     </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6"> </div>
                                        </div> -->

                                       
                                        
                                        </div>

                                        <div class="col-xs-12 col-sm-4 col-md-4"> 
                                        <label for="product_Image" class="col-form-label"> Product Image </label>
                                                        <input type="file" name="product_Image" id="product_Image" class="form-control">
                                                        <img src="<?php echo base_url()?>assets/images/product/<?php echo $product->product_Image?>" width="80">
                                        </div>
                                        
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <input type="submit" name="editproductsubmit" value="Submit" class="btn btn-primary">
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <input type="reset" value="Cancel" class="btn btn-light">
                                                </div>
                                        </div>

                                        <?php echo form_close();?>

                                        
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>




