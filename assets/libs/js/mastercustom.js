$(document).ready(function(){
    
    //branch_delete
    
     $('.branch_delete').click(function(e){
e.preventDefault();

var branch_Id = $(this).attr('data-emp-id');

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

    //url: '<?php echo base_url()?>Crm/delete_Asp/'+asp_Id,
     url: baseURL+'Setting/deleteBranch/'+branch_Id,   

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
    
    
    
    
});