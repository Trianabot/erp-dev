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
                                                        <div>Party Name</div><br>
                                                        <div>Party Address </div>
                                                        <div>City</div>
                                                        <div>Phone No : </div> 
                                                    </div>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'> 
                                                        <div><?php echo $aspDetail->userdept_Name;?></div><br>
                                                        <div><?php echo $aspDetail->address;?></div>
                                                        <div><?php echo $aspDetail->user_City;?></div>
                                                        <div><?php echo $aspDetail->contact_Number;?></div>
                                                    </div>
                                                         
                                                </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                
                                        
                                                <div class='row'>
                                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                                        <div>Mode &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</div>
                                                        <div>Voucher No : </div>
                                                        <div>Invoice No : </div>
                                                        <div>Shipment No : </div>
                                                        <div>MR No : </div>
                                                        <div>Date : </div>
                                                        <div>Place of Supply : </div>
                                                        <div>State : </div>
                                                        <div>State Code : </div>
                                                        <div>GSTIN No : </div>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-8 col-md-8'>
                                                        <div>MATERIAL RECEIVE</div>
                                                        <div><?php echo $shipmentDetail->voucher_Id;?></div>
                                                        <div><?php echo $shipmentDetail->order_Id;?></div>
                                                        <div><?php echo $shipmentDetail->shipment_Id;?></div>
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
                                                <div><?php echo $shipmentDetail->shipping_Via;?></div>
                                        </div>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                                <div>Courier No</div>
                                                <div><?php echo $shipmentDetail->courier_No;?></div>
                                        </div>
                                        <div class='col-xs-12 col-sm-4 col-md-4'>
                                                <div>Additional Details</div>
                                                <div><?php echo $shipmentDetail->additional_Detail;?></div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class='' style='border:1px solid black'>
                                        <div class='row'>
                                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                                
                                                    <div>LR Number</div>
                                                    <?php echo $mrdetail->lr_Number;?>
                                                
                                            </div>
                                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                                
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
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Unit Rate</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">CD</th>
                                                        <th colspan="3" style="border:1px solid black; text-align:center">GST</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Amount</th>
                                                       
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
            $i =1; 
            if($asporderproducts){
                foreach($asporderproducts as $product){
                    ?> 
                       <tr style='text-align:center'>
                                        <td><?php echo $i;?></td>

                                        <td><?php echo $product->Part_Name;?></td>
                                        <td></td>
                                        <td><?php echo $product->Quantity;?></td>
                                        <td><?php echo $product->delivered_Qty;?></td>
                                        <td><?php echo $product->materialreceive_Qty;?></td>
                                        <td><?php echo $product->Unit_Rate;?></td>
                                        <td></td> 
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><?php echo $product->Net_Amount;?></td>
                                        <td></td>
                                        </tr>  
                                    
                    <?php
                    $i++;
                }
            }                                        
            ?>
          
             
                                        
                    
                                                    <tr>
                                                        <td colspan="4" style="text-align:right;border:1px solid black">QTY</td>
                                                       
                                                        <td style='border:1px solid black'>
                                                            
                                                            <span id='totalDemand'></span>
                                                        </td>
                                                        <td style='border:1px solid black'></td>
                                                        <td style='border:1px solid black'></td>
                                                        <td colspan="3" style="text-align:right;border:1px solid black">Gross Amount</td>
                                                        <td colspan='2' style='border:1px solid black'>
                                                        
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

