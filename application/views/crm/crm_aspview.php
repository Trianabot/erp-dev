<?php

//$dataPoints1 = [];
$dataPoints1 = array();
$dataPoints2 = array();
$dataPoints3 = array();
$dataPoints4 = array();

       $querycount = $this->db->query("select * from ticket_generate where asp=$aspid");
                  
                  $total = $querycount->num_rows();
                  $close = 0;$open = 0;$notassign = 0;
                foreach ($querycount->result() as $row)
                {
                      if($row->status == "Ticket Closed"){
                          $close++;
                      }elseif($row->status != "Ticket Closed" && $row->service_Engineer != null){
                          $open++;
                      }elseif($row->status != "Ticket Closed" && $row->service_Engineer == null){
                          $notassign++;
                      }
                }


                $queryone = $this->db->query("select count(asp_Name) as close_count,asp_Name from ticket_generate where `status`='Ticket Closed' and asp=$aspid");
                  
                  
                foreach ($queryone->result() as $row)
                {
                   
                        $dataPoints1[] = array(
                          'label' => $row->asp_Name,
                          'y' => $row->close_count,
                          
                        );
                }
                //echo "<pre>";print_r($dataPoints1);die;
                $querytwo = $this->db->query("select count(asp_Name) as count,asp_Name from ticket_generate where `status`!='Ticket Closed' and asp=$aspid");
                 
                foreach ($querytwo->result() as $row)
                {
                  
	                $dataPoints2[] = array(
                          'label' => $row->asp_Name,
                          'y' => $row->count,
                          
                        );
                }
                
                $querythree = $this->db->query("select sum(amt_textbox) as amt,sum(crm_Amount) as crmamt,asp_Name from ticket_generate where asp=$aspid");

                foreach ($querythree->result() as $row)
                {
                 
	                $dataPoints3[] = array(
                          'label' => $row->asp_Name,
                          'y' => $row->amt,
                          
                        );
                        $dataPoints4[] = array(
                          //'label' => $row->asp_Name,
                          'y' => $row->crmamt,
                          
                        );
	                
	                
                }
                $queryfour = $this->db->query("select sum(crm_Amount) as crmamt,asp_Name from ticket_generate where asp=$aspid");

                foreach ($queryfour->result() as $row)
                {
                  
	               // $dataPoints4[] = array(
                //           'label' => $row->asp_Name,
                //           'y' => $row->crmamt,
                          
                //         );
                }
                $service_engineer_fee = 0;
                $queryfive = $this->db->query("select sum(service_engineer_fee) as total,asp_name from asp_product_info_replace_info  group by `asp_name`");
                foreach ($queryfive->result() as $row)
                {
                    $service_engineer_fee = $service_engineer_fee + $row->total;
                 $dataPoints5[] = array(
                          'label' => $row->asp_name,
                          'y' => $row->total,
                        );
                         
	             }
	             $crm_Amount = 0;
                $querysix = $this->db->query("select sum(crm_Amount) as total,asp_Name from ticket_generate where asp=$aspid");
                foreach ($querysix->result() as $row)
                {
                     $crm_Amount = $crm_Amount + $row->total;
	                $dataPoints6[] = array(
                          'label' => $row->asp_Name,
                          'y' => $row->total,
                          
                        );
                }


?>


