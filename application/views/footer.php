<script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url()?>assets/libs/js/crmcustom.js"></script>
<script src="<?php echo base_url()?>assets/libs/js/stockcustom.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url()?>assets/libs/js/bootstrap.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- sparkline js -->
    <script src="<?php echo base_url()?>assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/charts/sparkline/spark-js.js"></script>
    <script src="<?php echo base_url()?>assets/libs/js/main-js.js"></script>
    
     <script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js'></script>

<!--    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script> -->
<!--    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"> </script>-->
<!--<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"> </script>-->
<!--<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"> </script>-->
<!--<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>-->
    <!-- <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"> </script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"> </script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
   <script src="<?php echo base_url()?>assets/libs/js/autoNumeric.js"> </script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>  
    <script src="<?php echo base_url()?>assets/libs/js/newdistorder.js"> </script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/libs/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/libs/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
  <script src="<?php echo base_url()?>assets/libs/js/jquery.multiselect.js"></script>
  <script src="<?php echo base_url()?>assets/libs/js/settingcustom.js"></script>   

<script src="<?php echo base_url()?>assets/libs/js/mastercustom.js"></script>
    <script>
    $(function () {
        $('#product_eligible').multiselect({
          
        });
        
        $('#invoice_No').multiselect({
    columns: 4,
   
    search: true,
    selectAll: true
});
    });
</script>


<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	
</script>


<script>
		$(document).ready(function() {
		var someOptions = {aSep: ',' , aPad: true};
		   $('.distPrice').autoNumeric('init',someOptions);  
           $('.retailerPrice').autoNumeric('init',someOptions); 
           $('.qty').autoNumeric('init',someOptions);   
          // $('.aspallowrateafter_Free').autoNumeric('init',someOptions);
		});
   
 

 </script>

   <script>

$(document).ready(function(){
        
            $('#same_Shipping').change(function() {
                   var value = $(this).is(':checked');
             if(value == true){
                 $("#shippingnew_Name").rules("remove", "required");
                 $("#shippingnew_Address").rules("remove", "required");
//                   $("#shipnew_Name").prop("required", false);
//                    $("#shipnew_Address").prop("required", false;
                }
               
            });
    
//            $('input:checkbox[name=same_Shipping]').each(function() 
//            {    
//                var value = $(this).is(':checked');
//               alert(value);
//                if(value == 'true'){
//                     $("#shipnew_Name").prop("required", false);
//                    $("#shipnew_Address").prop("required", false;
//                   }
//
//            });
                    
//      $('input:checkbox[name=same_Shipping]').each(function() 
//            {    
//                var value = $(this).is(':checked');
//                alert(value);
//                if(value == 1){
//                     $("#shipnew_Name").attr("value", "Same Contact Person");
//                    $("#shipnew_Address").attr("value", "Same Ship Address");
//                   }
//
//            });
    
    
  var $progControl = $(".progControlSelect2").select2({        

        placeholder: "Please select"//placeholder

    });

     
		$("#product_Hsn").change(function(){	
            var hsnID = $(this).val();
 			if(hsnID) {
                $.ajax({
                    url: '<?php echo base_url()?>Products/hsn_Details/'+hsnID,					
                    type: "GET",
                    dataType: "json",
                    success:function(data){
                            //alert(JSON.stringify(data));
                                    $("#product_GST").val(data['hsn_info'][0].product_GST);
                                   	 
						},
				
                	});
		        }
    });
    

})

</script>
    <script>
                $(document).ready(function() {
    $('#brandTable').DataTable();
    $('#chequetrackTable').DataTable();
    $('#salesexeTable').DataTable();
$('#paymentTable').DataTable();
  
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                text: 'Print',
                exportOptions: {
                    modifier: {
                        selected: null
                    }
                }
            },
            
        ],
        select: true
    } );

    $('#aspordersTable').DataTable({
        
        
     dom: 'Blfrtip',
          //buttons: ['copy', 'csv', 'excel', 'pdf', 'print'
    //],
         buttons: [
            {
                extend: 'print',
                text: 'Print',
                exportOptions: {
                   modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3]
                }
            },
             {
                extend: 'pdf',
                text: 'Pdf',
                exportOptions: {
                    modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3]
                }
            },
             {
                extend: 'csv',
                text: 'CSV',
                exportOptions: {
                    modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3]
                }
            },
              {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                    modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3]
                }
            },
            
        ],
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        
            
    });
    
                    
                    $('#aspTable').DataTable({
        
        
     dom: 'Blfrtip',
          //buttons: ['copy', 'csv', 'excel', 'pdf', 'print'
    //],
         buttons: [
            {
                extend: 'print',
                text: 'Print',
                exportOptions: {
                   modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3,4,5,6]
                }
            },
             {
                extend: 'pdf',
                text: 'Pdf',
                exportOptions: {
                    modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3,4,5,6]
                }
            },
             {
                extend: 'csv',
                text: 'CSV',
                exportOptions: {
                    modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3,4,5,6]
                }
            },
              {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                    modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3,4,5,6]
                }
            },
            
        ],
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        
            
    });
                    
                    
    $('#asplocationTable').dataTable({
        
        
     dom: 'Blfrtip',
          //buttons: ['copy', 'csv', 'excel', 'pdf', 'print'
    //],
         buttons: [
            {
                extend: 'print',
                text: 'Print',
                exportOptions: {
                   modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3,4,5]
                }
            },
             {
                extend: 'pdf',
                text: 'Pdf',
                exportOptions: {
                    modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3,4,5]
                }
            },
             {
                extend: 'csv',
                text: 'CSV',
                exportOptions: {
                    modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3,4,5]
                }
            },
              {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                    modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'current'
                        },
                    columns: [1,2,3,4,5]
                }
            },
            
        ],
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        
            
    });

} );
            </script>
   
<script>

$(document).ready(function(){
    
$("#brandform").validate({

ignore: [],

rules : { 

	brand_Name : {
			required: true,
            remote: {  // value of 'username' field is sent by default
                type: 'POST',
                url: '<?php echo base_url()?>Products/brandExist'
                }   		
	}

},

messages: {



	brand_Name : {

		 required: "Please enter brand name",

		 

	}

},

});
    
      $("#addaspForm").validate({

ignore: [],

rules : { 

	asp_Name : {
			required: true,
            remote: {  // value of 'username' field is sent by default
                type: 'POST',
                //url: baseURL+'Crm/aspnameExist/', 
                url: '<?php echo base_url()?>Crm/aspnameExist'
                }   		
	}

},

messages: {



	asp_Name : {

		 required: "Please enter brand name",

		 

	}

},

});
    
    

});

</script>

  
<script>

$(document).ready(function(){
    
    $(".prodplan_Qty").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsgnumber").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
   
   $("#cust_Pincode").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#custpinerr").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
   
   $("#proddemand_Qty").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#custpinerr").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
    
    $("#aspproduct_Quantity").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#custpinerr").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   }); 
   
   $("#aspproduct_UnitRate").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#custpinerr").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
    
    $(".crmupdate_Amt").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#custpinerr").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
    
    $(".crm_Amt").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#custpinerr").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
   
   $(".materialreceive_Qty").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#custpinerr").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
   
     
    
    
$("#categoryform").validate({

ignore: [],

rules : { 

	category_Name : {
			required: true,
            remote: {  // value of 'username' field is sent by default
                type: 'POST',
                url: '<?php echo base_url()?>Products/categoryExist'
                }   		
	}

},

messages: {



	category_Name : {

		 required: "Please enter category name",

		 

	}

},

});

});

</script>
<script type="text/javascript">
$(document).ready(function($){
        
         $('select[name="distorderproduct_Code"]').on('change', function() {
            var product = $(this).val();
            if(product) {
            $.ajax({
            url: '<?php echo base_url() ?>Sales/produt_Details/'+product,					
            type: "GET",
            dataType: "json",
            success:function(data){
                    $("#distorderprod_Name").val(data['product_info'][0]['product_Master']); 

            }
            });
        }
         });
         
        $('select[name="sale_ProductName"]').on('change', function() {
            var product = $(this).val();
            if(product) {
            $.ajax({
            url: '<?php echo base_url() ?>Sales/produt_Details/'+product,					
            type: "GET",
            dataType: "json",
            success:function(data){
                    $("#saleprod_Name").val(data['product_info'][0]['product_Master']); 

            }
            });
        }

        });
       
       
        $('select[name="cat_Name"]').on('change', function() {
            var cat_ID = $(this).val();
            if(cat_ID) {
                $.ajax({
                    url: '<?php echo base_url()?>Products/subcat/'+cat_ID,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="subcat_Name"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="subcat_Name"]').append('<option value="'+ value.subcat_Id +'">'+ value.subcategory_Name +'</option>');
                        });
                    }
                });
            }
        });
    });
</script>

<script type="text/javascript">
$(document).ready(function($){
        $('select[name="state_Name"]').on('change', function() {
            var state_ID = $(this).val();
            if(state_ID) {
                $.ajax({
                    url: '<?php echo base_url()?>Dealers/dist/'+state_ID,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="dist_Name"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="dist_Name"]').append('<option value="'+ value.dist_Id +'">'+ value.dist_name +'</option>');
                        });
                    }
                });
            }
        });
    });
</script>
<script type="text/javascript">
$(document).ready(function($){
        $('select[name="diststate_Name"]').on('change', function() {
            var state_ID = $(this).val();
            if(state_ID) {
                $.ajax({
                    url: '<?php echo base_url()?>Dealers/distCity/'+state_ID,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                            //console.log(data);
                        $('select[name="distcity_Name"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="distcity_Name"]').append('<option value="'+ value.city_Id +'">'+ value.city_Name +'</option>');
                        });
                    }
                });
            }
        });
    });
</script> 


<script type="text/javascript">
$(document).ready(function($){
        $('select[name="retailer_State"]').on('change', function() {
            var state_ID = $(this).val();
            if(state_ID) {
                $.ajax({
                    url: '<?php echo base_url()?>Dealers/retailerCity/'+state_ID,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="retailer_City"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="retailer_City"]').append('<option value="'+ value.city_Id +'">'+ value.city_Name +'</option>');
                        });
                    }
                });
            }
        });
    });
</script> 

<script type="text/javascript">
$(document).ready(function($){
        $('select[name="suppstate_Name"]').on('change', function() {
            var state_ID = $(this).val();
            if(state_ID) {
                $.ajax({
                    url: '<?php echo base_url()?>Purchase/supplierCity/'+state_ID,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="suppcity_Name"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="suppcity_Name"]').append('<option value="'+ value.city_Id +'">'+ value.city_Name +'</option>');
                        });
                    }
                });
            }
        });
    });
</script> 



<script type="text/javascript">
$(document).ready(function($){
        $('select[name="dist_Name"]').on('change', function() {
            var dist_ID = $(this).val();
            if(dist_ID) {
                $.ajax({
                    url: '<?php echo base_url()?>Dealers/Subdist/'+dist_ID,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                        $('select[name="subdist_Name"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="subdist_Name"]').append('<option value="'+ value.subdist_Id +'">'+ value.subdist_Name +'</option>');
                        });
                    }
                });
            }
        });
    });
</script> 



                
<script type="text/javascript">
    $(document).ready(function() {
		$("#distributor_Name").change(function(){	
            var distID = $(this).val();
 			if(distID) {
                $.ajax({
                    url: '<?php echo base_url()?>Distributor/dist_Details/'+distID,					
                    type: "GET",
                    dataType: "json",
                    success:function(data){
                                //console.log(data);
                                //console.log(JSON.stringify(data));
                                 //alert(JSON.stringify(data)); alert(dataset.person[0].userLabels); 
                                 //alert(data['distributor_info'][0]['dist_Mobile']);
                                $("#contact_Person").text(data['distributor_info'][0]['contact_Person']); 
                                $("#dist_Mobile").text(data['distributor_info'][0]['dist_Mobile']);
                                $("#dist_GSTIN").text(data['distributor_info'][0]['dist_GSTIN']);
                                $("#dist_Address1").text(data['distributor_info'][0]['dist_Address1']); 
						},
					error: function(data){
							alert(data);
						}
                	});
		        }else {
                    $("#contact_Person").val('');
                    $("#dist_Mobile").val('');
                    $("#dist_GSTIN").val('');
                    $("#dist_Address1").val('');
                }
	});
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
		$("#product_Name").change(function(){	
            var productID = $(this).val();
            //alert(productID);
 			if(productID) {
                $.ajax({
                    url: '<?php echo base_url()?>Distributor/productDetails/'+productID,					
                    type: "GET",
                    dataType: "json",
                    success:function(data){
                                    $("#product_Qty").val(''); 
                                    $("#product_Value").val('0');
                                    $("#product_Total").val('0');   
                            //alert(JSON.stringify(data));
									$("#product_HSN").val(data['product_info'][0].producthsn_Code);																
                                    $("#product_GST").val(data['product_info'][0].product_GST+' %');
                                    
                                    $("#product_Unitprice").val(data['product_info'][0].productdist_Price); 
                                   
						},
					error: function(data){
                                    $("#product_HSN").val(''); 
                                    $("#product_Unitprice").val('');
                                    $("#product_GST").val('');   
                                    $("#product_Total").val('');   
                                    $("#product_Value").val(''); 
                                    $(".show-buttons").hide();
						}
                	});
		        }
	});
});
</script>


<script type="text/javascript">

	$(document).ready(function() {
    
         $('.succ-msg').delay(3000).fadeOut();
         
		$("#distdetailName").change(function(){
            var value = $(this).val();
           //alert(value);
            if(value == ''){
                $(".distributorBasic").hide();
            }else {
                $(".distributorBasic").show();
            }
        });

        $("#product_Name").change(function(){
            var value = $(this).val();
            if(value == ''){
                $(".show-buttons").hide();
            }else {
                $(".show-buttons").show();
            }
        })

        $("#buttonClearItems").click(function(){
            $("#product_Name").val('0');
            $("#product_HSN").val(''); 
            $("#product_Unitprice").val('');
            $("#product_GST").val('');   
            $("#inputTableTotal").val('');   
            $("#product_Value").val(''); 
            $(".show-buttons").hide();
        });
        
         $("#buttonClear").click(function(){
            $(".show-btns").hide();
            $(".show-butns").hide();
             
             $("#productcat_Name").select2("val", "");			
                $("#asp_sparepartName").val('');
                $("#aspproduct_UnitRate").val('');
                $("#aspDiscount_Perunit").val('');
                $("#aspNet_Amount").val('');			
                $("#aspDiscount_Perunit").val('');  
                $("#aspproduct_Quantity").val('');
             
        });
        
         $("#sale_ProductName").change(function(){
            var value = $(this).val();
            if(value == ''){
                $(".show-btns").hide();
            }else {
                $(".show-btns").show();
            }
        })
        
        $("#distorderproduct_Code").change(function(){
            var value = $(this).val();
            if(value == ''){
                $(".show-butns").hide();
            }else {
                $(".show-butns").show();
            }
        })
        
        $("#aspallowcategory_Name").change(function(){
            var value = $(this).val();
            if(value == ''){
                 $('select[name="aspallowsubcategory_Name"]').empty();
                $(".show-butns").hide();
            }else {
                $(".show-butns").show();
            }
        })

	});

</script>

<script>

$(document).ready(function(){
    
    var visitDate = $('input[name="visitDate"]');
    var deliverydate_Input = $('input[name="delivery_Date"]');
    var date_input = $('input[name="invoice_Date"]'); //our date input has the name "date"
    var sale_Date = $('input[name="sale_Date"]');  
    var asporder_Date = $('input[name="asporder_Date"]');
    var distorder_Date = $('input[name="distorder_Date"]');
    var aspcomplete_Date = $('input[name="dateofComplete"]');
    
     var raiseticket_Date = $('input[name="raiseticket_Date"]');   
    var prodpurchase_Date = $('input[name="prod_Datepurchase"]');
    var container = $('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    
    var asp_Date = $('input[name="Voucher_No1"]');  
    var aspfrom_Date = $('input[name="aspfrom_Date"]');
    var aspto_Date = $('input[name="aspto_Date"]');
    
    var from_Date = $('input[name="from_Date"]');  
    var to_Date = $('input[name="to_Date"]');  
    
    from_Date.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
         orientation: "top"
    });
    
    to_Date.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
         orientation: "top"
    });
    
    aspcomplete_Date.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
         orientation: "top"
    });
    
     visitDate.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
    });
    
    asp_Date.datepicker({
            format: 'mm-dd-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
    });
    
    
    asporder_Date.datepicker({
            format: 'mm-dd-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
            orientation: "top"
    });
    
     
    sale_Date.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
    });
    
    date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
    });
    
    distorder_Date.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
    });

    deliverydate_Input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
    });
    
     prodpurchase_Date.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
    });



})

</script>

