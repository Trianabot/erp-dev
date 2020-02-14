<style>
.table.dataTable.no-footer{
    border-bottom:none !important;
}
table.dataTable thead th, table.dataTable thead td{
    border-bottom:1px solid #ddd !important;
}
</style>
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
                            <h2 class="pageheader-title">Register Sale </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">CRM</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Register Sale</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                            <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                               
                            </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                               
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                
                                                <th scope="col">Retailer City</th>
                                                <th scope="col">Retailer Name</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">City</th>
                                                <th scope="col">Brand Name</th>
                                                <th scope="col">Model Name</th>
                                                <th scope="col">Serial Number</th>
                                                <th scope="col">Date of sale</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $i=1;
                                            foreach($regsale as $sale) {
                                                ?>
                                                <tr> 
                                                    
                                                    <td><?php echo $sale->retailer_city_name;?></td>
                                                    <td><?php echo $sale->retailer_name;?></td>
                                                    <td><?php echo $sale->customer_name;?></td>
                                                    <td><?php echo $sale->mobile;?></td>
                                                    <td><?php echo $sale->address_one;?></td>
                                                    <td><?php echo $sale->city;?></td>
                                                    <td><?php echo $sale->brand_name;?></td>
                                                    <td><?php echo $sale->model_name;?></td>
                                                    <td><?php echo $sale->serial_name;?></td>
                                                    <td><?php echo $sale->date_of_sale;?></td>
                                                    
                                                </tr>
                                                <?php
                                                $i++;
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


           