<style>
a.link_Asp{
    color: blue;
    text-decoration: none;
    border-bottom: 1px solid blue;
}
</style>
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
                                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                           
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Orders Lists</span>
                               
                                    <a href="<?php echo base_url()?>Asp/newOrders"> <h5 class="card-header1">  New Orders  </h5> </a>
                                </div>
                            </div>
                               
                               
                               
                                    <table class="table" id="">
                                        <thead>
                                            <tr>
                                                <th scope="col">S No </th>
                                                <th scope="col">Voucher No </th>
                                                <th scope="col">Order Date</th>  
                                                <th scope='col'>Order Status</th>
                                                <th scope='col'>Shipment</th>
                                                <th scope='col'>Material Receive</th>
                                                <th scope='col'>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $sno =1; 
                                            if($orders){
                                                // echo "<pre>";
                                                // print_r($orders); die; 
                                              foreach($orders as $order){
                                                  ?> 
                                                <tr>
                                                    <td><?php echo $sno;?></td>
                                                    <td>
                <a href='<?php echo base_url()?>Asp/asporderview/<?php echo $order->voucher_No?>' class='link_Asp'>
                                                    <?php echo $order->voucher_No;?>
                                                    </a>
                                                    </td>
                                                    <td><?php 
                                                    $date = $order->vouchergen_Date;
                                                    echo date('d-m-Y', $date);?></td>
                                                    <td><?php echo $order->voucher_Status?></td>
                                                    <td>
                                                        <?php 
                                                        $status = $order->voucher_Status; 
                                                        if (($status =='Order Shipped') || ($status =='Partial Order') || ($status =='Order Received')){
                                                             ?> 
                            <a href='<?php echo base_url()?>Asp/asporderShip/<?php echo $order->shipment_No;?>'><img src="https://img.icons8.com/carbon-copy/100/000000/document.png" style='width:40px'></a>
                        
                                                            <?php  
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        
                                                         <?php 
                                                       $status = $order->voucher_Status; 
                                                
$query=$this->db->query("select SUM(delivered_Qty) AS delqty from asps_orders where mrinvoice_No='$order->mrinvoice_No'");
$res = $query->row();

$query1=$this->db->query("select SUM(materialreceive_Qty) AS matrecqty from asps_orders where mrinvoice_No='$order->mrinvoice_No'");
$res1 = $query1->row();
$deliverd_Qty = $res->delqty;
$matrec_Qty = $res1->matrecqty;
                                                
                                                
                                                
                                                
                                                        if($status =='Order Shipped'){
                                                            ?> 
<!--                                                        <input type="button" name="view" value="view" id="<?php echo $order->Voucher_No; ?>" class="btn btn-info btn-xs" />-->
                                                        
<!--                                                        <a class="" onclick="aspsOrder(<?php echo $order->Voucher_No;?>)" href="javascript:void(0)">Process</a>-->
                         <a href='<?php echo base_url()?>Asp/asporderReceive/<?php echo $order->shipment_No;?>' class='link_Asp'>MR </a>
                                                        
                                                        
                                                            <?php
                                                        }else if(($status =='Patial Order') || ($status == 'Order Received')){
                                                            ?> 
                                                         
                                                        
                                                        <a href='<?php echo base_url()?>Asp/ordermrView/<?php echo $order->voucher_No?>' class='link_Asp'><i class="fas fa-truck"></i>
</a>
                   
                   
                                                        <?php
                                                        }else if(($status =='Partial Order') && ($deliverd_Qty != $matrec_Qty)){
                                                            ?> 
                                                        <a href='<?php echo base_url()?>Asp/asporderbalReceive/<?php echo $order->mrinvoice_No;?>' class='link_Asp'>MR </a>
                                                            <?php
                                                        }
                                                        
                                                    ?>
                                                    </td>
                                                     <td>
                                                        
                                                        <a class="order_delete" data-emp-id="<?php echo $order->voucher_No;?>" href="javascript:void(0)"><i class="fa fa-trash" aria-hidden="true" title="delete" style='color:red'></i></a>
                                                        
                                                        
                                                    
</td>
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
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="orderreceiveModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Order Receive</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('partial_order')?></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

<div class="modal fade" id="ordercompletereceiveModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Order Receive</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('order_receive')?></h5>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    


