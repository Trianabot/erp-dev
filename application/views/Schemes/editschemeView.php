
        
   
        
        
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
                            <h2 class="pageheader-title">Edit Scheme </h2>

                            
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               

                        <div class="card">
                        <div class="row margin0 grey">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <span class="table-title">Edit Scheme</span>
                                
                                <a href="<?php echo base_url()?>Schemes/schmes"> <h5 class="card-header1">  View Schemes </h5> </a>
                                </div>
                            </div>  
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <?php
    if($this->session->tempdata("upd_succ"))

    {

        echo "<div class='alert alert-success'>".$this->session->tempdata("upd_succ")."</div>";

    }

                                        ?>
                                            </div>
                                        </div>

                                       
                                        
                                                <?php 
                                        $attributes = array('id' => 'editschemeForm');
                    echo form_open_multipart(base_url()."Schemes/editScheme/".$scheme->scheme_name, $attributes);?>
                                        
                             <div class="row"> 
                                    <div class="col-xs-12 col-sm-6 col-md-6"> 

                                    
                                                <div class="form-group"> 
                                                    <label class="col-form-label"> Scheme Name</label>
            <input type="text" name="scheme_name"  class="form-control" value='<?php echo $scheme->scheme_name;?>' readonly='readonly'>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                <div class="form-group"> 
                                                    <label class="col-form-label"> Product Eligibility</label>
<!--    <input type="text" name="product_eligible"  class="form-control" value='<?php echo $scheme->product_eligible;?>' readonly='readonly'>-->
                                                    
        <select name='product_eligible[]' id="product_eligible" class='form-control' multiple="multiple">
                                                   
                                    <?php 
                                    foreach($products as $prod){
                $selected = in_array($prod->prod_Name,$prodEligibles) ? " selected " : null;
                                        
                                        ?> 
            <option value="<?=$prod->prod_Name?>" <?=$selected?> ><?=$prod->prod_Name?></option>  
                                <?php
                                    }
                                    ?>
                                                </select>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                <div class="form-group"> 
                                                    <label class="col-form-label"> Product Qty</label>
    <input type="text" name="product_qty" id="product_Name" class="form-control" value='<?php echo $scheme->product_qty;?>'>
                                                </div>
                                            </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                <div class="form-group"> 
                                                    <label class="col-form-label"> From Date</label>
   <input type="date" name="scheme_duration" id='scheme_duration' class="form-control" value='<?php echo $scheme->scheme_duration;?>'>
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                <div class="form-group"> 
                                                    <label class="col-form-label"> To Date</label>
   <input type="date" name="to_date" id='to_date' class="form-control" value='<?php echo $scheme->to_date;?>'>
                                                </div>
                                            </div>
                                        </div>



                                      
                                        <div class="row"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <input type="submit" name="editschemeSubmit" value="Submit" class="btn btn-primary">
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




