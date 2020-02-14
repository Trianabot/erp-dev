<style>
    .asporderTable{
        border:1px solid #ddd;
       
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
                            <a href="<?php echo base_url()?>Crm/asporders"> <button class="btn btn-rounded btn-primary float-right"> Previous </button> </a>
                        </div>
                    </div>
                    
                    <div class='row'>   
                        <div class='col-xs-12 col-sm-12 col-md-12'>
                            <div class='card'>
                                <div class='card-body'>
                                    <div class='invoice_Head' style='display: block; background-color: #CCC;text-align: center;border: 1px solid #ddd;'> 
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-12 col-md-12'>
                                        <h5 style='font-size: 20px; font-weight: bold; text-align: center;margin-top: 11px;'>SAI TEJA INDO PLAST</h5>
                                        </div>
                                    </div>
                                        </div>
                                    
                                    <div class='company_Address' style='display: block; text-align: center;border: 1px solid #ddd;padding-top: 20px;padding-bottom: 15px'> 
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
                                    
                                     
                                    <?php echo form_open(base_url()."Crm/orderProcess/".$order->Voucher_No);?>
                                    
                                    <div class='' style='border:1px solid #ddd'> 
                                    <div class='row' style='margin:0px'>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border-right:1px solid #ddd; background-color:#CCC;'>
                                             <div class=''> 
                                                    <h3 style='text-align: center;padding-top: 7px;font-weight: bold;'> Party Details </h3>                                               
                                        </div>
                                            </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border-left:1px solid #ddd;background-color:#CCC;'>
                                            <div class=''>                                             
                                                    <h3 style='text-align: center;padding-top: 7px;font-weight: bold;'>Invoice Details </h3>                                                
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    
                                    <div class='' style='border:1px solid #ddd'> 
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border-right:1px solid #ddd'>
                                                <div class='row'> 
                                                    <div class='col-xs-12 col-sm-6 col-md-6' style="padding-left:25px"> 
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
                                                        <div>DELIVEY INVOICE</div>
                                                        <div><?php echo $order->Voucher_No;?></div>
                                                        <div><?php echo $order->order_Date;?></div>
                                                    </div>
                                                </div>
                                                
                                        </div>
                                    </div>
                                    </div>
                                    
<!--
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-3 col-md-3'>
                                            <div class=''>
                                                    <h3>Skyzen</h3>
                                                </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-9 col-md-9'>
                                            <div class="text-center"> <h3 class="mb-0">Voucher No : /h3>
                                            <h3 class='mb-0'>Order Date : </h3></div>
                                        </div>
                                    </div>
-->
<!--
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="mb-3">From:</h5>                                            
                                            <h3 class="text-dark mb-1">Skyzen</h3>
                                         
                                            <div>#16/87/1, Moula Nagar, </div>
                                            <div>Gollapudi, Vijayawada-520 012 </div>
                                            <div>Andhra Pradesh </div>
                                            <div>GSTIN:  37ABCDE1234FZ1</div>;
                                        </div>
                                        <div class="col-sm-6">
                                            
                                            <h5 class="mb-3">To:</h5>
                                            <div class=''>
                                                <h3>Asp Detail</h3>
                                                <div> Name : </div>
                                                <div> Contact Person : <?php echo $asp->asp_Contact;?></div>
                                                <div> Area : <?php echo $asp->asp_Area;?> </div>
                                                <div> Contact Number : <?php echo $asp->mobile_primary;?> </div>
                                            </div>
                                            <?php /* ?>
                                            <h3 class="text-dark mb-1"><?php echo $order->comporganization_Name;?></h3>                                            
                                            <div><?php echo $order->dist_Address1;?></div>
                                            <div><?php echo $order->dist_Address2;?></div>
                                            <div>Email: <?php echo $order->dist_Email;?></div>
                                            <div>Phone: <?php echo $order->dist_Mobile;?></div>
                                            <?php */?>
                                        </div>
                                    </div>
-->
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-12 col-md-12'>
                                            <div class="table-responsive">
                                             <table class='table asporderTable'>
                                                <thead>
                                                    <tr style="border:1px solid #ddd">
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center; border:1px solid #ddd">S No</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid #ddd">Particular</th>
                                                        <th style="border:1px solid #ddd">HSN</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid #ddd">Stock Qty</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid #ddd">Demand Qty</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid #ddd">List Price</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid #ddd">CD</th>
                                                        <th colspan="3" style="border:1px solid #ddd; text-align:center">GST</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid #ddd">Amount</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid #ddd">Action</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="border:1px solid #ddd">Code</th>
                                                        <th style="border:1px solid #ddd">CGST</th>
                                                        <th style="border:1px solid #ddd">SGST</th>
                                                        <th style="border:1px solid #ddd">IGST</th>
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
              <input type='hidden' name='voucher_No[]' value='<?php echo $order->Voucher_No;?>'>
             <input type='hidden' name='asp_Name[]' value='<?php echo $order->order_By;?>'>
             <input type='hidden' name='brand_Name[]' value='<?php echo $order->Brand;?>'>
            <input type='hidden' name='category_Name[]' value='<?php echo $order->Category;?>'>
                    <tr>
                        <td><?php echo $sno;?></td>
       
       <td><input type='text' name='prodpart_Name[]' value='<?php echo $order->Part_Name;?>' readonly='readonly'>
            <input type='hidden' name='prodpart_Id[]' value='<?php echo $order->Part_Name;?>' readonly='readonly'></td>
    <td></td>
<td>
    <?php 
        $partId = $order->Part_Name;
        $query = $this->db->query("select * from skyzenpart_stock where part_Name='$partId'");
        $result = $query->row();
//                     echo "<pre>";
//                     print_r($result); 
        if($result){
            echo $good_Qty = $result->good_Quantity;  
        }else {
            echo "No Stock";
        }
//        if($result){
//            echo "No Stock";
//        }else { 
//        echo $result['good_Quantity'];  
//        }
                
    ?>
    <input type='hidden' name='stock_Qty[]' id='stock_Qty' class='form-control' value='<?php echo $good_Qty;?>'>
</td>
<td><input type='text' name='proddemand_Qty[]' id='proddemand_Qty' value='<?php echo $order->Quantity;?>' style='width:70px'></td>
<td><input type='text' name='Unit_Rate[]' value='<?php echo $order->Unit_Rate;?>' style='width:70px' readonly='readonly'></td>
<td></td> 
                        <td></td>
                        <td></td>
                        <td></td>
<td><input type='text' name='prodnet_Amount[]' value='<?php echo $order->Net_Amount;?>' style='width:70px' readonly></td>
                        <td>
                            
                            <button id="buttonAddItem" type="button" class="btn btn-danger btn-sm btn-invoiceremove">Delete</button>
                        </td>
                    </tr>
                    <?php
                     $sno++;
                 }
             }    
             ?>
                                                    <tr>
                                                        <td colspan="4" style="text-align:right;border:1px solid #ddd">QTY</td>
                                                       
                                                        <td style='border:1px solid #ddd'>
                                                            <?php 
                                                            $grandTotal = 0;
                                                            foreach($orders as $order){
                                                                $grandTotal += $order->Quantity;
                                                            }
                                                            ?>
                                                            <span id='totalDemand'><?php echo $grandTotal;?></span>
                                                        </td>
                                                        <td style='border:1px solid #ddd'></td>
                                                        <td style='border:1px solid #ddd'></td>
                                                        <td colspan="3" style="text-align:right;border:1px solid #ddd">Gross Amount</td>
                                                        <td colspan='2' style='border:1px solid #ddd'>
                                                        <?php 
                                                            $grandtot_Amt = 0;
                                                            foreach($orders as $order){
                                                                $grandtot_Amt += $order->Net_Amount;
                                                            }
                                                            ?>
                                                            <span id='totalAmount'><?php echo $grandtot_Amt;?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2" style='border:1px solid #ddd'>Taxable Amount</td>
                                                        <td style='border:1px solid #ddd'>CGST</td>
                                                        <td style='border:1px solid #ddd'>SGCST</td>
                                                        <td style='border:1px solid #ddd'>IGST</td>
                                                        <td colspan="3"></td>
                                                        <td ></td>
                                                        <td></td>
                                                        <td colspan='2' style='border:1px solid #ddd'>Round Off(+/-)</td>
                                                        <td style='border:1px solid #ddd'></td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td style='border:1px solid #ddd'>%</td>
                                                        <td style='border:1px solid #ddd'>%</td>
                                                        <td style='border:1px solid #ddd'>%</td>
                                                        <td colspan="3"></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td colspan='2' rowspan='2' style='border:1px solid #ddd'>Grand Total</td>
                                                        <td rowspan='2' style='border:1px solid #ddd'></td>
                                                    </tr>
                                                    <tr>
                                                        <td style='border:1px solid #ddd'></td>
                                                        <td style='border:1px solid #ddd'></td>
                                                        <td style='border:1px solid #ddd'></td>
                                                        <td style='border:1px solid #ddd'></td>
                                                        <td colspan="3"></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style='border:1px solid #ddd'>In Words:</td>
                                                        <td colspan="12" style='border:1px solid #ddd'><span id='words'></span></td>
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
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border:1px solid #ddd;'>
                                            <div>Terms & Conditions </div>
                                            <div>1) Intrest wil be charged @24% per Anum if the payment is not received in 21 days from the date. </div>
                                            <div>2) Once Goods sold will not be taken back.</div>
                                            <div>3) We are not responsible for Shortage and Damage after Delivery </div>
                                            <div>4) Subjec to Ponnur Jurisdiction only</div>
                                            <div>5) Service will be provided by the respective Company Franchise Only</div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border:1px solid #ddd;'>
                                                <div class='row' style='background-color:#CCC; border:1px solid #ddd; border-bottom:1px solid #ddd'>
                                                    <div class='col-xs-12 col-sm-12 col-md-12' >
                                                        <div class=''> 
                                                            <h5 style='text-align: center;padding-top: 7px;font-weight: bold;'> For SKYZEN </h5>                                               
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <div class='row' style='padding-top: 67px;'>
                                                    <div class='col-xs-12 col-sm-12 col-md-12'>
                                                         <div class='' style="float:right">
                                                            <h6>Authorised Signature</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" name='orderprocess' style="margin-top:10px" value="Order Process" class="btn btn-rounded btn-primary float-right order_Process">
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
<div id="orderprocessModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     
                     <h4 class="modal-title" style='color:red'>Alert !</h4>  
                </div>  
                <div class="modal-body">  
                    <h3>Please enter Qty less than Stock Qty</h3>
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
