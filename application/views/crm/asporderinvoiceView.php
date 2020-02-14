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
                            <a href="<?php echo base_url()?>Crm/asporders" > <button class="btn btn-rounded btn-primary float-right"> Previous </button> </a>
                        </div>
                    </div>
                    
                    <div class='row'>   
                        <div class='col-xs-12 col-sm-12 col-md-12'>
                            <div class='card'>
                                <div class='card-body'>
                                    
                                    <div class='content' id="content">
                                        
                                        
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
                                                        <div>Party Name</div> 
                                                        <div>Party Address </div> 
                                                        <div>City</div>
                                                        <div>Phone No : </div> 
                                                    </div>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'> 
                                                        <div> <?php echo $asp_Detail->userdept_Name;?>  </div> 
                                                        <div><?php echo $asp_Detail->address;?></div> 
                                                        <div><?php echo $asp_Detail->user_City;?></div>
                                                        <div><?php echo $asp_Detail->contact_Number;?></div>
                                                    </div>
                                                         
                                                </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                
                                        
                                                <div class='row'>
                                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                                        <div>Mode :</div>
                                                        <div>Voucher No : </div>
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
                                                        <div><?php echo $order->invoice_No;?></div>
                                                        <div><?php 
                                           $date = $order->ordergenerate_Date;
                                           echo date('d-M-Y', $date);
                                            ?></div>
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
                                                    $i =1; 
                                                    if($orders){
//                                                        echo "<pre>";
//                                                        print_r($orders); die; 
                                                        foreach($orders as $order){
                                                            
                                                            
                                                            ?> 
                                                            <tr style='text-align:center'>
                                                        <td><?php echo $i;?></td>                                                        
                                                        <td><?php echo $order->Part_Name;?></td>
                                                        <td></td>
                                                        <td>
                                                            
                                                            <?php  
                                                            $part_Id = $order->Part_Name;
                                                            //echo $part_Id; die; 
                                        $query = $this->db->query("select * from skyzenpart_stock where part_Name='$part_Id'");
                                        $result = $query->row();
                                                            if($result){
                                                                $stockQty = $result->good_Quantity;
                                                                 echo $stockQty;
                                                            }else {
                                                                echo "No Stock";
                                                            }
//                                                            echo "<pre>";
//                                                            print_r($result); die; 
                                                    
                                                          
                                                            ?>
                                                                </td>
                                                        <td><?php echo $order->Quantity;?></td>
                                                        <td><?php echo $order->delivered_Qty;?></td>
                                                        <td><?php echo $order->Unit_Rate;?></td>
                                                        <td></td> 
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><?php echo $order->Net_Amount;?></td>
                                                            <td style='border:1px solid #ddd; border-left:none';></td>
                                                        </tr>
                                                            <?php
                                                            $i++;
                                                        }
                                                    }
                                                    ?>
                                                
                                                    
                                                    
                                                    
                                                    
             
                                                    <tr>
                                                        <td colspan="4" style="text-align:right;border:1px solid #ddd">QTY</td>
                                                       
                                                        <td style='border:1px solid #ddd'>
                                                            
                                                            <span id='totalDemand'></span>
                                                        </td>
                                                        <td style='border:1px solid #ddd'></td>
                                                        <td style='border:1px solid #ddd'></td>
                                                        <td colspan="3" style="text-align:right;border:1px solid #ddd">Gross Amount</td>
                                                        <td colspan='2' style='border:1px solid #ddd'>
                                                        
                                                            <span id='totalAmount'></span>
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
                                            <a href="javascript:clickaspprint()" style="font-size:20px;">  <button class="btn btn-rounded btn-primary float-right" style="margin-top:6px;">Print</button> </a>
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


    <script>
        function clickaspprint(){
           var printContents = document.getElementById('content').innerHTML;

    //var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    //document.body.innerHTML = originalContents;
        }
    </script>