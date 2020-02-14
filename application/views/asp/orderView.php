
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Orders History</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Asp" class="breadcrumb-link">Asp</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Orders History</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class=''>
                                            <h3>Voucher No </h3>
                                            <?php echo $voucherId;?>
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class=''>
                                            <h3>Order Date </h3>
                                            <?php echo $orderDate;?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12'>
                                        
                                        <div class=''> 
                                        <table class='table'>
                                            <thead>
                                                <tr>
                                                    <th>S No</th>
                                                    <th>Part Name</th>
                                                    <th>Demand Quantity</th>
                                                    <th>Delivered Quantity</th>
                                                    <th>Unit Rate</th>
                                                    <th>Net Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $i =1; 
                                                if($orders){
//                                                    echo "<pre>";
//                                                    print_r($orders); 
                                                    
                                                   
                                                        foreach($orders as $order){
                                                            
                                                        
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $i;?></td>
                                                            <td><?php echo $order->Part_Name;?></td>
                                                             <td><?php echo $order->Quantity;?></td>
                                                            <td>
                                                          <?php echo $order->delivered_Qty;?>
                                                            </td>
                                                             <td><?php echo $order->Unit_Rate;?></td>
                                                            <td><?php echo $order->Net_Amount;?></td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