<script>
$(document).ready(function(){
    $(".btn-add").click(function(){
       
        
            var prod_name = $("#product_Name").val();
            var myResponse; 
            var myResponse1;
       
            if(prod_name){
                $.ajax({
                        url: '<?php echo base_url()?>Distributor/product_Details/'+prod_name,					
                        type: "GET",
                        dataType: "json",
                        async: false,  
                        success:function(data){
                                    myResponse=data[0].product_Name; 
                                    myResponse1=data[0].product_Id; 							 
                            },

                        error: function(data){
                        }
                    });
            }


                var prod = myResponse;
                var pid = myResponse1;
                var prod_name = prod;			 
                var qty = $("#product_Qty").val();  
                var prod_Hsn = $("#product_HSN").val(); 
                var unitprice = $("#product_Unitprice").val();
                var tax = $("#product_Value").val();
                var gst = $("#product_GST").val();
                var cgst = $("#inputGST").val();  
                var resultDiscount = $("#inputDiscount").val();
                var discount = $("#product_Discount").val();
                var total = $("#product_Total").val();
            
                var _tr= '<tr><input type="hidden" name="product_Id[]" value="'+pid+'"><input type="hidden" name="inputGST[]" value="'+cgst+'"><input type="hidden" name="inputDiscount[]" value="'+resultDiscount+'">'
                +'<td><input type="text" name="product_Name[]" value="'+prod+'" class="form-control"></td>'
                +'<td><input type="text" name="product_HSN[]" value="'+prod_Hsn+'" class="form-control"></td>'
                +'<td><input type="text" name="product_Qty[]" value="'+qty+'" class="form-control"></td>'
                +'<td><input type="text" name="product_Unitprice[]" id="product_Unitprice" value="'+unitprice+'" class="form-control"></td>'
                +'<td><input type="text" name="product_Value[]" value="'+tax+'" class="form-control"></td>'
                +'<td><input type="text" name="product_GST[]" value="'+gst+'" class="form-control"></td>'
                +'<td><input type="text" name="product_Discount[]" value="'+discount+'" class="form-control"></td>'
                +'<td><input type="text" name="product_Total[]" value="'+total+'" class="form-control"></td>'
                +'<td><button type="button" class="btn btn-danger remove_Btn" style="padding:5px 8px;"> Delete </button></td></tr>';

                $("#product_Name").val('0');			
                $("#product_HSN").val('');
                $("#product_Qty").val('');
                $("#product_Unitprice").val('');
                $("#product_Value").val('');			
                $("#product_GST").val('');
                $("#product_Discount").val('');			
                $("#product_Total").val('');
                $("#cgst").val('');
                $(".table_Body").append(_tr); 	
                $(".show-buttons").hide();
                var grandtotal=0;
                var totalAm;

                // var grandTax = 0; 
                // var totalGST;

                 var grandGST = 0;
                var grandDiscount = 0;
                $("input[name^='product_Value[]']").each(function() {
                    total = $(this).val();
                    //alert(total);
                    var totalAm = total.replace(/,/g,'');  
                    grandtotal += parseInt(totalAm);	
                });		

                var x=grandtotal;
                x=x.toString();
                var lastThree = x.substring(x.length-3);
                var otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers != '')
                lastThree = ',' + lastThree;
                var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                $("#totalAmount").val(res);
                


              
                //inputTableDiscount
              

            
            $("input[name^='inputGST[]']").each(function() {
                       var total = $(this).val();
                        grandGST += parseInt(total);	
                });			

                var x=grandGST;
                x=x.toString();
                var lastThree = x.substring(x.length-3);
                var otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers != '')
                lastThree = ',' + lastThree;
                var res1 = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                $("#totalGST").val(res1);
                
                


                
                // $("input[name^='inputDiscount[]']").each(function() {
                //        var discount = $(this).val();
                //         grandDiscount += parseInt(discount);	
                // });			
                
                var discount = $("#inputDiscount").val();
                grandDiscount += parseInt(discount);	
                // var x=grandDiscount;
                // x=x.toString();
                // var lastThree = x.substring(x.length-3);
                // var otherNumbers = x.substring(0,x.length-3);
                // if(otherNumbers != '')
                // lastThree = ',' + lastThree;
                // var res1 = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                $("#totalDiscount").val(grandDiscount);



                var first = res.replace(/,/g,'');  
                var second = res1.replace(/,/g,'');
                var final_Result = parseInt(first) + parseInt(second); 

                var x=final_Result;
                x=x.toString();
                var lastThree = x.substring(x.length-3);
                var otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers != '')
                lastThree = ',' + lastThree;
                var res3 = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                
                $("#final_Result").val(res3); 



    });

    // $("#inputTableDiscount").blur(function(){
    //                 var discount = $(this).val();
    //                 var originalPrice = $("#inputTableTaxValue").val().replace(/,/g,'');
    //                 var price = parseInt(originalPrice);

    //                 if(price){
    //                 var amt = (price * discount) / 100;
    //                 var Amount = price  - amt;

    //                 var gst = parseInt($("#inputTableGST").val());
    //                 var famount= ( ( (Amount * gst) / 100 ) + Amount);
    //                 $("#inputTableTotal").val(famount);
    //                 }
    // });

           
    $("#product_Discount").blur(function(){
                  
                    var discount = $(this).val();
                    var originalPrice = $("#product_Value").val().replace(/,/g,'');
                    var price = parseInt(originalPrice);

                    if(discount){
                    var amt = (price * discount) / 100;
                    var Amount = price  - amt;
                    //
                    var pri= parseInt($("#product_Value").val());
                    disc = pri - Amount;
                    $("#inputDiscount").val(disc);
                    
                    var gst = parseInt($("#product_GST").val());
                    var famount= ( ( (Amount * gst) / 100 ) + Amount);
                    $("#product_Total").val(famount);

                    //alert(disc);
                    }else {
                            alert("test");
                        //$("#inputDiscount").val('0');
                    }

    
          });

        $(document).on('click','.remove_Btn',function() {		
                 $(this).closest('tr').remove();		


                 var grandtotal=0;
                var totalAm;

                var grandTax = 0; 
                var totalGST;

                var grandGST = 0;

                $("input[name^='product_Value[]']").each(function() {
                        total = $(this).val();
                        var totalAm = total.replace(/,/g,'');  
                        grandtotal += parseInt(totalAm);	
                });			

                var x=grandtotal;
                x=x.toString();
                var lastThree = x.substring(x.length-3);
                var otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers != '')
                lastThree = ',' + lastThree;
                var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;

                $("#totalAmount").val(res);
               
                $("input[name^='inputGST[]']").each(function() {
                            total = $(this).val();
                            var totalAm = total.replace(/,/g,'');  
                            grandGST += parseInt(totalAm);	
                    });			
            
                var x=grandGST;
                x=x.toString();
                var lastThree = x.substring(x.length-3);
                var otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers != '')
                lastThree = ',' + lastThree;
                var res1 = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                $("#totalGST").val(res1);

               var first = res.replace(/,/g,'');  
               var second = res1.replace(/,/g,'');
                var final_Result = parseInt(first) + parseInt(second); 

                var x=final_Result;
                x=x.toString();
                var lastThree = x.substring(x.length-3);
                var otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers != '')
                lastThree = ',' + lastThree;
                var res3 = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                $("#final_Result").val(res3); 
                 
                 
    });
    
    
})
</script>
<script>
    $(document).ready(function(){
       
        $(".btn-distorderadd").click(function(){ 
           var prod_name = $("#distorderproduct_Code").val();
            var myResponse; 
            var myResponse1;
       
            if(prod_name){
                $.ajax({
                        url: '<?php echo base_url()?>Sales/produtDet/'+prod_name,					
                        type: "GET",
                        dataType: "json",
                        async: false,  
                        success:function(data){
                                    myResponse=data['product_info'][0]['product_Master']; 
                                    myResponse1=data['product_info'][0]['productscsv_Id']; 	
                                     //$("#saleprod_Name").val(data['product_info'][0]['product_Master']); 
                            },

                        error: function(data){
                        }
                    });
            }


                var prod = myResponse;
                var pid = myResponse1;
                var prod_name = prod;  
                var productcode = $("#distorderproduct_Code").val();
                var product_Name = $("#distorderprod_Name").val();
                var qty = $("#distorderprod_Qty").val();
                var unitprice = $("#distorderprod_Unitrate").val();
                var netamount = $("#distorderprod_Netamt").val();
                var netlanding = $("#distorderprod_Netland").val();
                var discountperunit = $("#distorderprod_Discount").val();
            
                var _tr= '<tr><input type="hidden" name="productscsv_Id[]" value="'+pid+'">'
                 +'<td><input type="text" name="distorderproduct_Code[]" value="'+productcode+'" class="form-control"></td>'
                +'<td><input type="text" name="distorderprod_Name[]" value="'+product_Name+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="distorderprod_Qty[]" value="'+qty+'" class="form-control"></td>'
                +'<td><input type="text" name="distorderprod_Unitrate[]" value="'+unitprice+'" class="form-control"></td>'
                +'<td><input type="text" name="distorderprod_Discount[]" value="'+discountperunit+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="distorderprod_Netland[]" value="'+netlanding+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="distorderprod_Netamt[]" value="'+netamount+'" class="form-control" readonly></td>'
                
                +'<td><button type="button" class="btn btn-info distedit_Btn float-left" style="padding:7px 13px;margin-top:0px;font-size: 12px;"><i class="fas fa-edit"></i></button></td>'
                +'<td><button type="button" class="btn btn-danger distremove_Btn float-left" style="padding: 7px 3px; width:48px;margin-top:0px;font-size: 12px;"><i class="fas fa-trash-alt"></i></button></td></tr>';

                $("#distorderproduct_Code").select2("val", "");			
                $("#distorderprod_Name").val('');
                $("#distorderprod_Qty").val('');
                $("#distorderprod_Unitrate").val('');
                $("#distorderprod_Netamt").val('');			
                $("#distorderprod_Netland").val('');
                $("#distorderprod_Discount").val('');		
                $(".disttable_Body").append(_tr); 	
                $(".show-butns").hide();
                
                var grandtotal=0;
                var total;
                
                var granddiscount = 0;
                var distotal;
                $("input[name='distorderprod_Netamt[]']").each(function() {
                    
                total = $(this).val();	
                grandtotal += parseInt(total);	
                //alert(grandtotal);
                });			
                
                $("input[name='distorderprod_Discount[][]']").each(function() {
                    
                distotal = $(this).val();	
                granddiscount += parseInt(distotal);	
                //alert(grandtotal);
                });		
                
                var finalResult = parseInt(grandtotal) - parseInt(granddiscount);
                $("#grandDiscount").val(granddiscount);
                //totalAmount
                $("#subtotalAmount").val(grandtotal);
                $("#final_Result").val(finalResult);
    });
    
    
     $(document).on('click','.distedit_Btn',function() {
        
        var grandtotal=0;
       
                                                                
       $(this).closest('tr').find("input[name='distorderprod_Qty[]']").focus();
       
       $(this).closest('tr').find("input[name='distorderprod_Qty[]']").blur(function(){
            var qty = $(this).closest('tr').find("input[name='distorderprod_Qty[]']").val();
            var unitRate = $(this).closest('tr').find("input[name='distorderprod_Unitrate[]']").val();
            
        if(unitRate){
                var result = qty * unitRate;
                $(this).closest('tr').find("input[name='distorderprod_Netamt[]']").val(result);
                
                var netlanding = (qty * unitRate) / qty;
                $(this).closest('tr').find("input[name='distorderprod_Netland[]']").val(netlanding);
                
           }else {
                $("input[name='distorderprod_Netamt[]']").val('0');
           }
           
           
                var grandtotal=0;
                var total;
                
                var granddiscount = 0;
                var distotal;
                $("input[name='distorderprod_Netamt[]']").each(function() {
                    
                total = $(this).val();	
                grandtotal += parseInt(total);	
                //alert(grandtotal);
                });			
                
                $("input[name='distorderprod_Discount[][]']").each(function() {
                    
                distotal = $(this).val();	
                granddiscount += parseInt(distotal);	
                //alert(grandtotal);
                });		
                
                var finalResult = parseInt(grandtotal) - parseInt(granddiscount);
                $("#grandDiscount").val(granddiscount);
                //totalAmount
                $("#subtotalAmount").val(grandtotal);
                $("#final_Result").val(finalResult);
                                                
            
        });
        
        $(this).closest('tr').find("input[name='distorderprod_Unitrate[]']").blur(function(){
            var qty = $(this).closest('tr').find("input[name='distorderprod_Qty[]']").val();
            var unitRate = $(this).closest('tr').find("input[name='distorderprod_Unitrate[]']").val();
            
        if(unitRate){
                var result = qty * unitRate;
                $(this).closest('tr').find("input[name='distorderprod_Netamt[]']").val(result);
                
                var netlanding = (qty * unitRate) / qty;
                $(this).closest('tr').find("input[name='distorderprod_Netland[]']").val(netlanding);
                
           }else {
                $("input[name='distorderprod_Netamt[]']").val('0');
           }
            
            var grandtotal=0;
                var total;
                
                var granddiscount = 0;
                var distotal;
                $("input[name='distorderprod_Netamt[]']").each(function() {
                    
                total = $(this).val();	
                grandtotal += parseInt(total);	
                //alert(grandtotal);
                });			
                
                $("input[name='distorderprod_Discount[][]']").each(function() {
                    
                distotal = $(this).val();	
                granddiscount += parseInt(distotal);	
                //alert(grandtotal);
                });		
                
                var finalResult = parseInt(grandtotal) - parseInt(granddiscount);
                $("#grandDiscount").val(granddiscount);
                //totalAmount
               $("#subtotalAmount").val(grandtotal);
                $("#final_Result").val(finalResult);
    });
    
    
     $(document).on('click','.distedit_Btn',function() {
        
        var grandtotal=0;
       
                                                                
       $(this).closest('tr').find("input[name='distorderprod_Qty[]']").focus();
       
       $(this).closest('tr').find("input[name='distorderprod_Qty[]']").blur(function(){
            var qty = $(this).closest('tr').find("input[name='distorderprod_Qty[]']").val();
            var unitRate = $(this).closest('tr').find("input[name='distorderprod_Unitrate[]']").val();
            
        if(unitRate){
                var result = qty * unitRate;
                $(this).closest('tr').find("input[name='distorderprod_Netamt[]']").val(result);
                
                var netlanding = (qty * unitRate) / qty;
                $(this).closest('tr').find("input[name='distorderprod_Netland[]']").val(netlanding);
                
           }else {
                $("input[name='distorderprod_Netamt[]']").val('0');
           }
           
           
                var grandtotal=0;
                var total;
                
                var granddiscount = 0;
                var distotal;
                $("input[name='distorderprod_Netamt[]']").each(function() {
                    
                total = $(this).val();	
                grandtotal += parseInt(total);	
                //alert(grandtotal);
                });			
                
                $("input[name='distorderprod_Discount[][]']").each(function() {
                    
                distotal = $(this).val();	
                granddiscount += parseInt(distotal);	
                //alert(grandtotal);
                });		
                
                var finalResult = parseInt(grandtotal) - parseInt(granddiscount);
                $("#grandDiscount").val(granddiscount);
                //totalAmount
                $("#subtotalAmount").val(grandtotal);
                $("#final_Result").val(finalResult);
                                                
            
        });
        
        $(this).closest('tr').find("input[name='distorderprod_Unitrate[]']").blur(function(){
            var qty = $(this).closest('tr').find("input[name='distorderprod_Qty[]']").val();
            var unitRate = $(this).closest('tr').find("input[name='distorderprod_Unitrate[]']").val();
            
        if(unitRate){
                var result = qty * unitRate;
                $(this).closest('tr').find("input[name='distorderprod_Netamt[]']").val(result);
                
                var netlanding = (qty * unitRate) / qty;
                $(this).closest('tr').find("input[name='distorderprod_Netland[]']").val(netlanding);
                
           }else {
                $("input[name='distorderprod_Netamt[]']").val('0');
           }
            
            var grandtotal=0;
                var total;
                
                var granddiscount = 0;
                var distotal;
                $("input[name='distorderprod_Netamt[]']").each(function() {
                    
                total = $(this).val();	
                grandtotal += parseInt(total);	
                //alert(grandtotal);
                });			
                
                $("input[name='distorderprod_Discount[][]']").each(function() {
                    
                distotal = $(this).val();	
                granddiscount += parseInt(distotal);	
                //alert(grandtotal);
                });		
                
                var finalResult = parseInt(grandtotal) - parseInt(granddiscount);
                $("#grandDiscount").val(granddiscount);
                //totalAmount
                $("#subtotalAmount").val(grandtotal);
                $("#final_Result").val(finalResult);
                
        });
        
        
        
        
        
    });
    
    
    $(document).on('click','.distremove_Btn',function() {		
                 $(this).closest('tr').remove();		


                 var grandtotal=0;
                var total;
                
                var granddiscount = 0;
                var distotal;
                $("input[name='distorderprod_Netamt[]']").each(function() {
                    
                total = $(this).val();	
                grandtotal += parseInt(total);	
                //alert(grandtotal);
                });			
                
                $("input[name='distorderprod_Discount[][]']").each(function() {
                    
                distotal = $(this).val();	
                granddiscount += parseInt(distotal);	
                //alert(grandtotal);
                });		
                
                var finalResult = parseInt(grandtotal) - parseInt(granddiscount);
                $("#grandDiscount").val(granddiscount);
                //totalAmount
                $("#subtotalAmount").val(grandtotal);
                $("#final_Result").val(finalResult); 
                 
                 
    });
    
    
    });
    });
</script>

