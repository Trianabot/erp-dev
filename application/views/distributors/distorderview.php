
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
                            <h2 class="pageheader-title">Orders </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Orders" class="breadcrumb-link">Orders</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Distributor/Listorders" class="breadcrumb-link">List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">General Orders</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                            <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <h5 class="card-header">Orders Lists</h5>
                            </div>
                                
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="distorderTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order No</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col"> Distributor Name </th>
                                                <th scope="col"> City</th>
                                                <th scope="col">Total</th>
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

                
            <!-- ============================================================== -->
            <!-- footer -->


<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderprodModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="orderprodModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Order Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          
          <div class="card">
              
              <div class="content" id="content">
                  
                                <div class="card-header p-4">
                                    <img src="<?php echo base_url()?>assets/icon2/skyzen.png" alt="" style="width: 18%;">
                                    
<!--                                    <a href="javascript:Clickheretoprint()" style="font-size:20px;">  <button class="btn btn-rounded btn-primary float-right">Print</button> </a>-->
                                   
                                    <div class="float-right"> <h3 class="mb-0">Order No #<span id='orderId'></span></h3>
                                    <span id='orderDate'></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-6">
                                            <h5 class="mb-3">From:</h5>                                            
                                            <h3 class="text-dark mb-1">
                                                <span id='contactPerson'></span>
                                            </h3>
                                         
                                            <div id='address'></div>
                                            <div id='userCity'></div>
                                            <div id='userState'></div>
                                            <div id='userPin'></div>
                                            <div>Email: <span id='fromemail'></span> </div>
                                            <div>Phone: <span id='fromphone'></span></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 class="mb-3">To:</h5>
                                            <h3 class="text-dark mb-1">
                                                <span id='deptName'> </span></h3>                                            
                                            <div id='address'></div>
                                            <div>Email: <span id='email'></span></div>
                                            <div>Phone: <span id='phone'></span></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive-sm">
                                         <div class="row">
            <div class='col-xs-12 col-sm-6 col-md-6'>
                <h3>Products Order</h3>
              <table class="table" id="orderProducts"></table>
              </div>
              <div class='col-xs-12 col-sm-6 col-md-6'>
                <h3>Parts Order</h3>
               <table class="table" id="orderParts"></table>
              </div>
          </div>
                                    </div>
                                    
                                    
                                    
                                    <div class='' style='float:right'>
                                        <h3>Total : <span id='totalAmt'></span>  </h3> 
                                    </div>
                                    
                                </div>
                                
                            </div>
          </div>
          
          
         
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>

     <script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js'></script>

<script>
    var ajaxResult=[];
$(document).ready(function() {
            $.ajax({
            // url: 'http://3.231.255.189:8156/user/3/order',
            url : 'http://3.231.255.189:8156/order',
            type: 'GET',
            dataType : "json",
            success: function ( data ) {
                ajaxResult.push(data);
                var myObjStr = JSON.stringify(data);
                var orderdata =  JSON.parse(myObjStr);
                
                $.each(orderdata, function(key, value){
                    //console.log(value);
                        var date = new Date(value.date);
                        var orderDate = date.getDate() + '/' + (date.getMonth()+1) + '/' + date.getFullYear();
                        var tr = $("<tr />");
                        tr.append($('<td/>').html('<a href="javascript:void(0)" onClick="divFunction('+value.orderId+')">'+value.orderId+'</a>'));
                        tr.append($('<td/>').html(orderDate));
                        tr.append($('<td/>').html(value.generatedToUser['contactPerson']));
                        tr.append($('<td/>').html(''));
                        tr.append($('<td/>').html(value.totalPrice));

                        $("#distorderTable tbody").append(tr);                    
                       });
                
                $( "#distorderTable" ).DataTable();
            }
        });
});
    
   function divFunction(id){
       $('#orderprodModal').modal('show');
       var orderNo = id;
       var resdata = ajaxResult;
       var orderdata = JSON.stringify(resdata);
       var orderdatajson =  JSON.parse(orderdata);
       
       $.each(orderdatajson, function(key, value){
           //console.log(value);
           //console.log(value);
        $("#orderProducts").empty();
        $('#orderProducts').prepend('<tr><td>Product Name</td><td>Quantity</td></tr>');

        $("#orderParts").empty();
        $('#orderParts').prepend('<tr><td>Part Name</td><td>Quantity</td></tr>');
           
            $.each(value, function(key1, value1){
                    //console.log(value1.orderId);  orderId  
                    if(orderNo == value1.orderId){
                        //console.log(value1);
                       //console.log(value1.generatedToUser['userdeptName']);
                         var date = new Date(value1.date);
                        var orderDate = date.getDate() + '/' + (date.getMonth()+1) + '/' + date.getFullYear();
                        var genId = value1.generatedBy;
                        
                        $.ajax({
                            url : '<?php echo base_url()?>Orders/getgeneratebyDet',
                            type: 'POST',
                            dataType : "json",
                            data : {genId : genId },
                            success: function ( data ) {
                                $('#contactPerson').text(data.contact_Person);
                                $('#address').text("Address: "+data.address);
                                $('#userCity').text("City: "+data.user_City);
                                $('#userState').text("State : "+data.user_State);
                                $('#userPin').text("Pincode : "+data.user_Pincode);
                                $('#fromemail').text(data.email);
                                $('#fromphone').text(data.contact_Number);
                                //console.log(data);
                            }
                        });
                        $('#orderDate').text(orderDate);
                        $('#orderId').text(value1.orderId);
                        //console.log();  
                        $('#totalAmt').text(value1.totalPrice);
                        $('#deptName').text(value1.generatedToUser['userdeptName']);
                        $('#address').text(value1.generatedToUser['address']);
                        $('#email').text(value1.generatedToUser['email']);
                       }
                    $.each(value1.products, function(key2, value2){
                        if(orderNo == value2.orderId){
                           // console.log(value2);
                            var row='<tr>';
                                row+='<td>'+value2.prod_Name+'</td><td>'+value2.quantity+'</td>';
                                row+='</tr>';
                                $('#orderProducts').append(row);
                           }
                    });
                
                    $.each(value1.parts, function(key2, value2){
                        if(orderNo == value2.orderId){
                            
                            var row='<tr>';
                                row+='<td>'+value2.part_Name+'</td><td>'+value2.quantity+'</td>';
                                row+='</tr>';
                                $('#orderParts').append(row);
                           }
                    });
            });
       });
    }
    
    function Clickheretoprint(){
           var printContents = document.getElementById('content').innerHTML;
    document.body.innerHTML = printContents;

    window.print();

        }
    
</script>

           