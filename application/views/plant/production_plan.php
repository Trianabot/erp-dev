<style>
    .m-t-50{
        margin-top:50px;
    }
</style>
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
                     <a class="nav-link <?=($this->uri->segment(2)==='Production_plan')?'active':''?>" href="<?php echo base_url()?>Plant_Dashboard/Production_plan" ><i class="fa fa-fw fa-user-circle"></i>Production Plan</a>  
                 </li>
                 <li class="nav-item ">
                                     <a class="nav-link" href="<?php echo base_url();?>Plant_Dashboard/prod_plan_edit" ><i class="fa fa-fw fa-user-circle"></i>Production Plan Edit</a>                              
                                 </li>
                 
                
 <li class="nav-item">
                             <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> Production History </a>
                             <div id="submenu-4" class="collapse submenu" style="">
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
       
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             </div>
         </div>


         <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        

                 <div class="card m-t-50">
                 <div class="row margin0 grey">
                           <div class="form-group col-md-12 float-left"><h3 style="margin-top:15px;margin-bottom:0px;">Product Selection</h3></div>
                             <div class="card-body">
                                 <div class="successmsg" id="successmsg"><h5 style="color:red"><?php echo $this->session->flashdata('item'); ?></h5> </div>
                                 <div class="successmsg" id="successmsg"><h5 style="color:red"><?php echo $this->session->flashdata('error_report'); ?></h5> </div>
                             
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
                                
                                 <form action = "<?php echo base_url();?>Plant_Dashboard/addProduct" method = "post">
                                  <div class="col-md-3 float-left p-r-0">
                                        
                                                 <label for="input-select">Product Type</label>
                                                 <select class="form-control" id="ptype" name="ptype" onchange="this.form.submit()">
                                                 <?php if($ptype == "SKY COOLERS"){?> <option value="<?php echo $ptype;?>"><?php echo $ptype;}?></option>
                                                 <?php if($ptype == "SKYZEN WASHERS"){?> <option value="<?php echo $ptype;?>"><?php echo $ptype;}?></option>
                                                 <?php if($ptype == "Choose"){?> <option value=""><?php echo "Choose..";}?></option>
                                                     <option value="SKY COOLERS">Cooler</option>
                                                     <option value="SKYZEN WASHERS">Washer</option>
                                         </select>
                                        
                                      </div>
                                    
                                     </form>
                                        <!--vgr-->
                                         <form action = "<?php echo base_url();?>Plant_Dashboard/addProduction_plan" method = "post">
                                   <div class="form-group col-md-3 float-left  nopadding">
                                         <div class="col-md-12 float-left ">
                                          
                                             <div class="form-group col-md-12 float-left" style="padding:0px;">
                                                 <label for="input-select">Brand Name</label>
                                                 <select class="form-control" name="company_name" id="input-select">
                                                 <option>Choose Company</option>
                                                 <?php 
                                                                     foreach($companies as $c){
                                                                         ?>
                                                                         <option value="<?php echo $c->name;?>"><?php echo $c->name;?></option>
                                                                         <?php
                                                                     } 
                                                                     ?>
                                             </select>
                                             </div>
                                          </div>
                                         </div>
                                  <!--vgr-->
                                     <div class="clearfix"></div>
                                     
                                   
                                  <div class="col-md-12"> 
                                  
                                  <input type="hidden" name="ptype" value="<?php echo $ptype;?>">
                                  <div class="form-group col-md-3 float-left  nopadding">
                                <div class="col-md-12 float-left nopadding">
                                    <label for="input-select">Select Date</label><br>
                                    <input type="date" name="cur_date"  id="cur_date" style="width:100%; height:38px;">
                                 </div>
                                  </div>
                                 
                                 <div class="form-group col-md-3 float-left  nopadding">
                                         <div class="col-md-12 float-left ">
                                          
                                             <div class="form-group col-md-12 float-left" style="padding:0px;">
                                                 <label for="input-select">Product Name</label>
                                                 <select class="form-control" name="product_Name" id="input-select">
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
                                          </div>
                                         </div>
                                      <!--       <div class="form-group col-md-3 float-left  nopadding">-->
                                      <!--       <div class="col-md-12 float-left nopadding">-->
                                      <!--       <div class="form-group col-md-12 float-left" style="padding:0px;">   -->
                                      <!--   <label for="input-select">Product Color</label>-->
                                      <!--<input type="text" name="pcolor" id="" class="form-control"> -->
                                      <!--</div>-->
                                      <!--</div>-->
                                      <!--</div>-->
                                          <!--vgr-->
                                   <div class="form-group col-md-3 float-left  nopadding">
                                         <div class="col-md-12 float-left ">
                                          
                                             <div class="form-group col-md-12 float-left" style="padding:0px;">
                                                 <label for="input-select">Product Color</label>
                                                 <select class="form-control" name="pcolor" id="input-select">
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
                                          </div>
                                         </div>
                                  <!--vgr-->
                                           
                                 <!-----Cooler ID------>
                                 <?php if($ptype == "SKY COOLERS"){?>
                                <div class="col-md-12 nopadding m-b-10 float-left" id="cooler_div" >
                                     <div class="form-group col-md-3 float-left nopadding">
                                          <label for="input-select">Fan Motor</label>
                                                     <select class="form-control" id="input-select" name="fan_name" >
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
                                     <div class="form-group col-md-3 float-left">
                                         <label for="input-select">Pump Motor</label>
                                                     <select class="form-control" id="input-select" name="pump_name" >
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
                                     <div class="form-group col-md-3 float-left nopadding">
                                         <label for="input-select">Auto Swing Motor</label>
                                                     <select class="form-control" id="input-select" name="auto_swing_name" >
                                                         <option>Choose</option>
                                                         <?php 
                                                         foreach($swing_motor as $swing){
                                                             ?>
                                                             <option value="<?php echo $swing->productname;?>"><?php echo $swing->productname;?></option>
                                                             <?php
                                                         } 
                                                         ?>
                                 </select>
                                     </div></div>
                                                        <?php }?>
                                    
                                    
                                    
                                   
                                 <?php if($ptype == "SKYZEN WASHERS"){?>
                                       <div class="col-md-12 nopadding m-b-10 float-left" id="washer_div" >
                                     <div class="form-group col-md-3 float-left nopadding">
                                          <label for="input-select">Motor</label>
                                                     <select class="form-control" id="motor_name" name="fan_name" >
                                                         <option>Change Type</option>
                                                         <?php 
                                                                     foreach($motor as $fan){
                                                                         ?>
                                                                         <option value="<?php echo $fan->productname;?>"><?php echo $fan->productname;?></option>
                                                                         <?php
                                                                     } 
                                                                     ?>
                                             </select>
                                     </div>
                                     <div class="form-group col-md-3 float-left ">
                                         <label for="input-select">Timer</label>
                                                     <select class="form-control" id="timer_name" name="pump_name" >
                                                         <option>Change Type</option>
                                                         <?php 
                                                                     foreach($timer_motor as $pump){
                                                                         ?>
                                                                         <option value="<?php echo $pump->productname;?>"><?php echo $pump->productname;?></option>
                                                                         <?php
                                                                     } 
                                                                     ?>
                                             </select>
                                     </div>
                                     <div class="form-group col-md-3 float-left nopadding">
                                         <label for="input-select">Gear</label>
                                                     <select class="form-control" id="gear_name" name="auto_swing_name" >
                                                         <option>Choose</option>
                                                         <?php 
                                                         foreach($gear_details as $swing){
                                                             ?>
                                                             <option value="<?php echo $swing->productname;?>"><?php echo $swing->productname;?></option>
                                                             <?php
                                                         } 
                                                         ?>
                                 </select>
                                     </div>
                                    
                                    
                                    
                                    
                                 </div> 
                                 <?php }?>
                                <!--<div id="washer_div">asass</div> --> 

                                             
                                             
                                                         
                          <?php echo validation_errors(); ?>  
                          <div class="col-md-12 nopadding m-b-10 float-left">
                          <div class="form-group col-md-3 float-left nopadding">
                         <label for="inputText3" class="">Plan Quantity</label>
                         <span id="errmsgnumber" style="color:red"></span>
                         <input  name="product_qty" id="pname" type="text"  placeholder="Enter.." class="form-control prodplan_Qty">
                         
                     </div>
                         
                             <div class="form-group col-md-3 float-left">
                             <label for="input-select">Select Supervisor</label>
                             <select name="supervisor_name" class="form-control" id="input-select">
                                 <option>Choose ..</option>
                                 <?php 
                                    foreach($supervisor_list as $ca){
                                        ?>
                                        <option value="<?php echo $ca->id;?>"><?php echo $ca->supervisor_name;?></option>
                                        <?php
                                    } 
                                    ?>
                             </select>
                         </div>	
									   <div class="form-group col-md-3 float-left nopadding">
                            <label for="input-select">Line Supervisor</label>
                                    <select name="line_name" class="form-control" id="input-select">
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
                         <div class='form-group col-md-3 float-left'>
                             <label>Manpower Quantity</label>
                             <input type='text' name='manpower_Qty' class='form-control'>
                         </div>
                         </div>
                     <div class="clearfix"></div>
                     <br>
                     <div class="form-group col-md-12 float-left"><h3>Critical Area Assignment </h3></div>
                     <div class="col-md-12 nopadding">
                     <div class="form-group col-md-3 float-left">
                             <label for="input-select">Select CA</label>
                             <select name="ca_names['0'][]" id="ca_names" multiple="multiple" class="form-control" id="input-select">
                                <!--  <option>Choose CA</option> -->
                                 <?php 
                                    foreach($ca_details as $ca){
                                        ?>
                                       
                                        <option value="<?php echo $ca->ca_name;?>"><?php echo $ca->ca_name;?></option>
                                        <?php
                                    } 
                                    ?>
                             </select>
                         </div>
                          <!--<div class="col-md-1 float-left" style="margin-top:35px;"> - </div>-->
                         <div class="form-group col-md-3 float-left">
                             <label for="input-select">Select Manpower</label>
                             <select name="manpower_name[]" class="form-control m-t-20" id="input-select">
                                 <option>Choose Manpower</option>
                                 <?php 
                                    foreach($man_details as $ca){
                                        ?>
                                        <option value="<?php echo $ca->mp_name;?>"><?php echo $ca->mp_name;?></option>
                                        <?php
                                    } 
                                    ?>
                             </select>
                         </div>
                                              
                                             
                         <div class="form-group col-md-1 float-left pt-4">
                         <button type="button" name="add_select" id="add_select" class="btn btn-success m-t-20">Add</button>
                             
                             
                         </div>
                         </div>
                             <div class="clearfix"></div>
                             <div class="col-md-10 m-r-20 dynamic">
                                 <table id="dynamic_field_select"></table>
                             </div>
                                             <br>
                         
                       
                         <!--<div class="form-group col-md-9">
                                     <div class="form-group col-md-4 float-left nopadding">
                                         <label for="inputText3" class="">Barcode From </label>
                                         <input style="width: 94%;"name="barcode_from[]" id="pname" type="text" class="form-control">
                                     </div>
                                    
                                      <div class="form-group col-md-4 float-left">
                                         <label for="inputText3" class="">Barcode To</label>
                                         <input name="barcode_to[]" id="pname" type="text" class="form-control" style="width:230px; margin-left:-8px;">
                                     </div>
                                     
                                     <div class="col-xl-3 col-lg-2 col-md-2 col-sm-12 col-12 mb-2 float-left pt-4">
                                     <button type="button" name="add" id="add" class="btn btn-success" style="margin-left:5px">Add</button>
                                         
                                     </div>
                                     <div class="clearfix"></div>
                                     
                         </div>-->
                         <div class="col-md-10">
                             <table id="dynamic_field"></table>
                         </div>
                     
                         <div class="clearfix"></div>
                         <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 mb-2 float-left m-t-10">
                         <input type="submit" name="productSubmit" id="submit" value="Submit" class="btn btn-primary">
                         </div>
                         <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 mb-2 float-left m-t-10">
                         <input type="reset" value="Cancel" class="btn btn-light">
                         </div>
                     
                        </form>
                                         </div>
                                 </div>
                             </div>
                             
                         </div>
         </div>
       
