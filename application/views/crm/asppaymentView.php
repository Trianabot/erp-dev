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
                            <h2 class="pageheader-title">ASP Payment</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">ASP Payment</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Asp Payment</span>
                               
                                   
                                </div>
                            </div>
                               
                               <?php 
                        $attributes = array('id' => 'invoicepayform');
                        echo form_open(base_url()."Crm/invoiceGenerate",$attributes);?>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-3 col-md-3'>
                                        <div class='form-group'>
                                            <label>From Date</label>
                                             <input type='date' name='invfromDate' id='invfromDate' class='form-control' required>
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-3 col-md-3'>
                                        <div class='form-group'>
                                            <label>To Date</label>
                                            <input type='date' name='invtoDate' id='invtoDate' class='form-control' required>
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-3 col-md-3'>
                                        <div class='form-group'>
                                            <label>Select Asp</label>
                                            <select name='asp_Name' class='form-control' required>
                                                <option value=''>Select Asp</option>
                                             <?php 
                                                if($asps){
                                                foreach($asps as $asp){
                                                    ?> 
                                                    <option value='<?php echo $asp->id?>'><?php echo $asp->userdept_Name;?></option>
                                                    <?php
                                                }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-3 col-md-3'>
                                        <div class='form-group'>
                                            <input type='Submit' name='invoicegenSub' value='Submit' class='btn btn-primary'>
                                        </div>
                                    </div>
                                </div>
                                <?php echo form_close();?>
                               
                               
                                <div class="card-body1">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">S No</th>
                                                <th scope="col">Payment Id</th>
                                                 <th scope="col">Invoice Generate Date</th>
                                                <th scope="col">Asp Name</th>  
                                                <th scope="col">Outstanding Invoice Amount</th>
                                                <th scope='col'>Amount Paid</th>
                                                <th scope="col">Amount Due</th>
                                                 <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $i =1 ;
                                        if($payments){
                                            foreach($payments as $pay){
                                                $invoice_No = $pay->payment_Id;
                                                ?> 
                                                <tr>
                                                    <td><?php echo $i;?></td>
                    <!--                                <td><a class='link_Asp' onclick='payment_View("<?php echo $invoice_No;?>")' href='javascript:void(0)'>-->
                    <!--<?php echo $pay->payment_Id;?></a> </td>-->
                    <td>
            <a class='link_Asp' href='<?php echo base_url()?>Crm/viewInvoice/<?php echo $pay->payment_Id;?>'><?php echo $pay->payment_Id;?></a>
                                            </td>
                                            
                    <td><?php 
                                                    $genDate = $pay->paymentgen_Date;
                                                    echo date('d-m-Y',$genDate);
                                                        ?></td>
                                                    <td><?php echo $pay->userdept_Name;?></td>
                                                    <td><?php echo $pay->pay_Amount;?></td>
                                                    <td><?php 
                                                    $query = $this->db->query("select sum(payment_Amt) as total from asporder_payment where invoice_Id='$pay->payment_Id'");  
                    $res = $query->row();
                   
                                                 $tot = $res->total;
                
                                                    ?>
                                                    <a class='link_Asp' onclick='payment_View("<?php echo $invoice_No;?>")' href='javascript:void(0)'>
                    <?php echo $tot;?></a>
                    </td>
                                                    <td>
                                                        <?php 
               
                                              $net_Total = $pay->pay_Amount;    
                    $query1 = $this->db->query("select sum(payment_Amt) as paytotal from asporder_payment where invoice_Id='$pay->payment_Id'");  
                    $res1 = $query1->row();
                   
                                             $pay_Total = $res1->paytotal;
                                           echo $gross_Total = $net_Total - $pay_Total;          
                                                                
                                                    ?>
                                                    </td>
                                                    <td>
                                                    
                    <a class='invoice_delete' data-emp-id='<?php echo $pay->payment_Id;?>' href='javascript:void(0)'><i class="fas fa-trash" title='Delete'></i></a>
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
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
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
            
            <div class="modal fade" id="invoiceModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Payment Status</h4>
                </div>
                <div class="modal-body">
                    <?php echo "<h3>Invoice has been generated for "."<h3 style='color:green'>".$this->session->userdata('AspName')."</h3>"."</h3>"?>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
           
           