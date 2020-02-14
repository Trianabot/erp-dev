
    $(document).ready(function() {

    $('input[type=text]').each(function() {
        var disc;
        $( "#product_Unitprice" ).blur(function()  {
                
           var qty=parseInt($("#product_Qty").val());
          
           var originalPrice = $("#product_Unitprice").val().replace(/,/g,'');
           var unitPrice = parseInt(originalPrice);
           
           if(qty) {
                var tot=qty * unitPrice;
                var x=tot;
                x=x.toString();
                var lastThree = x.substring(x.length-3);
                var otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers != '')
                lastThree = ',' + lastThree;
                var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
               $("#product_Value").val(res);
           }else{
               $("#product_Value").val(0);
               $('#product_Total').val(0);
           }

           var gst = parseInt($("#product_GST").val());
           var tot = parseInt(tot);




           var finalAmount= ( ( (tot * gst) / 100 ) + tot);
           //$("#inputTableTotal").val(finalAmount);  

            var x=finalAmount;
            x=x.toString();
            var lastThree = x.substring(x.length-3);
            var otherNumbers = x.substring(0,x.length-3);
            if(otherNumbers != '')
            lastThree = ',' + lastThree;
            var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            $("#product_Total").val(res);


          });


          $( "#product_Qty" ).bind('keypress blur', function()  {
              var qty=parseInt($("#product_Qty").val());
             
              var originalPrice = $("#product_Unitprice").val().replace(/,/g,'');
              var unitPrice = parseInt(originalPrice);
                
           if(qty){
               var tot=qty * unitPrice;
               var x=tot;
               x=x.toString();
               var lastThree = x.substring(x.length-3);
               var otherNumbers = x.substring(0,x.length-3);
               if(otherNumbers != '')
               lastThree = ',' + lastThree;
               var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
              $("#product_Value").val(res);        
           }

            var gst = parseInt($("#product_GST").val());
            var tot = parseInt(tot);

           var gstValue = (tot * gst) / 100 ;
           $("#inputGST").val(gstValue);

          });

        
        

        //   if(disc){
        //     var gst = parseInt($("#inputTableGST").val());
        //     var famount= ( ( (Amount * gst) / 100 ) + Amount);
        //     //alert(famount);
        //     $("#inputTableTotal").val(famount);
        //   }else {
        //     var finalAmount= ( ( (tot * gst) / 100 ) + tot);
        //   var x=finalAmount;
        //   x=x.toString();
        //   var lastThree = x.substring(x.length-3);
        //   var otherNumbers = x.substring(0,x.length-3);
        //   if(otherNumbers != '')
        //   lastThree = ',' + lastThree;
        //   var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
        //   $("#inputTableTotal").val(res);
        //   }
        // var finalAmount= ( ( (tot * gst) / 100 ) + tot);
        // var x=finalAmount;
        // x=x.toString();
        // var lastThree = x.substring(x.length-3);
        // var otherNumbers = x.substring(0,x.length-3);
        // if(otherNumbers != '')
        // lastThree = ',' + lastThree;
        // var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
        // $("#inputTableTotal").val(res);
          

});
});
