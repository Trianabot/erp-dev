<style>
a.link_Asp{
    color: blue;
    text-decoration: none;
    border-bottom: 1px solid blue;
}
.table.dataTable.no-footer{
    border-bottom:none !important;
}
.table.dataTable thead th, table.dataTable thead td{
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
                            <h2 class="pageheader-title">ASP Orders</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">ASP Orders</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12'>
                                        <a href='<?php echo base_url()?>Crm/dailyaspOrders' class='btn btn-info btn-sm'> <i class="fa fa-download" aria-hidden="true"></i> <span style="margin-left:2px;">Daily Orders</span></a>
                                    </div>
                                </div>
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Asp Order Lists</span>
                               
                                   
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body1">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">S No </th>
                                                <th scope="col">Voucher No </th>
                                                <th scope="col">Order Date</th>  
                                                <th scope="col">Total Quantity</th>
                                                <th scope="col">Order By</th>
                                                <th scope='col'>Order Status</th>
                                                <th scope='col'>Shipment</th>
                                                <th scope='col'>Delivery</th>
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
                                                   
                                                        <?php 
                                                        $status = $order->order_Status;
                                                        if($status == 'New Order'){
                                                            ?> 
                                                             <td>
                                                              <a href='<?php echo base_url()?>Crm/orderProcess/<?php echo $order->Voucher_No?>' class='link_Asp'>
                                                        
                                                        <?php echo $order->Voucher_No;?>
                                                        
                                                        </a>   
                                                             </td>
                                                            <?php
                                                        }else if($status == 'Order Placed' || $status == 'Order Shipped' || $status == 'Partial Order' || $status == 'Order Received'){
                                                            ?> 
                                                            <td>
                                                                <a href='<?php echo base_url()?>Crm/asporderview/<?php echo $order->invoice_No?>
' class='link_Asp'>
                                                        
                                                        <?php echo $order->Voucher_No;?></a>
                                                            </td>
                                                            <?php
                                                        }
                                                        ?>
                                                    
                                                   
                                                    <td><?php echo $order->order_Date;?></td>
                                                    <td><?php echo $order->Total_Qty?></td>
                                                    <td>
                                                        <?php 
                                                           $user_Name = $order->order_By;
                                                        $query = $this->db->query("select * from users where email='$user_Name'");
                                                        $result = $query->row();
                                                        $name = $result->email;
                                                        echo $name;
                                                            ?>
                                                    
                                                    </td>
                                                    <td>
                                                        <?php echo $order->order_Status?>
                                                        
                                                        </td>
                                                    <td><?php 
                                                $status = $order->order_Status;
                                                        if($status =='Order Placed'){
                                                            ?> 
                           <a href='<?php echo base_url()?>Crm/asporderShipment/<?php echo $order->Voucher_No;?>'><img src="https://img.icons8.com/carbon-copy/100/000000/document.png" style='width:40px;float:left;'> <span style="line-height:19px;font-size:14px;">Not yet Dispatched</span></a>
                                                            <?php
                                                        }else if($status =='Order Shipped'){
                                                         ?> 
                            <a href='<?php echo base_url()?>Crm/asporderShip/<?php echo $order->shipment_No;?>'><img src="https://img.icons8.com/carbon-copy/100/000000/document.png" style='width:40px'>   <span style="line-height:19px;font-size:14px;"> Not yet Delivered </span></a>
                        
                                                            <?php    
                                                        }else if($status == 'Partial Order' || $status == 'Order Received'){
                                                           ?> 
                                                           <a href='<?php echo base_url()?>Crm/asporderShip/<?php echo $order->shipment_No;?>'><img src="https://img.icons8.com/carbon-copy/100/000000/document.png" style='width:40px'></a>
                                                           <?php 
                                                        }
                                                        ?></td>
                                                    <td>
                                                   <?php 
                                                   $status = $order->order_Status;
                                                   if($status == 'Partial Order' || $status == 'Order Received'){
                                                       ?> 
                                                     <a href='<?php echo base_url()?>Crm/mrorderShip/<?php echo $order->mrinvoice_No;?>'><img src="https://img.icons8.com/carbon-copy/100/000000/document.png" style='width:40px'></a>  
                                                       <?php
                                                   }
                                                   ?>
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
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>

                
            <!-- ============================================================== -->
            <!-- footer -->

<div class="modal fade" id="shipmentModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Order Status</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('shipment_Report')?></h5>
                    <h5 class="text-center">
                        <?php echo $this->session->userdata('shipped')?></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
           




<div class="modal fade" id="orderprocessModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Order Status</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('order_Process')?></h5>
                    <h5 class="text-center">
                        <?php echo $this->session->userdata('invoice')?></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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



<script>
function aspsOrder(id){
    alert(id);
}
</script>