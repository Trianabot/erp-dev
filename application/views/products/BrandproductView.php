       
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
              
               <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Products </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Products</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Product Lists</li>
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
                              </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Distributor Price</th>
                                                <th scope="col">Retailer Price</th>
                                                <th scope="col">GST</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          if($brands){
                                            foreach($brands as $brnd){
                                                ?> 
                                                <tr> 
                                                    <td><?php echo $brnd->product_Name;?></td>
                                                    <td><?php echo $brnd->product_Code;?></td>
                                                    <td><?php echo $brnd->productdist_Price;?></td>
                                                    <td><?php echo $brnd->productret_Price;?></td>
                                                    <td><?php echo $brnd->product_GST." %"?></td>
                                                </tr>
                                                <?php
                                            }
                                          }
                                          ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
</div>
</div>



           