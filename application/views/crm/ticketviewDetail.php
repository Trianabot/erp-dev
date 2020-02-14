<?php /* ?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Ticket Overview</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                    
                                        <li class="breadcrumb-item active" aria-current="page">Ticket Detail</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content" id="content">
                    
                    
                <div class='row'>
                     
                    <div class='col-xs-12 col-sm-12 col-md-12'>
                        <div class="card">
                            <div class="card-header"> Ticket No : <?php echo $ticket->ticket_Id;?></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                        
                    
                            <div class="card">
                            <div class="card-header"> Customer Detail </div>
                            <div class="card-body">
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12'>
                                        <h5> Customer Name : <?php echo $ticket->cust_Name;?></h5>
                                        <h5> Email : <?php echo $ticket->cust_Email;?></h5>
                                        <h5> Contact Number : <?php echo $ticket->cust_Mobile;?></h5>
                                        <h5> Alternative Contact : <?php echo $ticket->cust_Altmobile;?></h5>
                                        <h5> Address1 : <?php echo $ticket->cust_Address1;?></h5>
                                        <h5> Address2 : <?php echo $ticket->cust_Address2;?></h5>
                                        <h5> Town/city : <?php echo $ticket->cust_Town;?></h5>
                                        <h5> State : <?php echo $ticket->cust_State;?></h5>
                                        <h5> Pincode : <?php echo $ticket->cust_Pincode;?></h5>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    <div class="col-xl-6 col-md-6 col-sm-6 col-6">

                    
                            <div class="card">
                            <div class="card-header"> Product Detail </div>
                            <div class="card-body">
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12'>
                                        <h5>Brand Name : <?php echo $ticket->prod_Brand;?></h5>
                                        <h5>Category Name : <?php echo $ticket->prod_Category;?></h5>
                                        <h5>Product Name : <?php echo $ticket->prod_Name;?></h5>
                                        <h5>Purchase Date : <?php echo $ticket->prod_Datepurchase;?></h5>
                                        <h5>Product Serial No : <?php echo $ticket->prod_Serialno;?></h5>
                                        <h5>Product Warranty : <?php echo $ticket->prod_Warranty;?></h5>
                                        <h5>Store Retailer : <?php echo $ticket->prod_Storeretailer;?></h5>
                                        <h5>Case Type : <?php echo $ticket->prod_Casetype;?></h5>
                                        <h5>Priority : <?php echo $ticket->prod_Priority;?></h5>
                                        <h5>Remarks : <?php echo $ticket->prod_Remarks;?></h5>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
                
                <div class='row'>
                    <div class='col-xs-12 col-sm-12 col-md-12'>
                        <div class="card">
                            <div class='card-body'>
                            
                            
                        <?php 
                        
                        if($ticket->asp == ''){
                            echo "Still Not assigned ASP";
                        }else {
                            $asp_Id = $ticket->asp ;
                            $query = $this->db->query("select * from asp where asp_Id=$asp_Id");
                            $result = $query->row();
                                $asp_Name = $result->asp_Name;
                            echo "Asp Name : ".$asp_Name;
                        }
                        ?>
                        </div>
                            
                            <?php 
                            if($aspticketinfo){
                                
                                ?> 
                            
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <h5>Barcode Scan : <?php echo $aspticketinfo->barcode_scan;?></h5>
                                        <h5>Complaint Type : <?php echo $aspticketinfo->complaint_type;?></h5>
                                        <h5>Complaint Overview : <?php echo $aspticketinfo->complaint_overview;?></h5>
                                        <h5>Part Replace : <?php echo $aspticketinfo->part_replace;?></h5>
                                       
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <div class='row'>
                                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                            Bill Copy : <img src='<?php echo $aspticketinfo->bill_copy;?>' style='width:150px; height:150px'>
                                            </div>
                                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                             Warranty Card : <img src='<?php echo $aspticketinfo->warranty_card;?>' style='width:150px; height:150px'> 
                                            </div>
                                            <div class='col-xs-12 col-sm-4 col-md-4'>
                                            Customer Signature : <img src='<?php echo $aspticketinfo->customer_signature;?>' style='width:150px; height:150px'> 
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                            Video 1
                                                <video width="320" height="240" controls>
                                                  <source src="<?php echo $aspticketinfo->video_one;?>" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                            </div>
                                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                            Video 2 <video width="320" height="240" controls>
                                                  <source src="<?php echo $aspticketinfo->video_two;?>" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <?php
                               
                                
                                
                                
                                }else {
                                
                                
                                echo "Action has not taken";
                                
                                
                            }
                            ?>
                            </div>
                    </div>
                </div>
                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <a href="javascript:Clickprint()" style="font-size:20px;">  <button class="btn btn-rounded btn-primary float-right">Print</button> </a>
                                        </div>
                                    </div>
                    
                    
                    
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>
<?php */?>

