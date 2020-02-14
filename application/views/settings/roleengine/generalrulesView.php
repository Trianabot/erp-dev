
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Travel Expenses</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Crm" class="breadcrumb-link">CRM</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">General Rules</li>
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
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-6 col-md-6'>
                                        <h3> General Rules</h3>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'> 
                                     <a href="<?php echo base_url()?>Setting/addgeneralRule" class='btn btn-primary' style='float:right'> Add General Rules </a>
                                    </div>
                                </div>
                               
                                <table class="display nowrap" id="ticketTable" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S No</th>
                                                <th>Category Name</th>
                                                <th>Sub Category</th>
                                                <th>Free</th>
                                                <th>Rate after free</th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $i = 1; 
                                           if($rules){
                                               foreach($rules as $rule){
                                                   ?> 
                                            <tr>
                                                <td> <?php echo $i;?> </td>
                                                 <td> <?php echo $rule->aspallowcategory_Name;?> </td>
                                                 <td> <?php echo $rule->aspallowsubcategory_Name;?> </td>
                                                  <td> <?php echo $rule->aspallow_Free;?> </td>
                                                 <td> <?php echo $rule->aspallowrateafter_Free;?> </td>
                                                 <td> 
                                        <a href='<?php echo base_url()?>Setting/editgeneralRule/<?php echo $rule->generalrules_Id;?>'>Edit</a>
                                                    <a class="generalrule_delete" data-emp-id="<?php echo $rule->generalrules_Id;?>" href="javascript:void(0)">Delete</a>
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
            </div>
        </div>


