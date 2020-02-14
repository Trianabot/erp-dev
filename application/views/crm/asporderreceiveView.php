<style>
    .asporderTable{
        border:1px solid black;
       
    }
</style>
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
                            <div class="page-header">
                                <h2 class="pageheader-title">Order Detail </h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Order</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Order</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-4 text-right">
                            <a href="<?php echo base_url()?>Crm/asporders"> <button> Previous </button> </a>
                        </div>
                    </div>
                    
                    <div class='row'>   
                        <div class='col-xs-12 col-sm-12 col-md-12'>
                            <div class='card'>
                                <div class='card-body'>
                                    <div class='invoice_Head' style='display: block; background-color: #CCC;text-align: center;border: 1px solid black;'> 
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-12 col-md-12'>
                                        <h5 style='font-size: 20px; font-weight: bold; text-align: center;margin-top: 11px;'>SAI TEJA INDO PLAST</h5>
                                        </div>
                                    </div>
                                        </div>
                                    
                                    <div class='company_Address' style='display: block; text-align: center;border: 1px solid black;padding-top: 20px;padding-bottom: 15px'> 
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-12 col-md-12'>
                                            <div> HO: Sri Venkateswara Sadan, 17-4-19,</div>
                                            <div>3rd Floor, Subbayya Nagar, 3rd Lane, Ponnur - 522 124</div>
                                            <div>BO 1:16/87/1, Moula Nagar, Gollapudi, Vijayawada - 521 225</div>
                                            <div>Ph : 9032009015, Mail Id - info@skyzen.co.in</div>
                                            <div>GSTIN : </div>
                                        </div>
                                    </div>
                                        </div>
                                    
                                     
                    <?php echo form_open_multipart(base_url()."Crm/asporderReceive/".$order->shipment_No);?>
                                    
                                    <div class='' style='border:1px solid black'> 
                                    <div class='row' style='margin:0px'>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border-right:1px solid black; background-color:#CCC;'>
                                             <div class=''> 
                                                    <h3 style='text-align: center;padding-top: 7px;font-weight: bold;'> Party Details </h3>                                               
                                        </div>
                                            </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border-left:1px solid black;background-color:#CCC;'>
                                            <div class=''>                                             
                                                    <h3 style='text-align: center;padding-top: 7px;font-weight: bold;'>Invoice Details </h3>                                                
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    
                                    <div class='' style='border:1px solid black'> 
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border-right:1px solid black'>
                                                <div class='row'> 
                                                    <div class='col-xs-12 col-sm-6 col-md-6'> 
                                                        <div>Party Name</div> <br> <br>
                                                        <div>Party Address </div>
                                                        <div>City</div>
                                                        <div>Phone No : </div> 
                                                    </div>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'> 
                                                        <div> <?php echo $asp->userdept_Name;?> </div> <br> <br>
                                                        <div><?php echo $asp->user_City;?></div>
                                                        <div><?php echo $asp->contact_Number;?> </div>
                                                    </div>
                                                         
                                                </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                
                                        
                                                <div class='row'>
                                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                                        <div>Mode &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</div>
                                                        <div>Invoice No : </div>
                                                        <div>Date : </div>
                                                        <div>Place of Supply : </div>
                                                        <div>State : </div>
                                                        <div>State Code : </div>
                                                        <div>GSTIN No : </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-8 col-md-8'>
                                                        <div>MATERIAL RECEIVE</div>
                                                        <div><?php echo $order->shipment_No;?></div>
                                                        <div><?php echo $order->order_Date;?></div>
                                                    </div>
                                                </div>
                                                
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class='' style='border:1px solid black'>
                                        <div class='row'>
                                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                                <h3 class='' style='text-align:center'>Shipping Details</h3>
                                            </div>
                                        </div>
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                                <div>Shipping Via</div>
                                                <div><?php echo $shipment->shipping_Via;?></div>
                                        </div>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                                <div>Courier No</div>
                                                <div><?php echo $shipment->courier_No;?></div>
                                        </div>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                                <div>Additional Details</div>
                                                <div><?php echo $shipment->additional_Detail;?></div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class='' style='border:1px solid black'>
                                        <div class='row'>
                                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                                <div class='form-group'>
                                                    <label>LR Number</label>
                                                    <input type='text' name='lrNumber' id='lrNumber' class='form-control' required>
                                                </div>
                                            </div>
                                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                                <div class='form-group'>
                                                    <Label>Courier Invoice</Label>
                                                    <input type='file' name='courierImage' id='courierImage' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-12 col-md-12'>
                                            <div class="table-responsive">
                                             <table class='table asporderTable'>
                                                <thead>
                                                    <tr style="border:1px solid black">
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center; border:1px solid black">S No</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Particular</th>
                                                        <th style="border:1px solid black">HSN</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Demand Qty</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Dispatched Qty</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Material Received</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">CD</th>
                                                        <th colspan="3" style="border:1px solid black; text-align:center">GST</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Amount</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Action</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="border:1px solid black">Code</th>
                                                        <th style="border:1px solid black">CGST</th>
                                                        <th style="border:1px solid black">SGST</th>
                                                        <th style="border:1px solid black">IGST</th>
                                                    </tr>
                                                </thead>   
                                                <tbody>
                                                    <?php 
                                                    $cart = array();
                                                    if($orders){
                 foreach($orders as $order){
                        $cart[] = $order->Part_Name;
                        //$partArray = array($partId);
                    
                      
                     //echo $partId;
                 }
                                                        
                                                        
                                                        
                                                    }
                                                    //$partValues = array_values($cart);
