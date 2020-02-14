<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Sales</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>Crm" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                            
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> ASP </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/Asp" ><i class="fa fa-fw fa-user-circle"></i> ASP </a>
                                    </li>
                                    
                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" href="<?php echo base_url()?>Crm/Serviceengineer" ><i class="fa fa-fw fa-user-circle"></i> Service Engineer </a>         -->
                                    <!--</li>-->
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/Stockview" ><i class="fa fa-fw fa-user-circle"></i> Stock View </a>         
                                    </li>
                                    
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i> Service Calls </a>
                                <div id="submenu-3" class="<?=($this->uri->segment(2)==='Listretailerorders')?'collapse':''?> submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                         <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/raiseTicket" ><i class="fa fa-fw fa-user-circle"></i> Raise Ticket </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url()?>Crm_Dashboard/ticketHistory" ><i class="fa fa-fw fa-user-circle"></i> Ticket History </a>         
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
                            <h2 class="pageheader-title">Ticket History</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
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
                                                <th colspan="4" style='background-color: #6d767f; text-align: center'>ASC</th>
                                                <th colspan="2" style='background-color: #36a1bb; text-align: center'>TE</th>
                                                <th rowspan="2" style='background-color: #6d767f'>View</th>
                                                <th rowspan="2" style='background-color: #6d767f'>Happy Calling</th>
                                            </tr>
                                            <tr>
                                                <th style='background-color: #36a1bb'>Name</th>
                                                <th style='background-color: #36a1bb'>City</th>
                                                <th style='background-color: #36a1bb'>Mobile</th>
                                                <th style='background-color: #f9c002'>Priority</th>
                                                <th style='background-color: #f9c002'>Number</th>
                                                <th style='background-color: #f9c002'>Date</th>
                                                <th style='background-color: #f9c002'>Closed</th>
                                                <th style='background-color: #6d767f'>Name</th>
                                                <th style='background-color: #6d767f'>SE Name</th>
                                                <th style='background-color: #6d767f'>SE Contact</th>
                                                <th style='background-color: #6d767f'>Status</th>
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
<!--                                                            <button data-toggle="modal" data-target="#myModal"> <i class="fa fa-bars" aria-hidden="true" title="reassign asp"></i></button>-->
                                                            <a class="update_Asp" onclick="edit_asp(<?php echo $ticket->ticketgenerate_Id;?>)"  href="javascript:void(0)"><i class="fa fa-bars" aria-hidden="true" title="reassign asp"></i></a>
                                                            <a href="<?php echo base_url()?>Crm_Dashboard/editticket/<?php echo $ticket->ticketgenerate_Id;?>"><i class="far fa-edit" aria-hidden="true" title="edit"></i></a>
                                                            <a class="ticket_delete" data-emp-id="<?php echo $ticket->ticketgenerate_Id;?>" href="javascript:void(0)"><i class="fa fa-trash" aria-hidden="true" title="delete"></i></a>
                                                        </td>
                                                        <td><?php echo $ticket->cust_Name; ?></td>
                                                        <td><?php echo $ticket->cust_Town; ?></td>
                                                        <td><?php echo $ticket->cust_Mobile; ?></td>
                                                        <td><?php echo $ticket->prod_Priority; ?></td>
                                                        <td><?php echo $ticket->ticket_Id; ?></td>
                                                        <td><?php echo $ticket->prod_Datepurchase; ?></td>
                                                        <td><?php 
                                                            if($ticket->ticket_Closedate){
                                                                echo $ticket->ticket_Closedate;
                                                            }else {
                                                                echo "<h5 style='color:green'>Process</h5>";
                                                            }
                                                        ?></td>
                                                        <?php 
                                                       if($ticket->asp){
                                                           $result = $this->db->query("select * from asp where asp_Id=$ticket->asp");
                                                           $res = $result->row();
                                                           ?> 
                                                               <td></td>
                                                        <td><?php echo $res->asp_Name;?></td>
                                                        <td><?php echo $res->asp_Contact;?></td>
                                                           <?php
                                                       }else {
                                                            ?> 
                                                               <td></td>
                                                        <td></td>
                                                        <td></td>
                                                           <?php
                                                       }
                                                        
//                                                        echo "<pre>";
//                                                        print_r($res); die; 
                                                        ?>
                                                        
                                                        <td>
                                                            <?php 
                                                            
                                                            if($ticket->ticket_Closedate){
                                                                echo "<h5 style='color:green'>Completed</h5>";
                                                            }else if($ticket->asp == '') {
                                                                echo "<h5 style='color:green'>Inprogress</h5>";
                                                            }else {
                                                                echo "<h5 style='color:green'>Assigned</h5>";
                                                            }
                                                            ?></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <input type="button" name="view" value="view" id="<?php echo $ticket->ticket_Id; ?>" class="btn btn-info btn-xs view_data" />
                                                            </td>
                                                            <td>
                                                                 <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="checkbox" name="happy_Calling" class="custom-control-input" value="<?php echo $ticket->ticket_Id; ?>|Yes" <?php if($ticket->happyCalling == 'Yes') { echo "checked=checked"; }?>><span class="custom-control-label">Yes</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="checkbox" name="happy_Calling" class="custom-control-input" value='<?php echo $ticket->ticket_Id; ?>|No' <?php echo ($ticket->happyCalling == 'No') ?  "checked" : "" ;  ?>><span class="custom-control-label">No</span>
                                                    </label>
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



<div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reassign ASP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <form action="#" id="form" class="form-horizontal">
                           <input type="hidden" value="" name="ticketgenerate_id"/>
                        <div class="form-group row">
                            
                            <label class="col-md-2 col-form-label">Select ASP</label>
                            <div class="col-md-6">
                                <select name="asp_Name" class="form-control">
                                    <option value="0">Select ASP</option>
                                    <?php 
                                    foreach($asps as $asp){
                                        ?> 
                                        <option value="<?php echo $asp->asp_Id;?>"><?php echo $asp->asp_Name;?></option>    
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                       </form>
                       
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" onclick="save()" class="btn btn-primary">Reassign ASP</button>
                  </div>
                </div>
              </div>
            </div>

 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     
                     <h4 class="modal-title">Ticket Overview</h4>  
                </div>  
                <div class="modal-body" id="">
                    Product Complaint : <span id="prod_Remakrs"></span>   <br>
                    ASP Feedback : <span id="complaint_overview"></span> 
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