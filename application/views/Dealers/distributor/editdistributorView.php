<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dealers</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Dealers" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> Location Settings </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='State')?'active':''?>" href="<?php echo base_url()?>Dealers/State" ><i class="fa fa-fw fa-user-circle"></i>State</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='District')?'active':''?>" href="<?php echo base_url()?>Dealers/District" ><i class="fa fa-fw fa-user-circle"></i>District</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='addsubDistrict')?'active':''?>" href="<?php echo base_url()?>Dealers/Subdistrict" ><i class="fa fa-fw fa-user-circle"></i>Sub District</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url()?>Dealers/City" ><i class="fa fa-fw fa-user-circle"></i>City</a>
                            </li>
                                    </ul>
                                </div>
                            </li>
                           
                         
                        <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='addDistributor')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> Distributor</a>
                                    <div id="submenu-4" class="<?=($this->uri->segment(2)==='distributor')?'collapse':''?> submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo base_url()?>Dealers/distributor" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                                </li>
                                        
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url()?>Dealers/distributorHistory" ><i class="fa fa-fw fa-user-circle"></i>Distributor History</a>                               
                                                </li>
                                            </ul>
                                    </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-rocket"></i>Retailer</a>
                                    <div id="submenu-5" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo base_url()?>Dealers/retailer" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>
                                                </li>
                                        
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url()?>Dealers/retailerHistory" ><i class="fa fa-fw fa-user-circle"></i>Retailer History</a>                               
                                                </li>
                                            </ul>
                                    </div>
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
                            <h2 class="pageheader-title">Distributor </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Dealers" class="breadcrumb-link">Dealers</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Dealers/distributor" class="breadcrumb-link">Distributor</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Distributor</li>
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
                                <span class="table-title">Edit Distributor</span>
                                <a href="<?php echo base_url()?>Dealers/distributor"> <h5 class="card-header1">  View Distributors </h5> </a>
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
                                        echo form_open(base_url()."Dealers/editDistributor/".$distributor->distributor_Id, $attributes);?>

                                        <div class="row"> 
                                        <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                <div class="form-group">
                                                    <label for="comporganization_Name" class="col-form-label">Company/Organisation</label>
                                                    <input id="comporganization_Name" type="text" class="form-control" name="comporganization_Name" value="<?php echo $distributor->comporganization_Name;?>">
                                                    <span class="text-danger"> <?php echo form_error("comporganization_Name");?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                <div class="form-group"> 
                                                    <label for="contact_Person" class="col-form-label"> Contact Person</label>
                                                    <input type="text" name="contact_Person" id="contact_Person" class="form-control" value="<?php echo $distributor->contact_Person;?>">
                                                    <span class="text-danger"> <?php echo form_error("contact_Person");?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                        <label for="dist_Mobile" class="col-form-label"> Mobile </label>
                                                        <input type="text" name="dist_Mobile" id="dist_Mobile" class="form-control" value="<?php echo $distributor->dist_Mobile;?>">
                                                    <span class="text-danger"> <?php echo form_error("dist_Mobile");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                        <label for="dist_Email" class="col-form-label"> Email </label>
                                                        <input type="text" name="dist_Email" id="dist_Email" class="form-control" value="<?php echo $distributor->dist_Email;?>">
                                                    <span class="text-danger"> <?php echo form_error("dist_Email");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                        <label for="dist_Password" class="col-form-label"> Password </label>
                                                        <input type="text" name="dist_Password" id="dist_Password" class="form-control" value="<?php echo $distributor->dist_Password;?>">
                                                    <span class="text-danger"> <?php echo form_error("dist_Password");?></span>
                                                </div>
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <label for="diststate_Name" class="col-form-label"> Select State </label>
                                                    <select name="diststate_Name" class="progControlSelect2 form-control"> 
                                                        <option value="<?php echo $distributor->diststate_Id;?>"> <?php echo $distributor->state_Name;?> </option>
                                                        <?php 
                                                        foreach($states as $state){
                                                            ?>
                                                                <option value="<?php echo $state->state_Id;?>"><?php echo $state->state_Name;?></option>   
                                                            <?php
                                                        }   
                                                        ?>
                                                    </select>
                                                    <span class="text-danger"><?php echo form_error("diststate_Name");?></span>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="distcity_Name" class="col-form-label"> Select City </label>
                                                        <select name="distcity_Name" class="progControlSelect2 form-control"> 
                                                            <option value="<?php echo $distributor->distcity_Id;?>"> <?php echo $distributor->city_Name;?> </option>
                                                        </select>
                                                </div>
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-5 col-md-5"> 
                                                        <label for="dist_Address1" class="col-form-label"> Address 1 </label>
                                                        <textarea name="dist_Address1" id="dist_Address1" class="form-control" placeholder="Enter Address 1"><?php echo $distributor->dist_Address1;?></textarea>
                                                    <span class="text-danger"> <?php echo form_error("dist_Address1");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-5 col-md-5"> 
                                                        <label for="dist_Address2" class="col-form-label"> Address 2 </label>
                                                        <textarea name="dist_Address2" id="dist_Address2" class="form-control" placeholder="Enter Address 2"><?php echo $distributor->dist_Address2;?></textarea>
                                                    <span class="text-danger"> <?php echo form_error("dist_Address2");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-2 col-md-2"> 
                                                        <label for="dist_Address2" class="col-form-label"> PIN Code  </label>
                                                        <input type="text" name="dist_Pincode" id="dist_Pincode" class="form-control" value="<?php echo $distributor->dist_Pincode;?>">
                                                    <span class="text-danger"> <?php echo form_error("dist_Pincode");?></span>
                                                </div>
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="dist_GSTIN" class="col-form-label"> GSTIN </label>
                                                        <input type="text" name="dist_GSTIN" id="dist_GSTIN" class="form-control" value="<?php echo $distributor->dist_GSTIN;?>">
                                                    <span class="text-danger"> <?php echo form_error("dist_GSTIN");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                        <label for="dist_PAN" class="col-form-label"> PAN </label>
                                                        <input type="text" name="dist_PAN" id="dist_PAN" class="form-control" value="<?php echo $distributor->dist_PAN;?>">
                                                    <span class="text-danger"> <?php echo form_error("dist_PAN");?></span>
                                                </div>
                                        </div>
                                        
                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                        <label for="dist_Bank" class="col-form-label"> Bank </label>
                                                        <!-- <input type="text" name="dist_Bank" id="dist_Bank" class="form-control" placeholder="enter mobile number"> -->
                                                        <select name="dist_Bank" id="dist_Bank" class="progControlSelect2 form-control"> 
                                                        <option value="<?php echo $distributor->dist_Bank;?>"> <?php echo $distributor->dist_Bank;?> </option>
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
                                                    <span class="text-danger"> <?php echo form_error("dist_Bank");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                        <label for="dist_Account" class="col-form-label"> Account No </label>
                                                        <input type="text" name="dist_Account" id="dist_Account" class="form-control" value="<?php echo $distributor->dist_Account;?>">
                                                    <span class="text-danger"> <?php echo form_error("dist_Account");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                        <label for="dist_IFSC" class="col-form-label"> IFSC </label>
                                                        <input type="text" name="dist_IFSC" id="dist_IFSC" class="form-control" value="<?php echo $distributor->dist_IFSC;?>">
                                                    <span class="text-danger"> <?php echo form_error("dist_IFSC");?></span>
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