</div>
</div>


<html>  
<head>  
<title></title>  
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
</head>  

</html>  
<script>  
$(document).ready(function(){  
    $('#successmsg').delay(1000).fadeOut(300);
    document.getElementById('cur_date').valueAsDate = new Date();
var i=1;  var j=1;
$('#add').click(function(){  
i++;  

$('#dynamic_field').append('<tr id="row'+i+'"><td><label class="col-form-label">  </label></td><td  style="width:227px;"><input type="text" name="barcode_from[]" placeholder="Enter Barcode from" class="form-control name_list " /></td><td style="width:24px;"></td><td  style="width:241px;"><input type="text" name="barcode_to[]" placeholder="Enter Barcode to" class="form-control name_list" /></td><td style="width:27px;"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"style="padding: 8px 9px;">Delete</button></td></tr>');  
});  


$(document).on('click', '.btn_remove', function(){  
var button_id = $(this).attr("id");   
$('#row'+button_id+'').remove();  
});  
$('#submit').click(function(){       
 
$('#pname')[0].reset();  
    

});  


});  
</script>
<script>
$(document).ready(function(){  
var j=0 ;
$('#add_select').click(function(){  
j++;  

$('#dynamic_field_select').append('<tr id="row'+j+'"><td style="width:214px;"><select name="ca_names['+j+'][]" multiple="multiple" class="form-control"> <option value="0"></option> <?php foreach($ca_details as $ca){?><option value="<?php echo $ca->ca_name;?>"><?php echo $ca->ca_name;?></option><?php } ?></select></td><td style="width:30px;"></td><td style="width:214px;"> <select name="manpower_name[]" class="form-control "> <option value="0">select..</option>  <?php foreach($man_details as $ma){?><option value="<?php echo $ma->mp_name;?>"><?php echo $ma->mp_name;?></option><?php } ?><select></td><td style="width:30px;"></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove" style="padding: 8px 9px;">Delete</button></td></tr>');  
}); 
});
</script>

<script type="text/javascript">
function showDiv(select){
if(select.value=="Cooler"){
document.getElementById('cooler_div').style.display = "block";
document.getElementById('washer_div').style.display = "none";
} 
else if(select.value=="Washer"){
document.getElementById('washer_div').style.display = "block";
document.getElementById('cooler_div').style.display = "none";
}else{
document.getElementById('washer_div').style.display = "none";
document.getElementById('cooler_div').style.display = "none";
}

} 
</script>


    
