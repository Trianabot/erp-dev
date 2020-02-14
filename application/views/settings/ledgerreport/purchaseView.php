
        
   
    

<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Purchase</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Settings</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Purchase Lists</li>
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
                            <span class="table-title">Purchase Lists</span>
                               
                                <a href="<?php echo base_url()?>Setting/addPurchase"> <h5 class="card-header1">  Add Purchase </h5> </a>
                                </div>
                            </div>
                               
                               <div class=""> 
                                 <a href="<?php echo base_url()?>Setting/purchasecsvExport"> <i class="fas fa-file-excel" title="Export CSV" style="font-size:30px"></i> </a>    
                                </div>    
                               
                                <div class="card-body">
                                    <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col"> Date </th>
                                                <th scope="col">Voucher No</th>
                                               <th scope="col">Branch</th>   
                                                <th scope="col">Party</th>
                                                <th scope="col">Purchase Account </th>
                                                <th scope="col">Product </th>
                                                <th scope="col">Amount</th>  
                                                <th scope="col">Division</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                           
                                             <?php 
                                            if($purchases){
                                                foreach($purchases as $purchase){
                                                ?> 
                                                <tr>
                                                    <td><?php echo $purchase->purchase_Date;?></td>
                                                    <td><?php echo $purchase->purchase_VoucherNo;?></td>
                                                    <td><?php echo $purchase->purchase_Branch;?></td>
                                                    <td><?php echo $purchase->purchase_Party;?></td>
                                                    <td><?php echo $purchase->purchase_Purchaseac;?></td>
                                                    <td><?php echo $purchase->purchase_Product;?></td>
                                                    <td><?php echo $purchase->purchase_Netamt;?></td>
                                                    <td><?php echo $purchase->purchase_Division;?></td>
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
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>
