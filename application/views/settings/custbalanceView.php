
        
   
        
    
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Customer Balance</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
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
                            <span class="table-title">Customer Balance Lists</span>
                               
                                <a href="<?php echo base_url()?>Setting/addcustomerbalance"> <h5 class="card-header1">  Add new</h5> </a>
                                </div>
                            </div>
                               
                                 <div class=""> <a href="<?php echo base_url()?>Setting/custbalanceCSV"> <i class="fas fa-file-excel" title="Export CSV" style="font-size:30px"></i> </a> </div>
                               
                                <div class="card-body">
                                    <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Party Account</th>
                                                <th scope="col">Debit</th>   
                                                <th scope="col">Credit</th>
                                                <th scope="col">Balance</th>
                                                <th scope="col"> < 30 </th>
                                                <th scope="col"> < 45 </th>
                                                <th scope="col"> < 60 </th>
                                                <th scope="col"> < 90 </th>
                                                <th scope="col"> > 30 </th>
                                                <th scope="col"> > 45 </th>
                                                <th scope="col"> > 60 </th>
                                                <th scope="col"> > 90 </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                         $i = 1;
                                         if($balances){
                                            foreach($balances as $balance){
                                                ?> 
                                                <tr> 
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $balance->Account;?></td>
                                                    <td><?php echo $balance->Debit;?></td>
                                                    <td><?php echo $balance->Credit;?></td>
                                                    <td><?php echo $balance->Balance;?></td>
                                                    <td><?php echo $balance->lessthan30;?></td>
                                                    <td><?php echo $balance->lessthan45;?></td>
                                                    <td><?php echo $balance->lessthan60;?></td>
                                                    <td><?php echo $balance->lessthan90;?></td>
                                                    <td><?php echo $balance->greaterthan30;?></td>
                                                    <td><?php echo $balance->greaterthan45;?></td>
                                                    <td><?php echo $balance->greaterthan60;?></td>
                                                    <td><?php echo $balance->greaterthan90;?></td>
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