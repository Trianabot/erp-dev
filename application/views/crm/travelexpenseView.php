<style>
.table.dataTable.no-footer{
    border-bottom:none !important;
}
.table.dataTable thead th, table.dataTable thead td{
    border-bottom:1px solid #ddd !important;
}
.btn-success{
    width:100% !important;
}
</style>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Travel Expenses</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Travel Expense</li>
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
                        <label for="LastName" class="control-label">Asp</label>
                      
                           
                            <select name='ticketasp_Name' id='ticketasp_Name' class="form-control">
                                <option value='0'>Select Asp</option>
                                <?php 
                                foreach($asps as $asp){
                                    ?> 
                                <option value='<?php echo $asp->id?>'><?php echo $asp->userdept_Name;?></option>
                                    <?php
                                }
                                ?>
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

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                            <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Travel Expenses</span>
                               
                                <!--<a href="<?php echo base_url()?>Crm/addtravelExpense"> <h5 class="card-header1">  Add new</h5> </a>-->
                                
                                </div>
                            </div>
                               
                               
                               
                                <div class="card-body">
                                    <table id="traveltable" style="width:100%">
                                        <thead>
                                            <tr>
                                                
                                                <th scope="col">Ticket No</th>
                                                <th scope="col">ASP</th>
                                                <th scope="col">City</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">BarCode</th>
                                                <th scope="col">Distance as per calc</th>
                                                <th scope="col">Calculated Amount</th>           
                                                <th scope="col">Distance as per asp</th>  
                                                <th scope="col">Asp Amount</th>
                                                <th scope="col">Crm Amount</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class='travelTbody'>
                                           
                                           
                                    
                                           
                                    
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>

<script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>

     <script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js'></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"> </script>

<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 //alert($('#ticketasp_Name').val());
    //datatables
    table = $('#traveltable').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Crm/travelexpesneslist')?>",
            "type": "POST",
            "data": function ( data ) {
                
                //console.log(data);
                data.ticketasp_Name = $('#ticketasp_Name').val();
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
    
    $('#ticketasp_Name').change(function(){
        //alert($(this).val());
       // alert("test");
        table.ajax.reload();
    });
    
//    $('#fromDate').on('change',function(){
//       // alert("test");
//        //alert($(this).val());
//        table.ajax.reload();
//    });
    
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });
    

    
//    $('#fromDate').change(function(){
//        //alert("test");
//        
//        console.log($(this).val());
//     //Change code!
//});
    
  

});
 
</script>



<div class="modal fade" id="travelDecline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Decline Reason</h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <form role="form" action="" id="form" class="form-horizontal">
                           <input type="hidden" value="" name="ticket_ID"/>
                        <div class="form-group row">
                            
                            <label class="col-md-2 col-form-label">Reason</label>
                            <div class="col-md-6">
                                <input type="text" name="reasondecline" class="form-control" placeholder="Reason for decline">
                            </div>
                        </div>
                       </form>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" onclick="saveDecline()" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>


<div class="modal fade" id="crmamountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">CRM Amount</h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <h5>Successfully added the crm Amount</h5>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>  

<div class="modal fade" id="crmamountModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">CRM Amount</h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <h5>Successfully updated the Amount</h5>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>

                
            <!-- ============================================================== -->
            <!-- footer -->


           