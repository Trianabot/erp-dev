
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
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Distributor Stock </h2>
                        </div>
                    </div>
                </div>
                
                <?php echo form_open(base_url()."Stock/diststockList");?>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4"> 
                        <select name="dist_City" class="form-control"> 
                                            <option value="0"> Select a Distributor Village/Town/City</option>
                                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4"> 
                        <select name="dist_Name" class="form-control"> 
                                            <option value="0"> Select a Distributor </option>
                                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
                <div class="row"></div>
                <?php echo form_close()?>
               

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Distributor</th>
                                                <th scope="col">Contact Person</th>
                                                <th scope="col">Contact Number</th>
                                                <th scope="col">Product Model</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Last Shipping Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
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


           