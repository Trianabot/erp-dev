    
<style>

    
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
                            <a class="nav-link" href="<?php echo base_url()?>Plant_Dashboard/Production_plan" ><i class="fa fa-fw fa-user-circle"></i>Production Plan</a>  
                        </li>
                        <li class="nav-item">
                                            <a class="nav-link <?=($this->uri->segment(2)==='prod_plan_edit')?'active':''?>" href="<?php echo base_url();?>Plant_Dashboard/prod_plan_edit" ><i class="fa fa-fw fa-user-circle"></i>Production Plan Edit</a>                              
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
                        <div class="page-header">
                            <!--//<h2 class="pageheader-title">Production Plan Edit </h2>-->

                          
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-color:#e9ecef">
               

                        <div class="card">
                        <div class="row margin0 grey">
                                <div class="col-md-12 m-t-10"  >
                                    <h3>Critical Area Reassignment</h3>
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
										 <div class="row"> 
                                                <div class="col-xs-12 col-sm-8 col-md-6" style="margin:0px auto;"> 
                                               <div class="clearfix"></div>
                                               
													<div class="col-md-12 float-left nopadding">
                                    <form name="change_manpower" id="change_manpower" action="<?php echo base_url()?>Plant_Dashboard/change_manpower" method="post">
                                                   <!--  <form name="edit" action="<?php echo base_url();?>Plant_Dashboard/edit_plan" method="post"> -->
                                          
                                         
												<label for="input-select" class="col-3 col-lg-6 col-md-3 col-form-label">Select Product </label>
												<div class="col-9 col-lg-10">
												<select class="form-control"  name="pname" id="pname" >
                                                   <?php if($product_Name != null){?> <option value="<?php echo $product_Name;?>"><?php echo $productname;}?></option>
                                                  <?php if($product_Name == null){?> <option >Choose...</option><?php }?>
                                    <?php 
                                                        foreach($mfg_details as $product){
                                                           
                                                           if($product->product_name == $product_Name){?>
                                                            <option value="<?php echo $product_Name;?>"><?php echo $product->product;?></option>
                                                         <?php  }else{
                                                        ?>
                                                        
                                                        <option value="<?php echo $product->product_name;?>"><?php echo $product->product;?></option>
                                                        <?php
                                                    } }
                                                        ?>
                                </select>
                                <span class="text-danger"> <?php echo form_error("product_Name");?></span>
                            </div>
                            
                            
                                          
                                         </div>
													<div class="clearfix"></div>
                                
                                 
                                <label for="inputEmail2" class="col-3 col-lg-6 col-md-3 col-form-label">Select Resource</label>
                                <div class="col-9 col-lg-10">
                                    <select class="form-control" id="manpo" name="manpo" >
                                   
                                     <option >Choose...</option>
                                   
                                       <?php
                                        foreach($man_details as $ca){
                                            
                                            ?>
                                            <option value="<?php echo $ca->mp_name;?>"><?php echo $ca->mp_name;?></option>
                                            <?php
                                        }?>


                                  <?php   
                                        ?>
                                    </select>
                                </div>
                            
                           <!--  </form> -->
                            
                           
                           <input type="hidden" name="id" id="productid" value="<?php echo $id;?>">
                          
                           
                           
                            
                                <label for="inputEmail2" class="col-3 col-lg-6 col-md-3 col-form-label">Select CA</label>
                                <div class="col-9 col-lg-10">
                                    <select class="form-control" name="ca_name" id="ca_name">
                                        <option>Choose CA </option>
                                        
                                    </select>
                                </div>
                          
                            
                               
                                    
                                             <label for="inputEmail2" class="col-3 col-lg-6 col-md-3 col-form-label">Change Resource</label>
                                           <div class="col-9 col-lg-10">
                                                <select class="form-control" name="change_resource" id="input-select">
                                                
                                                <option>Change Resource</option>
                                                <?php 
                                                
                                       foreach($man_details as $ca){

                                           if($present_manpower != $ca->mp_name){?>
                                            <option value="<?php echo $ca->mp_name;?>"><?php echo $ca->mp_name;?></option>
                                         <?php  }
                                           ?>
                                           
                                           
                                           <?php
                                       } 
                                       ?>
                                            </select>
                                            </div>
                                    
                                            
                                            
                                            

                                            
                        
                                            <div class="clearfix"></div>

                                            
                                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 float-left text-center">
                                            <button class="btn btn-primary" style="margin-top:10px; align:center">Submit</button>
                                        </div>
                                       
                                        <!-- /.card-body -->
                                   
                                
                            
                        
                         </form> 
                         </div>
                         </div>
                         </div>
                         </div>
                         </div>