<script>
    $(document).ready(function(){
        
    $(".btn-salesadd").click(function(){
        
        
            var prod_name = $("#sale_ProductName").val();
            var myResponse; 
            var myResponse1;
       
            if(prod_name){
                $.ajax({
                        url: '<?php echo base_url()?>Sales/produtDet/'+prod_name,					
                        type: "GET",
                        dataType: "json",
                        async: false,  
                        success:function(data){
                                    myResponse=data['product_info'][0]['product_Master']; 
                                    myResponse1=data['product_info'][0]['productscsv_Id']; 	
                                     //$("#saleprod_Name").val(data['product_info'][0]['product_Master']); 
                            },

                        error: function(data){
                        }
                    });
            }


                var prod = myResponse;
                var pid = myResponse1;
                var prod_name = prod;  
                var productcode = $("#sale_ProductName").val();
                var saleproduct_Name = $("#saleprod_Name").val();
                var qty = $("#saleproduct_Quantity").val();
                var unitprice = $("#saleproduct_UnitRate").val();
                var netamount = $("#Net_Amount").val();
                var netlanding = $("#Net_Landing").val();
                var discountperunit = $("#Discount_Perunit").val();
            
                var _tr= '<tr><input type="hidden" name="productscsv_Id[]" value="'+pid+'">'
                 +'<td><input type="text" name="sale_ProductName[]" value="'+productcode+'" class="form-control"></td>'
                +'<td><input type="text" name="saleprod_Name[]" value="'+saleproduct_Name+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="saleproduct_Quantity[]" value="'+qty+'" class="form-control"></td>'
                +'<td><input type="text" name="saleproduct_UnitRate[]" value="'+unitprice+'" class="form-control"></td>'
                +'<td><input type="text" name="Net_Amount[]" value="'+netamount+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="Net_Landing[]" value="'+netlanding+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="Discount_Perunit[]" value="'+discountperunit+'" class="form-control" readonly></td>'
                +'<td><button type="button" class="btn btn-info btn-edit float-left" style="padding:7px 12px;margin-top:0px;font-size: 12px;"><i class="fas fa-edit"></i></button></td>'
                +'<td><button type="button" class="btn btn-danger remove_Btn float-left" style="padding: 7px 14px;margin-top:0px;font-size: 12px;"><i class="fas fa-trash-alt"></i></button></td></tr>';

                $("#sale_ProductName").select2("val", "");			
                $("#saleprod_Name").val('');
                $("#saleproduct_Quantity").val('');
                $("#saleproduct_UnitRate").val('');
                $("#Net_Amount").val('');			
                $("#Net_Landing").val('');
                $("#Discount_Perunit").val('');		
                $(".salestable_Body").append(_tr); 	
                $(".show-btns").hide();
                
                var grandtotal=0;
                var total;

                $("input[name='Net_Amount[]']").each(function() {
                    
                total = $(this).val();	
                grandtotal += parseInt(total);	
                //alert(grandtotal);
                });			
                //totalAmount
                $("#totalAmount").val(grandtotal);

              
    });
    
    $(document).on('click','.btn-edit',function() {
        
        var grandtotal=0;
       
                                                                
       $(this).closest('tr').find("input[name='saleproduct_Quantity[]']").focus();
       
       $(this).closest('tr').find("input[name='saleproduct_Quantity[]']").blur(function(){
            var qty = $(this).closest('tr').find("input[name='saleproduct_Quantity[]']").val();
            var unitRate = $(this).closest('tr').find("input[name='saleproduct_UnitRate[]']").val();
            
        if(unitRate){
                var result = qty * unitRate;
                $(this).closest('tr').find("input[name='Net_Amount[]']").val(result);
                
                var netlanding = (qty * unitRate) / qty;
                $(this).closest('tr').find("input[name='Net_Landing[]']").val(netlanding);
                
           }else {
                $("input[name='Net_Amount[]']").val('0');
           }
           
           
           $("input[name*='Net_Amount[][]']").each(function() {
                          
			var total = $(this).val();	
                        alert(total);
			grandtotal += parseInt(total);	
		});	
            $("#totalAmount").val(grandtotal);	
                                                
            
        });
        
        $(this).closest('tr').find("input[name='saleproduct_UnitRate[]']").blur(function(){
            var qty = $(this).closest('tr').find("input[name='saleproduct_Quantity[]']").val();
            var unitRate = $(this).closest('tr').find("input[name='saleproduct_UnitRate[]']").val();
            
        if(unitRate){
                var result = qty * unitRate;
                $(this).closest('tr').find("input[name='Net_Amount[]']").val(result);
                
                var netlanding = (qty * unitRate) / qty;
                $(this).closest('tr').find("input[name='Net_Landing[]']").val(netlanding);
                
           }else {
                $("input[name='Net_Amount[]']").val('0');
           }
            
        });
        
        
        
        
        
    });
    
    
    });
</script>
<script>
    
$(document).ready(function($) {

    
    $("#saleproduct_Quantity").blur(function(){
        //saleproduct_UnitRate   saleproduct_Quantity
        
        var qty = $(this).val();
        var unitRate = parseInt($("#saleproduct_UnitRate").val());
        
        
            if(unitRate){
                var result = qty * unitRate;
                $("#Net_Amount").val(result);
           }else {
               $("#Net_Amount").val('0');
           }
    });
    
    
    $("#saleproduct_UnitRate").blur(function(){
        //saleproduct_UnitRate   saleproduct_Quantity Net_Landing  Discount_Perunit
        
        var unitrate = $(this).val();
        var qty = parseInt($("#saleproduct_Quantity").val());
        
           
                var result = qty * unitrate;
                $("#Net_Amount").val(result);                    
                
            
                var netlanding = (qty * unitrate) / qty;
                var discountPerunit = ((qty * unitrate) / qty) - unitrate;
                $("#Discount_Perunit").val(discountPerunit);  
                $("#Net_Landing").val(netlanding);  
       
    });
    
     
    
    
    
    
    
    
});


</script>
<script>
$(document).ready(function($) {
//    $("#distinvoiceprod_Qty").blur(function(){
//       
//    });
    
//    $(this).closest('tr').find("input[name='distinvoiceprod_Qty[]']").blur(function(){
//        alert("test");
//    });
    
     $(document).on('click','.btn-invoiceedit',function() {
       
     
                                                                
       $(this).closest('tr').find("input[name='distinvoiceprod_Qty[]']").focus();
       
       $(this).closest('tr').find("input[name='distinvoiceprod_Qty[]']").blur(function(){
          
           var grandtotal=0;
       var granddiscount=0;
       
            var qty = $(this).closest('tr').find("input[name='distinvoiceprod_Qty[]']").val();
            var unitRate = $(this).closest('tr').find("input[name='distinvoiceprod_Unitrate[]']").val();
            
        if(unitRate){
                var result = qty * unitRate;
                $(this).closest('tr').find("input[name='distinvoiceprod_Netamt[]']").val(result);
                
                var netlanding = (qty * unitRate) / qty;
                $(this).closest('tr').find("input[name='distinvoiceprod_Netland[]']").val(netlanding);
                
           }else {
                $("input[name='distinvoiceprod_Netamt[]']").val('0');
           }
           
           
                 $("input[name*='distinvoiceprod_Netamt[]']").each(function() {
			var total = $(this).val();	                        
			grandtotal += parseInt(total);	
		});	
                
                $("input[name='distinvoiceprod_Discount[]']").each(function() {
                var distotal = $(this).val();	
                granddiscount += parseInt(distotal);	
                });		
                
                var final = parseInt(grandtotal) - parseInt(granddiscount);
                $(".totalDiscount").val(granddiscount);
                 $(".totalInvoice").text(grandtotal);
                $(".totalFinal").text(final);
                
                
        });
        
        
        
        $(this).closest('tr').find("input[name='saleproduct_UnitRate[]']").blur(function(){
            var qty = $(this).closest('tr').find("input[name='saleproduct_Quantity[]']").val();
            var unitRate = $(this).closest('tr').find("input[name='saleproduct_UnitRate[]']").val();
            
        if(unitRate){
                var result = qty * unitRate;
                $(this).closest('tr').find("input[name='Net_Amount[]']").val(result);
                
                var netlanding = (qty * unitRate) / qty;
                $(this).closest('tr').find("input[name='Net_Landing[]']").val(netlanding);
                
           }else {
                $("input[name='Net_Amount[]']").val('0');
           }
            
        });
        
        
        
        
        
    });
    // remove option
    $(document).on('click','.btn-invoiceremove',function() {
        
         var grandtotal=0;
       var granddiscount=0;
       
       $(this).closest('tr').remove();
        
         $("input[name*='distinvoiceprod_Netamt']").each(function() {
			var total = $(this).val();	                        
			grandtotal += parseInt(total);	
		});	
                
                $("input[name='distinvoiceprod_Discount']").each(function() {
                var distotal = $(this).val();	
                granddiscount += parseInt(distotal);	
                });		
                
                var final = parseInt(grandtotal) - parseInt(granddiscount);
                $(".totalDiscount").val(granddiscount);
                 $(".totalInvoice").text(grandtotal);
                $(".totalFinal").text(final);
    });
});
</script>
<script>
$(document).ready(function($) {

    
    $("#distorderprod_Qty").blur(function(){
        //saleproduct_UnitRate   saleproduct_Quantity
        
        var qty = $(this).val();
        var unitRate = parseInt($("#distorderprod_Unitrate").val());
        
        
            if(unitRate){
                var result = qty * unitRate;
                $("#distorderprod_Netamt").val(result);
           }else {
               $("#distorderprod_Netamt").val('0');
           }
    });
    
    
    $("#distorderprod_Unitrate").blur(function(){
        //saleproduct_UnitRate   saleproduct_Quantity Net_Landing  Discount_Perunit
        
        var unitrate = $(this).val();
        var qty = parseInt($("#distorderprod_Qty").val());
        
           
                var result = qty * unitrate;
                $("#distorderprod_Netamt").val(result);                    
                
            
                var netlanding = (qty * unitrate) / qty;
                var discountPerunit = ((qty * unitrate) / qty) - unitrate;
                $("#distorderprod_Discount").val(discountPerunit);  
                $("#distorderprod_Netland").val(netlanding);  
       
    });
    
     
    
    
    
    
    
    
});

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"> </script>

<script> 
$(document).ready(function(){

 $('.delete_Scheme').click(function(e){
e.preventDefault();

var id = $(this).attr('data-emp-id');

var parent = $(this).parent("td").parent("tr");

bootbox.dialog({

message: "Are you sure you want to Delete ?",


buttons: {

success: {

label: "No",

className: "btn-success",

callback: function() {

$('.bootbox').modal('hide');

}

},

danger: {

label: "Delete!",

className: "btn-danger",

callback: function() {

$.ajax({

type: 'POST',

url: '<?php echo base_url()?>Schemes/delete_Scheme/'+id,

})

.done(function(response){

bootbox.alert(response);

parent.fadeOut('slow');

})

.fail(function(){

bootbox.alert('Error....');

})

}

}

}

});

});


$('.ticket_delete').click(function(e){
e.preventDefault();

var ticket_Id = $(this).attr('data-emp-id');

var parent = $(this).parent("td").parent("tr");

bootbox.dialog({

message: "Are you sure you want to Delete ?",


buttons: {

success: {

label: "No",

className: "btn-success",

callback: function() {

$('.bootbox').modal('hide');

}

},

danger: {

label: "Delete!",

className: "btn-danger",

callback: function() {

$.ajax({

type: 'POST',

url: '<?php echo base_url()?>Crm/delete_Ticket/'+ticket_Id,

})

.done(function(response){

bootbox.alert(response);

parent.fadeOut('slow');

})

.fail(function(){

bootbox.alert('Error....');

})

}

}

}

});

});



    $('.asp_delete').click(function(e){
e.preventDefault();

var asp_Id = $(this).attr('data-emp-id');

var parent = $(this).parent("td").parent("tr");

bootbox.dialog({

message: "Are you sure you want to Delete ?",


buttons: {

success: {

label: "No",

className: "btn-success",

callback: function() {

$('.bootbox').modal('hide');

}

},

danger: {

label: "Delete!",

className: "btn-danger",

callback: function() {

$.ajax({

type: 'POST',

url: '<?php echo base_url()?>Crm/delete_Asp/'+asp_Id,

})

.done(function(response){

bootbox.alert(response);

parent.fadeOut('slow');

})

.fail(function(){

bootbox.alert('Error....');

})

}

}

}

});

});
    
    
    
//technician Delete  technician_delete

$('.technician_delete').click(function(e){
e.preventDefault();

var tech_Id = $(this).attr('data-emp-id');

var parent = $(this).parent("td").parent("tr");

bootbox.dialog({

message: "Are you sure you want to Delete ?",


buttons: {

success: {

label: "No",

className: "btn-success",

callback: function() {

$('.bootbox').modal('hide');

}

},

danger: {

label: "Delete!",

className: "btn-danger",

callback: function() {

$.ajax({

type: 'POST',

url: '<?php echo base_url()?>Asp/delete_Technician/'+tech_Id,

})

.done(function(response){

bootbox.alert(response);

parent.fadeOut('slow');

})

.fail(function(){

bootbox.alert('Error....');

})

}

}

}

});

});
    



$('.generalrule_delete').click(function(e){
e.preventDefault();

var ticket_Id = $(this).attr('data-emp-id');

var parent = $(this).parent("td").parent("tr");

bootbox.dialog({

message: "Are you sure you want to Delete ?",


buttons: {

success: {

label: "No",

className: "btn-success",

callback: function() {

$('.bootbox').modal('hide');

}

},

danger: {

label: "Delete!",

className: "btn-danger",

callback: function() {

$.ajax({

type: 'POST',

url: '<?php echo base_url()?>Setting/delete_Generalrule/'+ticket_Id,

})

.done(function(response){

bootbox.alert(response);

parent.fadeOut('slow');

})

.fail(function(){

bootbox.alert('Error....');

})

}

}

}

});

});





$('.specificrule_delete').click(function(e){
e.preventDefault();

var ticket_Id = $(this).attr('data-emp-id');

var parent = $(this).parent("td").parent("tr");

bootbox.dialog({

message: "Are you sure you want to Delete ?",


buttons: {

success: {

label: "No",

className: "btn-success",

callback: function() {

$('.bootbox').modal('hide');

}

},

danger: {

label: "Delete!",

className: "btn-danger",

callback: function() {

$.ajax({

type: 'POST',

url: '<?php echo base_url()?>Setting/delete_Specificrule/'+ticket_Id,

})

.done(function(response){

bootbox.alert(response);

parent.fadeOut('slow');

})

.fail(function(){

bootbox.alert('Error....');

})

}

}

}

});

});


  
//delete order from asp

    

$('.order_delete').click(function(e){
e.preventDefault();

var voucher_Id = $(this).attr('data-emp-id');

var parent = $(this).parent("td").parent("tr");

bootbox.dialog({

message: "Are you sure you want to Delete ?",


buttons: {

success: {

label: "No",

className: "btn-success",

callback: function() {

$('.bootbox').modal('hide');

}

},

danger: {

label: "Delete!",

className: "btn-danger",

callback: function() {

$.ajax({

type: 'POST',

url: '<?php echo base_url()?>Asp/delete_order/'+voucher_Id,

})

.done(function(response){

bootbox.alert(response);

parent.fadeOut('slow');

})

.fail(function(){

bootbox.alert('Error....');

})

}

}

}

});

});


//Invoice Delete 
    $('.invoice_delete').click(function(e){
e.preventDefault();

var voucher_Id = $(this).attr('data-emp-id');

var parent = $(this).parent("td").parent("tr");

bootbox.dialog({

message: "Are you sure you want to Delete ?",


buttons: {

success: {

label: "No",

className: "btn-success",

callback: function() {

$('.bootbox').modal('hide');

}

},

danger: {

label: "Delete!",

className: "btn-danger",

callback: function() {

$.ajax({

type: 'POST',

url: '<?php echo base_url()?>Crm/delete_invoice/'+voucher_Id,

})

.done(function(response){

bootbox.alert(response);

parent.fadeOut('slow');

})

.fail(function(){

bootbox.alert('Error....');

})

}

}

}

});

});


$('#chequetrackTable').on('click', '.cheque_Pay', function(){

var cheque_Id = $(this).attr('data-emp-id');

var parent = $(this).parent("td").parent("tr");

bootbox.dialog({

message: "Are you sure you want to pay the cheque ?",


buttons: {

success: {

label: "No!",

className: "btn-danger",

callback: function() {

$('.bootbox').modal('hide');

}

},

danger: {

label: "Pay!",

className: "btn-success",

callback: function() {

$.ajax({

type: 'POST',

url: '<?php echo base_url()?>Crm/chequePay/'+cheque_Id,

})

.done(function(response){

bootbox.alert(response);

parent.fadeOut('slow');

    setTimeout(function() 
  {
    location.reload();  //Refresh page
  }, 2000);

})

.fail(function(){

bootbox.alert('Error....');

})

}

}

}

});
});


});
</script>


<script type="text/javascript">
$(document).ready(function() {
    
    $('#asp_Town').on('change', function() {
        $(".aspSection").show();
       var townName = this.value;
        
         $.ajax({
        url : "<?php echo base_url('Crm/aspDetails/')?>" + townName,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           // console.log(data);
              $('#aspName').html('');
              $('#cust_State').val('');
              $('#cust_Pincode').val('');
              $("#allaspList").prop( "checked", false );
            $("#aspName").append("<option value=''>Select ASP</option>").val('');
            $.each(data, function(key, value) {
    $('#aspName').append($("<option></option>").attr("value",value.id).text(value.userdept_Name)); 
});
    
            
         
        }
   
       }); 
        
    });
    
    //Asp Name
    $('#aspName').on('change', function() {
       // $(".aspSection").show();
       var aspName = this.value;
        //alert(aspName);
        
        
         $.ajax({
        url : "<?php echo base_url('Crm/aspstatecodeDetail/')?>" + aspName,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           // console.log(data[0]['user_State']);
            $('#cust_State').val(data[0]['user_State']);
            $('#cust_Pincode').val(data[0]['user_Pincode']);
//              $('#aspName').html('');
//            $("#aspName").append("<option value=''>Select ASP</option>").val('');
//            $.each(data, function(key, value) {
//    $('#aspName').append($("<option></option>").attr("value",value.id).text(value.userdept_Name)); 
//});
    
            
         
        }
   
       }); 
        
        
        
        
    });

});
    
    
</script>
<script>

