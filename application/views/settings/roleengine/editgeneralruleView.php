
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Travel Expenses</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">General Rules</li>
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
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                     <h3> Edit General Rule </h3>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'> 
                                    <a href="<?php echo base_url()?>Setting/generalRules" class='btn btn-primary' style='float:right'>General Rules </a>
                                
                                    </div>
                                </div>
                               
                                
                                  <?php
                                                if($this->session->flashdata("upd_succ"))
                                                {
                                                echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->flashdata("upd_succ")."</div>";
                                                }
                                                ?>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <?php echo form_open(base_url()."Setting/editgeneralRule/".$generalrule->generalrules_Id);?>
                                        <div class="form-group">
                                            <label for="inputUserName">Category</label>
                                            <select class="form-control aspallowcategory_Name" id="aspallowcategory_Name" name="aspallowcategory_Name" readonly>                                    
                                            <option><?php echo $generalrule->aspallowcategory_Name;?></option>
                                            
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Sub Category</label>
                                            <select name="aspallowsubcategory_Name" id="aspallowsubcategory_Name" class="form-control" readonly>
                                            <option><?php echo $generalrule->aspallowsubcategory_Name;?></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Free Km</label>
                                            <input type="text" class="form-control aspall_Free" name="aspallow_Free" id="aspallow_Free" value='<?php echo $generalrule->aspallow_Free;?>'>
                                            <span id='errmsgfree'></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Rate after free limit</label>
                                            <input type="text" class="form-control aspallowrateafter_Free" name="aspallowrateafter_Free" id="aspallowrateafter_Free" value='<?php echo $generalrule->aspallowrateafter_Free;?>' data-d-group="2" dgroup="2" vmin="0.00" apad="true">
                                        </div>
                                        <div class="form-group">
                                        
                                                    <button type="submit" name='editgeneralsubmit' class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
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