//                                                    echo "<pre>";
//                        print_r($cart);      
                                                    
//                                                        $this->db->select('*');
//                                                    $this->db->from('skyzenpart_stock');
//                                                    $this->db->where_in('part_Name', $cart);
//                                                    echo $this->db->last_query(); die; 
                                       // echo "select * from skyzenpart_stock where part_Name IN ($cart)";             
                                                      //echo $partArray;
                        
//                        $query1= $this->db->query("select * from skyzenpart_stock where part_Name IN ('$partValues')");    
//                        $res = $query1->result();
                        
                                                        ?>
             <?php 
            $sno = 1;
             if($orders){
//                   echo "<pre>";
//                        print_r($orders); 
                 foreach($orders as $order){
                     
                     
                     
                     ?> 
              <input type='hidden' name='shipment_No[]' value='<?php echo $order->shipment_No;?>'>
             <input type='hidden' name='asp_Name[]' value='<?php echo $order->order_By;?>'>
                    <tr>
                        <td><?php echo $sno;?></td>
       
       <td><input type='text' name='prodpart_Name[]' value='<?php echo $order->Part_Name;?>' readonly='readonly'>
            <input type='hidden' name='Part_Name[]' value='<?php echo $order->Part_Name;?>' readonly='readonly'></td>
    <td></td>
<td>
   <?php echo $order->Quantity;?>
</td>
<td><?php echo $order->delivered_Qty;?></td>
<td><input type='text' name='materialreceive_Qty[]' class='materialreceive_Qty' style='width:70px' required></td>
<td></td> 
                        <td></td>
                        <td></td>
                        <td></td>
<td></td>
                        <td>
                            
                            
                        </td>
                    </tr>
                    <?php
                     $sno++;
                 }
             }    
             ?>
                                                    <tr>
                                                        <td colspan="4" style="text-align:right;border:1px solid black">QTY</td>
                                                       
                                                        <td style='border:1px solid black'>
                                                            <?php 
                                                            $grandTotal = 0;
                                                            foreach($orders as $order){
                                                                $grandTotal += $order->Quantity;
                                                            }
                                                            ?>
                                                            <span id='totalDemand'></span>
                                                        </td>
                                                        <td style='border:1px solid black'></td>
                                                        <td style='border:1px solid black'></td>
                                                        <td colspan="3" style="text-align:right;border:1px solid black">Gross Amount</td>
                                                        <td colspan='2' style='border:1px solid black'>
                                                        <?php 
                                                            $grandtot_Amt = 0;
                                                            foreach($orders as $order){
                                                                $grandtot_Amt += $order->Net_Amount;
                                                            }
                                                            ?>
                                                            <span id='totalAmount'></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2" style='border:1px solid black'>Taxable Amount</td>
                                                        <td style='border:1px solid black'>CGST</td>
                                                        <td style='border:1px solid black'>SGCST</td>
                                                        <td style='border:1px solid black'>IGST</td>
                                                        <td colspan="3"></td>
                                                        <td ></td>
                                                        <td></td>
                                                        <td colspan='2' style='border:1px solid black'>Round Off(+/-)</td>
                                                        <td style='border:1px solid black'></td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td style='border:1px solid black'>%</td>
                                                        <td style='border:1px solid black'>%</td>
                                                        <td style='border:1px solid black'>%</td>
                                                        <td colspan="3"></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td colspan='2' rowspan='2' style='border:1px solid black'>Grand Total</td>
                                                        <td rowspan='2' style='border:1px solid black'></td>
                                                    </tr>
                                                    <tr>
                                                        <td style='border:1px solid black'></td>
                                                        <td style='border:1px solid black'></td>
                                                        <td style='border:1px solid black'></td>
                                                        <td style='border:1px solid black'></td>
                                                        <td colspan="3"></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style='border:1px solid black'>In Words:</td>
                                                        <td colspan="12" style='border:1px solid black'></td>
                                                    </tr>
                                                    <tr>
                                                        <td >HDFC BANK - </td>
                                                        <td>PONNUR</td>
                                                        <td colspan="11">RTGS : HDFC00002412 A/C NO: 5000256879</td>
                                                    </tr>   
                                                 </tbody>
                                             </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row' style='margin:0px'>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border:1px solid black;'>
                                            <div>Terms & Conditions </div>
                                            <div>1) Intrest wil be charged @24% per Anum if the payment is not received in 21 days from the date. </div>
                                            <div>2) Once Goods sold will not be taken back.</div>
                                            <div>3) We are not responsible for Shortage and Damage after Delivery </div>
                                            <div>4) Subjec to Ponnur Jurisdiction only</div>
                                            <div>5) Service will be provided by the respective Company Franchise Only</div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border:1px solid black;'>
                                                <div class='row' style='background-color:#CCC; border:1px solid black; border-bottom:1px solid black'>
                                                    <div class='col-xs-12 col-sm-12 col-md-12' >
                                                        <div class=''> 
                                                            <h5 style='text-align: center;padding-top: 7px;font-weight: bold;'> For SKYZEN </h5>                                               
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <div class='row' style='padding-top: 67px;padding-left: 439px;'>
                                                    <div class='col-xs-12 col-sm-12 col-md-12'>
                                                         <div class=''>
                                                            <h6>Authorised Signature</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" name='orderReceive' value="Order Process" class="btn btn-rounded btn-primary float-right">
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

