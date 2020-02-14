$(document).ready(function(){
    $('select[name="stockbrand_Name"]').on('change', function() {
        
        var brand_Name = $(this).val();
        //alert(brand_Name);
        
        if(brand_Name) {
                $.ajax({
                    //url: '<?php echo base_url()?>Setting/categorymasterList/'+brand_Name,  
                     url: baseURL+'Stock/categoryList/'+brand_Name,   
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                        $('select[name="stockcategory_Name"]').empty();
                        $('select[name="stockcategory_Name"]').prepend("<option value='0'>Select Category</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="stockcategory_Name"]').append('<option value="'+ value.Category +'">'+ value.Category +'</option>');
                        });
                    }
                });
            }
        
        
    });
    
    //stockcategory_Name
    
     $('select[name="stockcategory_Name"]').on('change', function() {
        
        var category_Name = $(this).val();
       // alert(category_Name);
        
        if(category_Name) {
                $.ajax({
                    //url: '<?php echo base_url()?>Setting/categorymasterList/'+brand_Name,  
                     url: baseURL+'Stock/partList/'+category_Name,   
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                        $('select[name="stockpart_Name"]').empty();
                        $('select[name="stockpart_Name"]').prepend("<option value='0'>Select Part</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="stockpart_Name"]').append('<option value="'+ value.part_Name +'">'+ value.part_Name +'</option>');
                        });
                    }
                });
            }
        
        
    });
    
    //stockpart_Name
    
    $('select[name="stockpart_Name"]').on('change', function() {
       // alert($(this).val());
        var partName = $(this).val();
        
        if(partName) {
                $.ajax({
                    //url: '<?php echo base_url()?>Setting/categorymasterList/'+brand_Name,  
                     url: baseURL+'Stock/partStock/'+partName,   
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        
                        if(data){
                            $("#goodQuantity").text("Good Quantity "+data.good_Quantity);
                        $("#badQuantity").text("Bad Quantity "+data.bad_Quantity);
                            
                           }else {
                             $("#goodQuantity").text('');  
                               $("#badQuantity").text(''); 
                           }
                        //console.log("Good Qty "+data.good_Quantity);
                        
//                        $('select[name="stockpart_Name"]').empty();
//                        $('select[name="stockpart_Name"]').prepend("<option value='0'>Select Part</option>").val('');
//                        $.each(data, function(key, value) {
//                            $('select[name="stockpart_Name"]').append('<option value="'+ value.id +'">'+ value.part_Name +'</option>');
//                        });
                    }
                });
            }
        
        
//        alert(partName);
    });
    
    
    
    
    
    
});