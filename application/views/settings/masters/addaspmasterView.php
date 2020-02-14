
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Asp Master</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Add Part Master</li>
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
                                <span class="table-title">Add Asp </span>
                                
                                <a href="<?php echo base_url()?>Setting/aspMaster"> <h5 class="card-header1">  View Asps</h5> </a>
                                </div>
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
                                    echo form_open(base_url()."Setting/addaspMaster", $attributes);?>
                                   <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class='form-group'>
                                            <label>Asp Name</label>
                                            <input type='text' name='asp_Name' id='asp_Name' class='form-control'>
                                            <span class='text-danger'><?php echo form_error("asp_Name");?></span>
                                        </div>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class='form-group'>
                                            <label>Contact Person</label>
                                            <input type='text' name='contact_Person' id='contact_Person' class='form-control'>
                                        </div>
                                    </div>                                               
                                </div>
                                        
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                        <label>Contact Number</label>
                                            <input type='text' name='contact_Number' id='contact_Number' class='form-control'>
                                    </div>
                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                        <label>Alternate Contact Number</label>
                                            <input type='text' name='alternatecontact_Number' id='alternatecontact_Number' class='form-control'>
                                    </div>
                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                        <label>Email</label>
                                            <input type='text' name='asp_Email' id='asp_Email' class='form-control'>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <label>Address</label>
                                        <textarea name='asp_Address' id='asp_Address' class='form-control'></textarea>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <label>Address1</label>
                                        <textarea name='asp_Alternateaddress' id='asp_Alternateaddress' class='form-control'></textarea>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                        <label>State</label>
                                        <input type='text' name='asp_State' id='asp_State' class='form-control'>
                                    </div>
                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                        <label>City</label>
                                        <input type='text' name='asp_City' id='asp_City' class='form-control'>
                                    </div>
                                    <div class='col-xs-12 col-sm-4 col-md-4'>
                                        <label>Pin Code</label>
                                        <input type='text' name='asp_Pincode' id='asp_Pincode' class='form-control'>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <label>Latitude</label>
                                        <input type='text' name='asp_Latittude' id='asp_Latittude' class='form-control'>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <label>Longitude</label>
                                        <input type='text' name='asp_Longitude' id='asp_Longitude' class='form-control'>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12'>
                                    <div class="form-group">
                                        <input type="submit" value="Submit" name="Submit" class="btn btn-rounded btn-primary">
                                    </div>
                                    </div>
                                </div>
                               <?php echo form_close();?>
                                    </div>
                    </div>
                                </div>
                </div>
              
</div>
</div>