function edit_asp(id){
    
    var result;
    event.preventDefault();
      
     // reset form on modals
    $.ajax({
        url : "<?php echo base_url('Crm/editAsp/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
             
            //var areaName;
           //console.log(data);
           result = data[1];
           //console.log(result);
//           $.each(result, function( index, value ) {
//                areaName = value.asp_Area ;
//            });
            
           $.each(result, function(key, value) {                
$('#aspdata_Name').append($("<option value='0'>Select ASP</option>").attr("value",value.id).text(value.userdept_Name)); 
});
            $('[name="ticketgenerate_id"]').val(data[0].ticketgenerate_Id);
//
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Reassign ASP'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}


function invoiceProd($id){
    event.preventDefault();
    
    //alert($id);
    var result;
    $.ajax({
        url : "<?php echo base_url('Retailer/invoice_Prod/')?>" + $id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
             
             
            $("#invoiceprodTable").empty();
           $('#invoiceprodTable').prepend('<tr><td>Product</td><td>Qty</td><td>Amount</td></tr>');
            $.each(data, function (key, value){
                
                 var row='<tr>';
                row+='<td>'+value.product+'</td><td>'+value.quantity+'</td><td>'+value.amount+'</td>';
                row+='</tr>';
                $('#invoiceprodTable').append(row);
            });

            $('#chequeinvoiceProducts').modal('show'); 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    
    
}


function save()
    {
      var url;
     
        url = "<?php echo site_url('Crm/asp_update')?>";
      

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
           // dataType: "JSON",
            success: function(data)
            {
               
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
    
    //cheque relates
    
    function update_Cheque(id){
//    alert(id);
    
    var result;
    event.preventDefault();
      var row = '';
     // reset form on modals
    $.ajax({
        url : "<?php echo base_url('Crm/chqintransitDetail/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
             
            $("#chqintransitTable").empty();
           $('#chqintransitTable').prepend('<tr><td>Invoice Id</td><td>Amount</td><td>Courier Name</td><td>Courier No</td></tr>');
            $.each(data, function( index, value ) {
                 row +='<tr><td>'+value.order_id+'</td><td>'+value.cheque_amt+'</td><td>'+value.courier_name+'</td><td>'+value.courier_no+'</td></tr>';
                 $("#chequeNumber").val(value.cheque_number);
//                $('#paidbillTable').append(row);
               // console.log(sum);
            });
            
            $('#chqintransitTable').append(row);
            
            
            
            
            
            $('#cheqintransit_form').modal('show'); 
             $('.modal-title').text('Update Cheque');
//                $("#cheq_No").text(data.cheque_number);
//                $("#cheq_Amt").text(data.cheque_amt);
//            
//                $('#chequeNumber').val(data.cheque_number);
            //var areaName;
           //console.log(data);
//           result = data[1];
//           //console.log(result);
////           $.each(result, function( index, value ) {
////                areaName = value.asp_Area ;
////            });
//            
//           $.each(result, function(key, value) {                
//$('#aspdata_Name').append($("<option value='0'>Select ASP</option>").attr("value",value.id).text(value.userdept_Name)); 
//});
//            $('[name="ticketgenerate_id"]').val(data[0].ticketgenerate_Id);
////
//            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
//            $('.modal-title').text('Reassign ASP'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    
    
}

function saveCheque()
    {
      var url;
     
        url = "<?php echo site_url('Crm/chqintransit_update')?>";
      

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
           // dataType: "JSON",
            success: function(data)
            {
               
               //if success close modal and reload ajax table
               $('#cheqintransit_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

function paid_Cheque(id){
        
//    alert(id);
    
    var result;
    event.preventDefault();
      var row = '';
       
     // reset form on modals
    $.ajax({
        url : "<?php echo base_url('Crm/chqrecvDetail/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
             var invoices = [];
             //console.log(data);
            $("#chqreceiveTable").empty();
           $('#chqreceiveTable').prepend('<tr><td>Invoice Id</td><td>Amount</td><td>Courier Name</td><td>Courier No</td></tr>');
            $.each(data, function( index, value ) {
                    $('#chequeNo').val(value.cheque_number);
                 row +='<tr><td>'+value.order_id+'</td><td>'+value.cheque_amt+'</td><td>'+value.courier_name+'</td><td>'+value.courier_no+'</td></tr>';
                invoices.push(value.order_id);
            });
            var invoice = invoices.toString();
            $('#chequeNumber').val(invoice);
            $('#chqreceiveTable').append(row);
            
            $('#cheqreceive_form').modal('show'); 
             $('.modal-title').text('Cheque Paid');


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
    
    function paidCheque(){
        var url;
     
        url = "<?php echo site_url('Crm/chqreceive_update')?>";
      

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
           // dataType: "JSON",
            success: function(data)
            {
               
               //if success close modal and reload ajax table
               $('#cheqreceive_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
    
    
    function assign_Tech(id){
    
    var result;
    event.preventDefault();
      
     // reset form on modals
    $.ajax({
        url : "<?php echo base_url('Asp/assignTech/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           
             //console.log(data[0].ticket_Id);
            //var areaName;
           console.log(data); 
           result = data[1];
           //console.log(result);

            
           $.each(result, function(key, value) {                
$('#aspdata_Name').append($("<option value='0'>Select Technician</option>").attr("value",value.id).text(value.contact_Person)); 
});
            $('[name="ticketgenerate_id"]').val(data[0].ticketgenerate_Id);
            $('[name="asp_Id"]').val(data[0].asp);
           // $('[name="ticketassign_Id]').val(data[0].ticket_Id);
            $('[name="ticketassign_Id"]').val(data[0].ticket_Id);
//
            $('#techassignModal').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Assign Technician'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
    
    
   //edit_Technician
    
    function edit_Technician(id){
    
    
        //alert(id);
    var result;
    event.preventDefault();
      
     // reset form on modals
    $.ajax({
        url : "<?php echo base_url('Asp/technicianAssign/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
             
            //var areaName;
           //console.log(data);
           result = data[1];
           //console.log(result);
//           $.each(result, function( index, value ) {
//                areaName = value.asp_Area ;
//            });  $('#aspName').html('');
            $('#aspdata_Name').empty('');
            $('#aspdata_Name').prepend("<option value='0'>Select Technician</option>").val('');
            
           $.each(result, function(key, value) {                
$('#aspdata_Name').append($("<option value='0'>Select Engineer</option>").attr("value",value.id).text(value.contact_Person)); 
});
            $('[name="ticketgenerate_id"]').val(data[0].ticketgenerate_Id);
//
            $('#techassignModal').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Reassign Techncian'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
    
    function saveTech(){
         var url;
     
        url = "<?php echo site_url('Asp/technician_update')?>";
      

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
           // dataType: "JSON",
            success: function(data)
            {
               
               //if success close modal and reload ajax table
               //$('#techassignModal').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
    </script>
    
    <script> 
     $(document).ready(function()
     {
         $('#modal_form').on('hidden.bs.modal', function () {
             $("#aspdata_Name").html('');
            //$(this).find("input,textarea,select").val('').end();

});
//    $('#modalasp_form').on('hidden.bs.modal', function () {
//    $(this).find("input,textarea,select").val('').end();
//
//});
  });
    </script>
    <script>  
 $(document).ready(function(){
     
      $('.view_data').click(function(){  
           var ticket_id = $(this).attr("id");  
           //alert(ticket_id);
           $.ajax({  
                url:"<?php echo site_url('Crm/ticketviewData')?>",  
                method:"post",  
                data:{ticket_id:ticket_id},
                dataType: "json",
                success:function(data){
                    if(data.status == 'ok'){
                         var videoData = data.result.video_one;
                         var billCopy = data.result.bill_copy;
                         var warrantyCard = data.result.warranty_card;
                         var custSign = data.result.customer_signature;  
                         var videoData2 = data.result.video_two;
                           var video = "<video width='400' height='400' id='aspVideo1' controls> <source src='"+videoData+"' type='video/mp4'></video>";
                    var videoSecond = "<video width='400' height='400' id='aspVideo2' controls> <source src='"+videoData2+"' type='video/mp4'></video>";
                    var image1 = "<img src='"+billCopy+"' style='width:250px; height:250px'>";
                    var image2 = "<img src='"+warrantyCard+"' style='width:250px; height:250px'>";
                    var image3 = "<img src='"+custSign+"' style='width:250px; height:250px'>";
                    
                         $('#complaint_overview').text(data.result.complaint_overview);
                          $('#prod_Remakrs').text(data.result.prod_Remarks);
                           $('#ajax_video').html(video);
                          $('#ajax_Second').html(videoSecond);
                          $('#ajax_Bill').html(image1);
                          $('#ajax_Warranty').html(image2);
                          $('#ajax_Custsign').html(image3);
                         $('#dataModal').modal("show");  
                    }else if(data.status == 'err') {
                        //console.log(data);
                        //console.log(data);
                        // $('#employee_detail').html(data);  
                         $('#dataModal1').modal("show"); 
                         //alert("User not found...");
                    }
                    //console.log(data);
                     //$('#employee_detail').html(data);  
                    // $('#prod_Remakrs').text(data.result.prod_Remarks);
                   
                }  
           });  
      }); 
      
      
      
      $('.view_data1').click(function(){  
           var ticket_id = $(this).attr("id");  
           //alert(ticket_id);
           $.ajax({  
                url:"<?php echo site_url('Crm/ticketviewData')?>",  
                method:"post",  
                data:{ticket_id:ticket_id},
                dataType: "json",
                success:function(data){
                    //  $('#employee_detail').html(data);  
                    //  $('#dataModal').modal("show");  
                    if(data.status == 'ok'){
                          // console.log(data);
                         $('#complaint_overview').text(data.result.complaint_overview);
                          $('#prod_Remakrs').text(data.result.prod_Remarks);
                         $('#dataModal').modal("show");  
                    }else if(data.status == 'err') {
                        //console.log(data);
                        //console.log(data);
                        // $('#employee_detail').html(data);  
                         $('#dataModal1').modal("show"); 
                         //alert("User not found...");
                    }
                    //console.log(data);
                     //$('#employee_detail').html(data);  
                    // $('#prod_Remakrs').text(data.result.prod_Remarks);
                   
                }  
           });  
      });  
      
 });  
  

 </script>
 <script>
 $(document).ready(function(){
            $("input[type='checkbox']").change(function (event) {
                event.preventDefault();

                var result=$(this).val().split('|');
                 var ticket_Id = result[0];
                  var calling_Data = result[1];
                   var url = '<?php echo base_url()?>Crm/updateHappycall';
                    $.ajax({
                    type: "POST",
                    url: url,
                    data: { 
                        'ticket_Id' : ticket_Id, 
                        'calling_Data' : calling_Data }, // pass it as POST parameter
                      
                    success: function(data){
                        
                        $('#call_detail').html(data);  
                         //$('#happycallModal').modal("show");  
                        setTimeout(function(){
                            location.reload();
                        }, 1000)    
                    }
                    });
		});

        
    });
 </script>
 <script>
 $(document).ready(function() {
    $('#ticketTable').DataTable( {
        "scrollX": true,
        fixedHeader: true
//        colReorder: true,
//      fixedHeader: {
//            header: true,
//            headerOffset: 45,
//            },
//        scrollX: true,
//        scrollY: true
    } );
 
// var table = $('#ticketTable').DataTable( {
//        responsive: true,
//        paging: false
//    } );
// 
//    new $.fn.dataTable.FixedHeader( table );
    
  
} );
 </script>
 <script type="text/javascript">
     $(document).ready(function($){
            $('select[name="dealertarget_city"]').on('change', function() { 
            var city_Name = $(this).val();
            var city= $.trim(city_Name);
            //alert(city);
            if(city) {
                $.ajax({
                    url: '<?php echo base_url()?>Setting/dealerName/'+city,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                            //console.log(data);
                        $('select[name="dealer_Name"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="dealer_Name"]').append('<option value="'+ value.dealer_name +'">'+ value.dealer_name +'</option>');
                        });
                    }
                });
            }
        });
     });
 </script>
 <script>
     $(document).ready(function($){
//$('select[multiple]').multiselect({
//    columns: 1,
//    placeholder: 'Select options'
//});
$(function(){
$users_list = $('#categoryMultiselect');
$users_list.multiselect();

});

$(".newgeneralBtn").click(function(){
   $(".divsectionTwo").show
   $(".divsectionOne").hide();
   $('.specialRule').hide();
});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $("select.aspallowcategory_Name").change(function(){
        var productType = $(this).children("option:selected").val();
        //alert(productType);
       if(productType == 'SKY LED'){
           $('.masterprouctled').show();
           $('.masterprouctcategory').hide();
       } else {
           
           
           $('.masterprouctled').hide();
          $('.masterprouctcategory').show(); 
            $('select[name="aspallowsubcategory_Name"]').empty();
           $('select[name="aspallowsubcategory_Name"]').append('<option value="'+ productType +'">'+ productType +'</option>');
           
//          // var city_Name = $(this).val();
//            var prodType= $.trim(productType);
//            
//            
//            $.ajax({
//                    url: '<?php echo base_url()?>Crm/productName/'+prodType,                 
//                    type: "GET",
//                    dataType: "json",
//                    success:function(data) {
//                        //console.log(data);
//                        if(data == ''){
//                            $('select[name="aspallowsubcategory_Name"]').empty();
//                             $('select[name="aspallowsubcategory_Name"]').append('<option value="'+ productType +'">'+ productType +'</option>');
//                        } else {
//                             $('select[name="aspallowsubcategory_Name"]').empty();
//                        $.each(data, function(key, value) {
//                            $('select[name="aspallowsubcategory_Name"]').append('<option value="'+ productType +'">'+ productType +'</option>');
//                        });
//                        }
//                            //console.log(data);
//                       
//                    }
//                });
                
          
       }
    });
});
</script>
<script> 
    $(".aspallowclear_button").click(function(){
                $("#aspallowcategory_Name").val('');
                $("#aspallowsubcategory_Name").val('');
                $("#aspallow_Free").val('');		
                $("#aspallowrateafter_Free").val('');	
                $('#aspallowcategory_Led').val('');
                $(".show-butns").hide();
    });
</script>
<script> 
$(document).ready(function(){
    
    
    $('.aspallow_button').click(function(){               
                var aspallowsubcategory_Name;
                var subCategory = $("#aspallowsubcategory_Name").val();
                var category = $("#aspallowcategory_Name").val();
                //alert(category);
//                alert(subCategory);

            if(category == 'SKY LED'){
                 aspallowsubcategory_Name = $("#aspallowcategory_Led").val();
                 
            }else {
                //var myResponse; 
            
//                 if(subCategory){
//                $.ajax({
//                        url: '<?php echo base_url()?>Crm/subcateDetail/'+subCategory,					
//                        type: "GET",
//                        dataType: "json",
//                        async: false,  
//                        success:function(data){
//                             myResponse=data['id']; 
//                            //console.log(data['id']);
//                            //console.log(data);
////                                    myResponse=data['product_info'][0]['product_Master']; 
////                                    myResponse1=data['product_info'][0]['productscsv_Id']; 	
//                                     //$("#saleprod_Name").val(data['product_info'][0]['product_Master']); 
//                            },
//
//                        error: function(data){
//                        }
//                    });
//            }
                 //var subcat_Id = myResponse;
                 aspallowsubcategory_Name = $("#aspallowsubcategory_Name").val();
            }
            
       
        var aspallowcategory_Name = $("#aspallowcategory_Name").val();
        var aspallow_Free = $("#aspallow_Free").val();
        var aspallowrateafter_Free = $("#aspallowrateafter_Free").val();
                
       var _tr= '<tr>'
                 +'<td><input type="text" name="aspallowcategory_Name[]" value="'+aspallowcategory_Name+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="aspallowsubcategory_Name[]" value="'+aspallowsubcategory_Name+'" class="form-control" readonly></td>'
                +'<td><input type="text"  class="form-control" name="aspallow_Free[]" value="'+aspallow_Free+'" readonly></td>'
                +'<td><input type="text"  name="aspallowrateafter_Free[]" value="'+aspallowrateafter_Free+'" class="form-control" readonly></td>'
                +'<td><button type="button" class="btn btn-danger btnrule_Remove float-left" style="padding: 7px 3px; width:48px;margin-top:0px;font-size: 12px;"><i class="fas fa-trash-alt"></i></button></td></tr>';

               	
                $("#aspallowcategory_Name").val('');
                $("#aspallowsubcategory_Name").val('');
                $("#aspallow_Free").val('');	
                $("#aspallowrateafter_Free").val('');	
                $('#aspallowcategory_Led').val('');
                $(".aspallowance_Body").append(_tr); 	
                $(".show-butns").hide();
                
                var ruletableLength =$(".generalruleTable > tbody > tr").length;
                //console.log("Table length "+ruletableLength);
                if(ruletableLength >= 3){
                     $('.generalsubmit_btn').show();
                   
                }else if(ruletableLength < 3) {
                    //console.log("Table length "+ruletableLength);
                     $('.generalsubmit_btn').hide();
                }
              
                //console.log();
                
                
    });
    
    
    
    
      $(document).on('click','.btnrule_Remove',function() {
        
         var grandtotal=0;
       var granddiscount=0;
       
       $(this).closest('tr').remove();
         var ruletableLength =$(".generalruleTable > tbody > tr").length;
                //console.log("Table length "+ruletableLength);
                if(ruletableLength >= 3){
                     $('.generalsubmit_btn').show();
                   
                }else if(ruletableLength < 3) {
                    //console.log("Table length "+ruletableLength);
                     $('.generalsubmit_btn').hide();
                }
    });
    
    
    
    $('.aspspecific_button').click(function(){               
                var aspallowsubcategory_Name;
                var subCategory = $("#aspallowsubcategory_Name").val();
                var category = $("#aspallowcategory_Name").val();
                var aspId = $("#aspspecific_Name").val();
                var myResponse;
                if(aspId){
                   $.ajax({
                        url: '<?php echo base_url()?>Setting/aspspecicDetail/'+aspId,					
                        type: "GET",
                        dataType: "json",
                        async: false,  
                        success:function(data){
                            
                                    myResponse=data['asp_Name']; 
                                    
                                     //$("#saleprod_Name").val(data['product_info'][0]['product_Master']); 
                            },

                        error: function(data){
                        }
                    });
                       
                       
                   }
                   
                //alert(category);
//                alert(subCategory);

            if(category == 'SKY LED'){
                 aspallowsubcategory_Name = $("#aspallowcategory_Led").val();
                 
            }else {
                //var myResponse; 
            
//                 if(subCategory){
//                $.ajax({
//                        url: '<?php echo base_url()?>Crm/subcateDetail/'+subCategory,					
//                        type: "GET",
//                        dataType: "json",
//                        async: false,  
//                        success:function(data){
//                             myResponse=data['id']; 
//                            //console.log(data['id']);
//                            //console.log(data);
////                                    myResponse=data['product_info'][0]['product_Master']; 
////                                    myResponse1=data['product_info'][0]['productscsv_Id']; 	
//                                     //$("#saleprod_Name").val(data['product_info'][0]['product_Master']); 
//                            },
//
//                        error: function(data){
//                        }
//                    });
//            }
                 //var subcat_Id = myResponse;
                 aspallowsubcategory_Name = $("#aspallowsubcategory_Name").val();
            }
            
       var aspspecific_Name = $("#aspspecific_Name").val();
        var aspallowcategory_Name = $("#aspallowcategory_Name").val();
        var aspallow_Free = $("#aspallow_Free").val();
        var aspallowrateafter_Free = $("#aspallowrateafter_Free").val();
                
       var _tr= '<tr>'
       +'<input type="hidden" name="aspspecific_Name[]" value="'+aspspecific_Name+'" class="form-control" readonly>'
       +'<td><input type="text" value="'+myResponse+'" class="form-control" readonly></td>'
                 +'<td><input type="text" name="aspallowcategory_Name[]" value="'+aspallowcategory_Name+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="aspallowsubcategory_Name[]" value="'+aspallowsubcategory_Name+'" class="form-control" readonly></td>'
                +'<td><input type="text"  class="form-control" name="aspallow_Free[]" value="'+aspallow_Free+'" readonly></td>'
                +'<td><input type="text"  name="aspallowrateafter_Free[]" value="'+aspallowrateafter_Free+'" class="form-control" readonly></td>'
                +'<td><button type="button" class="btn btn-danger btnrule_Remove float-left" style="padding: 7px 3px; width:48px;margin-top:0px;font-size: 12px;"><i class="fas fa-trash-alt"></i></button></td></tr>';

               	
                $("#aspspecific_Name").val('');
                $("#aspallowcategory_Name").val('');
                $("#aspallowsubcategory_Name").val('');
                $("#aspallow_Free").val('');	
                $("#aspallowrateafter_Free").val('');	
                $('#aspallowcategory_Led').val('');
                $(".aspallowance_Body").append(_tr); 	
                $(".show-butns").hide();
                
                var ruletableLength =$(".generalruleTable > tbody > tr").length;
                //console.log("Table length "+ruletableLength);
                if(ruletableLength >= 3){
                     $('.generalsubmit_btn').show();
                   
                }else if(ruletableLength < 3) {
                    //console.log("Table length "+ruletableLength);
                     $('.generalsubmit_btn').hide();
                }
              
                //console.log();
                
                
    });
    
    
});
</script>
<script>
		$(document).ready(function() {
		var someOptions = {aSep: ',' , aPad: true};
        var someOpt = {aSep: ',' , aPad: true, aSign: '₹'};
		   $('.distPrice').autoNumeric('init',someOptions);  
           $('.retailerPrice').autoNumeric('init',someOptions);   
           $('.qty').autoNumeric('init',someOptions);
             $('.aspallowrateafter_Free').autoNumeric('init',someOpt); 
    
        
          $(".prodplan_Qty").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
            
            $(".aspall_Free").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsgfree").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
            
//            $('document').on("keypress", '.aspallowance_Body tr td', function(e) {
//                alert(this.id);
////    var keyC = e.keyCode;
////    if (keyC == 32) {
////         alert('Enter pressed');
////    }
//});
   
            
		});
   
 

 </script>

 
 
<script>

    jQuery.validator.addMethod("lettersonly", function(value, element) 
{
return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Letters and spaces only please");

    //enmail
  $.validator.addMethod("custemailvalid", function(value, element) { 
      return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value); 
}, "Please enter valid email ");

// add the rule here
 $.validator.addMethod("valueNotEquals", function(value, element, arg){
  return arg !== value;
 }, "Value must not equal arg.");
    
    // add the rule here
 $.validator.addMethod("valueNotEquals1", function(value, element, arg){
  return arg !== value;
 }, "Value must not equal arg.");
 
        // add the rule here
 $.validator.addMethod("valueNotEquals2", function(value, element, arg){
  return arg !== value;
 }, "Value must not equal arg.");
    
            // add the rule here
 $.validator.addMethod("valueNotEquals3", function(value, element, arg){
  return arg !== value;
 }, "Value must not equal arg.");
    
     $.validator.addMethod("valueNotEquals4", function(value, element, arg){
  return arg !== value;
 }, "Value must not equal arg.");
 
 $.validator.addMethod("valueNotEquals5", function(value, element, arg){
  return arg !== value;
 }, "Value must not equal arg.");
    
   $.validator.addMethod("greaterThan", function(value, element, params) {

    if (!/Invalid|NaN/.test(new Date(value))) {
        return new Date(value) > new Date($(params).val());
    }

    return isNaN(value) && isNaN($(params).val()) 
        || (Number(value) > Number($(params).val())); 
},'Must be greater than from date.');

    
$(document).ready(function(){
    

$('#editschemeForm').validate({
    
    rules: {
        to_date: { greaterThan: "#scheme_duration" }
        //scheme_duration: { greaterThan: "#to_date" }
    }
    
    
});

    
    
$("#raiseticketForm").validate({

ignore: [],

rules : { 

	cust_Mobile : {
			required: true,
            digits: true,
			minlength: 10,
			maxlength: 10
	},
    cust_Altmobile :{
         digits: true,
			minlength: 10,
			maxlength: 10
    },
    cust_Pincode :{
        digits: true,
			minlength: 6,
			maxlength: 6
    },
    cust_Name :{
        required: true,
        lettersonly:true,
    },
    cust_Address1 :{
        required: true
    },
    // asp_Town :{
    //     valueNotEquals: "0"
    // },
    prod_Brand :{
        valueNotEquals1: "0"
    },
    prod_Category :{
        valueNotEquals2: "0"
    },
    prod_Name :{
         valueNotEquals3: "0"
    },
    productcomplaint_Nature :{
        valueNotEquals4: "0"
    },
    prod_Datepurchase :{
        required: true
    },
    prod_Warranty :{
        required: true
    },
    prod_Casetype :{
        required: true
    },
    prod_Priority :{
        required: true
    }
//    cust_Email :{
//        custemailvalid: true
//    }

},

messages: {



	cust_Mobile : {

		 required: "Please enter mobile",
         digits: " Please enter only digits ",

		 minlength : "Minimum 10 digits",

		 maxlength: "Phone Number does not exceed 10 digits",			

		 

	},
    cust_Name :{
        required: "Please enter name"
    },
    cust_Altmobile :{
          digits: " Please enter only digits ",

		 minlength : "Minimum 10 digits",

		 maxlength: "Phone Number does not exceed 10 digits",			

    },
    cust_Pincode :{
         digits: " Please enter only digits ",

		 minlength : "Minimum 6 digits",

		 maxlength: "Pincode does not exceed 6 digits",		
    },
    cust_Address1 :{
        required: "Please enter address"
    },
    asp_Town : {
        valueNotEquals: "Please select city!"
    },
     prod_Brand : {
         valueNotEquals1: "Please select brand!"
     },
    productcomplaint_Nature :{
        valueNotEquals4: "Please select complaint"
    },
    prod_Category :{
        valueNotEquals2: "Please select category!"
    },
    prod_Name :{
        valueNotEquals3: "Please select product!"
    },
    prod_Datepurchase :{
        required: "Please select date of purchase"
    },
    prod_Warranty :{
        required: "Please select warranty"
    },
    prod_Casetype :{
        required: "Please select case type"
    },
    prod_Priority :{
        required: "Please select priority"
    }

},

});



 
    $("#editticketForm").validate({  

ignore: [],

rules : { 

	cust_Mobile : {
			required: true,
            digits: true,
			minlength: 10,
			maxlength: 10
	},
    cust_Altmobile :{
         digits: true,
			minlength: 10,
			maxlength: 10
    },
    cust_Pincode :{
        digits: true,
			minlength: 6,
			maxlength: 6
    },
    cust_Name :{
        required: true,
        lettersonly:true,
    },
    cust_Address1 :{
        required: true
    },
    // asp_Town :{
    //     valueNotEquals: "0"
    // },
    prod_Brand :{
        valueNotEquals1: "0"
    },
    prod_Category :{
        valueNotEquals2: "0"
    },
    prod_Name :{
         valueNotEquals3: "0"
    },
    productcomplaint_Nature :{
        valueNotEquals4: "0"
    },
    
    editcall_Casetype :{
          required: true
    },
    prod_Datepurchase :{
        required: true
    },
    prod_Warranty :{
        required: true
    },
    prod_Casetype :{
        required: true
    },
    prod_Priority :{
        required: true
    },
    barcode_Scan :{
        required: true,
        minlength: 10,
    },
    prodwarranty_Casetype :{
        required: true
    },
    service_Cost :{
        required: true,
        digits :true
    },
    distance_Travel :{
        required: true,
        digits :true
    },
    custbill_Copy :{
         required: true,
                    accept:"jpg,png,jpeg,gif"
    }
//    cust_Email :{
//        custemailvalid: true
//    }

},

messages: {

    custbill_Copy :{
        required: "Select bill copy",
                    accept: "Only image type jpg/png/jpeg/gif is allowed"
    },
    service_Cost :{
        required : "Please enter service cost",
        digits : "Please enter digits only"
    },
    distance_Travel :{
        required: "Please enter amount",
        digits : "Please enter digits only"
    },
	cust_Mobile : {

		 required: "Please enter mobile",
         digits: " Please enter only digits ",

		 minlength : "Minimum 10 digits",

		 maxlength: "Phone Number does not exceed 10 digits",			

		 

	},
    cust_Name :{
        required: "Please enter name"
    },
    cust_Altmobile :{
          digits: " Please enter only digits ",

		 minlength : "Minimum 10 digits",

		 maxlength: "Phone Number does not exceed 10 digits",			

    },
    cust_Pincode :{
         digits: " Please enter only digits ",

		 minlength : "Minimum 6 digits",

		 maxlength: "Pincode does not exceed 6 digits",		
    },
    cust_Address1 :{
        required: "Please enter address"
    },
    asp_Town : {
        valueNotEquals: "Please select city!"
    },
     prod_Brand : {
         valueNotEquals1: "Please select brand!"
     },
    productcomplaint_Nature :{
        valueNotEquals4: "Please select complaint"
    },
    prod_Category :{
        valueNotEquals2: "Please select category!"
    },
    prod_Name :{
        valueNotEquals3: "Please select product!"
    },
    editcall_Casetype :{
        required : "Please select case type"
    },
    prod_Datepurchase :{
        required: "Please select date of purchase"
    },
    prod_Warranty :{
        required: "Please select warranty"
    },
    prod_Casetype :{
        required: "Please select case type"
    },
    prod_Priority :{
        required: "Please select priority"
    },
    barcode_Scan :{
        required: "Please enter barcode scan",
        minlength: "Please barcode must be 10",
    },
    prodwarranty_Casetype :{
        required: "Pleaes select warranty"
    }

},

});


 $("#newtechform").validate({

ignore: [],

rules : { 

	name_technician : {
			required: true,	
	},
    contact_number :{
            required: true,
            digits: true,
			minlength: 10,
			maxlength: 10	
    },
    alternatecontct_Num :{
            required: true,
            digits: true,
			minlength: 10,
			maxlength: 10
    },
       technician_Email :{
            required: true,
        custemailvalid: true,
         remote: {  // value of 'username' field is sent by default
                type: 'POST',
                url: '<?php echo base_url()?>Asp/emailExist'
                }
   },
    technician_Password :{
            required: true
    },
    technician_Area :{
        required: true
    }

},

messages: {



	name_technician : {

		 required: "Please enter technician name",

	},
    contact_number : {
		 required: "Please enter mobile",
         digits: " Please enter only digits ",
		 minlength : "Minimum 10 digits",
		 maxlength: "Phone Number does not exceed 10 digits",		
	},
    alternatecontct_Num : {
		 required: "Please enter alternate mobile",
         digits: " Please enter only digits ",
		 minlength : "Minimum 10 digits",
		 maxlength: "Phone Number does not exceed 10 digits",		
	},
    technician_Email :{
            required: "Please enter email"
    },
    technician_Password :{
        required: "Pleaes enter password"
    },
    technician_Area :{
        required: "Please enter area"
    }

},

});



});
    
</script>

<script>
$(document).ready(function(){
    $('input[name="visitSubmit"]').click(function(){
        
        
          var executive = $( "#salesExecutive option:selected" ).val();
          var visitDate = $("input[name='visitDate']").val();
        
        
        
        $.ajax({
                    url: '<?php echo base_url()?>Sales/visitDetail',
                    type: 'POST',
                    data: {executive: executive, visitDate: visitDate},
                    dataType: "json",  
                    error: function() {
                            //alert('Something is wrong');
                         $("#salescityexe_table").html('');
                        },
                 
                 success: function(data) {
                     
                     $("#salescityexe_table").show();
//                       var storeData = data.Cities;
//                       var visitData = data.DST;
////                     console.log(storeData);
////                     console.log(visitData);
//                     
//                                    $.each(storeData, function (i,item) {
//                   //console.log(i);
//                   $("#stores_table").append( "<tr><td>" + storeData[i].City + "</td><td>" + storeData[i].Dealer_Name + "</td></tr>");
//});
//                $.each(visitData, function (i) {
//                   $("#visit_table").append( "<tr><td>" + visitData[i].retailer_name + "</td></tr>");
//});
//                     
                     
                     
                     
//                    console.log(data.Cities);
//                     console.log(data.DST);
                     $("#salescityexe_table").html('');
                     
                     
                    var storeData = data.Cities;
               var visitData = data.DST;
               var storageLocations = [];
                var visitLocations = [];
                     var cityLocations = [];
                
                     //console.log(storeData) ; 
               for(var i=0; i<storeData.length; i++){
                   storageLocations.push(storeData[i]['Dealer_Name']);                   
               }
                     
              for(var i=0; i<storeData.length; i++){
                   cityLocations.push(storeData[i]['City']);                   
               }
               
               for(var i=0; i<visitData.length; i++){
                   visitLocations.push(visitData[i]['retailer_name']);                   
               }
                     
                var ar = [];
                     ar.push(cityLocations);
               ar.push(storageLocations);
               ar.push(visitLocations);
                
                     
                //console.log(ar);
                     
                var r = ar[0].map(function(col, i) {
                        return ar.map(function(row) {
                            return (typeof row[i] ==='string') ? row[i] : '';  
                        
                });
                });
                     
                     //console.log(r);
                   r.forEach(function(e) {  
$("table tbody").append('<tr><td>'+e[0]+'</td><td>'+e[1]+'</td><td>'+(e[1] === e[2] ? '<i class="fas fa-check-circle fa-lg"></i>' : '')+'</td></tr>');
                    });
       
                     
                     
                 }
                 
             });
        
        
            
          
    });
    });
</script>

<script>
$(document).ready(function(){
    
    //suppstate_Name
    $('select[name="prod_Brand"]').on('change', function() {
            var brand_Name = $(this).val();
        //alert(brand_Name);
        
        if(brand_Name) {
                $.ajax({
                    url: '<?php echo base_url()?>Crm/brandList/'+brand_Name,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                        $('select[name="prod_Category"]').empty();
                         $('select[name="prod_Name"]').empty();
                        $('select[name="prod_Category"]').prepend("<option value='0'>Select Category</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="prod_Category"]').append('<option value="'+ value.category_Name +'">'+ value.category_Name +'</option>');
                        });
                    }
                });
            }
        
    });
    
    $('select[name="prod_Category"]').on('change', function() {
       
            var category_Name = $(this).val();
       // alert(category_Name);
        
        if(category_Name) {
                $.ajax({
                    url: '<?php echo base_url()?>Crm/productList/'+category_Name,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                         //$('select[name="productcomplaint_Nature"]').empty();
                        //console.log(data);
                        $('select[name="prod_Name"]').empty();
                        $('select[name="prod_Name"]').prepend("<option value='0'>Select Model</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="prod_Name"]').append('<option value="'+ value.prod_Name +'">'+ value.prod_Name +'</option>');
                        });
                    }
                });
            }
        
        var caseValue = $("input[name='prod_Casetype']:checked").val();
        
       //  var caseValue = $(this).val();
       // alert(caseValue);
            if(caseValue == 'Complaint'){
                $('.complaintNature').show();
                
                //prod_Category
               var prod_Category =  $('#prod_Category option:selected').val();
                //console.log(prod_Category);
                //alert(prod_Category);
                if(prod_Category) {
                $.ajax({
                    url: '<?php echo base_url()?>Crm/prodcomplaintDetail/'+prod_Category,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                         $('select[name="productcomplaint_Nature"]').empty();
                        $('select[name="productcomplaint_Nature"]').prepend("<option value='0'>Select Complaint</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="productcomplaint_Nature"]').append('<option'+ value.nature_Complaint +'</option>');
                        });
                    }
                });
            }
                
                
               }else if(caseValue == 'Install'){
                   $('select[name="productcomplaint_Nature"]').prepend("<option value='0'>Select Complaint</option>").val('');
                   $('.complaintNature').hide();
                   
               }
        
        
        
        
        
    });
    
    
    $('select[id="prodedit_Category"]').on('change', function() {
        //alert($(this).val()); 
       // alert("test");
       var category_Name = $(this).val();
       if(category_Name) {
                $.ajax({
                    url: '<?php echo base_url()?>Asp/partSpares/'+category_Name,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                       // console.log(data);  editpartName_two
                         $('select[name="editpartName"]').empty();
                        $('select[name="editpartName"]').prepend("<option value='0'>Select Parts</option>").val('');
                        
                        $('select[name="editpartName_two"]').empty();
                        $('select[name="editpartName_two"]').prepend("<option value='0'>Select Parts</option>").val('');
                        
                        $.each(data, function(key, value) {
                            $('select[name="editpartName"]').append('<option value="'+ value.part_Name +'">'+ value.part_Name +'</option>');
                        });
                        
                        $.each(data, function(key, value) {
                            $('select[name="editpartName_two"]').append('<option value="'+ value.part_Name +'">'+ value.part_Name +'</option>');
                        });
                        
                    }
                });
            }
            
            
    });
    
    //asp product category wise parts display
    
    $('select[id="prodaspedit_Category"]').on('change', function() {
        //alert($(this).val()); 
       // alert("test");
       var category_Name = $(this).val();
       if(category_Name) {
                $.ajax({
                    url: '<?php echo base_url()?>Asp/partSpares/'+category_Name,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                       // console.log(data);  editpartName_two
                         $('select[name="editasppartName"]').empty();
                        $('select[name="editasppartName"]').prepend("<option value='0'>Select Parts</option>").val('');
                        
                         $.each(data, function(key, value) {
                            $('select[name="editasppartName"]').append('<option value="'+ value.part_Name +'">'+ value.part_Name +'</option>');
                        });
                        
                        $('select[name="editasppartName_Two"]').empty();
                        $('select[name="editasppartName_Two"]').prepend("<option value='0'>Select Parts</option>").val('');
                        
                       
                        
                        $.each(data, function(key, value) {
                            $('select[name="editasppartName_Two"]').append('<option value="'+ value.part_Name +'">'+ value.part_Name +'</option>');
                        });
                        
                    }
                });
            }
            
            
    });
    
});
</script>
<script>
$(document).ready(function(){
   $(".viewca_data").click(function(){
         var barcode = $(this).attr("id");  
         //alert(barcode);
         var caValue;
         var barc= $.trim(barcode);
         $.ajax({  
                url:"<?php echo base_url('Plant_Dashboard/criticalareasData')?>",  
                method:"post",  
                data:{barcode:barc},
                dataType: "json",
                success:function(data){
                    $("#catable").html('');
                    $.each(data, function (index, value) {
                        $("#catable ").append('<<tr><td>'+value.ca_name+'</td><td>'+value.man_name+'</td></tr>');
                    //console.log(value.ca_name);
                    //caValue = value.ca_name;    
                    
                        //
    });
                    //$(".modal-body #caData").val(caValue);
                    //  $('#employee_detail').html(data);  
                      //console.log(data['ca_name']);
                    //$(".caData").text(data.ca_name);
                    $('#datacaModal').modal("show"); 
//                    if(data.status == 'ok'){
//                          // console.log(data);
//                         $('#complaint_overview').text(data.result.complaint_overview);
//                          $('#prod_Remakrs').text(data.result.prod_Remarks);
//                         $('#dataModal').modal("show");  
//                    }else if(data.status == 'err') {
//                        //console.log(data);
//                        //console.log(data);
//                        // $('#employee_detail').html(data);  
//                         $('#dataModal1').modal("show"); 
//                         //alert("User not found...");
//                    }
                    console.log(data);
                     //$('#employee_detail').html(data);  
                    // $('#prod_Remakrs').text(data.result.prod_Remarks);
                   
                }  
           });  
         
     }); 
    
     
     $('.viewticket_data').click(function(){  
           var ticket_id = $(this).attr("id");  
           //alert(ticket_id);
           $.ajax({  
                url:"<?php echo site_url('Crm/ticketviewData')?>",  
                method:"post",  
                data:{ticket_id:ticket_id},
                dataType: "json",
                success:function(data){
                    //console.log(data);
                    if(data.status == 'ok'){
                         var videoData = data.result.video_one;
                         var billCopy = data.result.bill_copy;
                         var warrantyCard = data.result.warranty_card;
                         var custSign = data.result.customer_signature;  
                         var videoData2 = data.result.video_two;
                           var video = "<video width='400' height='400' id='aspVideo1' controls> <source src='"+videoData+"' type='video/mp4'></video>";
                    var videoSecond = "<video width='400' height='400' id='aspVideo2' controls> <source src='"+videoData2+"' type='video/mp4'></video>";
                    var image1 = "<img src='"+billCopy+"' style='width:250px; height:250px'>";
                    var image2 = "<img src='"+warrantyCard+"' style='width:250px; height:250px'>";
                    var image3 = "<img src='"+custSign+"' style='width:250px; height:250px'>";
                    
                         $('#complaint_overview').text(data.result.complaint_overview);
                          $('#prod_Remakrs').text(data.result.prod_Remarks);
                           $('#ajax_video').html(video);
                          $('#ajax_Second').html(videoSecond);
                          $('#ajax_Bill').html(image1);
                          $('#ajax_Warranty').html(image2);
                          $('#ajax_Custsign').html(image3);
                         $('#dataplantModal').modal("show");  
                    }else if(data.status == 'err') {
                        //console.log(data);
                        //console.log(data);
                        // $('#employee_detail').html(data);  
                         $('#dataplantModal1').modal("show"); 
                         //alert("User not found...");
                    }
                    //console.log(data);
                     //$('#employee_detail').html(data);  
                    // $('#prod_Remakrs').text(data.result.prod_Remarks);
                   
                }  
           });  
      }); 
    
    
});
</script>
<script>

</script>
<script>
$(document).ready(function(){
  $('select[name="crmengineer_Name"]').on('change', function() {
        $(".technicianAssign").hide();
        $(".technicianAction").hide();
        $(".techactionSection").show();
         var engineerName = $(this).val();
         //alert(engineerName);
      
      if(engineerName) {
                $.ajax({
                    url: '<?php echo base_url()?>Crm/engineerDetail/'+engineerName,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                       $("#crmengineer_Contact").val(data.contact_number);
                    }
                });
            }
      
      
     });
});
</script>
<script>
    $(document).ready(function(){
        $(function() {
    $("#prod_Datepurchase").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1995:2037',
        dateFormat: 'dd/mm/yy',
        minDate: 0,
        defaultDate: null
    }).on('change', function() {
        $(this).valid();  // triggers the validation test
        // '$(this)' refers to '$("#datepicker")'
    });
});
    });
</script>


<script>
$(document).ready(function(){
    
//    $('select[name="product_Name"]').on('change', function() {
//            var prod_Name = $(this).val();
//        //alert(prod_Name);
//        
//        if(prod_Name) {
//                $.ajax({
//                    url: '<?php echo base_url()?>Asp/productspare/'+prod_Name,                 
//                    type: "GET",
//                    dataType: "json",
//                    success:function(data) {
//                       // console.log(data);
//                         $('select[name="parts_Id"]').empty();
//                        $('select[name="parts_Id"]').prepend("<option value='0'>Select Parts</option>").val('');
//                        $.each(data, function(key, value) {
//                            $('select[name="parts_Id"]').append('<option value="'+ value.partsmaster_Id +'">'+ value.partName +'</option>');
//                        });
//                    }
//                });
//            }
//        
//    });
//    
//    
    $('select[name="parts_Id"]').on('change', function() {
            var sparepart_Name = $(this).val();
       // alert(sparepart_Name);
        
        if(sparepart_Name) {
                $.ajax({
                    url: '<?php echo base_url()?>Asp/sparepartDetail/'+sparepart_Name,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                        $("#aspproduct_UnitRate").val(data.partunit_Rate);
                       // $('#aspDiscount_Perunit').val(data.discount_Amount);
                        //console.log(data.unit_Rate);
//                         $('select[name="asp_sparepartName"]').empty();
//                        $('select[name="asp_sparepartName"]').prepend("<option value='0'>Select Parts</option>").val('');
//                        $.each(data, function(key, value) {
//                            $('select[name="asp_sparepartName"]').append('<option value="'+ value.partsmaster_Id +'">'+ value.partName +'</option>');
//                        });
                    }
                });
            }
        
    });
//    
    
    $('select[name="asppartCategory_Name"]').on('change', function() {
        var category_Name = $(this).val();
        //alert(category_Name);
        if(category_Name) {
                $.ajax({
                    url: '<?php echo base_url()?>Asp/partSpares/'+category_Name,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                       // console.log(data);
                         $('select[name="parts_Id"]').empty();
                        $('select[name="parts_Id"]').prepend("<option value='0'>Select Parts</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="parts_Id"]').append('<option value="'+ value.part_Name +'">'+ value.part_Name +'</option>');
                        });
                    }
                });
            }
            
            
    });
    
    
    
     $(".btn-asporderadd").click(function(){
        
        
            var part_name = $("#asp_sparepartName").val();
            var myResponse; 
            var myResponse1;
            var categoryName;
            if(part_name){
                $.ajax({
                        url: '<?php echo base_url()?>Asp/partDetails/'+part_name,					
                        type: "GET",
                        dataType: "json",
                        async: false,  
                        success:function(data){
                                    console.log(data);
                            //console.log(data['product_info'][0]['product_name']);
                                    myResponse=data['parts_info'][0]['part_Name']; 
                                    myResponse1=data['parts_info'][0]['id']; 
                                    categoryName = data['parts_info'][0]['Category']
                                     //$("#saleprod_Name").val(data['product_info'][0]['product_Master']); 
                                   // console.log("Product Name "+myResponse);
                            },

                        error: function(data){
                        }
                    });
            }
                //console.log(myResponse);
                var catName = categoryName;
                //console.log(catName);
                var prod = myResponse;
         //console.log("Product Name"+prod);
                var pid = myResponse1;
                var prod_name = prod;  
               // var asppartCategory_Name
                var part_name = $("#asp_sparepartName").val();
                var qty = $("#aspproduct_Quantity").val();
                var unitprice = $("#aspproduct_UnitRate").val();
                var netamount = $("#aspNet_Amount").val();
                var netlanding = $("#aspNet_Landing").val();
                var discountperunit = $("#aspDiscount_Perunit").val();
               // var prod_Name = $("#product_Name").val();
            
                var _tr= '<tr><input type="hidden" name="parts_Id[]" value="'+prod+'"><input type="hidden" name="product_Name[]" value="'+catName+'">'
                +'<td><input type="text" name="asp_ProductName[]" value="'+prod+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="aspproduct_Quantity[]" value="'+qty+'" class="form-control"></td>'
                +'<td><input type="text" name="aspproduct_UnitRate[]" value="'+unitprice+'" class="form-control"></td>'
                +'<td><input type="text" name="aspNet_Amount[]" value="'+netamount+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="aspNet_Landing[]" value="'+netlanding+'" class="form-control" readonly></td>'
                +'<td><input type="text" name="aspDiscount_Perunit[]" value="'+discountperunit+'" class="form-control" readonly></td>'
                
                +'<td><button type="button" class="btn btn-danger remove_Btn float-left" style="padding: 7px 14px;margin-top:0px;font-size: 12px;"><i class="fas fa-trash-alt"></i></button></td></tr>';

                //$("#product_Name").val('');
          $("#asppartCategory_Name").val("");		
         $('select[name="product_Name"]').select2("val","");
                $("#asp_sparepartName").empty('');	
               // asp_sparepartName
                $("#aspproduct_Quantity").val('');
                $("#aspproduct_UnitRate").val('');
                $("#aspNet_Amount").val('');			
                $("#aspNet_Landing").val('');
                $("#aspDiscount_Perunit").val('');		
                $(".aspordertable_Body").append(_tr); 	
                $(".show-btns").hide();
                
                var grandtotal=0;
                var total;

//                $("input[name='Net_Amount[]']").each(function() {
//                    
//                total = $(this).val();	
//                grandtotal += parseInt(total);	
//                //alert(grandtotal);
//                });			
//                //totalAmount
//              $("#totalAmount").val(grandtotal);

              
    });
    
    //Asp order parts master
    
    $("#aspproduct_Quantity").blur(function(){
        //saleproduct_UnitRate   saleproduct_Quantity
        
        var qty = $(this).val();
        var unitRate = parseInt($("#aspproduct_UnitRate").val());
        
        
            if(unitRate){
                var result = qty * unitRate;
                $("#aspNet_Amount").val(result);
           }else {
               $("#aspNet_Amount").val('0');
           }
    });
    
    
//    $("#aspproduct_UnitRate").blur(function(){
//        //saleproduct_UnitRate   saleproduct_Quantity Net_Landing  Discount_Perunit
//        
//        var unitrate = $(this).val();
//        var qty = parseInt($("#aspproduct_Quantity").val());
//        
//           
//                var result = qty * unitrate;
//                $("#aspNet_Amount").val(result);                    
//                
//            
//                var netlanding = (qty * unitrate) / qty;
//                var discountPerunit = ((qty * unitrate) / qty) - unitrate;
//                $("#aspDiscount_Perunit").val(discountPerunit);  
//                $("#aspNet_Landing").val(netlanding);  
//       
//    });
    
    $("#asp_sparepartName").change(function(){
            var value = $(this).val();
            if(value == ''){
                $(".show-btns").hide();
            }else {
                $(".show-btns").show();
            }
        });
        
    
});
   
</script>

<?php
                if($this->session->flashdata('newscheme_Add') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#newschememodal").modal();
                    });
                    </script>

                <?php
                }
            ?>
            
<?php
                if($this->session->flashdata('editscheme_report') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#editschememodal").modal();
                    });
                    </script>

                <?php
                }
            ?>
            
            
<?php
                if($this->session->flashdata('editticket_report') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#raiseticketeditModal").modal();
                    });
                    </script>

                <?php
                }
            ?>
<?php
                if($this->session->flashdata('report') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#raiseticketModal").modal();
                    });
                    </script>

                <?php
                }
            ?>

<?php
                if($this->session->flashdata('shipment_Report') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#shipmentModal").modal();
                    });
                    </script>

                <?php
                }
            ?>
           <?php
                if($this->session->flashdata('invoice_Pay') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#invoiceModal").modal();
                    });
                    </script>

                <?php
                }
                ?>
                <?php
                if($this->session->flashdata('bill_Paycheque') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#billchequeModal").modal();
                    });
                    </script>

                <?php
                }
                ?>
                
                
