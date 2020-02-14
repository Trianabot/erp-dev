
        
   
        
        
        
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        

<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Credit Note  </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Settings" class="breadcrumb-link">Settings</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Credit Notes Lists</li>
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
                            <span class="table-title">Credit Note Lists</span>
                               
                                <a href="<?php echo base_url()?>Setting/newcreditNote"> <h5 class="card-header1">  Add new credit </h5> </a>
                                </div>
                            </div>
                               
                                 <div class=""> <a href="<?php echo base_url()?>Setting/creditnoteCSV"> <i class="fas fa-file-excel" title="Export CSV" style="font-size:30px"></i> </a> </div>
                               
                                <div class="card-body">
                                    <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col"> Date </th>
                                                <th scope="col">Voucher No</th>
                                               <th scope="col">Branch</th>   
                                                <th scope="col">Party</th>
                                                <th scope="col">Net Amount</th>
                                                <th scope="col">Division</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if($creditNotes){
                                                foreach($creditNotes as $note){
                                                ?> 
                                                <tr>
                                                    <td><?php echo $note->credit_Date;?></td>
                                                    <td><?php echo $note->credit_VoucherNo;?></td>
                                                    <td><?php echo $note->credit_Branch;?></td>
                                                    <td><?php echo $note->credit_Party;?></td>
                                                    <td><?php echo $note->credit_Netamount;?></td>
                                                    <td><?php echo $note->credit_Division;?></td>
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
