<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Ticket History</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">Crm</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Ticket History</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                
 
                <form id="form-filter" class="form-horizontal">
<div class='row'>
                   
                    <div class='col-xs-12 col-sm-3 col-md-3'>
                        <div class="form-group">
                        <label for="fromDate" class="control-label">From Date</label>
                      
                          <input type='text' name='fromDate' id='fromDate' class='form-control'>
                      
                    </div>
                    </div>
                        <div class='col-xs-12 col-sm-3 col-md-3'>
                        <div class="form-group">
                      
                            <label for="toDate" class="control-label">To Date</label>
                      
                          <input type='text' name='toDate' id='toDate' class='form-control'>
                           
                      
                    </div>
                    </div>
                    <div class='col-xs-12 col-sm-3 col-md-3'>
                        <div class="form-group">
                        <label for="LastName" class="control-label">Status</label>
                      
                           
                            <select name='status' id='status' class="form-control">
                                <option value='0'>Select Status</option>
                                <option>Assigned</option>
                                <option>Part Pending</option>
                                <option>Open</option>
                                <option>Ticket Closed</option>
                            </select>
                      
                    </div>
                    </div>
                    <div class='col-xs-12 col-sm-3 col-md-3'>
                         <div class="form-group">
                       
<!--                            <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>-->
                            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                       
                    </div>
                    </div>
                    
                    
                    
                     </div>
                   
                </form>
           
        <div class='row'>
            <div class='col-xs-12 col-lg-12 col-sm-12 col-md-12 col-12'>
                
                <div class="card">
                            <div class="card-body">
                                <a href="<?php echo base_url()?>Crm/ticketCSV" class="btn btn-info btn-lg">
                                                    <span class="glyphicon glyphicon-export"></span> Export
                                </a>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12'> 
            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
             <thead style="color:white">
                                            <tr>
                                                <th rowspan="2" style='background-color: #6d767f'>Action</th>
                                                <th colspan="3" style='background-color: #36a1bb; text-align: center'>Customer</th>
                                                <th colspan="4" style='background-color: #f9c002; text-align: center'>Complaint</th>
                                                <th colspan="2" style='background-color: #6d767f; text-align: center'>ASC</th>
                                                <th colspan="2" style='background-color: #36a1bb; text-align: center'>TE</th>
                                                <th rowspan="2" style='background-color: #6d767f'>Status</th>
                                              
                                            </tr>
                                            <tr>
                                                <th style='background-color: #36a1bb'>Name</th>
                                                <th style='background-color: #36a1bb'>City</th>
                                                <th style='background-color: #36a1bb'>Mobile</th>
                                                 <th style='background-color: #f9c002'>Ticket Number</th>
                                                <th style='background-color: #f9c002'>Priority</th>
                                               
                                                <th style='background-color: #f9c002'>Issue Date</th>
                                                <th style='background-color: #f9c002'>Closed Date</th>
                                                <th style='background-color: #6d767f'>ASP</th>
                                                <th style='background-color: #6d767f'>Service Engineer</th>
                                                <th style='background-color: #36a1bb'>Approved</th>
                                                <th style='background-color: #36a1bb'>Posted</th>
                                            </tr>
                                        </thead>
            <tbody>
            </tbody>
 
            
        </table>
        </div>
        </div>
        </div>
        </div>
            </div>
        </div>
        
    </div>
    </div>
 
<script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>

     <script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js'></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"> </script>
    
    <script>
        
        function deleteTicket(id){
            //alert(id);
            
            //e.preventDefault();
var ticket_Id = id;
//var ticket_Id = $(this).attr('data-emp-id');

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
window.setTimeout(function(){location.reload()},3000)

})

.fail(function(){

bootbox.alert('Error....');

})

}

}

}

});
            
            
        }
//    $(document).ready(function(){
//        $(".deleteTicket").click(function(){
//            alert("test");
//        })
//    })
    </script>
<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Crm/ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                //console.log(data);
                data.fromDate = $('#fromDate').val();
                data.toDate = $('#toDate').val();
                data.status = $('#status').val();
            }
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
    $('#btn-filter').click(function(){ //button filter event click
        
        
        table.ajax.reload();  //just reload table
    });
    
    $('#status').change(function(){
        table.ajax.reload();
    });
    
//    $('#fromDate').on('change',function(){
//       // alert("test");
//        //alert($(this).val());
//        table.ajax.reload();
//    });
     $('#toDate').on('change',function(){
       // alert("test");
        //alert($(this).val());
        table.ajax.reload();
    });
    
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });
    
    var fromDate = $('input[name="fromDate"]');
    var toDate = $('input[name="toDate"]');
        // toDate
    fromDate.datepicker({
            format: 'dd-mm-yyyy',
            todayHighlight: true,
            autoclose: true,
         orientation: "top"
    });
    
    toDate.datepicker({
            format: 'dd-mm-yyyy',
            todayHighlight: true,
            autoclose: true,
         orientation: "top"
    });
    
//    $('#fromDate').change(function(){
//        //alert("test");
//        
//        console.log($(this).val());
//     //Change code!
//});
    
    $('#toDate').on("changeDate", function() {
        
           // var fromDate = $("#fromDate").val();
//        $.ajax({
//            url: '<?php echo site_url('employee/ajax_list')?>',
//            type: 'POST',
//            data: function ( data ) {
//                data.ticket_Generatedate = $('#fromDate').val();
//                data.ticket_Closedate = $('#toDate').val();
//            }
//        }),
        
        
//          $.ajax({
//                        url: '<?php echo site_url()?>employee/ajax_list/',					
//                        type: "POST",
//                       data: function ( data ) {
//                            data.ticket_Generatedate = $('#fromDate').val();
//                           data.ticket_Closedate = $('#toDate').val();
//                       }
//                    });
              
              
        //table.ajax.reload();
//            console.log(fromDate);
//            console.log($(this).val());
    });
    


});
 
</script>
    
    
<div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reassign ASP</h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <form role="form" action="" id="form" class="form-horizontal">
                           <input type="hidden" value="" name="ticketgenerate_id"/>
                        <div class="form-group row">
                            
                            <label class="col-md-2 col-form-label">Select ASP</label>
                            <div class="col-md-6">
                                <select name="asp_Name" id="aspdata_Name" class="form-control">
                                    <option value="0">Select ASP</option>
                                    
                                </select>
                            </div>
                        </div>
                       </form>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" onclick="save()" class="btn btn-primary">Reassign ASP</button>
                  </div>
                </div>
              </div>
            </div>
 
</body>
  
      <div class="modal fade" id="raiseticketeditModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Raise Ticket</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('editticket_report')?></h5>
                   <h5 class="text-center">
                        <?php echo $this->session->userdata('closedticket')?></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    
    
</html>