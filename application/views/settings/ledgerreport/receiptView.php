
        
   
        

<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Receipt</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Settings</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Receipt Lists</li>
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
                            <span class="table-title">Receipt Lists</span>
                               
                                <a href="<?php echo base_url()?>Setting/addReceipt"> <h5 class="card-header1">  Add Receipt </h5> </a>
                                </div>
                            </div>
                            
                             <div class=""> 
                                 <a href="<?php echo base_url()?>Setting/receiptscsvExport"> <i class="fas fa-file-excel" title="Export CSV" style="font-size:30px"></i> </a>    
                                </div>     
                                
                               
                                <div class="card-body">
                                    <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col"> Date </th>
                                                <th scope="col">Voucher No</th>
                                               <th scope="col">Branch</th>   
                                                <th scope="col">Party</th>
                                                <th scope="col">Purchase Account </th>
                                                <th scope="col">Product </th>
                                                <th scope="col">Amount</th>  
                                                <th scope="col">Division</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                           
                                           <?php 
                                            if($receipts){
                                                foreach($receipts as $receipt){
                                                ?> 
                                                <tr>
                                                    <td><?php echo $receipt->receipt_Date;?></td>
                                                    <td><?php echo $receipt->receipt_Voucherno;?></td>
                                                    <td><?php echo $receipt->receipt_Mode;?></td>
                                                    <td><?php echo $receipt->receipt_Branch;?></td>
                                                    <td><?php echo $receipt->receipt_Party;?></td>
                                                    <td><?php echo $receipt->receipt_Account;?></td>
                                                    <td><?php echo $receipt->receipt_Netamt;?></td>
                                                    <td><?php echo $receipt->receipt_Division;?></td>
                                                </tr>
                                                <?php
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
