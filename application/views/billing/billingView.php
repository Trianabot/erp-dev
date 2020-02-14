<style>.inline{
    display: flex;
}
.bg-color{
    background: #f4f4f4;
    height: 150px;
    padding: 10px;
}
.p-l-r{
    padding-left: 5px;
    padding-right: 5px;
}

.f-size{
    font-size: 38px;
    text-align: center;
}
.p-5{
    padding: 5px !important;
}

ul li{
    padding: 10px;
}
.p-10{
    padding: 10px !important;
}
.f-m-l{
    font-size: 25px;
    margin-left: 10px;
}
.bg{
    background: #f4f4f4;
}
.m-t-10{
    margin-top: 10px;
}
.h-450{
    height: 450px;
}
.h-220{
    height: 220px;
}
.border_text{
    border-bottom: 1px solid #007bff;
}
.inline{
    display: flex;
}
.bg-color{
    background: #f4f4f4;
    height: 150px;
    padding: 10px;
}
.p-l-r{
    padding-left: 5px;
    padding-right: 5px;
}

.f-size{
    font-size: 38px;
    text-align: center;
}
.p-5{
    padding: 5px !important;
}

ul li{
    padding: 10px;
}
.p-10{
    padding: 10px !important;
}
.f-m-l{
    font-size: 25px;
    margin-left: 10px;
}
.bg{
    background: #f4f4f4;
}
.m-t-10{
    margin-top: 10px;
}
.h-450{
    height: 450px;
}
.h-220{
    height: 220px;
}
.border_text{
    border-bottom: 1px solid #007bff;
}
</style>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Billing Overview</h2>
                            
                            <hr>
                        </div>
                    </div>
                </div>

            
                <div class="container-fluid">
	<div class="row">
        <div class="p-10">
            <label>From:</label>
            <input type="text" name='from_Date' id='from_Date' placeholder="From date">
            <i class="fa fa-calendar-o f-m-l" aria-hidden="true"></i>
        </div>
        <div class="p-10">
            <label>To:</label>
            <input type="text" name='to_Date' id='to_Date' placeholder="To date">
            <i class="fa fa-calendar-o f-m-l" aria-hidden="true"></i>
        </div>
        <div class="p-10">
            <div class="dropdown">
                <select name='billcity_Name' id='billcity_Name' class='form-control'>
                    <option value=''>City</option>
                    <?php 
                    if($cities){
                     foreach($cities as $city){
                         ?> 
                        <option><?php echo $city->city;?></option>
                        <?php
                     }   
                    }
                    ?>
                </select>
              </div>
        </div>
        <div class="p-10">
            <div class="dropdown">
                <select name='billdist_Name' id='billdist_Name' class='form-control'>
                    <option value=''>Distributors</option>
                    <?php 
                    if($dists){
                        foreach($dists as $dist){
                          ?> 
                        <option value='<?php echo $dist->distributor_name;?>'><?php echo $dist->distributor_name;?></option>
                        <?php  
                        }
                    }
                    ?>
                </select>
              </div>
        </div>
        <div class="p-10">
            <div class="dropdown">
                <select name='billdeal_Name' id='billdeal_Name' class='form-control'>
                    <option value='0'>Dealer</option>
                    <?php 
                    if($dealers){
                    foreach($dealers as $deal){
                    ?> 
                    <option value='<?php echo $deal->retailer_name;?>'><?php echo $deal->retailer_name;?></option>
                    <?php
                    }  
                    }
                    ?>
                </select>
              </div>
        </div>
        
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2 p-l-r">
                   <div class="bg-color">
                    <div class="inline">
                        <i class="fa fa-money p-5" aria-hidden="true"></i>
                        <h5>Total Bill Amount</h5>
                    </div>
                    <p class="f-size"><i class="fa fa-inr" aria-hidden="true"></i><span id="totalAmount"></span></p>
                   </div>
				</div>
				<div class="col-md-2 p-l-r">
                    <div class="bg-color">
                        <div class="inline">
                            <i class="fa fa-money p-5" aria-hidden="true"></i>
                            <h5>Pending Bill Amount</h5>
                        </div>
                        <p class="f-size"><i class="fa fa-inr" aria-hidden="true"></i><span id="totalPending"></span></p>
                    </div>
				</div>
				<div class="col-md-2 p-l-r">
                    <div class="bg-color">
                        <div class="inline">
                            <i class="fa fa-money p-5" aria-hidden="true"></i>
                            <h5>Overdue Bill Amount</h5>
                        </div>
                        <p class="f-size"><i class="fa fa-inr" aria-hidden="true"></i><span id='totalDue'>6500</span></p>
                    </div>
				</div>
				<div class="col-md-2 p-l-r">
                    <div class="bg-color">
                        <div class="inline">
                            <i class="fa fa-money p-5" aria-hidden="true"></i>
                            <h5>Uncleared Cheques Amount</h5>
                        </div>
                        <p class="f-size"><i class="fa fa-inr" aria-hidden="true"></i><span id="unclearChq"></span></p>
                    </div>
				</div>
				<div class="col-md-2 p-l-r">
                    <div class=" bg-color">
                        <div class="inline">
                            <i class="fa fa-money p-5" aria-hidden="true"></i>
                            <h5>Intransit Cheques Amount</h5>
                        </div>
                        <p class="f-size"><i class="fa fa-inr" aria-hidden="true"></i><span id="intransitChq"></span></p>
                    </div>
				</div>
				<div class="col-md-2 p-l-r">
                    <div class="bg-color">
                        <div class="inline">
                            <i class="fa fa-money p-5" aria-hidden="true"></i>
                            <h5>RTGS Amount</h5>
                        </div>
                        <p class="f-size"><i class="fa fa-inr" aria-hidden="true"></i><span id="rtgsAmt"></span></p>
                    </div>
				</div>
			</div>
			<div class="row m-t-10">
				<div class="col-md-7  p-l-r">  
                    <div class="bg ">
                        <h5 class="p-10">Net Amount Vs Pending Amount</h5>
                        <div class="border_text">
                            <button type="button" class="btn btn-primary " name='distibutorBtn' id='distibutorBtn'>Distributor</button>&nbsp;
                            <button type="button" class="btn btn-primary " name='dealerBtn' id='dealerBtn'>Dealer</button>
                        </div>
                        <div id="bar_chart" style=" height: 280px;"></div>
                    </div> 
                    <div class="bg m-t-10 ">
                        <h5 class="p-10">Total Billing Amount</h5>
                        <div id="curve_chart" style=" height: 320px;"></div>
                    </div>
				</div>
				<div class="col-md-5  p-l-r">
				     <div class="bg  ">
				    <h5 class="p-10">Amount by Transaction Type</h5>
                    <div id="piechart" style=" height: 320px;"></div>
                    </div>
                     <div class="bg  m-t-10">
                    <h5 class="p-10">Payment Ageling</h5>
                    <div id='donutchart' style="height: 320px;"></div>
                    </div>
                </div>
    <!--            <div class="col-md-6  p-l-r">-->
    <!--                <div class="bg h-450">-->
                        
    <!--                </div>-->
				<!--</div>-->
			     
		</div>
	</div>
	
