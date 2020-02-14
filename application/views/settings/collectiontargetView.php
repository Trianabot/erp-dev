
    

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Set Collection target </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Collection target</li>
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
                                <span class="table-title">Add Collection Target</span>
                                
                                <a href="<?php echo base_url()?>Setting/collectionTargets"> <h5 class="card-header1">  View Targets </h5> </a>
                                </div>
                                    <div class="card-body">

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
                                            echo form_open(base_url()."Setting/collectionTarget", $attributes);?>
                                           
                                            <div class="form-group"> 
                                                <label for="targetdays" class="col-form-label"> Set Collection Target </label>
                                                <select name="targetdays" id="targetdays" class="form-control">
                                                    <option value="0"> Select Collection Target </option>
                                                    <option value="greaterthan30"> > 30 Days</option>
                                                    <option value="greaterthan45"> > 45 Days</option>
                                                    <option value="greaterthan60"> > 60 Days</option>
                                                    <option value="greaterthan90"> > 90 Days</option>
                                                </select>
                                                <span class="text-danger"><?php echo form_error("targetdays");?></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Submit" class="btn btn-rounded btn-primary">
                                            </div>
                                            
                                            <?php echo form_close();?>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>
