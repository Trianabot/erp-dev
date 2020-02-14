
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Part Stock</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Stock" class="breadcrumb-link">Stock</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Add Part Stock</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               

                        <div class="card">
                        <div class="row margin0 grey">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <span class="table-title">Add Part Stock</span>
                                
                                <a href="<?php echo base_url()?>Stock/skyzenpartStock"> <h5 class="card-header1">  View Part Stock  </h5> </a>
                                </div>
                            </div>
                                    <div class="card-body">
                                <a href="<?php echo base_url()?>Stock/bulkpartCSV" class="btn btn-info btn-lg">
                                                    <span class="glyphicon glyphicon-export"></span> Export
                                </a>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <?php
                                        if($this->session->tempdata("add_success"))
                                        {
                                        echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("add_success")."</div>";
                                        }
                                        if($this->session->tempdata("add_fail"))
                                        {
                                        echo "<div class='alert alert-warning succ-msg' role='alert'>".$this->session->tempdata("add_fail")."</div>";
                                        }
                                        if($this->session->tempdata("add_creditfail"))
                                        {
                                        echo "<div class='alert alert-danger succ-msg' role='alert'>".$this->session->tempdata("add_creditfail")."</div>";
                                        }

                                        ?>
                                            <?php 
                                                /*
                                            $attributes = array('id' => 'brandform');
                                            echo form_open_multipart(base_url()."Stock/bulkstockPart", $attributes);
                                                */
                                                ?>
                                           <form method="POST" enctype="multipart/form-data" id="partfileUploadForm">
                                            <div class="form-group"> 
                                                <label for="uploadFile" class="col-form-label"> </label>
                                                <input type="file" name="uploadFile" id="uploadFile" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Submit" name="submit" class="btn btn-rounded btn-primary">
                                            </div>
                                                </form>
                                            <?php 
                                                /*echo form_close();
                                                */ ?>
                                            </div>
                                        </div>
                                       
                                    </div>
                    </div>
                    
                    
                    <div class='card'>
                        <div class='card-body'>
                            <div class='row'>
                                            <div class='col-xs-12 col-sm-12 col-md-12' id='unmatch' style='display:none'>
                                                <h3 id='notmatch' style='display:none'>Unmatched Data</h3>
                                                <table class='table' id='unmatchdata'>
                                                    <thead>
                                                        <tr>
                                                            <th>Brand</th>
                                                            <th>Category</th>
                                                            <th>Part Name</th>
                                                            <th>Good Qty</th>
                                                            <th>Defective Qty</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class='clearfix'>
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

<script>
        $(document).ready(function(){
                $("#partfileUploadForm").on("submit", function(e) {
                    e.preventDefault();
                    
                    var file_data = $('#uploadFile').prop('files')[0];
                    var form_data = new FormData();
                    form_data.append('stockFile', file_data);
                    $.ajax({
                        url : 'http://ec2-3-231-255-189.compute-1.amazonaws.com:8156/part/stock',
                        //url: 'http://ec2-3-231-255-189.compute-1.amazonaws.com:8156/product/stock', 
                        //dataType: 'text', // what to expect back from the server
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                                
                            if(response == ''){
                               //console.log("Success");
                                $("#partfileUploadForm")[0].reset();
                                $('#updSuccess').show();
                               }else {
                                   
                                  // console.log(response);
                                   
                                    $("#partfileUploadForm")[0].reset();
                                   var myObjStr = JSON.stringify(response);
                                   var stockdata =  JSON.parse(myObjStr);
                                   
                                   $('#unmatch').show();
                                   $('#notmatch').show();
            $("#unmatchdata tbody").empty();
                                   
                                   
                                   $.each(stockdata, function(key,value){
                                    var row='<tr>';
                                    row+='<td>'+value.brand+'</td><td>'+value.category+'</td><td>'+value.productName+'</td><td>'+value.quantity+'</td><td>'+value.defectiveQuantity+'</td>';
                                    row+='</tr>';
                                    $('#unmatchdata tbody').append(row);
                                   });
                                   $( "#unmatchdata" ).DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
                                   
                                   
                                   
                               }
                            
                            
                            
                        },
                        error: function (response) {
                            console.log("Fail"+response);
                        }
                    });
                    
                    
                    
                });
        });
    </script>  