<div class="col-md-12 m-t-10" style="background-color:#e9ecef">
    <h3>Barcode Assignment</h3>
    </div>
 <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               

                        <div class="card">
                        <div class="row margin0 grey">
                                
                                    <div class="card-body">
                                        <div class="col-xs-12 col-sm-8 col-md-6" style="margin:0px auto;>
                                        <div class="form-group row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">

<div class="successmsg" id="successmsg"><h5 style="color:red"><?php echo $this->session->flashdata('barcode'); ?></h5> </div>
                                               <div class="errmsg" id="errmsg"><h5 style="color:red"><?php echo $this->session->flashdata('error_report'); ?></h5> </div>
<form action="<?php echo base_url();?>Plant_Dashboard/barcode_assign" method="post">	
                         
                                              
												<label for="input-select" style="margin-top: 10px; margin-right: 8px;"class="col-3 col-lg-6 col-md-3 col-form-label">Select Date </label>
												<div class="col-9 col-lg-10 nopadding">
												<select class="form-control" name="cdate" id="cdate" >
                                                <?php if($dat != null){?> <option value="<?php echo $dat;?>"><?php echo $dat;}?></option>
                                                  <?php if($dat == null){?> <option >Choose...</option><?php }?>
                                    <?php 
                                                        foreach($date_details as $date){
                                                            ?>
                                                          
                                                        <option value="<?php echo $date->cur_date;?>"><?php echo $date->cur_date;?></option>
                                                    <?php }?>
                                </select>
                                <span class="text-danger"> <?php echo form_error("product_Name");?></span>
                           
                            </div>
                         
                                       
                                         <input type="hidden" name="selectdate" value="<?php echo $dat;?>">
												<label for="input-select" style="margin-top: 10px; margin-right: 8px;"class="col-3 col-lg-6 col-md-3 col-form-label">Select Product </label>
												<div class="col-9 col-lg-10  nopadding">
												<select class="form-control"  name="product" id="pro" >
                                               <?php if($pro_name != null){?> <option value="<?php echo $pro_name;?>"><?php echo $pro_name;}?></option>
                                                  <?php if($pro_name == null){?> <option >Choose...</option><?php }?>
                                   
                                                      
                                </select>
                                <span class="text-danger"> <?php echo form_error("product_Name");?></span>
                            </div>
                
                        </div>
                        
							
                          <div class="col-md-12 float-left nopadding  m-t-20">
							 <div class="form-group col-md-5 float-left">
                                <label> Plan Qty: </label>
                                <input type="text" name="product_qty" id="product_qty" value="<?php echo $product_qty;?>" class="form-control" readonly>
                            </div>
							 <div class="form-group col-md-5 float-left">
                                <label>  Actual Qty: </label>
                                <span id="errmsgnumber" style="color:red"></span>
                                <input type="text" id="actual_qty" name="actual_qty" value="" class="form-control prodplan_Qty">
                                
                                
                            </div>
                        </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 float-left nopadding m-t-20">
							    <div class="form-group col-md-5 float-left ">
                                         <label for="inputText3" class="">Barcode From </label>
                                         <span id="errmsgnume" style="color:red"></span>
                                         <input style="width: 100%;"name="barcode_from[]" maxlength="14" id="pnamefrom" onkeyup="populateSecondTextBox();" type="text" class="form-control">
                                     </div>
                                    
                                      <div class="form-group col-md-5 float-left">
                                         <label for="inputText3" class="">Barcode To</label>
                                         <input name="barcode_to[]" id="pnameto" type="text"  class="form-control" readonly>
                                     </div>
                                     
                                     <div class="col-xl-2 col-lg-1 col-md-2 col-sm-2 col-2 mb-2 float-left pt-2">
                                     <button type="button" name="add" id="add" class="btn btn-success" style="margin-left:5px;margin-top:18px;">Add</button>
                                         
                                     </div>
                                </div>
                                     <div class="clearfix"></div>
							  <div class="col-md-12">
                             <table id="dynamic_field"></table>
                         </div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-2 float-left text-center">
                                            <button class="btn btn-primary" style="margin-top:10px;">Submit</button>
                                        </div>
                           
												</form>	
                                               
                                                <div class="sucmsg" id="sucmsg"><h5 style="color:red"><?php echo $this->session->flashdata('barcode'); ?></h5>
                                                
                                    </div>
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
    $("#widgetFieldInput").change(function() {
        this.form.submit();
});
});
</script>

