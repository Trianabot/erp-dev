
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Material Receive History</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Asp" class="breadcrumb-link">Asp</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">MR History</li>
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
                                    <div class='col-xs-12 col-sm-12 col-md-12'>
                                        
                                        <div class=''> 
                                            
                                            <div> 
                                            <?php 
                                            echo "<h3>".'Voucher No: '.$voucher_No."</h3>";
                                            ?>
                                                </div>
                                            <?php 
                                            if($mrdet){
                                                foreach($mrdet as $mr){
//                                                    echo "<pre>";
//                                                    print_r($mr); 
                                            echo "Mr No: " .$mrvoucherNo = $mr->mrvoucher_No; echo "<br>";
                                                    echo 'Lr No: '.$lrNo = $mr->lr_Number;
                                                    
        $query = $this->db->query("select * from materiralreceive_history where mrinvoice_No='$mrvoucherNo'");
            $res = $query->result();
//                                                    echo "<pre>";
//                                                    print_r($res); 
                                                    
                                                    
                                                    
                                                    ?> 
                                                    <table class='table'>
                                                    <thead>
                                                        <tr>
                                                            <th> S No </th>
                                                            <th> Part Name </th>
                                                            <th> Qty </th>
                                                            <th> Receive Date </th>
                                                        </tr>    
                                                    </thead>
                                                    <tbody>
                                                     <?php 
                                                    $i =1; 
                                                    if($res){
                                                    foreach($res as $re){
                                                       ?> 
                                                       <tr>
                                                            <td><?php echo $i;?></td>
                                                            <td><?php echo $re->Parts;?></td>
                                                            <td><?php echo $re->materialreceive_Qty;?></td>
                                                            <td><?php echo $re->materialreceive_Date;?></td>
                                                        </tr> 
                                                       <?php 
                                                        $i++;
                                                    }
                                                    }    
                                                    ?>    
                                                    </tbody>
                                                    </table>
                                                    <?php
                                                }
                                            }
                                                                       
                                                                       //echo $mrvoucherNo;
                                            ?>
<!--
                                        <table class='table'>
                                            <thead>
                                                <tr>
                                                    <th>S No</th>
                                                    <th>Part Name</th>
                                                    <th>Demand Quantity</th>
                                                    <th>Disptached Quantity</th>
                                                    <th>Material Received</th>
                                                    <th>Unit Rate</th>
                                                    <th>Net Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $i = 1;
//                                                echo "<pre>";
//                                                print_r($orders); 
                                                if($orders){
                                                    foreach($orders as $order){
                                                        ?> 
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $order->Part_Name;?></td>
                                                        <td><?php echo $order->Quantity;?></td>
                                                        <td><?php echo $order->delivered_Qty;?></td>
                                                        <td><?php echo $order->materialreceive_Qty;?></td>
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
-->
                                            </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


