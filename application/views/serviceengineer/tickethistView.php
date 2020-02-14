

<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Ticket History</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>ServiceEngineer" class="breadcrumb-link">Service Engineer</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Ticket History</li>
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
                                <table class="display nowrap" id="ticketTable" style="width:100%">
                                        <thead style="color:white">
                                            <tr>
                                               <th rowspan="2" style='background-color: #6d767f'>Action</th>
                                                <th colspan="3" style='background-color: #36a1bb; text-align: center'>Customer</th>
                                                <th colspan="4" style='background-color: #f9c002; text-align: center'>Complaint</th>
                                                
                                                
                                                <th colspan="2" style='background-color: #36a1bb;text-align: center'>TE</th>
                                                <th rowspan="2" style='background-color: #6d767f'>View</th>
                                               
                                            </tr>
                                            <tr>
                                                <th style='background-color: #36a1bb'>Name</th>
                                                <th style='background-color: #36a1bb'>City</th>
                                                <th style='background-color: #36a1bb'>Mobile</th>
                                                <th style='background-color: #f9c002'>Priority</th>
                                                <th style='background-color: #f9c002'>Number</th>
                                                <th style='background-color: #f9c002'>Date</th>
                                                <th style='background-color: #f9c002'>Closed</th>
                                                <th style='background-color: #36a1bb'>Approved</th>
                                                <th style='background-color: #36a1bb'>Posted</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                          if($tickets){
                                                foreach($tickets as $ticket){
                                                    ?> 
                                                   <tr>
                                                       <td>
                                                        <?php 
                                                        if($ticket->status === 'Ticket Closed'){
                                                            ?> 
                                                             
                                                            <a href="javscript:void(0)" onclick="return false;"><i class="far fa-edit" aria-hidden="true" title="edit"></i></a>
                                                           
                                                            <?php
                                                        }else {
                                                            ?> 
                                                             
                                                            <a href="<?php echo base_url()?>ServiceEngineer/editticket/<?php echo $ticket->ticket_Id;?>"><i class="far fa-edit" aria-hidden="true" title="edit"></i></a>
                                                            
                                                            <?php
                                                        }
                                                        ?>
                                                        </td>
                                                       
                                                       <td><?php echo $ticket->cust_Name;?></td>
                                                        <td><?php echo $ticket->cust_Town;?></td>
                                                        <td><?php echo $ticket->cust_Mobile;?></td>
                                                        <td><?php echo $ticket->prod_Priority;?></td>
                                                        <td><?php echo $ticket->ticket_Id;?></td>
                                                        <td><?php echo $ticket->prod_Datepurchase;?></td>
                                                       <td><?php 
                                                            if($ticket->ticket_Closedate){
                                                                echo $ticket->ticket_Closedate;
                                                            }else {
                                                                echo "<h5 style='color:green'>Process</h5>";
                                                            }
                                                        ?></td>
                                                       
                                                       
                                                       
                                                       <td></td>
                                                       <td></td>
                                                       <td>
                                                           <?php 
                                                            if($ticket->ticket_Closedate){
                                                                ?> 
                                                                <a href='<?php echo base_url()?>ServiceEngineer/ticketView/<?php echo $ticket->ticket_Id; ?>' class="btn btn-primary btn-xs">Close</a>
                                                                <?php
                                                            }else {
                                                                ?> 
                                                                <a href='<?php echo base_url()?>ServiceEngineer/ticketView/<?php echo $ticket->ticket_Id; ?>' class="btn btn-primary btn-xs">Process</a>
                                                                <?php
                                                            }
                                                            ?>
                                                            
                                                            
                                                       
                                                       </td>
                                                       
                                                       
                                                    </tr>
                                                    <?php
                                                }
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

 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog modal-xl">  
           <div class="modal-content modal-dialog-scrollable" style="background-color:#e9ecef">  
                <div class="modal-header col-md-12">  
                     
                     <h2 class="modal-title">Ticket Overview</h2>  
                </div>  
                <div class="modal-body" id="">
                    <div style="background-color:white">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            Product Complaint : <span id="prod_Remakrs"></span>   
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            ASP Feedback : <span id="complaint_overview"></span>
                        </div>
                    </div>
                    </div>
                    <div class="card m-t-10">
                       
                        <div class="col-xs-12 col-md-12 col-12 text-center">
                        <h3>Soft Copy</h3>
                        </div>
                        <div class="card-body">
                             <div class="row" >
                        <div class="col-xs-12 col-sm-4 col-md-4">
                             Bill Copy Image: 
                             <span id="ajax_Bill"> </span>
                    
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                             Warranty Card :
                             <span id="ajax_Warranty"> </span>
                  
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            Customer Signature :
                            <span id="ajax_Custsign"> </span>
                   
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="card text-center m-t-20">
                      <h3 class="m-t-20">Videos</h3> 
                    
                    <div class="card-body">
                     <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <span id="ajax_video"> </span>
                        </div>
                         <div class="col-xs-12 col-sm-6 col-md-6">
                            <span id="ajax_Second"> </span>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    
                   
                   
                    
                    <!-- <video width="300" height="200" id="aspVideo1" controls>
	 <source src="<?php echo base_url()?>assets/videos/short.mp4" type="video/mp4"> 
	</video>  -->
                
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="dataModal1" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     
                     <h4 class="modal-title">TIcket Overview</h4>  
                </div>  
                <div class="modal-body" id="">
                   <h4>In Progress</h4>
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
<div id="happycallModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     
                     <h4 class="modal-title">Happy Calling Overview</h4>  
                </div>  
                <div class="modal-body" id="call_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  



<div class="modal fade" id="techassignModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Assign Technician</h5>
                    <button type="button" class="close" id="mod_cls" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <form role="form" action="" id="form" class="form-horizontal">
                           <input type="hidden" value="" name="ticketgenerate_id"/>
                           <input type='hidden' value='' name='asp_Id'>
                           <input type='hidden' value="" name='ticketassign_Id'>
                        <div class="form-group row">
                            
                            <label class="col-md-2 col-form-label">Select Technician</label>
                            <div class="col-md-6">
                                <select name="asp_Name" id="aspdata_Name" class="form-control">
                                    <option value="0">Select ASP</option>
                                    
                                </select>
                            </div>
                        </div>
                       </form>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" onclick="saveTech()" class="btn btn-primary">Reassign ASP</button>
                  </div>
                </div>
              </div>
            </div>

 <div id="ticketassignModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     
                     <h4 class="modal-title">Ticket Assign</h4>  
                </div>  
                <div class="modal-body" id="">
                   <h4>Service engineer has assigned</h4>
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>


 <div class="modal fade" id="raiseticketeditModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Raise Ticket</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('editticket_report')?></h5>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



