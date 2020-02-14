
        
   
        
    
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Parts Master</h2>
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
                            <div class="card">
                            <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Skyzen Parts Master</span>
                               
                                <a href="<?php echo base_url()?>Setting/addpartMaster"> <h5 class="card-header1">  Add new</h5> </a>
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Product Category Name</th>
                                                <th scope="col">Spare Part Name</th>  
                                                <th scope="col">Stock Quantity</th>
                                                <th scope="col">Unit Rate</th>
                                                <th scope="col">Discount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                        $sno =1;
                                        if($partmasters){
                                            foreach($partmasters as $product){
                                                ?> 
                                                <tr>
                                                    <td><?php echo $sno;?></td>
                                                    <td><?php echo $product->category_Name;?></td>
                                                    <td><?php echo $product->partName;?></td>
                                                    <td><?php echo $product->stock_Qty;?></td>
                                                    <td><?php echo $product->unit_Rate;?></td>
                                                    <td><?php echo $product->discount_Amount;?></td>
                                                </tr>
                                                <?php
                                                $sno++;
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