<?php error_reporting(0);?>
<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Stock</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
<!--
                            <li class="nav-divider">
                                Menu
                            </li>
-->
<li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url()?>Plant_Dashboard/Production_plan" ><i class="fa fa-fw fa-user-circle"></i>Production Plan</a>  
                        </li>
                        <li class="nav-item ">
                                            <a class="nav-link" href="<?php echo base_url();?>Plant_Dashboard/prod_plan_edit" ><i class="fa fa-fw fa-user-circle"></i>Production Plan Edit</a>                              
                                        </li>
                       

                           <li class="nav-item">
                             <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> Production History </a>
                             <div id="submenu-4" class="<?=($this->uri->segment(2)==='coolerDetails')?'collapse':''?> submenu" style="">
                                 <ul class="nav flex-column">
                                     <li class="nav-item ">
                                         <a class="nav-link" href="<?php echo base_url() ?>Plant_Dashboard/coolerDetails" ><i class="fa fa-fw fa-user-circle"></i>Cooler</a>                      
                                     </li>

                                     <li class="nav-item ">
                                         <a class="nav-link" href="<?php echo base_url() ?>Plant_Dashboard/washerDetails" ><i class="fa fa-fw fa-user-circle"></i>Washer</a>                              
                                     </li>
                                 </ul>
                             </div>
                         </li>

                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


 <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Washers History </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Plant_Dashboard/manufacturing_details" class="breadcrumb-link">Plant </a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Washers Hisotry</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               

                        <div class="card">
                       
                                
                               
                                <div class="card-body">
                                      <table class="table" id="brandTable">
                               <thead>
                                   <tr>
                                       <th scope="col">Date</th>
                                        <th scope="col">Brand Name</th>
                                       <th scope="col">Product Name</th>
                                       <th scope="col">Product Color</th>
                                       <th scope="col">Quantity</th>
                                       <th scope="col">Supervisior</th>
                                       <th scope="col">Line supervisor</th>
                                       <th scope="col">Manpower</th>
                                       <th scope="col">Actual Quantity</th>
                                   <th scope="col">Barcode Start</th>
                                   <th>Barcode End</th>
                                   <th> View </th>
                                    <th> Edit </th>
                                     <th> Delete </th>
                                   </tr>
                               </thead>
                               <tbody>
                               <?php 
                               $i=0;
                               
                               foreach($washers as $wash){
                                    ?>
                                    <tr> 
                                       
                                        <td> <?php echo $wash->cur_date;?></td>
                                         <td> <?php echo $wash->company_name;?></td>
                                        <td> <?php echo $wash->product;?></td>
                                         <td> <?php echo $wash->product_color;?></td>
                                          <td> <?php echo $wash->product_qty;?></td>
                                        <td> <?php echo $wash->supervisor_name;?></td>
                                        <td> <?php echo $wash->line_supervisor_name;?></td>
                                       
                                        <td><?php echo $wash->manpower_Qty;?></td>
                                       
                                          <?php
                                          
                                         for($j=0;$j<$count;$j++){
                                                      if($j == 0){
                                                          ?> 
                                                          <td><?php  echo $barcodes[$i][$j]->actual_qty;?></td>
                                                     <td><?php  echo $barcodes[$i][$j]->barcode_start;?></td>
                                                     <td><?php  echo $barcodes[$i][$j]->barcode_end;?></td>
                                                          <?php
                                                      }else {
                                                          ?> 
                                                       
                                                          <?php
                                                      }
                                                  }
                                                  
                                                  ?>
                                                 <!--<td></td>-->
                                                 <!--<td></td>-->
                                                 <!--<td></td>-->
                                                 
                                                 
                                                  <td> <a href="<?php echo base_url()?>Plant_Dashboard/washerpdf/<?php echo $wash->id?>" class="btn btn-info btn-xs"> PDF</a> </td>
                                             <td> <a href="<?php echo base_url()?>Plant_Dashboard/washeredit/<?php echo $wash->id?>" class="btn btn-info btn-xs" style="
    background-color: green;
    border-color: green;
"> 
                                                  Edit</a> </td>
                                                 
                                                  <td>
                                                  <a href="javascript:;" onclick="return isconfirm('<?php echo base_url()?>Plant_Dashboard/washers/<?php echo $wash->id;?>');" class="btn btn-info btn-xs" style="
    background-color: red;
    border-color: red;
">Delete</a>
                                             </td>
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
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>

<script>
    function isconfirm(url_val){
    //alert(url_val);
    if(confirm('Are you sure ?') == false)
    {
        return false;
    }
    else
    {
        location.href=url_val;
    }
}
</script>

