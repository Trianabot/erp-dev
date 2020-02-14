
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
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Asp" class="breadcrumb-link">Asp</a></li>
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
                            <span class="table-title">Billing Lists</span>
                                   
                                </div>
                                <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Payment
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?php echo base_url()?>Asp/salesexeBill">Sales Executive</a>
    <a class="dropdown-item" href="<?php echo base_url()?>Asp/chequeBill">Cheque</a>
    <a class="dropdown-item" href="<?php echo base_url()?>Asp/rtgsBill">RTGS</a>
  </div>
</div>
                            </div>
                               
                                 <div class=""> 
<!--                                     <a href="<?php echo base_url()?>Crm/aspCSV" class='btn btn-success'>Export CSV</a> -->
                               
                                </div>
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Billing Date</th>
                                                <th scope="col">Invoice Number</th> 
                                                <th scope="col">Amount</th>
                                                <th scope="col">Credit Period</th>
                                                <th scope="col">Due Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $i = 1;
                                        if($billings){
                                            foreach($billings as $bill){
                                                ?> 
                                                <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $bill->bill_date;?></td>
                                                    <td><?php echo $bill->invoice_number;?></td>
                                                    <td><?php echo $bill->amount;?></td>
                                                    <td><?php echo $bill->credit_period;?></td>
                                                    <td><?php echo $bill->due_date;?></td>
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
