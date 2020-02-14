
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Branchs</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Branch</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Edit Branch</span>
                              
                              <a href="<?php echo base_url()?>Setting/branch"> <h5 class="card-header1"> View Branchs </h5> </a>
                                </div>
                            </div>
                               
                                 
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            
                                              <?php
                        if($this->session->tempdata("upd_succ")){
                                echo "<div class='alert alert-success'>".$this->session->tempdata("upd_succ")."</div>";
                                }
?>
                                            <?php 
                                            $attributes = array('id' => 'brandform');
                 echo form_open_multipart(base_url()."Setting/editbranchMaster/".$branch->branch_Id, $attributes);?>
                                           
                                            <div class="form-group"> 
                                                <label for="branch_Name" class="col-form-label"> Branch Name </label>
                                                <input type="text" name="branch_Name" id="branch_Name" class="form-control" value='<?php echo $branch->branch_Name;?>' readonly='readonly'>
                                            <span class='text-danger'><?php echo form_error("branch_Name");?></span>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="branch_Code" class="col-form-label"> Branch Code </label>
                                                <input type="text" name="branch_Code" id="branch_Code" class="form-control" value='<?php echo $branch->branch_Code;?>'>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="branch_Aliasname" class="col-form-label"> Branch Alias Name </label>
                                                <input type="text" name="branch_Aliasname" id="branch_Aliasname" class="form-control" value='<?php echo $branch->branch_Aliasname;?>'>
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
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>
