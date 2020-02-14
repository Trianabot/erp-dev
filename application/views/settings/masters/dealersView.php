
        
   

<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Dealers  </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Settings" class="breadcrumb-link">Settings</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Dealers Lists</li>
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
                            <span class="table-title">Dealer Lists</span>
                               
                                <a href="<?php echo base_url()?>Setting/newDealers"> <h5 class="card-header1">  Add new Dealers </h5> </a>
                                </div>
                            </div>
                               
<!--                                 <div class=""> <a href="<?php echo base_url()?>Setting/creditnoteCSV"> <i class="fas fa-file-excel" title="Export CSV" style="font-size:30px"></i> </a> </div>-->
                               
                                <div class="card-body">
                                    <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Dealer Name</th>
                                               <th scope="col">City Name</th>   
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i = 1;
                                            if($dealers){
                                                foreach($dealers as $dealer){
                                                    ?> 
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $dealer->Dealer_Name;?></td>
                                                        <td><?php echo $dealer->City;?></td>
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
