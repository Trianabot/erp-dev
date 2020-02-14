 <div class="" style="background-color: blue; z-index: 99999; position: fixed; z-index: 9999999;margin-top:5px; ">
                <div class="container-fluid" style="background-color: white, z-index: 99999; position: fixed; " >
                    <div class="row bg-white" style="border-bottom:2px solid #3663fe;">
                        
                        <div class="col-md-12" style="padding:5px 0px 0px 0px;">
                            <div class="">
                                <ul class="nav-btn" style="padding: 0px;">
                                <li class=" <?=($this->uri->segment(1)==='Plant_Dashboard')?'active':''?> p-tb-10 p-lr-20"><a href="<?php echo base_url();?>Plant_Dashboard/manufacturing_details">Manufacturing</a></li>
                                <li class="p-tb-10 p-lr-20"><a href="<?php echo base_url();?>Plant_Dashboard/defects">Defects & Rejects</a></li>
                              
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                    <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url()?>Plant_Dashboard/Production_plan" ><i class="fa fa-fw fa-user-circle"></i>Production Plan</a>                              
                        </li>
                        <li class="nav-item ">
                                            <a class="nav-link" href="<?php echo base_url();?>Plant_Dashboard/prod_plan_edit" ><i class="fa fa-fw fa-user-circle"></i>Production Plan Edit</a>                              
                                        </li>
                        
                        
 </ul>
                    </div>
                </nav>
            </div>
        </div>
       <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Todays Plan Details </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products" class="breadcrumb-link">Plant</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Products/Lists" class="breadcrumb-link">Production Plan</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
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
                             </div>
                                <div class="card-body">
                                <table class="table" id="planTable">
                                <thead>
                                    <tr>
                                       <th scope="col">Serial No</th>
                                      
                                        <th scope="col">Date</th>
                                        <th scope="col">Product Name</th>
                                         <th scope="col">Quantity</th>
                                      
                                        <th scope="col">Supervisor Name</th>
										 <th scope="col">Line Supervisor Name</th>
                                        <th scope="col">CA Details</th>
                                        <th>Man Power</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
                                   $i=1;
                                    foreach($plan_details as $detail) {
                                        ?>
                                        <tr> 
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $detail->cur_date;?></td>
                                            <td><?php echo $detail->product;?></td>
                                            <td><?php echo $detail->product_qty;?></td>

                                             <td><?php echo $detail->supervisor_name;?></td>
											<td><?php echo $detail->line_supervisor_name;?></td>
                                             <td></td>
                                             <td></td>
                                           
                                              <?php
                                              foreach($ca_man_details as $plan) {?>
                                                
                                                
                                                <tr>
                                                <td></td><td></td><td></td><td></td><td></td><td></td>
                                                <td><?php echo $plan->ca_name;?></td>
                                                <td><?php echo $plan->man_name;?></td>
                                                </tr>
                                             <?php }
                                                ?>
                                              
                                           
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    
                                   ?>
                                </tbody>
                            </table>
                                </div>
                            </div>
                        </div>
                </div>
    </div>
</div>

  
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/b-print-1.5.4/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#planTable').DataTable({
            dom: 'Bltip',
            buttons: [
                'pdf', 'print', 'excel', 'copy', 'csv', 
           ]
        });
    } );
    </script>
       
        
      
      