<style>
.ticketDetail{
    border-radius:5px;color:#fff;
    height:96px !important;
}
</style>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
			 <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">CRM Overview</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                
               
                
                 <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                         <div class="card">
                              
                                <div class="card-body">
                                    <div class='row'>
                    
                    <div class='col-xs-12 col-sm-4 col-md-4'>
                        <input type='text' class='form-control' name='aspfrom_Date' id='aspfrom_Date' placeholder="From Date" style='background-color:lightblue'>
                    </div>
                     <div class='col-xs-12 col-sm-4 col-md-4'>
                        <input type='text' class='form-control' name='aspto_Date' id='aspto_Date' placeholder="To Date" style='background-color:lightblue'>
                    </div>
                     <div class='col-xs-12 col-sm-4 col-md-4'>
                          <select name='aspname' id='aspname' class='form-control'>
                                                <option value='0'>Select Asp</option>
                                                <?php 
                                                foreach($asps as $asp){
                                                    ?> 
                            <option value='<?php echo $asp->asp;?>'><?php echo $asp->asp_Name;?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                    </div>
                     
                </div>
                             </div>
                        </div>
                        
                     </div>
                </div>
                
                
                
                <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                           
                            <div class="card">
                                 <div class='ticketDetail' style='background-color: #204eea; '> 
                                
                                <div class="card-body">
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class=''> 
                                            <h5 style='color:white'>Total Tickets</h5>
                                                </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                             <h1 class="" style="float:right;color:white"><?php echo $total;?></h1>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                
                                
                            </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                 <div class='ticketDetail' style='background-color: #204eea;'>
                                <div class="card-body">
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <h5 style='color:white'>Open Tickets</h5>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                             <h1 class="" style="float:right;color:#fff"><?php echo $open;?></h1>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                
                                
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            
                            <div class="card">
                                <div class='ticketDetail' style='background-color: #204eea;'>
                                <div class="card-body">
                                    
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <h5 style='color:white'>Closed Tickets</h5>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                             <h1 class="" style="float:right;color:#fff"><?php echo $close;?></h1>
                                        </div>
                                    </div>
                                    
                                    
                                   
                                    
                                </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            
                            <div class="card">
                                <div class='ticketDetail' style='background-color: #204eea;'>
                                <div class="card-body">
                                    
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <h5 style='color:white'>Unassigned Tickets</h5>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                             <h1 class="" style="float:right;color:#fff"><?php echo $notassign;?></h1>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- line chart  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Asp Wise Tickets Open/Closed</h5>
                            <div class="card-body">
                                 <div id="chartContainer" style="height: 300px; width: 100%;">
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end line chart  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- bar chart  -->
                    <!-- ============================================================== -->
                    
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">ASP Wise Service Cost Paid/Due</h5>
                            <div class="card-body">
                                <div id="chartContainer1" style="height: 300px; width: 100%;">
                                </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end bar chart  -->
                    <!-- ============================================================== -->
                </div>
                </div>
                
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- pie chart  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Travel Expenses</h5>
                            <div class="card-body">
                                <div id="chartContainer2" style="height: 300px; width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pie chart  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- doughnut chart  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Overall Expenses</h5>
                            <div class="card-body">
                                <div id="chartContainer4" style="height: 300px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end doughnut chart  -->
                    <!-- ============================================================== -->
                </div>
                
                
                        
            </div>
			</div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
   
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- sparkline js -->
    <script src="<?php echo base_url()?>assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/charts/sparkline/spark-js.js"></script>
    <script src="<?php echo base_url()?>assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.js">
    

</script>
            <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> 
    <script type="text/javascript" src="<?php echo base_url()?>assets/libs/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/libs/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

    <script>
                $(document).ready(function() {
    $('#stockTable').DataTable();
                    
                       var aspfrom_Date = $('input[name="aspfrom_Date"]');
    var aspto_Date = $('input[name="aspto_Date"]');
    
    aspfrom_Date.datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true,
         orientation: "top"
    });
    
     aspto_Date.datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true,
    });
                    
                    
} );
            </script>


            
    <script>
        // ============================================================== 
    // Revenue Cards
    // ============================================================== 
    $("#sparkline-revenue").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#5969ff',
        fillColor: '#dbdeff',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ff407b',
        fillColor: '#ffdbe6',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#25d5f2',
        fillColor: '#dffaff',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#fec957',
        fillColor: '#fff2d5',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true,
    });
    </script>

    <script>
    $("#sparkline-1").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#5969ff',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ff407b',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#25d5f2',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ffc750',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true,
    });
    </script>
</body>
 
</html>


<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		//text: "Average Amount Spent on Real and Artificial X-Mas Trees in U.S."
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Close Tickets",
		indexLabel: "{y}",
		//yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Open Tickets",
		indexLabel: "{y}",
		//yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});

var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	theme: "light2",
	title:{
		//text: "Average Amount Spent on Real and Artificial X-Mas Trees in U.S."
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Paid",
		indexLabel: "{y}",
		//yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Due",
		indexLabel: "{y}",
		//yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]
});
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	theme: "light2",
	title:{
		//text: "Average Amount Spent on Real and Artificial X-Mas Trees in U.S."
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Paid",
		indexLabel: "{y}",
		//yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Due",
		indexLabel: "{y}",
		//yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints6, JSON_NUMERIC_CHECK); ?>
	}]
});

 var chart4 = new CanvasJS.Chart("chartContainer4", {
	//exportEnabled: true,
	animationEnabled: true,
	title:{
		//text: "State Operating Funds"
	},
	
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}%</strong>",
		indexLabel: "{name} - {y}%",
		dataPoints: [
			{ y: <?php echo json_encode($service_engineer_fee, JSON_NUMERIC_CHECK); ?>, name: "Travel Expenses", exploded: true },
			{ y: <?php echo json_encode($crm_Amount, JSON_NUMERIC_CHECK); ?>, name: "Service Cost" }
		]
	}]
          
          
});

chart.render();
chart1.render();
 chart2.render();
 chart4.render();
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();chart1.render();
}
 
}
</script>
<script>
$(document).ready(function(){
     $('#aspname').change(function(){ 
       
        var aspname=$('#aspname').val();
       alert(aspname);
        $.ajax({
            url : "<?php echo site_url('Crm/aspname');?>",
            method : "POST",
            data: {aspname: aspname},
           
            async : true,
            dataType : 'json',
            success: function(data){
                
                 alert(data);

            }
        });
        return false;
    });
});
</script>
    
           