</div>




            </div>
    </div>
</div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script>
    function load_monthwise_data(fromDate,toDate,distName,title){
        
        $.ajax({
        type: 'POST',
        data : {fromdate : fromDate, todate: toDate, distName: distName},
        url: "<?php echo base_url('Billing/getBills')?>",
          
        success: function (data) {
            
            var jsonData = $.parseJSON(data);
            drawMonthWise(data);
            //drawcitybarChart(data);
            $('#totalAmount').text(jsonData[0]['total']);
            $('#totalPending').text(jsonData[0]['totalPending']);
            $('#unclearChq').text(jsonData[1]['chqdueAmt']);
            $('#intransitChq').text(jsonData[2]['intransitchqdueAmt']);
            $('#rtgsAmt').text(jsonData[3]['rtgsAmt']);
            
       }
     });
        //alert(fromDate);
    }
    
    function load_city_data(fromDate,toDate,cityName,title){
        
        $.ajax({
        type: 'POST',
        data : {fromdate : fromDate, todate: toDate, cityName: cityName},
        url: "<?php echo base_url('Billing/getcityData')?>",
          
        success: function (data) {
            console.log(data);
            drawcitybarChart(data);

            
       }
     });
    }
    
    
    function drawcitybarChart(data1){
            var data = new google.visualization.DataTable();
  
      data.addColumn('string', 'Year');
      data.addColumn('number', 'Net Amount');
      data.addColumn('number', 'Pending');
            
            
            var jsonData = $.parseJSON(data1);
            
           // console.log(jsonData);
           var cityDet = jsonData[0];
           var dueData = jsonData[1];
           //console.log(dueData);
          // console.log(dueData['totalDue']);
           //$('#totalDue').text(dueData['totalDue']);
            var tot = 0;
            var totpen = 0;
            
      for (var i = 0; i < cityDet.length; i++) {
          tot += parseInt(cityDet[i].total);
           totpen += parseInt(cityDet[i].totalPending);              
            data.addRow([cityDet[i].party_name, parseInt(cityDet[i].total), parseInt(cityDet[i].totalPending)]);
      }
            //console.log(tot);
            
            $('#totalAmount').text(tot);
            $('#totalPending').text(totpen);
            
             var barchart_options = {
          legend: { position: 'bottom' },
                            title:'Barchart: How Much Pizza I Ate Last Night',  
                        
                       width:900,
                       height:300,
                       axes : {
                            x : {
                                0: {side : 'bottom'}
                            }
                       },
                       
                       };
        var barchart = new google.visualization.ColumnChart(document.getElementById('bar_chart'));
        barchart.draw(data, barchart_options);
        
        }
        
        function drawMonthWise(data){
            
            google.charts.load('current', {'packages':['corechart','line']});
            var jsonData = $.parseJSON(data);
            
        var piedata = new google.visualization.DataTable();
        piedata.addColumn('string', 'Year');
        piedata.addColumn('number', 'Sales');
            
            for (var i = 0; i < jsonData.length; i++) {
            piedata.addRow([jsonData[i]['order_id'], parseInt(jsonData[i]['chqdueAmt'])]);
      }
            
            var options = {
                title: 'Amount by Transaction Type',
                pieStartAngle: 100,
                slices: {
            
          },
                pieSliceText: 'value',
          legend: { position: 'bottom' },  
         
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(piedata, options);
            
        }
        
        
        </script>
    <script>
        $(document).ready(function(){
            
            $("#billdeal_Name").on("change", function () {
                //alert("test");
                    var fromDate = $('#from_Date').val();
                    var toDate = $('#to_Date').val();
                    var distName = this.value;
                    if(distName != ''){
                       load_monthwise_data(fromDate,toDate,distName,'title');
                       }
                    //   if(distName != ''){
                    //   load_city_data(fromDate,toDate,distName,'title');
                    //   }
            });
            
            $("#billcity_Name").on("change", function () {
                 //alert(this.value);
                 
                 var fromDate = $('#from_Date').val();
                    var toDate = $('#to_Date').val();
                    var cityName = this.value;
                 
                 if(cityName != ''){
                       load_city_data(fromDate,toDate,cityName,'title');
                       }
                 
                 
             });
            
            $('#distibutorBtn').click(function(){
                 $.ajax({
                     type: 'GET',
                      url: "<?php echo base_url('Billing/getdistData')?>",
                      success: function (data) {
                          //console.log(data);
                          drawdistChart(data);
                      }
                 });
            });
            
            $('#dealerBtn').click(function(){
                 $.ajax({
                     type: 'GET',
                      url: "<?php echo base_url('Billing/getdealerData')?>",
                      success: function (data) {
                          drawdistChart(data);
                          
                      }
                 });
            });
            
            
        });
        
        function drawdistChart(data1){
            google.charts.load('current', {'packages':['corechart','line']});
            
            
//            var jsonData = $.parseJSON(data);
//            console.log(jsonData);
            
            
            var data = new google.visualization.DataTable();
  
          data.addColumn('string', 'Year');
          data.addColumn('number', 'Net Amount');
          data.addColumn('number', 'Pending');
            
            
            var jsonData = $.parseJSON(data1);
            
      for (var i = 0; i < jsonData.length; i++) {
            data.addRow([jsonData[i].party_name, parseInt(jsonData[i].total), parseInt(jsonData[i].totalPending)]);
      }
            //console.log(tot);
            
            
            
             var barchart_options = {
          legend: { position: 'bottom' },
                            title:'Net Amount Vs Pending Amount',  
                        
                       width:900,
                       height:300,
                       axes : {
                            x : {
                                0: {side : 'bottom'}
                            }
                       },
                       
                       };
        var barchart = new google.visualization.ColumnChart(document.getElementById('bar_chart'));
        barchart.draw(data, barchart_options);
            
            
            
            
        }
        
        
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart','line']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      //google.charts.setOnLoadCallback(drawChart1);
        
        google.charts.setOnLoadCallback(lineChart);
    
        
        function lineChart() {
 
            $.ajax({
                 type: 'POST',
                url: "<?php echo base_url('Billing/getmonthBill')?>",
                success: function (data1) {
                    console.log(data1);
                     var jsonData = $.parseJSON(data1);
                    var linedata = new google.visualization.DataTable();
  
      linedata.addColumn('string', 'X');
      linedata.addColumn('number', 'Current Month');
      linedata.addColumn('number', 'Previous Month');
                    
                   var currentMonth = jsonData[0];
                   var previousMonth = jsonData[1];
                    
                    var newArray = [];
                    
    //                 for(var i = 0; i < currentMonth.length; i++ ){
    //                      newArray.push({"Current":currentMonth[i].amount,"Year": currentMonth[i].bill_date, "Previous":0});
    //                 }
    //                 for(var i = 0; i < previousMonth.length; i++){
                        
    //                         if(newArray[i].Previous != '' || newArray[i].Previous != undefined ){
    //                             newArray[i].Previous = previousMonth[i].amount;
    //                         }else {
    //                             newArray[i].Previous = 0;
    //                         }
                        
    //                 }
    //                  for (var i = 0; i < newArray.length; i++) {
    //                  linedata.addRow([newArray[i].Year, parseInt(newArray[i].Current), parseInt(newArray[i].Previous)]);
    //   }
    
    for(var i = 0; i < previousMonth.length; i++ ){
                         newArray.push({"Previous":previousMonth[i].amount,"Year": previousMonth[i].bill_date, "Current":0});
                    }
                   
                    for(var i = 0; i < currentMonth.length; i++){
                                newArray[i].Current = currentMonth[i].amount;
                        
                    }
                    
                     for (var i = 0; i < newArray.length; i++) {
                     linedata.addRow([newArray[i].Year, parseInt(newArray[i].Previous), parseInt(newArray[i].Current)]);
      }
      
      
      
      //console.log(newArray);
                       var options = {
                           'legend':'left',
                           backgroundColor : '#f4f4f4',
                            hAxis: { showTextEvery: 10, minTextSpacing: 30},
                           vAxis: {
    gridlines: {
        color: 'transparent'
    },
       curveType: 'function',   
                               
                               
},
                           
      };
                    var chart = new google.charts.Line(document.getElementById('curve_chart'));

      chart.draw(linedata, google.charts.Line.convertOptions(options));
                    
                    
                    
                    
                }
            });
  }
        
        
function drawChart() {
    
  var result = [];
        $.ajax({
        type: 'POST',
        url: "<?php echo base_url('Billing/getBillings')?>",
        success: function (data1) {
            var data = new google.visualization.DataTable();
  
      data.addColumn('string', 'Year');
      data.addColumn('number', 'Net Amount');
      data.addColumn('number', 'Pending');
            
            
            var jsonData = $.parseJSON(data1);
            var billAmt = jsonData[0];
            var unclearChq = jsonData[1];
            var intransitChq = jsonData[2];
            var rtgs = jsonData[3];
            
            $('#unclearChq').text(unclearChq.chqdueAmt);
            
            $('#intransitChq').text(intransitChq.intransitchqdueAmt);
            $('#rtgsAmt').text(rtgs.rtgsAmt);
            var tot = 0;
            var pendTot = 0;
      for (var i = 0; i < billAmt.length; i++) {
          tot += parseInt(billAmt[i].total);
          pendTot += parseInt(billAmt[i].totalPending);
            data.addRow([billAmt[i].party_name, parseInt(billAmt[i].total), parseInt(billAmt[i].totalPending)]);
      }
             $('#totalAmount').text(tot);
            $('#totalPending').text(pendTot);
            
             var barchart_options = {
                 backgroundColor : '#f4f4f4',
          legend: { position: 'bottom' },
                            title:'Net Amount Vs Pending Amount',  
                       axes : {
                            x : {
                                0: {side : 'bottom'}
                            }
                       },
                       
                       };
        var barchart = new google.visualization.ColumnChart(document.getElementById('bar_chart'));
        barchart.draw(data, barchart_options);

            
            
       }
     });
    
    
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url('Billing/pendingAgein')?>",
        success: function (data1) {
            //console.log(data1);
             var resultPaid = JSON.parse(data1);
            var piedata = new google.visualization.DataTable();
        piedata.addColumn('string', 'Year');
        piedata.addColumn('number', 'Sales');

             for (var i = 0; i < resultPaid.length; i++) {
            piedata.addRow([resultPaid[i]['aeigins'], parseInt(resultPaid[i]['Pending'])]);
      }

            var options = {
                'legend':'right',
                backgroundColor: '#f4f4f4',
             pieHole: 0.4,   
                pieStartAngle: 100, 
         pieSliceText: 'value',

                
      };
      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(piedata, options);
            
            
            
        }
        
    });
    
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url('Billing/getamountType')?>",
          
        success: function (data1) {
            
            
             var resultPaid = JSON.parse(data1);
            var piedata = new google.visualization.DataTable();
        piedata.addColumn('string', 'Year');
        piedata.addColumn('number', 'Sales');
  
             for (var i = 0; i < resultPaid.length; i++) {
            piedata.addRow([resultPaid[i]['payment_Mode'], parseInt(resultPaid[i]['paid'])]);
      }
            
            var options = {
                backgroundColor: '#f4f4f4',
                pieStartAngle: 100,
                slices: {
            
          },
                pieSliceText: 'value',
         // legend: { position: 'right' },  
        chart: {
        //  title: 'Company Performance',
        },
//        width: 900,
//        height: 500,
        legend: {position: 'labeled'}
                
         
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(piedata, options);
            
            
            
            
            
            
            
            
        }
     });
    
    
    
    
    
    }










  </script>

