
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Specific Rules</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Specific Rules</li>
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
                                     <h3> Add Specific Rules </h3>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'> 
                                    <a href="<?php echo base_url()?>Setting/specificRules" class='btn btn-primary' style='float:right'>Specific Rules </a>
                                
                                    </div>
                                </div>
                               
                                
                                 <?php
                                        if($this->session->flashdata('message_name'))
                                        {
                                        echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->flashdata('message_name')."</div>";
                                        }

                                        ?>
                                <?php echo form_open(base_url()."Setting/addspecificRule");?>
                                <table class='generalruleTable'  style="width:100%">
                                            <tr>
                                                <td>
                                      <select class="form-control" id="aspspecific_Name" name="aspspecific_Name">                                    
                                    <option value="">Select ASP</option>
                                        <?php 
                                          if($asps){
                                             
                                              foreach($asps as $asp){
                                                    ?> 
                                                <option value='<?php echo $asp->asp_Id;?>'> <?php echo $asp->asp_Name;?></option>    
                                        <?php
                                              }
                                          }
                                          ?>
                                    </select>
                                <label for="distorderproduct_Code">ASP Name</label>
<!--                                                <td></td>
                                                <td>Sub Category</td>
                                                <td>Region</td>
                                                <td>Free</td>
                                                <td>Rate after free</td>
                                                <td>Action</td>-->
                                </td>
                                                <td>
                                      <select class="form-control aspallowcategory_Name" id="aspallowcategory_Name" name="aspallowcategory_Name">                                    
                                    <option value="">Select Category</option>
                                    <?php 
                                    foreach($masterproducts as $product){
                                        ?> 
                                    <option> <?php echo $product->product_type;?></option>    
                                        <?php
                                       //echo $product->product_type;
//                                        echo "<pre>";
//                                        print_r($product); 
                                    }
                                    ?>
                                    </select>
                                <label for="distorderproduct_Code">Category Name</label>
<!--                                                <td></td>
                                                <td>Sub Category</td>
                                                <td>Region</td>
                                                <td>Free</td>
                                                <td>Rate after free</td>
                                                <td>Action</td>-->
                                </td>
                                 <td class="masterprouctcategory">
<!--                                <input type="text" class="form-control" name="distorderprod_Name" id="distorderprod_Name">-->
                                <select name="aspallowsubcategory_Name" id="aspallowsubcategory_Name" class="form-control">
                                    <option value="">Select Sub Category</option>
                                </select>
                                     <label for="distorderprod_Name" >Sub Category</label>
                                 </td>
                                <td class="masterprouctled" style='display:none;'>
                                    <select name='aspallowcategory_Led' id="aspallowcategory_Led" class='form-control'>
                                        <option> Select Inches</option>
                                        <option> Upto 30 inch</option>
                                        <option> 31 - 40 inch</option>
                                        <option> 41 - 50 inch</option>
                                        <option> Above 50 inch</option>
                                    </select>
                                    <label for="distorderprod_Name" >Sub Category</label>
                                 </td>
<!--                             <td>
                                 <select class='form-control' name='aspallow_Region' id="aspallow_Region">
                                     <option> Select Region </option>
                                     <option> All </option>
                                     <option> Telangana </option>
                                     <option> Andhra Pradesh </option>
                                 </select>
                                <label for="aspallow_Region" >Region</label>
                            </td>-->
                             <td>
                                <input type="text" class="form-control aspall_Free" name="aspallow_Free" id="aspallow_Free" placeholder="Free km">
                                <label for="aspallow_Free" >Free km</label>
                               <span id='errmsgfree'></span>
                                 </td>
                                                
                             <td>
                                <input type="text" class="form-control aspallowrateafter_Free" name="aspallowrateafter_Free" id="aspallowrateafter_Free" placeholder="Rater per km after free limit" data-d-group="2" dgroup="2" vmin="0.00" apad="true">
                                <label for="aspallowrateafter_Free" >Rate after free limit</label>
                            </td>
                              <td colspan="12" class="text-center show-butns" style="display:none">
                                 <button id="" type="button" class="btn btn-info btn-lg btn-round btn-pill-right waves-effect waves-classic btn-distorderadd aspspecific_button">Add</button>
                            </td>
                           
                            <td colspan="12" class="text-center show-butns" style="display:none">
                                <button id="buttonClearItems" type="button" class="btn btn-danger btn-lg btn-round btn-pill-left waves-effect waves-classic aspallowclear_button">Clear</button>
                               
                            </td>
                                            </tr>
                                       
                                        <tbody class="aspallowance_Body">
                                            
                                        </tbody>
                                        <tr>
                                                <td>
                                                    <input type="submit" value="Submit" class='btn btn-success generalsubmit_btn' name='specificrulesubmit' style='display:none'>
                                                </td>
                                            </tr>
                                    </table>
                                <?php echo form_close();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


