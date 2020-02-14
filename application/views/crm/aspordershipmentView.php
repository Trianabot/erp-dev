<style>
    .asporderTable{
        border:1px solid #ddd;
       
    }
    .formError{
        color:red !important;
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
                                    
                                     
                                    <?php echo form_open(base_url()."Crm/asporderShipment/".$order->Voucher_No);?>
                                    
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
                                                    <div class='col-xs-12 col-sm-6 col-md-6' style="padding-left:25px;"> 
                                                        <div>Party Name</div> <br> <br>
                                                        <div>Party Address </div>
                                                        <!--<div>City</div>-->
                                                        <div>Phone No : </div> 
                                                    </div>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'> 
                                                         <input type='hidden' name='asp_Id' value='<?php echo $asp->id;?>'>
                                                        <div><?php echo $asp->userdept_Name;?></div> <br> <br>
                                                        
                                                        <div><?php echo $asp-> user_City;?> <span>&nbsp;</span></div>
                                                        <div><?php echo $asp->contact_Number;?> <span> &nbsp;</span></div>
                                                    </div>
                                                         
                                                </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                
                                        
                                                <div class='row'>
                                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                                        <div>Mode :</div>
                                                        <div>Order No : </div>
                                                        <div>Date : </div>
                                                        <div>Place of Supply : </div>
                                                        <div>State : </div>
                                                        <div>State Code : </div>
                                                        <div>GSTIN No : </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-8 col-md-8'>
                                                        <div>DELIVEY INVOICE</div>
                                                        <div><input type='hidden' name='voucher_Id' value='<?php echo $orderId->voucher_No;?>'></div>
                                                        <div><?php echo $order->Voucher_No;?>
                                                        <input type='hidden' name='order_Id' value='<?php echo $orderId->ordergen_Id;?>'>
                                                        </div>
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
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid #ddd">Demand Qty</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid #ddd">Dispatched Qty</th>
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
                                                $i=1;
                                                if($orders){
//                                                    echo "<pre>";
//                                                    print_r($orders); die; 
                                                    foreach($orders as $order){
                                                        
                                                       ?> 
                                     <input type='hidden' name='voucherNos[]' value='<?php echo $order->Voucher_No;?>'> 
                                                        <tr>
                                                            <td><?php echo $i;?></td>
                                                            <td><?php echo $order->Part_Name;?></td>
                                                            <td></td>
                                                            <td><?php echo $order->Quantity;?></td>
                                                            <td><?php echo $order->delivered_Qty;?></td>
                                                            <td><?php echo $order->Unit_Rate;?></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td><?php 
                                                            $dispatchQty = $order->delivered_Qty;
                                                            $unitRate = $order->Unit_Rate;
                                                            echo $dispatchQty * $unitRate;
                                                            // $qtysum = 0;
                                                            // echo $qtysum += $order->delivered_Qty;
                                                            
                                                                ?></td>
                                                            <td></td>
                                                        </tr>
                                                        <?php
                                                        $i++;
                                                    }
                                                }    
                                                ?>
                                                    <tr>
                                                        <td colspan="4" style="text-align:right;border:1px solid #ddd">QTY</td>
                                                       
                                                        <td style='border:1px solid #ddd'>
                    
                                                            <?php 
                                                            $qtysum = 0;
                                                            if($orders){
                                                                foreach($orders as $order){
                                                                $qtysum += $order->delivered_Qty;
                                                            }
                                                            }
                                                            echo $qtysum;
                                                            ?>
                                                        </td>
                                                        <td style='border:1px solid #ddd'></td>
                                                        <td style='border:1px solid #ddd'></td>
                                                        <td colspan="3" style="text-align:right;border:1px solid #ddd">Gross Amount</td>
                                                        <td colspan='2' style='border:1px solid #ddd'>
                                                        
                                                            <?php 
                                                            $amountsum = 0;
                                                            if($orders){
                                                                foreach($orders as $order){
                                                                $amountsum += $order->Net_Amount;
                                                            }
                                                            }
                                                            echo $amountsum;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2" style='border:1px solid #ddd'>Taxable Amount</td>
                                                        <td style='border:1px solid #ddd'>CGST</td>
                                                        <td style='border:1px solid #ddd'>SGCST</td>
                                                        <td style='border:1px solid #ddd'>IGST</td>
                                                        <td colspan="4"></td>
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
                                    
                                    <div class='' style='border: 1px solid #ddd;margin: 0px;margin-bottom:6px;'> 
                                    <div class='row'>
                                            <div class='col-xs-12 col-sm-12 col-md-12'>
                                                <span class="formError" style="float:left !important;magin:3px;">Please fill below details</span>
                                                <h3 style='text-align:center'>Shipping Details</h3>
                                            </div>
                                        </div>
                                    
                                    <div class='row' >
                                        
                                        
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                            <label>Shipping VIA <span class="formError">*</span></label>
                                            <input type='text' name='shipping_Via' class='form-control' required>
                                        </div>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                            <label>Courier No <span class="formError">*</span></label>
                                            <input type='text' name='courier_No' class='form-control' required>
                                        </div>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                            <label>Additional Details <span class="formError">*</span></label>
                                            <input type='text' name='additional_Detail' class='form-control'>
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
                                                         <div class=''>
                                                            <h6 style="float:right">Authorised Signature</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" style="margin-top:10px" name='shipmentSubmit' value="Submit" class="btn btn-rounded btn-primary float-right">
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

