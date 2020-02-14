
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row" style="width:127%;">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Cheque Tracking</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item">Cheque Tracking</li>
                                       
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
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                
                            </div>
                                
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="chequetrackTable">
                                        <thead>
                                            <tr>
                                                
                                                <th scope="col"> S No </th>
                                                <th scope="col">Retailer Name</th>
                                                <th scope="col">Cheque Number</th> 
                                                <th scope="col">Cheque Date</th>     
                                                <th scope="col">Amount</th>
                                                <th scope="col">Courier Name</th>
                                                <th scope="col">POD No</th>
                                                <th scope="col">Courier Date</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $i = 1;
                                        if($cheques){
                                           foreach($cheques as $cheque){
                                             ?> 
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $cheque->userdept_Name;?></td>
                                                <td><?php echo $cheque->cheque_number;?></td>
                                                <td><?php echo $cheque->cheque_issue_date;?></td>
                                                <td><?php echo $cheque->cheque_amt;?></td>
                                                <td><?php echo $cheque->courier_name;?></td>
                                                <td><?php echo $cheque->courier_no;?></td>
                                                <td><?php echo $cheque->courier_date;?></td>
<!--                                                <td><?php echo $cheque->status?></td>-->
                                                <td><?php 
                                                    if($cheque->status == 'Paid'){
                                                        echo $cheque->status;
                                                    }else {
                                                        ?> 
                            <a class='cheque_Pay' data-emp-id='<?php echo $cheque->cheque_number?>' href='javascript:void(0)'>Due</a>
                                                    <?php
                                                    }
                                                    ?></td>
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

                
            <!-- ============================================================== -->
            <!-- footer -->


           