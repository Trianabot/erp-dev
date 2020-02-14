
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Dealers</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Add Dealers Master</li>
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
                                <span class="table-title">Add Distributors & Dealers City</span>
                                
                                <a href="<?php echo base_url()?>Setting/exedistretCity"> <h5 class="card-header1">  View Executives City  </h5> </a>
                                </div>
                            </div>
                                    <div class="card-body">
                                            <div class=""> 
<!--                                     <a href="<?php echo base_url()?>Crm/aspCSV" class='btn btn-success'>Export CSV</a> -->
                                <a href="<?php echo base_url()?>Setting/executivecityCSV" class="btn btn-info btn-lg">
                                                    <span class="glyphicon glyphicon-export"></span> Export
                                </a>
                                </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <?php
                                        if($this->session->tempdata("add_success"))
                                        {
                                        echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("add_success")."</div>";
                                        }
                                        if($this->session->tempdata("add_fail"))
                                        {
                                        echo "<div class='alert alert-warning succ-msg' role='alert'>".$this->session->tempdata("add_fail")."</div>";
                                        }
                                        if($this->session->tempdata("add_creditfail"))
                                        {
                                        echo "<div class='alert alert-danger succ-msg' role='alert'>".$this->session->tempdata("add_creditfail")."</div>";
                                        }

                                        ?>
                                            <?php 
                                            $attributes = array('id' => 'brandform');
                            echo form_open_multipart(base_url()."Setting/addbulkdistdealMaster", $attributes);?>
                                           
                                            <div class="form-group"> 
                                                <label for="uploadFile" class="col-form-label"> </label>
                                                <input type="file" name="uploadFile" id="file" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Submit" name="submit" class="btn btn-rounded btn-primary">
                                            </div>
                                            
                                            <?php echo form_close();?>
                                            </div>
                                        </div>
                                       
                                    </div>
                    </div>
                                </div>
                </div>
              
</div>
</div>
