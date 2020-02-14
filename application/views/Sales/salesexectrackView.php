<style>
    .formError{
        color:red;
    }
</style>


<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Executive Track </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Sales" class="breadcrumb-link">Sales</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Track</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class='card'>
                    <div class='card-body'>
                    <div class='row'>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                                <label> Sales Executive Tracking </label>
                                                
                                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                               
                                               
                                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                    
                        </div>
                </div>
                    </div>
                </div>
               
                
                    <div class='row'>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                                <label> Sales Executive Name </label>
                                                <select name="salesExecutive" id="salesExecutive" class="form-control">
                                                    <option value='0'>Select Executive</option>
                                                    <?php 
                                                    if($executives){
                                                        foreach($executives as $tech){
                                                            ?> 
                                  <option value="<?php echo $tech->executive_Id?>"><?php echo $tech->Executive_Name;?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                                <label> Date </label>
                                                <input type="text" class="form-control" name="visitDate" id="visitDate">
                                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                                                <input type="submit" value="Submit" name="visitSubmit" class="btn btn-primary btn-sm" style="margin-top:23px">
                                            </div>
                        </div>
                </div>
               
                <div class='row'>
<!--
                   <table id='stores_table'>
                        <thead>
                            <tr>
                                <th> City </th>
                                <th> Retailer Name </th>
                            </tr>
                       </thead>
                    </table>
                    <table id='visit_table'>
                            <thead>
                            <tr>
                                <th> City </th>
                               
                            </tr>
                       </thead>
                    </table>
-->
                    <table class="table" style="border:1px">
                        <thead>
                            <tr>
                                <th> City </th>
                                <th> Retailer Name </th>
                                <th> Visit Confirmation </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
  
  
                
            </div>
        </div>

