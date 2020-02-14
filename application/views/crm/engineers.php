
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
                            <h2 class="pageheader-title">ISD </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Lists" class="breadcrumb-link">ISD</a></li>
                                       
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
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                
                                                <th scope="col">Retailer City</th>
                                                <th scope="col">Retailer Name</th>
                                                <th scope="col">ISD First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">PAYTM Mobile</th>
                                                <th scope="col">Address</th>

                                                <th scope="col">city</th>
                                                <th scope="col">State</th>
                                                <th scope="col">PIN Code</th>
                                                <th scope="col">Pan card</th>
                                                <th scope="col">Bank</th>
                                                <th scope="col">Bank Account No</th>
                                                <th scope="col">Bank IFSC No</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $i=1;
                                            foreach($se as $isd) {
                                                ?>
                                                <tr> 
                                                    
                                                    <td><?php echo $isd->retailer_city_name;?></td>
                                                    <td><?php echo $isd->retailer_name;?></td>
                                                    <td><?php echo $isd->first_name;?></td>
                                                    <td><?php echo $isd->last_name;?></td>
                                                    <td><?php echo $isd->mobile;?></td>
                                                    <td><?php echo $isd->paytm_mobile;?></td>
                                                    <td><?php echo $isd->address_one;?></td>
                                                    

                                                    <td><?php echo $isd->city;?></td>
                                                    <td><?php echo $isd->state;?></td>
                                                    <td><?php echo $isd->pin_code;?></td>
                                                    <td><?php echo $isd->pan_card;?></td>
                                                    <td><?php echo $isd->bank_name;?></td>
                                                    <td><?php echo $isd->account_number;?></td>
                                                    <td><?php echo $isd->ifsc_number;?></td>
                                                </tr>
                                                <?php
                                                $i++;
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


           