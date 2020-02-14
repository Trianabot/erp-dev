
        
   
        
        
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
                            <h2 class="pageheader-title">Products List </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Products</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Lists" class="breadcrumb-link">List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">General Products</li>
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
                            <span class="table-title">Products Lists</span>
                                <a href="<?php echo base_url()?>Products/addProduct"> <h5 class="card-header1">  Add Product </h5> </a>
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">S No</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Brand Name</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">HSN</th>
                                                <th scope="col">Distributor Price</th>
                                                <th scope="col">Retailer Price</th>
                                                <th scope="col">GST</th>
                                                <th scope="col">Product Image</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           
                                           if($products){
                                                $i=1;
                                            foreach($products as $product) {
                                                ?>
                                                <tr> 
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $product->product_Name;?></td>
                                                    <td><?php echo $product->brand_Name;?></td>
                                                    <td><?php echo $product->product_Code;?></td>
                                                    <td><?php echo $product->producthsn_Code;?></td>
                                                    <td><?php echo $product->productdist_Price;?></td>
                                                    <td><?php echo $product->productret_Price;?></td>
                                                    <td><?php echo $product->product_GST.'%'?></td>
                                                    <td> 
                                                    <?php 
                                                    if($product->product_Image == ''){
                                                        echo "No Image";
                                                    }else {
                                                        $img=explode('.',$product->product_Image); 
                                                        $thumb_img=$img[0].'_thumb.'.$img[1];  
                                                        ?> 
                                                        <img src="<?php echo base_url()?>assets/images/product/thumb/<?php echo $thumb_img?>">
                                                        <?php
                                                    }
                                                ?>
                                                    </td>
                                                    <td> 
                                                        <a href="<?php echo base_url()?>Products/editProduct/<?php echo $product->product_Id;?>" class="editbtn"> Edit </a>
                                                        <a href="<?php echo base_url()?>Products/deleteProduct/<?php echo $product->product_Id;?>" class="deletebtn"> Delete </a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                           }
                                          
                                            
                                           ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>

                
            <!-- ============================================================== -->
            <!-- footer -->


           