<?php
                if($this->session->flashdata('order_Process') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#orderprocessModal").modal();
                    });
                    </script>

                <?php
                }
            ?>
            
            <?php
                if($this->session->flashdata('addorder_success') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#orderaspModal").modal();
                    });
                    </script>

                <?php
                }
            ?>
            

<?php
                if($this->session->flashdata('ticketassign_report') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#ticketassignModal").modal();
                    });
                    </script>

                <?php
                }
            ?>
<?php
                if($this->session->flashdata('partial_order') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#orderreceiveModal").modal();
                    });
                    </script>

                <?php
                }
            ?>
<?php
                if($this->session->flashdata('order_receive') !=   ''){
                ?>

                    <script>
                    $(document).ready(function(){
                        $("#ordercompletereceiveModal").modal();
                    });
                    </script>

                <?php
                }
            ?>



<script>
    $(document).ready(function(){
        $('input[type=radio][name=prod_Casetype]').change(function() {
            $('select[name="productcomplaint_Nature"]').empty();
        var caseValue = $(this).val();
       // alert(caseValue);
            if(caseValue == 'Complaint'){
                $('.complaintNature').show();
                
                //prod_Category
               var prod_Category =  $('#prod_Category option:selected').val();
                
                if(prod_Category) {
                $.ajax({
                    url: '<?php echo base_url()?>Crm/prodcomplaintDetail/'+prod_Category,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                        $('select[name="productcomplaint_Nature"]').prepend("<option value='0'>Select Complaint</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="productcomplaint_Nature"]').append('<option>'+ value.nature_Complaint +'</option>');
                        });
                    }
                });
            }
                
                
               }else {
                   $('select[name="productcomplaint_Nature"]').prepend("<option value='0'>Select Complaint</option>").val('');
                   $('.complaintNature').hide();
                   
               }
});

