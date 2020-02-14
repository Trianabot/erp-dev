

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Voucher Types </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Settings</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Voucher Types Lists</li>
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
                                <span class="table-title">Roles Lists</span>
                                <a href="<?php echo base_url()?>Setting/addVoucher"> <h5 class="card-header1">  Add Voucher Type </h5> </a>
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">S No</th>
                                                <th scope="col">Voucher Type</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Voucher Series</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $i=1;
                                        if($vouchers){
                                            foreach($vouchers as $voucher){
                                                ?> 
                                                <tr>
                                                <td><?php echo $i;?></td>
                                                    <td><?php echo $voucher->voucher_Type;?></td>
                                                    <td><?php echo $voucher->voucher_Name;?></td>
                                                    <td><?php echo $voucher->voucher_Series;?></td>
                                                    <td><?php echo $voucher->voucher_Description;?></td>
                                                    <td> 
                                                        <a href="<?php echo base_url()?>Setting/editVoucher/<?php echo $voucher->voucher_Id;?>" class="editbtn"> Edit </a>
                                                        <a href="<?php echo base_url()?>Setting/deleteVoucher/<?php echo $voucher->voucher_Id;?>" class="deletebtn"> Delete </a>
                                                    </td>
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

                
            <!-- ============================================================== -->
            <!-- footer -->