<script>  
$(document).ready(function(){  

    var result = "AAQWERT12ER34Q00001".match(/[^\d]+|\d+/g);
//alert(result[6]);
var i=1;  var j=1;
$('#add').click(function(){  
i++;  

$('#dynamic_field').append('<tr id="row'+i+'"><td><label class="col-form-label">  </label></td><td style="width:201px;"><input type="text" name="barcode_from[]" placeholder="Enter Barcode from" class="form-control name_list " /></td><td style="width:33px;"></td><td style="width:201px;"><input type="text" name="barcode_to[]" placeholder="Enter Barcode to" class="form-control name_list" /></td><td style="width:33px;"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"style="padding: 6px 0px;">Delete</button></td></tr>');  
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
function populateSecondTextBox() {
    //alert("asas");
    var data = document.getElementById('pnamefrom').value ;
    var  b = parseInt(data.slice(9,14));
    var c = data.slice(0,9);
    var actual_qty = document.getElementById('actual_qty').value ;
   // var c=  (b)+document.getElementById('actual_qty').value;
    //alert(c);


    
    var txtFirstNumberValue = data.slice(9,14);
    var firstlength = data.length;
    if (isNaN(txtFirstNumberValue) && firstlength < 14) {
    //alert(firstlength);
        $("#errmsgnume").html("Last Five Digits Number Only and Enter Total 14 digits").show().fadeOut(8000);
        document.getElementById('pnamefrom').value = data.slice(0,9);
} else{
    
}
    
    if(firstlength == 14){
      var txtSecondNumberValue = document.getElementById('actual_qty').value ;
      var resultone = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      //alert(resultone);
      
      var result = resultone -1;
      if (!isNaN(result)) {
        var length = result.toString().length;
         //var result = str.concat('data.slice(0,9)','result'); 
         //var res = c.concat(result);
         //alert(length);
         if(length == 1 ){
            document.getElementById('pnameto').value = c + '0000' + result;
         }else if(length == 2){
            document.getElementById('pnameto').value = c + '000' + result;
         }else if(length == 3){
            document.getElementById('pnameto').value = c + '00' + result;
         }else if(length == 4){
            document.getElementById('pnameto').value = c + '0' + result;
         }else if(length == 5){
            document.getElementById('pnameto').value = c + result;
         }else if(length > 5){
               alert("Error in  barcode Size");
               document.getElementById('pnameto').value = "";
         }
         //document.getElementById('pnameto').value = c + result;
      }
      }
      
}
</script>


<script type="text/javascript">

// Ajax post
$(document).ready(function() {
    $('#successmsg').delay(1000).fadeOut(300); 
    $('#sucmsg').delay(1000).fadeOut(300);
    $('#errmsg').delay(1000).fadeOut(300);
    $('#cdate').change(function(){ 
        var id=$(this).val();
        $.ajax({
            url : "<?php echo site_url('Plant_Dashboard/get_sub_category');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
                 
                var html = '<option value="">Choose..</option>';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].id+'>'+data[i].product_name+'</option>';
                }
                $('#pro').html(html);

            }
        });
        return false;
    });

    $('#manpo').change(function(){ 

        var product_Name = $(pname).val();
        var manpower = $(manpo).val();
        
       //alert(product_Name);//alert(manpower);
        $.ajax({
            url : "<?php echo site_url('Plant_Dashboard/edit_plan');?>",
            method : "POST",
            data: {product_Name: product_Name, manpower: manpower},
            async : true,
            dataType : 'json',
            success: function(data){
                 //alert(data[0].product_info_id);
                var html = '<option value="">Choose..</option>';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value="' + data[i].ca_name+ '">' + data[i].ca_name + '</option>';
                   // $('#ca_name').append('<option value="' + data[i].ca_name+ '">' + data[i].ca_name + '</option>');
                  }
                $('#ca_name').html(html);
                $('#productid').val(data[0].product_info_id);
            }
        });
        return false;
    });
    $('#pro').change(function(){ 
        var selectdate=$(cdate).val();
        var product=$(pro).val();
       
        $.ajax({
            url : "<?php echo site_url('Plant_Dashboard/get_product');?>",
            method : "POST",
            data: {selectdate: selectdate, product: product},
           
            async : true,
            dataType : 'json',
            success: function(data){
                
                 $('#product_qty').val(data[0].product_qty);

            }
        });
       
        return false;
    });
    
     $('#pro').change(function(){ 
       
        var product=$(pro).val();
       
       
        $.ajax({
            url : "<?php echo site_url('Plant_Dashboard/get_product_barcodes');?>",
            method : "POST",
            data: {product: product},
           
            async : true,
            dataType : 'json',
            success: function(data){
                //alert(data);
                
                 $('#actual_qty').val(data[0].actual_qty);     
                 $('#pnamefrom').val(data[0].barcode_start);
                 $('#pnameto').val(data[0].barcode_end);
            }
        });
        return false;
    });
});

</script>