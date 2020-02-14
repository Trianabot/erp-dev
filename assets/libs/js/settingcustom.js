$(document).ready(function(){
    
    
    $('select[name="partbrand_Name"]').on('change', function() {
            var brand_Name = $(this).val();
        //alert(brand_Name);
        
        if(brand_Name) {
                $.ajax({
                    //url: '<?php echo base_url()?>Setting/categorymasterList/'+brand_Name,  
                     url: baseURL+'Setting/categorymasterList/'+brand_Name,   
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                       // console.log(data);
                        $('select[name="partcategory_Name"]').empty();
                        $('select[name="partcategory_Name"]').prepend("<option value='0'>Select Category</option>").val('');
                        $.each(data, function(key, value) {
                            $('select[name="partcategory_Name"]').append('<option>'+ value.category_Name +'</option>');
                        });
                    }
                });
            }
        
    });
});