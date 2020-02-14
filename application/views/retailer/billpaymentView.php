
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Billings</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Retailer" class="breadcrumb-link">Retailer</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Billing Payment</span>
                                   
                                </div>
                                
                            </div>
                            <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Payment
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?php echo base_url()?>Retailer/salesexeBill">Sales Executive</a>
    <a class="dropdown-item" href="<?php echo base_url()?>Retailer/chequeBill">Cheque</a>
    <a class="dropdown-item" href="<?php echo base_url()?>Retailer/rtgsBill">RTGS</a>
  </div>
</div>
                               
                                 <div class=""> 
<!--                                     <a href="<?php echo base_url()?>Crm/aspCSV" class='btn btn-success'>Export CSV</a> -->
                              
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Cheque Number</th>
                                                <th scope="col">Invoice Number</th> 
                                                <th scope="col">Amount</th>
                                                <th scope="col">Cheque Issue Date</th>
                                                <th scope="col">Bank Name</th>
                                                <th scope="col">Bank Town</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php 
                                       $i = 1;
                                       if($billpays){
                                        foreach($billpays as $bill){
                                            ?> 
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $bill->cheque_number;?></td>
                                                <td><?php echo $bill->order_id;?></td>
                                                <td><?php echo $bill->cheque_amt;?></td> 
                                                <td><?php echo $bill->cheque_issue_date;?></td>
                                                <td><?php echo $bill->bank_name;?></td>
                                                <td><?php echo $bill->bank_town;?></td>
                                                <td><?php echo $bill->status;?></td>
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
