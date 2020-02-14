
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Voucher </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Voucher</li>
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
                                <span class="table-title">Edit Voucher</span>
                                <a href="<?php echo base_url()?>Setting/voucher"> <h5 class="card-header1">  View Voucher </h5> </a>
                                </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                        <?php
                                        if($this->session->tempdata("upd_succ"))
                                        {
                                        echo "<div class='alert alert-success' role='alert'>".$this->session->tempdata("upd_succ")."</div>";
                                        }

                                        ?>
                                            <?php 
                                            $attributes = array('id' => '');
                                            echo form_open(base_url()."Setting/editVoucher/".$voucher->voucher_Id, $attributes);?>
                                            
                                            
                                            <div class="form-group">
                                                <label for="voucher_Type" class="col-form-label">Select Vourcher Type </label>
                                                <select name="voucher_Type" class="form-control">
                                                    <option value="<?php echo $voucher->voucher_Type;?>"> <?php echo $voucher->voucher_Type?> </option>
                                                    <option value="Purchase Order">Purchase Order</option>
                                                    <option value="Sales Order">Sales Order</option>
                                                </select>
                                                <!-- <input id="category_Name" type="text" class="form-control" name="category_Name" placeholder="enter category name"> -->
                                                <span class="text-danger"> <?php echo form_error("voucher_Type");?></span>
                                            </div>

                                             <div class="form-group">
                                                <label for="voucher_Name" class="col-form-label">Name</label>
                                                <input id="voucher_Name" type="text" class="form-control" name="voucher_Name" 
                                                       value="<?php echo $voucher->voucher_Name;?>">
                                               
                                                <span class="text-danger"> <?php echo form_error("voucher_Name");?></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="voucher_Series" class="col-form-label">Voucher Series</label>
                                                <input id="voucher_Series" type="text" class="form-control" name="voucher_Series"  value="<?php echo $voucher->voucher_Series;?>">
                                                
                                                <span class="text-danger"> <?php echo form_error("voucher_Series");?></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="voucher_Description" class="col-form-label"> Description </label>
                            <textarea placeholder="enter voucher description" name="voucher_Description" class="form-control"><?php echo $voucher->voucher_Description;?></textarea>
                                                <span class="text-danger"><?php echo form_error("voucher_Description");?></span>
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
