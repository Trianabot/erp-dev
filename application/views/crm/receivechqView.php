
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Crm</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">Crm</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Received Cheque Lists</span>
                                    
                                </div>
                            </div>
                               

                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Dist Name</th>
                                                <th scope="col">Cheque Number</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $i = 1;
                                        if($cheques){
                                        foreach($cheques as $chq){
                                        ?> 
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $chq->retailer_name;?></td>
                                                <td><?php echo $chq->cheque_number;?></td>
                                                <td><?php echo $chq->totalAmount;?></td>
                                                <td>
                                                <a class="update_Asp" onclick="paid_Cheque(<?php echo $chq->cheque_number;?>)" href="javascript:void(0)">Paid</a>
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

<div class="modal fade" id="cheqreceive_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class='row'>
                        <div class='col-xs-12 col-sm-12 col-md-12'>
                          <div class='table table-responsive'>
                        <table class='table' id='chqreceiveTable'>
                            <tbody>
                            </tbody>
                          </table>
                      </div>
                          </div>
                      </div>
                      
<!--
                      <div class='row'>
                        <div class='col-xs-12 col-sm-6 col-md-6'>
                            <h3>Cheque Details</h3>
                                <div class='row'>
                                    
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <h5>Cheque Number</h5>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <span id="cheq_No"></span>
                                    </div>
                                </div>
                                <div class='row'>
                                    
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <h5>Cheque Amount</h5>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <span id="cheq_Amt"></span>
                                    </div>
                                </div>
                          </div>
                          <div class='col-xs-12 col-sm-6 col-md-6'>
                              <h3>Courier Details</h3>
                          </div>
                      </div>
-->
                      <form role="form" action="" id="form" class="form-horizontal">
                           <input type="hidden" id="chequeNumber" value="" name="invoice_Nos[]"/>
                          <input type='hidden' id='chequeNo' name='cheque_No'>
                        
                       </form>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" onclick="paidCheque()" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>