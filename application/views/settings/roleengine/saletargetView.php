
    
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Sales target </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Sales target</li>
                                    </ol>
                                </nav>
                            </div>
                           <button class="float-right"><a href="<?php echo base_url()?>Setting/setsalesTarget">Set Sales Target</a></button>
                        </div>
                    </div>
                </div>

                    
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php 
                                    if($dealer){
                                        ?>
                                      <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <h4> City : <?php echo $dealer->city_name;?></h4>
                                        </div>
                                         <div class="col-xs-12 col-sm-4 col-md-4">
                                            <h4> Dealer Name : <?php echo $dealer->dealer_name;?></h4>
                                        </div>
                                         <div class="col-xs-12 col-sm-4 col-md-4">
                                            <h4> Month : <?php echo $dealer->month;?></h4>
                                        </div>
                                    </div>
                                    
<!--                                    <div class="row">
                                        <div class=""> <button class="target_edit"> Edit </button></div>
                                    </div>-->
                                    
                                    <?php echo form_open(base_url()."Setting/salestargetUpdate");?>
                                    <input type="hidden" name="dealer_Id" value="<?php echo $dealer->id;?>">
                                    <table class="table" style="width:500px">
                                        <thead>
                                            <tr>
                                                <th> Category </th>
                                                <th> Target </th>
                                                <th> Actual </th>
                                                <th> Balance </th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td scope="col">Washer</td>
                                            <td> <input type="text" name="washer_Target"  id="waster_Target" value="<?php echo $dealer->washer;?>"></td>
                                            <td><input type="text" readonly></td>
                                            <td><input type="text" readonly></td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Washing Machine</td>
                                            <td> <input type="text" name="washingmachine_Target" value="<?php echo $dealer->washing_machine;?>"></td>
                                            <td><input type="text" readonly></td>
                                            <td><input type="text" readonly></td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Led</td>
                                            <td> <input type="text" name="led_Target" value="<?php echo $dealer->led;?>"> </td>
                                             <td><input type="text" readonly></td>
                                            <td><input type="text" readonly></td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Air Cooler</td>
                                            <td><input type="text" name="aircooler_Target" value="<?php echo $dealer->air_cooler;?>"> </td>
                                             <td><input type="text" readonly></td>
                                            <td><input type="text" readonly></td>
                                        </tr>
                                        <tr>
                                            <td scope="col">Dispenser</td>
                                            <td> <input type="text" name="dispense_Target" value="<?php echo $dealer->dispenser;?>">  </td>
                                             <td><input type="text" readonly></td>
                                            <td><input type="text" readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"> </td>
                                            <td><input type="submit" value="Save" name="target_Update" class="btn btn-success"></td>
                                        </tr>
                                    </table>
                                    <?php echo form_close();?>
                                    
                                         <?php
                                    }else {
                                        ?> 
                                    <h4> Sorry No target for this dealer</h4>    
                                        <?php
                                    }
                                    ?>
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                </div>
                       
                    </div>
                </div>
            </div>

        </div>