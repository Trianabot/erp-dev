<style>
    a.link_Asp{
    color: blue;
    text-decoration: none;
    border-bottom: 1px solid blue;
}
</style>
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Customer Balance</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Customer Balance</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
<div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-12 " style= "border:1px solid #f4f4f4; text-align:center">
                                    <h5>File Uploads</h5>
                                    <input type = "checkbox" onclick="myFunction()" id = "red">Billings
                                    <input type = "checkbox" onclick="myFunction1()"  id = "green">Products
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-12 " id="myDIV" style="display:none; border:1px solid #f4f4f4; text-align:center;margin-top:5px">
                                <form enctype="multipart/form-data" method="post" action="<?php echo base_url();?>Crm/billing" role="form">
                                <div class="form-group">
                                <label for="exampleInputFile">Buildings File Upload</label>
                                <input type="file" name="file" id="file" size="150" required>
                                <p class="help-block">Only Excel/CSV File Import.</p>
                                </div>
                                <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
                                </form>
                                </div>
                                
                                <div class="col-xs-12 col-sm-6 col-md-12 " id="myDIV1" style="display:none; border:1px solid #f4f4f4; text-align:center;margin-top:5px">
                                <form enctype="multipart/form-data" method="post" action="<?php echo base_url();?>Crm/products" role="form">
                                <div class="form-group">
                                <label for="exampleInputFile">Products File Upload</label>
                                <input type="file" name="file" id="file" size="150" required>
                                <p class="help-block">Only Excel/CSV File Import.</p>
                                </div>
                                <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
                                </form>
                                </div>
                            </div>

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Customer Balance</span>
                               
                                   
                                </div>
                            </div>
                               
                               <?php 
                        
                        echo form_open(base_url()."Crm/aspBillingsfilter");?>
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-2 col-md-2'>
                                        <div class='form-group'>
                                            <label>From Date</label>
                                             <input type='date' name='fromDate' id='fromDate' class='form-control' required>
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-2 col-md-2'>
                                        <div class='form-group'>
                                            <label>To Date</label>
                                            <input type='date' name='toDate' id='toDate' class='form-control' required>
                                        </div>
                                    </div>
                                     <div class='col-xs-12 col-sm-2 col-md-2'>
                                    <div class='form-group'>
                                            <label>Select Distributor</label>
                                            <select name='' class='form-control'>
                                                <option value='0'>Select Distributor</option>
                                            </select>
                                    </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-2 col-md-2'>
                                        <div class='form-group'>
                                            <label>Select Dealer</label>
                                            <select name='asp_name' class='form-control' >
                                                <option value=''>Select Dealer</option>
                                             <?php 
                                                if($asps){
                                                foreach($asps as $asp){
                                                    ?> 
                                                    <option value='<?php echo $asp->userdept_Name?>'><?php echo $asp->userdept_Name;?></option>
                                                    <?php
                                                }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class='col-xs-12 col-sm-2 col-md-2'>
                                        <div class='form-group'>
                                            <input type='Submit' name='billing' value='Submit' class='btn btn-primary'>
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-2 col-md-2'>
                                        <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="bill_Statuscheck" class="custom-control-input" value="pendbill"><span class="custom-control-label">Pending Bills</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="bill_Statuscheck" class="custom-control-input" value="overduebill"><span class="custom-control-label">Overdue Bills</span>
                                                    </label>
                                    </div>
                                </div>
                                <?php echo form_close();?>
                               
                               
                                <div class="card-body1">
                                    <table class="table" id="distsalesTable">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 135.781px;color: crimson;">S No</th>
                                                <th scope="col" style="width: 135.781px;color: crimson;">Billing Date</th>
                                                <th scope="col" style="width: 135.781px;color: crimson;">Invoice Number</th>
                                                <th scope="col" style="width: 135.781px;color: crimson;">Party Name</th>  
                                                <th scope="col" style="width: 135.781px;color: crimson;">Town</th>
                                                <th scope="col" style="width: 135.781px;color: crimson;">Amount</th>
                                                <th scope="col" style="width: 135.781px;color: crimson;">Pending Amount</th>
                                                <th scope="col" style="width: 135.781px;color: crimson;">Credit Period</th>
                                                <th scope="col" style="width: 135.781px;color: crimson;">Due Date</th>
                                                <th scope="col" style="width: 135.781px;color: crimson;">Aeigin</th>
                                                 <!--<th scope="col" style="width: 135.781px;color: crimson;">Overdue</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
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
 
<script>
var table;
 
$(document).ready(function() {
 //alert($('#ticketasp_Name').val());
    //datatables
    table = $('#distsalesTable').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Crm/dealerSales')?>",
            "type": "POST",
            "data": function ( data ) {
                
                //console.log(data);
               // data.ticketasp_Name = $('#ticketasp_Name').val();
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
 
    
    
  

});
 
    
</script>
<div class="modal fade" id="paymentView1" tabindex="-1" role="dialog" aria-labelledby="paymentView1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="paymentView1">Payment History</h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3>Still Payment has not done</h3>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>


<div class="modal fade" id="paymentView" tabindex="-1" role="dialog" aria-labelledby="paymentView" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="paymentView">Payment History</h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <table class="table paymentlist">
                           <thead> 
                    <tr>
                       
                        <th>Date</th>
                         <th >Amount</th>
            </tr>
                               </thead>
                           <tbody>
                           </tbody>
    
</table>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
            
            <div class="modal fade" id="invoiceModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Payment Status</h4>
                </div>
                <div class="modal-body">
                    <?php echo "<h3>Invoice has been generated for "."<h3 style='color:green'>".$this->session->userdata('AspName')."</h3>"."</h3>"?>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
           
           <div class="modal fade" id="chequeinvoiceProducts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Invoice</h5>
                                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Proudct Details</p>
                                                                
                                                                <table class='table' id='invoiceprodTable'></table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
        <div class="modal fade" id="invProducts1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel1">Invoice</h5>
                                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Proudct Details</p>
                                                                
                                                                <h3> No Products for this invoice </h3>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV1");
   document.getElementById("red").checked = true;
   document.getElementById("green").checked = false;  
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    
  }
}
function myFunction1() {
  var x = document.getElementById("myDIV");
   var y = document.getElementById("myDIV1");
    document.getElementById("red").checked = false;  
    document.getElementById("green").checked = true;

  if (y.style.display === "none") {
    x.style.display = "none";
    y.style.display = "block";
    
  }
}
</script>

                                                
          