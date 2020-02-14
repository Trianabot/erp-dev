
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
                            <h2 class="pageheader-title">Add Travel Expense</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Add Engineer</li>
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
                                <span class="table-title">Add Travel Expense</span>
                                
                                <a href="<?php echo base_url()?>Crm/travelExpense"> <h5 class="card-header1">  View Travel Expense</h5> </a>
                                </div>
                                    <div class="card-body">
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
                                            echo form_open_multipart(base_url()."Crm/addtravelExpense", $attributes);?>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="form-group"> 
                                                    <label for="ticket_No" class="col-form-label"> Ticket No </label>
                                                    <select class='form-control' name='ticket_No' id="ticket_No">
                                                        <option>Select Ticket Id</option>
                                                        <?php 
                                                        if($tickets){
                                                           foreach($tickets as $ticket){
                                                               if($ticket->asp){
                                                                   ?> 
                                                                    <option><?php echo $ticket->ticket_Id?></option>
                                                                  <?php
                                                               }
                                                           }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                 <div class="form-group"> 
                                                    <label for="brand_Logo" class="col-form-label"> ASP </label>
                                                    <input type='textbox' name='ticket_Asp' id="ticket_Asp" class="form-control" readonly="readonly">
                                                </div>
                                                <div class="form-group"> 
                                                    <label for="brand_Logo" class="col-form-label"> City </label>
                                                    <input type='textbox' name='ticket_Aspcity' id="ticket_Aspcity" class="form-control" readonly="readonly">
                                                </div>
                                                <div class="form-group"> 
                                                    <label for="brand_Logo" class="col-form-label"> Service Engineer </label>
                                                    <select name="service_Engineer" id="service_Engineer" class="form-control">
                                                    
                                                    </select>
                                                </div>
                                                <div class="form-group"> 
                                                    <label for="brand_Logo" class="col-form-label"> Category </label>
                                                    <input type='textbox' name='ticket_Category' id="ticket_Category" class="form-control" readonly="readonly">
                                                </div>
                                                
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class='form-group'>
                                                    <label for="brand_Logo" class="col-form-label">Barcode</label>
                                                    <input type='textbox' name='ticket_Barcode' class="form-control">
                                                </div>
                                                <div class='form-group'>
                                                    <label for="brand_Logo" class="col-form-label">Distance</label>
                                                    <input type='textbox' name='distance' class="form-control">
                                                </div>
                                                
                                               
                                                <div class='form-group'>
                                                    <label for="brand_Logo" class="col-form-label">Asp Amount</label>
                                                    <input type='textbox' name='Amount' class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class='col-xs-12 col-sm-12 col-md-12'>
                                                <div class="form-group">
                                                    <input type="submit" value="Submit" name="travelExpense" class="btn btn-rounded btn-primary">
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                         <?php echo form_close();?>
                                       
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>
