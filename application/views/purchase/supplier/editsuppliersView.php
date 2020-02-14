
  <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Sales</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Purchase" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                      

                            <li class="nav-item">
                            <a class="nav-link <?=($this->uri->segment(2)==='addSupplier')?'active':''?>" href="<?php echo base_url()?>Purchase/Suppliers" ><i class="fa fa-fw fa-user-circle"></i> Suppliers</a>
                            </li>
              
                    
                   

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Supplier </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Purchase" class="breadcrumb-link">Supplier</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Purchase/addSupplier" class="breadcrumb-link">Add Supplier</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Supplier</li>
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
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                <h5 class="card-header">Edit Supplier</h5>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                <a href="<?php echo base_url()?>Purchase/Suppliers"> <h5 class="card-header1">  View Suppliers </h5> </a>
                                </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <?php
                                                if($this->session->tempdata("upd_succ"))
                                                {
                                                echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("upd_succ")."</div>";
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-9 col-md-9"> 
                                                <?php 
                                        $attributes = array('id' => '');
                                        echo form_open(base_url()."Purchase/editSupplier/".$supplier->supplier_Id, $attributes);?>

                                        <div class="row"> 
                                        <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                <div class="form-group">
                                                    <label for="supporg_Name" class="col-form-label">Company/Organisation</label>
                                                    <input id="supporg_Name" type="text" class="form-control" name="supporg_Name" value="<?php echo $supplier->supporg_Name;?>">
                                                    <span class="text-danger"> <?php echo form_error("supporg_Name");?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                <div class="form-group"> 
                                                    <label for="suppcont_Person" class="col-form-label"> Contact Person</label>
                                                    <input type="text" name="suppcont_Person" id="suppcont_Person" class="form-control" value="<?php echo $supplier->suppcont_Person;?>">
                                                    <span class="text-danger"> <?php echo form_error("suppcont_Person");?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="supp_Mobile" class="col-form-label"> Mobile </label>
                                                        <input type="text" name="supp_Mobile" id="supp_Mobile" class="form-control" value="<?php echo $supplier->supp_Mobile;?>">
                                                    <span class="text-danger"> <?php echo form_error("supp_Mobile");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="supp_Email" class="col-form-label"> Email </label>
                                                        <input type="text" name="supp_Email" id="supp_Email" class="form-control" value="<?php echo $supplier->supp_Email;?>">
                                                    <span class="text-danger"> <?php echo form_error("supp_Email");?></span>
                                                </div>
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <label for="suppstate_Name" class="col-form-label"> Select State </label>
                                                    <select name="suppstate_Name" class="progControlSelect2 form-control"> 
                                                        <option value="<?php echo $supplier->suppstate_Id;?>"> <?php echo $supplier->state_Name;?> </option>
                                                        <?php 
                                                        foreach($states as $state){
                                                            ?>
                                                                <option value="<?php echo $state->state_Id;?>"><?php echo $state->state_Name;?></option>   
                                                            <?php
                                                        }   
                                                        ?>
                                                    </select>
                                                    <span class="text-danger"><?php echo form_error("suppstate_Name");?></span>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="suppcity_Name" class="col-form-label"> Select City </label>
                                                        <select name="suppcity_Name" class="progControlSelect2 form-control"> 
                                                        <option value="<?php echo $supplier->suppcity_Id;?>"> <?php echo $supplier->city_Name;?> </option>
                                                        </select>
                                                </div>
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-5 col-md-5"> 
                                                        <label for="supp_Address1" class="col-form-label"> Address 1 </label>
                                                        <textarea name="supp_Address1" id="supp_Address1" class="form-control"><?php echo $supplier->supp_Address1;?></textarea>
                                                    <span class="text-danger"> <?php echo form_error("supp_Address1");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-5 col-md-5"> 
                                                        <label for="supp_Address2" class="col-form-label"> Address 2 </label>
                                                        <textarea name="supp_Address2" id="supp_Address2" class="form-control"><?php echo $supplier->supp_Address2;?></textarea>
                                                    <span class="text-danger"> <?php echo form_error("supp_Address2");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-2 col-md-2"> 
                                                        <label for="supp_Pincode" class="col-form-label"> PIN Code  </label>
                                                        <input type="text" name="supp_Pincode" id="supp_Pincode" class="form-control" value="<?php echo $supplier->supp_Pincode;?>">
                                                    <span class="text-danger"> <?php echo form_error("supp_Pincode");?></span>
                                                </div>
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="supp_GSTIN" class="col-form-label"> GSTIN </label>
                                                        <input type="text" name="supp_GSTIN" id="supp_GSTIN" class="form-control" value="<?php echo $supplier->supp_GSTIN;?>">
                                                    <span class="text-danger"> <?php echo form_error("supp_GSTIN");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="supp_PAN" class="col-form-label"> PAN </label>
                                                        <input type="text" name="supp_PAN" id="supp_PAN" class="form-control" value="<?php echo $supplier->supp_PAN;?>">
                                                    <span class="text-danger"> <?php echo form_error("supp_PAN");?></span>
                                                </div>
                                        </div>
                                        
                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                        <label for="supp_Bank" class="col-form-label"> Bank </label>
                                                        <!-- <input type="text" name="dist_Bank" id="dist_Bank" class="form-control" placeholder="enter mobile number"> -->
                                                        <select name="supp_Bank" id="supp_Bank" class="progControlSelect2 form-control"> 
                                                        <option value="<?php echo $supplier->supp_Bank;?>"><?php echo $supplier->supp_Bank;?></option>
                                                                        <option value="Allahabad Bank">Allahabad Bank</option>
                                                                        <option value="Andhra Bank">Andhra Bank</option>
                                                                        <option value="Axis Bank">Axis Bank</option>
                                                                        <option value="Bandhan Bank">Bandhan Bank</option>
                                                                        <option value="Bank of Baroda">Bank of Baroda</option>
                                                                        <option value="Bank of India">Bank of India</option>
                                                                        <option value="Bank of Maharashtra">Bank of Maharashtra</option>
                                                                        <option value="Canara Bank">Canara Bank</option>
                                                                        <option value="Catholic Syrian Bank">Catholic Syrian Bank</option>
                                                                        <option value="Central Bank of India">Central Bank of India</option>
                                                                        <option value="City Union Bank">City Union Bank</option>
                                                                        <option value="Corporation Bank">Corporation Bank</option>
                                                                        <option value="DCB Bank">DCB Bank</option>
                                                                        <option value="Dena Bank">Dena Bank</option>
                                                                        <option value="15">Dhanlaxmi Bank</option>
                                                                        <option value="Dhanlaxmi Bank">Federal Bank</option>
                                                                        <option value="HDFC Bank">HDFC Bank</option>
                                                                        <option value="ICICI Bank">ICICI Bank</option>
                                                                        <option value="IDBI Bank">IDBI Bank</option>
                                                                        <option value="IDFC Bank">IDFC Bank</option>
                                                                        <option value="Indian Bank">Indian Bank</option>
                                                                        <option value="Indian Overseas Bank">Indian Overseas Bank</option>
                                                                        <option value="IndusInd Bank">IndusInd Bank</option>
                                                                        <option value="Jammu and Kashmir Bank">Jammu and Kashmir Bank</option>
                                                                        <option value="Karnataka Bank">Karnataka Bank</option>
                                                                        <option value="Karur Vysya Bank">Karur Vysya Bank</option>
                                                                        <option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
                                                                        <option value="Lakshmi Vilas Bank">Lakshmi Vilas Bank</option>
                                                                        <option value="Nainital Bank">Nainital Bank</option>
                                                                        <option value="Oriental Bank of Commerce">Oriental Bank of Commerce</option>
                                                                        <option value="Punjab National Bank">Punjab National Bank</option>
                                                                        <option value="Punjab and Sind Bank">Punjab and Sind Bank</option>
                                                                        <option value="RBL Bank">RBL Bank</option>
                                                                        <option value="South Indian Bank">South Indian Bank</option>
                                                                        <option value="State Bank of India">State Bank of India</option>
                                                                        <option value="Syndicate Bank">Syndicate Bank</option>
                                                                        <option value="Tamilnad Mercantile Bank Limited">Tamilnad Mercantile Bank Limited</option>
                                                                        <option value="UCO Bank">UCO Bank</option>
                                                                        <option value="Union Bank of India">Union Bank of India</option>
                                                                        <option value="United Bank of India">United Bank of India</option>
                                                                        <option value="Vijaya Bank">Vijaya Bank</option>
                                                                        <option value="YES Bank">YES Bank</option>
                                                        </select>
                                                    <span class="text-danger"> <?php echo form_error("supp_Bank");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                        <label for="supp_Account" class="col-form-label"> Account No </label>
                                                        <input type="text" name="supp_Account" id="supp_Account" class="form-control" value="<?php echo $supplier->supp_Account;?>">
                                                    <span class="text-danger"> <?php echo form_error("supp_Account");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                        <label for="supp_IFSC" class="col-form-label"> IFSC </label>
                                                        <input type="text" name="supp_IFSC" id="supp_IFSC" class="form-control" value="<?php echo $supplier->supp_IFSC;?>">
                                                    <span class="text-danger"> <?php echo form_error("supp_IFSC");?></span>
                                                </div>
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <input type="submit" name="productSubmit" value="Submit" class="btn btn-primary">
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <input type="reset" value="Cancel" class="btn btn-light">
                                                </div>
                                        </div>



                                        <?php echo form_close();?>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>




