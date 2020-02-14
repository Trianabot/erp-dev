
        
   
        
        
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Schemes List </h2>

                            
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                            <div class="row margin0 grey">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <span class="table-title">Schemes Lists</span>
                                <a href="<?php echo base_url()?>Schemes/addScheme"> <h5 class="card-header1">  Add Scheme </h5> </a>
                                </div>
                            </div>
                               
                                
                               
                                <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Serial No</th>
                                                <th scope="col">Scheme Name</th>
                                                <th scope="col">Product Qty</th>
                                                <th scope="col">From Date</th>
                                                <th scope="col">To Date</th>
                                                <th scope="col">Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           
                                           if($schemes){
                                                $i=1;
                                            foreach($schemes as $s) {
                                               
                                                ?>
                                                <tr> 
                                                <td><?php echo $i;?></td>
                                                    <td><?php echo $s->scheme_name;?></td>
                                                    <td><?php echo  $s->product_qty;?></td>
                                                    <td><?php echo  $s->scheme_duration;?></td>
                                                      <td><?php echo  $s->to_date;?></td>
                                                    
                                                    <td> 
                                                        
                                                        <?php 
                                                       $start_Date = strtotime($s->scheme_duration);
                                                       $date = strtotime(date('Y-m-d'));
                                                
                                                        if($start_Date > $date){
                                                            ?> 
                                                        <a href="<?php echo base_url()?>Schemes/editScheme/<?php echo $s->scheme_name;?>" class="editbtn"> Edit </a>
                                                            <?php
                                                        }
                                                        ?>
                            
                            <a class="deletebtn delete_Scheme" data-emp-id="<?php echo $s->id;?>" href="javascript:void(0)">Inactive</a>
                                                        
<!--                                                        <a href="#" class="deletebtn"> Delete </a>-->
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
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


<div class="modal fade" id="editschememodal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">Scheme</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('editscheme_report')?></h5>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    
    <div class="modal fade" id="newschememodal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">                   
                    <h4 class="modal-title">New Scheme</h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center"><?php echo $this->session->flashdata('newscheme_Add')?></h5>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    
                
            <!-- ============================================================== -->
            <!-- footer -->


           