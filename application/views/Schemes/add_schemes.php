
        
   
        
        
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
                            <h2 class="pageheader-title">Create Scheme </h2>

                            
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               

                        <div class="card">
                        <div class="row margin0 grey">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <span class="table-title">Add Scheme</span>
                                
                                <a href="<?php echo base_url()?>Schemes/schmes"> <h5 class="card-header1">  View Schemes </h5> </a>
                                </div>
                        </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <?php
                                                if($this->session->tempdata("add_success"))
                                                {
                                                echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("add_success")."</div>";
                                                }
                                                ?>
                                            </div>
                                        </div>

                                       
                                        
                                                <?php 
                                        $attributes = array('id' => '');
                                        echo form_open_multipart(base_url()."Schemes/addScheme", $attributes);?>
                            

                                        <div class="row"> 
                                       
                                               <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                <div class="form-group"> 
                                                    <label class="col-form-label"> Scheme Name</label>
                                                    <input type="text" name="scheme_name"  class="form-control" placeholder="enter Scheme name">
                                                </div>
                                            </div>
                                           
                                            <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                <div class="form-group"> 
                                                    <label class="col-form-label"> Product Eligibility</label>
<!--                                   products                 <input type="text" name="product_eligible"  class="form-control" placeholder="enter product name">-->
                                                    
                                                    
                                                    
                <select name='product_eligible[]' id="product_eligible" class='form-control' multiple="multiple">
                                                   
                                                    <?php 
                                                    foreach($products as $prod){
                                                        ?> 
                                                        <option><?php echo $prod->prod_Name;?></option>
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
                                                    <input type="text" name="product_qty" id="product_Name" class="form-control" placeholder="enter product qty">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                <div class="form-group"> 
                                                    <label class="col-form-label"> From Date</label>
                                                    <input type="date" name="scheme_duration"  class="form-control" placeholder="enter scheme duration">
                                                </div>
                                            </div>
                                             <div class="col-xs-12 col-sm-4 col-md-4"> 
                                                <div class="form-group"> 
                                                    <label class="col-form-label"> To Date</label>
                                                    <input type="date" name="to_date"  class="form-control" placeholder="enter scheme duration">
                                                </div>
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

                                       

                                        <!--<div class="col-xs-12 col-sm-4 col-md-4"> -->
                                        <!--        <label for="product_Image" class="col-form-label"> Product Image </label>-->
                                        <!--        <input type="file" name="product_Image" id="product_Image" class="form-control">-->
                                        <!--</div>-->
                                       
                                    <?php echo form_close();?>
                                        </div>
                                       
                                        
                                    </div>
                                    
                                </div>
                </div>
              
</div>
</div>




