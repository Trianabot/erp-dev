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
                                <h2 class="pageheader-title">Invoice View</h2>
                                
                                 <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">Crm</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Invoice History</li>
                                    </ol>
                                </nav>
                            </div>
                            </div>
                        </div>
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-4 text-right">
                            <a href="<?php echo base_url()?>Crm/aspPayment" > <button style="font-size:12px; float:right">Previous <i class="fa fa-arrow-left"></i></button></a>
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
                                    
                                     
                                   <div class='row'>
                    <div class='col-xs-12 col-sm-3 col-md-3'>
                        <h3>From Date</h3>
                        <?php echo $invoice->from_Date;?>
                    </div>
                    <div class='col-xs-12 col-sm-3 col-md-3'>
                        <h3>To Date</h3>
                        <?php echo $invoice->to_Date;?>
                    </div>
                    <div class='col-xs-12 col-sm-3 col-md-3'>
                        <h3>Asp Name</h3>
                        <?php 
                        $query = $this->db->query("select * from users where id=$invoice->asp_Id");
                        $res = $query->row();
                        echo $res->userdept_Name; 
                        ?>
                    </div>
                    <div class='col-xs-12 col-sm-3 col-md-3'>
                        <h3>Outstanding Invoice Amount</h3>
                        <?php echo $invoice->pay_Amount;?>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-xs-12 col-sm-12 col-md-12'>
                            <h3>Ticket Details</h3>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-xs-12 col-sm-12 col-md-12'>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th scope="col">S No</th>
                                    <th scope="col">Ticket Id</th>
                                    <th scope="col">Part Name</th>
                                    <th scope="col">Part Cost</th>
                                    <th scope="col">Service Engineer Cost</th>
                                    <th scope="col">Crm Amount</th>
                                    <th scope="col">Asp Amount</th>
                                    <th scope="col">Total Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $i = 1; 
                            $totalAmt = 0;                                           
                            if($tickets){
//                                echo "<pre>";
//                                print_r($tickets); die; 
                            foreach($tickets as $ticket){
                             ?> 
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $ticket->ticket_Id;?></td>
                                    <td><?php echo $ticket->prod_Name;?></td>
                                    <td><?php echo $ticket->part_cost;?></td>
                                    <td><?php echo $ticket->service_engineer_fee;?></td>
                                    <td><?php echo $ticket->crm_Amount;?></td>
                                    <td><?php echo $ticket->amt_textbox;?></td>
                                    <td><?php 
                                
          echo $total = (int)$ticket->amt_textbox + (int)$ticket->total_cost + (int)$ticket->service_engineer_fee + (int)$ticket->crm_Amount;
                                     $totalAmt += $total
                                        ?></td>
                                </tr>    
                            <?php
                            $i++;
                            }
                                ?> 
                                 <tr>
                                 <td colspan="7" style='text-align:right'>Total</td>
                                     <td><?php echo $totalAmt;?></td>
                                </tr>
                                <?php
                            }    
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class='row'>
                    <div class='col-xs-12 col-sm-12 col-md-12'>
                        <h3>Order Details</h3>
                    </div>
                </div>
                
                <div class='row'>
                    <div class='col-xs-12 col-sm-12 col-md-12'>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th scope='col'>S No</th>
                                    <th scope='col'>Invoice No</th>
                                    <th scope='col'>Part Name</th>
                                    <th scope='col'>Part Cost</th>
                                    <th scope='col'>Delivered Qty</th>
                                    <th scope='col'>Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $i = 1;
                            $sumtot = 0;
                            if($orders){
                            foreach($orders as $order){
                                ?> 
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $order->invoice_No;?></td>
                                    <td><?php echo $order->Part_Name;?></td>
                                    <td><?php echo $order->Unit_Rate;?></td>
                                    <td><?php echo $order->delivered_Qty;?></td>
                                    <td><?php 
                                
                                    echo $total = (int)$order->Unit_Rate * (int)$order->delivered_Qty;
                                         $sumtot += $total;
                                    
                                        ?>
                                    
                                    </td>
                                  
                                </tr>
                               
                                <?php
                                $i++;
                            }
                                ?> 
                                 <tr>
                                 <td colspan="5" style='text-align:right'>Total</td>
                                     <td><?php echo $sumtot;?></td>
                                </tr>
                                <?php
                            }    
                            ?>
                            </tbody>
                        </table>
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