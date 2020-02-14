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
                            <h2 class="pageheader-title">Payment History</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Asp" class="breadcrumb-link">Asp</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Payment History</li>
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
                                
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12'>
                                        
                                        <div class=''> 
                                        <table class='table' id='paymentTable'>
                                            <thead>
                                                <tr>
                                                    <th>S No</th>
                                                    <th>Invoice Id</th>
                                                    <th>Outstanding Amount</th>
                                                    <th>Amount Paid</th>
                                                    <th>Amount Due</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $i = 1;
                                                if($payments){
                                                foreach($payments as $pay){
                                                     $invoice_No = $pay->payment_Id;
                                                    ?> 
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td>
            <a class='link_Asp' href='<?php echo base_url()?>Asp/viewInvoice/<?php echo $pay->payment_Id;?>'><?php echo $pay->payment_Id;?></a>
                                            </td>
                                            
                    <!--                                    <td>-->
                                                            
                    <!--                                        <a class='link_Asp' onclick='payment_View("<?php echo $invoice_No;?>")' href='javascript:void(0)'>-->
                    <!--<?php echo $pay->payment_Id?></a>-->
                    
                    <!--</td>-->
                                                        <td>
                                                        <span id='netAmt'><?php echo $pay->pay_Amount;?></span>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                       // echo $order->invoice_No;
//                                                                echo "select sum(Net_Amount) as total from asps_orders where invoice_No='$order->invoice_No'"; die;
                    $query = $this->db->query("select sum(payment_Amt) as total from asporder_payment where invoice_Id='$pay->payment_Id'");  
                    $res = $query->row();
                //   echo "<pre>";
                //   print_r($res); die;
                    if($res->total){
                        $tot = $res->total;
                    }else{
                        $tot = '0';
                    }
                                                 //$tot = $res->total;
                                                              
                                                        ?>  
                                                       <span id='payAmt'><a class='link_Asp' onclick='payment_View("<?php echo $invoice_No;?>")' href='javascript:void(0)'>
                    <?php echo $tot?></a>
                    
                    
                                                      </span>
                                                        </td>
                                                        <td>
                                                            <?php 
                $query = $this->db->query("select pay_Amount as nettotal from asp_Payment where payment_Id='$pay->payment_Id'");  
                    $res = $query->row();
                    
                    $net_Total = $res->nettotal; 
                    
                    
                    // echo "<pre>";
                    // print_r($res); 
                    
                    
                    //                           $net_Total = $res->nettotal;    
                    $query1 = $this->db->query("select sum(payment_Amt) as paytotal from asporder_payment where invoice_Id='$pay->payment_Id'");  
                    $res1 = $query1->row();
                    if($res1->paytotal){
                        $pay_Total = $res1->paytotal;
                    }else{
                        $pay_Total = '0';
                    }
                    
                //   echo "<pre>";
                //   print_r($res1); 
                                             // $pay_Total = $res1->paytotal;
                                         $gross_Total = $net_Total - $pay_Total;          
                                                                
                                                    ?>   
                                                      <input type='text' name='payment_Amt' id='payment_Amt' class='form-control payment_Amt' value='<?php echo $gross_Total;?>'>    
                                                    
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                if($gross_Total == '0'){
                                                                    ?> 
                                                        <button id='' class='btn btn-success'>Paid</button> 
                                                                    <?php
                                                                }else {
                                                                    ?> 
                                                       <button id='' class='btn btn-success pmt_Btn' value='<?php echo $pay->payment_Id;?>'>Payment</button> 
                                                                <?php
                                                                }
                                                    ?> 
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $i++;
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
        </div>


<div class="modal fade" id="aspamountModal" tabindex="-1" role="dialog" aria-labelledby="aspamountModal" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="aspamountModal">Asp Amount</h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <h5>Successfully paid the Amount</h5>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>



<div class="modal fade" id="paymentView" tabindex="-1" role="dialog" aria-labelledby="paymentView" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="paymentView">Payment History</h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <table class="table paymentlist">
                           <thead> 
                    <tr>
                       
                        <th>Date</th>
                         <th >Amount</th>
            </tr>
                               </thead>
                           <tbody>
                           </tbody>
    
</table>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>



<div class="modal fade" id="paymentView1" tabindex="-1" role="dialog" aria-labelledby="paymentView1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="paymentView1">Payment History</h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3>Still Payment has not done</h3>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>

