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
                    
                    
                    <div class='row'>   
                        <div class='col-xs-12 col-sm-12 col-md-12'>
                            <div class='card'>
                                <div class='card-body'>
                                    
                                    <div class='content' id="content">
                                        
                                        
                                    <div class='invoice_Head' style='display: block; background-color: #CCC;text-align: center;border: 1px solid black;'> 
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-12 col-md-12'>
                                        <h5 style='font-size: 20px; font-weight: bold; text-align: center;margin-top: 11px;'>SKYZEN</h5>
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
                                                     <div class='col-xs-12 col-sm-6 col-md-6'> 
                                                        <div>Party Name :<?php echo $asp->userdept_Name;?></div> <br> <br>
                                                        <div>Party Contact Person :<?php echo $asp->contact_Person;?> </div>
                                                        <div>City :<?php echo $asp->user_City;?></div>
                                                        <div>Phone No :<?php echo $asp->contact_Number;?></div> 
                                                         <div>Alternative Phone No :<?php echo $asp->alternatecontact_Number;?></div> 
                                                    </div>
                                        </div>
                                            </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border-left:1px solid black;background-color:#CCC;'>
                                            <div class=''>                                             
                                                    <h3 style='text-align: center;padding-top: 7px;font-weight: bold;'>Shipping Details </h3>                                                
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    
                                    <div class='' style='border:1px solid black'> 
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6' style='border-right:1px solid black'>
                                                <div class='row'> 
                                                   
                                                    <div class='col-xs-12 col-sm-6 col-md-6'> 
                                                        <div>  </div> <br> <br>
                                                        <div></div>
                                                        <div> </div>
                                                    </div>
                                                         
                                                </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                
                                        
                                                <div class='row'>
                                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                                        <div>Mode &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: Shipped</div>
                                                        <div>Invoice No : <?php echo $shipment->shipment_Id ;?> </div>
                                                        <div>Date  :<?php echo $shipment->shipment_Date ;?></div>
                                                        <div>Couriar Via :<?php echo $shipment->shipping_Via ;?> </div>
                                                       
                                                    
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
                                                    <tr style="border:1px solid black">
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center; border:1px solid black">S No</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Particular</th>
                                                        <th style="border:1px solid black">HSN</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Demand Qty</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Dispatched Qty</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">UnitPrice</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">CD</th>
                                                        <th colspan="3" style="border:1px solid black; text-align:center">GST</th>
                                                        <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black">Amount</th>
                                                       <th rowspan="2" style="vertical-align : middle;text-align:center;border:1px solid black"></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="border:1px solid black">Code</th>
                                                        <th style="border:1px solid black">CGST</th>
                                                        <th style="border:1px solid black">SGST</th>
                                                        <th style="border:1px solid black">IGST</th>
                                                    </tr>
                                                </thead>   
                                                <tbody>
                                                    <?php  /* ?> 
                                                $i =1; 
                                                if($orders){
                                                foreach($orders as $order){
                                                    ?> 
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $order->prodpart_Name;?></td>
                                                        <td><?php echo $order->proddemand_Qty;?></td>
                                                        <td><?php echo $order->produnit_Rate;?></td>
                                                        <td><?php echo $order->prodnet_Amount;?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                } <?php */
                                                ?>
                                                    
                                                    <?php 
                                                    
                                                    $i =0; 
                                                    
                                                          //echo "<pre>";
                                                         //print_r($order); die; 
                                                        foreach($order as $d){
                                                            
                                                            $part_Id = $d->Part_Name;
                                                            $pname = urldecode($part_Id);
                                                            //print_r($part_Id);die;
                                        $query = $this->db->query("select * from skyzenpart_master where part_Name='$pname'");
                                        $result = $query->row();
                                        $partName = $result->part_Name;
                                      
                                        $unitRate = $result->partunit_Rate;
                                                            ?> 
                                                            <tr style=''>
                                                        <td><?php echo $i+1;?></td>                                                        
                                                        <td><?php echo $d->Part_Name; ?></td>
                                                        <td></td>
                                                        <td><?php echo $d->Quantity;?></td> 
                                                        <td><?php echo $d->delivered_Qty;?></td>
                                                        <td><?php echo $d->Unit_Rate;?></td>
                                                        
                                                       
                                                        <td></td>
                                                        <td></td><td></td>
                                                        <td></td>
                                                        <td><?php echo $d->Net_Amount; ?></td>
                                                            <td style='border:1px solid black; border-left:none';></td>
                                                        </tr>
                                                            <?php
                                                            $i++;
                                                        }
                                                   
                                                    ?>
                                                
                                                    <?php 
                                                    
                                                    
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
                                                        <td colspan="12" style='border:1px solid black'><span id='words'></span></td>
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
                                            <a href="javascript:clickaspprint()" style="font-size:20px;">  <button class="btn btn-rounded btn-primary float-right">Print</button> </a>
                                        </div>
                                    </div>
                                    
                                  
                                    
                                </div>
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


    