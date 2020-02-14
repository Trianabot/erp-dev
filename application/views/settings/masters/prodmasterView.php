
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Products</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Product Lists</span>
                              <a href='<?php echo base_url()?>Setting/addproductMaster'> <h5 class="card-header1"> Add Product </h5></a>
                              <a href="<?php echo base_url()?>Setting/addbulkproductMaster"> <h5 class="card-header1"> Bulk Product </h5> </a>
                                </div>
                            </div>
                               
                                 
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Product Description</th>  
                                                <th scope="col">Unit Rate</th>
                                                <th scope="col">Brand</th>
                                                <th scope="col">Category One</th>
                                                <th scope="col">Category Two</th>
                                                <th scope="col">Category Three</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                        $i =1; 
                                        if($productsmaster){
                                            foreach($productsmaster as $prod){
                                                ?> 
                                                <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $prod->prod_Name;?></td>
                                                    <td><?php echo $prod->prod_Description;?></td>
                                                    <td><?php echo $prod->cost_One;?></td>
                                                    <td><?php echo $prod->brand_Name;?></td>
                                                    <td><?php echo $prod->category_Name;?></td>
                                                    <td><?php echo $prod->category_Two;?></td>
                                                    <td><?php echo $prod->category_Three;?></td>
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

<script>
         <!--
            function display() {
               alert("Hello World")
            }
         //-->
      </script>