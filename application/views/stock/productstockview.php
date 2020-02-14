
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Product Stock</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Stock" class="breadcrumb-link">Stock</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                             <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Product Lists</span>
                            
                                    <!--<a href='<?php echo base_url()?>Stock/addstockProduct'> <h5 class="card-header1"> Add Product Stock </h5></a>-->
                                   
                                    <a href="<?php echo base_url()?>Stock/bulkstockProduct"> <h5 class="card-header1">  Bulk Upload  </h5> </a>
                                </div>
                            </div>
                               
                                 
<div class="card">
                                <div class="card-body">
                                    <table class="table" id="prodstockTable">
                                        <thead>
                                            <tr>
                                                <th scope="col"> S No </th>
                                                <th scope="col">Brand Name</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Quantity</th>
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


<script>
    var myTable;
$(document).ready(function() {

    $.ajax({
            type: 'GET',
            url: 'http://ec2-3-231-255-189.compute-1.amazonaws.com:8156/product/',
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                $.each(data, function(i, data) {
                     var body = "<tr>";
                            body    += "<td>" + data.id + "</td>";
                            body    += "<td>" + data.brand_Name + "</td>";
                            body    += "<td>" + data.category_Name + "</td>";
                            body    += "<td>" + data.prod_Name + "</td>";
                            body    += "<td>" + data.quantity + "</td>";
                            body    += "</tr>";
                            $( "#prodstockTable tbody" ).append(body);
                });
                $( "#prodstockTable" ).DataTable();
            },
            error: function() {
                alert('Fail!');
            }
    });

    
    });
</script>