$('input[type=radio][name=editcall_Casetype]').change(function() {
            $('select[name="productcomplaint_Nature"]').empty();
        var caseValue = $(this).val();
       // alert(caseValue);
            if(caseValue == 'Complaint'){
                $('.editcall_Complaint').show();
                
                //prod_Category
               var prod_Category =  $('#prod_Category option:selected').val();
                
                if(prod_Category) {
                $.ajax({
                    url: '<?php echo base_url()?>Crm/prodcomplaintDetail/'+prod_Category,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                        $('select[name="productcomplaint_Nature"]').prepend("<option value='0'>Select Complaint</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="productcomplaint_Nature"]').append('<option>'+ value.nature_Complaint +'</option>');
                        });
                    }
                });
            }
                
                
               }else if(caseValue == 'Install') {
                   $('select[name="productcomplaint_Nature"]').prepend("<option value='0'>Select Complaint</option>").val('');
                   $('.editcall_Complaint').hide();
                   
               }
});

var callCase = $("input[name='editcall_Casetype']:checked").val();

if(callCase == 'Complaint'){
    //alert("test");
                $('.editcall_Complaint').show();
                
}
    });

</script>
 
<script>


$(document).ready(function(){
    //$("#proddemand_Qty").blur(function(){
      $("input[name~='proddemand_Qty']").blur(function(){
            var demandQty = $(this).val();
        alert(demandQty);
      }) 
      
  
});

