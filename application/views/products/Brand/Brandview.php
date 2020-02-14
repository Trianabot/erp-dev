
        
   
        
        
       
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
                                        <li class="breadcrumb-item active" aria-current="page">General Brands</li>
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
                            <div class="col-xs-12 col-sm-12 col-md-12 padding0">
                                <span class="table-title">Brand Lists</span>
                               
                                <a href="<?php echo base_url()?>Products/addBrand"> <h5 class="card-header1">  Add Brand </h5> </a>
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">S No</th>
                                                <th scope="col">Brand Name</th>
                                                <th scope="col">Brand Logo</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           
                                           if($brands){
                                               $i=1;
                                            foreach($brands as $brand){
                                                
                                              
                                                // echo "<pre>";
                                                // print_r($thumb_img); die; 
                                            ?>
                                            <tr>
                                                <td> <?php echo $i;?> </td>
                                                <td><?php echo $brand->brand_Name;?></td>
                                                <td>
                                                <?php 
                                                    if($brand->brand_Logo == ''){
                                                        echo "No Image";
                                                    }else {
                                                        $img=explode('.',$brand->brand_Logo); 
                                                        $thumb_img=$img[0].'_thumb.'.$img[1];  
                                                        ?> 
                                                        <img src="<?php echo base_url()?>assets/images/brand/thumb/<?php echo $thumb_img?>">
                                                        <?php
                                                    }
                                                ?>
                                                
                                                
                                                
                                                </td>
                                                <td> <a href="<?php echo base_url()?>Products/editBrand/<?php echo $brand->brand_Id?>" class="editbtn"> Edit </a>
                                                <a href="<?php echo base_url()?>Products/deleteBrand/<?php echo $brand->brand_Id?>" class="deletebtn"> Delete </a> </td>
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


           