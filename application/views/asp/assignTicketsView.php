

<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Assign Tickets</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Assign Tickets</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                                                if($this->session->tempdata("add_success"))
                                                {
                                                echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("add_success")."</div>";
                                                }
                                                ?>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="display nowrap" id="ticketTable" style="width:100%">
                                        <thead style="color:white">
                                            <tr>
                                               
                                                <th colspan="3" style='background-color: #36a1bb; text-align: center'>Customer</th>
                                                <th colspan="4" style='background-color: #f9c002; text-align: center'>Complaint</th>
                                                
                                                
                                                <th rowspan="2" style='background-color: #6d767f'>Assign</th>
                                               
                                            </tr>
                                            <tr>
                                                <th style='background-color: #36a1bb'>Name</th>
                                                <th style='background-color: #36a1bb'>City</th>
                                                <th style='background-color: #36a1bb'>Mobile</th>
                                                <th style='background-color: #f9c002'>Priority</th>
                                                <th style='background-color: #f9c002'>Number</th>
                                                <th style='background-color: #f9c002'>Date</th>
                                                <th style='background-color: #f9c002'>Service Engineer</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                          if($tickets){
                                                foreach($tickets as $ticket){
                                                    ?> 
                                                   <tr>
                                                       <td><?php echo $ticket->cust_Name;?></td>
                                                        <td><?php echo $ticket->cust_Town;?></td>
                                                        <td><?php echo $ticket->cust_Mobile;?></td>
                                                        <td><?php echo $ticket->prod_Priority;?></td>
                                                        <td><?php echo $ticket->ticket_Id;?></td>
                                                        <td><?php echo $ticket->prod_Datepurchase;?></td>
                                                       <td><?php 
                                                           
                                                               $id = $ticket->service_Engineer;
                                                               //vgr
                                                               if($id == null){
                                                                   
                                                               }else{
                                                               
                                                               $query=$this->db->query("select * from users where id=$id");
                                                               $res = $query->row();
                                                               echo $res->contact_Person;}
                                                           
                                                        ?></td>
                                                       
                                                      
                                                       <td>
                                                       
                                                       <form method="post" action="<?php echo base_url()?>Asp/aspAssign" >
                                                       <?php 
                                                       if($ticket->service_Engineer == null){?>
                                                        <select class="form-control" name="service_engineer">
                                                            <?php 
                                                            echo '<option value="">  Please Select  </option>';
                                                            foreach($service_engineer as $row)
                                                            { ?>
                                                             <option value="<?php echo $row->id;?>"><?php echo $row->contact_Person;?></option>;
                                                           <?php }
                                                        
                                                            ?>
                                                            </select>
                                                       <input type="hidden" name="ticket_id" value="<?php echo $ticket->ticket_Id; ?>">
                                                       <input type="hidden" name="asp_name" value="<?php echo $asp_name; ?>">
                                                 
                                                       <input type="submit" name="assign" value="Assign"   />
                                                       <?php } ?>
                                                       </form>
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





