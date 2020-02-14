$(document).ready(function(){
    
    
    $('select[name="ticket_No"]').on('change', function() {
        var ticketNo = $(this).val();
        var asptech;
        if(ticketNo) {
                $.ajax({
                    url: baseURL+'Crm/aspDetail/'+ticketNo,                 
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                         asptech= data.asptech;
                        $('select[name="service_Engineer"]').html('');
                        $('select[name="service_Engineer"]').prepend("<option value=''>Select Service Engineer</option>").val('');
                        $.each(asptech, function(key, value) {
                            $('select[name="service_Engineer"]').append('<option value="'+ value.id +'">'+ value.name_technician +'</option>');
                        });
                        //console.log(data.asptech);
                        console.log(data);
                        $('#ticket_Asp').val(data.asp.asp_Name);
                         $('#ticket_Aspcity').val(data.asp.asp_Area);  
                        $('#ticket_Category').val(data.ticket.prod_Category);
                    }
                });
            }
        
    });
    
      $('select[name="travelexpenseStatus"]').on('change', function() {
        
        
        var ticket_Id = $(this).val();
        //alert(ticket_Id);
        var fields = ticket_Id.split(/_/);
        var id = fields[0];
        var tic_id = fields[1];
        if(id == 1){
            
            var parent = $(this).parent("td").parent("tr");
                    bootbox.dialog({

                    message: "Are you sure you want to Approve ?",


                    buttons: {

                    success: {

                    label: "No",

                    className: "btn-success",

                    callback: function() {

                    $('.bootbox').modal('hide');
                        
                        $('select[name="travelexpenseStatus"]').val('0');
                    }

                    },

                    danger: {

                    label: "Submit!",

                    className: "btn-danger",

                    callback: function() {

                    $.ajax({

                    type: 'POST',
                        data:{ticket_id:tic_id},

                    url: baseURL+'Crm/updatetravelapproveStatus/',

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
            

            
        }else {
            //alert("test");
            $('[name="ticket_ID"]').val(tic_id);
            $('#travelDecline').modal('show');
        }
        
        
        
        
    });
    
     $('#travelDecline').on('hidden.bs.modal', function () {
             //$("#travelexpenseStatus").val('0');
             $('select[name="travelexpenseStatus"]').val('0');
            // location.reload();
            //$(this).find("input,textarea,select").val('0').end();

});
    
    
  
    
    
    
    

    
});

//function saveDecline(){
//    var url;
//     
//       url = baseURL+'Crm/ticketdecline_update';
//      
//
//       // ajax adding data to database
//          $.ajax({
//            url : url,
//            type: "POST",
//            data: $('#form').serialize(),
//            dataType: "JSON",
//            success: function(data)
//            {
//               //console.log(data);
////               //if success close modal and reload ajax table
//               $('#travelDecline').modal('hide');
//              location.reload();// for reload a page
//            },
//            error: function (jqXHR, textStatus, errorThrown)
//            {
//                alert('Error adding / update data');
//            }
//        });
//}