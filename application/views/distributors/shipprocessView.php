<style>
    .orderSection{
        padding-left: 50px !important;
    }
    .producttotal_Section{
        padding-left: 50px !important;
    }
</style>
<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                   
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Orders" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='Listorders')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i> Orders History </a>
                                <div id="submenu-1" class="<?=($this->uri->segment(2)==='Listretailerorders')?'collapse':''?> submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Distributor/Listorders" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Listretailerorders" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> New Orders </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Distributor/Neworder" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Newretailerorder" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>

                        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Order Shippment </h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Shippment</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Distributor Shippment</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="offset-xl-2 col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <?php echo form_open(base_url()."Distributor/Shipment/".$order->distorder_Id);?>
                                <input type="hidden" name="distorder_Id" id="distorder_Id" value="<?php echo $order->distorder_Id;?>">
                                <input type="hidden" name="distributor_Id" id="distributor_Id" value="<?php echo $order->distributor_Id;?>">
                                <div class="card-header p-4">
                                     <a class="pt-2 d-inline-block" href="index.html">Skyzen</a>
                                   
                                    <div class="float-right"> <h3 class="mb-0">
                                        
                                           
                                            <?php 
                                            if($order->invoice_Status == 1){
                                                echo "Shipment Against Invoice";
                                            }else {
                                                echo "Shipment Against Order";
                                            }
                                            ?>
                                        </h3>
                                            </div>
                                </div>
                                
                               <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                             <h5 class="card-header">Order Details</h5> <hr>
                                        <div class="orderSection"> 
                                             <div class="row">
                                                <div class="col-xs-12 col-sm-4 col-md-4">
                                                    <h5> Order No :  
                                                                </h5> 
                                                        <?php 
                                                                if($order->invoice_Status == 1) {
                                                                    echo $order->distorder_Id;
                                                                        } else { 
                                                                    echo "Not generate Invoice";
                                                                } 
                                                                ?>
                                                 </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4">
                                                    
                                                        <h5> Distributor Name : </h5>
                                                        <?php echo $order->comporganization_Name;?>
                                                 </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4">
                                                        
                                                        <h5> Order Date : </h5>
                                                        <?php echo $order->invoice_Date;?>
                                                    </div>
                                                 </div>
                                            </div>
                                            </div>
                                    </div>
                              
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                             <h5 class="card-header">Shipping Products</h5>
                                             <div class="table-responsive-sm">
                                            <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="center">#</th>
                                                    <th>Item</th>
                                                    <th class="center">Qty</th>
                                                    <th class="right">Unit Cost</th>
                                                    <th class="center">GST</th>
                                                    <th class="center">Discount</th>
                                                    <th class="right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $i=1;
                                                if($products){
                                                    foreach($products as $product){
                                                        ?> 
                                                        <tr>
                                                            <td><?php echo $i;?></td>
                                                            <td><?php echo $product->product_Name;?></td>
                                                            <td><?php echo $product->product_Qty;?></td>
                                                            <td><?php echo $product->product_Unitprice;?></td>
                                                            <td><?php echo $product->product_GST;?></td>
                                                            <td><?php echo $product->product_Discount;?></td>
                                                           <td><?php echo $product->product_Total;?></td>
                                                        </tr>
                                                        <?php
                                                        $i++;
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                                 <div class="producttotal_Section"> 
                                            <table class="table table-clear">
                                                <tbody>
                                                    <tr> 
                                                        <td> Sub Total </td>
                                                        <td> Discount </td>
                                                        <td> GST </td>
                                                        <td> Grand Total</td>
                                                    </tr>
                                                    <tr>
                                                        <td> 28,809,00 </td>
                                                        <td> 5,761,00 </td>
                                                        <td> 2,304,00 </td>
                                                        <td> 20,744,00 </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                                     </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                   <div class="row">
                                       
                                       
                                        <div class="col-xs-12 col-sm-6 col-md-6"> 
                                            <div class="card">
                                                <h5 class="card-header">Shipping Address</h5> <hr>
                                            <div class="card-body">
<!--
                                            <div class="form-group">
                                                <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="shipping custom-control-input" id="same_Shipping" name="same_Shipping" onchange="valueChanged()" value="1"><span class="custom-control-label">Shipping same as order address</span>
                                            </label>
                                            </div>
-->
                                            <div class="newshipping"> 
                                                 <h4> Ship To  </h4>
                                                        <div class="form-group"> 
                                                                <label > Name: </label>
                                                                <input type="text" name="shipnew_Name" id="shippingnew_Name" class="form-control" required>
                                                        </div>
                                                       
                                                       <div class="form-group">
                                                            <label>Address</label>
                                                        
                                                                <textarea id="shippingnew_Address" name="shipnew_Address" class="form-control" required></textarea>
                                                        
                                                        </div>
                                            </div>
                                                </div>
                                            </div>
                                            
                                       </div>
                                       
                                       
                                        <div class="col-xs-12 col-sm-6 col-md-6"> 
                                            <div class="card">
                                                <h5 class="card-header">Shipping Details</h5> <hr>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="inputUserName">Shpping To</label>
                                                    <select class="form-control" id="input-select" name="shipping_To">
                                                        <option value="Warehouse1">Warehouse1</option>
                                                        <option value="Warehouse2">Warehouse2</option>
                                                        <option value="Warehouse3">Warehouse3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail">Shipping Through</label>
                                                    <select class="form-control" id="input-select" name="shipping_Through">
                                                        <option value="Courier">Courier</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
<!--
                                                <div class="form-group">
                                                    <label for="shipmentDate">Shipping Date</label>
                                                    <input id="shipmentDate" type="text" name="shipmentDate" placeholder="Shipping Date" required="" class="form-control">
                                                </div>
-->     
                                                <div class="form-group">
                <label for="dtp_input1">Shipping Date</label>
                <div class="input-group date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" type="text" value="" placeholder="select shipping date time" name="shipping_Date" id="shipping_Date" required>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
                                            </div>
                                            </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" value="Send Shipment" class="btn btn-rounded btn-primary float-right">
                                        </div>
                                    </div>
                                   
                                     
                                    
                              <?php echo form_close();?>
                            </div>
                              </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
              
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>

<script type="text/javascript"> 


function valueChanged()
{
    if($('.shipping').is(":checked"))   {
  
//        
            $('.newshipping').fadeOut();
//            $("#shipnew_Name").attr("value", "Same Contact Person");
//            $("#shipnew_Address").attr("value", "Same Ship Address");
    } else {
             $(".newshipping").fadeIn();       
    }
        //$(".ship_Section").hide();
      
          
        
}
</script>
