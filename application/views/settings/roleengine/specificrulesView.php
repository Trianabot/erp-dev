
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Specific Rules</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Setting" class="breadcrumb-link">Setting</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Specific Rules view </li>
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
                                        <h3> Specific Rules</h3>
                                    </div>
                                    <div class='col-xs-12 col-sm-6 col-md-6'> 
                                     <a href="<?php echo base_url()?>Setting/addspecificRule" class='btn btn-primary' style='float:right'> Add Specific Rules </a>
                                    </div>
                                </div>
                               
                                <table class="display nowrap" id="ticketTable" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S No</th>
                                                <th>ASP Name</th>
                                                <th>Category Name</th>
                                                <th>Sub Category</th>
                                                <th>Free</th>
                                                <th>Rate after free</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                            $i =1; 
                                            if($rules){
                                               foreach($rules as $rule){
                                                   ?>
                                                    <tr>
                                                        <td> <?php echo $i;?></td>
                                                        <td> <?php echo $rule->asp_Name;?></td>
                                                        <td> <?php echo $rule->aspallowcategory_Name;?></td>
                                                        <td> <?php echo $rule->aspallowsubcategory_Name;?></td>
                                                        <td> <?php echo $rule->aspallow_Free;?></td>
                                                        <td> <?php echo $rule->aspallowrateafter_Free;?></td>
                                                        <td>
                                                            <a href='<?php echo base_url()?>Setting/editspecific_Rule/<?php echo $rule->specificrules_Id?>'>Edit</a>
                                                            <a class="specificrule_delete" data-emp-id="<?php echo $rule->specificrules_Id;?>" href="javascript:void(0)">Delete</a>
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