</script>

<script>
$(document).ready(function(){

// $("input[name='crm_Amount']").blur(function(){
//     var crmAmount = $(this).val();
//     alert(crmAmount);
//
//});
    
    $("input[name^='proddemand_Qty[]']").blur(function(){
        
         var demandQty = $(this).val();
        var unitRate = $(this).closest('tr').find("input[name='Unit_Rate[]']").val();
        
        
        if(demandQty){
                var result = demandQty * unitRate;
                $(this).closest('tr').find("input[name='prodnet_Amount[]']").val(result);
                
            
                
                var grandtotal=0;
                var grandtotalAmount=0;

                //$(this).closest('tr').remove();

                $("input[name^='proddemand_Qty[]']").each(function() {
                var total = $(this).val();	                        
                grandtotal += parseInt(total);	
                });	

                $("input[name^='prodnet_Amount[]']").each(function() {
                var total = $(this).val();	                        
                grandtotalAmount += parseInt(total);	
                });	

                //totalAmount
                $('#totalAmount').text(grandtotalAmount);
                $('#totalDemand').text(grandtotal);
            
            
               
                
           }else {
                $("input[name='prodnet_Amount[]']").val('0');
           }
        
        
        
//        alert(demandQty);
//        alert(unitRate);
//        if(crmAmount){
//           $(this).closest('tr').find(".crmamt_Btn").removeAttr("disabled");
//           }
        
        var totalAmt = $('#totalAmount').text();
        var result = inWords(totalAmt)
        $("#words").text(result.toUpperCase());
        
        
    });
    
    
    
    $("input[name='crm_Amount']").blur(function(){
        
         var crmAmount = $(this).val();
        if(crmAmount){
           $(this).closest('tr').find(".crmamt_Btn").removeAttr("disabled");
           }
        
    });
    
//    $("input[name='crm_Amount']").blur(function(){
//            
//        $(this).closest('tr').find("input[name='crm_Amount']").val();
//        var crmAmount = $(this).val();
//        alert(crmAmount);
//    });
//    
//    $(this).closest('tr').find("input[name='crm_Amount']").blur(function(){
//        var crmAmount = $(this).val();
//        alert(crmAmount);
//    });
    
    $(document).on('click','.crmamt_Btn',function() {
       // alert("test");
        var ticket_Id = $(this).val();
        
         var crm_Amt = $(this).closest('tr').find("input[name='crm_Amount']").val();
        
        
        $.ajax({
                    url: '<?php echo base_url()?>Crm/insertcrmAmount',
                    type: 'POST',
                    data: {ticketId: ticket_Id, crmAmt: crm_Amt},
                    //dataType: "json",  
                    error: function() {
                            alert('Something is wrong');
                         //$("#salescityexe_table").html('');
                        },
                 
                 success: function() {
                     $('#crmamountModal').modal('show');
//                     sleep.timeout(3000);
//                     //window.function(reload);
//                     location.reload();  
                        setTimeout(function(){
                        window.location.reload(1);
                        }, 2000);
                     //alert("test");
                     //console.log(data);
                        //console.log("success");
                 }
                 
             });
        
        
        
//        alert(ticket_Id);
//        alert(crm_Amt);
    });
    
    
    $(document).on('click','.crmupdate_Btn',function() {
        //alert("test");
        var ticket_Id = $(this).val();
        
         var crm_Amt = $(this).closest('tr').find("input[name='crmupdate_Amount']").val();
//        alert(ticket_Id);
//        alert(crm_Amt);
        
        $.ajax({
                    url: '<?php echo base_url()?>Crm/insertcrmAmount',
                    type: 'POST',
                    data: {ticketId: ticket_Id, crmAmt: crm_Amt},
                    //dataType: "json",  
                    error: function() {
                            alert('Something is wrong');
                         //$("#salescityexe_table").html('');
                        },
                 
                 success: function() {
                     $('#crmamountModal1').modal('show');
//                     sleep.timeout(3000);
//                     //window.function(reload);
//                     location.reload();  
                        setTimeout(function(){
                        window.location.reload(1);
                        }, 2000);
                     //alert("test");
                     //console.log(data);
                        //console.log("success");
                 }
                 
             });
        
        
        
//        alert(ticket_Id);
//        alert(crm_Amt);
    });
    
    
    
    $(document).on('click','.crmedit_Btn',function() {
            //$('.crmupdate_Btn').show();
            $(this).closest('tr').find(".crmupdate_Btn").show();
            $(this).closest('tr').find(".crmedit_Btn").hide();    
            $(this).closest('tr').find("input[name='crmupdate_Amount']").removeAttr("readonly");
            
    });
    
        $(document).on('blur','.crm_Amt',function() {
      // alert("test");
        
         var crmAmount = $(this).val();
        if(crmAmount){
           $(this).closest('tr').find(".crmamt_Btn").removeAttr("disabled");
           }
        
        
            //$('.crmupdate_Btn').show();
//            $(this).closest('tr').find(".crmupdate_Btn").show();
//            $(this).closest('tr').find(".crmedit_Btn").hide();    
//            $(this).closest('tr').find("input[name='crmupdate_Amount']").removeAttr("readonly");
            
    });
    
    
//    $( "#totalAmount").load(function() {
//       alert("test");
//            // Handler for .load() called.
//    });
    
    
});
</script>

<script>
$(document).ready(function(){
    
        var totalAmt = $('#totalAmount').text();
        var result = inWords(totalAmt)
        $("#words").text(result.toUpperCase());
        //alert(totalAmt);
    //alert("document ready occurred!");
});
</script>
<script>
var a = ['','one ','two ','three ','four ', 'five ','six ','seven ','eight ','nine ','ten ','eleven ','twelve ','thirteen ','fourteen ','fifteen ','sixteen ','seventeen ','eighteen ','nineteen '];
var b = ['', '', 'twenty','thirty','forty','fifty', 'sixty','seventy','eighty','ninety'];



function inWords (num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
    return str;
}
</script>
<script>
$(document).ready(function(){
    
    $(document).on('click','.btn-invoiceremove',function() {
        
         var grandtotal=0;
       var grandtotalAmount=0;
       
       $(this).closest('tr').remove();
        
         $("input[name^='proddemand_Qty[]']").each(function() {
			var total = $(this).val();	                        
			grandtotal += parseInt(total);	
		});	
        
        $("input[name^='prodnet_Amount[]']").each(function() {
			var total = $(this).val();	                        
			grandtotalAmount += parseInt(total);	
		});	
                
        //totalAmount
             $('#totalAmount').text(grandtotalAmount);
              $('#totalDemand').text(grandtotal);
        
        var totalAmt = $('#totalAmount').text();
        var result = inWords(totalAmt)
        $("#words").text(result.toUpperCase());
        
        
    });
    
    //totalStock
                var grandtotal = 0;
                $("input[name^='proddemand_Qty[]']").each(function() {
                    total = $(this).val();
                    //alert(total);
                    //var totalAm = total.replace(/,/g,'');  
                    grandtotal += parseInt(total);	
                });		
            $('#totalDemand').text(grandtotal);
});
</script>


<script> 

    
    $(document).ready(function(){

//suppstate_Name  aspsOrder
    
//    function aspsOrder(id){
//        console.log(id);
//        //alert(id);
//    }
//    

//function aspsOrder($id){
//    
//    //alert($id);
//    
//    var result;
//    event.preventDefault();
//      
//     // reset form on modals
//    $.ajax({
//        url : "<?php echo base_url('Crm/Asp/')?>" + id,
//        type: "GET",
//        dataType: "JSON",
//        success: function(data)
//        {
//             
//            //var areaName;
//        console.log(data);
//           //result = data[1];
//           //console.log(result);
////           $.each(result, function( index, value ) {
////                areaName = value.asp_Area ;
////            });
//            
////           $.each(result, function(key, value) {                
////    $('#aspdata_Name').append($("<option value='0'>Select ASP</option>").attr("value",value.asp_Id).text(value.asp_Name)); 
////});
////            $('[name="ticketgenerate_id"]').val(data[0].ticketgenerate_Id);
//////
////            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
////            $('.modal-title').text('Reassign ASP'); // Set title to Bootstrap modal title
////
////        },
////        error: function (jqXHR, textStatus, errorThrown)
////        {
////            alert('Error get data from ajax');
////        }
//            
//            
//        }
//    });
//    
//    
//    
//}
    
    

    });
    
    
</script>
    <script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>
<script>
$(document).ready(function(){
     //cust_Mobile
    
    $("input[name='cust_Mobile']").blur(function() {
            //alert($(this).val());
       
            var custMobile = $(this).val();
        
        if(custMobile){
                $.ajax({
                        url: '<?php echo base_url()?>Crm/custDetails/'+custMobile,					
                        type: "GET",
                        dataType: "json",
                        async: false,  
                        success:function(data){
                                
                                console.log(data);
                            
                                if(data.complaint){
                                   $("#cust_Name").val(data.complaint['cust_Name']);
                                   $("#cust_Address1").val(data.complaint['cust_Address1']);
                                   }else if(data.register_Sale){
                                        $("#cust_Name").val(data.register_Sale['customer_name']);
                                       //address_one address_two
                                       $("#cust_Address1").val(data.register_Sale['address_one']);
                                       $("#cust_Address2").val(data.register_Sale['address_two']);
                                   }else {
                                       $("#cust_Name").val('');
                                       $("#cust_Address1").val('');
                                   }
                            
                            
//                                if (data.register_Sale && data.complaint){
//                                    $("#cust_Name").val(data.complaint['cust_Name']);
//                                   }else if(data.complaint && data.register_Sale ==null){
//                                           $("#cust_Name").val(data.complaint['cust_Name']); 
//                                }else if(data.register_Sale == null || data.complaint == null){
//                                         $("#cust_Name").val('');
//                                }else if(data.register_Sale && data.complaint== null){
//                                         $("#cust_Name").val(data.register_Sale['customer_name']); 
//                                }else if(data.register_Sale){
//                                         $("#cust_Name").val(data.register_Sale['customer_name']); 
//                                         }
                                    
                                    
//                                if( (data.complaint) || (data.register_Sale && data.complaint)     ){
//                                    //console.log(data.register_Sale['customer_name']);
//                                    //cust_Name  address_one  address_two  pin_code  retailer_name
//                                    $("#cust_Name").val(data.complaint['cust_Name']);
//                                    $("#cust_Email").val();
//                                   }else if(data.complaint == null && data.register_Sale) {
//                                       $("#cust_Name").val(data.register_Sale['cust_Name']);
//                                        //console.log(data.complaint['cust_Name']);
//                                   }else if(data.register_Sale == null && data.complaint == null){
//                                            $("#cust_Name").val('');
//                                            }
//                                    
                                  
                                
                            },

                        error: function(data){
                        }
                    });
            }
        
        
        
});
});
</script>
<script>
$(document).ready(function(){
   


$('select[name="repair_Info"]').on('change', function() {
    var repairinfo = $(this).val();
    $('.notifybtn').hide();
    $('.editticketSub').show();
    // alert(repairinfo);
    
    if(repairinfo == 'Part Replacement'){
        
        $('input[type=radio][name=prodwarranty_Casetype]').change(function() {
            
            $('#editpartName option[value=""]').attr("selected",true);
             var warranty = $(this).val();
           //  alert(warranty);
             if(warranty == 'Warranty' && repairinfo == 'Part Replacement'){
                 $('.productwithwarranty').show();
                 $('.productcostDetails').hide();
             }else if(warranty == 'Outofwarranty' && repairinfo == 'Part Replacement') {
                 $('.productcostDetails').show();
                  $('.productwithwarranty').hide();
                  
              }
            
        });
    }else if(repairinfo == 'Adjustment'){
        
        $('select[name="editpartName"]').val('0');
        
         $('.notifybtn').hide();
          $('.productwithwarranty').hide();
                $('.productcostDetails').hide();
         
         
         //alert()
         $('input[type=radio][name=prodwarranty_Casetype]').change(function() {
             
             $('#editpartName option[value=""]').attr("selected",true);
             $('.partCost ').val('');
             
        var warranty = $(this).val();
        var repairinfo = $( "#repair_Info option:selected" ).text();
        //alert(warranty);
            if(warranty == 'Warranty' && repairinfo == 'Adjustment'){
                $('.productwithwarranty').hide();
                $('.productcostDetails').hide();
              }else {
                  $('.productwithwarranty').hide();
                  $('.productcostDetails').hide();
              }
        });
        
        
         
                //  $('.productwithwarranty').hide();
                // $('.productcostDetails').hide();
     }
});

    
    
})
</script>
<script>
$(document).ready(function(){
    $('select[name="editpartName"]').on('change', function() {
            //editpartName
        var partName = $(this).val();
        $('.partCost').val('');
        $('.notifybtn').hide();
          //aspeditticket_Name
        var aspName = $( "#aspeditticket_Name option:selected" ).text();
        //alert(aspName);
        $.ajax({
                    url: '<?php echo base_url()?>Crm/partcostdetail',
                    type: 'POST',
                    data: {partName: partName, aspId: aspName},
                    dataType: "json",  
                    error: function() {
                        $('.partCost').val('Part Not Available');
                            //alert('Something is wrong');
                         //$("#salescityexe_table").html('');
                        },
                 
                 success: function(data) {
                            //console.log();
                        if(data == 'Part Not Available'){
                            $('.partCost').val(data);
                            $('.notifybtn').show();
                            $('.editticketSub').hide();
                        }else {
                            $('.partcostSec').hide();
                            // $('.partCost').val(data);
                            $('.editticketSub').show();
                        }
                     $('.part_Cost').text(data);
                     
                     console.log(data);  
                 }
                 
             });
 
        
    });
    
    
    
     $('#editpartName_two').on('change', function() {
            //editpartName
        var partName = $(this).val();
        $('.partCost').val('');
        $('.notifybtn').hide();
          //aspeditticket_Name
        var aspName = $( "#aspeditticket_Name option:selected" ).text();
        //alert(partName);
        $.ajax({
                    url: '<?php echo base_url()?>Crm/partcostdetail',
                    type: 'POST',
                    data: {partName: partName, aspId: aspName},
                    dataType: "json",  
                    error: function() {
                        $('.partCost').val('Part Not Available');
                            //alert('Something is wrong');
                         //$("#salescityexe_table").html('');
                        },
                 
                 success: function(data) {
                            //console.log();
                        if(data == 'Part Not Available'){
                            $('.partCost').val(data);
                            $('.notifybtn').show();
                            $('.editticketSub').hide();
                        }else {
                             $('.partCost').val(data);
                            $('.editticketSub').show();
                        }
                     $('.part_Cost').text(data);
                     
                     console.log(data);  
                 }
                 
             });
 
        
    });
    
    
    
    $('select[name="editasppartName"]').on('change', function() {
            //editpartName
        var partName = $(this).val();
        $('.partaspCost').val('');
        $('.notifybtn').hide();
          //aspeditticket_Name
        var aspName = $( "#aspeditticket_Name option:selected" ).text();
        //alert(partName);
        $.ajax({
                    url: '<?php echo base_url()?>Crm/partcostdetail',
                    type: 'POST',
                    data: {partName: partName, aspId: aspName},
                    dataType: "json",  
                    error: function() {
                        $('.partaspCost').val('Part Not Available');
                            //alert('Something is wrong');
                         //$("#salescityexe_table").html('');
                        },
                 
                 success: function(data) {
                            //console.log();
                        if(data == 'Part Not Available'){
                            $('.partaspCost').val(data);
                            $('.aspnotifybtn').show();
                            $('.editticketSub').hide();
                            $('.partaspcostSec').show();
                        }else {
                            $('.partaspcostSec').hide();
                             //$('.partaspCost').val(data);
                            $('.editticketSub').show();
                        }
                     $('.partaspCost').text(data);
                     
                     //console.log(data);  
                 }
                 
             });
 
        
    });
    
    
    $('select[name="editasppartName_Two"]').on('change', function() {
            //editpartName
        var partName = $(this).val();
        $('.partCost').val('');
        $('.notifybtn').hide();
          //aspeditticket_Name
        var aspName = $( "#aspeditticket_Name option:selected" ).text();
        //alert(partName);
        $.ajax({
                    url: '<?php echo base_url()?>Crm/partcostdetail',
                    type: 'POST',
                    data: {partName: partName, aspId: aspName},
                    dataType: "json",  
                    error: function() {
                        $('.partaspCost').val('Part Not Available');
                            //alert('Something is wrong');
                         //$("#salescityexe_table").html('');
                        },
                 
                 success: function(data) {
                            //console.log();
                        if(data == 'Part Not Available'){
                            $('.partaspCost').val();
                            $('.notifybtn').show();
                            $('.editticketSub').hide();
                        }else {
                             $('.partaspCost').val(data);
                            $('.editticketSub').show();
                        }
                     $('.partaspCost').text(data);
                     
                     //console.log(data);  
                 }
                 
             });
 
        
    });
    
    
    
    
});
</script>
<script>
    $(document).ready(function(){
        //notifybtn  aspnotifybtn
        
        $( ".notifybtn" ).click(function() {
            
            //alert("test");
            $("#barcode_Scan").rules("remove", "required");
            $("#service_Cost").rules("remove", "required");
            $("#distance_Travel").rules("remove", "required");
            $("#custbill_Copy").rules("remove", "required");
            
            var partName = $('select[name="editpartName"] option:selected').val();
            var partName_two = $('select[name="editpartName_two"] option:selected').val();
            var aspId = $('#aspId').val();
            var partStatus = $('#partCost').val();
            var ticketId = $('#tickt_Id').val();
             //var type = $('#prodwarranty_Casetype').val();
             var type = $("input[name='prodwarranty_Casetype']:checked").val();
            //var type =  $('input[name=prodwarranty_Casetype]').val();
             //alert(type);
            $.ajax({
                
                url:"<?php echo site_url('Crm/notifyPart')?>",  
                method:"post",  
                data:{partName:partName,partName_two:partName_two, aspId:aspId, partStatus:partStatus,type:type,ticketId :ticketId},
                dataType: "json",
                success:function(data){
                    
                    $('#modalnofication').modal('show');
                    setTimeout(function(){
                     window.location = '/Crm/ticketHistory';
                    },6000);
                    //console.log(data);
                        //alert("test");
                }
            });
        //     alert(aspId);
        //   alert(partName);
        
                
        });
        
         $( ".aspnotifybtn" ).click(function() {
            
            //alert("test");
            $("#barcode_Scan").rules("remove", "required");
            $("#service_Cost").rules("remove", "required");
            $("#distance_Travel").rules("remove", "required");
            $("#custbill_Copy").rules("remove", "required");
            
            var partName = $('select[name="editpartName"] option:selected').val();
            var partName_two = $('select[name="editpartName_two"] option:selected').val();
            var aspId = $('#aspId').val();
            var partStatus = $('#partCost').val();
            var ticketId = $('#tickt_Id').val();
             //var type = $('#prodwarranty_Casetype').val();
             var type = $("input[name='prodwarranty_Casetype']:checked").val();
            //var type =  $('input[name=prodwarranty_Casetype]').val();
             //alert(type);
            $.ajax({
                
                url:"<?php echo site_url('Crm/notifyPart')?>",  
                method:"post",  
                data:{partName:partName,partName_two:partName_two, aspId:aspId, partStatus:partStatus,type:type,ticketId :ticketId},
                dataType: "json",
                success:function(data){
                    
                    $('#modalnofication').modal('show');
                    setTimeout(function(){
                     window.location = '/Asp/ticketHistory';
                    },6000);
                    //console.log(data);
                        //alert("test");
                }
            });
        //     alert(aspId);
        //   alert(partName);
        
                
        });
        
    });
