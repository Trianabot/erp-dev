<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Stock</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
<!--
                            <li class="nav-divider">
                                Menu
                            </li>
-->
<li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url()?>Plant_Dashboard/Production_plan" ><i class="fa fa-fw fa-user-circle"></i>Production Plan</a>  
                        </li>
                        <li class="nav-item ">
                                            <a class="nav-link" href="<?php echo base_url();?>Plant_Dashboard/prod_plan_edit" ><i class="fa fa-fw fa-user-circle"></i>Production Plan Edit</a>                              
                                        </li>
                       

                        <li class="nav-item">
                             <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> Production History </a>
                             <div id="submenu-4" class="<?=($this->uri->segment(2)==='washerpdf')?'collapse':''?> submenu" style="">
                                 <ul class="nav flex-column">
                                     <li class="nav-item ">
                                         <a class="nav-link" href="<?php echo base_url() ?>Plant_Dashboard/coolerDetails" ><i class="fa fa-fw fa-user-circle"></i>Cooler</a>                      
                                     </li>

                                     <li class="nav-item ">
                                         <a class="nav-link" href="<?php echo base_url() ?>Plant_Dashboard/washerDetails" ><i class="fa fa-fw fa-user-circle"></i>Washer</a>                              
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
                            <h2 class="pageheader-title">Coolers History Edit </h2>

                           
                        </div>
                    </div>
                </div>

               
                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12"> 
                    <div class="card">
                        
                          <div class="content" id="content">
                                <div class="card-header p-4">
                                     
                                    <form action = "<?php echo base_url();?>Plant_Dashboard/cooler_edit" method = "post">
                                    <div class="float-right"> <h3 class="mb-0"></h3>
                                    Date : <input type="date" name="date" value="<?php echo $cooler_det->cur_date;?>">
                                    </div>
                                </div>
                                <div class="card-body" style="background-color: aliceblue;">
                                    <div class="row mb-4">
                                        <div class="col-sm-6">
                                             <div style="font-size: 20px;">Brand Name :
                                            <select class="form-control" name="company_name" id="input-select">
                                                 <option value="<?php echo $cooler_det->company_name;?>"><?php echo $cooler_det->company_name;?></option>
                                                 <option>Choose Company</option>
                                                 <?php 
                                                                     foreach($companies as $product){
                                                                         ?>
                                                                         <option value="<?php echo $product->name;?>"><?php echo $product->name;?></option>
                                                                         <?php
                                                                     } 
                                                                     ?>
                                             </select>
                                            </div>
                                            
                                            
                                            <div style="font-size: 20px;">Product Name :
                                            <select class="form-control" name="product_name" id="input-select">
                                                 <option value="<?php echo $cooler_det->product;?>"><?php echo $cooler_det->product;?></option>
                                                 <option>Choose Product</option>
                                                 <?php 
                                                                     foreach($mfg_details as $product){
                                                                         ?>
                                                                         <option value="<?php echo $product->product_name;?>"><?php echo $product->product_name;?></option>
                                                                         <?php
                                                                     } 
                                                                     ?>
                                             </select>
                                            </div>
                                            <div style="font-size: 20px;">Product Quantity : <input class="form-control" type="text" name="product_qty" value="<?php echo $cooler_det->product_qty;?>">  </div>
                                            <div style="font-size: 20px;">Production Supervisor : 
                                          
                                            <select name="supervisor_name" class="form-control" id="input-select">
                                                <option value="<?php echo $cooler_det->supervisor_name;?>"><?php echo $cooler_det->supervisor_name;?></option>
                                 <option>Choose ..</option>
                                 <?php 
                                    foreach($supervisor_list as $ca){
                                        ?>
                                        <option value="<?php echo $ca->supervisor_name;?>"><?php echo $ca->supervisor_name;?></option>
                                        <?php
                                    } 
                                    ?>
                             </select>
                                            </div>
                                            <div style="font-size: 20px;">Quality Supervisor : 
                                           
                                             <select name="line_name" class="form-control" id="input-select">
                                                 <option value="<?php echo $cooler_det->line_supervisor_name;?>"><?php echo $cooler_det->line_supervisor_name;?></option>
                                        <option>Choose ..</option>
                                        <?php 
                                           foreach($Line_supervisor_list as $ca){
                                               ?>
                                               <option value="<?php echo $ca->line_supervosor_name;?>"><?php echo $ca->line_supervosor_name;?></option>
                                               <?php
                                           } 
                                           ?>
                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div style="font-size: 20px;">Fan Motor : 
                                            
                                           
                                             <select class="form-control" id="input-select" name="fan_name" >
                                                         <option value="<?php echo $cooler_det->fan_or_motor_name;?>"><?php echo $cooler_det->fan_or_motor_name;?></option> 
                                                         <option>Change Type</option>
                                                         <?php 
                                                                     foreach($fan_motor as $fan){
                                                                         ?>
                                                                         <option value="<?php echo $fan->productname;?>"><?php echo $fan->productname;?></option>
                                                                         <?php
                                                                     } 
                                                                     ?>
                                             </select>
                                            </div>
                                            <div style="font-size: 20px;">Pump Motor : 
                                           
                                            <select class="form-control" id="input-select" name="pump_name" >
                                                 <option value="<?php echo $cooler_det->pump_or_timer_name;?>"><?php echo $cooler_det->pump_or_timer_name;?></option>
                                                         <option>Change Type</option>
                                                         <?php 
                                                                     foreach($pump_motor as $pump){
                                                                         ?>
                                                                         <option value="<?php echo $pump->productname;?>"><?php echo $pump->productname;?></option>
                                                                         <?php
                                                                     } 
                                                                     ?>
                                             </select>
                                            </div>
                                            <div>Auto Swing : 
                                            
                                            <select class="form-control" id="input-select" name="auto_swing_name" >
                                                 <option value="<?php echo $cooler_det->auto_swing_or_gear_name;?>"><?php echo $cooler_det->auto_swing_or_gear_name;?></option>
                                                         <option>Choose</option>
                                                         <?php 
                                                         foreach($swing_motor as $swing){
                                                             ?>
                                                             <option value="<?php echo $swing->productname;?>"><?php echo $swing->productname;?></option>
                                                             <?php
                                                         } 
                                                         ?>
                                 </select>
                                            </div>
                                            <div>Color : <!--<input class="form-control" type="text" name="product_color" value="<?php echo ucfirst($washer_det->product_color);?>">--> </div>
                                       <select class="form-control"  name="product_color" >
                                                 <option value="<?php echo $cooler_det->product_color;?>"><?php echo $cooler_det->product_color;?></option>
                                                         <option>Choose Color</option>
                                                         <?php 
                                                         foreach($colors as $c){
                                                             ?>
                                                             <option value="<?php echo $c->color_name;?>"><?php echo $c->color_name;?></option>
                                                             <?php
                                                         } 
                                                         ?>
                                 </select>
                                        
                                        
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <?php 
                                                if($barcode_det){
                                                ?> 
                                                <div style='margin-left: 15px;'> 
                                               <div style="font-size: 20px;">Actual Qty : <input class="form-control" type="text" name="actual_qty" value="<?php echo $barcode_det->actual_qty;?>"> </div>
                                               <div style="font-size: 20px;">Barcode Start : <input class="form-control" type="text" name="barcode_start" value="<?php echo $barcode_det->barcode_start;?>"> </div>
                                               <div style="font-size: 20px;">Barcode End : <input class="form-control" type="text" name="barcode_end" value="<?php echo $barcode_det->barcode_end;?>"> </div>
                                               
                                                </div>
                                                <?php
                                                }else {
                                                    ?> 
                                                    <div style="font-size: 20px;">Actual Qty  : <input class="form-control" type="text" name="actual_qty" value=""> </div>
                                                    <div style="font-size: 20px;">Barcode Start  : <input class="form-control" type="text" name="barcode_start" value=""> </div>
                                                    <div style="font-size: 20px;">Barcode End  : <input class="form-control" type="text" name="barcode_end" value=""> </div>
                                                    <?php  
                                                }
                                              ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 mb-2 float-left m-t-10">
                         <input type="submit" name="productSubmit" id="submit" value="Submit" class="btn btn-primary">
                         </div>
                         <input type="hidden" name="id" value="<?php echo $id;?>"> 
                         <input type="hidden" name="ptype" value="<?php echo $ptype="SKY COOLERS";?>">
                         
                                    </form>
                                    
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
   