<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Ticket View</h2>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"
                                                    class="breadcrumb-link">CRM</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Ticket View</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                            <div class="content" id="content">
                                
                            <div class="card">
                                <div class="card-header p-4">
                                   

                                    <div class="float-right">
                                        <h3 class="mb-0">Ticket Id #<?php echo $ticket->ticket_Id;?></h3>
                                        
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-6">
                                            <h3 class="text-dark mb-1" style='text-align:center'>Customer Detail</h3>
                                            <div class="row">
                                                <div class="col-md-12 text-dark mb-1" >
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Customer Name :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <?php echo $ticket->cust_Name;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Email :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <?php echo $ticket->cust_Email;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Contact Number :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <?php echo $ticket->cust_Mobile;?>
                                                        </div>
                                                    </div>
                                                   <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Alternative Contact :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <?php echo $ticket->cust_Altmobile;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Address1 :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                           <?php echo $ticket->cust_Address1;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Address2 : </h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                           <?php echo $ticket->cust_Address2;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Town/city : </h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                           <?php echo $ticket->cust_Town;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>State : </h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                           <?php echo $ticket->cust_State;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Pincode :  </h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                           <?php echo $ticket->cust_Pincode;?>
                                                        </div>
                                                    </div>
                                                    

                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 class="text-dark mb-1" style='text-align:center'>Product Detail</h3>
                                            <div class="row">
                                                <div class="col-md-12 text-dark mb-1">
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Brand Name : </h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                          <?php echo $ticket->prod_Brand;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Category Name : </h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                          <?php echo $ticket->prod_Category;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Product Name : </h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                          <?php echo $ticket->prod_Name;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Purchase Date :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                          <?php echo $ticket->prod_Datepurchase;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Product Serial No :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                          <?php echo $ticket->prod_Serialno;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Product Warranty :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                          <?php echo $ticket->prod_Warranty;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Store Retailer :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                          <?php echo $ticket->prod_Storeretailer;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Case Type :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                          <?php echo $ticket->prod_Casetype;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Priority :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                          <?php echo $ticket->prod_Priority;?>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                            <h5>Remarks :</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                          <?php echo $ticket->prod_Remarks;?>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                                    <h5>Asp Name</h5>
                                                </div>
                                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                                    <?php 

                                                            if($ticket->asp == ''){
                                                                ?> 
                                                           <div> Still Not assigned ASP </div>
                                                               <?php
                                                            }else {
                                                            $asp_Id = $ticket->asp ;
                                            $query = $this->db->query("select * from users where id=$asp_Id");
                                                            $result = $query->row();
                                                            $asp_Name = $result->userdept_Name;
                                                                ?> 
                                                            <div> <?php echo $asp_Name;?> </div>
                                                                <?php
                                                            
                                                            }
                                                            ?>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                                    <h5>Bar Code Scan</h5>
                                                </div>
                                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                                    <?php 
                                                    if($aspticketinfo){
                                                        echo $aspticketinfo->barcode_scan;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                                    <h5>Complaint Type</h5>
                                                </div>
                                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                                    <?php 
                                                    if($aspticketinfo){
                                                        if($aspticketinfo->complaint_type == '0'){
                                                            echo '';
                                                        }else {
                                                            echo $aspticketinfo->complaint_type;
                                                        }
                                                    }?>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                                    <h5>Complaint Overview</h5>
                                                </div>
                                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                                    <?php 
                                                    if($aspticketinfo){ 
                                                        echo $aspticketinfo->complaint_overview;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                            <div class='row'>
                                                
                                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Repair Info</h5>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                    if($aspticketinfo){ 
                                                        echo $aspticketinfo->part_replace;
                                                    }
                                                    ?>
                                                    </div>
                                            </div>
                                            <div class='row'>
                                                
                                                <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Repair Remarks</h5>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                    if($aspticketinfo){ 
                                                        echo $aspticketinfo->repair_Remarks;
                                                    }
                                                    ?>
                                                    </div>
                                            </div>
                                            <div class='row'>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Part Replace</h5>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                    if($aspticketinfo){ 
                                                        if($aspticketinfo->part_section == '0'){
                                                            echo 'Part Adjusted';
                                                        }else {
                                                            echo $aspticketinfo->part_section;
                                                        }
                                                        
                                                       
                                                    }
                                                    ?>
                                                    </div>
                                            </div>
                                            <div class='row'>
                                            <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Part Pendings</h5>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                    if($partpendings){ 
                                                        foreach($partpendings as $part){
                                                            ?> 
                                                                <ul>
                                                                <li><?php echo $part->partName?></li>
                                                                </ul>
                                                            <?php
                                                        }
                                                        
                                                    }
                                                    ?>
                                                    </div>
                                            </div>
                                            <?php 
                                            if($aspticketinfo){
                                                $warranty = $aspticketinfo->warrantycase_Type;
                                            if($warranty == 'Inwarranty'){ 
                                                        $warranty_Status = 'In Warranty';
                                                        ?> 
                                                        <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Product Warranty</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                        echo $warranty_Status;
                                                        
                                                        ?>
                                                        </div>
                                                        </div>
                                                        <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Service Cost</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                        echo $aspticketinfo->service_engineer_fee;
                                                        
                                                        ?>
                                                        </div>
                                                        </div>
                                                        <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Asp Amount</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                        echo $ticket->amt_textbox;
                                                        
                                                        ?>
                                                        </div>
                                                        </div>
                                                        <?php
                                            }else if($warranty == 'Outofwarranty'){
                                                    $warranty_Status = 'Out of Warranty';
                                                    ?>
                                                    <div class='row'>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Product Warranty</h5>
                                                    </div>
                                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                      echo $warranty_Status;
                                                    
                                                        ?>
                                                    </div>
                                            </div>
                                            <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Part Cost</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                        echo $aspticketinfo->part_cost;
                                                        
                                                        ?>
                                                        </div>
                                                        </div>
                                                        <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Part Cost GST (%) </h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                        echo $aspticketinfo->part_cost_gst;
                                                        
                                                        ?>
                                                        </div>
                                                        </div>
                                                   <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Part Discount (%)</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                        echo $aspticketinfo->part_discount_amt;
                                                        
                                                        ?>
                                                        </div>
                                                        </div>
                                                        <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Total Cost</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                        echo $aspticketinfo->total_cost;
                                                        
                                                        ?>
                                                        </div>
                                                        </div>     
                                            <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Service Cost</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                        echo $aspticketinfo->service_engineer_fee;
                                                        
                                                        ?>
                                                        </div>
                                                        </div>
                                                        <div class='row'>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <h5>Travel Expenses Amt</h5>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 col-md-6'>
                                                        <?php 
                                                        echo $ticket->amt_textbox;
                                                        
                                                        ?>
                                                        </div>
                                                        </div>
                                                        
                                            <?php
                                            }
                                            }
                                            
                                            ?>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class='row'>
                                        <div class='col-xs-12 col-sm-3 col-md-3'>
                                            <h5 class="text-dark mb-1">Bill Copy :</h5>
                                            <?php 
                                            if($aspticketinfo){
                                                ?> 
                                                <img src="<?php echo base_url()?>assets/images/billcopy/<?php echo $aspticketinfo->bill_copy;?>"
                                                        style="width: 150px; height: 150px;">
                                                <?php
                                            }
                                            ?>
                                            
                                        </div>
                                         <div class='col-xs-12 col-sm-3 col-md-3'>
                                             <h5 class="text-dark mb-1">Customer Signature :</h5>
                                         </div>
                                        <div class='col-xs-12 col-sm-3 col-md-3'>
                                            <h5 class="text-dark mb-1">Video1 :</h5>
                                        </div>
                                        <div class='col-xs-12 col-sm-3 col-md-3'>
                                            <h5 class="text-dark mb-1">Video2 :</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                <!--<div class="card-footer bg-white">-->
                                <!--    <button type="button" class="btn btn btn-success"-->
                                <!--        style="float: right;    border-radius: 10px;">print</button>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                                    <a href="javascript:Clickprint()" style="font-size:20px;">  
                                        <button class="btn btn-rounded btn-primary float-right">Print</button> 
                                    </a>
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
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>

              
    <script>
        function Clickprint(){
           var printContents = document.getElementById('content').innerHTML;

    //var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    //document.body.innerHTML = originalContents;
        }
    </script>  
            <!-- ============================================================== -->
            <!-- footer -->


           