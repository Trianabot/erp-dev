
    

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Set Sales target </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Sales target</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                    
                <div class="card">
                    <div class="card-body">
                        <?php echo form_open(base_url()."Setting/salesTarget");?>
                        <div class="row">                           
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                   <div class="form-group">
                                                <label for="input-select">Select City</label>
                                                <select class="form-control" name="dealertarget_city" id="dealertarget_city">
                                                    <option>Choose City</option>
                                                    <?php 
                                                    foreach($cities as $city){
                                                        ?> 
                                                        <option><?php echo $city->city_name;?></option>    
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                </div>    
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                  <div class="form-group">
                                                <label for="input-select">Select Dealer</label>
                                                <select class="form-control" name="dealer_Name" id="dealer_Name">
                                                    <option>Choose Dealer</option>
                                                </select>
                                            </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                                <label for="input-select">Select Month</label>
                                                <select class="form-control" name="dealer_month" id="dealer_month">
                                                    <option>Choose Month</option>
                                                    <?php
                                                    $date = new DateTime('now');
                                                    $current_Month = $date->format('m');

                                                    $date1 = new DateTime('now');
                                                    $date1->modify('+1 month');
                                                    $second_Month = $date1->format('m');

                                                    $date2 = new DateTime('now');
                                                    $date2->modify('+2 month');
                                                    $third_Month = $date2->format('m');
                                                    ?>
                                                    <option><?php echo $current_Month;?></option>
                                                    <option><?php echo $second_Month;?></option>
                                                    <option><?php echo $third_Month;?></option>
                                                </select>
                                            </div>
                                    
                                </div>
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                        <?php echo form_close();?>
                        
                       
                    </div>
                </div>