</script>

<script>
$(document).ready(function(){
    $('select[name="aspeditticket_Name"]').on('change', function() {
        var aspName = $(this).val();
        //alert(aspName);
        var resultAsp;
        if(aspName) {
                $.ajax({
                    url: '<?php echo base_url()?>Crm/asptechDetail/'+aspName,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                        var area = data.asp['user_City'];
                        $('#aspeditticket_Area').val(area);
                        var resultAsp = data.technician;
                         $('select[name="technician_Name"]').empty();
                        $('select[name="technician_Name"]').prepend("<option value='0'>Select Technician</option>").val('');
                        $.each(resultAsp, function(key, value) {
                            $('select[name="technician_Name"]').append('<option value="'+ value.id +'">'+ value.contact_Person +'</option>');
                        });
                    }
                });
            }
            
            
    });
    
    $('select[name="technician_Name"]').on('change', function() {
        var techName = $(this).val();
        //alert(aspName);
       // var resultAsp;
        if(techName) {
                $.ajax({
                    url: '<?php echo base_url()?>Crm/techDetail/'+techName,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                        $('#technician_Contact').val(data['contact_Number']);
                    }
                });
            }
            
            
    });
    
    
    
});
</script>

<script>
    $(document).ready(function(){
        $('select[name="invoice_No"]').on('change', function() {
        var invoiceNo = $(this).val();
        //alert(invoiceNo);
       // var resultAsp;
        if(invoiceNo) {
                $.ajax({
                    url: '<?php echo base_url()?>Retailer/chequeyAmt/'+invoiceNo,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                        $('#invoice_Amt').text(data['amount']);
                        $('#invoiceAmount').val(data['amount']);
                    }
                });
            }
            
            
    });
    });
</script>

<script>
    $(document).ready(function(){
            $('#partcostGST').blur(function(){
                // var partGst = $(this).val();
                
                // var partCost = $('#partCost').val();
                
                var partDiscount = $(this).val();
                var partCost = parseInt($('#partCost').val());
                 var partGst = parseInt($('#partcostGST').val());
                var partdiscTotal = (partCost * partDiscount) / 100;
                var grossparttotal =  partCost - partdiscTotal;
                 
                 var gstTotal = (grossparttotal * partGst) / 100;
                 var netTotal = partCost + gstTotal;
                 $('#totalCost').val(netTotal);
                 
                
                
               // alert(partGst);
            });
            
            $('#partDiscount').blur(function(){
                //var n1 = parseInt($('#txtn1').val());
                var partDiscount = $(this).val();
                var partCost = parseInt($('#partCost').val());
                 var partGst = parseInt($('#partcostGST').val());
                var partdiscTotal = (partCost * partDiscount) / 100;
                var grossparttotal =  partCost - partdiscTotal;
                 
                 var gstTotal = (grossparttotal * partGst) / 100;
                 var netTotal = partCost + gstTotal;
                 $('#totalCost').val(netTotal);
                //alert(netTotal);
            });
            
            
    })
</script>
<script>
$(document).ready(function(){
    
    
    $("input[name='proddemand_Qty[]']").blur(function(){
            var demand_qty = parseInt($(this).val());
        
        //    var stock_Qty = $("input[name='stock_Qty[]']").val();
       var stock_Qty = parseInt($(this).closest('tr').find("input[name='stock_Qty[]']").val());
            //alert(demand_qty); alert(stock_Qty);
        if(demand_qty > stock_Qty){
            
            $('#orderprocessModal').modal('show');
           //alert("Please enter Qty less than Stock Qty");
            $('.order_Process').hide();
           }else {
               $('.order_Process').show();
           }

            
        });
        
        //materialreceive_Qty[]  dispatched_Qty[]
    $("input[name='materialreceive_Qty[]']").blur(function(){
            var mr_qty = parseInt($(this).val());
        
        //    var stock_Qty = $("input[name='stock_Qty[]']").val();
       var dispatch_Qty = parseInt($(this).closest('tr').find("input[name='dispatched_Qty[]']").val());
            //alert(demand_qty); alert(stock_Qty);
        if(mr_qty > dispatch_Qty){
            
            $('#ordermrModal').modal('show');
           //alert("Please enter Qty less than Stock Qty");
            $('.orderReceive').hide();
           }else {
               $('.orderReceive').show();
           }

            
        });
    
    
//    $("input[name='proddemand_Qty[]']").each(function() {
//                var demandQty = $(this).val();
//        alert(demandQty);
//        });
    
    
});
</script>
<script>
$(document).ready(function(){
    $('#allaspList').click(function(){
            if($(this).prop("checked") == true){
               
                 $.ajax({
        url : "<?php echo base_url('Crm/aspallDetails/')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            //console.log(data);
              $('#aspName').html('');
              $('#cust_State').val('');
              $('#cust_Pincode').val('');
            $("#aspName").append("<option value=''>Select ASP</option>").val('');
            $.each(data, function(key, value) {
    $('#aspName').append($("<option></option>").attr("value",value.id).text(value.userdept_Name)); 
});
    
            
         
        }
   
       }); 
                
                
                
                //alert("Checkbox is checked.");
            }
            else if($(this).prop("checked") == false){
                
                var aspTown = $( "#asp_Town option:selected" ).val();
                //alert(aspTown);
                //alert("Checkbox is unchecked.");
                
                $.ajax({
        url : "<?php echo base_url('Crm/aspDetails/')?>" + aspTown,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            //console.log(data);
              $('#aspName').html('');
            $('#cust_State').val('');
              $('#cust_Pincode').val('');
            $("#aspName").append("<option value=''>Select ASP</option>").val('');
            $.each(data, function(key, value) {
    $('#aspName').append($("<option></option>").attr("value",value.id).text(value.userdept_Name)); 
});
    
            
         
        }
   
       });
                
                
            }
        });
});
</script>
<!--prodedit_Category-->
<script>
    $(document).ready(function(){
        
        //edit category in crm section 
        $('#prodedit_Category').on('change', function() {
            var categoryName = $(this).val();
           // alert(categoryName);
            if(categoryName == 'LED'){
                 $('#service_Cost').val('');
                $('.ledtypeSection').show();
                
                  var myOptions = {
    val1 : 'Install'
};
var mySelect = $('#repair_Info');
$.each(myOptions, function(val, text) {
    mySelect.append(
        $('<option value="Install"></option>').html(text)
    );
});

            }else if(categoryName == 'WASHING MACHINE'){
            $('#service_Cost').val('175');
        }else if(categoryName == 'WASHER'){
            $('#service_Cost').val('175');
        }else if(categoryName == 'COOLER'){
            $('#service_Cost').val('250');
        }else if(categoryName == 'WATER DISPENCER'){
            $('#service_Cost').val('250');
        }else if(categoryName != 'LED') {
            
                $("#repair_Info option[value='Install']").remove();
            }
        });
        
        var category_value = $( "#prodedit_Category option:selected" ).val();
       // alert(category_value);
        if(category_value == 'LED'){
            $('.ledtypeSection').show();
            var myOptions = {
            val1 : 'Install'
            };
            var mySelect = $('#repair_Info');
                $.each(myOptions, function(val, text) {
                mySelect.append(
                $('<option value="Install"></option>').html(text)
                );
            });

          
        }else if(category_value == 'WASHING MACHINE'){
            $('#service_Cost').val('175');
        }else if(category_value == 'WASHER'){
            $('#service_Cost').val('175');
        }else if(category_value == 'COOLER'){
            $('#service_Cost').val('250');
        }else if(category_value == 'WATER DISPENCER'){
            $('#service_Cost').val('250');
        }else {
            $( "#repair_Info").val('0');
        }
        
        $('#ledType').on('change', function() {
            var ledType = $(this).val();
            if(ledType == 1){
                $('#service_Cost').val('250');
            }else if(ledType == 2){
                $('#service_Cost').val('350');
            }else if(ledType == 3){
                $('#service_Cost').val('450');
            }else if(ledType == 4){
                $('#service_Cost').val('550');
            }else if(ledType == 0){
                $('#service_Cost').val('');
            }
        });
        
        ////edit category in Asp section 
        
        $('#prodaspedit_Category').on('change', function() {
            var categoryName = $(this).val();
           // alert(categoryName);
            if(categoryName == 'LED'){
                 $('#service_Cost').val('');
                $('.ledtypeSection').show();
                
                  var myOptions = {
    val1 : 'Install'
};
var mySelect = $('#repair_Info');
$.each(myOptions, function(val, text) {
    mySelect.append(
        $('<option value="Install"></option>').html(text)
    );
});

            }else if(categoryName == 'WASHING MACHINE'){
            $('#service_Cost').val('175');
        }else if(categoryName == 'WASHER'){
            $('#service_Cost').val('175');
        }else if(categoryName == 'COOLER'){
            $('#service_Cost').val('250');
        }else if(categoryName == 'WATER DISPENCER'){
            $('#service_Cost').val('250');
        }else if(categoryName != 'LED') {
            
                $("#repair_Info option[value='Install']").remove();
            }
        });
        
        var category_value = $( "#prodaspedit_Category option:selected" ).val();
       // alert(category_value);
        if(category_value == 'LED'){
            $('.ledtypeSection').show();
            var myOptions = {
            val1 : 'Install'
            };
            var mySelect = $('#repair_Info');
                $.each(myOptions, function(val, text) {
                mySelect.append(
                $('<option value="Install"></option>').html(text)
                );
            });

          
        }else if(category_value == 'WASHING MACHINE'){
            $('#service_Cost').val('175');
        }else if(category_value == 'WASHER'){
            $('#service_Cost').val('175');
        }else if(category_value == 'COOLER'){
            $('#service_Cost').val('250');
        }else if(category_value == 'WATER DISPENCER'){
            $('#service_Cost').val('250');
        }else {
            $( "#repair_Info").val('0');
        }
        
        $('#ledType').on('change', function() {
            var ledType = $(this).val();
            if(ledType == 1){
                $('#service_Cost').val('250');
            }else if(ledType == 2){
                $('#service_Cost').val('350');
            }else if(ledType == 3){
                $('#service_Cost').val('450');
            }else if(ledType == 4){
                $('#service_Cost').val('550');
            }else if(ledType == 0){
                $('#service_Cost').val('');
            }
        });
        
        
    });
</script>
<script>
    $(document).ready(function(){
        
    
 $(document).on('click','.pmt_Btn',function() {
        //alert("test");
        var invoice_Id = $(this).val();
        
         var pay_Amt = $(this).closest('tr').find("input[name='payment_Amt']").val();
//        alert(invoice_Id);
//        alert(pay_Amt);
        
        $.ajax({
                    url: '<?php echo base_url()?>Asp/insertaspAmount',
                    type: 'POST',
                    data: {invoice_Id: invoice_Id, payment_Amt: pay_Amt},
                    //dataType: "json",  
                    error: function() {
                            alert('Something is wrong');
                         //$("#salescityexe_table").html('');
                        },
                 
                 success: function() {
                     $('#aspamountModal').modal('show');
//                     sleep.timeout(3000);
//                     //window.function(reload);
//                     location.reload();  
                        setTimeout(function(){
                        window.location.reload(1);
                        }, 2000);
                     //alert("test");
                     //console.log(data);
                        //console.log("success");
                 }
                 
             });
        
        
        
//        alert(ticket_Id);
//        alert(crm_Amt);  payment_Amt  pmt_Btn
    });
        
        $("#payment_Amt").blur(function(){
           // alert($(this).val());
            
            var payAmt = $('#payAmt').text();
            var payent_Amt = $(this).val();
            var netAmt = $('#netAmt').text();
            
            var amt = netAmt - payAmt;
            // alert(payAmt);
            // alert(netAmt);
            // alert(payent_Amt);
            if(payent_Amt > amt){
                alert("Please enter less than balance");
              $('.pmt_Btn').hide();
              }else {
                  $('.pmt_Btn').show();
              }
            //alert(payAmt);
        });
        
        
        $('#paymentView').on('hidden.bs.modal', function (e) {
//    var table = $('#paymentTable').DataTable();
//    table.clear();
            //$('.paymentlist').empty();
});
        
        
        });
    
</script>

<script type="text/javascript">
     $(document).ready(function($){
            $('select[name="billcity_Name"]').on('change', function() { 
            var city_Name = $(this).val();
            var city= $.trim(city_Name);
            //alert(city);
            if(city) {
                $.ajax({
                    url: '<?php echo base_url()?>Billing/distibutorLists/'+city,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                            //console.log(data);
                        $('select[name="billdist_Name"]').empty();
                        $('#billdist_Name').prepend("<option value='0'>Select Distributor</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="billdist_Name"]').append('<option value="'+ value.distributor_name +'">'+ value.distributor_name +'</option>');
                        });
                    }
                });
            }
        });
     });
    
    $(document).ready(function($){
            $('select[name="billdist_Name"]').on('change', function() { 
            var city_Name = $(this).val();
            var city= $.trim(city_Name);
            //alert(city);
            if(city) {
                $.ajax({
                    url: '<?php echo base_url()?>Billing/dealerLists/'+city,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                            if(data != ''){
                               $('select[name="billdeal_Name"]').empty();
                        $('#billdeal_Name').prepend("<option value='0'>Select Dealer</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="billdeal_Name"]').append('<option value="'+ value.retailer_name +'">'+ value.retailer_name +'</option>');
                        });
                               }else {
                                  $('select[name="billdeal_Name"]').append('<option>No Dealer</option>');  
                               }
                           // console.log(data);
                        
                    }
                });
            }
        });
     });
    
    
 </script>
 

<script>
function payment_View(invoice_Id){
    //$(".paymentlist").empty();
   // alert(invoice_Id);
    var result;
    event.preventDefault();
     
     // reset form on modals
    $.ajax({
        url : "<?php echo base_url('Asp/paymentDetail/')?>" + invoice_Id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('.paymentlist').find('tbody tr').empty();
            $('#paymentView').modal('show');
             $.each(data, function(key, value) {
      var tr = $("<tr />");
//       tr.append(
//         $("<td />", { html: v})[0].outerHTML
//       );
                 tr.append($('<td/>').html(value.pay_Date));
         tr.append($('<td/>').html(value.payment_Amt));
                 
      $(".paymentlist tbody").append(tr)
     
   })
            
            
             //$('.paymentlist').find('tbody tr').empty();
            //
            //$('#paymentView').modal('show');
          
//           $.each(data, function( index, value ) {
//                var $tr = $('<tr/>');
//    $tr.append($('<td/>').html(value.payment_Amt));
//    $tr.append($('<td/>').html(value.pay_Date));
//    $('.paymentlist tr:first').after($tr);
//            });

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            //alert('Error get data from ajax');
            $('#paymentView1').modal('show');
        }
    });
}
</script>
    <script>
        // ============================================================== 
    // Revenue Cards
    // ============================================================== 
    $("#sparkline-revenue").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#5969ff',
        fillColor: '#dbdeff',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ff407b',
        fillColor: '#ffdbe6',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#25d5f2',
        fillColor: '#dffaff',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#fec957',
        fillColor: '#fff2d5',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true,
    });
    </script>

    <script>
    $("#sparkline-1").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#5969ff',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ff407b',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#25d5f2',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ffc750',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true,
    });
    </script>

</body>
 
</html>