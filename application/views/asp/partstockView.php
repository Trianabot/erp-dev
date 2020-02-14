
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Part Stock</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Asp" class="breadcrumb-link">Asp</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Parts Stock</li>
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
                                        <table class='table'>
                                            <thead>
                                                <tr>
                                                    <th>S No</th>
                                                    <th>Part Name</th>
                                                    <th>Good Qty</th>
                                                    <th>Defective Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php 
                                                $i =1; 
                                                if($partsstock){
                                                    foreach($partsstock as $part){
                                                        ?> 
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $part->part_Name;?></td>
                                                        <td><?php echo $part->good_Quantity;?></td>
                                                        <td><?php echo $part->bad_Quantity;?></td>
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


